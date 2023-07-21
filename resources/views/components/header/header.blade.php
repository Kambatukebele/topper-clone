<header class="hidden lg:block lg:w-full lg:py-6 lg:border-b-[1px]">
    <div class="lg:w-[90%] lg:mx-auto lg:flex lg:justify-between lg:items-center">
        {{-- LOGO --}}
        <a href="#" class="block">
            <img class="w-[170px]" src="{{ url('/images/topper-1940-logo.svg.svg') }}" alt="">
        </a>
        {{--SEARCH --}}
        <div class="lg:block lg:border lg:p-2 lg:w-[380px]">
            <input type="text" placeholder="Search all products..." class="p-1 lg:outline-none bg-transparent">
            <span><i class="fa-solid fa-magnifying-glass"></i></span>
        </div>
        {{-- PRIZE --}}
        <div class="lg:flex lg:justify-between lg:items-center lg:w-[210px]">
            <div class="lg:block">
                <img src="{{ url('/images/omega-boutique-badge_120x.webp') }}" alt="">
            </div>
            <div class="lg:block">
                <img src="{{ url('/images/grand-seiko-salon-badge_120x.avif') }}" alt="">
            </div>
        </div>
        {{-- CART --}}
        <div class="lg:block">
            <a class="block" href="#">
                <span>
                    <i class="fa-solid fa-cart-shopping lg:text-xl"></i>
                    <small class="font-poppinss text-base font-semibold uppercase">Cart</small>
                </span>
            </a>
        </div>
    </div>
</header>