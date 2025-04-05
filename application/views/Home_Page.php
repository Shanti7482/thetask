<?php
$swiperImages=HOHE_SWIPER_IAMGE;
$service_images=SERVICE_IMAGE;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/lateat-favicon-32x32.png') ?>"> -->
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://panaceamedicare-re.onrender.com/assets/images/lateat-favicon-32x32.png">
    <title>Panaceamedicare | Home </title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

    <style>
    .menu-hidden {
        display: none;
    }


    #top-button {
        display: none;
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        background-color: rgb(123, 5, 106);
        border-radius: 60%;
        padding: 0.1rem 0.5rem;
        font-size: 1.5rem;
        color: white;
        cursor: pointer;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        z-index: 999;
    }

    #whatsapp-button {
        position: fixed;
        bottom: 20px;
        left: 20px;
        background-color: #25D366;
        color: white;
        padding: 12px 15px;
        border-radius: 50%;
        font-size: 22px;
        cursor: pointer;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    }

    .custom-swiper-button {
        @apply absolute top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 p-4 rounded-full;
        @apply text-white text-lg flex items-center justify-center cursor-pointer;
        @apply transition duration-300 ease-in-out hover: bg-gray-900;
        width: 45px;
        height: 45px;
        z-index: 10;
    }

    .swiper-button-prev {
        @apply left-4;
    }

    .swiper-button-next {
        @apply right-4;
    }

    .swiper-button-prev::after,
    .swiper-button-next::after {
        font-size: 20px;
        font-weight: bold;
        color: rgba(72, 69, 69, 0.2);
    }

    @media screen {}
    </style>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50 ">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600 ">
                <img src="<?php echo base_url('assets/images/latest_logo.png') ?>" alt="logo"
                    class="bg-inherit w-[120px] h-[40px] sm:w-[150px] sm:h-[50px] md:w-[180px] md:h-[60px] lg:w-[200px] lg:h-[70px] object-contain">
            </a>
            <button class="md:hidden text-gray-600 focus:outline-none" id="menu-toggle">☰</button>
            <ul class="hidden md:flex space-x-6" id="menu">
                <li><a href="#home" class="text-gray-600 font-medium hover:text-blue-600 ">Home</a></li>
                <li><a href="#about" class="text-gray-600 font-medium hover:text-blue-600">About Us</a></li>

                <!-- Specialties Dropdown -->
                <li class="relative group">
                    <button class="text-gray-600 font-medium hover:text-blue-600 focus:outline-none">Specialties <i
                            class="fa-solid fa-angle-down"></i></button>
                    <ul class="absolute hidden group-hover:block bg-white shadow-md  rounded-md w-48">
                        <li><a href="#cardiology" class="block px-4 py-2 hover:bg-blue-100">Cardiology</a></li>
                        <li><a href="#neurology" class="block px-4 py-2 hover:bg-blue-100">Neurology</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Orthopedics</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Neurology</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Gynecological &amp;
                                Laproscopic Surgery</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Fetal Medicine and
                                Radiology</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Fertility</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Paediatrics</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Neonatology</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">General Surgery</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Internal Medicine</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Cosmetology</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Nutrition</a></li>
                        <li><a href="#orthopedics" class="block px-4 py-2 hover:bg-blue-100">Physiotherapy</a></li>
                    </ul>
                </li>
                <li class="relative group">
                    <button class="text-gray-600 font-medium hover:text-blue-600 focus:outline-none">Gallery <i
                            class="fa-solid fa-angle-down"></i></button>
                    <ul class="absolute hidden group-hover:block bg-white shadow-md rounded-md w-auto">
                        <li><a href="#photos" class="block px-4 py-2 hover:bg-blue-100">Photos</a></li>
                        <li><a href="#videos" class="block px-4 py-2 hover:bg-blue-100">Videos</a></li>
                    </ul>
                </li>
                <li><a href="#contact" class="text-gray-600  font-medium hover:text-blue-600">Contact</a></li>
                <li><a href="#contact" class="text-gray-600  font-medium hover:text-blue-600">SignIn/SignUp</a></li>
            </ul>
        </div>


        <div class="md:hidden bg-white p-4 menu-hidden" id="mobile-menu">
            <a href="#home" class="block py-2 text-gray-600 hover:text-blue-600">Home</a>
            <a href="#about" class="block py-2 text-gray-600 hover:text-blue-600">About Us</a>
            <!-- Mobile Specialties Dropdown -->

            <div>
                <button class="w-full text-left py-2 text-gray-600 hover:text-blue-600"
                    onclick="toggleSubMenu('specialties-menu','togleIcon')">Specialties <i
                        class="fa-solid fa-angle-down" id="togleIcon"></i></button>
                <div id="specialties-menu" class="hidden pl-4">
                    <a href="#cardiology" class="block py-1 text-gray-500 hover:text-blue-500">Cardiology</a>
                    <a href="#neurology" class="block py-1 text-gray-500 hover:text-blue-500">Neurology</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Orthopedics</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Gynecological &amp;
                        Laproscopic Surgery</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Fetal Medicine and
                        Radiology</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Fertility</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Paediatrics</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Neonatology</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">General Surgery</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Internal Medicine</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Cosmetology</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Nutrition</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Physiotherapy</a>
                </div>
            </div>

            <!-- Mobile Gallery Dropdown -->
            <div>
                <button class="w-full text-left py-2 text-gray-600 hover:text-blue-600"
                    onclick="toggleSubMenu('gallery-menu','togleIcon')">Gallery <i class="fa-solid fa-angle-down"
                        id="togleIcon"></i></button>
                <div id="gallery-menu" class="hidden pl-4">
                    <a href="#photos" class="block py-1 text-gray-500 hover:text-blue-500">Photos</a>
                    <a href="#videos" class="block py-1 text-gray-500 hover:text-blue-500">Videos</a>
                </div>
            </div>
            <a href="#contact" class="block py-2 text-gray-600 hover:text-blue-600">Contact</a>
            <a href="#contact" class="block py-2 text-gray-600 hover:text-blue-600">SignIn/SignUp</a>

        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="mt-24">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper ">
                <?php if(!empty($swiperImages)){ 
                foreach($swiperImages as $image){
                ?>
                <div class="swiper-slide ">
                    <img src="<?php echo base_url("$image");?>"
                        class="w-full h-[250px] sm:h-[280px] md:h-[320px] lg:h-[380px] xl:h-[520px] object-fill">
                </div>
                <?php } }?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services" class="w-full mx-auto px-4 py-16 bg-gray-200">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Services</h2>
        <div class="container w-[80%] mx-auto">
            <div class="flex flex-wrap justify-center gap-6">
                <?php if(!empty($service_images) ) {
                foreach($service_images as $image){     
            ?>

                <div class="flex flex-col items-center text-center w-full max-w-xs p-4 bg-inherit">
                    <a href="#">
                        <img src="<?= base_url($image['image'])?>" alt="Service Icon"
                            class="w-full h-auto object-cover rounded-lg">
                    </a>
                    <h3 class="mt-4 text-lg font-semibold text-gray-800"><?=$image['name'] ?></h3>
                </div>


                <?php } } ?>

            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section id="our-team" class="w-full mx-auto px-4 py-16 bg-white">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Team</h2>
        <div class="swiper ourTeamSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex flex-col md:flex-row items-center gap-6 ">
                    <div class="left w-full md:w-1/2 flex justify-center">
                        <img src="<?=base_url("assets/images/doctor_image/doctor_image_1.jpg")?>" alt="Team Member"
                            class="w-full md:w-3/4 rounded-lg shadow-lg h-[250px] sm:h-[280px] md:h-[320px] lg:h-[380px] xl:h-[520px] object-fill">
                    </div>
                    <div class="right w-full md:w-1/2 flex flex-col items-start p-4 text-center md:text-left">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. In omnis aspernatur totam ipsum
                            ratione libero placeat tempore nihil, sed amet distinctio, deserunt itaque soluta voluptatem
                            repellat explicabo tenetur. Sapiente, ratione?
                            Culpa distinctio mollitia numquam est veniam ex et ea amet alias dolore unde eum placeat
                            molestias magni id, laborum vitae non recusandae, ut provident. Minima obcaecati assumenda
                            tenetur consequuntur odit?
                            Molestias voluptates ad maiores corporis error beatae, accusantium impedit maxime illum
                            cupiditate modi, repellendus eveniet officiis incidunt ullam ut. Rerum explicabo vero fugit
                            non dolores? Blanditiis repellat inventore exercitationem facilis?
                            Sed maiores aspernatur perferendis porro accusantium voluptatum id ipsum impedit odit nemo,

                        </p>
                    </div>

                </div>
                <div class="swiper-slide flex flex-col md:flex-row items-center gap-6 ">
                    <div class="left w-full md:w-1/2 flex justify-center">
                        <img src="<?=base_url("assets/images/doctor_image/doctor_image_3.jpg")?>" alt="Team Member"
                            class="w-full md:w-3/4 rounded-lg shadow-lg h-[250px] sm:h-[280px] md:h-[320px] lg:h-[380px] xl:h-[520px] object-fill ">
                    </div>
                    <div class="right w-full md:w-1/2 flex flex-col items-start p-4 text-center md:text-left">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>

                </div>
                <div class="swiper-slide flex flex-col md:flex-row items-center gap-6">
                    <div class="left w-full md:w-1/2 flex justify-center">
                        <img src="<?=base_url("assets/images/doctor_image/doctor_image_2.jpg")?>" alt="Team Member"
                            class="w-full md:w-3/4 rounded-lg shadow-lg h-[280px] sm:h-[350px] md:h-[350px] lg:h-[380px] xl:h-[520px] object-fill">
                    </div>
                    <div class="right w-full md:w-1/2 flex flex-col items-start p-4 text-center md:text-left">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.kkkkkkkkkkkkkkkkkkkk
                        </p>
                    </div>

                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next custom-swiper-button"></div>
            <div class="swiper-button-prev custom-swiper-button"></div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center text-gray-800">Contact Us</h2>
        <p class="text-center text-gray-600 mt-4">Get in touch for more details.</p>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        &copy; 2025 MyWebsite. All Rights Reserved.
    </footer>

    <!-- Go to Top Button -->
    <button id="top-button" class="animate-bounce" onclick="scrollToTop()"><i class="fa-solid fa-angle-up"></i>
        </i></button>

    <!-- WhatsApp Chat Button -->
    <!-- <a href="https://wa.me/1234567890" target="_blank" id="whatsapp-button">💬</a> -->

    <!-- Swiper.js Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
    var swiper1 = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });


    var swiper2 = new Swiper(".ourTeamSwiper", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


    document.querySelector('.mySwiper').addEventListener('mouseenter', function() {
        swiper1.autoplay.stop();
    });
    document.querySelector('.mySwiper').addEventListener('mouseleave', function() {
        swiper1.autoplay.start();
    });
    document.querySelector('.ourTeamSwiper').addEventListener('mouseenter', function() {
        swiper2.autoplay.stop();
    });
    document.querySelector('.ourTeamSwiper').addEventListener('mouseleave', function() {
        swiper2.autoplay.start();
    });



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