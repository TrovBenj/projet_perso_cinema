@extends('layouts.app')

@section('content')
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">Bonjour, {{ $user->pseudo }} !</div>
            <div class="panel-body">
                @if(isset($movies))
                    <p><b>Vous avez actuellement {{ $nbmovies }} films dans votre collection !</b></p>
                    <hr/>
                    <section>
                        <h4>Le dernier film ajouté à votre liste :</h4>
                        <div class="lastmovie">
                            <p><em>{{ $movies[0]->title }}</em></p>
                            <p><em>{{ $movies[0]->year }}</em></p>
                            <p><em>{{ $movies[0]->movie_by}}</em></p>
                        </div>
                    </section>
                @elseif(isset($empty))
                    @if($empty == true)
                        <div id="noresults" class="col-xs-10 col-xs-offset-1">
                            <h3>Vous n'avez pas encore de films dans votre liste...</h3>
                            <a href="{{ url('/search') }}">Je vais en chercher un de ce pas !!!</a>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection
