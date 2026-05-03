<?php
$gallery = [
    "https://via.placeholder.com/800x900",
    "https://via.placeholder.com/900x800",
    "https://via.placeholder.com/850x950",
    "https://via.placeholder.com/900x900",
    "https://via.placeholder.com/950x850",
    "https://via.placeholder.com/800x800",
    "https://via.placeholder.com/880x920",
    "https://via.placeholder.com/900x950",
    "https://via.placeholder.com/950x900",
    "https://via.placeholder.com/820x880",
    "https://via.placeholder.com/860x860",
    "https://via.placeholder.com/920x840"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Braids by Olu</title>
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
            <li><a href="gallery.php" class="text-purple-600 font-semibold">Gallery</a></li>
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
                Our Work
            </p>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mt-4">
                Braids Gallery ✨
            </h1>

            <p class="text-gray-600 mt-6 text-lg">
                Explore our latest braids, styles and transformations. Click any image to view it bigger.
            </p>
        </div>
    </section>


    <!-- GALLERY GRID -->
    <section class="px-6 md:px-16 py-16">

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-10">
            <h2 class="text-3xl font-bold">Gallery</h2>

            <p class="text-gray-500 text-sm">
                Tap an image to view full size
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
            <?php foreach ($gallery as $img): ?>
                <div class="group overflow-hidden rounded-3xl shadow-md hover:shadow-xl transition cursor-pointer">
                    <img 
                        src="<?= $img; ?>" 
                        alt="Braids Style"
                        class="w-full h-56 md:h-72 object-cover group-hover:scale-110 transition duration-300"
                        onclick="openLightbox('<?= $img; ?>')"
                    >
                </div>
            <?php endforeach; ?>
        </div>

    </section>


    <!-- LIGHTBOX -->
    <div id="lightbox"
        class="hidden fixed inset-0 bg-black/70 flex items-center justify-center z-[999] px-6">

        <div class="relative max-w-4xl w-full">
            
            <!-- Close Button -->
            <button onclick="closeLightbox()"
                class="absolute -top-12 right-0 bg-white text-gray-900 px-4 py-2 rounded-xl shadow-md hover:bg-gray-100 transition font-semibold">
                ✕ Close
            </button>

            <!-- Image -->
            <img id="lightboxImage"
                src=""
                class="w-full max-h-[80vh] object-contain rounded-2xl shadow-2xl bg-white"
                alt="Gallery Image">

        </div>
    </div>


    <!-- CTA SECTION -->
    <section class="px-6 md:px-16 py-16 bg-purple-50">
        <div class="bg-white rounded-3xl shadow-lg p-10 flex flex-col md:flex-row items-center justify-between gap-8">
            
            <div>
                <h2 class="text-3xl font-extrabold">
                    Like what you see?
                </h2>
                <p class="text-gray-600 mt-4 max-w-md">
                    Book your appointment today and let us create your next look.
                </p>
            </div>

            <div class="text-center">
                <a href="booking.php"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-2xl font-bold shadow-md transition inline-block">
                    Book Appointment
                </a>
                <p class="text-sm text-gray-500 mt-3">
                    Slots fill up fast!
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


    <!-- LIGHTBOX SCRIPT -->
    <script>
        function openLightbox(imageSrc) {
            document.getElementById("lightbox").classList.remove("hidden");
            document.getElementById("lightboxImage").src = imageSrc;
        }

        function closeLightbox() {
            document.getElementById("lightbox").classList.add("hidden");
            document.getElementById("lightboxImage").src = "";
        }

        // close when clicking outside the image
        document.getElementById("lightbox").addEventListener("click", function(e) {
            if (e.target.id === "lightbox") {
                closeLightbox();
            }
        });

        // close when pressing ESC
        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape") {
                closeLightbox();
            }
        });
    </script>

</body>
</html>