<div class="sticky top-0 z-[500] flex justify-between p-6 text-black bg-white xl:justify-between">
    <div>
    <a href="/"<h1 class="font-sans text-2xl font-bold sm:text-3xl">Today's Store</h1></a>
    </div>
    <div class="absolute top-0 h-[100vh] left-0 right-0 -z-30 sm:z-[100%] bg-black bg-opacity-60 hidden" id="menu_bg"></div>
      <div class="fixed top-0 h-[100vh] left-0 right-14 z-[100%] bg-gray-300 justify-left -translate-x-full sm:w-9/12 lg:-translate-x-0 lg:h-1 lg:w-44 lg:absolute lg:mx-[30%] lg:-mt-6 lg:justify-center lg:bg-transparent"  id="menu_bar">

        <ul class="flex flex-col mt-10 ml-10 gap-9 lg:flex-row ">
            <a href="/"><li class="flex gap-8 text-xl font-bold cursor-pointer lg:flex-col lg:gap-1 lg:justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
              </svg>
              Home</li></a>
              <a href="/shop"><li class="flex gap-8 text-xl font-bold cursor-pointer lg:flex-col lg:gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>
              Shop</li></a>
              @auth
              <a href="/order"><li class="flex gap-8 text-xl font-bold cursor-pointer lg:flex-col lg:gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
              </svg>
              Orders</li></a>
              @endauth
              <a href="/setting"> <li class="flex gap-8 text-xl font-bold cursor-pointer lg:flex-col lg:gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
              setting</li></a>
              @auth
              <form method="post" action="/logout">
                @csrf
              <button type="submit"><li class="flex gap-8 text-xl font-bold cursor-pointer lg:flex-col lg:gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
              </svg>
              Logout</li></button>
            </form>
              @endauth
        </ul>

    </div>
    <nav class="flex">
        <ul class="flex gap-[15px] sm:gap-5 sm:-ml-52">
            @auth
           <a href="/profile"> <li class="cursor-pointer sm:flex sm:text-3xl" id="user-info" data-user-id="{{ auth()->user()->id }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
              </li></a>

            @else
          <a href="/login"><li class="cursor-pointer 2xl:cursor-pointer sm:flex sm:text-xl lg:z-50" id="user-info" data-user-id="null">LOGIN</li></a>
          @endauth
           <a href="/search"> <li class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
              </svg>
              </li></a>
            <li class="cursor-pointer" id="cartIcon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
              </svg><div class="absolute flex justify-center w-4 h-4 p-2 bg-red-500 rounded-full top-4 right-8 sm:p-3 sm:right-20"><span class="mt-[-11px] text-sm" id="cartCounter">0</span></div>
              </li>
                <ul class="relative lg:hidden">
                    <div class="absolute">
                        <li class="relative cursor-pointer" id="menu"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                        </svg>
                        </li>

                        <li class="absolute -top-4 left-[-24px] sm:left-[-32px] mr-2 bg-slate-300 hover:bg-red-600 hover:text-white -translate-x-[6000%]" id="cancel">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                              </svg>

                        </li>
                    </div>
                </ul>
        </ul>
    </nav>
</div>

<div class="fixed z-50 flex justify-center w-screen py-5 -translate-y-full bg-green-500" id="addcartmessage">
    <p class="text-xl text-white" id="addedmessage"></p>
</div>

<div class="fixed z-50 flex justify-center w-screen py-5 text-sm -translate-y-full bg-red-500" id="Errorcartmessage">
</div>


<div class="fixed translate-x-full left-0 right-0 w-full h-full z-[100] bg-white overflow-scroll" id="cartList">

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
</div>

<script>
    const userInfoElement = document.getElementById('user-info');
    const userId = userInfoElement.getAttribute('data-user-id');
    sessionStorage.setItem('userId', JSON.parse(userId));
</script>

<script>
      function OrderItem(){
        var StoredItems = JSON.parse(localStorage.getItem('cartItem'));
        let total = 0;

        var Addressid = JSON.parse(sessionStorage.getItem('AddressId'));

        if(StoredItems.length === 0){
            alert("Can't make. order cart is empty");
            sessionStorage.remove('total');
        }else if(Addressid === null){
            window.location.href = "/address";
        }else{

            fetch('/ordered-placed', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ arrayData: StoredItems })
            })
            .then(response => response.json())
            .then(data => {
                //console.log(data);
                localStorage.clear()
                window.location.href = '/pay';
            })
            .catch((error) => {
                console.error('Error submitting data:', error);
            });
        }
  }

</script>
