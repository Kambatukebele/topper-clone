<header class="hidden lg:block lg:w-full lg:py-6 lg:border-b-[1px]">
    <div class="lg:w-[90%] lg:mx-auto lg:flex lg:justify-between lg:items-center">
        {{-- LOGO --}}
        <a href="{{ route('home') }}" class="block">
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
        <div class="lg:block lg:relative lg:cursor-pointer">
            <div>
                <i class="fa-solid fa-cart-shopping lg:text-xl"></i>
                <small class="font-poppinss text-base font-semibold uppercase">Cart</small>
            </div>
            <div
                class="lg:w-[20px] lg:bg-black lg:absolute lg:bottom-5 lg:left-16 h-[20px] lg:flex lg:justify-center lg:items-center lg:rounded-full">
                <span class="lg:block lg:font-bold lg:text-sm lg:text-white">0</span>
            </div>
        </div>
    </div>
</header>

<!--Cart-->
{{-- <section class="hidden lg:block lg:fixed lg:top-0 lg:left-0 lg:right-0 lg:bottom-0 lg:z-30">
    <div class="hidden lg:block lg:bg-gray-900 lg:opacity-90 lg:w-full lg:h-screen lg:relative">
        <div
            class="hidden lg:block lg:bg-white lg:absolute lg:top-1/2 lg:left-1/2 lg:-translate-x-1/2 lg:-translate-y-1/2 lg:w-[600px] lg:h-fit lg:p-10 lg:shadow-sm lg:z-50">
            <!--Close model-->
            <div class="hidden closeCartModel lg:block lg:mb-5 lg:py-3 lg:cursor-pointer ">
                <i class="fa-solid fa-xmark block text-right text-2xl"></i>
            </div>
            <!--Title-->
            <div class="hidden lg:block lg:font-semibold lg:mb-9">
                Shopping Cart
            </div>
            <!--Products -->
            <div class="hidden lg:flex lg:justify-between lg:items-center lg:mb-2">
                <!--Image product-->
                <div class="hidden lg:block lg:w-[50px] lg:h-[60px]">
                    <img src="{{ url('/images/19bf481c3d90749d0d4dcb567bb9e26ffa7b0bd427e3a9f5c012d5956152a1ea.jpeg') }}"
alt="" class="hidden lg:block lg:w-full lg:h-full lg:object-cover lg:object-center">
</div>
<!--Description product -->
<div class="hidden lg:block lg:max-w-[200px] lg:text-gray-500 lg:text-xs lg:font-normal">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolores?
</div>
<!--Increase and Decrease product number and show number as well -->
<div class="hidden  lg:flex lg:w-[56px] lg:justify-between lg:items-center">
    <div
        class="hidden decreaseNumberProduct lg:block lg:border lg:bg-white lg:w-[30px] lg:text-center lg:text-sm lg:px-2 lg:py-1 lg:font-semibold">
        -
    </div>
    <div
        class="hidden numberProductCount lg:block lg:border lg:bg-white lg:w-[30px] lg:text-center lg:text-sm lg:px-2 lg:py-1 lg:font-semibold">
        1
    </div>
    <div
        class="hidden increaseNumberProduct lg:block lg:border lg:bg-white lg:w-[30px] lg:text-center lg:text-sm lg:px-2 lg:py-1 lg:font-semibold">
        +
    </div>
</div>
<!--Price product -->
<div class="hidden priceProduct lg:block lg:max-w-[116px]  lg:font-semibold lg:text-sm">
    $7600
</div>
<!--Remove product -->
<div class="hidden deleteProduct lg:block lg:max-w-[116px] ">
    <i class="fa-solid fa-xmark "></i>
</div>
</div>
<!--Total -->
<div class="hidden totalNumberProduct lg:block  lg:text-right lg:my-5">
    <span class="lg:text-gray-500 lg:text-sm">Subtotal</span> <span class="text-2xl font-bold">$7600</span>
</div>
<!--Taxes and discount test -->
<div class="hidden lg:block lg:italic lg:text-right lg:text-xs font-bold">
    Shipping, taxes, and discounts will be calculated at checkout.
</div>
<!--Checkout -->
<div class="hidden lg:flex lg:justify-end lg:my-7">
    <a href="#"
        class="lg:flex lg:justify-center lg:items-center lg:bg-black lg:text-white lg:w-[150px] lg:p-1 lg:rounded lg:cursor-pointer">
        <i class="fa-solid fa-cart-shopping lg:text-md lg:mr-1"></i>
        <span class="lg:uppercase lg:text-md lg:font-semibold">Checkout</span>
    </a>
</div>
</div>
</div>
</section> --}}