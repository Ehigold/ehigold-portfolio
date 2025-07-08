@section('title', 'EHIGOLD')
@include('layouts.head')
@include('layouts.navigation')







  <!-- Hero Section -->

  <section class="pt-20 pb-10 bg-gradient-to-r from-black to-gray-900 text-white">
  <div class="container mx-auto flex flex-col md:flex-row items-center md:items-start gap-10 px-6">

    <!-- Left: Profile Image -->
    <div class="flex-shrink-0">
      <img src="{{ asset('images/ehigoldd.jpg') }}"
           alt="Profile Picture"
           class="w-56 h-56 rounded-2xl shadow-lg border-4 border-white object-cover" />
    </div>

    <!-- Right: Bio and Info -->
    <div class="flex-1 text-center md:text-left">
      <h1 class="text-4xl font-bold">Ehinorbhen Anenih</h1>
      <p class="text-gray-300 mt-4 max-w-xl">
        Experienced backend developer with a passion for creating user-friendly and visually appealing web applications. With 5+ years of experience,
        I have a strong foundation in HTML, CSS, and bootstrap, tailwind, flowbite as well as proficiency in modern frontend frameworks such as React.
      </p>

      <div class="mt-6 space-y-2">
        <div>
          <a href="mailto:amakirisoibibo@gmail.com" class="text-sm text-gray-400 hover:text-white block">
            ehigold33@gmail.com
          </a>
          <a href="tel:+2348038747806" class="text-sm text-gray-400 hover:text-white block">
            +234 812 772 6733
          </a>
        </div>
        <a href="{{ asset('cv/my-cv.pdf') }}" download
           class="mt-4 inline-block px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
          Download CV
        </a>
      </div>
    </div>

  </div>
</section>


 <!-- Biography Section -->
<section class="py-20 px-6 bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white">
  <div class="container mx-auto max-w-6xl flex flex-col md:flex-row items-center gap-10">

    <!-- Left: Image -->
    <div class="flex-shrink-0 w-full md:w-1/2">
      <img src="{{ asset('images/ehigoldd.jpg') }}" 
           alt="Biography Image" 
           class="w-full rounded-2xl shadow-2xl object-cover" />
    </div>

    <!-- Right: Text -->
    <div class="w-full md:w-1/2">
      <h2 class="text-3xl font-bold mb-4">About Me & Biography</h2>
      <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
        I'm Soibibo Amakiri, a trailblazer in the ever-evolving field of frontend development. With over 5 years of experience, I specialize in crafting clean, user-centered interfaces using modern web technologies like <strong>HTML</strong>, <strong>CSS</strong>, <strong>Tailwind CSS</strong>, <strong>JavaScript</strong>, <strong>React</strong>, and <strong>Laravel</strong>.
      </p>
      <p class="mt-4 text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
        My approach combines creativity with performance. Whether building dynamic SPAs or designing seamless UI/UX, I aim to make the web more accessible, beautiful, and responsive.
      </p>
      <div class="mt-6">
        <a href="{{ asset('cv/my-cv.pdf') }}" download
           class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
          Download My CV
        </a>
      </div>
    </div>

  </div>
</section>


  <!-- Services Section -->
  <section class="bg-gray-800 py-16 px-6">
    <h2 class="text-center text-2xl font-bold mb-10">Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
      @foreach ([
        ['title' => 'Web Development', 'desc' => 'Custom, responsive websites to grow your business.'],
        ['title' => 'UI/UX Design', 'desc' => 'User-friendly design experiences with modern UI kits.'],
        ['title' => 'Graphics Design', 'desc' => 'Logos, branding, posters, and marketing materials.'],
      ] as $service)
      <div class="bg-gray-700 p-6 rounded-lg shadow hover:bg-gray-600 transition">
        <h3 class="font-bold text-xl">{{ $service['title'] }}</h3>
        <p class="text-gray-300 mt-2">{{ $service['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="py-16 px-6">
    <h2 class="text-center text-2xl font-bold mb-8">Portfolio</h2>

    <!-- Tabs -->
    <div class="mb-6 text-center">
      <ul class="flex justify-center space-x-4" id="tabs" data-tabs-toggle="#tabsContent" role="tablist">
        <li>
          <button id="apps-tab" data-tabs-target="#apps" type="button" role="tab" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Web Applications</button>
        </li>
        <li>
          <button id="designs-tab" data-tabs-target="#designs" type="button" role="tab" class="px-4 py-2 text-white bg-gray-700 rounded hover:bg-gray-600">UI/UX Designs</button>
        </li>
      </ul>
    </div>

    <!-- Tabs Content -->
    <div id="tabsContent">
      <div id="apps" class="p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" role="tabpanel" aria-labelledby="apps-tab">
        @foreach ([
          ['title' => 'Credib.io', 'image' => 'credib.jpg', 'url' => 'https://credib.io'],
          ['title' => 'Stormcell Tech', 'image' => 'stormcell.jpg', 'url' => 'https://stormcell.com'],
        ] as $site)
        <a href="{{ $site['url'] }}" target="_blank" class="block bg-gray-800 rounded-xl shadow hover:scale-[1.02] transition">
          <img src="{{ asset('images/websites/' . $site['image']) }}" alt="{{ $site['title'] }}" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h4 class="font-bold text-lg">{{ $site['title'] }}</h4>
          </div>
        </a>
        @endforeach
      </div>

      <div id="designs" class="hidden p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" role="tabpanel" aria-labelledby="designs-tab">
        @foreach (['ui1.jpg', 'ui2.jpg', 'ui3.jpg'] as $design)
        <div class="bg-gray-800 rounded-lg shadow overflow-hidden">
          <img src="{{ asset('images/designs/' . $design) }}" alt="Design" class="w-full h-48 object-cover">
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 text-sm text-gray-500 bg-gray-900">
    &copy; {{ date('Y') }} Soibibo Amakiri. All rights reserved.
    <div class="mt-2 space-x-2">
      <a href="#" class="hover:text-white">Facebook</a>
      <a href="#" class="hover:text-white">Twitter</a>
    </div>
  </footer>










<x-footer-main />
