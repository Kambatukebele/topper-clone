<!DOCTYPE html>
<html lang="en">
  {{-- HEAD --}}
  <x-header.head />
  {{-- HEAD --}}

  <body>
    <main class="font-poppins">
      {{--| INFORMATION SECTION |--}}
      <x-information_section.information_section />
      {{--| END INFORMATION SECTION |--}}

      {{--| HEADER |--}}
      <x-header.header />
      {{--| END HEADER |--}}


      {{--|--NAVIGATION |--}}
      <x-navigation.navigation />
      {{--| END NAVIGATION |--}}

      {{--| HIDDEN HEADER |---}}
      <x-header.hidden_header />
      {{--|END HIDDEN HEADER |--}}

      {{--| HIDDEN NAVIGATION |--}}
      <x-navigation.hidden_navigation />
      {{--|END HIDDEN NAVIGATION |-}}

      {{--| CONTENT |--}}
      {{-- SlideShow Container --}}
      <section class="slideshow-container w-full my-10 pb-10 border-b-[1px]">
        {{-- Full width images with number and caption text --}}
        <a href="#">
          <div class="mySlides fade w-[90%] h-fit mx-auto">
            <img src="{{ url('images/omega-seamaster-75th-anniv_1400x.webp') }}" alt=""
              class="w-full h-full object-cover object-center">
          </div>
        </a>
        {{-- <div class="mySlides fade w-[90%] mx-auto">
          <img src="{{ url('images/preowned-select_53d3425b-de39-4256-8d08-68aaf21404e2_1400x.webp') }}" alt="">
        </div>
        <div class="mySlides fade w-[90%] mx-auto">
          <img src="{{ url('images/grand-seiko-tentagraph_54e9fa86-2770-4007-8dc2-3025bea8f3cf_1400x.webp') }}" alt="">
        </div>
        <div class="mySlides fade w-[90%] mx-auto">
          <img src="{{ url('images/breitling-top-time_1400x.webp') }}" alt="">
        </div>
        <div class="mySlides fade w-[90%] mx-auto">
          <img src="{{ url('images/blancpain-ecom_1400x.webp') }}" alt="">
        </div> --}}


        {{-- Next and previous buttons --}}
        {{-- <span class="prev"><i class="fa-solid fa-chevron-left"></i></span>
        <span class="next"><i class="fa-solid fa-chevron-right"></i></span> --}}
      </section>
      {{-- <section>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </section> --}}
      {{-- end Slideshow container --}}

      {{-- Treding at Topper --}}
      {{-- Title --}}
      <section class="w-[90%] mx-auto flex justify-center items-center my-10">
        <h2 class="text-center text-3xl font-poppins font-bold">Treding at Topper</h2>
      </section>
      {{-- Watches --}}
      <section class="w-full">
        <div class="w-[90%] mx-auto">
          <div class="flex justify-center items-center flex-wrap lg:flex-nowrap lg:justify-between xl:justify-between">
            {{-- watch card --}}
            <div
              class="w-[140px] md:w-[330px] lg:w-[160px] h-fit my-5 md:flex md:justify-center md:items-center md:flex-col xl:w-[200px]">
              {{-- watche image --}}
              <div
                class="w-[140px] h-[210px] flex justify-center items-center md:w-[250px] md:h-[300px] lg:w-[160px] xl:w-[200px]">
                <img src="{{ url('/images/AB01764A1C1X1_360x.webp') }}" class="w-full h-full object-cover object-center"
                  alt="">
              </div>
              {{-- watch description --}}
              <div class="flex justify-center items-center">
                <p class="text-center text-sm font-poppins font-normal text-gray-500 md:text-base mt-2">Lorem ipsum
                  dolor,
                  sit amet
                  consectetur
                  adipisicing elit.
                </p>
              </div>
              <div class="flex justify-center item">
                <p class="font-bold font-poppins text-xl text-center md:text-3xl">$14,300</p>
              </div>
            </div>
            {{-- watch card --}}
            <div
              class="w-[140px] md:w-[330px] lg:w-[160px] h-fit my-5 md:flex md:justify-center md:items-center md:flex-col xl:w-[200px]">
              {{-- watche image --}}
              <div
                class="w-[140px] h-[210px] flex justify-center items-center md:w-[250px] md:h-[300px] lg:w-[160px] xl:w-[200px]">
                <img src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt=""
                  class="w-full h-full object-cover object-center">
              </div>
              {{-- watch description --}}
              <div class="flex justify-center items-center">
                <p class="text-center text-sm font-poppins font-normal text-gray-500 md:text-base mt-2">Lorem ipsum
                  dolor,
                  sit amet
                  consectetur
                  adipisicing elit.
                </p>
              </div>
              <div class="flex justify-center item">
                <p class="font-bold font-poppins text-xl text-center md:text-3xl">$14,300</p>
              </div>
            </div>
            {{-- watch card --}}
            <div
              class="w-[140px] md:w-[330px] lg:w-[160px] h-fit my-5 md:flex md:justify-center md:items-center md:flex-col xl:w-[200px]">
              {{-- watche image --}}
              <div
                class="w-[140px] h-[210px] flex justify-center items-center md:w-[250px] md:h-[300px] lg:w-[160px] xl:w-[200px]">
                <img src="{{ url('/images/omega-seamaster-ploprof-75th-topper_360x.webp') }}" alt=""
                  class="w-full h-full object-cover object-center">
              </div>
              {{-- watch description --}}
              <div class="flex justify-center items-center">
                <p class="text-center text-sm font-poppins font-normal text-gray-500 md:text-base mt-2">Lorem ipsum
                  dolor,
                  sit amet
                  consectetur
                  adipisicing elit.
                </p>
              </div>
              <div class="flex justify-center item">
                <p class="font-bold font-poppins text-xl text-center md:text-3xl">$14,300</p>
              </div>
            </div>
            {{-- watch card --}}
            <div
              class="w-[140px] md:w-[330px] lg:w-[160px] h-fit my-5 md:flex md:justify-center md:items-center md:flex-col xl:w-[200px]">
              {{-- watche image --}}
              <div
                class="w-[140px] h-[210px] flex justify-center items-center md:w-[250px] md:h-[300px] lg:w-[160px] xl:w-[200px]">
                <img src="{{ url('/images/seiko-5-55th-anniversary-SRPK17-topper_360x.webp') }}" alt=""
                  class="w-full h-full object-cover object-center">
              </div>
              {{-- watch description --}}
              <div class="flex justify-center items-center">
                <p class="text-center text-sm font-poppins font-normal text-gray-500 md:text-base mt-2">Lorem ipsum
                  dolor,
                  sit amet
                  consectetur
                  adipisicing elit.
                </p>
              </div>
              <div class="flex justify-center item">
                <p class="font-bold font-poppins text-xl text-center md:text-3xl">$14,300</p>
              </div>
            </div>
            {{-- watch card --}}
            <div
              class="w-[140px] md:w-[330px] lg:w-[160px] h-fit my-5 md:flex md:justify-center md:items-center md:flex-col xl:w-[200px]">
              {{-- watche image --}}
              <div
                class="w-[140px] h-[210px] flex justify-center items-center md:w-[250px] md:h-[300px] lg:w-[160px] xl:w-[200px]">
                <img src="{{ url('/images/singer-1969-chronograph-topper_360x.webp') }}" alt=""
                  class="w-full h-full object-cover object-center">
              </div>
              {{-- watch description --}}
              <div class="flex justify-center items-center">
                <p class="text-center text-sm font-poppins font-normal text-gray-500 md:text-base mt-2">Lorem ipsum
                  dolor,
                  sit amet
                  consectetur
                  adipisicing elit.
                </p>
              </div>
              <div class="flex justify-center item">
                <p class="font-bold font-poppins text-xl text-center md:text-3xl">$14,300</p>
              </div>
            </div>
            {{-- watch card --}}
            <div
              class="w-[140px] md:w-[330px] lg:w-[160px] h-fit my-5 md:flex md:justify-center md:items-center md:flex-col xl:w-[200px]">
              {{-- watche image --}}
              <div
                class="w-[160px] h-[210px] flex justify-center items-center md:w-[250px] md:h-[300px] lg:w-[140px] xl:w-[200px]">
                <img src="{{ url('/images/ZO9592_main_360x.webp') }}" alt=""
                  class="w-full h-full object-cover object-center">
              </div>
              {{-- watch description --}}
              <div class="flex justify-center items-center">
                <p class="text-center text-sm font-poppins font-normal text-gray-500 md:text-base mt-2">Lorem ipsum
                  dolor,
                  sit amet
                  consectetur
                  adipisicing elit.
                </p>
              </div>
              <div class="flex justify-center item">
                <p class="font-bold font-poppins text-xl text-center md:text-3xl">$14,300</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      {{-- Butoon view more watches --}}
      <a href="{{ route('collections.newest-watches') }}" class="w-[90%] mx-auto flex justify-center items-center my-5">
        <button class="bg-black text-white uppercase font-bold font-poppins text-lg py-2 px-4">View More</button>
      </a>
      {{-- Treding at Topper --}}

      {{-- NEWEST WATCHES SECTION --}}
      <section class="w-full flex justify-center items-center my-10 border-b-[1px] pb-10">
        <div
          class="w-[90%] mx-auto bg-[url('/public/images/newest-watches-bg_449df3c6-aec2-464c-8861-1d5a3962d439.jpg')] bg-no-repeat bg-cover bg-center h-28 flex justify-center items-center flex-col md:h-72">
          <h4 class="text-white text-3xl font-semibold uppercase md:text-7xl">Newest</h4>
          <hr class="w-[100px] md:w-[400px] text-white">
          <h3 class="text-white text-3xl font-bold uppercase md:text-7xl">Watches</h3>
        </div>
      </section>
      {{-- END NEWEST WATCHES SECTION --}}

      {{-- BESPOKE JEWELRY --}}
      {{-- Titlle --}}
      <section class="w-[90%] mx-auto flex justify-center items-center flex-col my-7">
        <h2 class="text-center text-3xl font-poppins font-bold uppercase">Bespoke Jewelry

        </h2>
        <p class="text-base font-poppins text-gray-700 font-light mt-5 text-center">Create a stunning, one-of-a-kind
          heirloom in
          four
          easy steps</p>
      </section>
      {{-- Images --}}
      {{-- On medium, large, big screen --}}
      <section class="hidden md:flex md:justify-center md:items-center md:w-[90%] md:mx-auto mb-10">
        <img src="{{ url('/images/bespoke-jewelry.png') }}" alt="">
      </section>
      {{-- On small device  from 320px --}}
      <section class="flex justify-center items-center w-[90%] mx-auto mb-10 md:hidden">
        <img src="{{ url('/images/bespoke-jewelry-sml.png') }}" alt="">
      </section>
      {{-- Butoon Get Started --}}
      <a href="{{ route('collections.newest-watches') }}"
        class="w-[90%] mx-auto flex justify-center items-center my-10 border-b-[1px] pb-10">
        <button class="bg-black text-white uppercase font-bold font-poppins text-lg py-2 px-4">Get Started</button>
      </a>
      {{-- END BESPOKE JEWELRY --}}

      {{-- Boxes information --}}
      <section class="w-full">
        <div class="w-[90%] mx-auto flex justify-between items-center flex-col  sm:flex-row sm:flex-wrap">
          <a href="#" class="block w-[280px] mx-auto mb-10 sm:w-[49%] sm:mx-0">
            <img src="{{ url('/images/homepage-topper-limited_4f2780ae-376b-4649-bd68-5edd07b36c26_720x.webp') }}"
              alt="" class="w-full h-full object-cover object-center">
          </a>
          <a href="#" class="block w-[280px] mx-auto mb-10 sm:w-[49%] sm:mx-0">
            <img src="{{ url('/images/homepage-pre-owned-select_7701b15b-3449-4fc7-b244-4b42bd95ebca_720x.webp') }}"
              alt="" class="w-full h-full object-cover object-center">
          </a>
          <div
            class="bg-[url('/public/images/newsletter-bg_7e62ea89-5d7d-4d1d-9782-3ab3850df472.webp')] bg-no-repeat bg-cover bg-center flex flex-col justify-center items-center w-[280px] mx-auto mb-10 h-[400px] sm:w-full">
            <h4 class="text-white text-3xl text-center font-poppins font-bold">
              <a href="#">Get the Topper Weekly</a>
            </h4>
            <p class="text-white text-center text-sm font-poppins my-5 sm:px-10">Subscribe for first access to
              new
              releases,
              special
              offers,
              and exclusive pre-owned
              additions</p>
            <form class="flex justify-center items-center flex-col w-56 border border-white sm:flex-row sm:w-96">
              <input type="email" placeholder="Email Address"
                class="w-full py-2 outline-none bg-transparent text-center sm:w-64">
              <button class="text-black uppercase w-full text-base py-2 bg-gray-200 font-semibold sm:w-30">Sign
                Up</button>
            </form>
          </div>
        </div>
      </section>
      {{-- End Boxes information --}}

      {{-- Gift Cart --}}
      {{-- <section class="w-full bg-red-300 block">
        <div
          class="w-[90%] mx-auto bg-yellow-400 lg:flex lg:justify-center lg:items-center lg:min-w-[600px] lg:bg-green-500">
          <div class="w-[220px] mx-auto sm:w-[420px] lg:w-[450px]">
            <img src="{{ url('/images/gift-card_540x.webp') }}" class="w-full h-full object-cover object-center"
      alt="">
      </div>
      <div class="w-[220px] mx-auto sm:w-[420px]">
        <h3 class="text-4xl font-bold text-left my-5">Gift Card</h3>
        <p class="text-base font-poppins text-left">
          Enjoy an easy, no-hassle approach to shopping with gift cards in denominations of $250, $500, and a
          generous $1000,
          perfect for those special occasions. With no expiration date and the ability to shop from the comfort of
          home, this
          premium gift card is sure to make your next gift extra memorable.
        </p>
        <a href="{{ route('collections.newest-watches') }}" class="flex justify-start items-center mt-4">
          <button class="bg-black text-white uppercase font-bold font-poppins text-lg py-2 px-4">Shop Now</button>
        </a>
      </div>
      </div>
      </section> --}}
      {{-- End Gift Cart --}}

      {{--| END CONTENT |--}}



      {{--| FOOTER |--}}
      <x-footer.footer />
      {{--| END FOOTER |--}}
    </main>
    <x-js.my_scripts />
  </body>

</html>