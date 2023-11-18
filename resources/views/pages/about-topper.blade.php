<x-website-layout>
      {{--| CONTENT |--}}
      {{-- Title --}}
      <h2 class="font-poppins text-center font-bold text-3xl my-10">About Topper Fine Jewelers</h2>
      <section class="w-[90%] mx-auto xl:w-[900px] my-10">
        <img src="{{ url('/assets/images/download.webp') }}" class="w-full h-full object-center object-cover" alt="">
      </section>
      {{-- some text --}}
      <section class="w-[90%] mx-auto my-10">
        <p class="font-poppins text-base my-5 font-normal text-gray-500 xl:w-[800px] mx-auto">Located in the heart of
          Silicon Valley, Topper
          Fine Jewelers
          has remained
          a proudly family-owned retail store
          in
          Burlingame, California for over three generations.</p>
        <p class="font-poppins text-base my-5 font-normal text-gray-500 xl:w-[800px] mx-auto">Topper is an authorized
          dealer for luxury men’s
          and women’s
          watches,
          specializing in premium Swiss, German,
          and Japanese
          brands like Grand Seiko, OMEGA, Moser, Glashütte Original, Blancpain, Zenith, Nomos, Longines, Seiko Prospex,
          Seiko
          Presage, Zodiac, Oris, and many others. In addition to being authorized dealers of these fine watch brands,
          Topper is
          also home to an extensive collection of bridal and fashion jewelry highlighted by brands such as Tacori, Marco
          Bicego,
          and Roberto Coin.</p>
        <p class="font-poppins text-base my-5 font-normal text-gray-500 xl:w-[800px] mx-auto">With a gift for driving
          community and providing
          a high level
          of
          personalized customer service, store owners
          Russ and Rob
          Caplan also love to help spread the passion for timepieces in the San Francisco Bay Area and beyond by
          sponsoring
          enthusiast meet-ups and developing special limited edition watches exclusively for the store.</p>
      </section>
      {{-- Images --}}
      <section class="w-[90%] mx-auto xl:w-[900px] my-10">
        <img src="{{ url('/assets/images/download (1).webp') }}" class="w-full h-full object-center object-cover" alt="">
      </section>
      {{-- Bill Caplan --}}
      <section
        class="w-[90%] mx-auto md:w-[900px] my-10 h-fit bg-gray-100 flex justify-center items-center flex-col py-5 md:flex-row">
        <div class="w-full">
          <h3 class="font-poppins text-black text-center text-5xl font-semibold mb-5">Bill Caplan 1932 - 2013</h3>
          <a href="{{ route('pages.bill-caplan') }} "
            class="font-poppins block text-2xl text-center p-2 m-2 border-black border-[3px] sm:m-10">Read
            More
            About
            Bill</a>
        </div>
        <div>
          <img src="{{ url('/assets/images/download (2).webp') }}" alt="">
        </div>
      </section>
      {{--| END CONTENT |--}}
    </x-website-layout>