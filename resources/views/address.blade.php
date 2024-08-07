<x-layout>

    <x-nav />
    <x-back :url="url()->previous()" />

 <br>   <div class="flex p-4">
        <div class="absolute flex flex-col w-11/12 my-auto ml-auto bg-slate-300 md:ml-8 sm:ml-6 lg:ml-8 xl:ml-12">
            <h1 class="text-xl font-bold text-center">Delivery Location</h1>
            <div class="flex flex-col justify-center p-2">
                <form method="post" action="/deliveryAddress" class="flex flex-col gap-4">
                    @csrf
                    <input type="text" placeholder="country eg:Nigeria" name="country" value="{{ old('country') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    @error('country')
                        <p class="text-sm text-red-500">{{$message }}</p>
                    @enderror

                    <input type="text" placeholder="state eg: anambra"  name="state" value="{{ old('state') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    @error('state')
                    <p class="text-sm text-red-500">{{$message }}</p>
                    @enderror

                    <input type="text" placeholder="LGA"  name="LGA" value="{{ old('LGA') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    @error('LGA')
                    <p class="text-sm text-red-500">{{$message }}</p>
                    @enderror

                    <input type="text" placeholder="popular location" name="pLOCATION" value="{{ old('pLOCATION') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    @error('pLOCATION')
                    <p class="text-sm text-red-500">{{$message }}</p>
                @enderror
                    <button type="submit" class="p-2 transition bg-slate-400 text-md hover:bg-green-500 hover:transition">Add</button>
                </form><br>
            </div>
        </div>
        </div>

</x-layout>
