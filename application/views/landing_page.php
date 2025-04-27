<?php
$swiperImages=HOHE_SWIPER_IAMGE;
$service_images=SERVICE_IMAGE;

?>
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
            <a href="<?= base_url('book-appointment'); ?>"
                class="flex flex-col items-center text-center bg-pink-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
                <img src="<?= base_url('assets/images/appointment/appointment.png') ?>" alt="appointment logo"
                    class="w-16 h-16 mb-3 object-contain">
                <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK AN APPOINTMENT</h3>
            </a>
            <a href="<?=base_url('book-video-consultation');?>"
                class="flex flex-col items-center text-center bg-blue-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">

                <img src="<?= base_url('assets/images/appointment/medical-app.png') ?>" alt="video consultation logo"
                    class="w-16 h-16 mb-3 object-contain">
                <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK A VIDEO
                    CONSULTATION
                </h3>
            </a>
            <a href="<?=base_url('book-scan');?>"
                class="flex flex-col items-center text-center bg-green-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
                <img src="<?= base_url('assets/images/appointment/scan-1.png') ?>" alt="scan logo"
                    class="w-16 h-16 mb-3 object-contain">
                <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK A SCAN</h3>
            </a>
            <a href="<?=base_url('book-vaccination');?>"
                class="flex flex-col items-center text-center bg-purple-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
                <img src="<?= base_url('assets/images/appointment/injection.png') ?>" alt="vaccination logo"
                    class="w-16 h-16 mb-3 object-contain">
                <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">BOOK VACCINATION</h3>
            </a>
            <a href="<?=base_url('query');?>"
                class="flex flex-col items-center text-center bg-yellow-300 p-2 rounded-2xl shadow-lg flex-[1_1_220px] max-w-[250px] w-full transition-transform duration-300 hover:scale-105 cursor-pointer">
                <img src="<?= base_url('assets/images/appointment/ask.png') ?>" alt="query logo"
                    class="w-16 h-16 mb-3 object-contain">
                <h3 class="text-gray-600 font-semibold text-sm md:text-base whitespace-nowrap">SUBMIT YOUR QUERY
                </h3>
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
<?php end_push();?>