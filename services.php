<?php
$services = [
    [
        "name" => "Knotless Braids",
        "desc" => "Natural, lightweight and gentle on your scalp.",
        "price" => "From R500",
        "time" => "3 - 5 Hours",
        "img" => "https://via.placeholder.com/400x300"
    ],
    [
        "name" => "Box Braids",
        "desc" => "Classic protective style that lasts longer.",
        "price" => "From R450",
        "time" => "3 - 6 Hours",
        "img" => "https://via.placeholder.com/400x300"
    ],
    [
        "name" => "Feed In Braids",
        "desc" => "Clean cornrows with added length and neat finishing.",
        "price" => "From R400",
        "time" => "2 - 4 Hours",
        "img" => "https://via.placeholder.com/400x300"
    ],
    [
        "name" => "Goddess Braids",
        "desc" => "Bold braids with curly extensions for a soft look.",
        "price" => "From R550",
        "time" => "3 - 5 Hours",
        "img" => "https://via.placeholder.com/400x300"
    ],
    [
        "name" => "Boho Braids",
        "desc" => "Bohemian braids with curly ends for a trendy vibe.",
        "price" => "From R650",
        "time" => "4 - 6 Hours",
        "img" => "https://via.placeholder.com/400x300"
    ],
    [
        "name" => "Faux Locs",
        "desc" => "Locs style without committing to permanent dreadlocks.",
        "price" => "From R700",
        "time" => "4 - 7 Hours",
        "img" => "https://via.placeholder.com/400x300"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Braids by Olu</title>
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
            <li><a href="services.php" class="text-brand-600 font-semibold">Services</a></li>
            <li><a href="stylists.php" class="hover:text-brand-600">Stylists</a></li>
            <li><a href="gallery.php" class="hover:text-brand-600">Gallery</a></li>
            <li><a href="about.php" class="hover:text-brand-600">About Us</a></li>
            <li><a href="contact.php" class="hover:text-brand-600">Contact</a></li>
        </ul>

        <a href="booking.php" class="bg-brand-600 hover:bg-brand-700 text-white px-5 py-2 rounded-xl font-medium shadow-md transition">
            Book Appointment
        </a>
    </nav>


    <!-- HEADER -->
    <section class="px-6 md:px-16 py-16 bg-gradient-to-b from-brand-50 to-white">
        <div class="max-w-4xl">
            <p class="text-brand-600 font-semibold uppercase tracking-widest text-sm">
                Our Services
            </p>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mt-4">
                Braids made for <span class="text-brand-600">Queens.</span>
            </h1>

            <p class="text-gray-600 mt-6 text-lg">
                Explore our signature braiding styles. Choose your look, check pricing, and book your appointment instantly.
            </p>
        </div>
    </section>


    <!-- SERVICES GRID -->
    <section class="px-6 md:px-16 py-16">
        
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-10">
            <h2 class="text-3xl font-bold">Available Services</h2>

            <div class="flex gap-3">
                <input type="text" placeholder="Search service..."
                    class="w-full md:w-72 px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-500">
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php foreach ($services as $service): ?>
                <div class="bg-white rounded-3xl shadow-md hover:shadow-xl transition border border-gray-100 overflow-hidden">

                    <img src="<?= $service['img']; ?>" alt="<?= $service['name']; ?>"
                        class="w-full h-56 object-cover">

                    <div class="p-6">
                        <h3 class="text-xl font-bold"><?= $service['name']; ?></h3>

                        <p class="text-gray-600 mt-3 text-sm">
                            <?= $service['desc']; ?>
                        </p>

                        <div class="flex items-center justify-between mt-5">
                            <p class="text-brand-600 font-bold"><?= $service['price']; ?></p>
                            <p class="text-sm text-gray-500"><?= $service['time']; ?></p>
                        </div>

                        <a href="booking.php"
                            class="mt-6 block text-center bg-brand-600 hover:bg-brand-700 text-white font-semibold py-3 rounded-2xl shadow-md transition">
                            Book Now
                        </a>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </section>


    <!-- CTA SECTION -->
    <section class="px-6 md:px-16 py-16 bg-brand-50">
        <div class="bg-white rounded-3xl shadow-lg p-10 flex flex-col md:flex-row items-center justify-between gap-8">
            
            <div>
                <h2 class="text-3xl font-extrabold">
                    Ready for your next crown?
                </h2>
                <p class="text-gray-600 mt-4 max-w-md">
                    Spots fill up quickly. Book your appointment now and let’s get you looking flawless.
                </p>
            </div>

            <div class="text-center">
                <a href="booking.php"
                    class="bg-brand-600 hover:bg-brand-700 text-white px-8 py-4 rounded-2xl font-bold shadow-md transition inline-block">
                    Book Appointment
                </a>
                <p class="text-sm text-gray-500 mt-3">
                    Secure your slot today!
                </p>
            </div>

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
