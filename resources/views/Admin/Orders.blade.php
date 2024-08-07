<x-layout>
    <div class="lg:flex">
       <x-AdminNav />
    <div class="w-[300%] lg:w-full mt-5 mr-4 lg:ml-80">
        <form action="" class="flex w-full px-2 py-3 border-2 border-gray-400 rounded-xl">
            <input type="text" class="w-full outline-none">
            <button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
              </svg></button>
        </form>

        <div class="flex mt-5 justify-evenly">
            <select name="" id="" class="w-56 py-2 border-2 border-gray-400 rounded-md">
                <option value="">Today</option>
                <option value="">Yesterday</option>
                <option value="">a week ago</option>
            </select>

            <div class="flex flex-col" >
            <select name="" id="" class="w-56 py-2 border-2 border-gray-400 rounded-md">
                <option value="" disabled selected>Sort</option>
                <option value="">By Order Id</option>
                <option value="">Pending</option>
                <option value="">Delivering</option>
                <option value="">Delivered</option>
                <option value="">Completed</option>
                <option value="">All</option>
            </select>
            </div>
        </div>

        <div>
            <div class="flex justify-between px-1 py-2 mt-4 bg-slate-500">
                <h2>Order Id</h2>
                <h2>User Id</h2>
                <h2>Product Id</h2>
                <h2>Product Name</h2>
                <h2>Product Img</h2>
                <h2>Product Price</h2>
                <h2>Quantity</h2>
                <h2>Total</h2>
                <h2>Address Id</h2>
                <h2>Payment status</h2>
                <h2>Delivery Status</h2>
                <h2>Tracking id</h2>
            </div>

            <div class="flex flex-col w-full gap-3 px-2 shadow-xl">
                @foreach ($orders as $order )
                    <div class="flex justify-between w-full px-1 py-2 mt-4 text-center border-b-2 border-gray-500">
                    <h2>#{{ $order['order_id'] }}</h2>
                    <h2>{{ $order['user_id'] }}</h2>
                    <h2>{{ $order['Product_id'] }}</h2>
                    <h2 class="w-[9rem] overflow-hidden h-8">{{ $order['Productname'] }}</h2>
                        <img src="{{ $order['productImg'] }}" alt="" class="object-cover w-20 h-10 -mt-5 -ml-10">
                    <h2 class="text-center">{{ $order['productprice'] }}</h2>
                    <h2>{{ $order['quantity'] }}</h2>
                    <h2>{{ $order['total'] }}</h2>
                    <h2>{{ $order['Address_id'] }}</h2>
                    <h2 class="text-green-500">true</h2>
                    <h2 class="px-5 py-1 bg-orange-300">Pending...</h2>
                    <h2>{{ $order['Tracking_id'] }}</h2>
                </div>
                @endforeach

            </div>
        </div>

    </div>
    </div>
</x-layout>
