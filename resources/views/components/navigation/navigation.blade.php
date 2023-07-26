<nav class="hidden lg:block lg:w-full">
    <ul class="lg:w-[90%] lg:mx-auto lg:flex lg:justify-between lg:items-center">
        <a href="{{ route('home') }}" class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
            <li>Home</li>
        </a>
        <a href="{{ route('collections.watches') }}"
            class="lg:block lg:border lg:uppercase lg:text-center lg:w-[15%] lg:py-2">
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
<section>
    <div>
        {{-- Top Brands --}}
        <div>
            <h4>Top brands</h4>
            <div>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Shop All Brand</li>
                </a>
            </div>
        </div>
        {{-- second column --}}
        <div>
            {{-- Availability --}}
            <h4>Availability</h4>
            <div>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
            </div>
            {{-- Price range --}}
            <h4>Price range</h4>
            <div>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Shop All Brand</li>
                </a>
            </div>
            <h4>Accessories</h4>
            <div>
                <a href="#">
                    <li>Lorem</li>
                </a>
                <a href="#">
                    <li>Lorem</li>
                </a>
            </div>
        </div>
        {{-- Picture column --}}
        <div>
            <a href="#">
                <div>
                    <img src="{{ url('/images/19bf481c3d90749d0d4dcb567bb9e26ffa7b0bd427e3a9f5c012d5956152a1ea.jpeg') }}"
                        alt="">
                </div>
                <div>
                    Omega Watches
                </div>
            </a>
            <a href="#">
                <div>
                    <img src="{{ url('/images/1776af86c6c89504f566907daf96d2da0328627a0de9fdde33a227dfdec6f30e.jpeg') }}"
                        alt="">
                </div>
                <div>
                    Omega Watches
                </div>
            </a>
            <a href="#">
                <div>
                    <img src="{{ url('/images/497179c4d13bd89dd05bd7f23f42a7e882ad1b2111c10659fd73354ab4aa97da.jpeg') }}"
                        alt="">
                </div>
                <div>
                    Omega Watches
                </div>
            </a>
        </div>
    </div>
</section>
{{-- End Watches Mega menu --}}