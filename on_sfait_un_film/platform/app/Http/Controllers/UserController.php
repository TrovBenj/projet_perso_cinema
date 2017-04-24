<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Validator;

class UserController extends Controller
{
    //Enregistrement d'un utilisateur
    public function store(Request $request)
    {
        $validation = $this->validator($request->all());
        if(!$validation->fails()){

            $user = new User;
            $user->pseudo = $request->input('pseudo');
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();
            Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true);
            return redirect('/home');
        }
        else
        {
            return redirect('/register')->withInput()->withErrors($validation);
        }
    }

    //Edition du profil
    protected function edit(Request $request)
    {
        if(Auth::check()) {
            $data['user'] = Auth::User();
            return view('user.edit', $data);
        }
        else {
            return redirect('/home');
        }
    }

    //mise à jour du profil
    public function update(Request $request)
    {
        $validation = $this->validator($request->all());

        if(!$validation->fails()){
            $user = Auth::User();
            $user->pseudo = $request->input('pseudo');
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->description = $request->input('description');
            $user->save();

            return redirect('/edit');
        }
        else
        {
            return redirect('/edit')->withInput()->withErrors($validation);
        }
    }

    //Modifier le password sur la page d'edition du profil
    public function passwordUpdate(Request $request)
    {

        $user = Auth::User();
        if(Hash::check($request->input('old_password'),$user->password)) {
            $validator = Validator::make($request->all(),['password' => 'required|min:6|confirmed']);

            if(!$validator->fails()){
                $user->password = Hash::make($request->input('password'));
                $user->save();
                return redirect('/edit');
            }
            else
            {
                return redirect('/edit')->withInput()->withErrors($validator);
            }
        }
        else {
            $errors['old'] = "wrong password";
            return redirect('/edit')->withErrors($errors);
        }

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'pseudo' => 'bail|required|alpha_num|min:3|max:25|unique:users,pseudo,' . Auth::id(),
            'first_name' => 'bail|required|alpha_num|min:3',
            'last_name' => 'bail|required|alpha_num|min:2|max:25',
            'email' => 'bail|required|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'sometimes|bail|required|min:6|confirmed',
            'description' => 'sometimes|min:20|max:1000'
        ]);
    }
    protected function index()
    {
        $data['users'] = User::orderBy('pseudo')->paginate(5);
        return view('user.index',$data);
    }
    public function storeMovie(Request $request)
    {
        $user = Auth::User();
        $userMovies = json_decode($user->my_movies);
        $newMovie = intval($request->input('movie'));
        $index = array_search($newMovie, $userMovies);
        if ($index === false) {
            $userMovies[] = $newMovie;
            $user->my_movies = json_encode($userMovies);
            $user->save();
        }
        return redirect()->back();
    }
    public function deleteMovie(Request $request)
    {
        $user = Auth::User();
        $userMovies = json_decode($user->my_movies);
        $myMovie = intval($request->input('mymovie'));
        $index = array_search($myMovie, $userMovies);
        if ($index !== false) {
            unset($userMovies[$index]);
            $userMovies = array_values($userMovies);
            $user->my_movies = json_encode($userMovies);
            $user->save();
        }
        return redirect()->back();
    }
    protected function myMovies()
    {
        if(Auth::check()) {
            $data['user'] = Auth::User();
            $mymovies = json_decode(Auth::User()->my_movies);
            if(!empty($mymovies)) {
                $data['movies'] = Movie::select('*')->whereIn('id',$mymovies)->orderBy('title','asc')->paginate(5);
            }
            else {
                $data['empty'] = true;
            }
            return view('user.mymovies',$data);
        }
        else {
            return redirect('/');
        }
    }
    protected function userIndex()
    {
        if(Auth::check()) {
            $data['user'] = Auth::User();
            $mymovies = json_decode(Auth::User()->my_movies);
            $length = count($mymovies);
            $data['nbmovies'] = $length;
            if(!empty($mymovies)) {
                $data['movies'] = Movie::select('*')->where('id',$mymovies[$length-1])->get();
            }
            else {
                $data['empty'] = true;
            }
            return view('user.home',$data);
        }
        else {
            return redirect('/');
        }
    }
}