<x-layout>
    <x-flash />
    <div class="lg:flex">
       <x-AdminNav />
    <div class="w-[300%] lg:w-full mr-4 lg:ml-80">
        <form action="" class="flex w-full px-2 py-3 mt-5 border-2 border-gray-400 rounded-xl">
            <input type="text" class="w-full outline-none" placeholder="search.....">
            <button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
              </svg></button>
        </form>

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
            <h2>First Name</h2>
            <h2>Last Name</h2>
            <h2 class="w-44">Email</h2>
            <h2>Verified</h2>
            <h2>Mobile</h2>
            <h2 class="px-3 py-1 rounded-md opacity-0">Terminate</h2>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="opacity-0 size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
              </svg>

        </div>

        <div class="flex flex-col w-full gap-3 px-2 shadow-xl">
            @foreach ($users as $user)
                <div class="flex justify-between w-full px-1 py-2 mt-4 text-center border-b-2 border-gray-500">
                <h2>{{ $user['id'] }}</h2>
                <h2>{{ $user['Last_name'] }}</h2>
                <h2>{{ $user['First_name'] }}</h2>
                <h2>{{ $user['email'] }}</h2>
                <h2 class="px-5 py-1 text-white bg-green-300">True</h2>
                <h2>{{ $user['mobile'] }}</h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                  </svg>
                  <form action="" class="inline-block" onsubmit="return confirmDelte(event)">


                    <button type="submit" class="px-3 py-1 text-white bg-red-500 rounded-lg">Terminate</button>
                </form>
            </div>
            @endforeach
            <div class="fixed inset-0 bg-[#000000d1] z-[1000] hidden" id="terminatForm">
                <div class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                    <div class="px-4 py-2 bg-white rounded-xl">
                        <p class="text-xl">Are you sure you want to delete User??</p>
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
</x-layout>
