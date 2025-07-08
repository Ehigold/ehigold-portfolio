{{-- <aside id="logo-sidebar" class="fixed top-[30px] left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-100 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar"> --}}
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="fixed top-[30px] left-4 z-[60] hidden md:inline-flex lg:hidden items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside id="logo-sidebar" class="fixed top-[30px] left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-100 lg:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">

    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
       <ul class="space-y-2 font-medium">

        <li class="@if(Request::segment(2)=='dashboard')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg  group dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-[#bb401d] text-white' : '' }}">
                <svg class="w-6 h-6 text-gray-500 transition duration-75  dark:text-gray-100 dark:group-hover:text-gray-500 {{ request()->routeIs('admin.dashboard') ? 'text-white' : '' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3" sidebar-toggle-item>Dashboard</span>
            </a>
        </li>




           {{-- movie --}}
           <li class="dark:text-gray-200 dark:hover:bg-gray-700">
            <a href="{{ route('admin.movies.all') }}"
               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.movies.all') ? 'bg-[#bb401d] text-white' : '' }}">
                <svg class="w-6 h-6 {{ request()->routeIs('admin.movies.all') ? 'text-white' : 'text-gray-800 dark:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                </svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap">Movies</span>
            </a>
        </li>



        {{-- Pages --}}
        <li class="dark:text-gray-200 dark:hover:bg-gray-700">
            <a href="{{ route('admin.page-settings.index') }}"
               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.page-settings.index') ? 'bg-[#bb401d] text-white' : '' }}">
               <svg class="w-6 h-6 {{ request()->routeIs('admin.page-settings.index') ? 'text-white' : 'text-gray-800 dark:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
            </svg>

                <span class="flex-1 ml-3 text-left whitespace-nowrap">Pages</span>
            </a>
            <ul id="dropdown-layouts" class="@if(Request::segment(2)!='page-settings') hidden @endif py-2 space-y-2 bg-gray-100  dark:text-black dark:bg-gray-800">
                <li>
                    <a href="{{ route('admin.page-settings.create') }}"
                    class="flex items-center p-2 text-base text-gray-800 transition duration-75 rounded-lg pl-11 group  dark:text-gray-200 dark:hover:bg-gray-700  [&:active]:bg-[#db4042] [&:active]:text-white {{ request()->routeIs('admin.page-settings.create') ? 'bg-[#bb401d] text-white' : '' }}">Create</a>
                </li>
            </ul>

        </li>

           {{-- studio --}}
           <li class="dark:text-gray-200 dark:hover:bg-gray-700">
            <a href="{{ route('admin.studios.index') }}"
               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.studios.index') ? 'bg-[#bb401d] text-white' : '' }}">
               <svg class="w-6 h-6 {{ request()->routeIs('admin.studios.index') ? 'text-white' : 'text-gray-800 dark:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>

                <span class="flex-1 ml-3 text-left whitespace-nowrap">Studio</span>
            </a>
        </li>

        {{-- Cinemas --}}
         <li class="dark:text-gray-200 dark:hover:bg-gray-700">
            <a href="{{ route('admin.cinemas.index') }}"
               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.cinemas.index') ? 'bg-[#bb401d] text-white' : '' }}">
            <svg class="w-6 h-6 {{ request()->routeIs('admin.cinemas.index') ? 'text-white' : 'text-gray-800 dark:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
            </svg>

                <span class="flex-1 ml-3 text-left whitespace-nowrap">Cinemas</span>
            </a>
            <ul id="dropdown-layouts" class="@if(Request::segment(2)!='cinemas') hidden @endif py-2 space-y-2 bg-gray-100  dark:text-black dark:bg-gray-800">
                <li>
                    <a href="{{ route('admin.cinemas.create') }}"
                    class="flex items-center p-2 text-base text-gray-800 transition duration-75 rounded-lg pl-11 group  dark:text-gray-200 dark:hover:bg-gray-700  [&:active]:bg-[#db4042] [&:active]:text-white {{ request()->routeIs('admin.cinemas.create') ? 'bg-[#bb401d] text-white' : '' }}">Create cinemas</a>
                </li>
            </ul>

        </li>

         {{-- Showtimes --}}
         <li class="dark:text-gray-200 dark:hover:bg-gray-700">
            <a href="{{ route('admin.showtimes.index') }}"
               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group  dark:text-gray-200  {{ request()->routeIs('admin.showtimes.index') ? 'bg-[#bb401d] text-white' : '' }}">
               <svg class="w-6 h-6 {{ request()->routeIs('admin.showtimes.index') ? 'text-white' : 'text-gray-800 dark:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>

                <span class="flex-1 ml-3 text-left whitespace-nowrap">Showtimes</span>
            </a>
            {{-- <ul id="dropdown-layouts" class="@if(Request::segment(2)!='showtimes') hidden @endif py-2 space-y-2 bg-gray-100  dark:text-black dark:bg-gray-800">

                <li>
                    <a href="{{ route('admin.showtimes.create') }}"
                    class="flex items-center p-2 text-base text-gray-800 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700  [&:active]:bg-[#db4042] [&:active]:text-white {{ request()->routeIs('admin.showtimes.create') ? 'bg-[#bb401d] text-white' : '' }}">Add Showtimes</a>
                </li>


        </ul> --}}

        </li>








          {{-- Critics --}}
          <li class="dark:text-gray-200 dark:hover:bg-gray-700">
            <a href="{{ route('admin.critics.index') }}"
               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.critics.index') ? 'bg-[#bb401d] text-white' : '' }}">
               <svg class="w-6 h-6 {{ request()->routeIs('admin.critics.index') ? 'text-white' : 'text-gray-800 dark:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap">Critics</span>
            </a>

        </li>


        {{-- User --}}

        <li class="dark:text-gray-200 dark:hover:bg-gray-700">
            <a href="{{ route('admin.users.index') }}"
               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.users.index') ? 'bg-[#bb401d] text-white' : '' }}">

               <svg class="w-6 h-6 {{ request()->routeIs('admin.users.index') ? 'text-white' : 'text-gray-800 dark:text-white' }}"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap">Users</span>
            </a>
        </li>

        <li class="@if(Request::segment(2)=='dashboard')==url()->current())  dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
            <a href="{{ route('admin.watchlist.index') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('watchlist') ? 'bg-[#bb401d] text-white' : '' }}">
                <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white {{ request()->routeIs('watchlist') ? 'text-white' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                </svg>
                <span class="ml-3 {{ request()->routeIs('watchlist') ? 'text-white' : '' }}" sidebar-toggle-item>Watchlist</span>
            </a>
        </li>


        {{-- <li class="@if(Request::segment(2)=='settings')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
            <a href="{{ route('account-settings') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
                <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M8.34 1.804A1 1 0 019.32 1h1.36a1 1 0 01.98.804l.295 1.473c.497.144.971.342 1.416.587l1.25-.834a1 1 0 011.262.125l.962.962a1 1 0 01.125 1.262l-.834 1.25c.245.445.443.919.587 1.416l1.473.294a1 1 0 01.804.98v1.361a1 1 0 01-.804.98l-1.473.295a6.95 6.95 0 01-.587 1.416l.834 1.25a1 1 0 01-.125 1.262l-.962.962a1 1 0 01-1.262.125l-1.25-.834a6.953 6.953 0 01-1.416.587l-.294 1.473a1 1 0 01-.98.804H9.32a1 1 0 01-.98-.804l-.295-1.473a6.957 6.957 0 01-1.416-.587l-1.25.834a1 1 0 01-1.262-.125l-.962-.962a1 1 0 01-.125-1.262l.834-1.25a6.957 6.957 0 01-.587-1.416l-1.473-.294A1 1 0 011 10.68V9.32a1 1 0 01.804-.98l1.473-.295c.144-.497.342-.971.587-1.416l-.834-1.25a1 1 0 01.125-1.262l.962-.962A1 1 0 015.38 3.03l1.25.834a6.957 6.957 0 011.416-.587l.294-1.473zM13 10a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span class="ml-3" sidebar-toggle-item>Settings</span>
            </a>
          </li> --}}

          <li class="dark:text-gray-200 dark:hover:bg-gray-700">
            <a href="{{ route('account-settings') }}"
               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('account-settings') ? 'bg-[#bb401d] text-white' : '' }}">
                <svg class="w-6 h-6 {{ request()->routeIs('account-settings') ? 'text-white' : 'text-gray-800 dark:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M8.34 1.804A1 1 0 019.32 1h1.36a1 1 0 01.98.804l.295 1.473c.497.144.971.342 1.416.587l1.25-.834a1 1 0 011.262.125l.962.962a1 1 0 01.125 1.262l-.834 1.25c.245.445.443.919.587 1.416l1.473.294a1 1 0 01.804.98v1.361a1 1 0 01-.804.98l-1.473.295a6.95 6.95 0 01-.587 1.416l.834 1.25a1 1 0 01-.125 1.262l-.962.962a1 1 0 01-1.262.125l-1.25-.834a6.953 6.953 0 01-1.416.587l-.294 1.473a1 1 0 01-.98.804H9.32a1 1 0 01-.98-.804l-.295-1.473a6.957 6.957 0 01-1.416-.587l-1.25.834a1 1 0 01-1.262-.125l-.962-.962a1 1 0 01-.125-1.262l.834-1.25a6.957 6.957 0 01-.587-1.416l-1.473-.294A1 1 0 011 10.68V9.32a1 1 0 01.804-.98l1.473-.295c.144-.497.342-.971.587-1.416l-.834-1.25a1 1 0 01.125-1.262l.962-.962A1 1 0 015.38 3.03l1.25.834a6.957 6.957 0 011.416-.587l.294-1.473zM13 10a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap">Settings</span>
            </a>
        </li>

        {{-- settings --}}




       </ul>
       <div class="absolute bottom-0 left-0 justify-center hidden w-full p-4 space-x-4 text-gray-800 bg-white lg:flex dark:bg-gray-800 dark:text-gray-100" sidebar-bottom-menu>
        Logged in as {{ Auth::user()->first_name }}

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" data-tooltip-target="tooltip-logout"  class="block w-full px-4 py-2 text-gray-700 text-start text-md hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                    <path d="M9 12h12l-3 -3"></path>
                    <path d="M18 15l3 -3"></path>
                  </svg>
            </button>
        </form>

    <div id="tooltip-logout" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-200 transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
     Logout from you account
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

  </div>
    </div>
 </aside>

 {{-- <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
       <div class="grid grid-cols-3 gap-4 mb-4">
          <div class="flex items-center justify-center h-24 rounded-sm bg-gray-50 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center h-24 rounded-sm bg-gray-50 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center h-24 rounded-sm bg-gray-50 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div>
       <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>
       <div class="grid grid-cols-2 gap-4 mb-4">
          <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div>
       <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>
       <div class="grid grid-cols-2 gap-4">
          <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div>
    </div>
 </div> --}}
