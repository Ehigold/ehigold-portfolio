  <!-- Header -->
  <header class="text-center py-10">
    <h1 class="text-4xl font-bold">Your Name</h1>
    <p class="text-lg mt-2">Web Designer & Developer</p>
    <a href="/cv.pdf" download class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
      Download CV
    </a>
  </header>

  <!-- Tabs Section -->
  <section class="max-w-4xl mx-auto px-4 py-10">
    <div class="mb-4 border-b border-gray-200">
      <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="portfolio-tabs" role="tablist">
        <li class="mr-2">
          <button class="inline-block p-4 border-b-2 rounded-t-lg" id="designs-tab" data-tabs-target="#designs" type="button" role="tab" aria-controls="designs" aria-selected="true">Designs</button>
        </li>
        <li class="mr-2">
          <button class="inline-block p-4 border-b-2 rounded-t-lg" id="websites-tab" data-tabs-target="#websites" type="button" role="tab" aria-controls="websites" aria-selected="false">Websites</button>
        </li>
      </ul>
    </div>

    <!-- Tab Contents -->
    <div id="portfolio-tabs-content">
      <!-- Designs Tab -->
      <div class="hidden p-4 rounded-lg bg-gray-50" id="designs" role="tabpanel" aria-labelledby="designs-tab">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
          <!-- Repeat this block for each design -->
          <img src="path-to-your-design.jpg" alt="Design Preview" class="w-full h-auto rounded shadow-md">
        </div>
      </div>

      <!-- Websites Tab -->
      <div class="hidden p-4 rounded-lg bg-gray-50" id="websites" role="tabpanel" aria-labelledby="websites-tab">
        <ul class="space-y-3">
          <!-- Repeat this block for each website project -->
          <li>
            <a href="https://yourwebsiteproject.com" target="_blank" class="text-blue-600 hover:underline">
              My Website Project
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>



  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const tabs = document.querySelectorAll('[data-tabs-target]');
      const tabContents = document.querySelectorAll('#portfolio-tabs-content > div');

      tabs.forEach(tab => {
        tab.addEventListener('click', () => {
          tabContents.forEach(content => content.classList.add('hidden'));
          tabs.forEach(t => t.classList.remove('border-blue-600', 'text-blue-600'));

          const target = document.querySelector(tab.getAttribute('data-tabs-target'));
          target.classList.remove('hidden');
          tab.classList.add('border-blue-600', 'text-blue-600');
        });
      });

      // Activate first tab by default
      tabs[0].click();
    });
  </script>


 <!-- About Me Section -->
  <section class="min-h-screen flex flex-col items-center justify-center text-center px-6 bg-white">
    <div class="max-w-3xl w-full">
      <img src="{{ asset('images/ehigoldd.jpg') }}" alt="My Picture" class="mx-auto w-32 h-32 md:w-40 md:h-40 rounded-full object-cover shadow-lg mb-6">
      <h1 class="text-4xl md:text-5xl font-bold mb-3">Hi, I'm [EhiGold]</h1>
      <p class="text-lg md:text-xl text-gray-600 mb-6">
        I’m a passionate <strong>web</strong> and <strong>graphics designer</strong> who crafts clean, functional, and creative user experiences.
      </p>
      <a href="{{ asset('cv/my-cv.pdf') }}" download class="inline-block px-6 py-3 bg-blue-600 text-white text-sm font-semibold rounded-full shadow hover:bg-blue-700 transition">
        Download My CV
      </a>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="py-16 px-6 bg-gray-100">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-10">My Work</h2>

      <!-- Tabs -->
      <div class="mb-6 border-b border-gray-200">
        <ul class="flex justify-center gap-4 text-base font-medium text-center" id="tabs" data-tabs-toggle="#tabs-content" role="tablist">
          <li>
            <button id="designs-tab" data-tabs-target="#designs" type="button" role="tab" aria-controls="designs" aria-selected="true" class="inline-block px-4 py-2 border-b-2 rounded-t-lg border-transparent hover:text-blue-600 hover:border-blue-600 transition">Designs</button>
          </li>
          <li>
            <button id="websites-tab" data-tabs-target="#websites" type="button" role="tab" aria-controls="websites" aria-selected="false" class="inline-block px-4 py-2 border-b-2 rounded-t-lg border-transparent hover:text-blue-600 hover:border-blue-600 transition">Websites</button>
          </li>
        </ul>
      </div>

      <!-- Tabs Content -->
      <div id="tabs-content">
        <!-- Designs -->
        <div class="hidden" id="designs" role="tabpanel" aria-labelledby="designs-tab">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach (['design1.jpg', 'design2.jpg', 'design3.jpg'] as $design)
              <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-md transition">
                <img src="{{ asset('images/designs/' . $design) }}" alt="Design work" class="w-full h-52 object-cover">
              </div>
            @endforeach
          </div>
        </div>

        <!-- Websites -->
        <div class="hidden" id="websites" role="tabpanel" aria-labelledby="websites-tab">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ([
              ['url' => 'https://example1.com', 'image' => 'site1.jpg'],
              ['url' => 'https://example2.com', 'image' => 'site2.jpg']
            ] as $site)
              <a href="{{ $site['url'] }}" target="_blank" class="block bg-white rounded-lg overflow-hidden shadow hover:shadow-md hover:scale-[1.02] transition">
                <img src="{{ asset('images/websites/' . $site['image']) }}" alt="Website preview" class="w-full h-52 object-cover">
              </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
