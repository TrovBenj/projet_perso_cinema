@extends('layouts.app')

@section('content')
    <div class="col-xs-12">
        <a href="{{ url('/search') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Retour à la recherche</a>
        <div class="panel panel-default">
            <div class="panel-heading">Légende</div>
            <div class="panel-body legend text-center">
                <h4>Classique du cinéma</h4>
                <img src="{{ asset("/images/icons/classic.svg") }}" />
                <h4>Chuck Norris approuve ce choix</h4>
                <img src="{{ asset("/images/icons/chuck_norris.svg") }}" />
            </div>
        </div>
        <div id="vhsresult" class="text-center panel">
            @if(count($movies) == 0)
                <div id="noresults" class="col-xs-10 col-xs-offset-1">
                    <h3>Il n'y a malheureusement aucun résultat à votre recherche (soyez un peu moins exigeant !)</h3>
                </div>
            @endif
        @foreach($movies as $movie)
                @if($movie->classic == 1 && $movie->chuck_norris == 1)
                    <section style="background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            background-image: url('{{ asset("/images/background/movies/moviedoublemention.svg") }}')">
                @elseif($movie->classic == 0 && $movie->chuck_norris == 1)
                    <section style="background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            background-image: url('{{ asset("/images/background/movies/moviechuck.svg") }}')">
                @elseif($movie->classic == 1 && $movie->chuck_norris == 0)
                    <section style="background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            background-image: url('{{ asset("/images/background/movies/movieclassic.svg") }}')">
                @else
                    <section style="background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            background-image: url('{{ asset("/images/background/movies/moviestandard.svg") }}')">
                @endif
                        <div>
                            <h4>{!! $movie->title !!}</h4>
                            <p>{!! $movie->movie_by !!}</p>
                            <p><b>{{ $movie->year }}</b></p>
                        </div>
                        <div>
                            <h5>Rythme</h5>

                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i<=$movie->rythm_level)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                @endif

                            @endfor

                        </div>
                        <div>
                            <h5>Tristesse</h5>

                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i<=$movie->sadness_level)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                @endif

                            @endfor

                        </div>
                        <div>
                            <h5>Complexité</h5>

                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i<=$movie->smart_level)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                @endif

                            @endfor

                        </div>
                        @if(Auth::check())
                            <div class="col-xs-4">
                                <form method="post" class="movieChecked">
                                    {{ csrf_field() }}
                                    <input name="movie" value="{{ $movie->id }}" type="hidden">
                                    <button type="submit" class="btn btn-default">Vu <i class="fa fa-check" aria-hidden="true"></i></input>
                                </form>
                            </div>
                        @endif
                    </section>
        @endforeach
        </div>
        {!! $movies->render() !!}
    </div>
@endsection