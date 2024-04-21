@if (session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show" class="fixed w-full h-10 bg-green-600 z-[50000] top-0 justify-center py-2 text-center text-white">{{ session('message') }}
</div>
@endif


