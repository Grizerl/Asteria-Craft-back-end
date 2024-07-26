@extends('layouts.asteria_layouts') <!-- Extends the main layout -->

@section('title', 'Help') <!-- Sets the title of the page -->

@section('link') <!-- Additional CSS and JS files -->
<link rel="stylesheet" href="/css/inc.css">
<link rel="stylesheet" href="/css/news.css">
<link rel="stylesheet" href="/css/faq.css">
<link rel="stylesheet" href="/css/shop.css">
<link rel="stylesheet" href="/css/vote.css">
<link rel="website icon" href="/img/logo.png">
<script src="/js/burger.js"></script>
@endsection

@section('icon') <!-- Header icon and title -->
<div class="header-icon">
   <img class="icon-centre" src="/img/logo.png" alt="Logo Asteria">
   <h1 class="header-icon-text">Help</h1>
</div>
@endsection

@section('content') <!-- Main content section -->
<svg xmlns="http://www.w3.org/2000/svg" style="transform:rotate(180deg) translateY(-3px); position: relative; bottom: 50vh;" viewBox="0 0 1000 100" preserveAspectRatio="none">
   <path fill="#262626" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
   <path fill="#262626" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
   <path fill="#262626" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
</svg>

<div class="form-header">
   <form action="{{route('help_check')}}" method="post"> <!-- Form submission action -->
      @csrf 
      <img class="vote_icon" src="/img/support.png" alt="Help">
      <h2 class="vote_text">Help</h2>
      <input class="vote_content_title" name="email" type="email" placeholder="Your email address"> <!-- Email input -->
      @if ($errors->has('email'))
      <div class="alert alert-danger" style="color:#ffffff; margin-top:8px;">{{ $errors->first('email')}}</div> <!-- Email error message -->
      @endif
      <input class="vote-content-content" name="content" type="text" placeholder="Your question or wish"> <!-- Content input -->
      @if ($errors->has('content'))
      <div class="alert alert-danger" style="color:#ffffff; margin-top:8px;">{{ $errors->first('content')}}</div> <!-- Content error message -->
      @endif
      <button type="submit" class="vote_btn">Send email</button> <!-- Submit button -->
   </form>
</div>

@if ($errors->any()) <!-- Display all form errors -->
<div class="alert alert-danger">
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif
@endsection
