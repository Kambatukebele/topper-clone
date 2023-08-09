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
      <section>
        <div>
          <img src="{{ url('/images/AB01764A1C1X1_360x.webp') }}" alt="">
        </div>
        <div>
          <div>
            <div>
              Omega Speedmaster Moonwatch Professional Master Chronometer Sapphire Sandwich
            </div>
            <div>
              Logo Of the Product
            </div>
          </div>
          <!-- SKU -->
          <div>
            SKU: 310.30.42.50.01.002
          </div>
          <!-- Price -->
          <div>
            Price: $8000
          </div>
          <!-- Contact -->
          <div>
            <div>
              Contact Us
            </div>
            <div>
              Or Call: +1(650) 347-2221
            </div>
          </div>
          <!-- Description -->
          <div>
            <h4>For the next generation of space exploration</h4>
            <p>The Speedmaster Moonwatch is one of the world’s most iconic timepieces. Having been a part of all six moon landings, the legendary chronograph is an impressive representation of the brand’s adventurous pioneering spirit.</p>
            <p>Presented on an alternating polished five-link stainless steel bracelet, this 42 mm Moonwatch in stainless steel features sapphire crystal glass on the front as well as on the caseback. Inspired by the 4th generation Speedmaster style worn on the moon, it also includes an asymmetrical case, black step dial and the famous dot over 90 on the anodised aluminium bezel ring.</p>
            <p>The watch is driven by the OMEGA Co-Axial Master Chronometer Calibre 3861, which powers the small seconds sub-dial, 30-minute recorder and 12-hour recorder, along with the central chronograph function.</p>
            <h4>Specification</h4>
            <ul>
              <li>Case: 42mm Stainless steel</li>
              <li>Caliber: Omega cal. 3861 </li>
              <li>Movement: Manual-winding chronograph</li>
              <li>Movement features: 26 jewels, silicon balance spring, magnetic resistance (15,000 gauss), Master Chronometer certified</li>
              <li>Power reserve: approx. 50 hrs</li>
              <li>Vibration: 21,600 v.p.h
</li>
            </ul>
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

</html>