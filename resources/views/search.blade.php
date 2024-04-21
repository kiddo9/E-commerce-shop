<x-layout>
<br>
<x-back :url="url()->previous()" />
<form action="/searchProduct" method="GET">
    <div class="flex justify-between px-2 mx-3 mt-5 border-2 rounded-md">
        <input type="text" name="search" placeholder="search" class="w-full py-3 outline-none">
        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg></button>
    </div>
</form>
</x-layout>
