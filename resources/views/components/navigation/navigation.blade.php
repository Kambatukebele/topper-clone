<nav class="hidden lg:block lg:w-full lg:relative">
    <ul class="lg:w-[90%] lg:mx-auto lg:flex lg:justify-between lg:items-center">
        <a href="{{ route('home') }}" class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Home</li>
        </a>
        <a href="{{ route('collections.watches') }}"
            class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2 watches">
            <li>Watches</li>
        </a>
        <a href="{{ route('collections.pre-owned') }}"
            class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Pre-owned</li>
        </a>
        <a href="{{ route('collections.jewelry') }}"
            class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Jewelry</li>
        </a>
        <a href="{{ route('blogs.topper-blog') }}"
            class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Blog</li>
        </a>
        <a href="{{ route('pages.about-topper') }}"
            class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>About Topper</li>
        </a>
        <a href="{{ route('pages.contact-us') }}"
            class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Contact us</li>
        </a>
    </ul>
</nav>

{{-- Watches Mega menu --}}
<section class="hidden xl:w-full xl:h-[450px] megaMenu xl:absolute  xl:top-48 xl:left-0 xl:right-0 z-10 ">
    <div
        class="hidden xl:flex xl:justify-between xl:items-center xl:w-[90%] xl:mx-auto xl:border xl:bg-white xl:p-5 xl:shadow-lg megaMenuSub">
        {{-- Top Brands --}}
        <div class="hidden xl:block xl:w-[145px] h-[420px]">
            <h4 class="font-poppins text-md uppercase font-bold text-black">Top brands</h4>
            <ul class="hidden xl:block xl:list-none xl:w-full">
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Omega</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Grand Seiko</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Breitling</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">H. Moser & Cie</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Czapek</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Zenith</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Glashütte Original</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Parmigiani Fleurier</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Blancpain</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Oris</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Seiko Luxe</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Seiko 5</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Shop All Brand</li>
                </a>
            </ul>
        </div>
        {{-- second column --}}
        <div class="hidden xl:block xl:w-[145px] h-[420px]">
            {{-- Availability --}}
            <h4 class="font-poppins text-md uppercase font-bold text-black">Availability</h4>
            <ul class="hidden xl:block xl:list-none xl:w-full">
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">In-Stock</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Pre-Order</li>
                </a>
            </ul>
            {{-- Price range --}}
            <h4 class="font-poppins text-md uppercase font-bold text-black">Price range</h4>
            <ul class="hidden xl:block xl:list-none xl:w-full">
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Below $1000</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">$1000 to $3000</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">$3000 to $5000</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Above $5000</li>
                </a>
            </ul>
            <h4 class="font-poppins text-md uppercase font-bold text-black">Accessories</h4>
            <ul class="hidden xl:block xl:list-none xl:w-full">
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Watch Winders</li>
                </a>
                <a href="#" class="hidden xl:block my-1">
                    <li class="text-base font-normal font-poppins text-black">Watch Boxes & Cases</li>
                </a>
            </ul>
        </div>
        {{-- Picture column --}}
        <div class="hidden xl:flex xl:justify-between xl:items-center xl:w-[850px]">
            <a href="#" class="hidden xl:block xl:w-[260px] xl:h-[420px]">
                <div class="xl:w-[260px] xl:h-[325px]">
                    <img src="{{ url('/images/19bf481c3d90749d0d4dcb567bb9e26ffa7b0bd427e3a9f5c012d5956152a1ea.jpeg') }}"
                        alt="" class="xl:w-full xl:h-full xl:object-cover xl:object-center">
                </div>
                <div class="text-center font-bold font-poppins text-base w-full mt-2">
                    Omega Watches
                </div>
            </a>
            <a href="#" class="hidden xl:block xl:w-[260px] xl:h-[420px]">
                <div class="xl:w-[260px] xl:h-[325px]">
                    <img src="{{ url('/images/1776af86c6c89504f566907daf96d2da0328627a0de9fdde33a227dfdec6f30e.jpeg') }}"
                        alt="" class="xl:w-full xl:h-full xl:object-cover xl:object-center">
                </div>
                <div class="text-center font-bold font-poppins text-base w-full mt-2">
                    Omega Watches
                </div>
            </a>
            <a href="#" class="hidden xl:block xl:w-[260px] xl:h-[420px]">
                <div class="xl:w-[260px] xl:h-[325px]">
                    <img src="{{ url('/images/497179c4d13bd89dd05bd7f23f42a7e882ad1b2111c10659fd73354ab4aa97da.jpeg') }}"
                        alt="" class="xl:w-full xl:h-full xl:object-cover xl:object-center">
                </div>
                <div class="text-center font-bold font-poppins text-base w-full mt-2">
                    Omega Watches
                </div>
            </a>
        </div>
    </div>
</section>
{{-- End Watches Mega menu --}}