@extends('layouts.asteria_layouts')

@section('title', 'Log in') <!-- Sets the title of the page -->

@section('link')
<link rel="stylesheet" href="/css/inc.css"> <!-- Links to the general CSS file -->
<link rel="website icon" href="/img/logo.png"> <!-- Sets the website icon -->
<script src="/js/burger.js"></script> <!-- Links to JavaScript file for burger menu -->
@endsection

@section('icon')
<div class="header-icon">
    <img class="icon-centre" src="/img/logo.png" alt="Logo Asteria"> <!-- Displays the site logo -->
    <h1 class="header-icon-text">Login</h1> <!-- Page header -->
</div>
@endsection

@section('content')
<!-- SVG background effect -->
<svg xmlns="http://www.w3.org/2000/svg" style="transform:rotate(180deg) translateY(-3px); position: relative; bottom: 50vh;" viewBox="0 0 1000 100" preserveAspectRatio="none">
   <path fill="#262626" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
   <path fill="#262626" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
   <path fill="#262626" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
</svg>

<div class="form-header">
   <form action="{{ route('asteria_login_check') }}" method="post"> <!-- Form for login -->
      @csrf 

      <img class="form-icon" src="/img/user.svg" alt="Login"> <!-- Icon for the form -->
      <h2 class="form-text">LOGIN</h2> <!-- Form header -->

      <input class="form-content-1" name="username" type="text" placeholder="Username" value="{{ old('username') }}"> <!-- Input field for username -->
      @if ($errors->has('username'))
      <div class="alert alert-danger" style="color:#ffffff; margin-top:3px;">{{ $errors->first('username') }}</div> <!-- Displays errors for username -->
      @endif

      <input class="form-content-1" name="password" type="password" placeholder="Password"> <!-- Input field for password -->
      @if ($errors->has('password'))
      <div class="alert alert-danger" style="color:#ffffff; margin-top:3px;">{{ $errors->first('password') }}</div> <!-- Displays errors for password -->
      @endif

      <div style="display: flex; align-items:center; justify-content: center; position: relative; right: 10vh; margin-top:20px">
        <input class="form-check" name="remember" type="checkbox" id="remember_me"> <!-- "Remember Me" checkbox -->
        <label for="remember_me" class="form-text-p">Remember Me</label> <!-- Label for the checkbox -->
      </div>

      <button type="submit" class="form-btn">Login</button> <!-- Submit button for the form -->
      <a href="{{ route('asteria_register') }}" class="form-p-login">I am new</a> <!-- Link to the registration page -->
   </form>
</div>

@if ($errors->any())
<div class="alert alert-danger">
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li> <!-- List of all errors -->
      @endforeach
   </ul>
</div>
@endif
@endsection
