<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 lg:hidden" id="AdminMenu">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
  </svg>

  <div class=" bg-gray-400 z-[1000] fixed top-0 bottom-0 lg:block h-screen hidden w-72 lg:px-5" id="menu">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex justify-end text-black transition bg-white lg:hidden size-6 hover:bg-red-500 hover:text-white" id="adminExist">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
      </svg>

    <div class="flex flex-col h-screen pt-5 lg:flex gap-5 mt-6 w-[15rem]">
    <div class="pb-2 border-b-2 border-black" id="dash">
        <a href="/Admin/Dashbored" class="text-xl font-medium text-black">Dashbored</a>
    </div>

    <div class="pb-2 border-b-2 border-black">
        <a href="/Admin/ProductsUpdate" class="text-xl font-medium text-black">Products</a>
    </div>

    <div class="pb-2 border-b-2 border-black">
        <a href="/Admin/orders" class="text-xl font-medium text-black">Orders</a>
    </div>

    <div class="pb-2 border-b-2 border-black">
        <a href="/Admin/Customers" class="text-xl font-medium text-black">Users</a>
    </div>

    <div class="pb-2 border-b-2 border-black">
        <a href="/Admin/employers" class="text-xl font-medium text-black">Address</a>
    </div>

    <div>
        <a href="" class="text-xl font-medium text-black">Setting</a>
    </div>

    <div class="absolute bottom-5">
        <form action="">
            <button class="flex gap-2">Logout<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
              </svg>
              </button>
        </form>
    </div>
</div>
  </div>

  <script>
    const AdminMenu = document.getElementById('AdminMenu')
    const adminExist = document.getElementById('adminExist')
    const menu = document.getElementById('menu')

    AdminMenu.onclick = OpenAdminMenu;
    adminExist.onclick = closeAdminMenu;

    function OpenAdminMenu(){
        menu.style.display = 'flex'
    }

    function closeAdminMenu(){
         menu.style.display = ''
    }

  </script>

