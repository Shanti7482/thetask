


<!DOCTYPE html>
<html lang="en">


<body class="bg-gray-100">

    <!-- Navbar -->
   

    <!-- Hero Section -->
   

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        &copy; <?= date('Y');?> PANACEAMADICARE RESEARCH CENTER. All Rights Reserved.
    </footer>
    <button id="top-button" onclick="scrollToTop()"
        class="hidden fixed bottom-8 right-8 bg-purple-900 text-white text-2xl px-2 py-1 rounded-xl shadow-md z-[999] hover:bg-fuchsia-700 hover:text-gray-800 font-bold transition-all duration-300 animate-bounce">
        <i class="fa-solid fa-angle-up"></i>
    </button>


    <!-- WhatsApp Chat Button -->
    <!-- <a href="https://wa.me/1234567890" target="_blank" id="whatsapp-button">💬</a> -->

    <script src="<?= base_url('assets.js/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/js/swiper-bundle.min.js');?>"></script>
    <script>
   


    document.getElementById("menu-toggle").addEventListener("click", function() {
        document.getElementById("mobile-menu").classList.toggle("menu-hidden");
        var toggleButton = document.getElementById("menu-toggle");
        toggleButton.textContent = toggleButton.textContent === "☰" ? "X" : "☰";

    });

    function toggleSubMenu(id, toggleIconId) {
        const menu = document.getElementById(id);
        const iconId = document.getElementById(toggleIconId)
        menu.classList.toggle('hidden');

        if (iconId.classList.contains('fa-angle-down')) {
            iconId.classList.remove('fa-angle-down');
            iconId.classList.add('fa-angle-up');
        } else {
            iconId.classList.remove('fa-angle-up');
            iconId.classList.add('fa-angle-down');
        }

    }



    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        var topButton = document.getElementById("top-button");
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            topButton.style.display = "block";
        } else {
            topButton.style.display = "none";
        }
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    </script>

</body>

</html>