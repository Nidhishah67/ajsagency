<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJ's Agency - Your Trusted Partner for Growth & Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
    <style>
        :root {
            --primary-color: #556EE6; /* Soft Indigo Blue */
            --secondary-color: #F2994A; /* Vibrant Orange */
            --background: #F9FAFB; /* Near White */
            --text-primary: #2D3748; /* Deep Grey */
            --dark-color:#4f9f8e;
            --highlight-color: #81E6D9; /* Aqua */
            --border-color: #E2E8F0; /* Light Grey */
        }

        body {
           
            color: var(--text-primary);
            font-family: 'Roboto', sans-serif;
        }

        .primary-bg {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary {
            background-color: var(--secondary-color);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #E67E22; /* Slightly darker orange */
          
        }

        .section-title {
            color: var(--primary-color);
        }

        .card {
            background-color: white;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 6px rgba(85, 110, 230, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .dropdown-content {
            transition: max-height 0.3s ease-out;
            overflow: hidden;
        }

        .logo img {
            width: 80px;
            height: 60px;
        }
        nav a:focus,
        nav a:active {
            outline: none !important;
            box-shadow: none !important;
        }

    </style>
</head>

<body>
    <header class="bg-gradient-to-r from-blue-600 to-purple-700 py-4  fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <!-- Logo -->
            <div class="logo flex items-center">
                <a href="<?php echo $base_url; ?>">
                <img src="assets/images/headerlogo.png" alt="AJSAgency">

                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:block">
                <ul class="flex space-x-6 items-center">
                    <li>
                    <a href="<?php echo $base_url; ?>" class="text-white hover:text-highlight-color transition duration-300 ease-in-out">
                    Home</a>
                    </li>
                  
                    <li>
                        <a href="<?php echo $base_url; ?>about" class="text-white hover:text-highlight-color transition duration-300 ease-in-out">About</a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>service" class="text-white hover:text-highlight-color transition duration-300 ease-in-out">Services</a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>casestudy" class="text-white hover:text-highlight-color transition duration-300 ease-in-out">Case Studies</a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>contactus" class="btn-primary px-4 py-2 rounded-lg hover:bg-opacity-90 transition duration-300 ease-in-out">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="md:hidden">
                <button id="mobile-menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden fixed inset-0 primary-bg transform -translate-x-full transition-transform duration-300 ease-in-out z-40">
            <div class="flex justify-end p-4">
                <button id="mobile-menu-close" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <nav class="px-4">
                <ul class="space-y-4">
                <div class="logo flex items-center">
                <a href="">
                    <img src="assets/images/headerlogo.png" alt="AJSAgency">
                </a>
            </div>
                    <li><a href="<?php echo $base_url; ?>" class="block text-white text-xl py-2 hover:bg-opacity-20 hover:bg-white">Home</a></li>
                    <li><a href="<?php echo $base_url; ?>about" class="block text-white text-xl py-2 hover:bg-opacity-20 hover:bg-white">About</a></li>
                    <li><a href="<?php echo $base_url; ?>service" class="block text-white text-xl py-2 hover:bg-opacity-20 hover:bg-white">Services</a></li>
                    <li><a href="<?php echo $base_url; ?>casestudy" class="block text-white text-xl py-2 hover:bg-opacity-20 hover:bg-white">Case Studies</a></li>
                    <li><a href="<?php echo $base_url; ?>contactus" class="block btn-primary text-center text-xl py-3 rounded-lg mt-4">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="h-16 md:h-20"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenuClose = document.getElementById('mobile-menu-close');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuToggle.addEventListener('click', function () {
                mobileMenu.classList.remove('-translate-x-full');
            });

            mobileMenuClose.addEventListener('click', function () {
                mobileMenu.classList.add('-translate-x-full');
            });
        });
    </script>
</body>

</html>
