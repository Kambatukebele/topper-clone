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
            <section class="w-[90%] mx-auto flex justify-center items-center flex-col my-10">
                <h2 class="font-poppins text-black text-3xl font-normal text-center mb-5">
                    We Buy Your Gold and Platinum
                </h2>
                <p class="font-poppins text-gray-600 text-base font-normal mb-10 text-center">
                    Trust a Jewelery Store with Over 70 years of experience and
                    an
                    <span class="font-bold text-black">A+ Rating with the Better Business Bureau</span>
                    to give you superior value.
                </p>
                <img src="{{ url('/images/download (4).webp') }}" class="mb-10" alt="" />
                <h3 class="font-poppins text-black text-xl font-normal text-center mb-5">
                    Why Should You Choose Topper?
                </h3>
                <p class="font-poppins text-gray-600 text-base font-normal mb-5 text-center">
                    You have several options as to where to sell your gold. For
                    example, you can mail it away to an internet site and see
                    what you get back, or you can go to a pawn shop. However,
                    perhaps your best option is to sell your gold to Topper
                    Jewelers, a trusted, family owned jewelry store on
                    Burlingame Avenue in the heart of the San Francisco
                    Peninsula.
                </p>
                <p class="font-poppins text-gray-600 text-base font-normal mb-10 text-center">
                    If you sell your gold to us, you will have a pleasant
                    experience and receive excellent value. In most instances,
                    you will be dealing directly with one of the owners who will
                    explain the valuation process to you, and you will be issued
                    a check that same day.
                </p>
            </section>
            {{-- FAQ --}}
            <section class="w-[90%] mx-auto lg:w-[1024px]">
                <h2 class="font-poppins text-black text-3xl font-normal text-center mb-5">
                    Frequently Asked Questions
                </h2>
                <!-- FAQ CARD 1 -->
                <div class="w-full mb-5">
                    <!-- Question -->
                    <div class="bg-gray-100 flex justify-between items-center h-[60px] px-3 faqQuestion cursor-pointer">
                        <div class="font-poppins font-semibold text-xl text-black">
                            What do you pay for Gold?
                        </div>
                        <div class="block faqArrow">
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </div>
                        <div class="hidden faqClose">
                            <i class="fa-solid fa-xmark text-3xl"></i>
                        </div>
                    </div>
                    <!-- Answers -->
                    <div class="w-full mt-3 mb-10 faqAnswers hidden">
                        <p class="font-poppins text-gray-600 text-base font-normal mb-5 text-center">
                            Not wearing your old jewelry? Sell it or make it
                            into something you'll enjoy! We buy scrap gold,
                            platinum ‘If silver in a, condition as well as gold
                            coins. After carefully analyzing your items in front
                            of you, we give you a price and pay you immediately.
                            Our prices are based on gold trading at $1,750
                            dollars a troy ounce and platinum trading at $1,800
                            per troy ounce.
                        </p>
                        <p class="font-poppins text-gray-600 text-base font-normal mb-5 text-center">
                            Actual prices are paid based on the current gold and
                            platinum prices. Feel free to compare our rates to
                            the competition, and you will find we offer a
                            compethive high rate of return in the pleasant and
                            safe environment of Burlingame Avenue.
                        </p>
                        <a class="font-poppins text-black text-base font-semibold underline mb-10 text-center" href="{{
                                url(
                                    'https://edition.cnn.com/business/markets/commodities'
                                )
                            }}">Click here for current gold & platinum pricing.</a>
                    </div>
                </div>
                <!-- FAQ CARD 2 -->
                <div class="w-full mb-5">
                    <!-- Question -->
                    <div class="bg-gray-100 flex justify-between items-center h-[60px] px-3 faqQuestion cursor-pointer">
                        <div class="font-poppins font-semibold text-xl text-black">
                            What Type of Gold do you take?
                        </div>
                        <div class="block faqArrow">
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </div>
                        <div class="hidden faqClose">
                            <i class="fa-solid fa-xmark text-3xl"></i>
                        </div>
                    </div>
                    <!-- Answers -->
                    <div class="w-full mt-3 mb-10 faqAnswers hidden">
                        <p class="font-poppins text-gray-600 text-base font-normal mb-5 text-center">
                            We will take almost any type or weight of gold. Some
                            of the most common types customers sell us include:
                        </p>
                        <div class="md:flex md:justify-between md:items-center md:w-[600px] md:mx-auto">
                            <ul>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Bent or Broken Jewel
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Cuff Links
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Dental Gold
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Gold Bracelets
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Gold Earrings
                                </li>
                            </ul>
                            <ul>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Gold Necklaces
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Gold Rings
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Tangled Chains
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Gold Coins
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Gold Watches
                                </li>
                            </ul>
                        </div>
                        <p class="font-poppins text-gray-600 text-base font-normal mb-5 text-center">
                            We do not purchase items that are gold-filled or
                            gold-plated.
                        </p>
                    </div>
                </div>
                <!-- FAQ CARD 3 -->
                <div class="w-full mb-5">
                    <!-- Question -->
                    <div class="bg-gray-100 flex justify-between items-center h-[60px] px-3 faqQuestion cursor-pointer">
                        <div class="font-poppins font-semibold text-xl text-black">
                            How do you determine the Karat & Weight of my Gold?
                        </div>
                        <div class="block faqArrow">
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </div>
                        <div class="hidden faqClose">
                            <i class="fa-solid fa-xmark text-3xl"></i>
                        </div>
                    </div>
                    <!-- Answers -->
                    <div class="w-full mt-3 mb-10 faqAnswers hidden">
                        <p class="font-poppins text-gray-600 text-base font-normal mb-5 text-center">
                            While many items are stamped with a Karat measure,
                            we have different forms of testing equipment that
                            can accurately determine the Karat & Weight. We are
                            happy to show you how the valuation process works
                            and will weigh the items in full view, if you
                            desire.
                        </p>
                    </div>
                </div>
                <!-- FAQ CARD 4 -->
                <div class="w-full mb-5">
                    <!-- Question -->
                    <div class="bg-gray-100 flex justify-between items-center h-[60px] px-3 faqQuestion cursor-pointer">
                        <div class="font-poppins font-semibold text-xl text-black">
                            How Long does it take to evaluate the gold?
                        </div>
                        <div class="block faqArrow">
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </div>
                        <div class="hidden faqClose">
                            <i class="fa-solid fa-xmark text-3xl"></i>
                        </div>
                    </div>
                    <!-- Answers -->
                    <div class="w-full mt-3 mb-10 faqAnswers hidden">
                        <p class="font-poppins text-gray-600 text-base font-normal mb-5 text-center">
                            Most Gold evaluations are finished in about 30
                            ininutes. If you have a large quantity or unusual
                            items this process can take longer. In most cases,
                            you will be issued a check on the spot.
                        </p>
                    </div>
                </div>
                <!-- FAQ CARD 5 -->
                <div class="w-full mb-5">
                    <!-- Question -->
                    <div class="bg-gray-100 flex justify-between items-center h-[60px] px-3 faqQuestion cursor-pointer">
                        <div class="font-poppins font-semibold text-xl text-black">
                            What documentation will you need from me?
                        </div>
                        <div class="block faqArrow">
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </div>
                        <div class="hidden faqClose">
                            <i class="fa-solid fa-xmark text-3xl"></i>
                        </div>
                    </div>
                    <!-- Answers -->
                    <div class="w-full mt-3 mb-10 faqAnswers hidden">
                        <p class="font-poppins text-gray-600 text-base font-normal mb-5 text-center">
                            It is important to us that we are dealing with the
                            true owners of the jewelry that is sold to us.
                            Please be ready to sign a Declaration of Ownership
                            that you own what you will be selling to us, and you
                            must have proper identification.
                        </p>

                        <a class="font-poppins text-black text-base font-semibold underline mb-10 text-center"
                            href="#">Click Here for our Details and Declaration of
                            Ownership (PDF format).</a>
                    </div>
                </div>
                <!-- FAQ CARD 6 -->
                <div class="w-full mb-5">
                    <!-- Question -->
                    <div class="bg-gray-100 flex justify-between items-center h-[60px] px-3 faqQuestion cursor-pointer">
                        <div class="font-poppins font-semibold text-xl text-black">
                            Can I call you on the Phone to get started?
                        </div>
                        <div class="block faqArrow">
                            <i class="fa-solid fa-caret-down text-3xl"></i>
                        </div>
                        <div class="hidden faqClose">
                            <i class="fa-solid fa-xmark text-3xl"></i>
                        </div>
                    </div>
                    <!-- Answers -->
                    <div class="w-full mt-3 mb-10 faqAnswers hidden">
                        <p class="font-poppins text-gray-600 text-base font-normal mb-5 text-center">
                            Absolutely. While we make every effort to be as
                            accurate as we can be when evaluating your jewelry
                            over the phone, final determination of purchase
                            price is subject to our physical inspection of your
                            jewelry. Please be prepared to discuss the following
                            over the phone.
                        </p>
                        <div class="md:flex md:justify-between md:items-center md:w-[600px] md:mx-auto">
                            <ul>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    What are the materials of the jewelry you
                                    have? For instance is it 241d, 18kt or 1410?
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Is the Jewelry stamped with a Karat mark
                                    (14kt, 18kt, 750, 585?)
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    If you are interested in a new piece of
                                    jewelry, what is it?
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Does your jewelry have any diamonds,
                                    precious or semi precious stones?
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    Is the Jewelry you wish to sell made by a
                                    specific designer?
                                </li>
                                <li
                                    class="font-poppins text-gray-600 text-base font-normal mb-3 list-disc list-inside text-left">
                                    What is the approximate weight of the item?
                                </li>
                            </ul>
                        </div>
                        <p class="font-poppins text-gray-600 text-base font-normal mb-5 text-center">
                            We do not purchase items that are gold-filled or
                            gold-plated.
                        </p>
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