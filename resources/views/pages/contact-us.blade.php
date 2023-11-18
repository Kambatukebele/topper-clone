<x-website-layout>

      {{--| CONTENT |--}}
      <section class="w-[90%] mx-auto my-14 md:w-[600px]">
        <div class="w-full font-poppins font-bold text-2xl text-center my-10">
          Contact Us
        </div>
        <form action="" class="w-full">
          <div class="w-full mb-3">
            <input type="text" name="name" value="" id="" placeholder="Name"
              class="w-full h-full object-cover object-center border rounded py-2 pl-1 text-sm">
          </div>
          <div class="w-full mb-3">
            <input type="email" name="email" value="" placeholder="Email"
              class="w-full h-full object-cover object-center border rounded py-2 pl-1 text-sm">
          </div>
          <div class="w-full mb-3">
            <input type="text" name="phone_number" value="" id="" placeholder="Phone Number"
              class="w-full h-full object-cover object-center border rounded py-2 pl-1 text-sm">
          </div>
          <div class="w-full mb-3">
            <textarea name="message" id="" cols="30" rows="10"
              class="w-full h-full object-cover object-center border rounded py-2 pl-1 text-sm">Message
                          </textarea>
          </div>
          <div class="w-full mb-3">
            <button type="submit"
              class="w-full h-full object-cover object-center border rounded mx-auto py-2 pl-1 bg-black text-white uppercase font-bold cursor-pointer">Send</button>
          </div>
        </form>
      </section>
      {{-- Maps location --}}
      <section class="w-[90%] mx-auto my-10">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3161.996822055802!2d-122.34985972360616!3d37.57869252342997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f9df19c8f178d%3A0xf0c0023d9d5dadc0!2s1294%20Burlingame%20Ave%2C%20Burlingame%2C%20CA%2094010%2C%20USA!5e0!3m2!1sen!2scz!4v1691483471996!5m2!1sen!2scz"
          width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>
      {{-- More details Location --}}
      <section class="w-[90%] mx-auto my-10">
        <h3 class="font-poppins text-black text-2xl text-center font-bold my-5">Our Location</h3>
        <h4 class="font-poppins text-black text-xl text-center font-semibold my-5">1294 Burlingame Ave., Burlingame, CA
          94010
        </h4>
        <p class="font-poppins text-gray-500 text-base text-center font-normal my-5 md:w-[800px] md:mx-auto">Topper is
          closed
          January 1st,
          Memorial
          Day, 4th of July, Labor Day,
          Thanksgiving, December 25th, and December
          31st. We
          will be open normal hours on all other days though we close at 4PM on Christmas Eve.</p>
      </section>

      {{--| END CONTENT |--}}
    </x-website-layout>