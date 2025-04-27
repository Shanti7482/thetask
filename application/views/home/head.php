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

    
    </style>
</head>