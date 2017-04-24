@extends('layouts.app')
@section('content')
    <div class="col-xs-10 col-xs-offset-1">
        @foreach($users as $user)
            <div class="panel panel-default">
                <div class="panel-heading">{{ $user->pseudo }}</div>
                <div class="panel-body">
                    @if($user->description != '')
                        <p>{{ $user->description }}</p>
                    @else
                        <p><small>Texte généré aléatoirement car cet utilisateur n'a pas rédigé sa description</small></p>
                        {!! randomQuote() !!}
                    @endif
                </div>
            </div>
        @endforeach
            {{ $users->links() }}
    </div>
@endsection

