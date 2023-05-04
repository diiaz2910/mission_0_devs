<nav class="bg-white"> {{-- NAV BAR COLOR --}}
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">


        {{-- MOBILE MENU --}}
        <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">

            {{-- BURGER MENU --}}
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            
        </div>


        {{-- LOGO --}}
        <div class="absolute inset-y-0 left-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

            {{-- LOGO --}}
            <div class="flex flex-shrink-0 items-center">
            
            {{-- LOGO IMAGE --}}
            <div>
                <div class="w-12 h-12 block lg:hidden bg-red-700 rounded-full"></div>
                <div class="w-12 h-12 hidden lg:block bg-red-700 rounded-full"></div>
            </div>

            </div>

          {{-- TEXT MY COMPANY--}}
          <div class="flex flex-shrink-0 items-center">
            <a href="#" class="text-black hover:text-gray-400 rounded px-5 py-2 text-sm font-medium">Turners Cars</a>
          </div>

            
          
        </div>


        {{-- CATEGORIES --}}
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            {{-- Categories --}}
            <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                <a href="#" class="text-black hover:bg-gray-700 hover:text-white px-7 py-2 text-sm font-medium">Menu1</a>
                <a href="#" class="text-black hover:bg-gray-700 hover:text-white px-7 py-2 text-sm font-medium">Menu2</a>
                <a href="#" class="text-black hover:bg-gray-700 hover:text-white px-7 py-2 text-sm font-medium">Menu3</a>
                <a href="#" class="bg-white hover:bg-gray-200 border-black text-black border px-7 py-2 text-sm font-medium" aria-current="page">Login</a>
                </div>
            </div>
        </div>


      </div>
    </div>



    <!-- Mobile menu, show/hide based on menu state. 
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <p class="text-5xl">
                Lorem ipsum dolor sit amet
            </p>
        </div>
    </div>
    -->
</nav>
