<x-layout>
    <x-nav />

    <x-back :url="url()->previous()" />

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">

           @if ($userHasOrders)
            @foreach ($groupedOrders as $group)
<div class="mx-4 overflow-hidden border-2 border-gray-500 rounded-lg h-[7rem] Show">
    <div>
       <p class="text-lg text-center">Order was placed at {{ $group['date'] }}</p>
    </div>

            @foreach ($group['orders'] as $order)
                <div class="flex flex-col px-5">
                    <div class="flex items-center justify-around">
                        <img src="{{ $order['productImg'] }}" alt="" class="object-cover w-44">
                        <h2 class="text-xl font-bold">{{ $order['Productname'] }}</h2>
                    </div>
                    <div class="flex mt-4 text-lg font-semibold justify-evenly">
                        <h2 class="">${{ $order['productprice'] }}</h2>
                        <h2>quantiy: {{ $order['quantity'] }}</h2>
                        <h2>total: ${{ $order['total'] }}</h2>
                    </div>
                </div>
            @endforeach
                <div class="flex flex-col flex-wrap items-center justify-around gap-5 px-4 mt-10 mb-5 text-lg font-semibold">
                <h2>Tracking_id: {{ $group['Tracking_id'] }}</h2>
                        <div>payment_status: <span class="text-green-500">{{ $group['pay'] }}</span></div>
                        <h2>Delivery_status: <span>{{ $group['deliver'] }}</span></h2>
                        <div>Address: {{ $group['address'] }}</div>
                </div>
 </div>
                @endforeach
            @else
                <p class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] text-lg font-bold">You don't have any order yet</p>
            @endif



        </div>



        <script>
            const Show = document.querySelectorAll('.Show');
            let isShow = true;

            Show.forEach(function(list) {
                list.addEventListener('click', () => {
                    // Assuming you want to change the styles of the clicked element itself
                    if(isShow == true){
                        list.style.overflow = 'hidden';
                        list.style.height = '100%';
                        list.style.transition = '1s ease-in-out'
                        isShow = false;
                    }else{
                        list.style.overflow = '';
                        list.style.height = '';
                        isShow = true;
                    }

                });
            });

        </script>

</x-layout>
