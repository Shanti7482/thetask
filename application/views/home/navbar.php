<nav class="bg-white shadow-md fixed w-full top-0 z-50  ">
        <div class=" mx-auto px-2 py-2 flex justify-between items-center sm:mr-2 lg:ml-8 lg:mr-8 ">
            <a href="<?=base_url();?>" class="text-2xl font-bold text-blue-600 ">
                <img src="<?php echo base_url('assets/images/latest_logo.png') ?>" alt="logo"
                    class="bg-inherit w-[120px] h-[40px] sm:w-[150px] sm:h-[50px] md:w-[180px] md:h-[60px] lg:w-[200px] lg:h-[70px] object-contain">
            </a>
            <button class="md:hidden text-gray-600 focus:outline-none" id="menu-toggle">☰</button>
            <ul class="hidden md:flex space-x-6" id="menu">
                <li><a href="<?=base_url();?>" class="text-gray-600 font-medium hover:text-blue-600 ">Home</a></li>
                <li><a href="#about" class="text-gray-600 font-medium hover:text-blue-600">About Us</a></li>

                <!-- Specialties Dropdown -->

                <li class="relative group">
                    <button class="text-gray-600 font-medium hover:text-blue-600 focus:outline-none">Specialties <i
                            class="fa-solid fa-angle-down " ></i></button>
                    <ul class="absolute hidden group-hover:block bg-white shadow-md  rounded-md w-64">
                        <li><a href="#cardiology"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Gynaecology</a>
                        </li>
                        <li><a href="#neurology"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Urology</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Male Infertility </a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">IVF Fertilization</a>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Adult Vaccination</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Obstetrics, Gynecology & infertility (I.V.F)</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Neonatology (NICU)</a></li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Immunisation</a>
                        </li>
                        <li><a href="#orthopedics"
                                class="text-gray-600 font-medium block px-4 py-2 hover:bg-blue-100">Yoga & Physiotherapy</a></li>
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
                <li><a href="<?=base_url('contact-us');?>" class="text-gray-600  font-medium hover:text-blue-600">Contact</a></li>
                <li><a href="<?= base_url('signup');?>" class="text-gray-600  font-medium hover:text-blue-600">SignUp</a></li>
            </ul>
        </div>


        <div class="md:hidden bg-white p-4 menu-hidden" id="mobile-menu">
            <a href="#home" class="block py-2 text-gray-600 hover:text-blue-600">Home</a>
            <a href="#about" class="block py-2 text-gray-600 hover:text-blue-600">About Us</a>
           

            <div>
                <button class="w-full text-left py-2 text-gray-600 hover:text-blue-600"
                    onclick="toggleSubMenu('specialties-menu','togleIcon')">Specialties <i
                        class="fa-solid fa-angle-down" id="togleIcon"></i></button>
                <div id="specialties-menu" class="hidden pl-4">
                    <a href="#cardiology" class="block py-1 text-gray-500 hover:text-blue-500">Gynaecology</a>
                    <a href="#neurology" class="block py-1 text-gray-500 hover:text-blue-500">Urology</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Male Infertility</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">IVF Fertilization</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Adult Vaccination</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Obstetrics, Gynecology & infertility (I.V.F)</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Neonatology (NICU)</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Immunisation</a>
                    <a href="#orthopedics" class="block py-1 text-gray-500 hover:text-blue-500">Yoga & Physiotherapy</a>
                </div>
            </div>

            
            <div>
                <button class="w-full text-left py-2 text-gray-600 hover:text-blue-600"
                    onclick="toggleSubMenu('gallery-menu','togleIcon')">Gallery <i class="fa-solid fa-angle-down"
                        id="togleIcon"></i></button>
                <div id="gallery-menu" class="hidden pl-4">
                    <a href="#photos" class="block py-1 text-gray-500 hover:text-blue-500">Photos</a>
                    <a href="#videos" class="block py-1 text-gray-500 hover:text-blue-500">Videos</a>
                </div>
            </div>
            <a href="<?=base_url('contact-us');?>" class="block py-2 text-gray-600 hover:text-blue-600">Contact</a>
            <a href="<?= base_url('signup');?>" class="block py-2 text-gray-600 hover:text-blue-600">SignUp</a>

        </div>
    </nav>



<?php start_push('scripts'); ?>
<script >
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
</script>
<?php end_push(); ?>