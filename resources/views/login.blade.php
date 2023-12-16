@extends('layouts.main')

@section('container')
  <div class="login-box">
    <div class="box">
      <form autocomplete="off" method="POST" action="/login" class="login">
        @csrf
        <h2>Sign in</h2>
        <div class="inputBox">
          <input class="" type="text" name="email" id="email" required="required" value="{{ old('email') }}"
            autofocus>
          <span class="@error('email') error @enderror">Username</span>
          <i class="@error('email') error @enderror"></i>
        </div>
        <div class="inputBox">
          <input type="password" name="password" id="password" required="required">
          <span class="@error('password') error @enderror">Password</span>
          <i class="@error('password') error @enderror"></i>
        </div>
        <input type="submit" value="Login">
      </form>
    </div>
  </div>
@endsection
