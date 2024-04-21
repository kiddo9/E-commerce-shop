<x-layout>
    <div class="flex p-4">
        <div class="absolute flex flex-col w-11/12 mx-auto my-auto sm:mt-10 bg-slate-300 sm:ml-3 md:w-9/12 md:ml-28 lg:w-7/12 lg:ml-60 xl:w-5/12 xl:ml-[26rem]">
            <h1 class="text-xl font-bold text-center">SIGN UP</h1>
            <div class="flex flex-col justify-center p-2">
                <form method="post" action="/users" class="flex flex-col gap-4">
                    @csrf
                    <input type="text" placeholder="Last name" name="Last_name" value="{{ old('Last_name') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    @error('Last_name')
                        <p class="text-sm text-red-500">{{$message }}</p>
                    @enderror
                    <input type="text" placeholder="First name" name="First_name" value="{{ old('First_name') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    @error('First_name')
                    <p class="text-sm text-red-500">{{$message }}</p>
                @enderror
                    <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    @error('email')
                    <p class="text-sm text-red-500">{{$message }}</p>
                @enderror
                    <input type="number" placeholder="phone number" name="mobile" value="{{ old('mobile') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    @error('mobile')
                    <p class="text-sm text-red-500">{{$message }}</p>
                @enderror
                    <input type="password" placeholder="password" name="password" value="{{ old('pasword') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    @error('password')
                    <p class="text-sm text-red-500">{{$message }}</p>
                @enderror
                    <input type="password" placeholder="Repeat password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
                    @error('password_confirmation')
                    <p class="text-sm text-red-500">{{$message }}</p>
                @enderror
                    <button type="submit" class="p-2 transition bg-slate-400 text-md hover:bg-green-500 hover:transition">SIGN UP</button>
                </form><br>
                <a href="/login" class="flex justify-center"><span class="text-xl font-semibold text-center">LOG IN</span></a>
            </div>
        </div>
        </div>

</x-layout>
