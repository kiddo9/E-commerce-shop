<x-layout>
    <x-flash />
    <div class="lg:flex">
       <x-AdminNav />
    <div class="mr-4 w-[300%] lg:w-full lg:ml-80">
        <div class="flex justify-between px-8 mt-6 lg:flex-row">
            <form action="" class="flex px-2 py-3 border-2 border-gray-400 w-96 rounded-xl">
                <input type="text" class="outline-none w-80">
                <button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                  </svg></button>
            </form>

            <button class="z-50 px-4 py-2 bg-gray-300 rounded-lg shadow-xl" id="FormShow">Add New Product</button>
        </div>

        <div class="flex mt-5 justify-evenly">
            <select name="" id="" class="w-56 py-2 border-2 border-gray-400 rounded-md">
                <option value="">Today</option>
                <option value="">Yesterday</option>
                <option value="">a week ago</option>
            </select>

            <select name="" id="" class="w-56 py-2 border-2 border-gray-400 rounded-md">
                <option value="">USD</option>
                <option value="">NGN</option>
                <option value="">EURO</option>
                <option value="">POUNDS</option>
            </select>

            <div class="flex flex-col" >
            <select name="" id="" class="w-56 py-2 border-2 border-gray-400 rounded-md">
                <option value="" disabled selected>Sort</option>
                <option value="">By Order Id</option>
                <option value="">Pending</option>
                <option value="">Delivering</option>
                <option value="">Delivered</option>
                <option value="">Completed</option>
                <option value="">All</option>
            </select>
            </div>
        </div>

        <div>
            <div class="flex justify-between px-1 py-2 mt-4 bg-slate-500">
                <h2>Product Id</h2>
                <h2>Product Name</h2>
                <h2>Product Img</h2>
                <h2>Product Price</h2>
                <h2>Brand</h2>
                <h2>Fame</h2>
                <h2>Description</h2>
                <h2>Type</h2>
                <h2>Category</h2>
                <h2>Stock Avaliable</h2>
                <h2 class="px-3 py-1 rounded-md opacity-0">Terminate</h2>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="opacity-0 size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
              </svg>
            </div>

            <div>
                @foreach ($product as $products)
                    <div class="flex justify-between w-full px-1 py-2 mt-4 text-center border-b-2 border-gray-500">
                        <h2 class="w-20 text-center">{{ $products['id'] }}</h2>
                        <h2 class="w-20 h-5 overflow-hidden text-center">{{ $products['Pname'] }}</h2>
                        <img src="{{ asset('storage/'. $products->Pimg) }}" alt="" class="object-cover w-20 h-10 ml-6 -mt-5">
                        <h2 class="w-20 text-center">{{ $products['price'] }}</h2>
                        <h2 class="w-20 text-center">{{ $products['brand'] }}</h2>
                        <h2 class="w-20 text-center">{{ $products['fame'] }}</h2>
                        <h2 class="w-20 h-5 overflow-hidden text-center">{{ $products['description'] }}</h2>
                        <h2 class="w-20 text-center">{{ $products['type'] }}</h2>
                        <h2 class="w-20 h-5 overflow-hidden text-center">{{ $products['category'] }}</h2>
                        <h2 class="w-20 text-center">700 units</h2>
                        <form action="/Admin/ProductsUpdate/{{ $products['id'] }}" method="POST" class="inline-block" onsubmit="return confirmDelete(event)">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 text-white bg-red-500 rounded-lg">Terminate</button>
                        </form>

                        <a href='/edit/{{ $products['id'] }}'><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg></a>
                    </div>
                @endforeach
                <div class="fixed inset-0 bg-[#000000d1] z-[1000] hidden" id="terminatForm">
                    <div class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                        <div class="px-4 py-2 bg-white rounded-xl">
                            <p class="text-xl">Are you sure you want to delete {{ $products['Pname'] }} ??</p>
                            <img src="https://media.istockphoto.com/id/1131163868/vector/exclamation-mark-sign-warning-about-an-emergency.jpg?s=612x612&w=0&k=20&c=OZ1Ux2q1tVEMBm2t1NbFKERU1B72OpvrjRrVct3Y8l8=" alt="" class="w-56 mx-auto">
                            {{-- <img src="https://cdn-icons-png.flaticon.com/128/5709/5709755.png" alt=""  class="w-20">
                            <img src="https://cdn-icons-png.flaticon.com/128/1828/1828665.png" alt=""  class="w-20"> --}}
                            <div class="flex justify-between">
                                <button class="bg-[#ccc] px-3 py-1 w-52 rounded-lg" id="cancel">Cancel</button>
                                <button class="px-3 py-1 text-white bg-red-500 rounded-lg w-52" id="Terminate">Terminate</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


        </div>

        <div class="bg-[#000000c1] absolute inset-0 hidden" id="showForm">
            <div class="px-4 py-4 mx-auto mt-12 bg-[#ccc] w-96">
                <form method="POST" action="/today" enctype="multipart/form-data" class="flex flex-col justify-center gap-1 ">
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
                        <textarea name="description" id="" cols="10" rows="10" class="h-20" placeholder="description"></textarea>
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
        </div>
    </div>
    </div>

    <script>
        const TerminationForm = document.getElementById('terminatForm')
        const Terminate = document.getElementById('Terminate');
        const CloseTerminate = document.getElementById('cancel');
        Terminate = true;


        function confirmDelete(event) {
            event.preventDefault();
            TerminationForm.style.display = 'block';
            TerminationForm.style.transition = '1s ease-in';

            Terminate.addEventListener('click', () => {
                if(Terminate){
                    event.target.submit();
                    Terminate = false
                }
            })
            CloseTerminate.addEventListener('click', () => {
                    TerminationForm.style.display = '';
        })

        }
    </script>


    <script>
         const formActive = document.getElementById('FormShow');
        const formShow = document.getElementById('showForm');

        formShowX = true;

        formActive.addEventListener('click', () => {

            if(formShowX){
                formShow.style.display = 'block';
                formShow.style.transition = '1s ease-in-out linear';
                formActive.textContent = 'Close';
                formActive.style.background = 'red';
                formShowX = false;
            }else{
                formShow.style.display = '';
                formActive.textContent = 'Add New Product';
                formActive.style.background = '';
                formShowX = true;
            }
        })
    </script>
</x-layout>
