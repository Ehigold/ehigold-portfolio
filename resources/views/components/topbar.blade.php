<section class="w-full bg-blue-800">
<div class="container flex flex-wrap items-center justify-between p-2 mx-auto">

    <div class="flex items-center space-x-6 rtl:space-x-reverse">
     <x-anchor href="tel:{{ get_setting('phone')??'#' }}" class="text-blue-100">
        <svg class="w-6 h-6 text-blue-100 hover:text-blue-400 dark:hover:text-blue-400 dark:text-blue-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
          </svg>
          {{ get_setting('phone')??'+234 (0) 675 895 9' }}
     </x-anchor>
     <x-anchor href="mailto:{{ get_setting('email') ?? route('account-settings') }}" class="flex items-center text-blue-100">
        <svg class="w-6 h-6 mr-2 text-blue-100 hover:text-blue-400 dark:hover:text-blue-400 dark:text-blue-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
        </svg>
        <span>{{ get_setting('email') ?? 'admin@gmail.com' }}</span>
    </x-anchor>


    </div>


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
        <x-theme-toggle/>


    </div>



</div>
</section>
