@include('layouts.head')
<div class="min-h-screen bg-gray-70 dark:bg-gray-900">
            <x-topbar />
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow dark:bg-gray-800">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <x-notification />


        <x-footer-main />

        @yield('modal')
        @yield('alert')
        <div
        style="z-index: 9999999999; display:none;" class="absolute flex items-center justify-between w-full p-5 mt-5 leading-normal text-red-600 bg-red-100 rounded-lg error-alert left-4 bottom-5 md:w-1/4" role="alert">
          <div
          class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 mr-2 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20">
              <path
                  d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
          </svg>
          <span class="sr-only">Check icon</span>
        </div><div
        class="inline-flex items-center w-full pr-2 justify-left"> <strong>Error !</strong> <span class="pl-3 message"></span></div>


        </div>
        <!-- success message -->

        <div
        style="z-index: 9999999999; display:none;" class="absolute flex items-center justify-between w-full p-5 mt-5 leading-normal text-green-600 bg-green-100 rounded-lg success-alert left-4 bottom-5 md:w-1/4" role="alert">
          <div
          class="inline-flex items-center justify-center flex-shrink-0 w-auto h-8 mr-2 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20">
              <path
                  d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
          </svg>
          <span class="sr-only">Check icon</span>
        </div><div
        class="inline-flex items-center w-full pr-2 justify-left"> <strong>Success !</strong> <span class="pl-3 message"></span></div>


        </div>


          </div>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>

    </body>

    {!! get_setting('footer_scripts')??'' !!}
</html>
