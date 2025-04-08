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

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="<?=base_url('assets/css/swiper-bundle.min.css'); ?>">


    <style>
    .menu-hidden {
        display: none;
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
        color: rgba(68, 62, 62, 0.2);
    }

    @media screen {}
    </style>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50 ">
        <div class="container mx-auto px-2 py-2 flex justify-between items-center">
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
                        <li><a href="#cardiology"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Pregnancy Care</a>
                        </li>
                        <li><a href="#neurology"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">General
                                Gynecology</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Gynecological &amp;
                                Laproscopic Surgery</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Fetal Medicine and
                                Radiology</a>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Fertility</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Paediatrics</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Neonatology</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">General Surgery</a>
                        </li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Internal
                                Medicine</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Cosmetology</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Nutrition</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Physiotherapy</a>
                        </li>
                    </ul>
                </li>
                <li class="relative group">
                    <button class="text-gray-600 font-medium hover:text-blue-600 focus:outline-none">Gallery <i
                            class="fa-solid fa-angle-down"></i></button>
                    <ul class="absolute hidden group-hover:block bg-white shadow-md rounded-md w-auto">
                        <li><a href="#photos"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Photos</a></li>
                        <li><a href="#videos"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Videos</a></li>
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
                    <a href="#cardiology" class="block py-1 text-gray-500 hover:text-blue-500">Pregnancy Care</a>
                    <a href="#neurology" class="block py-1 text-gray-500 hover:text-blue-500">General Gynecology</a>
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
    <!-- APPOINTMENT section -->
    <section id="appointment-section" class="w-full px-4 py-8 bg-white">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-center gap-6">
            <a href=""
                class="flex flex-col items-center text-center bg-pink-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
                <img src="<?= base_url('assets/images/appointment/appointment.png') ?>" alt="appointment logo"
                    class="w-16 h-16 mb-3 object-contain">
                <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK AN APPOINTMENT</h3>
            </a>
            <a href=""
                class="flex flex-col items-center text-center bg-blue-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">

                <img src="<?= base_url('assets/images/appointment/medical-app.png') ?>" alt="video consultation logo"
                    class="w-16 h-16 mb-3 object-contain">
                <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK A VIDEO
                    CONSULTATION
                </h3>
            </a>
            <a href=""
                class="flex flex-col items-center text-center bg-green-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
                <img src="<?= base_url('assets/images/appointment/scan-1.png') ?>" alt="scan logo"
                    class="w-16 h-16 mb-3 object-contain">
                <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK A SCAN</h3>
            </a>
            <a href=""
                class="flex flex-col items-center text-center bg-yellow-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
                <img src="<?= base_url('assets/images/appointment/ask.png') ?>" alt="query logo"
                    class="w-16 h-16 mb-3 object-contain">
                <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">SUBMIT YOUR QUERY
                </h3>
            </a>
            <a href=""
                class="flex flex-col items-center text-center bg-purple-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
                <img src="<?= base_url('assets/images/appointment/injection.png') ?>" alt="vaccination logo"
                    class="w-16 h-16 mb-3 object-contain">
                <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK VACCINATION</h3>
            </a>
        </div>
    </section>



    <!-- Services Section -->
    <section id="services" class="w-full mx-auto px-4 py-6 ">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">SPECIALITIES</h2>
        <div class="max-w-7xl mx-auto flex flex-wrap justify-center gap-6">
            <div class="flex flex-wrap justify-center gap-6">
                <?php if(!empty($service_images) ) {
                foreach($service_images as $image){     
            ?>

                <div
                    class="flex flex-col items-center text-center w-[150px] sm:w-[170px] md:w-[200px] p-2 bg-inherit transition-transform duration-300 hover:scale-105">
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
    <section id="our-team" class="w-full px-4 py-4 bg-white">
        <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-500 mb-2">Our Team</h2>
        <div class="swiper ourTeamSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex flex-col md:flex-row items-center gap-4 px-2 md:px-2 py-2">
                    <div class="w-full md:w-1/2 flex justify-center group">
                        <img src="<?=base_url("assets/images/doctor_image/doctor_image_1.png")?>"
                            alt="Dr. Supriya Narayan"
                            class="rounded-tl-3xl rounded-br-3xl h-[250px] sm:h-[300px] md:h-[380px] lg:h-[480px] xl:h-[520px] w-auto object-cover transform group-hover:scale-105 transition duration-500" />
                    </div>
                    <div class="w-full md:w-1/2 space-y-4 text-center md:text-left md:pr-15 lg:pr-18 xl:pr-20">
                        <h3 class="text-2xl md:text-3xl font-semibold text-gray-600">Dr. Supriya Narayan</h3>
                        <p class="text-base sm:text-lg leading-relaxed text-gray-600 text-justify">
                            Dr. Supriya Narayan is a renowned Obstetrician & Gynaecologist associated with Paras Global
                            Hospital, Laheriasarai. With over 11 years of clinical experience, she has worked across
                            multiple esteemed hospitals across India.

                            She is widely respected for her accurate diagnosis and empathetic approach to patient care.
                            Her core expertise lies in Obstetrics, Prenatal Care, Childbirth, and managing various
                            Gynecological conditions.

                            Dr. Narayan completed her MBBS from the University of Patna in 2008 and earned her MS in
                            Obstetrics & Gynaecology from PMCH, Patna. She has actively contributed to research,
                            authored academic papers, and participated in several national workshops. She has also
                            received awards in surgical excellence within her field.
                        </p>
                    </div>

                </div>
            </div>
            <div class="swiper-pagination mt-6"></div>
            <div class="swiper-button-next custom-swiper-button text-gray-700 hover:text-blue-600"></div>
            <div class="swiper-button-prev custom-swiper-button text-gray-700 hover:text-blue-600"></div>
        </div>
    </section>








    <!-- Contact Section -->
    <section id="contact" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center text-gray-800">Contact Us</h2>
        <p class="text-center text-gray-600 mt-4">Get in touch for more details.</p>
    </section>

    <section id="services" class="w-full px-4 py-10 bg-gray-200">
        <div class="flex flex-wrap justify-center gap-8  mx-auto">
            <div class="w-full  lg:w-[25%] p-4">
                <a href="#">
                    <img src="<?php echo base_url('assets/images/latest_logo.png') ?>" alt="logo"
                        class="w-[120px] h-[40px] sm:w-[150px] sm:h-[50px] md:w-[180px] md:h-[60px] lg:w-[200px] lg:h-[70px] object-contain" />
                </a>
                <p class="text-gray-700 text-sm mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil et harum, quae doloribus saepe
                    asperiores...
                </p>
                <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    Read more
                </button>
            </div>
            <div class="w-full  md:w-[70%] lg:w-[32%] flex flex-row sm:flex-col md:flex-row gap-6 p-4">

                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Our Services</h3>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="group relative overflow-hidden w-max cursor-pointer">
                            <span class="group-hover:text-blue-700 transition">abhishek</span>
                            <span
                                class="absolute left-0 bottom-0 h-[2px] w-0 bg-blue-700 transition-all duration-300 group-hover:w-full"></span>
                        </li>
                        <li class="group relative overflow-hidden w-max cursor-pointer">
                            <span class="group-hover:text-blue-700 transition">vivek</span>
                            <span
                                class="absolute left-0 bottom-0 h-[2px] w-0 bg-blue-700 transition-all duration-300 group-hover:w-full"></span>
                        </li>
                        <li class="group relative overflow-hidden w-max cursor-pointer">
                            <span class="group-hover:text-blue-700 transition">pravin</span>
                            <span
                                class="absolute left-0 bottom-0 h-[2px] w-0 bg-blue-700 transition-all duration-300 group-hover:w-full"></span>
                        </li>
                        <li class="group relative overflow-hidden w-max cursor-pointer">
                            <span class="group-hover:text-blue-700 transition">Supriya</span>
                            <span
                                class="absolute left-0 bottom-0 h-[2px] w-0 bg-blue-700 transition-all duration-300 group-hover:w-full"></span>
                        </li>
                        <li class="group relative overflow-hidden w-max cursor-pointer">
                            <span class="group-hover:text-blue-700 transition">Unknown</span>
                            <span
                                class="absolute left-0 bottom-0 h-[2px] w-0 bg-blue-700 transition-all duration-300 group-hover:w-full"></span>
                        </li>
                        <li class="group relative overflow-hidden w-max cursor-pointer">
                            <span class="group-hover:text-blue-700 transition">panaceamadicare</span>
                            <span
                                class="absolute left-0 bottom-0 h-[2px] w-0 bg-blue-700 transition-all duration-300 group-hover:w-full"></span>
                        </li>
                    </ul>
                </div>

                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li>Home</li>
                        <li>About</li>
                        <li>Services</li>
                        <li>Appointment</li>
                        <li>Check Status</li>
                        <li>Seat Availability</li>
                    </ul>
                </div>
            </div>
            <div class="w-full md:w-[25%] lg:w-[25%] p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Get in Touch</h3>
                <ul class="space-y-3 text-gray-700 text-sm">
                    <li><i class="fas fa-phone-alt mr-2 text-blue-600"></i>+91-76330 30222</li>
                    <li><i class="fas fa-envelope mr-2 text-blue-600"></i>panaciamedicae@gmail.com</li>
                    <li><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Mohalla Bhagwan Das Rd, Mirzapur,
                        Darbhanga, Bihar 846004</li>
                </ul>
                <div class="flex items-center gap-4 mt-4 text-xl">
                    <a href="#" class="transition transform hover:scale-110 hover:-translate-y-1 duration-200">
                        <i class="fab fa-facebook-f text-blue-800 hover:text-blue-900"></i>
                    </a>
                    <a href="#" class="transition transform hover:scale-110 hover:-translate-y-1 duration-200">
                        <i class="fab fa-instagram text-pink-400 hover:text-pink-500"></i>
                    </a>
                    <a href="#" class="transition transform hover:scale-110 hover:-translate-y-1 duration-200">
                        <i class="fab fa-youtube text-red-500 hover:text-red-600"></i>
                    </a>
                    <a href="#" class="transition transform hover:scale-110 hover:-translate-y-1 duration-200">
                        <i class="fab fa-x-twitter text-gray-600 hover:text-gray-700"></i>
                    </a>
                    <a href="#" class="transition transform hover:scale-110 hover:-translate-y-1 duration-200">
                        <i class="fas fa-at hover:text-indigo-600"></i>
                    </a>
                </div>

            </div>

        </div>
    </section>

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