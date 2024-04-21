<x-layout>

    <x-nav />

<div class="p-4 sm:p-2 ">
    <div class="relative h-full p-6 bg-gray-200 lg:h-[46rem] lg:ml-5 lg:mt-6 xl:h-[44rem] 2xl:h-[40rem]">
        <ul class="justify-between hidden lg:top-32 lg:flex lg:flex-col lg:absolute lg:gap-20 lg:ml-6 xl:gap-28">
            <li class="w-2 h-2 bg-black rounded-full"></li>
            <li class="w-2 h-2 bg-black rounded-full"></li>
            <li class="w-2 h-2 bg-black rounded-full"></li>
            <li class="w-2 h-2 bg-black rounded-full"></li>
        </ul>
        <div class="flex flex-wrap lg:flex-col lg:mt-36 lg:ml-20 xl:mt-44">
            <h1 class="mb-4 text-3xl font-bold sm:text-4xl lg:text-5xl lg:w-7/12" data-aos="fade-down" data-aos-duration="3000" data-aos-delay="1000">SHOP COMPUTER & ACCESSORIES</h1>
            <p class="mb-4 text-lg sm:text-2xl lg:text-3xl lg:w-2/5" data-aos="fade-down" data-aos-duration="3000" data-aos-delay="2000">shop laptop, desktops, monitor, tablets, pc gaining a gift card with extra price and accessories and many more</p>
            <span class="p-4 text-xl border-2 border-black rounded-lg lg:w-32" data-aos="fade-down" data-aos-duration="3000" data-aos-delay="3000">view more</span>
        </div><br>

        @foreach ($product as $products)
        @if ($products['brand'] == 'Premium sale')
            <!--<div class="relative p-4 bg-slate-50 rounded-3xl">-->
                <x-card class="relative p-4 bg-slate-50 rounded-3xl lg:w-80 lg:left-[50%] lg:-top-1/3 xl:-top-1/4 2xl:left-[55%]" data-aos="zoom-in" data-aos-duration="3000">
                <span class="p-2 mt-4 text-white bg-blue-400 rounded-md">{{ $products['brand'] }}</span>
                <img src="{{ asset('storage/'. $products->Pimg) }}" alt="{{ $products['Pname'] }}" class="flex w-56 mx-auto sm:w-[60%] sm:top-[-220px] lg:w-96 lg:absolute lg:left-[60%] lg:scale-x-[-1]">
                <span class="font-sans text-lg sm:text-2xl">{{ $products['fame'] }}</span>
                <h2 class="font-sans text-xl font-bold sm:text-3xl">{{ $products['Pname'] }}</h2>
                <h5 class="font-sans text-3xl font-extrabold sm:text-4xl">${{ $products['price'] }}</h5>
                <h6 class="flex font-sans font-bold text-md sm:text-xl">$366.99</h6>
                <a href="/welcome/{{ $products['id'] }}" class="flex gap-2 sm:text-3xl sm:mt-4">
                    <span>view page</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </a>
                </x-card>
          <!--  </div>-->
        @endif
    @endforeach

    </div>

    <div class="mt-8">

        <x-category />

    </div>

    <div class="flex flex-col gap-8 pb-16 sm:hidden" data-aos="slide-right" data-aos-duration="1000" data-aos-delay="2000">

    <div class="relative bg-red-200 top-[60px] p-4 flex justify-between">
        <div class="flex flex-col">
            <span class="flex flex-wrap font-sans font-bold text-md sm:text-xl">Today's Store</span>
            <h6 class="mt-2 font-sans text-sm w-28 sm:text-3xl">shop laptop, desktops, monitor, tablets, pc gaining a gift card with extra price and accessories and many more</h6>
            <span class="flex gap-2 mt-2 sm:text-3xl sm:mt-4">view others<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
            </span>
        </div>
        <img src="{{ asset('image/ei_1711037555767-removebg-preview.png') }}" alt="" class="w-36 ">
    </div>
    </div>

    <section class="relative flex mt-10 lg:mx-4" data-aos="slide-right" data-aos-duration="1000" data-aos-delay="100">
        <div class="relative p-6 bg-gray-200 h-[60vh] xl:flex xl:w-screen 2xl:w-screen md:flex md:justify-between md:w-screen">
            <div class="flex flex-wrap xl:flex-col md:flex-col">
                <span class="lg:pr-96 lg:text-xl">todays activities</span>
                <h1 class="mb-4 text-3xl font-bold lg:pr-96 sm:text-4xl lg:text-6xl">TODAY'S STORE DELIVERS TO YOU</h1>
                <p class="w-48 mb-4 text-md sm:text-xl">shop laptop, desktops, monitor, tablets, pc gaining a gift card with extra price and accessories and many more</p>
                <span class="absolute p-4 flex text-xl border-2 border-black rounded-lg top-[80%]">view more</span>
            </div>

            <div class="absolute top-20 left-20 lg:right-1 lg:-top-6">
                <img src="{{ asset('image/ei_1711461662234-removebg-preview.png') }}" alt="" class="float-right w-11/12 sm:w-12/12 md:w-12/12 lg:w-7/12 2xl:w-6/12">
            </div>
        </div>
    </section>

    <section class="mt-8" data-aos="slide-up" data-aos-duration="2000">
        <h1>SHOH HERE</h1>
        <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3 lg:grid xl:grid-cols-4">
            @foreach ($product as $products)
            <x-product-card :products="$products" />
            @endforeach
        </div>
    </section>
</div>
</x-layout>
