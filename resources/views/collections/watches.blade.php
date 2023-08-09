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
      <section class="lg:flex lg:justify-between lg:items-start  lg:w-[90%] lg:mx-auto lg:my-10">
        {{-- left side descripion --}}
        <div class="hidden lg:w-[200px] lg:block">
          {{-- Card --}}
          <div class="  mb-4">
            <div class="lg:flex lg:justify-between lg:items-center lg:w-full lg:px-2 lg:border-b lg:mb-5">
              <div class="lg:mb-1">
                <h3 class="font-semibold text-black text-lg">Availability</h3>
              </div>
              <div class="lg:text-lg lg:mb-1 lg:cursor-pointer">
                <i class="fa-solid fa-chevron-up lg:hidden"></i>
                <i class="fa-solid fa-chevron-down lg:block"></i>
              </div>
            </div>
            <div class="lg:h-fit lg:w-full">
              <div class="">
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">in-stock</span>
              </div>
              <div>
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">Pre-Order</span>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <div class="lg:flex lg:justify-between lg:items-center lg:w-full lg:px-2 lg:border-b lg:mb-5">
              <div class="lg:mb-1">
                <h3 class="font-semibold text-black text-lg">Brand</h3>
              </div>
              <div class="lg:text-lg lg:mb-1 lg:cursor-pointer">
                <i class="fa-solid fa-chevron-up lg:hidden"></i>
                <i class="fa-solid fa-chevron-down lg:block"></i>
              </div>
            </div>
            <div class="lg:h-fit lg:w-full ">
              <div class="">
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">Armin Storm</span>
              </div>
              <div>
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">Ball</span>
              </div>
              <div>
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">Bell & Ross</span>
              </div>
              <div>
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">Blancpain</span>
              </div>
              <div>
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">Bremont</span>
              </div>
              <div>
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">Czapek</span>
              </div>
              <div>
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">Fears</span>
              </div>
              <div>
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">G-Shock</span>
              </div>
              <div>
                <input type="checkbox"><span class="text-gray-500 font-light text-sm ml-1">Glashutte Original</span>
              </div>
            </div>
          </div>
          {{-- End Card --}}
        </div>
        {{-- End left side descripion --}}
        {{-- Right side products --}}
        {{-- Products --}}
        <div class="w-[90%] mx-auto my-10 lg:w-[800px] md:w-[680px] xl:w-[1000px] 2xl:w-[1200px]">
          {{-- Title and filter --}}
          <div class="mb-5 lg:flex justify-between items-center">
            <div class="font-poppins font-bold text-xl">Watches</div>
            <div class="my-5">
              <div class="hidden">Sort by</div>
              <div class="">
                <select class="py-2 font-light text-sm" name="" id="">
                  <option value="">Featured</option>
                  <option value="">Best Selling</option>
                  <option value="">Alphabetically, A-Z</option>
                  <option value="">Alphabetically, Z-A</option>
                  <option value="">Price, low to high</option>
                  <option value="">Price, high to low</option>
                  <option value="">Date, new to old</option>
                  <option value="">Date, old to new</option>
                </select>
              </div>
            </div>
          </div>
          {{-- End Title and filter --}}
          <div
            class="w-[300px] mx-auto grid gap-5 grid-cols-2 grid-flow-row-3 sm:grid-cols-3 sm:w-[580px] md:w-[680px] lg:grid-cols-4 xl:w-[1000px] 2xl:w-[1200px]">
            {{-- Card Watches products --}}
            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div
                class="w-[100px] flex justify-center items-center sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-full sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>

            <div
              class="w-[130px] flex justify-center items-center flex-col sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
              {{-- Watch image --}}
              <div class="w-[100px] sm:w-[180px] md:w-[200px] lg:w-[160px] xl:w-[210px] 2xl:w-[240px]">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/images/g-shock-mtg-aurora-borealis-topper_360x.webp') }}" alt="">
              </div>
              {{-- Watch Description --}}
              <div class="w-full">
                <p class="font-normal font-poppins text-sm text-gray-500 my-2">Zenith Defy El Primero 21
                  95.9002.9004
                </p>
                <p class="font-semibold font-poppins text-xl text-black">$13,000</p>
              </div>
              {{-- Sold out and waiting list --}}
              <div>

              </div>
            </div>
          </div>
        </div>
      </section>
      {{--| END CONTENT |--}}



      {{--| FOOTER |--}}
      <x-footer.footer />
      {{--| END FOOTER |--}}
    </main>
    <x-js.my_scripts />
  </body>

</html>