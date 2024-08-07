<x-layout>
<x-nav />

<x-back :url="url()->previous()" />

<div class="flex justify-center mx-auto mt-9">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
      </svg>
</div>

<div class="mx-3 mt-10">

    <ul class="flex flex-col gap-4">
        <li class="relative p-4 bg-slate-500">
            <label for="" class="text-sm">Lastname</label>
            <p class="text-xl"> {{ auth()->user()->Last_name }}</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute w-6 h-6 top-8 right-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>

        </li>

        <li class="relative p-4 bg-slate-500">
            <label for="" class="text-sm">Firstname</label>
            <p class="text-xl">{{ auth()->user()->First_name }}</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute w-6 h-6 top-8 right-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
        </li>
        <li class="relative p-4 bg-slate-500">
            <label for="" class="text-sm">Email</label>
            <p class="text-xl">{{ auth()->user()->email }}</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute w-6 h-6 top-8 right-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
        </li>
       <a href="" ><li class="relative p-4 bg-slate-500">
            <label for="" class="text-sm">Password</label>
            <p class="text-xl">.............</p>
        </li></a>
        <li class="relative p-4 bg-slate-500">
            <label for="" class="text-sm">mobile</label>
            <p class="text-xl">{{ auth()->user()->mobile }}</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute w-6 h-6 top-8 right-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
        </li>

        <a href="/address"><li class="relative p-4 bg-slate-500">
            <label for="" class="text-sm">Delivery Address</label>
            <p class="text-xl">view Delivery Address</p>
                @if(session('message'))
                <p>{{ session('message') }}</p>
                @endif

                @if(isset($address))
                @foreach ($address as $add )
                <p id="address" data-address-id={{ $add->id }}></p>
                @endforeach
                @else
                <p>No address available.</p>
                @endif
        </li></a>


    </ul>
</div><br>

</x-layout>
