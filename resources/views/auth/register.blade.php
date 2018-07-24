@extends('layouts.app')

@section('content')
<div class="form-wrapper">
    <h1>Sign up</h1>

    <!--<div class="row">-->
    <!--    <div class="col-md-6 col-md-offset-3">-->

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-item">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-item">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-item">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                <div class="button-panel">
                <!--<input type="submit" class="button" title="Signup" value="Login"></input>-->
                    {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            {!! Form::close() !!}
            
    <!--    </div>-->
    <!--</div>-->
</div>
@endsection

