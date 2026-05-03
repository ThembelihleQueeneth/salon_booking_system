<?php
$stylists = [
    [
        "name" => "Olu Nkosi",
        "role" => "Senior Braider",
        "bio"  => "Specialist in Knotless Braids, Box Braids and protective styles.",
        "rating" => "4.9",
        "clients" => "300+ Clients",
        "img" => "https://via.placeholder.com/400x400"
    ],
    [
        "name" => "Lerato Mokoena",
        "role" => "Cornrow Specialist",
        "bio"  => "Expert in Feed-In Braids, Stitch Braids and clean straight parts.",
        "rating" => "4.8",
        "clients" => "250+ Clients",
        "img" => "https://via.placeholder.com/400x400"
    ],
    [
        "name" => "Thando Khumalo",
        "role" => "Boho & Goddess Braids",
        "bio"  => "Known for creative Boho Braids, Goddess styles and soft finishes.",
        "rating" => "5.0",
        "clients" => "200+ Clients",
        "img" => "https://via.placeholder.com/400x400"
    ],
    [
        "name" => "Zanele Dlamini",
        "role" => "Faux Locs Specialist",
        "bio"  => "Passionate about Faux Locs, soft locs, and long-lasting installs.",
        "rating" => "4.7",
        "clients" => "180+ Clients",
        "img" => "https://via.placeholder.com/400x400"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylists | Braids by Olu</title>
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
            <li><a href="stylists.php" class="text-purple-600 font-semibold">Stylists</a></li>
            <li><a href="gallery.php" class="hover:text-purple-600">Gallery</a></li>
            <li><a href="about.php" class="hover:text-purple-600">About Us</a></li>
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
                Meet the Team
            </p>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mt-4">
                Our Professional <span class="text-purple-600">Stylists.</span>
            </h1>

            <p class="text-gray-600 mt-6 text-lg">
                Our stylists are trained to work with Black hair and protective styles.
                Choose your favourite stylist and book your appointment instantly.
            </p>
        </div>
    </section>


    <!-- STYLISTS -->
    <section class="px-6 md:px-16 py-16">

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-10">
            <h2 class="text-3xl font-bold">Available Stylists</h2>

            <input type="text" placeholder="Search stylist..."
                class="w-full md:w-72 px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <?php foreach ($stylists as $stylist): ?>
                <div class="bg-white rounded-3xl shadow-md hover:shadow-xl transition border border-gray-100 overflow-hidden">

                    <img src="<?= $stylist['img']; ?>" alt="<?= $stylist['name']; ?>"
                        class="w-full h-64 object-cover">

                    <div class="p-6">
                        <h3 class="text-xl font-bold"><?= $stylist['name']; ?></h3>

                        <p class="text-purple-600 font-semibold text-sm mt-1">
                            <?= $stylist['role']; ?>
                        </p>

                        <p class="text-gray-600 mt-3 text-sm">
                            <?= $stylist['bio']; ?>
                        </p>

                        <div class="flex items-center justify-between mt-5 text-sm">
                            <p class="text-gray-700 font-semibold">⭐ <?= $stylist['rating']; ?></p>
                            <p class="text-gray-500"><?= $stylist['clients']; ?></p>
                        </div>

                        <a href="booking.php"
                            class="mt-6 block text-center bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 rounded-2xl shadow-md transition">
                            Book With <?= explode(" ", $stylist['name'])[0]; ?>
                        </a>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </section>


    <!-- CTA SECTION -->
    <section class="px-6 md:px-16 py-16 bg-purple-50">
        <div class="bg-white rounded-3xl shadow-lg p-10 flex flex-col md:flex-row items-center justify-between gap-8">
            
            <div>
                <h2 class="text-3xl font-extrabold">
                    Want a specific stylist?
                </h2>
                <p class="text-gray-600 mt-4 max-w-md">
                    When booking, you can choose your preferred stylist and service.
                    We’ll take care of the rest.
                </p>
            </div>

            <div class="text-center">
                <a href="booking.php"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-2xl font-bold shadow-md transition inline-block">
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