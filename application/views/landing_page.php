<?php
$swiperImages = HOHE_SWIPER_IAMGE;
$service_images = SERVICE_IMAGE;
$doctorInfo = DOCTOR_INFO;

?>
<section id="home" class="mt-24">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper ">
            <?php if (!empty($swiperImages)) {
                foreach ($swiperImages as $image) {
            ?>
                    <div class="swiper-slide ">
                        <img src="<?php echo base_url("$image"); ?>"
                            class="w-full h-[250px]  sm:h-[320px] md:h-[420px] lg:h-[520px] xl:h-[585px] object-fill">
                    </div>
            <?php }
            } ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- APPOINTMENT section -->
<section id="appointment-section" class="w-full px-4 py-8 bg-white">
    <div class="max-w-7xl mx-auto flex flex-wrap justify-center gap-6">
        <a href="<?= base_url('book-appointment'); ?>"
            class="flex flex-col items-center text-center bg-pink-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
            <img src="<?= base_url('assets/images/appointment/appointment.png') ?>" alt="appointment logo"
                class="w-16 h-16 mb-3 object-contain">
            <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK AN APPOINTMENT</h3>
        </a>
        <a href="<?= base_url('book-video-consultation'); ?>"
            class="flex flex-col items-center text-center bg-blue-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">

            <img src="<?= base_url('assets/images/appointment/medical-app.png') ?>" alt="video consultation logo"
                class="w-16 h-16 mb-3 object-contain">
            <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK A VIDEO
                CONSULTATION
            </h3>
        </a>
        <a href="<?= base_url('book-scan'); ?>"
            class="flex flex-col items-center text-center bg-green-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
            <img src="<?= base_url('assets/images/appointment/scan-1.png') ?>" alt="scan logo"
                class="w-16 h-16 mb-3 object-contain">
            <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK A SCAN</h3>
        </a>
        <a href="<?= base_url('book-vaccination'); ?>"
            class="flex flex-col items-center text-center bg-purple-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
            <img src="<?= base_url('assets/images/appointment/injection.png') ?>" alt="vaccination logo"
                class="w-16 h-16 mb-3 object-contain">
            <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK VACCINATION</h3>
        </a>
        <a href="<?= base_url('query'); ?>"
            class="flex flex-col items-center text-center bg-yellow-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
            <img src="<?= base_url('assets/images/appointment/ask.png') ?>" alt="query logo"
                class="w-16 h-16 mb-3 object-contain">
            <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">SUBMIT YOUR QUERY
            </h3>
        </a>
    </div>
</section>
<!-- Services Section -->
<section id="services" class="w-full mx-auto px-2 py-2 ">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">SPECIALITIES</h2>
    <div class="max-w-7xl mx-auto flex flex-wrap justify-center ">
        <div class="flex flex-wrap  justify-center md:justify-start lg:justify-start md:ml-10 lg:ml-0 gap-x-12 sm:gap-x-8 gap-y-4">
            <?php if (!empty($service_images)) {
                foreach ($service_images as $image) {
            ?>

                    <div
                        class="flex flex-col items-center text-center w-[70px] sm:w-[100px] md:w-[120px] lg:w-[80px] xl:w-[110px] p-2 bg-inherit transition-transform duration-300 hover:scale-105">
                        <a href="#">
                            <img src="<?= base_url($image['image']) ?>" alt="Service Icon"
                                class="w-full h-auto object-cover rounded-lg">
                        </a>
                        <h3 class="mt-4 text-lg font-semibold text-gray-800"><?= $image['name'] ?></h3>
                    </div>


            <?php }
            } ?>

        </div>
    </div>
</section>

<!-- Our Team Section -->
<section id="our-team" class="w-full px-4 py-4 bg-white">
    <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-500 mb-2">Our Doctors</h2>
    <div class="swiper ourTeamSwiper">
        <div class="swiper-wrapper">
            <?php foreach ($doctorInfo as $val) { ?>
                <div class="swiper-slide flex flex-col md:flex-row items-center gap-4 px-2 md:px-2 py-2">
                    <div class="w-full md:w-1/2 flex justify-center group">
                        <img src="<?= base_url($val['image']); ?>"
                            alt="Dr. Supriya Narayan"
                            class="rounded-tl-3xl rounded-br-3xl h-[250px] sm:h-[300px] md:h-[380px] lg:h-[480px] xl:h-[520px] w-auto object-cover transform group-hover:scale-105 transition duration-500" />
                    </div>
                    <div class="w-full md:w-1/2 space-y-4 text-center md:text-left md:pr-15 lg:pr-18 xl:pr-20">
                        <div class="space-y-2">
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-800"><?= $val['name']; ?></h3>
                            <h5 class="text-base md:text-lg font-medium text-gray-700">
                                <?= $val['title']; ?>
                            </h5>
                            <h5 class="text-base md:text-lg font-medium text-gray-700">
                                <?= $val['subtitle']; ?>
                            </h5>
                        </div>

                        <p class="text-sm sm:text-base leading-relaxed text-gray-700 text-justify">
                            <?= $val['description']; ?>
                        </p>

                        <div class="pt-4 flex justify-center">
                            <button class="px-6 py-2 bg-gradient-to-r from-emerald-950 to-emerald-900 text-white rounded-full 
                   hover:from-emerald-900 hover:to-emerald-950 transition duration-300">
                                MORE
                            </button>
                        </div>

                    </div>
                </div>

            <?php } ?>
        </div>

        <div class="swiper-pagination mt-6"></div>
        <div class="swiper-button-next custom-swiper-button text-gray-700 hover:text-blue-600"></div>
        <div class="swiper-button-prev custom-swiper-button text-gray-700 hover:text-blue-600"></div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="w-full px-4 py-8">


    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 mt-6">

        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Contact Us</h2>
            <form action="#" method="POST" class="space-y-4">
                <input type="text" name="name" placeholder="Your Name"
                    class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-emerald-600" required>
                <input type="tel" name="mobile" placeholder="Your Mobile Number"
                    class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-emerald-600" required>
                <input type="email" name="email" placeholder="Your Email"
                    class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-emerald-600" required>
                <textarea name="message" rows="4" placeholder="Your Message"
                    class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-emerald-600" required></textarea>
                <div class="flex justify-center">
                    <button type="submit"
                        class="px-6 py-2  text-white font-semibold rounded-full  bg-gradient-to-r from-emerald-950 to-emerald-800 
                                hover:from-emerald-800 hover:to-emerald-950  transition duration-300 w-fit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <div class="space-y-6">
            <div>
                <h1 class="text-xl font-bold text-gray-800 mb-2">Location</h1>
                <div class="flex items-start gap-3 text-gray-700">
                    <i class="fas fa-map-marker-alt text-emerald-600 mt-1"></i>
                    <p>Mohalla Bhagwan Das Rd, Mirzapur, Darbhanga, Bihar 846004</p>
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold text-gray-800 mb-2">Connect</h1>
                <div class="flex items-start gap-3 text-gray-700 mb-3">
                    <i class="fas fa-phone-alt text-emerald-600 mt-1"></i>
                    <p>+91-76330 30222</p>
                </div>
                <div class="flex items-start gap-3 text-gray-700">
                    <i class="fas fa-envelope text-emerald-600 mt-1"></i>
                    <p>panaciamedicae@gmail.com</p>
                </div>
            </div>

            <!-- Map -->
            <div>
                <h1 class="text-xl font-bold text-gray-800 mb-2">Map</h1>
                <div class="w-full h-64 rounded-lg overflow-hidden shadow">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d457540.1294176385!2d85.8145935!3d26.148232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x0:0x0!2zMjbCsDA4JzUzLjciTiA4NcKwNTMnNDguNSJF!3m2!1d26.1482554!2d85.896995!4m5!1s0x39edb900064bb943:0x8f4eae6002c44a44!2sMohalla%20Bhagwan%20Das%20Rd%2C%20Mirzapur%2C%20Darbhanga%2C%20Bihar%20846004!3m2!1d26.1482554!2d85.896995!5e0!3m2!1sen!2sin!4v1714434525679!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>



<?php start_push('scripts'); ?>
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
</script>
<?php end_push(); ?>