<header class="w-full relative border-b-[1px] lg:hidden">
    <div class="container w-[90%] py-3 mx-auto flex justify-between items-center">
        {{-- HAMBURGER MENU --}}
        <div class="w-[20px] block">
            <span class="humbergerBtn"><i class="fa-solid fa-bars text-xl"></i></span>
            <span class="closeBtn hidden"><i class="fa-solid fa-xmark text-xl"></i></span>
        </div>
        {{-- LOGO --}}
        <div class="block w-[120px]">
            <a href="#">
                <img class="w-[100%] h[100%] object-cover object-center"
                    src="{{ url('/assets/images/topper-1940-logo.svg.svg') }}" alt="">
            </a>
        </div>
        {{-- CART --}}
        <div class="block">
            <a href="#"><span><i class="fa-solid fa-cart-shopping text-xl"></i></span></a>
        </div>
    </div>
</header>
{{-- Hidden PRIZE && Call us--}}
<div class="w-full flex flex-col justify-center items-center lg:hidden">
    {{-- PRIZE --}}
    <div class="flex justify-between items-center w-[210px] py-5">
        <div class="block">
            <img src="{{ url('/assets/images/omega-boutique-badge_120x.webp') }}" alt="">
        </div>
        <div class="block ">
            <img src="{{ url('/assets/images/grand-seiko-salon-badge_120x.avif') }}" alt="">
        </div>
    </div>
    {{-- Call us --}}
    <div class="flex flex-col justify-center items-center py-0">
        <span class="block text-center mx-5 text-md font-poppins font-semibold text-black">Call us at 888-730-2221
            or
            650-347-2221</span>
        <span class="block tet-center mx-5 text-base font-poppins font-light text-black">Tuesday - Saturday 11
            AM - 5PM
            PST</span>
    </div>
</div>
{{-- END PRIZE --}}