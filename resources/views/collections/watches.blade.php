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
      {{-- On small device from 320px to 768px --}}
      {{-- title --}}
      <section class="w-full my-5">
        <div class="w-[90%] mx-auto">

        </div>
      </section>

      <section class="w-full my-5">
        {{-- Sidebar products --}}
        <div>

        </div>
        {{-- Features and filter products --}}
        <div class="w-[90%] mx-auto ">
          <div class="flex justify-between items-center">
            <div class="w-[150px] sm:flex sm:justify-between sm:items-center sm:w-[300px]">
              <div class="hidden sm:block sm:w-[70px] sm:text-gray-500">
                Sort by
              </div>
              <form class="w-full sm:w-[230px]">
                <select name="featured" id="" class="w-full p-2 bg-transparent border text-gray-500">
                  <option value="featured">Featured</option>
                  <option value="best-selling">Best Selling</option>
                  <option value="alphabetically-a-z">Alphabetically A-Z</option>
                  <option value="alphabetically-z-a">Alphabetically Z-A</option>
                  <option value="price-low-to-high">Price, low to high</option>
                  <option value="price-high-to-low">Price, high to low</option>
                  <option value="Date-new-to-old">Date, new to old</option>
                  <option value="Date-old-to-new">Date, old to new</option>
                </select>
              </form>
            </div>
            <div
              class="bg-black text-white font-poppins uppercase w-[100px] cursor-pointer text-center text-base p-2 font-semibold rounded">
              filters
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