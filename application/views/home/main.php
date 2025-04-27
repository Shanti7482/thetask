<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('home/head');?>

<body class="bg-gray-100">
    <?php $this->load->view('home/navbar'); ?>
    <?php $this->load->view($view); ?>
    <?php $this->load->view('home/footer');?>

    <?php yield_push('scripts'); ?>

</body>

</html>

