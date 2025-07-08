<nav class="fixed z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="w-[250px] justify-center text-center">
            <x-application-logo />
          </div>


        </div>
        <div class="flex items-center">


            <button id="toggleSidebarMobileSearch" type="button" class="p-2 text-gray-500 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">

            </button>

            <button type="button" data-dropdown-toggle="notification-dropdown" class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
              <span class="sr-only">View notifications</span>

              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
            </button>

            <div class="z-20 z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:divide-gray-600 dark:bg-gray-700" id="notification-dropdown">
              <div class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  Notifications
              </div>
              <div>
                {{--  <a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                  <div class="flex-shrink-0">
                    <img class="rounded-full w-11 h-11" src="https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green.png" alt="Jese image">
                    <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-primary-700 dark:border-gray-700">
                      <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                    </div>
                  </div>
                  <div class="w-full pl-3">
                      <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">New message from <span class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span>: "Hey, what's up? All set for the presentation?"</div>
                      <div class="text-xs font-medium text-primary-700 dark:text-primary-400">a few moments ago</div>
                  </div>
                </a>  --}}


              </div>
              {{--  <a href="#" class="block py-2 text-base font-normal text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-700 dark:text-white dark:hover:underline">
                  <div class="inline-flex items-center ">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                    View all
                  </div>
              </a>  --}}
            </div>

            <x-theme-toggle/>

            <div class="flex items-center ml-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                  <span class="sr-only">Open user menu</span>

                  <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->media->path??asset('images/default/default-avarter.svg') }}" alt="user photo">
                </button>

              </div>
              <div class="ml-5 dark:text-gray-200">  {{ Auth::user()->first_name }}  </div>
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
                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                  </li>
                  <li>
                    <a href="" class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
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
      </div>
    </div>
  </nav>





 </nav>


 <!-- check -->

  <div class="w-[calc(100%-256px)]" ml-60 >


                <div class="flex items-center px-6 py-2 pt-6">

                    <div class="p-6">
                        <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-3">
                            <div class="p-6 bg-white border border-gray-100 rounded-md shadow-md shadow-black/5">
                                <div class="flex justify-between mb-6">
                                        <div>
                                            <div class="mb-1 text-2xl font-semibold">10</div>
                                            <div class="text-sm font-medium text-gray-400">Active orders</div>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="text-gray-400 dropdown-toggle hover:text-gray-600"><i class="ri-more-fill"></i></button>
                                            <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                                <li>
                                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                      </div>


              {{-- column --}}




              {{-- column End --}}

                </div>

        </div>

 <!-- check end -->




 <div class="w-full" >
       <div class="flex items-center pt-8 -ml-16">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">

                         <!-- Column 1 -->
                            <div class="flex justify-between p-6 mb-6 bg-white rounded-lg shadow-md">
                                <div>
                                    <div class="mb-1 text-2xl font-semibold">10</div>
                                    <div class="text-sm font-medium text-gray-400">Active orders</div>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="text-gray-400 dropdown-toggle hover:text-gray-600"><i class="ri-more-fill"></i></button>
                                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                        <li>
                                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                    {{-- colum 1 end --}}


                    <!-- Column 2 -->
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <h2 class="mb-4 text-xl font-semibold">Column 2</h2>
                        <p>Content for column 2 goes here.</p>
                    </div>

                    <!-- Column 3 -->
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <h2 class="mb-4 text-xl font-semibold">Column 3</h2>
                        <p>Content for column 3 goes here.</p>
                    </div>


                </div>
       </div>
    </div>

