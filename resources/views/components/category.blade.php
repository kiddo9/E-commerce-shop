
<h1 class="text-xl">Shop by Categories</h1>

<div class="grid grid-cols-2 gap-2 sm:grid-cols-4 sm:grid sm:gap-2 md:ml-10 lg:ml-12 xl:ml-16">
        <a href="{{ route('products.index', ['category' => 'Beauty picks']) }}"">
            <div class="flex flex-col justify-center p-4 mt-4 bg-gray-200 h-52 sm:object-cover sm:w-36 sm:h-38 lg:w-52 lg:h-[20rem] xl:w-11/12" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1000">
                <img src="{{ asset('image/ei_1711038134060-removebg-preview.png') }}" alt="" class="xl:w-52">
                <h2 class="font-sans text-lg text-center xl:text-md">Beauty picks</h2>
            </div>
        </a>
        <a href="{{ route('products.index', ['category' => 'Computer and accessories']) }}"">
            <div class="flex flex-col justify-center p-4 mt-4 bg-gray-200 h-52 sm:w-36 sm:h-38 md:w-40 md:h40 lg:w-52 lg:h-[20rem] xl:w-11/12" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1200">
                <img src="{{ asset('image/ei_1711461735923-removebg-preview.png') }}" alt="" class="sm:w-16 lg:w-36">
                <h2 class="font-sans text-center text-md">Computer and accessories</h2>
            </div>
        </a>
        <a href="{{ route('products.index', ['category' => 'Video Games']) }}"">
            <div class="flex flex-col justify-center p-4 mt-4 bg-gray-200 h-52 sm:w-36 sm:h-38 md:w-40 md:h40 lg:w-52 lg:h-[20rem] xl:w-11/12" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1400">
                <img src="{{ asset('image/ei_1711461578922-removebg-preview.png') }}" alt="" class="sm:w-20 lg:w-40">
                <h2 class="font-sans text-lg text-center">Video Games</h2>
            </div>
        </a>
        <a href="{{ route('products.index', ['category' => 'Smart Gadgets']) }}"">
            <div class="flex flex-col justify-center p-4 mt-4 bg-gray-200 h-52 sm:w-36 sm:h-52 md:w-40 md:h52 lg:w-52 lg:h-[20rem] xl:w-11/12" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1600">
                <img src="{{ asset('image/ei_1711009628724-removebg-preview.png') }}" alt="" class="sm:w-28 lg:w-52">
                <h2 class="font-sans text-xl text-center">Smart Gadgets</h2>
            </div>
        </a>
</div>
