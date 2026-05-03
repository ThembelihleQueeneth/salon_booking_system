<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Braids by Olu</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --color-brand-50: #fbf6f8;
            --color-brand-100: #f6edf1;
            --color-brand-200: #ebd4de;
            --color-brand-300: #dfbcca;
            --color-brand-400: #c98ca5;
            --color-brand-500: #b25d80;
            --color-brand-600: #98506D;
            --color-brand-700: #7c4159;
            --color-brand-800: #653549;
            --color-brand-900: #552d3e;
        }
    </style>
</head>

<body class="bg-white text-gray-900 font-sans">

  <!-- NAVBAR -->
  <nav class="w-full flex items-center justify-between px-6 md:px-16 py-5 bg-white shadow-sm sticky top-0 z-50">
    
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 rounded-xl cursor-pointer bg-brand-600 flex items-center justify-center text-white font-bold">
        BO
      </div>
      <h1 class="text-lg font-bold tracking-wide">Braids by Olu</h1>
    </div>

    <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
      <li class="hover:text-brand-600 cursor-pointer">Home</li>
      <li class="hover:text-brand-600 cursor-pointer">Services</li>
      <li class="hover:text-brand-600 cursor-pointer">Stylist</li>
      <li class="hover:text-brand-600 cursor-pointer">Gallery</li>
      <li class="hover:text-brand-600 cursor-pointer">About Us</li>
      <li class="hover:text-brand-600 cursor-pointer">Contact</li>
    </ul>

    <button class="bg-brand-600 hover:bg-brand-700 text-white px-5 py-2 rounded-xl cursor-pointer font-medium shadow-md transition">
      Book Appointment
    </button>
  </nav>


  <!-- HERO SECTION -->
  <section class="hero px-6 md:px-16 py-14 bg-gradient-to-b from-brand-50 to-white">
    
    <div class="flex flex-col md:flex-row items-center justify-between gap-10">

      <!-- HERO CONTENT -->
      <div class="here-content max-w-xl">
        <p class="text-brand-600 font-semibold uppercase tracking-widest text-sm">
          Beauty. Culture. Confidence.
        </p>

        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mt-4">
          Braids that <span class="text-brand-600">Empower.</span>
        </h1>

        <p class="text-gray-600 mt-5 text-lg">
          Professional braiding services for Black hair.  
          Book your appointment with ease and walk out feeling like royalty.
        </p>

        <div class="flex items-center gap-4 mt-8">
          <button class="bg-brand-600 hover:bg-brand-700 text-white px-6 py-3 rounded-xl cursor-pointer font-semibold shadow-lg transition">
            Book Now →
          </button>

          <button class="border border-gray-300 hover:border-brand-500 px-6 py-3 rounded-xl cursor-pointer font-semibold text-gray-700 transition">
            View All Services
          </button>
        </div>

        <!-- MINI FEATURES -->
        <div class="grid grid-cols-3 gap-6 mt-10 text-sm text-gray-700">
          <div class="flex flex-col gap-1">
            <span class="font-bold text-brand-600">✔</span>
            <p class="font-medium">Skilled Stylists</p>
          </div>
          <div class="flex flex-col gap-1">
            <span class="font-bold text-brand-600">📅</span>
            <p class="font-medium">Easy Booking</p>
          </div>
          <div class="flex flex-col gap-1">
            <span class="font-bold text-brand-600">❤</span>
            <p class="font-medium">Loved Community</p>
          </div>
        </div>
      </div>

      <!-- HERO IMAGE -->
      <div class="hero-images flex gap-4 overflow-x-auto md:overflow-visible max-w-xl">
        <img src="https://via.placeholder.com/220x280" class="rounded-2xl shadow-lg object-cover w-52 h-72" alt="">
        <img src="https://via.placeholder.com/220x280" class="rounded-2xl shadow-lg object-cover w-52 h-72" alt="">
        <img src="https://via.placeholder.com/220x280" class="rounded-2xl shadow-lg object-cover w-52 h-72" alt="">
      </div>

    </div>
  </section>


  <!-- SERVICES -->
  <section class="px-6 md:px-16 py-14">
    
    <div class="flex items-center justify-between mb-8">
      <h2 class="text-3xl font-bold">Our Signature Braiding Services</h2>
      <a href="#" class="text-brand-600 font-semibold hover:underline">
        View All Services →
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
      
      <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-4 border border-gray-100">
        <img src="https://via.placeholder.com/250x180" class="rounded-xl w-full h-40 object-cover" alt="">
        <h3 class="font-bold mt-4">Knotless Braids</h3>
        <p class="text-sm text-gray-600 mt-2">Natural, lightweight & gentle on your hair.</p>
        <p class="text-brand-600 font-bold mt-3">From R500</p>
      </div>

      <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-4 border border-gray-100">
        <img src="https://via.placeholder.com/250x180" class="rounded-xl w-full h-40 object-cover" alt="">
        <h3 class="font-bold mt-4">Feed In Braids</h3>
        <p class="text-sm text-gray-600 mt-2">Clean, sleek & long lasting.</p>
        <p class="text-brand-600 font-bold mt-3">From R400</p>
      </div>

      <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-4 border border-gray-100">
        <img src="https://via.placeholder.com/250x180" class="rounded-xl w-full h-40 object-cover" alt="">
        <h3 class="font-bold mt-4">Box Braids</h3>
        <p class="text-sm text-gray-600 mt-2">Timeless style, your way.</p>
        <p class="text-brand-600 font-bold mt-3">From R450</p>
      </div>

      <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-4 border border-gray-100">
        <img src="https://via.placeholder.com/250x180" class="rounded-xl w-full h-40 object-cover" alt="">
        <h3 class="font-bold mt-4">Goddess Braids</h3>
        <p class="text-sm text-gray-600 mt-2">Bold, beautiful & protective.</p>
        <p class="text-brand-600 font-bold mt-3">From R550</p>
      </div>

      <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-4 border border-gray-100">
        <img src="https://via.placeholder.com/250x180" class="rounded-xl w-full h-40 object-cover" alt="">
        <h3 class="font-bold mt-4">Boho Braids</h3>
        <p class="text-sm text-gray-600 mt-2">Bohemian look with curly ends.</p>
        <p class="text-brand-600 font-bold mt-3">From R650</p>
      </div>

    </div>
  </section>


  <!-- HOW IT WORKS -->
  <section class="features px-6 md:px-16 py-16 bg-brand-50">
    <h2 class="text-3xl font-bold text-center mb-12">How it works</h2>

    <div class="steps grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
      
      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
        <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-2xl bg-brand-600 text-white text-xl font-bold">
          1
        </div>
        <h3 class="font-bold mt-5 text-lg">Choose a Service</h3>
        <p class="text-gray-600 text-sm mt-2">
          Explore our braiding services and find your perfect style.
        </p>
      </div>

      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
        <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-2xl bg-brand-600 text-white text-xl font-bold">
          2
        </div>
        <h3 class="font-bold mt-5 text-lg">Select Date and Time</h3>
        <p class="text-gray-600 text-sm mt-2">
          Pick a time that works for you and get confirmation.
        </p>
      </div>

      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
        <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-2xl bg-brand-600 text-white text-xl font-bold">
          3
        </div>
        <h3 class="font-bold mt-5 text-lg">Secure Your Booking</h3>
        <p class="text-gray-600 text-sm mt-2">
          Confirm with a 20% deposit and receive an email.
        </p>
      </div>

      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition">
        <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-2xl bg-brand-600 text-white text-xl font-bold">
          4
        </div>
        <h3 class="font-bold mt-5 text-lg">Show Up And Slay</h3>
        <p class="text-gray-600 text-sm mt-2">
          Arrive on time and let our stylists work their magic.
        </p>
      </div>

    </div>
  </section>


  <!-- REVIEWS -->
  <section class="reviews px-6 md:px-16 py-16 bg-white">
    <h2 class="text-3xl font-bold text-center mb-12">Loved by Our Community</h2>

    <div class="reviews-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <div class="review bg-white border border-gray-100 shadow-md rounded-2xl p-6 hover:shadow-lg transition">
        <h3 class="font-bold">John Doe</h3>
        <p class="text-sm text-gray-600 mt-3">
          Great service! Highly recommended.
        </p>
        <p class="text-brand-600 font-semibold mt-4">★★★★★</p>
      </div>

      <div class="review bg-white border border-gray-100 shadow-md rounded-2xl p-6 hover:shadow-lg transition">
        <h3 class="font-bold">Jane Doe</h3>
        <p class="text-sm text-gray-600 mt-3">
          The braids were neat and the vibes were amazing!
        </p>
        <p class="text-brand-600 font-semibold mt-4">★★★★★</p>
      </div>

      <div class="review bg-white border border-gray-100 shadow-md rounded-2xl p-6 hover:shadow-lg transition">
        <h3 class="font-bold">Thando M.</h3>
        <p class="text-sm text-gray-600 mt-3">
          Professional, quick and very friendly. I love my hair.
        </p>
        <p class="text-brand-600 font-semibold mt-4">★★★★★</p>
      </div>

      <div class="review bg-white border border-gray-100 shadow-md rounded-2xl p-6 hover:shadow-lg transition">
        <h3 class="font-bold">Lerato K.</h3>
        <p class="text-sm text-gray-600 mt-3">
          Clean salon, great service, and my braids lasted long.
        </p>
        <p class="text-brand-600 font-semibold mt-4">★★★★★</p>
      </div>

    </div>
  </section>


  <!-- LAST CTA -->
  <section class="last px-6 md:px-16 py-16 bg-brand-50">
    <div class="bg-white rounded-3xl shadow-lg p-10 flex flex-col md:flex-row items-center justify-between gap-8">
      
      <div>
        <h1 class="text-4xl font-extrabold">
          Ready for your next crown?
        </h1>
        <p class="text-gray-600 mt-4 max-w-md">
          Book your appointment today and let our talented stylists bring your hair goals to life.
        </p>
      </div>

      <div class="text-center">
        <button class="bg-brand-600 hover:bg-brand-700 text-white px-8 cursor-pointer py-4 rounded-2xl font-bold shadow-md transition">
          Book Appointment
        </button>
        <p class="text-sm text-gray-500 mt-3">
          Spots fill up fast → book now!
        </p>
      </div>

    </div>
  </section>


  <!-- FOOTER -->
  <footer class="px-6 md:px-16 py-8 bg-white border-t border-gray-200">
    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
      
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl cursor-pointer bg-brand-600 flex items-center justify-center text-white font-bold">
          BO
        </div>
        <p class="font-bold">Braids by Olu</p>
      </div>

      <div class="text-gray-500 text-sm text-center">
        Follow us on Instagram • TikTok • Facebook
      </div>

      <div class="text-gray-500 text-sm">
        &copy; <?php echo date("Y"); ?> Braids by Olu. All rights reserved
      </div>

    </div>
  </footer>

</body>
</html>
