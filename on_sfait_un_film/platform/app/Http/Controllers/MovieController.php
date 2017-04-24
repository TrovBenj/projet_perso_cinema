<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use Auth;

class MovieController extends Controller
{
    protected function searchMovie() {
        return view('movie.search');
    }
    public function searchResults(Request $request)
    {
        $tags = $request->input('tags');
        if(!empty($tags)) {
            if(Auth::guest()) {
                $data['movies'] = Movie::select('*')->where(function ($query) use ($tags) {
                    foreach ($tags as $tag) {
                        $query->where('tags', 'LIKE', '%' . $tag . '%');
                    }
                })->orderBy('title', 'asc')
                    ->paginate(6)
                    ->appends(['tags' => $tags]);

            }
            elseif(Auth::check()) {
                $user = Auth::User();
                $mymovies = json_decode($user->my_movies);
                $data['movies'] = Movie::select('*')->whereNotIn('id', $mymovies)
                    ->where(function ($query) use ($tags) {
                        foreach ($tags as $tag) {
                            $query->where('tags', 'LIKE', '%' . $tag . '%');
                        }
                    })
                    ->orderBy('title', 'asc')
                    ->paginate(6)
                    ->appends(['tags' => $tags]);

            }
        }
        else {
            $data['movies'] = Movie::orderBy('title', 'asc')
                ->paginate(6);
        }
        return view('movie.searchResults', $data);
    }
}
