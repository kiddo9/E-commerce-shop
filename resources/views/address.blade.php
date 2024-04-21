<x-layout>

    <x-nav />
    <x-back :url="url()->previous()" />

 <br>   <div class="flex p-4">
        <div class="absolute flex flex-col w-11/12 my-auto ml-auto bg-slate-300 md:ml-8 sm:ml-6 lg:ml-8 xl:ml-12">
            <h1 class="text-xl font-bold text-center">Delivery Location</h1>
            <div class="flex flex-col justify-center p-2">
                <form method="post" action="/deliveryAddress" class="flex flex-col gap-4">
                    @csrf
                    <select name="country" value="{{ old('country') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                        <option value="Nigeria">Nigeria</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Camerron">Camerron</option>
                        <option value="Kanya">Kanya</option>
                    </select>
                    @error('country')
                        <p class="text-sm text-red-500">{{$message }}</p>
                    @enderror
                    <select name="state" value="{{ old('First_name') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                        <option value="Anambra">Anambra</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Enugu">Enugu</option>
                        <option value="Abia">Abia</option>
                        <option value="Delta">Delta</option>
                        <option value="lagos">lagos</option>
                    </select>
                    @error('state')
                    <p class="text-sm text-red-500">{{$message }}</p>
                @enderror
                <select name="LGA" value="{{ old('First_name') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    <option value="Onitsha NORTH">Onitsha NORTH</option>
                    <option value="Onitsha south">Onitsha south</option>
                    <option value="GRA I">GRA I</option>
                    <option value="GRA II">GRA II</option>
                    <option value="GRA III">GRA III</option>
                </select>
                    @error('LGA')
                    <p class="text-sm text-red-500">{{$message }}</p>
                @enderror
                <select name="pLOCATION" value="{{ old('First_name') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    <option value="SHOPRITE ONITSHA">SHOPRITE ONITSHA</option>
                    <option value="ROBIAN STORE">ROBIAN STORE</option>
                    <option value="Market Place">Market Place</option>
                    <option value="EveryDay">EveryDay</option>
                    <option value="5 star">5 star</option>
                </select>
                    @error('mobile')
                    <p class="text-sm text-red-500">{{$message }}</p>
                @enderror
                    <button type="submit" class="p-2 transition bg-slate-400 text-md hover:bg-green-500 hover:transition">ORDER</button>
                </form><br>
            </div>
        </div>
        </div>

</x-layout>
