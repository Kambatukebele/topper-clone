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

      {{--| END CONTENT |--}}



      {{--| FOOTER |--}}
      <x-footer.footer />
      {{--| END FOOTER |--}}
    </main>
    <x-js.my_scripts />
  </body>

</html>