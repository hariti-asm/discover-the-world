<html lang="zxx" style=""><head>
    <meta charset="utf-8">
    <!-- Page title -->
    <title>Journea Travel Agency - HTML5 Template</title>
    <!-- Project favicon link -->
    <link rel="icon" href="images/favicon.png" type="image/gif">
    <!-- All device viewport meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Fonts style file -->
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


   
   
   <body>
<x-app-layout>
    

       <div class="main-wrapper">
         <!-- start hero section -->
         @foreach ($adventures as $adventure)
    <section class="hero-section min-h-[220px] md:min-h-[340px] relative grid content-center py-14 md:py-20 lg:py-28">
        <!-- hero banner img -->
        <div class="absolute top-0 left-0 w-full h-full before:absolute before:top-0 before:left-0 before:h-full before:w-full before:bg-dark-900/50">
            @foreach ($adventure->images->take(1) as $img)
                <img src="../{{($img->path) }}" class="w-full h-full object-cover">
            @endforeach
        </div>
        <!-- start hero content -->
        <div class="hero-content-slider relative z-1">
            <!-- container -->
            <div class="container text-center">
                <h1 class="text-white text-30 md:text-4xl leading-normal mb-2 md:mb-0">{{ $adventure->title }}</h1>
                <!-- Second breadcrumb -->
                
            </div>
        </div>
        <!-- end hero content slider-->
    </section>
@endforeach

         <!-- start hero section -->
         @foreach ($adventures as $adventure)

         <div class="w-full md:w-2/4 px-4">
            @foreach ($adventure->images as $index => $img)
                @if ($index === 0)
                    <div class="relative border-[6px] border-white shadow-box-1 rounded-md max-w-[330px] overflow-hidden before:pt-[73%] before:block">
                        <img src="../{{ ($img->path) }}" alt="about img {{ $index + 1 }}" class="absolute top-0 left-0 w-full h-full object-cover">
                    </div>
                @elseif ($index === 1)
                    <div class="relative border-[6px] mx-auto mr-5 md:mr-14 -mt-32 -mb-14 rotate-12 border-white shadow-box-1 rounded-md max-w-[330px] overflow-hidden before:pt-[73%] before:block">
                        <img src="../{{ ($img->path) }}" alt="about img {{ $index + 1 }}" class="absolute top-0 left-0 w-full h-full object-cover">
                    </div>
                @elseif ($index === 2)
                    <div class="relative border-[6px] border-white shadow-box-1 ml-5 md:ml-0 -rotate-[8deg] rounded-md max-w-[330px] overflow-hidden before:pt-[73%] before:block">
                        <img src="../{{($img->path) }}" alt="about img {{ $index + 1 }}" class="absolute top-0 left-0 w-full h-full object-cover">
                    </div>
                @endif
            @endforeach
        </div>
        @endforeach


         <section class="destination-detail py-14 md:mb-10 mx-10">
            <!-- container -->
            <div class="container">
                <div class="">
                    @foreach ($adventures as $item)
                        
                    <h2 class="text-3xl xl:text-4xl xl:leading-normal mb-7 flex items-center gap-2"><i class="fa-solid fa-location-dot text-primary-900"></i><?php echo $item->country?></h2>
                    <p><?php echo $item->description?></p>
                    @endforeach
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus euismod quis viverra nibh cras pulvinar mattis nunc sed. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Praesent elementum facilisis leo vel fringilla est. Sem nulla pharetra diam sit. Quam pellentesque nec nam aliquam sem et tortor consequat. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Felis bibendum ut tristique et. Cras pulvinar mattis nunc sed blandit. Adipiscing tristique risus nec feugiat in fermentum. Pellentesque nec nam aliquam sem et tortor consequat id. Id consectetur purus ut faucibus pulvinar elementum integer enim neque. Egestas purus viverra accumsan in nisl. Consectetur libero id faucibus nisl tincidunt eget nullam. </p>
                    <p>Nunc sed blandit libero volutpat sed cras ornare arcu dui. Dictumst vestibulum rhoncus est pellentesque elit. Risus feugiat in ante metus dictum at. Risus nullam eget felis eget nunc lobortis mattis. Tempor commodo ullamcorper a lacus.</p>
        
                    <h3 class="text-lg md:text-3xl md:mt-10">Hiking</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus euismod quis viverra nibh cras pulvinar mattis nunc sed. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Praesent elementum facilisis leo vel fringilla est. Sem nulla pharetra diam sit. Quam pellentesque nec nam aliquam sem et tortor consequat. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Felis bibendum ut tristique et. Cras pulvinar mattis nunc sed blandit. Adipiscing tristique risus nec feugiat in fermentum. Pellentesque nec nam aliquam sem et tortor consequat id. Id consectetur purus ut faucibus pulvinar elementum integer enim neque. Egestas purus viverra accumsan in nisl. Consectetur libero id faucibus nisl tincidunt eget nullam. </p>
                    
                    <p>Nunc sed blandit libero volutpat sed cras ornare arcu dui. Dictumst vestibulum rhoncus est pellentesque elit. Risus feugiat in ante metus dictum at. Risus nullam eget felis eget nunc lobortis mattis. Tempor commodo ullamcorper a lacus.</p>
        
                    <div class="md:mt-10" x-data="{ tab: 'tab2' }">
                      <ul class="flex items-center bg-purple-100 rounded-md p-1.5 md:gap-4 mb-10">
                        <li class="w-full text-center md:w-auto"><a href="javascript:;" class="block py-1 md:py-2 px-3 md:px-7 rounded-md bg-purple-500 text-white hover:bg-purple-500 hover:text-white" :class="{ 'bg-purple-500 text-white': tab == 'tab1'}" @click.prevent="tab = 'tab1'">Activities</a></li>
                        <li class="w-full text-center md:w-auto"><a href="javascript:;" class="block py-1 md:py-2 px-3 md:px-7 rounded-md text-dark-900 hover:bg-purple-500 hover:text-white black" :class="{ 'bg-purple-500 text-white': tab == 'tab2'}" @click.prevent="tab = 'tab2'">Flights</a></li>
                        <li class="w-full text-center md:w-auto"><a href="javascript:;" class="block py-1 md:py-2 px-3 md:px-7 rounded-md text-dark-900 hover:bg-purple-500 hover:text-white" :class="{ 'bg-purple-500 text-white': tab == 'tab3'}" @click.prevent="tab = 'tab3'">Hotels</a></li>
                        <li class="w-full text-center md:w-auto"><a href="javascript:;" class="block py-1 md:py-2 px-3 md:px-7 rounded-md text-dark-900 hover:bg-purple-500 hover:text-white" :class="{ 'bg-purple-500 text-white': tab == 'tab4'}" @click.prevent="tab = 'tab4'">Tours</a></li>
                      </ul>
        
                      <div class="mb-10" x-show="tab == 'tab1'" style="display: none;">
                        <h3 class="text-lg md:text-3xl md:mt-10">Hot Air Ballon</h3>
                        <p>Leo integer malesuada nunc vel risus commodo. Placerat duis ultricies lacus sed turpis. Et leo duis ut diam. Bibendum arcu vitae elementum curabitur vitae nunc. Duis tristique sollicitudin nibh sit amet. Gravida rutrum quisque non tellus orci ac auctor augue. Quisque egestas diam in arcu cursus euismod quis. Orci sagittis eu volutpat odio facilisis mauris sit amet. Etiam dignissim diam quis enim lobortis scelerisque. Diam quam nulla porttitor massa id neque aliquam vestibulum. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque. Imperdiet sed euismod nisi porta lorem mollis aliquam. Diam donec adipiscing tristique risus nec.</p>
                        
                        <p>Magna fermentum iaculis eu non diam phasellus vestibulum lorem sed. Sit amet nisl suscipit adipiscing bibendum. Amet cursus sit amet dictum. A cras semper auctor neque vitae tempus quam.</p>
                      </div>
        
                      <div class="mb-10" x-show="tab == 'tab2'">
                        <div class="flex flex-wrap md:flex-nowrap border border-purple-500 bg-purple-500/20 rounded-xl">
                          <div class="w-full py-6 px-6 grid items-center justify-center md:max-w-[118px] shrink-0 border-b md:border-b border-purple-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                              <g clip-path="url(#clip0_86_744)">
                                <path d="M46.9093 1.09096C47.9093 2.27277 48.0456 3.95459 47.3183 6.13641C46.5911 8.31823 45.3638 10.2728 43.6365 12L38.1479 17.4887L43.6024 41.216C43.7161 41.6478 43.5797 42.0228 43.1933 42.341L38.8297 45.6137C38.6706 45.75 38.4547 45.8182 38.182 45.8182C38.0911 45.8182 38.0115 45.8069 37.9433 45.7841C37.6024 45.716 37.3638 45.5341 37.2274 45.2387L27.7161 27.9205L18.8865 36.75L20.6933 43.3637C20.807 43.75 20.7161 44.1023 20.4206 44.4205L17.1479 47.6932C16.9433 47.8978 16.682 48 16.3638 48H16.2956C15.9547 47.9546 15.682 47.8069 15.4774 47.5569L9.03426 38.966L0.443351 32.5228C0.193351 32.3637 0.045624 32.1023 0.000169486 31.7387C-0.0225578 31.4432 0.0797149 31.1591 0.306988 30.8864L3.57971 27.5796C3.78426 27.375 4.04562 27.2728 4.36381 27.2728C4.50017 27.2728 4.59108 27.2841 4.63653 27.3069L11.2502 29.1137L20.0797 20.2841L2.76153 10.7728C2.44335 10.591 2.25017 10.3182 2.18199 9.95459C2.13653 9.59096 2.23881 9.28414 2.48881 9.03414L6.85244 4.6705C7.17062 4.37505 7.51153 4.28414 7.87517 4.39777L30.5456 9.81823L36.0002 4.36368C37.7274 2.63641 39.682 1.40914 41.8638 0.681864C44.0456 -0.0454084 45.7274 0.0909552 46.9093 1.09096Z" fill="#645CBB"></path>
                              </g>
                              <defs>
                                <clipPath id="clip0_86_744">
                                <rect width="48" height="48" fill="white"></rect>
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                          <div class="w-1/2 md:w-full py-3 md:py-6 px-3 md:px-6 grid items-center md:border-l border-purple-500">
                            <div>
                              <h3 class="text-md md:text-lg mb-0 leading-normal mb-2">Name</h3>
                              <span class="block text-dark-800 text-md md:text-lg">India to paris</span>
                            </div>
                          </div>
                          <div class="w-1/2 md:w-full py-3 md:py-6 px-3 md:px-6 grid items-center border-l border-purple-500">
                            <div>
                              <h3 class="text-md md:text-lg mb-0 leading-normal mb-2">Flight Name</h3>
                              <span class="block text-dark-800 text-md md:text-lg">Air India</span>
                            </div>
                          </div>
                          <div class="w-1/2 md:w-full py-3 md:py-6 px-3 md:px-6 grid items-center md:border-l border-purple-500">
                            <div>
                              <h3 class="text-md md:text-lg mb-0 leading-normal mb-2">Distance</h3>
                              <span class="block text-dark-800 text-md md:text-lg">300,000 km2</span>
                            </div>
                          </div>
                          <div class="w-1/2 md:w-full py-3 md:py-6 px-3 md:px-6 grid items-center border-l border-purple-500">
                            <div>
                              <h3 class="text-md md:text-lg mb-0 leading-normal mb-2">Depart Date</h3>
                              <span class="block text-dark-800 text-md md:text-lg">25 Jan 2022</span>
                            </div>
                          </div>
                          <div class="w-1/2 md:w-full py-3 md:py-6 px-3 md:px-6 grid items-center border-r md:border-r-0 md:border-l border-purple-500">
                            <div>
                              <h3 class="text-md md:text-lg mb-0 leading-normal mb-2">Return Date</h3>
                              <span class="block text-dark-800 text-md md:text-lg">3 Feb 2022</span>
                            </div>
                          </div>
                        </div>
                      </div>
        
        
                      <div class="mb-10" x-show="tab == 'tab3'" style="display: none;">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                          <!-- products grid -->
                          <div class="group relative">
                            <div class=" w-full overflow-hidden rounded-2xl before:pt-[65%] before:block relative group-hover:opacity-75">
                              <a href="javascript:;" class="absolute top-0 left-0 h-full w-full"><img src="../images/hotel-detail-img2.jpg" alt="hotel-detail-img" class="h-full w-full object-cover object-center">
                              </a>
                            </div>
                            <div class="mt-5">
                              <h3 class="text-1xl text-dark-700 leading-2xl mb-2 group-hover:text-primary-900">
                                <a href="#">Standard Deluxe</a>
                              </h3>
                              <p class="text-md mb-2 leading-md">
                                Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra.
                              </p>
                              <div class="flex items-center justify-between">
                                <div>
                                  <p class="text-[12px] flex items-center gap-2 text-dark-800 m-0 leading-md"> 
                                    <span class="flex items-center gap-1 text-[#FFC738]"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>  <i class="fa-solid fa-star"></i></span>
                                   (1 Review)</p>
                                </div>
                                <div class="text-right">
                                  <span class="text-md font-bold text-dark-900 block">$1200.00</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- products grid -->
                        <div class="group relative">
                          <div class=" w-full overflow-hidden rounded-2xl before:pt-[65%] before:block relative group-hover:opacity-75">
                            <a href="javascript:;" class="absolute top-0 left-0 h-full w-full"><img src="../images/hotel-detail-img4.jpg" alt="hotel-detail-img" class="h-full w-full object-cover object-center">
                            </a>
                          </div>
                          <div class="mt-5">
                              <h3 class="text-1xl text-dark-700 leading-2xl mb-2 group-hover:text-primary-900">
                                <a href="#">The Penthouse</a>
                              </h3>
                              <p class="text-md mb-2 leading-md">
                                Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra.
                              </p>
                              <div class="flex items-center justify-between">
                                <div>
                                  <p class="text-[12px] flex items-center gap-2 text-dark-800 m-0 leading-md"> 
                                    <span class="flex items-center gap-1 text-[#FFC738]"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>  <i class="fa-solid fa-star"></i></span>
                                   (1 Review)</p>
                                </div>
                                <div class="text-right">
                                  <span class="text-md font-bold text-dark-900 block">$900.00</span>
                                </div>
                              </div>
                            </div>
                        </div>
                        <!-- products grid -->
                        <div class="group relative">
                          <div class=" w-full overflow-hidden rounded-2xl before:pt-[65%] before:block relative group-hover:opacity-75">
                            <a href="javascript:;" class="absolute top-0 left-0 h-full w-full"><img src="../images/hotel-detail-img6.jpg" alt="hotel-detail-img" class="h-full w-full object-cover object-center">
                            </a>
                          </div>
                          <div class="mt-5">
                              <h3 class="text-1xl text-dark-700 leading-2xl mb-2 group-hover:text-primary-900">
                                <a href="#">Junior Suite Room</a>
                              </h3>
                              <p class="text-md mb-2 leading-md">
                                Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra.
                              </p>
                              <div class="flex items-center justify-between">
                                <div>
                                  <p class="text-[12px] flex items-center gap-2 text-dark-800 m-0 leading-md"> 
                                    <span class="flex items-center gap-1 text-[#FFC738]"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>  <i class="fa-solid fa-star"></i></span>
                                   (1 Review)</p>
                                </div>
                                <div class="text-right">
                                  <span class="text-md font-bold text-dark-900 block">$2000.00</span>
                                </div>
                              </div>
                            </div>
                        </div>
        
                        </div>
                      </div>
        
                      <div class="mb-10" x-show="tab == 'tab4'" style="display: none;">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                          <!-- products grid -->
                            <div class="group relative bg-white shadow-box-1 rounded-xl">
                              <div class="">
                                <div class=" w-full overflow-hidden rounded-t-xl before:pt-[65%] before:block relative group-hover:opacity-75">
                                  <a href="javascript:;" class="absolute top-0 left-0 h-full w-full"><img src="../images/special-offers-img1.jpg" alt="hotel-detail-img" class="h-full w-full object-cover object-center">
                                  </a>
                                </div>
                                <div class="mt-5">
                                  <h3 class="text-1xl text-dark-700 leading-2xl mb-2 group-hover:text-primary-900 text-center">
                                    <a href="#">Greece</a>
                                  </h3>
                                  <p class="text-center mb-0 text-md">Lorem ipsum dolor sit amet</p>
                                  <div class="px-5 py-5 flex justify-between">
                                    <div class="flex items-center gap-2 text-sm">
                                      <img src="../images/calendar-icon.svg" alt="calendar-icon">
                                      10 Jan
                                    </div>
                                    <div class="flex items-center gap-2 text-sm">
                                      <img src="../images/clock-icon.svg" alt="calendar-icon">
                                      4 Days
                                    </div>
                                    <div class="flex items-center gap-2 text-sm">
                                      <img src="../images/star-icon.svg" alt="calendar-icon">
                                      4.8
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="text-right flex items-center justify-center gap-3 bg-purple-500 py-2 px-3 rounded-b-xl">
                                <span class="text-xl md:text-2xl font-bold text-dark-900 block"><sup>$</sup>457</span>
                                <span class="text-sm font-semibold text-primary-900 line-through block"><sup>$</sup>523</span>
                              </div>
                            </div>
                            <!-- products grid -->
                            <div class="group relative bg-white shadow-box-1 rounded-xl">
                              <div class="">
                                <div class=" w-full overflow-hidden rounded-t-xl before:pt-[65%] before:block relative group-hover:opacity-75">
                                  <a href="javascript:;" class="absolute top-0 left-0 h-full w-full"><img src="../images/special-offers-img2.jpg" alt="hotel-detail-img" class="h-full w-full object-cover object-center">
                                  </a>
                                </div>
                                <div class="mt-5">
                                  <h3 class="text-1xl text-dark-700 leading-2xl mb-2 group-hover:text-primary-900 text-center">
                                    <a href="#">India</a>
                                  </h3>
                                  <p class="text-center mb-0 text-md">Lorem ipsum dolor sit amet</p>
                                  <div class="px-5 py-5 flex justify-between">
                                    <div class="flex items-center gap-2 text-sm">
                                      <img src="../images/calendar-icon.svg" alt="calendar-icon">
                                      20 Mar
                                    </div>
                                    <div class="flex items-center gap-2 text-sm">
                                      <img src="../images/clock-icon.svg" alt="calendar-icon">
                                      8 Days
                                    </div>
                                    <div class="flex items-center gap-2 text-sm">
                                      <img src="../images/star-icon.svg" alt="calendar-icon">
                                      4
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="text-right flex items-center justify-center gap-3 bg-purple-500 py-2 px-3 rounded-b-xl">
                                <span class="text-xl md:text-2xl font-bold text-dark-900 block"><sup>$</sup>600</span>
                                <span class="text-sm font-semibold text-primary-900 line-through block"><sup>$</sup>780</span>
                              </div>
                            </div>
                            <!-- products grid -->
                            <div class="group relative bg-white shadow-box-1 rounded-xl">
                              <div class="">
                                <div class=" w-full overflow-hidden rounded-t-xl before:pt-[65%] before:block relative group-hover:opacity-75">
                                  <a href="javascript:;" class="absolute top-0 left-0 h-full w-full"><img src="../images/special-offers-img3.jpg" alt="hotel-detail-img" class="h-full w-full object-cover object-center">
                                  </a>
                                </div>
                                <div class="mt-5">
                                  <h3 class="text-1xl text-dark-700 leading-2xl mb-2 group-hover:text-primary-900 text-center">
                                    <a href="#">Itali</a>
                                  </h3>
                                  <p class="text-center mb-0 text-md">Lorem ipsum dolor sit amet</p>
                                  <div class="px-5 py-5 flex justify-between">
                                    <div class="flex items-center gap-2 text-sm">
                                      <img src="../images/calendar-icon.svg" alt="calendar-icon">
                                      6 Oct
                                    </div>
                                    <div class="flex items-center gap-2 text-sm">
                                      <img src="../images/clock-icon.svg" alt="calendar-icon">
                                      6 Days
                                    </div>
                                    <div class="flex items-center gap-2 text-sm">
                                      <img src="../images/star-icon.svg" alt="calendar-icon">
                                      4.8
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="text-right flex items-center justify-center gap-3 bg-purple-500 py-2 px-3 rounded-b-xl">
                                <span class="text-xl md:text-2xl font-bold text-dark-900 block"><sup>$</sup>340</span>
                                <span class="text-sm font-semibold text-primary-900 line-through block"><sup>$</sup>500</span>
                              </div>
                            </div>
                        </div>
                      </div>
        
                    </div>
        
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus euismod quis viverra nibh cras pulvinar mattis nunc sed. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Praesent elementum facilisis leo vel fringilla est. Sem nulla pharetra diam sit. Quam pellentesque nec nam aliquam sem et tortor consequat. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Felis bibendum ut tristique et. Cras pulvinar mattis nunc sed blandit. Adipiscing tristique risus nec feugiat in fermentum. Pellentesque nec nam aliquam sem et tortor consequat id. Id consectetur purus ut faucibus pulvinar elementum integer enim neque. Egestas purus viverra accumsan in nisl. Consectetur libero id faucibus nisl tincidunt eget nullam. </p>
                        
                    <p>Nunc sed blandit libero volutpat sed cras ornare arcu dui. Dictumst vestibulum rhoncus est pellentesque elit. Risus feugiat in ante metus dictum at. Risus nullam eget felis eget nunc lobortis mattis. Tempor commodo ullamcorper a lacus.</p>
                </div>
            </div> 
        </section>
      
       </div>
   
 
   </div>

     <!-- Custom Libraries script js start -->
     <!-- jquery min js file -->
     <script src="assets/js/jquery.min.js"></script>
     <link rel="stylesheet" href="chrome-extension://hbklahkfbghjgbclbfcnhpfmajkagnci/css/iframe.css" id="videoNoteFrameStyle"><!-- Swiper bundle js file -->
     <script src="assets/js/swiper-bundle.min.js"></script>
     <!-- Isotope js file -->
     <script src="assets/js/isotope.pkgd.js"></script>  
     <!-- Aos animation js file -->
     <script src="assets/js/aos.js"></script>
     <!-- Magnific popup min js file -->
     <script src="assets/js/jquery.magnific-popup.min.js"></script>
   
   
     <!-- custom script js -->
     <script src="assets/js/alpine.min.js"></script>
     <script src="assets/js/custom.js"></script>
    </x-app-layout>
   </body>
   </html>