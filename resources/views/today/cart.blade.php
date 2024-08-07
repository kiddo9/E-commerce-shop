<x-layout>

    <x-nav />

        <span class="float-right mr-10" id="Close_cart"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
          </svg>
        </span><br>
        <div class="p-2 cartItem" id="cartIte">
            <div "><p class="hidden text-center" id="cartContainer">No Items Added Yet</p><br></div>
           {{--<div class="flex justify-around w-full gap-6 p-2 mt-4 rounded-lg bg-slate-600">
                <img src="{{ asset('image/ei_1711010016771-removebg-preview.png') }}" alt="" class="object-cover w-1/3 bg-gray-300 h-[150px]">
                <div class="flex flex-col w-[100%]">
                    <h2 class="text-lg font-bold text-left">${productName}</h2>
                    <p class="text-xl"><span>$</span>${productPrice}</p>
                    <input type="number" value="1" class="w-8" title="size" id="quantity" data-name="${productName}" data-price="${productPrice}" data-image="${productImage}">
                    <span class="text-md">quty total: $</span>
                </div>
                <button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </div>--}}
        </div>
        <hr class="border-gray-700">
        <div class="flex flex-col gap-5">
            <div class="flex gap-5 mx-auto">
                <p>Delivery fee</p><span id="Delivery">--------</span>
            </div>
            <div class="flex gap-5 mx-auto">
                <p>Sub Total</p><span id="subtotal">--------</span>
            </div>
            @auth
           <button type="submit" class="flex justify-center w-10/12 gap-4 p-3 mx-auto text-xl leading-tight text-white bg-gray-600" onclick="OrderItem()">CHECKOUT<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg><span class="text-sm" id="total">$0</span></button><br>
              @else
            <a href="/login">  <button class="flex justify-center w-10/12 gap-4 p-3 mx-auto text-xl leading-tight text-gray-300 bg-gray-100 cursor-not-allowed" title="Please Log in to be able to checkout">CHECKOUT<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg><span class="text-sm" id="total">$0</span></button><a><br>
            @endauth
        </div><br><br><br><br><br><br><br><br><br><br><br>

</x-layout>
