<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title') | Asteria Craft</title>
      <link rel="icon" type="image/png" href="/img/2.png">
      <link rel="stylesheet" href="/css/style.css">
      <!-- Section for additional links -->
      @yield('link')
      <!-- Injecting UserServices to use in the template -->
      @inject('userServices', 'App\Services\UserServices')
   </head>
   <body id="body">
      <header>
         <div class="img">
         <div class="header">
            <div class="content-left">
               <!-- Burger Menu Button -->
               <button class="header-burger-btn" id="burger">
               <span></span><span></span><span></span>
               </button>
               <img class="icon" src="/img/logo.png" alt="Logo Asteria">
               <nav class="menu">
                  <li class="li"><a class="content" href="{{ route('main') }}">Home</a></li>
                  <li class="li"><a class="content" href="{{ route('shop') }}">Shop</a></li>
                  <li class="li"><a class="content" href="{{ route('news') }}">News</a></li>
                  <li class="li"><a class="content" href="{{ route('vote') }}">Vote</a></li>
                  <li class="li"><a class="content" href="{{ route('help') }}">Help</a></li>
                  <li class="li"><a class="content" href="{{ route('changelog') }}">Changelog</a></li>
                  <li class="li"><a class="content" href="{{ route('faq') }}">FAQ</a></li>
               </nav>
            </div>
            <div class="content-right">
               <!-- External Links for Login and Registration -->
               <a class="btn1-content" href="https://discord.gg/yb6Bfwrc">Discord Login</a>
               <a class="btn2-content" href="{{ route('asteria_login') }}">Login</a>
               <a class="btn3-content" href="{{ route('asteria_register') }}">Register</a>
            </div>
         </div>
         <!-- Section for additional icons -->
         @yield('icon')
      </header>
      <!-- Section for page-specific content -->
      @yield('content')
      <section>
         <!-- SVG for decorative wave -->
         <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute; z-index:1;" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path fill="#262626" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
            <path fill="#262626" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
            <path fill="#262626" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
         </svg>
         <div class="section-content">
            <div class="content-centre">
               <h1 class="content-header">0</h1>
               <p class="content-footer">CONNECTED PLAYERS</p>
            </div>
            <div class="content-centre">
               <h1 class="content-header">+{{ $userServices->index()['userCount'] }}</h1>
               <p class="content-footer">REGISTERED PLAYERS</p>
            </div>
            <div class="content-centre">
               <h1 class="content-header">+15</h1>
               <p class="content-footer">PLAYER RECORD</p>
            </div>
         </div>
         <!-- Another SVG for decorative wave -->
         <svg class="svg-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path fill="#262626" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
            <path fill="#262626" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
            <path fill="#262626" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
         </svg>
      </section>
      <footer>
         <div class="footer-box">
            <div class="footer-box-h1">
               <h1 class="box-h1">Be Among the First to Explore New <br> Worlds!</h1>
            </div>
            <div class="link-span">
               <span class="footer-box-link">Useful Links</span>
               <div style="margin-bottom:8px; margin-top:3vh;">
                  <a href="{{ route('main') }}" class="link">Home</a>
               </div>
            </div>
            <div class="link-span-1">
               <span class="footer-box-link-1">Social Networks</span>
               <div style="margin-top: 1vh;">
                  <a class="link" href="https://www.youtube.com/watch?v=Umyy2Z7fGEE">YouTube</a>
                  <div style="margin-top: 2vh;">
                     <a class="link" href="https://discord.gg/yb6Bfwrc">Discord</a>
                  </div>
               </div>
            </div>
         </div>
         <p class="footer-content-text">
            We are thrilled to announce the launch of our Beta Test! This is a unique opportunity for you <br> to experience the magic of Asteria Craft before its official release. As a beta tester, you'll help shape <br> the game's future, providing valuable feedback and insights that will be crucial in our quest to create <br> an unforgettable gaming experience.
         </p>
         <div class="footer-span-text">
            <span>Copyright © 2023 Asteria</span>
            <div>
               <span>Powered by Azuriom.</span>
            </div>
         </div>
      </footer>
      <!-- Section for snow effect -->
      <section class="snow">
         <div class="snowflakes" aria-hidden="true">
            <!-- <div class="snowflake">❅</div>
            <div class="snowflake">❅</div>
            <div class="snowflake">❅</div>
            <div class="snowflake">❅</div>
            <div class="snowflake">❅</div>
            <div class="snowflake">❅</div>
            <div class="snowflake">❅</div>
            <div class="snowflake">❅</div> -->
         </div>
      </section>
      <!-- Linking JavaScript file -->
      <script src="/js/script.js"></script>
   </body>
</html>
