@extends('layouts.app')

@section('content')
    <div class="col-sm-10 col-sm-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Editer mon profil</div>
            <div class="panel-body">
                {{ Form::model($user,['class' => "form-horizontal"]) }}

                    <div class="form-group{{ $errors->has('pseudo') ? ' has-error' : '' }}">

                        {{ Form::label('pseudo','Pseudo',['class' => 'col-md-4 control-label']) }}

                        <div class="col-sm-6">
                            {{ Form::text('pseudo',old('pseudo'),['class' => 'form-control']) }}
                            @if ($errors->has('pseudo'))
                                <span class="help-block">
                                <strong>{{ $errors->first('pseudo') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

                        {{ Form::label('first_name','Prénom',['class' => 'col-md-4 control-label']) }}

                        <div class="col-sm-6">

                            {{ Form::text('first_name',old('first_name'),['class' => 'form-control']) }}
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

                        {{ Form::label('last_name','Nom de famille',['class' => 'col-md-4 control-label']) }}
                        <div class="col-sm-6">

                            {{ Form::text('last_name',old('last_name'),['class' => 'form-control']) }}
                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        {{ Form::label('email','Email',['class' => 'col-md-4 control-label']) }}

                        <div class="col-sm-6">

                            {{ Form::text('email',old('email'),['class' => 'form-control']) }}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

                        {{ Form::label('description','Description',['class' => 'col-md-4 control-label']) }}

                        <div class="col-sm-6">

                            {{ Form::textarea('description',old('Description'),['class' => 'form-control']) }}
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Sauver
                            </button>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Changer mon mot de passe</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/edit/password_update') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Ancien password</label>

                        <div class="col-sm-6">
                            <input id="old_password" type="password" class="form-control" name="old_password" required>

                            @if ($errors->has('old_password'))
                                <span class="help-block">
                                                        <strong>{{ $errors->first('old_password') }}</strong>
                                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-sm-4 control-label">Nouveau password</label>

                        <div class="col-sm-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-sm-4 control-label">Confirm Password</label>

                        <div class="col-sm-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Soumettre
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
