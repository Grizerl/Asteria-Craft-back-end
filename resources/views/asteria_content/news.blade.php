@extends('layouts.asteria_layouts') <!-- Extends the main layout -->

@section('title','News') <!-- Sets the page title -->

@section('link') <!-- Includes CSS and JS files -->
<link rel="stylesheet" href="/css/inc.css">
<link rel="stylesheet" href="/css/news.css">
<link rel="stylesheet" href="/css/faq.css">
<link rel="website icon" href="/img/logo.png">
<script src="/js/burger.js"></script>
@endsection

@section('icon') <!-- Header section with icon and title -->
<div class="header-icon">
   <img class="icon-centre" src="/img/logo.png" alt="Logo Asteria">
   <h1 class="header-icon-text">
      🌠 Your Gateway to Adventure Just Got an Upgrade! 
   </h1>
</div>
@endsection

@section('content') <!-- Main content section -->
<svg xmlns="http://www.w3.org/2000/svg" style="transform:rotate(180deg) translateY(-3px); position: relative; bottom: 50vh;" viewBox="0 0 1000 100" preserveAspectRatio="none">
   <path fill="#262626" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
   <path fill="#262626" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
   <path fill="#262626" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
</svg>

<section>
   <div class="desc">
      <div class="desc-content">
         <div>
            <!-- Main headline for the news article -->
            <div>
               <h1 class="desc-header-text">🌠 Your Gateway to Adventure Just Got an Upgrade!</h1>
            </div>
            <!-- News article content -->
            <div class="desc-footer-text">
               <p class="desc-footer-text-p">We're thrilled to share that the Asteria Craft Launcher has been automatically updated to a new, more powerful version!</p>
               <p class="desc-footer-text-p-2">This isn't just any update—it's a transformative upgrade that's been seamlessly applied to deliver you an even more immersive gaming experience without lifting a finger.</p>
            </div>
            <!-- List of enhanced features -->
            <div class="desc-items">
               <h1 class="desc-items-h1">Enhanced Features in the Automatic Update:</h1>
               <ul style="margin-top:0.5rem;margin-left:0.5rem;">
                  <li><strong class="item-strong">Instant Improvements:</strong><a class="item">Enjoy a faster, smoother, and more reliable launcher without any effort.</a></li>
                  <li><strong class="item-strong">Streamlined Access:</strong><a class="item">Jump into your game with a launcher that's more intuitive and responsive.</a></li>
                  <li><strong class="item-strong">State-of-the-Art Stability:</strong><a class="item">We've ironed out the wrinkles, providing you with uninterrupted gameplay.</a></li>
                  <li><strong class="item-strong">Always Up-to-Date:</strong><a class="item">Our auto-update feature ensures you're always equipped with the latest enhancements.</a></li>
               </ul>
            </div>
            <!-- List of benefits -->
            <div class="desc-items">
               <h1 class="desc-items-h1">Benefits of the New Launcher:</h1>
               <ul style="margin-top:0.5rem;margin-left:0.5rem;">
                  <li><strong class="item-strong">Zero Wait Time:</strong><a class="item">The update has already happened; there's no downtime in your gaming.</a></li>
                  <li><strong class="item-strong">Effortless Experience:</strong><a class="item">With automatic updates, you're always enjoying the best version of Asteria Craft.</a></li>
                  <li><strong class="item-strong">Cutting-Edge Security:</strong><a class="item">Advanced security measures are always working in the background to keep your adventures safe.</a></li>
               </ul>
            </div>
            <!-- What to expect next -->
            <div class="desc-items">
               <h1 class="desc-items-h1">What to Expect Next:</h1>
               <ul style="margin-top:0.5rem;margin-left:0.5rem;">
                  <li><strong class="item-strong">Just Play:</strong><a class="item">Open your launcher as usual, and you'll find that everything is faster and more fluid.</a></li>
                  <li><strong class="item-strong">New Horizons:</strong><a class="item">Look forward to new features and updates that will continue to roll out seamlessly.</a></li>
               </ul>
            </div>
            <!-- Additional content -->
            <div class="desc-content-p">
               <p class="desc-p">Your journey through the cosmos just became smoother and more stable. Dive back into Asteria Craft and explore the universe with the confidence of the latest technology propelling you forward. It's time for liftoff!</p>
            </div>
            <!-- Footer with publication details -->
            <div>
               <p class="footer-desc-p">Posted on December 13, 2023 by maxnomad</p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
