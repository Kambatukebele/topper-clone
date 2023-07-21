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
      {{-- |------------------------------ FOOTER |-------------------------------------------------------}}
      <footer class="w-full bg-gray-100">
        <div class="w-[90%] mx-auto">
          {{-- Navigation --}}
          <nav class="hidden">
            <ul>
              <a href="#">
                <li>Home</li>
              </a>
              <a href="#">
                <li>Watches</li>
              </a>
              <a href="#">
                <li>Pre-owned</li>
              </a>
              <a href="$">
                <li>Jewelry</li>
              </a>
              <a href="#">
                <li>Blog</li>
              </a>
              <a href="#">
                <li>About topper</li>
              </a>
              <a href="#">
                <li>Contact us</li>
              </a>
            </ul>
          </nav>
          {{-- company information --}}
          <div
            class="flex flex-col justify-center items-center border-b-[1px] md:flex-row md:flex-wrap md:py-5 lg:flex-nowrap">
            <div class="w-full h-24 flex flex-col justify-center item-center md:w-1/2 lg:min-w-fit lg:px-2">
              <h5 class="font-poppins text-lg font-semibold text-center">Contact Information</h4>
                <h5 class="font-poppins text-md font-light text-center"><span class="font-semibold">888-730-2221</span>
                  / 650-347-2221</h5>
                <p class="font-poppins text-base font-light text-center">info@topperjewelers.com</p>
            </div>
            <div class="w-full h-24 flex flex-col justify-center item-center md:w-1/2 lg:min-w-fit lg:px-2">
              <h5 class="font-poppins text-md font-semibold text-center">Operating Hours</h5>
              <p class="font-poppins text-base font-light text-center">Tuesday-Saturday 11AM-5PM PST</p>
            </div>
            <div class="w-full h-24 flex flex-col justify-center item-center md:w-1/2 lg:min-w-fit lg:px-2 ">
              <h4 class="font-poppins text-md font-semibold text-center">Connect with us</h4>
              <div class="flex justify-center items-center">
                <span class="block mx-2"><i class="fa-brands fa-twitter text-lg"></i></span>
                <span class="block mx-2"><i class="fa-brands fa-facebook text-lg"></i></span>
                <span class="block mx-2"><i class="fa-brands fa-instagram text-lg"></i></span>
              </div>
            </div>
            <div class="w-full h-24 flex flex-col justify-center item-center md:w-1/2 lg:min-w-fit lg:px-2 ">
              <h4 class="font-poppins text-md font-semibold text-center">Sign-up to our Newsletter</h4>
              <form action="" class="flex justify-center items-center mt-2">
                <input type="text" placeholder="Email Address" class="w-32 border bg-transparent p-1 h-9 text-xs">
                <button
                  class="bg-black text-white px-2 h-9 text-sm font-poppins cursor-pointer uppercase font-bold">Sign
                  up</button>
              </form>
            </div>
          </div>
          {{-- TOPPER LOGO AND DESCRIPTION --}}
          <div class="w-full">
            <a class="flex justify-center items-center py-5" href="#">
              <img class="w-[200px]" src="{{ url('/images/topper-1940-logo.svg.svg') }}" alt="">
            </a>
            <p class="font-poppins text-center text-base mb-5">1294 Burlingame Ave., Burlingame, CA 94010</p>
            <p class="font-poppins text-center text-base mb-5">In the heart of Silicon Valley, Topper Fine Jewelers is a
              family-owned store in the charming town of
              Burlingame,
              California. We are located half way in-between San Francisco and San Jose. We are an authorized dealer of
              a unique brand
              mix including: OMEGA, Grand Seiko, Blancpain, Glashütte Original, Nomos Glashütte, Longines, Zenith,
              Bremont, Zodiac,
              Seiko Presage, Seiko Prospex, Oris, G-Shock, Ernst Benz, Rado, Hamilton, Michele, Mühle Glashütte, and
              more. We also
              feature an extensive collection of bridal and fashion jewelry highlighted by brands such as Tacori, Marco
              Bicego, and
              Roberto Coin.
            </p>
            <span class="flex justify-center items-center mb-5">
              <a href=""><img src="{{ url('/images/bbb-badge.avif') }}" alt=""></a>
            </span>
            <p class="text-center font-poppins text-xs mb-5">Reproduction in whole or in part in any form or medium
              without
              express written
              permission of Topper Fine
              Jewelers is
              prohibited.
            </p>
            <p class="text-center font-poppins text-xs mb-5">All descriptions of weight and size are approximate. While
              we do our best to maintain our website's
              accuracy and try and
              fix typographical errors when we are made aware of them, we reserve the right to unilaterally correct any
              mistake in
              image, price,or description that appears on our site.
            </p>
            {{-- Payment Logo --}}
            <div class="w-fit mx-auto flex justify-between items-center mb-5">
              <span class="block mx-1"><i class="fa-brands fa-cc-amex text-2xl md:text-4xl"></i></span>
              <span class="block mx-1"><i class="fa-brands fa-cc-apple-pay text-2xl md:text-4xl"></i></span>
              <span class="block mx-1"><i class="fa-brands fa-cc-diners-club text-2xl md:text-4xl"></i></span>
              <span class="block mx-1"><i class="fa-brands fa-cc-discover text-2xl md:text-4xl"></i></span>
              <span class="block mx-1"><i class="fa-brands fa-cc-jcb text-2xl md:text-4xl"></i></span>
              <span class="block mx-1"><i class="fa-brands fa-cc-apple-pay text-2xl md:text-4xl"></i></span>
              <span class="block mx-1"><i class="fa-brands fa-cc-mastercar text-2xl md:text-4xl"></i></span>
              <span class="block mx-1"><i class="fa-brands fa-cc-visa text-2xl md:text-4xl"></i></span>
              <span class="block mx-1"><i class="fa-brands fa-cc-paypal text-2xl md:text-4xl"></i></span>
            </div>
            {{-- PRIVACY POLICY, RETURN POLICY, TERMS AND CONDITIONS --}}
            <div
              class="w-full flex justify-center items-center flex-wrap mb-5 border-t-[1px] border-b-[1px] py-3 md:flex-nowrap md:w-[600px] md:mx-auto">
              <span class="block mb-5 font-poppins uppercase text-center text-base w-1/2"><a href="#">Privacy
                  Policy</a></span>
              <span class="block mb-5 font-poppins uppercase text-center text-base w-1/2"><a href="#">Return
                  Policy</a></span>
              <span class="block mb-5 font-poppins uppercase text-center text-base w-1/2"><a href="#">Terms &
                  Condition</a></span>
            </div>
            {{-- BOTTOM FOOTER --}}
            <div class="text-sm text-center font-poppins">
              2023 Topper Fine Jewelers - Powered by Laravel
            </div>
          </div>
        </div>
      </footer>
      {{-- |------------------------------ END FOOTER |-------------------------------------------------------}}
    </main>
    <script src="{{ url('/js/home.js') }}"></script>
  </body>

</html>