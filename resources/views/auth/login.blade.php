@extends('layouts.app')

@section('content')
<div class="form-wrapper">
  <h1>Login</h1>
  
  
    {!! Form::open(['route' => 'login.post']) !!}
    <div class="form-item">
      <label for="name">name</label>
      <input type="name" name="name" required="required" placeholder="name"></input>
    </div>
    <div class="form-item">
      <label for="password">password</label>
      <input type="password" name="password" required="required" placeholder="Password"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Login" value="Login"></input>
    </div>
  {!! Form::close() !!}
  <div class="form-footer">
    <p>Create an account　 {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
  </div>
</div>
@endsection






