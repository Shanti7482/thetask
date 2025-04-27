<?php $this->load->view('home/sub_footer');?>

<footer class="bg-gray-800 text-white text-center py-4">
        &copy; <?= date('Y');?> PANACEAMADICARE RESEARCH CENTER. All Rights Reserved.
    </footer>
    <button id="top-button" onclick="scrollToTop()"
        class="hidden fixed bottom-8 right-8  text-white text-2xl px-2 py-1 rounded-xl shadow-md z-[999] bg-emerald-900 hover:bg-emerald-800 font-bold transition-all duration-300 animate-bounce">
        <i class="fa-solid fa-angle-up"></i>
    </button>

<script src="<?= base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/js/swiper-bundle.min.js');?>"></script>

<?php start_push('scripts'); ?>
<script>
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
<?php end_push();?>