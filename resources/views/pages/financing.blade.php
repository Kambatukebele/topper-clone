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
      <section class="w-90% mx-auto my-20 flex justify-center items-center flex-col">
        <h2 class="font-poppins text-center text-3xl mx-9">Topper Fine Jewelers Now Offers TWO Financing Options!</h2>
        <p class="font-poppins text-center text-gray-600 font-light my-5">with approved credit</p>
        <div class="w-[90%] mx-auto flex justify-between items-center flex-col md:flex-row lg:w-[900px]">
          <a href="{{ route('pages.wells-fargo-financing') }}" class="mb-5 md:mb-0 mr-3">
            <img src="{{ url('/images/download (5).webp') }}" alt="">
          </a>
          <a href="{{ route('pages.synchrony-financing') }}">
            <img src="{{ url('/images/download (6).webp') }}" alt="">
          </a>
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

</html>