```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Braids by Olu</title>
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
        
        <a href="index.php" class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-brand-600 flex items-center justify-center text-white font-bold">
                BO
            </div>
            <h1 class="text-lg font-bold tracking-wide">Braids by Olu</h1>
        </a>

        <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
            <li><a href="index.php" class="hover:text-brand-600">Home</a></li>
            <li><a href="services.php" class="hover:text-brand-600">Services</a></li>
            <li><a href="stylists.php" class="hover:text-brand-600">Stylists</a></li>
            <li><a href="gallery.php" class="hover:text-brand-600">Gallery</a></li>
            <li><a href="about.php" class="hover:text-brand-600">About Us</a></li>
            <li><a href="contact.php" class="text-brand-600 font-semibold">Contact</a></li>
        </ul>

        <a href="booking.php" class="bg-brand-600 hover:bg-brand-700 text-white px-5 py-2 rounded-xl font-medium shadow-md transition">
            Book Appointment
        </a>
    </nav>


    <!-- HEADER -->
    <section class="px-6 md:px-16 py-16 bg-gradient-to-b from-brand-50 to-white">
        <div class="max-w-4xl">
            <p class="text-brand-600 font-semibold uppercase tracking-widest text-sm">
                Contact Us
            </p>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mt-4">
                Let’s Talk, <span class="text-brand-600">Queen.</span>
            </h1>

            <p class="text-gray-600 mt-6 text-lg">
                Have a question about our services, pricing, or bookings?  
                Send us a message and we’ll get back to you as soon as possible.
            </p>
        </div>
    </section>


    <!-- CONTACT SECTION -->
    <section class="px-6 md:px-16 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <!-- CONTACT INFO -->
            <div class="bg-brand-50 border border-brand-100 rounded-3xl p-10 shadow-sm">
                <h2 class="text-2xl font-bold">Contact Information</h2>

                <p class="text-gray-600 mt-4">
                    You can reach us through our contact details below or send a message using the form.
                </p>

                <div class="mt-8 space-y-6 text-gray-700">

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-brand-600 flex items-center justify-center text-white text-lg">
                            📍
                        </div>
                        <div>
                            <p class="font-bold">Location</p>
                            <p class="text-sm text-gray-600">Pretoria, South Africa</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-brand-600 flex items-center justify-center text-white text-lg">
                            📞
                        </div>
                        <div>
                            <p class="font-bold">Phone</p>
                            <p class="text-sm text-gray-600">+27 71 234 5678</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-brand-600 flex items-center justify-center text-white text-lg">
                            ✉
                        </div>
                        <div>
                            <p class="font-bold">Email</p>
                            <p class="text-sm text-gray-600">info@braidsbyolu.co.za</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-brand-600 flex items-center justify-center text-white text-lg">
                            ⏰
                        </div>
                        <div>
                            <p class="font-bold">Working Hours</p>
                            <p class="text-sm text-gray-600">Mon - Sat: 08:00 - 18:00</p>
                        </div>
                    </div>

                </div>

                <div class="mt-10">
                    <h3 class="font-bold text-lg">Social Media</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Instagram • TikTok • Facebook
                    </p>
                </div>
            </div>


            <!-- CONTACT FORM -->
            <div class="bg-white border border-gray-100 rounded-3xl p-10 shadow-md">
                <h2 class="text-2xl font-bold">Send Us a Message</h2>
                <p class="text-gray-600 mt-3 text-sm">
                    Fill in the form below and we’ll respond quickly.
                </p>

                <form action="" method="POST" class="mt-8 space-y-5">

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                        <input type="text" name="name" required
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-500">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" required
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-500">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                        <input type="text" name="phone"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-500">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                        <textarea name="message" rows="5" required
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-500"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-4 rounded-2xl shadow-md transition">
                        Send Message
                    </button>

                </form>
            </div>

        </div>
    </section>


    <!-- MAP SECTION -->
    <section class="px-6 md:px-16 pb-16">
        <div class="rounded-3xl overflow-hidden shadow-md border border-gray-100">
            <iframe 
                class="w-full h-[400px]"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.663636455275!2d28.229271!3d-25.747868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95618fddc06bdb%3A0x6bdfc7b6b8d9b1d2!2sPretoria!5e0!3m2!1sen!2sza!4v1710000000000"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="px-6 md:px-16 py-8 bg-white border-t border-gray-200">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-brand-600 flex items-center justify-center text-white font-bold">
                    BO
                </div>
                <p class="font-bold">Braids by Olu</p>
            </div>

            <div class="text-gray-500 text-sm text-center">
                Instagram • TikTok • Facebook
            </div>

            <div class="text-gray-500 text-sm">
                &copy; <?php echo date("Y"); ?> Braids by Olu. All rights reserved
            </div>

        </div>
    </footer>

</body>
</html>
```

