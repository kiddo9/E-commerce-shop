<x-layout>

    <x-nav />

<x-back :url="url()->previous()" />

<div class="p-6" id="product-{{ $product['id'] }}" data-name="{{ $product['Pname'] }}" data-price="{{ $product['price'] }}" data-image="{{ asset('storage/'. $product->Pimg) }}" data-category="{{ $product['category'] }}" data-type="{{ $product['type'] }}">
    @if ($product['brand'] == 'brand new')
    <span class="p-2 mt-4 text-white bg-yellow-400 rounded-md">{{ $product['brand'] }}</span><br>
    @endif
    @if ($product['brand'] == 'Premium sale')
    <span class="p-2 mt-4 text-white bg-blue-400 rounded-md">{{ $product['brand'] }}</span><br>
    @endif
<div class="p-2 mt-6 bg-gray-200 rounded-md" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1000">
   <img src="{{ asset('storage/'. $product->Pimg) }}" alt="{{ $product['Pname'] }}" class="mx-auto">
</div>
<div class="text-center">
    <p class="text-lg" data-aos="fade-down" data-aos-duration="2000">{{ $product['fame'] }}</p>
    <h2 class="text-3xl font-bold" data-aos="fade-down" data-aos-duration="2000">{{ $product['Pname'] }}</h2>
    <div class="flex flex-col items-center content-center self-center justify-center" data-aos="fade-down" data-aos-duration="2000">
        <h4 class="mt-4 text-left text-md">{{ $product['description'] }}</h4>
    </div>
    <h5 class="mt-4 text-xl font-bold">${{ $product['price'] }}</h5>
</div>

 <button class="flex justify-center p-2 mt-4 ml-auto mr-auto w-36 bg-slate-300 hover:bg-green-500 hover:transition hover:delay-100 hover:duration-800 hover:ease-in-out" onclick="AddItem({{ $product['id'] }})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-12 sm:h-12">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
  </svg></button>
</div>

</x-layout>

