<aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width" aria-label="Sidebar">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
      <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">

        <div class="flex-1 px-3 mt-5 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
          <ul class="pb-2 space-y-2">



            <li class="@if(Request::segment(2)=='dashboard')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg group dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-[#bb401d] text-white' : '' }}">
                    <svg class="w-6 h-6 text-gray-500 transition duration-75  dark:text-gray-400 dark:group-hover:text-white {{ request()->routeIs('admin.dashboard') ? 'text-white' : '' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3" sidebar-toggle-item>Dashboard</span>
                </a>
            </li>


            {{-- movie --}}
            {{-- dark:bg-gray-600 --}}
            {{-- <li class="@if(Request::segment(2)=='movies') true @else false @endif  dark:text-gray-200  dark:hover:bg-gray-700">
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts" aria-expanded="@if(Request::segment(2)=='movies')==url()->current()) true @endif">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Movies</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>

                <ul id="dropdown-layouts" class="@if(Request::segment(2)!='movies') hidden @endif py-2 space-y-2 bg-gray-100  dark:text-black dark:bg-gray-800">
                    <li>
                        <a href="{{ route('admin.movies.all') }}" class="flex items-center p-2 text-base text-gray-800 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700  [&:active]:bg-[#db4042] [&:active]:text-white">All Movies </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.movies.all') }}"
                            class="flex items-center p-2 text-base text-gray-800 transition duration-75 rounded-lg pl-11 group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.movies.all') ? 'bg-[#bb401d] text-white' : '' }}">
                            All Movies
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.movies.create') }}" class="flex items-center p-2 text-base text-gray-800 transition duration-75 rounded-lg pl-11 group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.movies.create') ? 'bg-[#bb401d] text-white' : '' }}">
                            Add New Movies
                         </a>
                    </li>
                </ul>
            </li> --}}

            {{-- <li class="dark:text-gray-200 dark:hover:bg-gray-700">
                <a href="{{ route('admin.movies.all') }}"
                   class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.movies.all') ? 'bg-[#bb401d] text-white' : '' }}">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Movies</span>
                </a>
            </li> --}}

            <li class="dark:text-gray-200 dark:hover:bg-gray-700">
                <a href="{{ route('admin.movies.all') }}"
                   class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.movies.all') ? 'bg-[#bb401d] text-white' : '' }}">
                    <svg class="w-6 h-6 {{ request()->routeIs('admin.movies.all') ? 'text-white' : 'text-gray-800 dark:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Movies</span>
                </a>
            </li>

            <li class="dark:text-gray-200 dark:hover:bg-gray-700">
                <a href="{{ route('admin.studios.index') }}"
                   class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group  dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.studios.index') ? 'bg-[#bb401d] text-white' : '' }}">
                   <svg class="w-6 h-6 {{ request()->routeIs('admin.studios.index') ? 'text-white' : 'text-gray-800 dark:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>

                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Studio</span>
                </a>
            </li>

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





              {{-- Tv Series --}}

              {{-- <li class="@if(Request::segment(2)=='tv-series') true @else false @endif  dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-tv-series" data-collapse-toggle="dropdown-tv-series" aria-expanded="@if(Request::segment(2)=='tv-series')==url()->current()) true @endif">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>

                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Blog</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>


                <ul id="dropdown-tv-series" class="@if(Request::segment(2)!='tv-series') hidden @endif py-2 space-y-2 bg-gray-100 dark:bg-white dark:text-black">

                  <li>
                      <a href="" class="flex items-center p-2 text-base text-gray-800 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Blog </a>
                    </li>





                </ul>
              </li> --}}



            {{-- Users --}}

            {{-- <li class="@if(Request::segment(2)=='users') true @else false @endif  dark:text-gray-200  dark:hover:bg-gray-700 "> --}}
                {{-- <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-users" data-collapse-toggle="dropdown-users" aria-expanded="@if(Request::segment(2)=='users')==url()->current()) true @endif">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>

                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Users</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button> --}}


                {{-- <ul id="dropdown-users" class="@if(Request::segment(2)!='users') hidden @endif py-2 space-y-2   dark:text-black"> --}}

                    {{-- <li>
                        <a href="{{ route('admin.users.index') }}"
                           class="flex items-center p-2 text-base text-gray-800 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 {{ Request::is('admin/users*') ? 'bg-[#bb401d] text-white' : '' }}">
                            All users
                        </a>
                    </li> --}}

                    {{-- <li>
                        <a href="{{ route('admin.users.index') }}"
                            class="flex items-center p-2 text-base text-gray-800 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.users.index') ? 'bg-[#bb401d] text-white' : '' }}">
                            All Movies
                        </a>
                    </li> --}}

                     {{-- <li>
                        <a href="{{ route('admin.users.index') }}"
                            class="flex items-center p-2 text-base text-gray-800 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('admin.users.index') ? 'bg-[#bb401d] text-white' : '' }}">
                            Add Users
                        </a>
                    </li> --}}



                {{-- </ul> --}}
              {{-- </li> --}}










            {{-- <li x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Casts</span>
                    <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute z-10 mt-2 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                        <li>
                            <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cast list List</a>
                        </li>

                        <!-- Add more dropdown items here -->
                    </ul>
                </div>
            </li> --}}



{{--
            <li class="@if(Request::segment(2)=='studios') true @else false @endif  bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts" aria-expanded="@if(Request::segment(2)=='studios')==url()->current()) true @endif">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/>
                    </svg>

                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Studios</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>


                <ul id="dropdown-layouts" class="@if(Request::segment(2)!='studios') hidden @endif py-2 space-y-2">

                  <li>
                      <a href="{{ route('user.movies.all') }}" class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">All Studios </a>
                    </li>

                  <li>
                      <a href="{{ route('user.movies.create') }}" class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add New Studio </a>
                    </li>

                </ul>
              </li> --}}



              <li class="@if(Request::segment(2)=='dashboard')==url()->current())  dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
                <a href="{{ route('admin.watchlist.index') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->routeIs('watchlist') ? 'bg-[#bb401d] text-white' : '' }}">
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white {{ request()->routeIs('watchlist') ? 'text-white' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                    </svg>
                    <span class="ml-3 {{ request()->routeIs('watchlist') ? 'text-white' : '' }}" sidebar-toggle-item>Watchlist</span>
                </a>
            </li>















            <li class="@if(Request::segment(2)=='settings')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
              <a href="{{ route('account-settings') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
                  <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M8.34 1.804A1 1 0 019.32 1h1.36a1 1 0 01.98.804l.295 1.473c.497.144.971.342 1.416.587l1.25-.834a1 1 0 011.262.125l.962.962a1 1 0 01.125 1.262l-.834 1.25c.245.445.443.919.587 1.416l1.473.294a1 1 0 01.804.98v1.361a1 1 0 01-.804.98l-1.473.295a6.95 6.95 0 01-.587 1.416l.834 1.25a1 1 0 01-.125 1.262l-.962.962a1 1 0 01-1.262.125l-1.25-.834a6.953 6.953 0 01-1.416.587l-.294 1.473a1 1 0 01-.98.804H9.32a1 1 0 01-.98-.804l-.295-1.473a6.957 6.957 0 01-1.416-.587l-1.25.834a1 1 0 01-1.262-.125l-.962-.962a1 1 0 01-.125-1.262l.834-1.25a6.957 6.957 0 01-.587-1.416l-1.473-.294A1 1 0 011 10.68V9.32a1 1 0 01.804-.98l1.473-.295c.144-.497.342-.971.587-1.416l-.834-1.25a1 1 0 01.125-1.262l.962-.962A1 1 0 015.38 3.03l1.25.834a6.957 6.957 0 011.416-.587l.294-1.473zM13 10a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                  <span class="ml-3" sidebar-toggle-item>Settings</span>
              </a>
            </li>

          </ul>




        </div>
      </div>
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

        <div id="tooltip-logout" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-800 transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
         Logout from you account
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

      </div>
    </div>

  </aside>

