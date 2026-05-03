```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Braids by Olu</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-white text-gray-900 font-sans">

    <!-- NAVBAR -->
    <nav class="w-full flex items-center justify-between px-6 md:px-16 py-5 bg-white shadow-sm sticky top-0 z-50">
        
        <a href="index.php" class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-purple-600 flex items-center justify-center text-white font-bold">
                BO
            </div>
            <h1 class="text-lg font-bold tracking-wide">Braids by Olu</h1>
        </a>

        <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
            <li><a href="index.php" class="hover:text-purple-600">Home</a></li>
            <li><a href="services.php" class="hover:text-purple-600">Services</a></li>
            <li><a href="stylists.php" class="hover:text-purple-600">Stylists</a></li>
            <li><a href="gallery.php" class="hover:text-purple-600">Gallery</a></li>
            <li><a href="about.php" class="text-purple-600 font-semibold">About Us</a></li>
            <li><a href="contact.php" class="hover:text-purple-600">Contact</a></li>
        </ul>

        <a href="booking.php" class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-xl font-medium shadow-md transition">
            Book Appointment
        </a>
    </nav>


    <!-- HEADER -->
    <section class="px-6 md:px-16 py-16 bg-gradient-to-b from-purple-50 to-white">
        <div class="max-w-4xl">
            <p class="text-purple-600 font-semibold uppercase tracking-widest text-sm">
                About Us
            </p>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mt-4">
                More than braids, <span class="text-purple-600">it's culture.</span>
            </h1>

            <p class="text-gray-600 mt-6 text-lg">
                At Braids by Olu, we specialize in protective styling for Black hair.
                We believe every braid tells a story, and every client deserves to feel confident, beautiful, and seen.
            </p>
        </div>
    </section>


    <!-- ABOUT CONTENT -->
    <section class="px-6 md:px-16 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- IMAGE -->
            <div class="rounded-3xl overflow-hidden shadow-lg">
                <img src="https://via.placeholder.com/800x700" alt="Salon Image"
                    class="w-full h-full object-cover">
            </div>

            <!-- TEXT -->
            <div>
                <h2 class="text-3xl font-bold">
                    Who We Are
                </h2>

                <p class="text-gray-600 mt-5 leading-relaxed">
                    Braids by Olu was created with one mission: to provide high-quality braiding services in a safe,
                    welcoming space for Black women. Our salon is built on passion, precision, and professionalism.
                </p>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    We understand that braids are not just a hairstyle — they are a form of self-expression, identity,
                    and tradition. Whether you're getting ready for a new season, a special event, or simply treating yourself,
                    we are here to make you feel like royalty.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-10">
                    <div class="bg-purple-50 p-6 rounded-2xl border border-purple-100">
                        <h3 class="font-bold text-lg">✨ Our Mission</h3>
                        <p class="text-sm text-gray-600 mt-2">
                            To empower our clients through beautiful braids and exceptional service.
                        </p>
                    </div>

                    <div class="bg-purple-50 p-6 rounded-2xl border border-purple-100">
                        <h3 class="font-bold text-lg">💜 Our Vision</h3>
                        <p class="text-sm text-gray-600 mt-2">
                            To become the most trusted braiding salon in South Africa.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- VALUES -->
    <section class="px-6 md:px-16 py-16 bg-white">
        <h2 class="text-3xl font-bold text-center mb-12">
            What We Stand For
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="bg-white shadow-md hover:shadow-xl transition border border-gray-100 p-8 rounded-3xl text-center">
                <div class="w-14 h-14 mx-auto rounded-2xl bg-purple-600 flex items-center justify-center text-white text-xl font-bold">
                    1
                </div>
                <h3 class="font-bold text-xl mt-6">Quality</h3>
                <p class="text-gray-600 text-sm mt-3">
                    Clean parts, neat braids, long-lasting styles and attention to detail.
                </p>
            </div>

            <div class="bg-white shadow-md hover:shadow-xl transition border border-gray-100 p-8 rounded-3xl text-center">
                <div class="w-14 h-14 mx-auto rounded-2xl bg-purple-600 flex items-center justify-center text-white text-xl font-bold">
                    2
                </div>
                <h3 class="font-bold text-xl mt-6">Comfort</h3>
                <p class="text-gray-600 text-sm mt-3">
                    We braid with care. No pain, no tight edges, no stress.
                </p>
            </div>

            <div class="bg-white shadow-md hover:shadow-xl transition border border-gray-100 p-8 rounded-3xl text-center">
                <div class="w-14 h-14 mx-auto rounded-2xl bg-purple-600 flex items-center justify-center text-white text-xl font-bold">
                    3
                </div>
                <h3 class="font-bold text-xl mt-6">Community</h3>
                <p class="text-gray-600 text-sm mt-3">
                    We create a safe space where every queen feels welcome.
                </p>
            </div>

        </div>
    </section>


    <!-- CTA SECTION -->
    <section class="px-6 md:px-16 py-16 bg-purple-50">
        <div class="bg-white rounded-3xl shadow-lg p-10 flex flex-col md:flex-row items-center justify-between gap-8">
            
            <div>
                <h2 class="text-3xl font-extrabold">
                    Come experience the Braids by Olu vibe.
                </h2>
                <p class="text-gray-600 mt-4 max-w-md">
                    Your hair deserves care, style and confidence. Book your appointment today.
                </p>
            </div>

            <div class="text-center">
                <a href="booking.php"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-2xl font-bold shadow-md transition inline-block">
                    Book Appointment
                </a>
                <p class="text-sm text-gray-500 mt-3">
                    Your crown is waiting 👑
                </p>
            </div>

        </div>
    </section>


    <!-- FOOTER -->
    <footer class="px-6 md:px-16 py-8 bg-white border-t border-gray-200">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-purple-600 flex items-center justify-center text-white font-bold">
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
