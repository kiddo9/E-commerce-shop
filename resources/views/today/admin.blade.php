<x-layout>
<div class="flex flex-col justify-center h-full gap-5 px-2 py-2 bg-slate-400">
    <h2 class="text-2xl font-extrabold text-center">Add New Products</h2>
    <form method="POST" action="/today" enctype="multipart/form-data" class="flex flex-col justify-center gap-4 ">
        @csrf
        <div class="flex">
        <select class="w-full py-3 text-center" name="brand" value="Brand">
            <option value="brand new">brand new</option>
            <option value="Premium sale">Premium sale</option>
            <option value="bored">bored</option>
            <option value="normal">normal</option>
        </select>
        @error('brand')
            <p class="mt-1 text-red-500 text-md">{{ $message }}</p>
        @enderror
        </div>
        <div class="flex flex-col">
            <label>Image</label>
            <input type="file" name="Pimg">
            @error('Pimg')
            <p class="mt-1 text-red-500 text-md">{{ $message }}</p>
        @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label>Company</label>
            <input type="text" placeholder="COMPANY" name="fame" class="py-2 ">
            @error('fame')
            <p class="mt-1 text-red-500 text-md">{{ $message }}</p>
        @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label>Description</label>
            <textarea name="description" id="" cols="30" rows="10" placeholder="description"></textarea>
            @error('description')
            <p class="mt-1 text-red-500 text-md">{{ $message }}</p>
        @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label>Name</label>
            <input type="text" name="Pname" placeholder="Prooduct name" class="py-2">
            @error('Pname')
            <p class="mt-1 text-red-500 text-md">{{ $message }}</p>
        @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label>Price</label>
            <input type="text" name="price" placeholder="Prooduct price" class="py-2">
            @error('price')
            <p class="mt-1 text-red-500 text-md">{{ $message }}</p>
        @enderror
        </div>

        <div class="flex flex-col gap-2" x-data="{ showAdditionalDiv: false }">
            <label>Category</label>
            <select class="w-full py-3 text-center" name="category" x-on:change="showAdditionalDiv = ($event.target.value === 'beauty picks') ? true : false">
                <option value="Video Game">Video Game</option>
                <option value="beauty picks">beauty picks</option>
                <option value="Smart Gadgets">Smart Gadgets</option>
                <option value="Computer and accessories">Computer and accessories</option>
            </select>
            @error('category')
            <p class="mt-1 text-red-500 text-md">{{ $message }}</p>
            @enderror
            <div x-show="showAdditionalDiv" class="p-2 mt-4 bg-gray-200 rounded-lg">
                <!-- Content to show when 'beauty picks' is selected -->
                <select class="w-full py-3 text-center" name="type" x-on:change="showAdditionalDiv = ($event.target.value === 'beauty picks') ? true : false">
                    <option value="Foot Wear">Foot Wear</option>
                    <option value="Outfit">Outfit</option>
                </select>
            </div>
        </div>



        <button type="submit">DONE</button>
    </form>
</div>
<script>
</script>
</x-layout>
