@extends('layouts.asteria_layouts')
@section('title','Home')

@section('link') <!-- Additional CSS and JS files -->
<link rel="website icon" href="/img/logo.png">
@endsection

@section('content')
<!-- Footer Section -->
<footer>
   <div class="footer">
      <div class="footer-content">
         <div>
            <img class="logo" src="/img/logo.png" alt="Logo Asteria">
         </div>
         <div class="section">
            <p class="subtitle">No player is connected!</p>
            <h1 class="caption">Welcome to Asteria</h1>
            <p class="subtitle-2">Beta is open!</p>
            <a href="{{route('download')}}" class="button">playasteria.sivium.solutions</a>
            <a href="{{route('download_launcher')}}" class="button-2">Download the launcher</a>
         </div>
      </div>
   </div>
   <!-- SVG for wave effect in footer -->
   <svg class="img-wave" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(180deg) translateY(-3px);" viewBox="0 0 1000 100" preserveAspectRatio="none">
      <path fill="#262626" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
      <path fill="#262626" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
      <path fill="#262626" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
   </svg>
</footer>

<!-- Main Content Section -->
<main>
    <div class="main">
        <div class="main-content">
            @foreach ($first_posts as $post)
            <div class="main-text">
                <h3 class="title">{{ $post->title }}</h3>
                <p class="slogan">{{ $post->content }}</p>
                <a class="main-btn" href="{{ route('news') }}">See this article</a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="main">
        <div class="main-content-2">
            @foreach ($second_posts as $post)
            <div class="main-text-2">
                <h3 class="title-2">{{ $post->title }}</h3>
                <p class="slogan-2">{{ $post->content }}</p>
                <a href="{{ route('news') }}" class="main-btn-2">See this article</a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="main-pseudo-btn">
        <span class="span-1"></span>
        <span class="span-2"></span>
        <a class="btn-text" href="{{ route('news') }}">Show more</a>
    </div>
</main>

<!-- Article Section -->
<article>
   <div class="article-content">
      <h3 class="subject">🚀 Beta Test Invitation!</h3>
      <h3 class="desc">Be Among the First to Explore New Worlds!</h3>
      <p class="lead">We are thrilled to announce the launch of our Beta Test! This is a unique opportunity for you to experience the magic of Asteria Craft before its official release. As a beta tester, you'll help shape the game's future, providing valuable feedback and insights that will be crucial in our quest to create an unforgettable gaming experience.</p>
      <span class="excerpt">Beta Test Details:</span>
      <ul class="items">
         <li><a class="item">Start Date: [Insert Start Date]</a></li>
         <li><a class="item">End Date: [Insert End Date]</a></li>
      </ul>
      <span class="copy">How to Join: Follow the instructions below to be a part of this exciting journey.</span>
   </div>
</article>
@endsection
