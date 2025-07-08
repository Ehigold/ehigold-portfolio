
@include('layouts.head')

<div class="min-h-screen bg-rent-gray-light-70 dark:bg-gray-900">

<x-dashboard.topbar />

  <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

    <x-dashboard.aside-admin />

  <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
        <main class="min-h-[45rem] w-full max-w-full">
            {{ $slot }}
        </main>


      <x-notification />


<x-dashboard.footer />
