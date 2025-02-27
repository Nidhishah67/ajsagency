<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJ's Agency - Your Trusted Partner for Growth & Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        highlight: '#FFCC00',
                        maintext: '#4f46e5',
                        textPrimary: '#2a5fea',
                    },
                    fontFamily: {
                        'roboto': ['Roboto', 'sans-serif'],
                        'montserrat': ['Montserrat', 'sans-serif']
                    },
                    boxShadow: {
                        'card': '0 4px 6px rgba(85, 110, 230, 0.1)'
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333333;
        }
    </style>
</head>

<body class="font-roboto text-textPrimary">
    <header class="bg-gradient-to-r from-blue-600 to-purple-700 py-4 fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="<?php echo $base_url; ?>">
                    <img src="assets/images/mainlogo2.png" alt="AJSAgency" class="w-[150px]">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:block">
                <ul class="flex space-x-6 items-center">
                    <li>
                        <a href="<?php echo $base_url; ?>" 
                           class="text-white hover:text-highlight transition duration-300 ease-in-out">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>about" 
                           class="text-white hover:text-highlight transition duration-300 ease-in-out">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>service" 
                           class="text-white hover:text-highlight transition duration-300 ease-in-out">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>casestudy" 
                           class="text-white hover:text-highlight transition duration-300 ease-in-out">
                            Case Studies
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>contactus" 
                           class="bg-highlight text-black px-4 py-2 rounded-lg hover:bg-opacity-90 transition duration-300 ease-in-out">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden fixed inset-0 bg-gradient-to-r from-blue-600 to-purple-700 transform -translate-x-full transition-transform duration-300 ease-in-out z-40">
            <div class="flex justify-end p-4">
                <button id="mobile-menu-close" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <nav class="px-4">
                <ul class="space-y-4">
                    <div class="flex items-center">
                        <a href="<?php echo $base_url; ?>">
                            <img src="assets/images/mainlogo2.png" class="w-[150px]" alt="AJSAgency">
                        </a>
                    </div>
                    <li><a href="<?php echo $base_url; ?>" class="block text-white text-xl py-2 hover:bg-white hover:bg-opacity-20">Home</a></li>
                    <li><a href="<?php echo $base_url; ?>about" class="block text-white text-xl py-2 hover:bg-white hover:bg-opacity-20">About</a></li>
                    <li><a href="<?php echo $base_url; ?>service" class="block text-white text-xl py-2 hover:bg-white hover:bg-opacity-20">Services</a></li>
                    <li><a href="<?php echo $base_url; ?>casestudy" class="block text-white text-xl py-2 hover:bg-white hover:bg-opacity-20">Case Studies</a></li>
                    <li><a href="<?php echo $base_url; ?>contactus" class="block bg-highlight text-white text-center text-xl py-3 rounded-lg mt-4 hover:bg-opacity-90 transition duration-300">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Spacer to prevent content from hiding under fixed header -->
    <div class="h-16 md:h-20"></div>

    <!-- Your page content goes here -->

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