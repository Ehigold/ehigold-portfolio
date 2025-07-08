<aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width" aria-label="Sidebar">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
      <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">

        <div class="flex-1 px-3 mt-5 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
          <ul class="pb-2 space-y-2">

            <li class="@if(Request::segment(2)=='dashboard')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
              <a href="{{ route('admin.dashboard') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                  <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                  <span class="ml-3" sidebar-toggle-item>Dashboard</span>
              </a>
            </li>

            <li class="@if(Request::segment(2)=='location')==url()->current()  ) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600 @endif">
                <a href="{{ route('location.country') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                      </svg>

                    <span class="ml-3" sidebar-toggle-item>Location</span>
                </a>
            </li>

            <li  class="@if(Request::segment(2)=='media')==url()->current()  ) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600 @endif">
                <a href="{{ route('admin.media.index') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m3 16 5-7 6 6.5m6.5 2.5L16 13l-4.286 6M14 10h.01M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                      </svg>

                    <span class="ml-3" sidebar-toggle-item>Media Libraries</span>
                </a>
            </li>

            <li class="@if(Request::segment(2)=='identity')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600 @endif">
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="kycid-layouts" data-collapse-toggle="kycid-layouts" aria-expanded="@if(Request::segment(2)=='identity')==url()->current()) true @endif">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9h3m-3 3h3m-3 3h3m-6 1c-.306-.613-.933-1-1.618-1H7.618c-.685 0-1.312.387-1.618 1M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm7 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                      </svg>

                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>KYC & ID Types</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>


                <ul id="kycid-layouts" class="@if(Request::segment(2)!='identity')==url()->current()) hidden @endif py-2 space-y-2">

                  <li>
                    <a href="{{ route('admin.kyc.list') }}" class="flex items-center @if(route('admin.kyc.list')==url()->current()) text-blue-900 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif p-2 text-base  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">KYC Verification </a>
                  </li>

                  <li>
                      <a href="{{ route('admin.identificationType') }}" class="flex items-center  @if(route('admin.identificationType')==url()->current()) bg-blue-50 text-gray-50 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif  p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Identification Types </a>
                  </li>

                </ul>
              </li>

            <li class="@if(Request::segment(2)=='properties')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600 @endif">
              <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts" aria-expanded="@if(Request::segment(2)=='properties')==url()->current()) true @endif">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/>
                  </svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Movies</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>


              <ul id="dropdown-layouts" class="@if(Request::segment(2)!='properties')==url()->current()) hidden @endif py-2 space-y-2">

                <li>
                  <a href="{{ route('admin.properties.list') }}" class="flex items-center @if(route('admin.properties.list')==url()->current()) text-blue-900 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif p-2 text-base  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  ">Add New Move </a>
                </li>

                <li>
                    <a href="{{ route('admin.categories.index') }}" class="flex items-center  @if(route('admin.categories.index')==url()->current()) bg-blue-50 text-gray-50 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif  p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Categories </a>
                </li>


              </ul>
            </li>


            <li class="@if(Request::segment(2)=='page')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
                <a href="{{ route('admin.page.index') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11.5c.07 0 .14-.007.207-.021.095.014.193.021.293.021h2a2 2 0 0 0 2-2V7a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7Zm1 3V8h1v1H8Z" clip-rule="evenodd"/>
                      </svg>


                    <span class="ml-3" sidebar-toggle-item>Pages</span>
                </a>
              </li>


              <li class="@if(Request::segment(2)=='transaction')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600 @endif">
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="transaction-layouts" data-collapse-toggle="transaction-layouts" aria-expanded="@if(Request::segment(2)=='transaction')==url()->current()) true @endif">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M5.617 2.076a1 1 0 0 1 1.09.217L8 3.586l1.293-1.293a1 1 0 0 1 1.414 0L12 3.586l1.293-1.293a1 1 0 0 1 1.414 0L16 3.586l1.293-1.293A1 1 0 0 1 19 3v18a1 1 0 0 1-1.707.707L16 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L12 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L8 20.414l-1.293 1.293A1 1 0 0 1 5 21V3a1 1 0 0 1 .617-.924ZM9 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"/>
                      </svg>

                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Transactions</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>


                <ul id="transaction-layouts" class="@if(Request::segment(2)!='transaction')==url()->current()) hidden @endif py-2 space-y-2">

                  <li>
                    <a href="{{ route('admin.transaction.list') }}" class="flex items-center @if(route('admin.transaction.list')==url()->current()) text-blue-900 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif p-2 text-base  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">All Transactions </a>
                  </li>

                  <li>
                      <a href="{{ route('admin.withdrawal.index') }}" class="flex items-center  @if(route('admin.withdrawal.index')==url()->current()) bg-blue-50 text-gray-50 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif  p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Withdrawal Request </a>
                  </li>

                </ul>
              </li>

              <li class="@if(Request::segment(2)=='bank')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
                <a href="{{ route('admin.bank.index') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M16.5 15v1.5m0 0V18m0-1.5H15m1.5 0H18M3 9V6a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3M3 9v6a1 1 0 0 0 1 1h5M3 9h16m0 0v1M6 12h3m12 4.5a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z"/>
                      </svg>

                    <span class="ml-3" sidebar-toggle-item>Banks</span>
                </a>
              </li>

              <li class="@if(Request::segment(2)=='user')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600 @endif">
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="user-layouts" data-collapse-toggle="user-layouts" aria-expanded="@if(Request::segment(2)=='user')==url()->current()) true @endif">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                      </svg>

                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Users</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>


                <ul id="user-layouts" class="@if(Request::segment(2)!='user')==url()->current()) hidden @endif py-2 space-y-2">

                  <li>
                    <a href="{{ route('admin.user.index') }}" class="flex items-center @if(route('admin.user.index')==url()->current()) text-blue-900 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif p-2 text-base  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">All Users </a>
                  </li>

                  <li>
                    <a href="{{ route('admin.user.admin.list') }}" class="flex items-center @if(route('admin.user.admin.list')==url()->current()) text-blue-900 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif p-2 text-base  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Admin User </a>
                  </li>

                </ul>
              </li>

              <li class="@if(Request::segment(2)=='settings')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600 @endif">
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="Settings-layouts" data-collapse-toggle="Settings-layouts" aria-expanded="@if(Request::segment(2)=='settings')==url()->current()) true @endif">
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M8.34 1.804A1 1 0 019.32 1h1.36a1 1 0 01.98.804l.295 1.473c.497.144.971.342 1.416.587l1.25-.834a1 1 0 011.262.125l.962.962a1 1 0 01.125 1.262l-.834 1.25c.245.445.443.919.587 1.416l1.473.294a1 1 0 01.804.98v1.361a1 1 0 01-.804.98l-1.473.295a6.95 6.95 0 01-.587 1.416l.834 1.25a1 1 0 01-.125 1.262l-.962.962a1 1 0 01-1.262.125l-1.25-.834a6.953 6.953 0 01-1.416.587l-.294 1.473a1 1 0 01-.98.804H9.32a1 1 0 01-.98-.804l-.295-1.473a6.957 6.957 0 01-1.416-.587l-1.25.834a1 1 0 01-1.262-.125l-.962-.962a1 1 0 01-.125-1.262l.834-1.25a6.957 6.957 0 01-.587-1.416l-1.473-.294A1 1 0 011 10.68V9.32a1 1 0 01.804-.98l1.473-.295c.144-.497.342-.971.587-1.416l-.834-1.25a1 1 0 01.125-1.262l.962-.962A1 1 0 015.38 3.03l1.25.834a6.957 6.957 0 011.416-.587l.294-1.473zM13 10a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>

                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Settings</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>


                <ul id="Settings-layouts" class="@if(Request::segment(2)!='settings')==url()->current()) hidden @endif py-2 space-y-2">

                  <li>
                    <a href="{{ route('admin.settings.general') }}" class="flex items-center @if(route('admin.user.index')==url()->current()) text-blue-900 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif p-2 text-base  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">General Settings </a>
                  </li>

                  <li>
                    <a href="{{ route('admin.settings.payment.gateway') }}" class="flex items-center @if(route('admin.user.admin.list')==url()->current()) text-blue-900 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif p-2 text-base  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Payment gateway </a>
                  </li>
                  <li>
                    <a href="{{ route('admin.email.setting') }}" class="flex items-center @if(route('admin.user.admin.list')==url()->current()) text-blue-900 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif p-2 text-base  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Email Settings </a>
                  </li>

                </ul>
              </li>


          </ul>

        </div>
      </div>
      <div class="absolute bottom-0 left-0 justify-center hidden w-full p-4 space-x-4 bg-white lg:flex dark:bg-gray-800 dark:text-gray-100" sidebar-bottom-menu>
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

        <div id="tooltip-logout" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
         Logout from you account
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

      </div>
    </div>
  </aside>
