<x-website-layout>

      {{--| CONTENT |--}}
      <section class="w-90% mx-auto my-20 flex justify-center items-center flex-col">
        <h2 class="font-poppins text-center text-3xl mx-9">Topper Fine Jewelers Now Offers TWO Financing Options!</h2>
        <p class="font-poppins text-center text-gray-600 font-light my-5">with approved credit</p>
        <div class="w-[90%] mx-auto flex justify-between items-center flex-col md:flex-row lg:w-[900px]">
          <a href="{{ route('pages.wells-fargo-financing') }}" class="mb-5 md:mb-0 mr-3">
            <img src="{{ url('/assets/images/download (5).webp') }}" alt="">
          </a>
          <a href="{{ route('pages.synchrony-financing') }}">
            <img src="{{ url('/assets/images/download (6).webp') }}" alt="">
          </a>
        </div>
      </section>
      {{--| END CONTENT |--}}
    </x-website-layout>