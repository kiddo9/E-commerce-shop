<x-layout>
<div class="flex p-4 my-40 sm:mx-auto">
<div class="absolute flex flex-col w-11/12 mx-auto my-auto bg-slate-300 sm:ml-3 md:w-9/12 md:ml-28 lg:w-7/12 lg:ml-60 xl:w-5/12 xl:ml-[26rem]">
    <h1 class="text-xl font-bold text-center">LOG IN</h1>
    <div class="flex flex-col justify-center p-2">
        <form method="post" action="/users/authenticate" class="flex flex-col gap-4">
            @csrf

            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
            @error('email')
            <p class="text-sm text-red-500">{{$message }}</p>
        @enderror

            <input type="password" placeholder="password" name="password" value="{{ old('pasword') }}" class="px-3 py-3 bg-transparent border-b-2 border-gray-600 outline-none">
            @error('password')
            <p class="text-sm text-red-500">{{$message }}</p>
        @enderror

            <button type="submit" class="p-2 transition bg-slate-400 text-md hover:bg-green-500 hover:transition">LOG IN</button>
        </form><br>
        <a href="" class="flex justify-center"> <span class="text-xl font-semibold">Forgotton Password?</span></a>
        <a href="/signup" class="flex justify-center"><span class="text-xl font-semibold">Sign up </span></a>
    </div>
</div>
</div>

</x-layout>
