@section('title', 'EHIGOLD')
@include('layouts.head')
@include('layouts.navigation')

<style>
  @keyframes float-slow {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(5deg); }
  }

  @keyframes float-fast {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(-5deg); }
  }

  @keyframes float-medium {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(3deg); }
  }

  @keyframes gradient-shift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
  }

  @keyframes glow-pulse {
    0%, 100% { box-shadow: 0 0 20px rgba(35, 199, 172, 0.3); }
    50% { box-shadow: 0 0 40px rgba(35, 199, 172, 0.6); }
  }

  @keyframes slide-in-up {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-float-slow {
    animation: float-slow 6s ease-in-out infinite;
  }

  .animate-float-fast {
    animation: float-fast 3s ease-in-out infinite;
  }

  .animate-float-medium {
    animation: float-medium 4s ease-in-out infinite;
  }

  .animate-gradient {
    background-size: 200% 200%;
    animation: gradient-shift 3s ease infinite;
  }

  .animate-glow {
    animation: glow-pulse 2s ease-in-out infinite;
  }

  .animate-slide-up {
    animation: slide-in-up 0.6s ease-out;
  }

  /* Smooth scrolling */
  html {
    scroll-behavior: smooth;
  }

  /* Custom scrollbar */
  ::-webkit-scrollbar {
    width: 8px;
  }

  ::-webkit-scrollbar-track {
    background: #1f2937;
  }

  ::-webkit-scrollbar-thumb {
    background: #23C7AC;
    border-radius: 4px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #1ea892;
  }

  /* Tab switching animations */
  .tab-content {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.3s ease-in-out;
  }

  .tab-content.active {
    opacity: 1;
    transform: translateY(0);
  }

  /* Prevent tab content flashing */
  [role="tabpanel"] {
    transition: opacity 0.3s ease-out, transform 0.3s ease-out;
    will-change: opacity, transform;
  }

  [role="tabpanel"].hidden {
    display: none !important;
    visibility: hidden;
  }

  [role="tabpanel"]:not(.hidden) {
    display: grid;
    visibility: visible;
  }

  /* Tab button states */
  [role="tab"] {
    transition: all 0.2s ease-in-out;
    will-change: background, border-color;
  }

  /* Prevent any layout shifts during tab switching */
  #tabsContent {
    position: relative;
    min-height: 400px;
  }

  /* Ensure smooth rendering */
  .portfolio-container {
    transform: translateZ(0);
    backface-visibility: hidden;
  }

  /* Modal/Lightbox styles */
  .image-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease-in-out;
  }

  .image-modal.active {
    opacity: 1;
    visibility: visible;
  }

  .image-modal img {
    max-width: 90%;
    max-height: 90%;
    object-fit: contain;
    border-radius: 12px;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
    transform: scale(0.8);
    transition: transform 0.3s ease-out;
  }

  .image-modal.active img {
    transform: scale(1);
  }

  .image-modal .close-btn {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
  }

  .image-modal .close-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.5);
    transform: scale(1.1);
  }

  .image-modal .close-btn svg {
    width: 20px;
    height: 20px;
    color: white;
  }

  /* Hover effects for cards */
  .card-hover {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .card-hover:hover {
    transform: translateY(-8px) scale(1.02);
  }

  /* Loading animation for images */
  .image-loading {
    background: linear-gradient(90deg, #374151 25%, #4b5563 50%, #374151 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
  }

  @keyframes loading {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
  }

  /* Mobile responsive improvements */
  @media (max-width: 640px) {
    .hero-text {
      font-size: clamp(2rem, 8vw, 3rem);
    }

    .section-padding {
      padding-left: 1rem;
      padding-right: 1rem;
    }
  }
</style>







  <!-- Hero Section -->
<section class="relative z-10 pt-16 pb-16 md:pt-20 md:pb-20 bg-gradient-to-br from-black via-gray-900 to-gray-800 text-white overflow-hidden min-h-screen flex items-center">
  <!-- Enhanced Floating Geometric Shapes -->
  <div class="absolute inset-0 z-0 pointer-events-none">
    <!-- Floating Circle -->
    <div class="absolute top-10 left-4 md:left-10 w-6 h-6 md:w-10 md:h-10 bg-[#23C7AC] opacity-20 rounded-full animate-pulse"></div>

    <!-- Floating Square -->
    <div class="absolute bottom-20 right-4 md:right-20 w-4 h-4 md:w-8 md:h-8 bg-[#23C7AC] opacity-20 rotate-12 animate-bounce"></div>

    <!-- Additional floating elements for visual appeal -->
    <div class="absolute top-1/4 left-1/4 w-3 h-3 md:w-6 md:h-6 bg-[#23C7AC] opacity-10 rounded-full animate-ping"></div>
    <div class="absolute bottom-1/3 left-1/3 w-2 h-2 md:w-4 md:h-4 bg-white opacity-10 rounded-full animate-pulse"></div>

    <!-- Floating Triangle (SVG) -->
    <svg class="absolute top-1/3 right-1/4 md:right-1/3 w-8 h-8 md:w-12 md:h-12 opacity-20 animate-pulse" viewBox="0 0 100 100" fill="#23C7AC">
      <polygon points="50,0 0,100 100,100" />
    </svg>
  </div>

  <!-- Hero Content -->
  <div class="relative container mx-auto flex flex-col md:flex-row items-center md:items-center gap-8 md:gap-12 px-4 md:px-6 z-10 w-full">
    <!-- Profile Image -->
    <div class="flex-shrink-0 order-1 md:order-1">
      <div class="relative">
        <img src="{{ asset('images/ehigoldd.jpg') }}"
             alt="Profile Picture"
             class="w-48 h-48 md:w-64 md:h-64 lg:w-72 lg:h-72 rounded-3xl shadow-2xl border-4 border-[#23C7AC] object-cover transform hover:scale-105 transition-transform duration-300" />
        <!-- Glow effect -->
        <div class="absolute inset-0 rounded-3xl bg-[#23C7AC] opacity-20 blur-xl -z-10"></div>
      </div>
    </div>

    <!-- Bio & Text -->
    <div class="flex flex-col justify-center text-center md:text-left order-2 md:order-2 space-y-4 md:space-y-6 max-w-2xl">
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight">
        Hello, I'm <span class="text-[#23C7AC] bg-gradient-to-r from-[#23C7AC] to-[#1ea892] bg-clip-text text-transparent">EHIGOLD</span>
      </h1>

      <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-300 leading-relaxed max-w-xl mx-auto md:mx-0">
        I design stunning logos and flyers, teach web design, and develop full-stack web applications that bring ideas to life.    
        </p>

      <!-- Enhanced CTA Buttons -->
      <div class="flex flex-col sm:flex-row gap-4 mt-6 md:mt-8">
        <a href="#portfolio" class="bg-[#23C7AC] hover:bg-[#1ea892] text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
          View My Work
        </a>
        <a href="#contact" class="border-2 border-[#23C7AC] text-[#23C7AC] hover:bg-[#23C7AC] hover:text-white px-6 py-3 rounded-full font-semibold transition-all duration-300">
          Get In Touch
        </a>
      </div>

      <!-- Scroll Down -->
      <div class="mt-8 md:mt-12">
        <a href="#overview" class="animate-bounce text-gray-400 hover:text-[#23C7AC] inline-flex items-center gap-2 transition-colors duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
          <span class="text-sm md:text-base">Scroll down</span>
        </a>
      </div>
    </div>
  </div>
</section>


</style>




<!-- Overview -->
<section id="overview" class="py-16 md:py-24 px-4 md:px-6 lg:px-32 bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Overview</h2>
      <p class="text-gray-300 text-base md:text-lg lg:text-xl mb-10 leading-relaxed max-w-4xl mx-auto">
       I’m a creative Graphics and Web Designer with over 5 years of experience delivering visually compelling, user focused designs 
       and two years of hands-on experience as a Web Developer. I bridge the gap between design and functionality by building responsive, 
       full-featured websites and applications that not only look great but also perform flawlessly.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
      <!-- Card 1 -->
      <div data-aos="fade-up" data-aos-delay="100" class="group h-64 md:h-72 bg-gradient-to-br from-gray-800 to-gray-900 border border-[#23C7AC]/30 hover:border-[#23C7AC] hover:bg-gradient-to-br hover:from-gray-700 hover:to-gray-800 transition-all duration-500 rounded-2xl p-6 shadow-lg hover:shadow-2xl text-center flex flex-col items-center justify-center transform hover:-translate-y-2">
        <div class="text-[#23C7AC] mb-4 group-hover:scale-110 transition-transform duration-300">
          <!-- Icon: Paint Brush for Graphics -->
          <div class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-[#23C7AC] to-[#1ea892] rounded-2xl flex items-center justify-center mx-auto shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232a2.828 2.828 0 114 4L7 21H3v-4L15.232 5.232z" />
            </svg>
          </div>
        </div>
        <h3 class="text-xl md:text-2xl font-bold text-white group-hover:text-[#23C7AC] transition-colors duration-300">Graphics Designer</h3>
        <p class="text-gray-400 text-sm md:text-base mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Creative visual solutions</p>
      </div>

      <!-- Card 2 -->
      <div data-aos="fade-up" data-aos-delay="200" class="group h-64 md:h-72 bg-gradient-to-br from-gray-800 to-gray-900 border border-[#23C7AC]/30 hover:border-[#23C7AC] hover:bg-gradient-to-br hover:from-gray-700 hover:to-gray-800 transition-all duration-500 rounded-2xl p-6 shadow-lg hover:shadow-2xl text-center flex flex-col items-center justify-center transform hover:-translate-y-2">
        <div class="text-[#23C7AC] mb-4 group-hover:scale-110 transition-transform duration-300">
          <!-- Icon: Layout for Web Design -->
          <div class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-[#23C7AC] to-[#1ea892] rounded-2xl flex items-center justify-center mx-auto shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v3H3V4zm0 5h18v11a1 1 0 01-1 1H4a1 1 0 01-1-1V9z" />
            </svg>
          </div>
        </div>
        <h3 class="text-xl md:text-2xl font-bold text-white group-hover:text-[#23C7AC] transition-colors duration-300">Web Designer</h3>
        <p class="text-gray-400 text-sm md:text-base mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">User-focused interfaces</p>
      </div>

      <!-- Card 3 -->
      <div data-aos="fade-up" data-aos-delay="300" class="h-72 bg-gray-800 border border-[#23C7AC] hover:border-[#23C7AC] hover:bg-gray-700 transition duration-300 rounded-2xl p-6 shadow-md text-center flex flex-col items-center justify-center">
        <div class="text-[#23C7AC] mb-4">
          <!-- Icon: Terminal/Code for Backend Developer -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l-3 3 3 3m5-6h3m4 6H5a2 2 0 01-2-2V7a2 2 0 012-2h16a2 2 0 012 2v8a2 2 0 01-2 2z" />
          </svg>
        </div>
        <h3 class="text-2xl font-semibold">Web Developer</h3>
      </div>
       <!-- Card 4 -->
      <div data-aos="fade-up" data-aos-delay="300" class="h-72 bg-gray-800 border border-[#23C7AC] hover:border-[#23C7AC] hover:bg-gray-700 transition duration-300 rounded-2xl p-6 shadow-md text-center flex flex-col items-center justify-center">
        <div class="text-[#23C7AC] mb-4">
          <!-- Icon: Terminal/Code for Backend Developer -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l-3 3 3 3m5-6h3m4 6H5a2 2 0 01-2-2V7a2 2 0 012-2h16a2 2 0 012 2v8a2 2 0 01-2 2z" />
          </svg>
        </div>
        <h3 class="text-2xl font-semibold">Web Design Tutor</h3>
      </div>
    </div>
  </div>
</section>




  <!-- Work Experience Timeline -->
  <section id="experience" class="py-16 md:py-24 px-4 md:px-8 lg:px-32 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12 md:mb-16">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-gray-800">Work Experience</h2>
        <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">My professional journey and key achievements</p>
      </div>

      <div class="relative">
        <!-- Timeline line - hidden on mobile, visible on larger screens -->
        <div class="hidden md:block absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-[#23C7AC] to-gray-300"></div>

        <ol class="space-y-8 md:space-y-12">
          <!-- Timeline item 1 -->
          <li class="relative">
            <!-- Timeline dot -->
            <div class="hidden md:flex absolute left-6 w-4 h-4 bg-[#23C7AC] rounded-full ring-4 ring-white shadow-lg"></div>

            <!-- Content card -->
            <div class="md:ml-16 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 md:p-8 border border-gray-100 hover:border-[#23C7AC]/20">
              <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 md:mb-0">Web Developer / WordPress Tutor</h3>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-[#23C7AC]/10 text-[#23C7AC] border border-[#23C7AC]/20">
                  @ StormCell
                </span>
              </div>

              <div class="space-y-3">
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Developing and maintaining web applications using Laravel, Flowbite, Tailwind CSS and other related technologies.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Collaborating with cross-functional teams including designers, product managers, and other developers to create high-quality products.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Implementing responsive design principles to ensure applications are accessible on various devices.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Tutor students from basic to advance level in Web design.</p>
                </div>
              </div>
            </div>
          </li>
          <!-- Timeline item 2 -->
          <li class="relative">
            <!-- Timeline dot -->
            <div class="hidden md:flex absolute left-6 w-4 h-4 bg-[#23C7AC] rounded-full ring-4 ring-white shadow-lg"></div>

            <!-- Content card -->
            <div class="md:ml-16 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 md:p-8 border border-gray-100 hover:border-[#23C7AC]/20">
              <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 md:mb-0">Backend Developer / WordPress Developer</h3>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-[#23C7AC]/10 text-[#23C7AC] border border-[#23C7AC]/20">
                  @ Eachblock
                </span>
              </div>

              <div class="space-y-3">
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Developing and maintaining web applications using Laravel framework.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Designing and managing RESTful APIs for seamless data integration.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Writing clean, scalable, and secure backend code using modern frameworks.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Creating and managing databases, queries, and relationships using MySQL.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Integrating third-party services like payment gateways and authentication APIs.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Building functional and responsive websites using WordPress.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Collaborating with frontend developers to deliver complete, functional features.</p>
                </div>
              </div>
            </div>
          </li>
          <!-- Timeline item 3 -->
          <li class="relative">
            <!-- Timeline dot -->
            <div class="hidden md:flex absolute left-6 w-4 h-4 bg-[#23C7AC] rounded-full ring-4 ring-white shadow-lg"></div>

            <!-- Content card -->
            <div class="md:ml-16 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 md:p-8 border border-gray-100 hover:border-[#23C7AC]/20">
              <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 md:mb-0">Web Developer</h3>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-[#23C7AC]/10 text-[#23C7AC] border border-[#23C7AC]/20">
                  @ Ielite
                </span>
              </div>

              <div class="space-y-3">
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Contributed to the development of a logistics web platform by extending and maintaining existing Laravel-based features.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Implemented new cargo management logic, improving efficiency in shipment tracking and rate calculations.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Integrated third-party APIs for external cargo bookings, enhancing system automation and service reliability.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Built simple and interactive frontend designs with modern UI/UX principles.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Ensured backend logic was optimized for scalability, data accuracy, and real-time updates.</p>
                </div>
              </div>
            </div>
          </li>
          <!-- Timeline item 4 -->
          <li class="relative">
            <!-- Timeline dot -->
            <div class="hidden md:flex absolute left-6 w-4 h-4 bg-[#23C7AC] rounded-full ring-4 ring-white shadow-lg"></div>

            <!-- Content card -->
            <div class="md:ml-16 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 md:p-8 border border-gray-100 hover:border-[#23C7AC]/20">
              <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2 md:mb-0">Website Manager</h3>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-[#23C7AC]/10 text-[#23C7AC] border border-[#23C7AC]/20">
                  @ Lashi Beauty
                </span>
              </div>

              <div class="space-y-3">
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Managing a WordPress-based e-commerce website by checking for errors and performing regular updates.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Uploading new products and maintaining product catalog with detailed descriptions and images.</p>
                </div>
                <div class="flex items-start gap-3">
                  <div class="w-2 h-2 bg-[#23C7AC] rounded-full mt-2 flex-shrink-0"></div>
                  <p class="text-gray-600 leading-relaxed">Ensuring website security, performance optimization, and user experience improvements.</p>
                </div>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </div>
  </section>



 



  <!-- Portfolio Section -->
  <section id="portfolio" class="py-16 md:py-24 px-4 md:px-6 bg-gradient-to-br from-gray-900 via-gray-800 to-black">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-12 md:mb-16">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Portfolio</h2>
        <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto">Explore my creative work and technical projects</p>
      </div>

      <!-- Enhanced Tabs -->
      <div class="mb-8 md:mb-12">
        <div class="flex flex-col sm:flex-row justify-center gap-2 sm:gap-4 max-w-2xl mx-auto">
          <button id="apps-tab" data-tabs-target="#apps" type="button" role="tab"
                  class="flex-1 px-6 py-3 md:px-8 md:py-4 text-sm md:text-base font-semibold text-white bg-gradient-to-r from-[#23C7AC] to-[#1ea892] rounded-xl hover:from-[#1ea892] hover:to-[#23C7AC] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 active-tab">
            <span class="flex items-center justify-center gap-2">
              <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              WEBSITES
            </span>
          </button>

          <button id="designs-tab" data-tabs-target="#designs" type="button" role="tab"
                  class="flex-1 px-6 py-3 md:px-8 md:py-4 text-sm md:text-base font-semibold text-gray-300 bg-gray-800 border border-gray-700 rounded-xl hover:bg-gray-700 hover:text-white hover:border-[#23C7AC] transition-all duration-300 inactive-tab">
            <span class="flex items-center justify-center gap-2">
              <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              GRAPHICS
            </span>
          </button>

          <button id="logos-tab" data-tabs-target="#logos" type="button" role="tab"
                  class="flex-1 px-6 py-3 md:px-8 md:py-4 text-sm md:text-base font-semibold text-gray-300 bg-gray-800 border border-gray-700 rounded-xl hover:bg-gray-700 hover:text-white hover:border-[#23C7AC] transition-all duration-300 inactive-tab">
            <span class="flex items-center justify-center gap-2">
              <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5H9a2 2 0 00-2 2v10a4 4 0 004 4h6a2 2 0 002-2V7a2 2 0 00-2-2z"></path>
              </svg>
              LOGOS
            </span>
          </button>
        </div>
      </div>

    <!-- Tabs Content -->
    <div id="tabsContent" class="portfolio-container">
      <div class="p-4 mx-auto max-w-7xl">
      <div id="apps" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 md:gap-8" role="tabpanel" aria-labelledby="apps-tab">
          @foreach ([
            ['title' => 'Peterfemassociates', 'image' => 'peterfem.png', 'url' => 'https://peterfemassociates.com'],
            ['title' => 'Haemtechnico Technico', 'image' => 'haemtechnico.png', 'url' => 'https://haemtechnico.com'],
            ['title' => 'Beberrieslounge', 'image' => 'beberrieslounge.png', 'url' => 'https://beberrieslounge.com'],
            ['title' => 'Jetsettlers Services', 'image' => 'jetsettlersservices.png', 'url' => 'https://jetsettlersservicesinc.ca'],

          ] as $site)
          <a href="{{ $site['url'] }}" target="_blank" class="group block bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-lg hover:shadow-2xl hover:scale-[1.02] transition-all duration-300 overflow-hidden border border-gray-700 hover:border-[#23C7AC]/50">
            <div class="relative overflow-hidden">
              <img src="{{ asset('images/' . $site['image']) }}" alt="{{ $site['title'] }}" class="w-full h-48 md:h-56 object-cover group-hover:scale-110 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="w-8 h-8 bg-[#23C7AC] rounded-full flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="p-4 md:p-6">
              <h4 class="text-lg md:text-xl font-bold text-white group-hover:text-[#23C7AC] transition-colors duration-300">{{ $site['title'] }}</h4>
              <p class="text-gray-400 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Click to visit website</p>
            </div>
          </a>
          @endforeach
      </div>
    </div>


        <div id="designs" class="hidden grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 md:gap-8" role="tabpanel" aria-labelledby="designs-tab">
        @foreach (['design1.jpg', 'design2.jpg', 'design5.jpg', 'design6.jpg', 'design7.jpg'] as $design)
        <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden border border-gray-700 hover:border-[#23C7AC]/50 transition-all duration-300 hover:scale-[1.02] cursor-pointer" onclick="openImageModal('{{ asset('images/designs/' . $design) }}', 'Flyer Design')">
            <div class="relative overflow-hidden" style="aspect-ratio: 3/4; min-height: 400px;">
              <img src="{{ asset('images/designs/' . $design) }}" alt="Flyer Design" class="w-full h-full object-contain bg-gray-900 group-hover:scale-105 transition-transform duration-500 p-2">
              <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="w-10 h-10 bg-[#23C7AC] rounded-full flex items-center justify-center shadow-lg">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                  </svg>
                </div>
              </div>
              <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="bg-black/70 backdrop-blur-sm rounded-lg p-3">
                  <p class="text-white text-sm font-medium">Flyer Design</p>
                  <p class="text-gray-300 text-xs">Click to view full size</p>
                </div>
              </div>
            </div>
        </div>
        @endforeach
    </div>

  <div id="logos" class="hidden grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6" role="tabpanel" aria-labelledby="logos-tab">
    @foreach (['design3.jpg', 'design4.jpg', 'design1.jpg', 'design2.jpg', 'design5.jpg', 'design6.jpg', 'design7.jpg', 'design8.jpg'] as $design)
    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden aspect-square border border-gray-700 hover:border-[#23C7AC]/50 transition-all duration-300 hover:scale-[1.02]">
        <div class="relative w-full h-full p-3 md:p-4">
          <img src="{{ asset('images/logos/' . $design) }}"
               alt="Logo Design"
               class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl"></div>
        </div>
    </div>
    @endforeach
</div>






    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-16 md:py-24 px-4 md:px-6 bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12 md:mb-16">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Get In Touch</h2>
        <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto">Ready to bring your ideas to life? Let's collaborate and create something amazing together.</p>
      </div>

      <div class="max-w-4xl mx-auto">
        <!-- Contact Information -->
        <div class="space-y-8 text-center">
          <div class="space-y-6">
            <h3 class="text-2xl md:text-3xl font-bold text-white mb-8">Let's Connect</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto mb-12">
              <!-- Email -->
              <div class="group flex flex-col items-center gap-4 p-6 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-[#23C7AC]/50 transition-all duration-300 hover:bg-gray-800/70">
                <div class="w-16 h-16 bg-gradient-to-br from-[#23C7AC] to-[#1ea892] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                </div>
                <div class="text-center">
                  <p class="text-gray-400 text-sm mb-2">Email</p>
                  <a href="mailto:ehigold33@gmail.com" class="text-white font-semibold hover:text-[#23C7AC] transition-colors duration-300 text-sm break-all">ehigold33@gmail.com</a>
                </div>
              </div>

              <!-- Phone -->
              <div class="group flex flex-col items-center gap-4 p-6 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-[#23C7AC]/50 transition-all duration-300 hover:bg-gray-800/70">
                <div class="w-16 h-16 bg-gradient-to-br from-[#23C7AC] to-[#1ea892] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                  </svg>
                </div>
                <div class="text-center">
                  <p class="text-gray-400 text-sm mb-2">Phone</p>
                  <a href="tel:+2348127726733" class="text-white font-semibold hover:text-[#23C7AC] transition-colors duration-300">+234 812 772 6733</a>
                </div>
              </div>

              <!-- Location -->
              {{-- <div class="group flex flex-col items-center gap-4 p-6 bg-gray-800/50 rounded-2xl border border-gray-700 hover:border-[#23C7AC]/50 transition-all duration-300 hover:bg-gray-800/70">
                <div class="w-16 h-16 bg-gradient-to-br from-[#23C7AC] to-[#1ea892] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </div>
                <div class="text-center">
                  <p class="text-gray-400 text-sm mb-2">Location</p>
                  <p class="text-white font-semibold">Port Harcourt, Nigeria</p>
                </div>
              </div> --}}
            </div>
          </div>

          <!-- Social Media -->
          <div class="space-y-6">
            <h4 class="text-xl font-bold text-white text-center">Follow Me</h4>
            <div class="flex flex-wrap justify-center gap-4">
              <!-- Instagram -->
              <a href="https://www.instagram.com/ehi__gold?igsh=NjIxM2tsazFxaGQ5&utm_source=qr" target="_blank" class="group flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-pink-500 to-purple-600 rounded-xl hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                <span class="text-white font-medium">Instagram</span>
              </a>

              <!-- WhatsApp -->
              <a href="https://wa.me/message/7UX77EBER5O6O1" target="_blank" class="group flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-green-500 to-green-600 rounded-xl hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                </svg>
                <span class="text-white font-medium">WhatsApp</span>
              </a>

              <!-- LinkedIn -->
              <!-- Facebook -->
              <a href="https://www.facebook.com/share/17a8ZBJXE9/?mibextid=wwXIfr" target="_blank" class="group flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
                <span class="text-white font-medium">Facebook</span>
              </a>

              <!-- Twitter/X -->
              {{-- <a href="https://twitter.com/ehigold_designs" target="_blank" class="group flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-gray-800 to-black rounded-xl hover:from-gray-900 hover:to-gray-800 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
                <span class="text-white font-medium">Twitter</span>
              </a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Image Modal -->
<div id="imageModal" class="image-modal" onclick="closeImageModal()">
  <div class="close-btn" onclick="closeImageModal()">
    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
    </svg>
  </div>
  <img id="modalImage" src="" alt="" onclick="event.stopPropagation()">
</div>

<script>
// Enhanced tab switching with no flash/flicker
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('[role="tab"]');
    const tabContents = document.querySelectorAll('[role="tabpanel"]');
    let isAnimating = false;

    // Initialize - ensure only first tab content is visible
    tabContents.forEach((content, index) => {
        if (index === 0) {
            content.classList.remove('hidden');
            content.style.opacity = '1';
            content.style.transform = 'translateY(0)';
        } else {
            content.classList.add('hidden');
            content.style.opacity = '0';
            content.style.transform = 'translateY(20px)';
        }
    });

    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();

            // Prevent clicks during animation
            if (isAnimating) return;

            const targetId = this.getAttribute('data-tabs-target');
            const targetContent = document.querySelector(targetId);
            const currentlyVisible = document.querySelector('[role="tabpanel"]:not(.hidden)');

            // If clicking the same tab, do nothing
            if (targetContent === currentlyVisible) return;

            isAnimating = true;

            // Update tab button states immediately
            tabs.forEach(t => {
                t.classList.remove('bg-gradient-to-r', 'from-[#23C7AC]', 'to-[#1ea892]', 'active-tab');
                t.classList.add('bg-gray-800', 'border', 'border-gray-700', 'inactive-tab');
            });

            this.classList.remove('bg-gray-800', 'border', 'border-gray-700', 'inactive-tab');
            this.classList.add('bg-gradient-to-r', 'from-[#23C7AC]', 'to-[#1ea892]', 'active-tab');

            if (targetContent && currentlyVisible) {
                // Fade out current content
                currentlyVisible.style.transition = 'opacity 0.2s ease-out, transform 0.2s ease-out';
                currentlyVisible.style.opacity = '0';
                currentlyVisible.style.transform = 'translateY(-10px)';

                // After fade out completes, switch content
                setTimeout(() => {
                    // Hide current content
                    currentlyVisible.classList.add('hidden');

                    // Prepare new content (hidden but positioned)
                    targetContent.classList.remove('hidden');
                    targetContent.style.opacity = '0';
                    targetContent.style.transform = 'translateY(10px)';
                    targetContent.style.transition = 'opacity 0.3s ease-out, transform 0.3s ease-out';

                    // Force reflow to ensure styles are applied
                    targetContent.offsetHeight;

                    // Fade in new content
                    requestAnimationFrame(() => {
                        targetContent.style.opacity = '1';
                        targetContent.style.transform = 'translateY(0)';
                    });

                    // Reset animation lock
                    setTimeout(() => {
                        isAnimating = false;
                    }, 300);
                }, 200);
            } else if (targetContent) {
                // No current content, just show target
                targetContent.classList.remove('hidden');
                targetContent.style.transition = 'opacity 0.3s ease-out, transform 0.3s ease-out';
                targetContent.style.opacity = '1';
                targetContent.style.transform = 'translateY(0)';

                setTimeout(() => {
                    isAnimating = false;
                }, 300);
            } else {
                isAnimating = false;
            }
        });
    });

    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Image Modal Functions
function openImageModal(imageSrc, altText) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');

    modalImage.src = imageSrc;
    modalImage.alt = altText;

    modal.classList.add('active');
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.remove('active');
    document.body.style.overflow = ''; // Restore scrolling
}

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
});
</script>

<x-footer-main />
