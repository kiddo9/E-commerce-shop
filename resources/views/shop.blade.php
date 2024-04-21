<x-layout>

    <x-nav />
    <x-back :url="url()->previous()" />

<section class="p-2">
    <h1>SHOH HERE</h1>
    <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3 lg:grid xl:grid-cols-4">

        @foreach ($product as $products)
        <div class="p-2 bg-gray-200 rounded-md" id="product-{{ $products['id'] }}" data-name="{{ $products['Pname'] }}" data-price="{{ $products['price'] }}" data-image="{{ asset('storage/'. $products->Pimg) }}" data-category="{{ $products['category'] }}" data-type="{{ $products['type'] }}"><br>
            @if ($products['brand'] == 'brand new')
            <span class="p-2 mt-4 text-white bg-yellow-400 rounded-md">{{ $products['brand'] }}</span>
            @endif
            @if ($products['brand'] == 'Premium sale')
            <span class="p-2 mt-4 text-white bg-blue-400 rounded-md">{{ $products['brand'] }}</span>
            @endif
           <a href="/welcome/{{ $products['id'] }}"><img src="{{ asset('storage/'. $products->Pimg) }}" alt="{{ $products['Pname'] }}" class="mx-auto"></a>
            <p class="text-center text-md">{{ $products['fame'] }}</p>
            <h2 class="text-2xl font-bold text-center">{{ $products['Pname'] }}</h2>
            <div class="">
                <h4></h4>
                <span></span>
            </div>
            <h5 class="text-xl font-bold text-center">${{ $products['price'] }}</h5>
            <button class="relative top-0 right-0 flex justify-center p-2 mt-4 ml-auto mr-auto w-36 bg-slate-300 hover:bg-green-500 hover:transition hover:delay-100 hover:duration-800 hover:ease-in-out" onclick="AddItem({{ $products['id'] }})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-12 sm:h-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
              </svg></button>
        </div>
        @endforeach
    </div>
</section>

@if(isset($message))
<div class="mx-auto mt-20 text-xl font-extrabold text-center">{{ $message }}</div>
@endif


</x-layout>

