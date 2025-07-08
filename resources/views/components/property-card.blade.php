@props(['property'])

<div class="w-full md:max-w-full lg:max-w-md flex flex-col h-full bg-white border border-gray-200 rounded-0 shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="{{ route('properties.detail',['slug'=>$property->slug])}}">

        @if($property->medias->isEmpty())
        <img class="rounded-0 p-5" src="{{ asset('images/default/property-image.svg') }}" width="370px" height="200px" alt="{{ $property->name }}" />

        @else
        @foreach( $property->medias->take(1) as $medias)
        <img class="rounded-0" src="{{ $medias->path??asset('images/default/property-image.svg') }}" width="370px" height="200px" alt="{{ $property->name }}" />
       @endforeach
        @endif

    </a>
    <div class="p-5 flex-grow">
    <div class="flex justify-between">
         <div class="inline-flex items-center px-4 mb-3 py-0 rounded-0 text-md font-medium bg-rent-blue-secondary text-white dark:bg-white dark:text-black">
        {{ $property->type }}
    </div>
        <a href="{{ route('properties.detail',['slug'=>$property->slug])}}" class="inline-flex justify-end px-2 mb-3 py-0 rounded-0 text-md font-medium bg-rent-blue-primary dark:bg-gray-800 text-white dark:border dark:text-white"> <svg class="w-6 h-6 pr-2 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
  <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
</svg>
 View Details </a>
    </div>
        <a href="{{ route('properties.detail',['slug'=>$property->slug])}}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $property->name }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            <svg class="w-5 h-5 text-gray-800 inline dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
            </svg>
            {{ $property->address }}, {{ $property->city->name }}, {{ $property->state->name }}
        </p>
        <div class="flex justify-between mt-4">
  <div class="flex items-center">
    <svg class="w-5 h-5 text-gray-700 dark:text-gray-400 mr-1"  fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
        <path d="M32 32c17.7 0 32 14.3 32 32l0 256 224 0 0-160c0-17.7 14.3-32 32-32l224 0c53 0 96 43 96 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-32-224 0-32 0L64 416l0 32c0 17.7-14.3 32-32 32s-32-14.3-32-32L0 64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"/>
    </svg>

    <span class="text-sm text-black dark:text-gray-400">{{ $property->bedrooms }} </span>
  </div>
  <div class="flex items-center">
    <svg class="w-5 h-5 text-gray-700 dark:text-gray-400 mr-1"  fill="currentColor"   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path d="M96 77.3c0-7.3 5.9-13.3 13.3-13.3c3.5 0 6.9 1.4 9.4 3.9l14.9 14.9C130 91.8 128 101.7 128 112c0 19.9 7.2 38 19.2 52c-5.3 9.2-4 21.1 3.8 29c9.4 9.4 24.6 9.4 33.9 0L289 89c9.4-9.4 9.4-24.6 0-33.9c-7.9-7.9-19.8-9.1-29-3.8C246 39.2 227.9 32 208 32c-10.3 0-20.2 2-29.2 5.5L163.9 22.6C149.4 8.1 129.7 0 109.3 0C66.6 0 32 34.6 32 77.3L32 256c-17.7 0-32 14.3-32 32s14.3 32 32 32l448 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 256 96 77.3zM32 352l0 16c0 28.4 12.4 54 32 71.6L64 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-16 256 0 0 16c0 17.7 14.3 32 32 32s32-14.3 32-32l0-40.4c19.6-17.6 32-43.1 32-71.6l0-16L32 352z"/></svg>
    <span class="text-sm text-black dark:text-gray-400">{{ $property->bathrooms }} </span>
  </div>
  <div class="flex items-center">
    <svg class="w-5 h-5 text-gray-700 dark:text-gray-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
    <span class="text-sm text-black dark:text-gray-400">{{ $property->floors }} Floors</span>
  </div>
  <div class="flex items-center">
    <svg class="w-5 h-5 text-gray-700 dark:text-gray-400 mr-1" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
    <span class="text-sm text-black dark:text-gray-400"> {{ $property->square }} sqft</span>
  </div>
</div>
    </div>
    <div class="mt-auto border-t border-gray-200 dark:border-gray-700 p-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="{{ route('agent.detail',['username'=>$property->user->username??'404'])}}">
                <img class="w-10 h-10 rounded-full mr-3 object-cover" src="{{ $property->user->media->path??asset('images/default/default-avarter.svg') }}" alt="{{ $property->user->first_name }}">
                </a>
                <div>
                    <p class="text-lg font-medium text-gray-900 dark:text-white"></p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-lg font-semibold text-rent-blue-primary dark:text-gray-100">{{ Number::currency($property->price??0, in:"NGN",locale: 'en-NG') }}</p>
            </div>
        </div>
    </div>
</div>
