<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Poppins font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
    {{-- Poppins font --}}
    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- END FONT AWESOME --}}
    {{-- TAILWIND CSS --}}
    @vite('resources/css/app.css')
    {{-- END TAILWIND CSS --}}
    <title>Document</title>
  </head>

  <body>
    <main class="font-poppins">
      {{--|----------------------- INFORMATION SECTION |---------------------------}}
      <div class="hidden lg:block lg:w-full bg-black lg:py-1">
        <div class="lg:w-[90%] lg:mx-auto lg:flex lg:justify-between lg:items-center">
          <div class="lg:block">
            <span class="lg:text-xs"><i class="fa-solid fa-phone lg:text-white"></i></span>
            <span class="lg:text-white lg:text-sm lg:font-poppins lg:font-medium">888-730-2221 or 650-347-2221</span>
          </div>
          <div>
            <span class="lg:text-xs"><i class="fa-regular fa-envelope lg:text-white"></i></span>
            <span class="lg:text-white lg:text-sm lg:font-medium lg:font-poppins">info@topperjewelers.com</span>
          </div>
        </div>
      </div>
      {{--|---------------------- END INFORMATION SECTION |------------------------}}





      {{--|------------------ HEADER |----------------------------------------}}
      <header class="hidden lg:block lg:w-full lg:py-6 lg:border-b-[1px]">
        <div class="lg:w-[90%] lg:mx-auto lg:flex lg:justify-between lg:items-center">
          {{-- LOGO --}}
          <a href="#" class="block">
            <img class="w-[170px]" src="{{ url('/images/topper-1940-logo.svg.svg') }}" alt="">
          </a>
          {{--SEARCH --}}
          <div class="lg:block lg:border lg:p-2 lg:w-[380px]">
            <input type="text" placeholder="Search all products..." class="p-1 lg:outline-none bg-transparent">
            <span><i class="fa-solid fa-magnifying-glass"></i></span>
          </div>
          {{-- PRIZE --}}
          <div class="lg:flex lg:justify-between lg:items-center lg:w-[210px]">
            <div class="lg:block">
              <img src="{{ url('/images/omega-boutique-badge_120x.webp') }}" alt="">
            </div>
            <div class="lg:block">
              <img src="{{ url('/images/grand-seiko-salon-badge_120x.avif') }}" alt="">
            </div>
          </div>
          {{-- CART --}}
          <div class="lg:block">
            <a class="block" href="#">
              <span>
                <i class="fa-solid fa-cart-shopping lg:text-xl"></i>
                <small class="font-poppinss text-base font-semibold uppercase">Cart</small>
              </span>
            </a>
          </div>
        </div>
      </header>
      {{--|------------------------- END HEADER |----------------------------------------------}}




      {{--|--------------------------- NAVIGATION |-------------------------------------------}}
      <nav class="hidden lg:block lg:w-full">
        <ul class="lg:w-[90%] lg:mx-auto lg:flex lg:justify-between lg:items-center">
          <a href="#" class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Home</li>
          </a>
          <a href="#" class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Watches</li>
          </a>
          <a href="#" class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Pre-owned</li>
          </a>
          <a href="#" class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Jewelry</li>
          </a>
          <a href="#" class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Blog</li>
          </a>
          <a href="#" class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>About Topper</li>
          </a>
          <a href="#" class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Contact us</li>
          </a>
        </ul>
      </nav>
      {{--|-------------------------------- END NAVIGATION |-----------------------------------}}






      {{--|--------------------------------- HIDDEN HEADER |-------------------------------------}}
      <header class="w-full relative border-b-[1px] lg:hidden">
        <div class="container w-[90%] py-3 mx-auto flex justify-between items-center">
          {{-- HAMBURGER MENU --}}
          <div class="w-[20px] block">
            <span class="humbergerBtn"><i class="fa-solid fa-bars text-xl"></i></span>
            <span class="closeBtn hidden"><i class="fa-solid fa-xmark text-xl"></i></span>
          </div>
          {{-- LOGO --}}
          <div class="block w-[120px]">
            <a href="#">
              <img class="w-[100%] h[100%] object-cover object-center"
                src="{{ url('/images/topper-1940-logo.svg.svg') }}" alt="">
            </a>
          </div>
          {{-- CART --}}
          <div class="block">
            <a href="#"><span><i class="fa-solid fa-cart-shopping text-xl"></i></span></a>
          </div>
        </div>
      </header>
      {{-- Hidden PRIZE && Call us--}}
      <div class="w-full flex flex-col justify-center items-center lg:hidden">
        {{-- PRIZE --}}
        <div class="flex justify-between items-center w-[210px] py-5">
          <div class="block">
            <img src="{{ url('/images/omega-boutique-badge_120x.webp') }}" alt="">
          </div>
          <div class="block ">
            <img src="{{ url('/images/grand-seiko-salon-badge_120x.avif') }}" alt="">
          </div>
        </div>
        {{-- Call us --}}
        <div class="flex flex-col justify-center items-center py-0">
          <span class="block text-center mx-5 text-md font-poppins font-semibold text-black">Call us at 888-730-2221
            or
            650-347-2221</span>
          <span class="block tet-center mx-5 text-base font-poppins font-light text-black">Tuesday - Saturday 11
            AM - 5PM
            PST</span>
        </div>
      </div>
      {{-- END PRIZE --}}
      {{--|-----------------------------END HIDDEN HEADER |-----------------------------}}


      {{--|---------------------------- HIDDEN NAVIGATION |---------------------------------}}
      <div class="w-full absolute top-[50px] z-10 bg-white left-0 right-0 hiddenMenu hidden">
        <nav class="w-[90%] mx-auto mt-3">
          <input type="text" class="block border p-2 w-[300px] mx-auto outline-none mb-4">
          <a href="#" class="block list-none font-poppins font-normal text-black uppercase border-b-[1px] py-2">
            <li>Home</li>
          </a>
          <a href="#" class="block list-none font-poppins font-normal text-black uppercase border-b-[1px] py-2">
            <li>Watches</li>
          </a>
          <a href="#" class="block list-none font-poppins font-normal text-black uppercase border-b-[1px] py-2">
            <li>Pre-owned select</li>
          </a>
          <a href="#" class="block list-none font-poppins font-normal text-black uppercase border-b-[1px] py-2">
            <li>Jewelry</li>
          </a>
          <a href="#" class="block list-none font-poppins font-normal text-black uppercase border-b-[1px] py-2">
            <li>Blog</li>
          </a>
          <a href="#" class="block list-none font-poppins font-normal text-black uppercase border-b-[1px] py-2">
            <li>About Topper</li>
          </a>
          <a href="#" class="block list-none font-poppins font-normal text-black uppercase border-b-[1px] py-2">
            <li>Contact us</li>
          </a>
        </nav>
      </div>
      {{--|------------------------------- END HIDDEN NAVIGATION |----------------------------------}}
    </main>
    <script src="{{ url('/js/home.js') }}"></script>
  </body>

</html>