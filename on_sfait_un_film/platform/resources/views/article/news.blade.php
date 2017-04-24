@extends('layouts.app')

@section('content')
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">News</div>
            @foreach($articles as $article)
                @if($article->id % 2 == 0)
                    <article class="news">
                        <h4>{!! $article->title !!} - <small>{{ diffTime($article->created_at) }}</small></h4>
                        <div class="media">
                            @if (file_exists(public_path("/images/news/" . $article->id . ".jpg")))
                                <div class="media-left">
                                    <img class="media-object d-flex mr-3 pull-left img-rounded" src="{{ asset("/images/news/" . $article->id . ".jpg") }}" alt="">
                                </div>
                            @elseif (file_exists(public_path("/images/news/" . $article->id . ".gif")))
                                <div class="media-left">
                                    <img class="media-object d-flex mr-3 pull-left img-rounded" src="{{ asset("/images/news/" . $article->id . ".gif") }}" alt="">
                                </div>
                            @endif
                            <div class="media-body">
                                <p>{!! $article->content !!}</p>
                            </div>
                        </div>
                        <hr/>
                    </article>
                @else
                    <article class="news">
                        <h4>{!! $article->title !!} - <small>{{ diffTime($article->created_at) }}</small></h4>
                        <div class="media">
                            @if (file_exists(public_path("/images/news/" . $article->id . ".jpg")))
                                <div class="media-right">
                                    <img class="media-object pull-right img-rounded" src="{{ asset("/images/news/" . $article->id . ".jpg") }}" alt="">
                                </div>
                            @elseif (file_exists(public_path("/images/news/" . $article->id . ".gif")))
                                <div class="media-left">
                                    <img class="media-object d-flex mr-3 pull-right img-rounded" src="{{ asset("/images/news/" . $article->id . ".gif") }}" alt="">
                                </div>
                            @endif
                            <div class="media-body">
                                <p>{!! $article->content !!}</p>
                            </div>
                        </div>
                        <hr/>
                    </article>
                @endif
            @endforeach
        </div>
        {!! $articles->render() !!}
    </div>
@endsection