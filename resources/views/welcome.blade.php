<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
{{-- @include('layouts.hero ')

@include('layouts.faq')

@include('layouts.footer') --}}

  
<div class="text-md md:text-lg font-red-hat-display antialiased text-dark-800 leading-xl" x-data="{ show: false , open: false }">

    <!-- Header search popup -->
    <div :class="{ 'open': show }" class="search-popup transition-all fixed -top-full left-0 w-full h-full bg-black/80 z-50 flex items-center">
      <a href="javascript:;" @click="show = !show" :aria-expanded="show ? 'false' : 'true'" class="absolute top-5 right-5 w-10 h-10 flex items-center justify-center" aria-expanded="true"><img src="images/close.svg" alt="close"></a>
      <!-- container -->
        <div class="container text-center">
          <form>
            <div class="border-b border-white relative pr-[80px]">
              <input type="text" placeholder="Search here" name="" class="bg-transparent px-0 py-3 md:py-5 text-white text-left w-full text-md md:text-25">
              <button class="bg-primary-900 absolute top-0 right-0 w-12 h-10 md:w-[75px] md:h-[60px] rounded-sm text-white"><i class="fa-regular fa-magnifying-glass"></i></button>
            </div>
          </form>
        </div>
    </div>

    <!-- start-header -->
    <header class="header relative z-20" :class="{ 'header-open': open }">
<div class="overlay lg:hidden" @click="open = !open" :aria-expanded="open ? 'true' : 'false'" aria-expanded="false"></div>
      <!-- header top bar -->
      <div class="bg-primary-800 text-dark-900 text-sm font-medium py-2">
        <!-- container -->
        <div class="container flex justify-between items-center">
          <!-- Follow us: -->
         
         
        </div>
      </div>
      <!-- start header main navigation -->
      <div class="main-navigation py-3">
        <!-- container -->
        <div class="container flex items-center justify-between">
          <!-- header logo-->
          <div class="logo">
            <a href="javascript:;" class="max-w-[50px] sm:max-w-auto block">
              <img src="/images/p1.jpg" alt="logo">
            </a>
          </div>

          <!-- Header right menu-->
          <div class="flex items-center justify-end gap-5 lg:gap-10">
            <!-- main menu -->
            <div class="main-menu lg:block">
              <button type="button" class="absolute top-0 right-0 lg:hidden p-1" @click="open = !open" :aria-expanded="open ? 'true' : 'false'" aria-expanded="false">
                <img src="images/close-dark.svg" alt="menu-close-icon">
              </button>
              
            </div>

            <!-- header button -->  
            <div class="flex items-center gap-5">
              <div class="block lg:hidden">
                <button type="button" @click="open = !open" :aria-expanded="open ? 'true' : 'false'" aria-expanded="false">
                  <img src="images/menu-toggle-icon.svg" alt="menu-toggle-icon">
                </button>
              </div>
              <!-- header search -->
              <div class="search-icon">
                <a href="javascript:;" @click="show = !show" :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }" class="bg-primary-900 rounded-full w-[40px] h-[40px] flex items-center justify-center text-white text-sm hover:bg-dark-900" aria-expanded="false">
                  <i class="fa-regular fa-magnifying-glass"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end header main navigation -->
      <!-- Mobile menu -->
     
      <!-- End Mobile menu -->
    </header>
    <!-- end-header -->

    <!-- start main wrapper -->
    <div class="main-wrapper">
      <!-- start hero section -->
      <section class="hero-section min-h-[calc(100vh-116px)] relative grid content-end pt-24 pb-5 md:py-20 lg:py-28">
        <!-- hero banner img -->
        <div class="absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:h-full before:w-full before:bg-[#190D1F] before:opacity-[0.22]">
          <img src="images/hero.jpg" alt="hero img" class="w-full h-full object-cover">
        </div>
        <!-- start hero content -->
        <div class="hero-content-slider relative z-1">
            <!-- container -->
            <div class="container text-center">
              <h1 class="text-white">Let’s travel and explore</h1>
              <p class="mb-6 md:mb-9 text-white text-md md:text-2xl md:leading-2xl">Discover amzaing places at exclusive deals</p>

              <!-- booking form -->
              <div class="rounded-full bg-white  md:rounded-7xl px-6 py-2 md:pr-3 md:pl-10 text-left w-full max-w-6xl mx-auto md:flex gap-0 lg:gap-10 xl:gap-20 items-center">
                <div class="w-full md:px-3 text-dark-900 font-semibold text-lg border-b md:border-0 border-primary-800 mb-7 md:mb-0">
                  <label class="block">Keyword</label>
                  <input type="text" placeholder="Type your keyword here...." name="" class="form-control">
                </div>
                <div class="w-full md:px-3 text-dark-900 font-semibold text-lg border-b md:border-0 border-primary-800 mb-7 md:mb-0">
                  <label class="block">Destination</label>
                  <select class="form-control">
                    <option>Where to?</option>
                    <option>Where to?</option>
                  </select>
                </div>
                <div class="w-full md:px-3 text-dark-900 font-semibold text-lg mb-7 md:mb-0">
                  <label class="block">Duration</label>
                  <select class="form-control">
                    <option>Check in - Check out</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="bg-red-500"> 
                  @foreach ($destinations as $destination)
                      <h2>{{ $destination->continent }}</h2>
                      <p>{{ $destination->description }}</p>
                  
                      @if ($destination->image)
                          <img src="{{ ($destination->image->path) }}" alt="Destination Image">
                      @endif
                  @endforeach
                  </div>
                <div class="fl">
                  <button type="button" class="bg-purple-600 rounded-full w-full md:w-[110px] h-[50px] md:h-[77px] flex items-center justify-center text-white text-xl md:text-3xl hover:bg-dark-900">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50" fill="white">
                          <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                      </svg>
                  </button>
              </div>
              
              </div>
            </div>
        </div>
        <!-- end hero content slider-->

      </section>
      <!-- start hero section -->

      <!-- start Top Destinations section -->
      <section class=" mt-12">
          <!-- container -->
          <div class="container">
            <!-- section heading -->
            <div class="text-center mb-8 md:mb-14">
              <h2 class=" font-bold text-4xl">Top Destinations</h2>
              <p class="max-w-[590px] mx-auto py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </div>

            <!-- category grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 md:gap-5">
              <!-- category box -->
              <div class="overflow-hidden group rounded-1xl relative">
                <img src="images/categories-img-1.jpg" alt="categories img 1" class="rounded-md transition-all group-hover:scale-105 mx-auto">
            
                <!-- Overlay Text Container -->
                <div class="categories-detail absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                    <a href="destination-detail.html">
                        <h4 class="text-white text-lg md:text-xl lg:text-2xl font-semibold">South Africa</h4>
                    </a>
                </div>
            </div>
            
              <!-- category box -->
              <div class="category-box  absolute overflow-hidden group rounded-1xl relative">
                  <img src="images/categories-img-2.jpg" alt="categories img" class="transition-all group-hover:scale-105 mx-auto">
                  <div class="categories-detail">
                      <a href="destination-detail.html">
                          <h4>Asia</h4>
                      </a>
                  </div>
              </div>
              <!-- category box -->
              <div class="category-box overflow-hidden group rounded-1xl relative">
                  <img src="images/categories-img-3.jpg" alt="categories img" class="transition-all group-hover:scale-105 mx-auto">
                  <div class="categories-detail">
                      <a href="destination-detail.html">
                          <h4>Italy</h4>
                      </a>
                  </div>
              </div>
              <!-- category box -->
              <div class="category-box overflow-hidden group rounded-1xl relative">
                  <img src="images/categories-img-4.jpg" alt="categories img" class="transition-all group-hover:scale-105 mx-auto">
                  <div class="categories-detail">
                      <a href="destination-detail.html">
                          <h4>Thailand</h4>
                      </a>
                  </div>
              </div>
              <!-- category box -->
              <div class="category-box overflow-hidden group rounded-1xl relative">
                  <img src="images/categories-img-5.jpg" alt="categories img" class="transition-all group-hover:scale-105 mx-auto">
                  <div class="categories-detail">
                      <a href="destination-detail.html">
                          <h4>Egypt</h4>
                      </a>
                  </div>
              </div>
              <!-- category box -->
              <div class="category-box overflow-hidden group rounded-1xl relative">
                  <img src="images/categories-img-6.jpg" alt="categories img" class="transition-all group-hover:scale-105 mx-auto">
                  <div class="categories-detail">
                      <a href="destination-detail.html">
                          <h4>Venice &amp; Rome</h4>
                      </a>
                  </div>
              </div>
          </div>
          

            <div class="mt-12 flex items-center justify-center">
              <button type="button" class="text-white bg-purple-600 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                  Explore All
              </button>
          </div>
          
          </div>
      </section>
      <!-- end Top Destinations section -->

      <!-- start about section -->
      <section class="about-section">
          <!-- container -->
          <div class="container">
            <div class="flex flex-wrap -mx-4">
              <!-- about gallery img -->
              <div class="w-full md:w-2/4 px-4">
                  <div class="relative border-[6px] border-white shadow-box-1 rounded-md max-w-[330px] overflow-hidden before:pt-[73%] before:block">
                    <img src="images/about-img1.jpg" alt="about img 1" class="absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                  <div class="relative border-[6px] mx-auto mr-5 md:mr-14 -mt-32 -mb-14 rotate-12 border-white shadow-box-1 rounded-md max-w-[330px] overflow-hidden before:pt-[73%] before:block">
                    <img src="images/about-img2.jpg" alt="about img 1" class="absolute top-0 left-0 w-full h-full object-cover">
                  </div>
                  <div class="relative border-[6px] border-white shadow-box-1 ml-5 md:ml-0 -rotate-[8deg] rounded-md max-w-[330px] overflow-hidden before:pt-[73%] before:block">
                    <img src="images/about-img3.jpg" alt="about img 1" class="absolute top-0 left-0 w-full h-full object-cover">
                  </div>
              </div>
              <!-- about content -->
              <div class="w-full md:w-2/4 px-4 mt-10 md:mt-0">
                <h2>A Simply Perfect Place To Get Lost</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam eleifend. Integer enim neque volutpat ac tincidunt vitae. </p>

                <ul class="ul-list mb-9">
                  <li>Adipiscing elit ut aliquam purus sit</li>
                  <li>Amet luctus venenatis. Felis bibendum</li>
                  <li>Ut tristique et egestas quis. Gravida in</li>
                  <li>Ermentum et sollicitudin ac.</li>
                  <li>Nibh nisl condimentum id venenatis a.</li>
                </ul>

                <div class="bg-white rounded-xl py-4 px-4 xl:px-5 shadow-box-1 justify-between flex flex-wrap lg:flex-nowrap items-center gap-5 text-md xl:text-lg text-dark-900">
                  <a href="tel:+12345455454" class="flex items-center gap-2 xl:gap-4 hover:text-primary-900">
                    <span class="bg-primary-900 w-[46px] h-[46px] rounded-full flex items-center justify-center text-white text-lg shrink-0"><i class="fa-solid fa-phone"></i></span>
                    +1 234 545 5454
                  </a>
                  <a href="mailto:journeya@gmail.com" class="flex items-center gap-2 xl:gap-4 hover:text-primary-900">
                    <span class="bg-primary-900 w-[46px] h-[46px] rounded-full flex items-center justify-center text-white text-lg shrink-0"><i class="fa-solid fa-phone"></i></span>
                    journeya@gmail.com
                  </a>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- end about section -->



      <!-- start full video section -->
      <section class="full-video-section py-0 overflow-hidden relative lg:-mt-14">
        <div class="bg-gradient-to-t z-1 from-white/0 to-white absolute top-0 left-0 w-full h-20"></div>
        <div class="video-img absolute top-0 left-0 w-full h-full lg:static">
          <img src="images/full-video-img.png" alt="full-video-img" class="block w-full h-full object-cover">
        </div>
        <div class="relative z-2 lg:absolute lg:bottom-14 left-0 w-full py-10 lg:py-0">
          <!-- container -->
          <div class="container">
            <div class="text-center mx-auto max-w-md">
              <div class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-white/70 p-2 mx-auto mb-5 lg:mb-7">
                <a href="javascript:;" class="flex items-center justify-center w-full h-full bg-white rounded-full">
                  <svg class="w-[20px] md:w-[32px]" width="32" height="37" viewBox="0 0 32 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.83139 36.6497C3.22532 36.6485 2.62998 36.4897 2.10393 36.1887C0.91939 35.5174 0.182999 34.2144 0.182999 32.7999V4.17343C0.182999 2.75494 0.91939 1.45589 2.10393 0.784645C2.64251 0.47512 3.25434 0.315947 3.87547 0.323761C4.49661 0.331575 5.10424 0.50609 5.63486 0.829066L30.1006 15.474C30.6105 15.7937 31.0308 16.2377 31.3222 16.7643C31.6136 17.2909 31.7664 17.8829 31.7664 18.4847C31.7664 19.0865 31.6136 19.6785 31.3222 20.2051C31.0308 20.7317 30.6105 21.1757 30.1006 21.4954L5.63091 36.1443C5.08789 36.4726 4.46593 36.6472 3.83139 36.6497Z" fill="#190D1F"></path>
                  </svg>
                </a>
              </div>
              <h2 class="m-0 text-white lg:text-[55px] font-bold lg:leading-[72px]">Where Would You Like To Go?</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- end full video section -->

      <!-- start Perfect travel planner section -->
      <section class="perfect-travel-section py-10 md:py-20 lg:py-28 relative">
          <!-- container -->
          <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-5">
              <div class="text-center md:text-left">
                <h2>Perfect travel planner for you and your family</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <div class="flex justify-center md:justify-start items-center mb-5">
                    <img class="object-cover w-10 h-10 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0 hover:z-1" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=256&amp;q=80" alt="">
                    <img class="object-cover w-10 h-10 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0 hover:z-1" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=256&amp;q=80" alt="">
                    <img class="object-cover w-10 h-10 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0 hover:z-1" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1256&amp;q=80" alt="">
                    <img class="object-cover w-10 h-10 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0 hover:z-1" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=256&amp;q=80" alt="">
                    <p class="flex items-center justify-center w-10 h-10 -mx-1 mb-0 text-md font-bold text-white bg-primary-900 border-2 border-white rounded-full">+4</p>
                </div>
                <p class="text-sm mb-0"><span class="text-primary-900">+500</span> Happy Customer</p>
              </div>
              <div class="relative">
                <div class="overflow-hidden relative rounded-full mx-auto md:mx-0 max-w-[310px] before:pt-[140%]  before:block">
                  <img src="images/stephan-valentin-img.jpg" alt="stephan-valentin-img" class="w-full h-full object-cover absolute top-0 left-0">
                </div>
                <div class="absolute bottom-0 -left-0 md:-left-8 w-[123px] h-[123px] rounded-full bg-primary-900 flex items-center justify-center text-white">
                  <svg viewBox="0 0 100 100" fill="currentColor" width="102" height="102">
                    <defs>
                      <path id="circle" d="
                          M 50, 50
                          m -37, 0
                          a 37,37 0 1,1 74,0
                          a 37,37 0 1,1 -74,0"></path>
                    </defs>
                    <text font-size="14">
                      <textPath xlink:href="#circle" class="text-white">
                        * Explore the world * Journea - Tours
                      </textPath>
                    </text>
                  </svg>
                </div>
              </div>
              <div class="text-center md:text-left">
                <h5 class="text-xl mb-5 font-bold">Waiting for adventures? Don`t miss them</h5>
                <p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <div class="grid grid-cols-3 gap-2 lg:gap-5">
                  <div>
                    <h4 class="text-primary-900 mb-0">20</h4>
                    <p class="text-sm md:leading-xl font-medium">Years Experience</p>
                  </div>
                  <div>
                    <h4 class="text-primary-900 mb-0">400</h4>
                    <p class="text-sm md:leading-xl font-medium">Destination Travel</p>
                  </div>
                  <div>
                    <h4 class="text-primary-900 mb-0">50k+</h4>
                    <p class="text-sm md:leading-xl font-medium">Trusted by Customer</p>
                  </div>
                </div>
                <a href="about.html" class="btn btn-primary mx-auto md:mx-0">Explore all <i class="fa-regular fa-arrow-right ml-3"></i></a>
              </div>
            </div>
          </div>
      </section>
      <!-- end Perfect travel planner section -->

      <!-- start Why choose us section -->
      <section class="why-choose-us-section pt-20 md:pt-32 pb-10 md:pb-20 lg:pb-28 lg:-mt-14 relative">
          <div class="absolute -top-0 lg:-top-12 left-0 w-full">
            <img src="images/why-choose-us-bg.svg" alt="why-choose-us-bg" class="w-full block">
          </div>
          <!-- container -->
          <div class="container relative">
            <!-- section heading -->
            <div class="text-center mb-10 md:mb-14">
              <h2>Why choose us?</h2>
              <p class="max-w-[590px] mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center gap-7">
              <!-- Why choose us service box -->
              <div class="shadow-box-2 group rounded-4xl py-3 md:py-5 px-3 flex items-center gap-5">
                <div class="bg-primary-800 rounded-2xl w-24 h-24 flex items-center justify-center shrink-0 transition-all">
                    <img src="images/world-tour-icon.svg" alt="world-tour-icon" class="">
                </div>
                <div class="">
                  <h5 class="text-lg mb-2">Set Travel Plan</h5>
                  <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
              </div>
              <!-- Why choose us service box -->
              <div class="shadow-box-2 group rounded-4xl py-3 md:py-5 px-3 flex items-center gap-5">
                <div class="bg-primary-800 rounded-2xl w-24 h-24 flex items-center justify-center shrink-0 transition-all">
                    <img src="images/travelling-icon.svg" alt="world-tour-icon" class="">
                </div>
                <div class="">
                  <h5 class="text-lg mb-2">Explore Around</h5>
                  <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
              </div>
              <!-- Why choose us service box -->
              <div class="shadow-box-2 group rounded-4xl py-3 md:py-5 px-3 flex items-center gap-5">
                <div class="bg-primary-800 rounded-2xl w-24 h-24 flex items-center justify-center shrink-0 transition-all">
                    <img src="images/best-guide-icon.svg" alt="world-tour-icon" class="">
                </div>
                <div class="">
                  <h5 class="text-lg mb-2">Best Guide</h5>
                  <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
              </div>
              <!-- Why choose us service box -->
              <div class="shadow-box-2 group rounded-4xl py-3 md:py-5 px-3 flex items-center gap-5">
                <div class="bg-primary-800 rounded-2xl w-24 h-24 flex items-center justify-center shrink-0 transition-all">
                    <img src="images/support-icon.svg" alt="world-tour-icon" class="">
                </div>
                <div class="">
                  <h5 class="text-lg mb-2">Support 24/7</h5>
                  <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
              </div>
              <!-- Why choose us service box -->
              <div class="shadow-box-2 group rounded-4xl py-3 md:py-5 px-3 flex items-center gap-5">
                <div class="bg-primary-800 rounded-2xl w-24 h-24 flex items-center justify-center shrink-0 transition-all">
                    <img src="images/luxary-hotel-icon.svg" alt="world-tour-icon" class="">
                </div>
                <div class="">
                  <h5 class="text-lg mb-2">Luxary Hotel</h5>
                  <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
              </div>
              <!-- Why choose us service box -->
              <div class="shadow-box-2 group rounded-4xl py-3 md:py-5 px-3 flex items-center gap-5">
                <div class="bg-primary-800 rounded-2xl w-24 h-24 flex items-center justify-center shrink-0 transition-all">
                    <img src="images/easy-booking-icon.svg" alt="world-tour-icon" class="">
                </div>
                <div class="">
                  <h5 class="text-lg mb-2">Easy Booking</h5>
                  <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
              </div>
            </div>

            <div class="mt-10 md:mt-24 grid grid-cols-1 md:grid-cols-2 gap-7">
              <div class="py-10 lg:py-16 px-5 lg:px-10 relative rounded-5xl overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full">
                  <img src="images/weekly-flash-deels-img.jpg" alt="weekly-flash-deels-img" class="block w-full h-full object-cover">
                </div>
                <div class="relative max-w-[250px]">
                  <h4 class="mb-3">Weekly Flash deels</h4>
                  <p class="text-dark-900">Upto 45% off</p>
                  <a href="tour-detail-2.html" class="btn btn-light btn-md shadow-btn mx-0">View deals <i class="fa-regular fa-arrow-right ml-3"></i></a>
                </div>
              </div>
              <div class="py-10 lg:py-16 px-5 lg:px-10 relative rounded-5xl overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full">
                  <img src="images/summer-escaps-img.png" alt="weekly-flash-deels-img" class="block w-full h-full object-cover">
                </div>
                <div class="relative max-w-[250px]">
                  <h4 class="mb-3">Summer escaps</h4>
                  <p class="text-dark-900">Plan your next trip with us.</p>
                  <a href="tour-detail-2.html" class="btn btn-light btn-md shadow-btn mx-0">View deals <i class="fa-regular fa-arrow-right ml-3"></i></a>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- end Why choose us section -->

     

  </div>

  <!-- footer -->
  <footer class="footer-part relative">
      <!-- container -->
      <div class="container relative z-1">
        <!-- section heading -->
        <div class="text-center mb-10 md:mb-14 max-w-[590px] mx-auto">
          <h2>Sign up for our newsletter</h2>
          <p class="mb-5 md:mb-12">Save up to 50% on tours and trips. Get instant access to lower prices.</p>

          <!-- newsletter form -->
          <form class="flex items-center justify-center bg-white shadow-input rounded-full p-1.5 border border-white hover:border-primary-900">
            <input type="text" placeholder="Your email address" name="" class="text-dark-900 text-md md:text-lg w-full py-3 bg-transparent px-3 outline-none">
            <button type="button" class="btn btn-primary w-full max-w-[130px] shrink-0">Submit</button>
          </form>
        </div>

        <!-- footer center-->
        <div class="flex flex-wrap -mx-4 pt-10 border-t border-gray-100">
          <div class="w-full lg:w-1/3 px-3">
            <!-- footer column -->
              <div class="mb-10 lg:mb-6 text-left lg:max-w-[260px]">
                <div class="mb-3 lg:mb-6">
                  <a href="index-1.html" class="inline-block">
                    <img src="images/logo-dark.svg" alt="logo-dark">
                  </a>
                </div>
                <p class="mb-5 font-normal text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo.</p>

                <!-- Social icon -->
                <ul class="flex items-center justify-start space-x-4 text-md text-primary-900">
                  <li>
                    <a href="https://www.facebook.com/" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center transition-all bg-primary-800 hover:bg-primary-900 hover:text-white"><i class="fa-brands fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="https://twitter.com/" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center transition-all bg-primary-800 hover:bg-primary-900 hover:text-white"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                   <li>
                    <a href="https://www.youtube.com/" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center transition-all bg-primary-800 hover:bg-primary-900 hover:text-white"><i class="fa-brands fa-youtube"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center transition-all bg-primary-800 hover:bg-primary-900 hover:text-white"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
          </div>
          <div class="w-full lg:w-2/3 px-3">
            <div class="grid grid-cols-1 sm:grid-cols-3">
              <!-- footer column -->
              <div class="mb-6">
                <h4 class="footer-title">Quick Links</h4>
                <!-- footer menu -->
                <ul class="space-y-2 text-15 text-dark-800">
                  <li>
                    <a href="about.html" class="text-dark-800 hover:text-primary-900 ">About Us</a>
                  </li>
                  <li>
                    <a href="tour.html" class="text-dark-800 hover:text-primary-900">Tour</a>
                  </li>
                  <li>
                    <a href="destination.html" class="text-dark-800 hover:text-primary-900">Destinations</a>
                  </li>
                  <li>
                    <a href="blog-grid.html" class="text-dark-800 hover:text-primary-900">Blog</a>
                  </li>
                  <li>
                    <a href="contact.html" class="text-dark-800 hover:text-primary-900">Contact Us</a>
                  </li>
                </ul>
              </div>
              <!-- footer column -->
              <div class="mb-6">
                <h4 class="footer-title">Contact Us</h4>
                <!-- footer contact detail -->
                <p class="pl-7 relative text-15 mb-3"><span class="absolute top-2 left-0"><img src="images/pin.svg" alt="call-sharp"></span>28 W New York St, Aurora Indiana-60506</p>
                <p class="pl-7 relative text-15 mb-3"><span class="absolute top-2 left-0"><img src="images/call-sharp.svg" alt="call-sharp"></span><a href="tel:(630) 844-0400" class="hover:text-primary-900">(630) 844-0400</a></p>
                <p class="pl-7 relative text-15 mb-3"><span class="absolute top-2 left-0"><img src="images/mail-unread.svg" alt="call-sharp"></span><a href="mailto:journeya@gmail.com" class="hover:text-primary-900">journeya@gmail.com</a></p>
              </div>
              <!-- footer column -->
              <div class="mb-6">
                <h4 class="footer-title">Gallery</h4>
                <!-- footer Gallery -->
                <div class="grid grid-cols-4 gap-3">
                  <div class="overflow-hidden relative group rounded-xl before:block before:pt-full">
                    <a href="gallery.html" class="absolute top-0 left-0 h-full w-full block">
                      <img src="images/footer-gallery-img1.jpg" alt="footer-gallery-img1" class="transition-all group-hover:scale-105 w-full h-full object-cover duration-300">
                    </a>
                  </div>
                  <div class="overflow-hidden relative group rounded-xl before:block before:pt-full">
                    <a href="gallery.html" class="absolute top-0 left-0 h-full w-full block">
                      <img src="images/footer-gallery-img2.jpg" alt="footer-gallery-img1" class="transition-all group-hover:scale-105 w-full h-full object-cover duration-300">
                    </a>
                  </div>
                  <div class="overflow-hidden relative group rounded-xl before:block before:pt-full">
                    <a href="gallery.html" class="absolute top-0 left-0 h-full w-full block">
                      <img src="images/footer-gallery-img3.jpg" alt="footer-gallery-img1" class="transition-all group-hover:scale-105 w-full h-full object-cover duration-300">
                    </a>
                  </div>
                  <div class="overflow-hidden relative group rounded-xl before:block before:pt-full">
                    <a href="gallery.html" class="absolute top-0 left-0 h-full w-full block">
                      <img src="images/footer-gallery-img4.jpg" alt="footer-gallery-img1" class="transition-all group-hover:scale-105 w-full h-full object-cover duration-300">
                    </a>
                  </div>
                  <div class="overflow-hidden relative group rounded-xl before:block before:pt-full">
                    <a href="gallery.html" class="absolute top-0 left-0 h-full w-full block">
                      <img src="images/footer-gallery-img5.jpg" alt="footer-gallery-img1" class="transition-all group-hover:scale-105 w-full h-full object-cover duration-300">
                    </a>
                  </div>
                  <div class="overflow-hidden relative group rounded-xl before:block before:pt-full">
                    <a href="gallery.html" class="absolute top-0 left-0 h-full w-full block">
                      <img src="images/footer-gallery-img6.jpg" alt="footer-gallery-img1" class="transition-all group-hover:scale-105 w-full h-full object-cover duration-300">
                    </a>
                  </div>
                  <div class="overflow-hidden relative group rounded-xl before:block before:pt-full">
                    <a href="gallery.html" class="absolute top-0 left-0 h-full w-full block">
                      <img src="images/footer-gallery-img7.jpg" alt="footer-gallery-img1" class="transition-all group-hover:scale-105 w-full h-full object-cover duration-300">
                    </a>
                  </div>
                  <div class="overflow-hidden relative group rounded-xl before:block before:pt-full">
                    <a href="gallery.html" class="absolute top-0 left-0 h-full w-full block">
                      <img src="images/footer-gallery-img8.jpg" alt="footer-gallery-img1" class="transition-all group-hover:scale-105 w-full h-full object-cover duration-300">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        

        <!-- footer bottom-->
        <div class="border-t border-gray-100 py-4 text-center md:text-left md:flex items-center justify-between">
          <p class="text-dark-900 text-md mb-0">Copyright 2023 <a href="index-1.html" class="text-primary-900 hover:text-dark-900">Journeya</a>. All Rights Reserved.</p>
          <p class="text-dark-900 text-md mb-0">Design by <a href="#" class="text-primary-900 hover:text-dark-900">Webbytemplate</a>.</p>
        </div>

      </div>

      <div class="footer-bg absolute bottom-0 left-0 w-full">
        <img src="images/footer-bg-img.jpg" alt="footer-bg-img">
      </div>
  </footer>

<!-- Newsletter Popup -->
<!-- link that opens popup -->
<a class="newsletter-popup-link hidden" href="#newsletter-popup">Newsletter Popup</a>
<!-- Newsletter Popup box-->
<div id="newsletter-popup" class="mx-auto max-w-[850px] relative mfp-hide"> 
  <div class="bg-white rounded-2xl relative overflow-hidden">
    <img src="images/newsletter-shape.svg" alt="newsletter-shape" class="block absolute top-0 left-0 max-w-[200px] md:max-w-full">
    <div class="flex flex-wrap items-center">
      <div class="pt-10 md:py-6 px-10 sm:px-16 w-full sm:w-1/2 relative z-1 text-center sm:text-left">
        <h2 class="text-2xl md:text-3xl mb-2">Our Newsletter</h2>
        <p class="mb-6 text-dark-800">Pellentesque dignissim enim sit amet venenatis urna cursus.</p>
        <!-- newsletter form -->
        <form action="" class="relative">
          <input type="email" placeholder="Email address" class="form-control bg-gray-400 border border-primary-800 w-full rounded-5xl py-3 pl-6 pr-10">
          <button type="submit" class="btn btn-primary absolute top-2 right-2 w-[35px] h-[35px] p-0 max-w-full min-w-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
              <path d="M13.4095 1.3375C13.4095 0.923287 13.0737 0.587501 12.6595 0.5875L5.90948 0.587501C5.49526 0.587501 5.15948 0.923287 5.15948 1.3375C5.15948 1.75171 5.49526 2.0875 5.90948 2.0875H11.9095V8.0875C11.9095 8.50171 12.2453 8.8375 12.6595 8.8375C13.0737 8.8375 13.4095 8.50171 13.4095 8.0875L13.4095 1.3375ZM1.67877 13.3789L13.1898 1.86783L12.1291 0.807171L0.618107 12.3182L1.67877 13.3789Z" fill="currentColor"></path>
            </svg>
          </button>
        </form>
      </div>
      <div class="w-full sm:w-1/2">
        <img src="images/newsletter-romantic-getaway-bro.svg" alt="newsletter img" class="block ">
      </div>
    </div>
  </div>
</div>
<!-- End Newsletter popup -->
<!-- Cookei popup -->
<!-- link that opens popup -->
<a class="cookei-popup-link hidden" href="#cookei-popup">Cookei Popup</a>

<div id="cookei-popup" class="cookei-popup mx-auto max-w-[550px] relative mfp-hide">
  <div class="bg-primary-900 rounded-4xl py-6 px-5 md:px-8">
    <div class="text-center text-white">
      <div class="-mt-6 -ml-8">
        <img src="images/cookie-img.png" alt="cookie-img" class="block ">
      </div>
      <h2 class="text-2xl md:text-3xl text-white mb-5">Our Cookie policy</h2>
      <p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Ac odio tempor orci dapibus ultrices.</p>
      <a href="javascript:;" class="max-w-full btn bg-white text-dark-900 mb-5 hover:bg-dark-900 hover:text-white">Okay, I Agree</a>
      <p class="text-md mb-0">I don’t want to see this anymore.</p>
    </div>
  </div>
</div>
<!-- End Cookei popup -->
</div>
</body>
</html>