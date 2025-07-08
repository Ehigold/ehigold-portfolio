<section class="fixed top-0 left-0 right-0 z-50 w-full bg-[#bb401d]">
    <div class="container flex flex-wrap items-center justify-between p-2 mx-auto ">

        {{-- Logo --}}

        <div class="flex items-center ">
            <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
              <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
              <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="w-[250px] justify-center text-center">
              <x-application-logo />
            </div>



          </div>


        {{-- Logo End --}}

          {{-- Icons section --}}

          <div class="flex items-center ml-auto">


            {{-- <button id="toggleSidebarMobileSearch" type="button" class="p-2 text-gray-500 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">

            </button> --}}

                 {{-- Notification --}}

                 <div>    </div>

            <button type="button" data-dropdown-toggle="notification-dropdown" class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
              <span class="sr-only">View notifications</span>

              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
            </button>


            <div class="z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:divide-gray-600 dark:bg-gray-700 notification-tab" id="notification-dropdown">
              <div class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  Notifications
              </div>
              <div>



              </div>

            </div>

            {{-- Notification End --}}

            {{-- dark mode --}}

            <x-theme-toggle/>

            <div class="flex items-center ml-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                  <span class="sr-only">Open user menu</span>

                  <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->media->path??asset('images/default/default-avarter.svg') }}" alt="user photo">
                </button>

              </div>
              <div class="ml-5 text-white dark:text-gray-200">  {{ Auth::user()->first_name }}  </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-2">
                <div class="px-4 py-3" role="none">
                  <p class="text-gray-900 text-md dark:text-white" role="none">
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    {{ Auth::user()->email }}
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                  </li>
                  <li>
                    <a href="{{ route('user.profile.settings') }}" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">My Profile</a>
                  </li>

                  <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="block w-full px-4 py-2 text-gray-700 text-start text-md hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                            {{ __('Log Out') }}
                        </button>
                    </form>

                  </li>
                </ul>
              </div>
            </div>

          </div>






          {{-- Icons End --}}




        <div class="flex items-center space-x-6 rtl:space-x-reverse">


          @guest
           @if (Route::has('register'))
            <x-anchor href="{{ route('register') }}" class="text-blue-100">

                  Create Account
             </x-anchor>
             @endif
             @if (Route::has('login'))
            <x-anchor href="{{ route('login') }}" class="text-blue-100">

                  Login
             </x-anchor>
             @endif
             @endguest



        </div>



    </div>
    </section>





