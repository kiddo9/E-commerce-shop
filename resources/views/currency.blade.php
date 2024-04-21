<x-layout>

    <x-nav />

    <x-back :url="url()->previous()" />

    <ul class="flex flex-col gap-3 mx-3 mt-16">
        <li class="px-1 py-2 text-white bg-slate-500">USD</li>
        <li class="px-1 py-2 text-white bg-slate-500">EURO</li>
        <li class="px-1 py-2 text-white bg-slate-500">NGN</li>
        <li class="px-1 py-2 text-white bg-slate-500">GHS</li>
        <li class="px-1 py-2 text-white bg-slate-500">ZMW</li>
        <li class="px-1 py-2 text-white bg-slate-500">ZRA</li>
        <li class="px-1 py-2 text-white bg-slate-500">EGP</li>
        <li class="px-1 py-2 text-white bg-slate-500">SCR</li>
        <li class="px-1 py-2 text-white bg-slate-500">MAD</li>
        <li class="px-1 py-2 text-white bg-slate-500">TND</li>
    </ul>

</x-layout>
