@extends('layouts.app')
@section('content')
    <div class="globalmymovie">
        @if(isset($movies))
            @foreach($movies as $movie)
                <div class="panel panel-default backgroundvhs">
                    <div class="panel mymovies">
                        <div class="col-xs-1">
                            <form method="post" class="mymovie">
                                {{ csrf_field() }}
                                <input name="mymovie" value="{{ $movie->id }}" type="hidden">
                                <button type="submit" class="btn btn-default"><i class="fa fa-trash-o" aria-hidden="true"></i></input>
                            </form>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-9 col-xs-offset-1">
                                <div>
                                    <p class="removableTxt">{{ str_limit(replaceAccents($movie->title), $limit = 25, $end = "...") }} - {{ $movie->year }}</p>
                                </div>

                                <div>
                                    <p class="removableTxt">Rythme {{ $movie->rythm_level }}- Tristesse {{ $movie->sadness_level }}- Complexite {{ $movie->smart_level }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                {!! $movies->render() !!}
        @elseif(isset($empty))
            @if($empty == true)
                <div id="noresults" class="col-xs-10 col-xs-offset-1">
                    <h3>Vous n'avez pas encore de films dans votre liste...</h3>
                    <a href="{{ url('/search') }}">Je vais en chercher un de ce pas !!!</a>
                </div>
            @endif
        @endif
    </div>
@endsection