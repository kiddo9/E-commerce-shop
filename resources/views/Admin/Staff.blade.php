<x-layout>
    <div class="lg:flex">
       <x-AdminNav />
    <div class="w-[300%] lg:w-full mt-5 mr-4 lg:ml-80 ">
        <div class="flex justify-between">
            <form action="" class="flex px-2 py-3 border-2 border-gray-400 w-96 rounded-xl">
                <input type="text" class="w-full outline-none" placeholder="search.....">
                <button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg></button>
           </form>

           <button class="z-50 px-4 py-2 bg-gray-300 rounded-lg shadow-xl" id="FormShow">Add New Staff</button>
        </div>


        <div class="flex mt-5 justify-evenly">
            <select name="" id="" class="w-56 py-2 border-2 border-gray-400 rounded-md">
                <option value="">All</option>
                <option value="">Verified Email</option>
                <option value="">Unverified Email</option>
            </select>

            <div class="flex flex-col" >
            <select name="" id="" class="w-56 py-2 border-2 border-gray-400 rounded-md">
                <option value="" disabled selected>Sort</option>
                <option value="">Id</option>
                <option value="">First Name</option>
                <option value="">Last Name</option>
                <option value="">email</option>
            </select>
            </div>
    </div>

    <div>
        <div class="flex justify-between px-2 py-2 mt-4 text-center bg-slate-500">
            <h2> Id</h2>
            <h2>User_id</h2>
            <h2>Country</h2>
            <h2>State</h2>
            <h2>LGA</h2>
            <h2>location</h2>
            <h2>date</h2>
            <h2 class="px-3 py-1 rounded-md opacity-0">Terminate</h2>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="opacity-0 size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
              </svg>
        </div>

        <div class="flex flex-col w-full gap-3 px-2 shadow-xl">
            @foreach ($Addresses as $address)
                <div class="flex justify-between w-full px-1 py-2 mt-4 text-center border-b-2 border-gray-500">
                    <h2>{{ $address['id'] }}</h2>
                    <h2>{{ $address['userid'] }}</h2>
                    <h2>{{ $address['country'] }}</h2>
                    <h2>{{ $address['state'] }}</h2>
                    <h2>{{ $address['LGA'] }}</h2>
                    <h2>{{ $address['pLOCATION'] }}</h2>
                    <h2>{{ $address['updated_at'] }}</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    <button class="px-3 py-1 text-white bg-red-500 rounded-md">Terminate</button>
                </div>
            @endforeach


        </div>
    </div>


    </div>
</x-layout>
