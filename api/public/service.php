<?php
ob_start();
include __DIR__ . '/../includes/header.php';
?>
<style>
    .overlay {
        position: absolute;
        inset: 0;
        opacity: 0.1;
    }

    .overlay svg {
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    }

    /* Styles for larger screens (laptops/desktops) */
    @media (min-width: 1024px) {
        .overlay svg {
            width: 50%;
            height: 100%;
        }
    }

    /* Styles for smaller screens (mobile devices) */
    @media (max-width: 1023px) {
        .overlay svg {
            width: 80%;
            height: 100%;
        }
    }
</style>
<section
    class="relative flex flex-col items-center justify-center min-h-screen bg-gradient-to-r from-blue-600 to-purple-700 text-white py-12 sm:py-24 w-full">
    <div class="overlay">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="0,0 100,0 50,100" fill="white" />
        </svg>
    </div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="mb-8 animate-fade-in-up">
            <span class="text-sm uppercase tracking-wider text-white px-4 py-2 rounded-full inline-block">
                Our Professional Services
            </span>
        </div>
        <h1 class="text-5xl sm:text-4xl md:text-8xl font-bold leading-tight tracking-tight animate-fadeIn">
            Transforming Businesses
            <span class="block text-highlight mt-2">Through Innovative Digital Solutions</span>
        </h1>
        <p class="text-sm sm:text-lg md:text-2xl mt-4 mb-6 sm:mb-8 text-gray-200  mx-auto font-light animate-fadeIn">
            Empowering your business with cutting-edge digital strategies,<br /> comprehensive financial planning,
            and data-driven insights.
        </p>

        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 animate-fadeIn">
            <a href="#service-details"
                class="btn-primary bg-highlight border-2 border-highlight text-blue-600 px-8 py-4 rounded-lg hover:bg-highlight transition-all transform hover:-translate-y-1 shadow-lg">
                Explore Our Services
            </a>
            <a href="<?php echo $base_url; ?>contactus"
                class="btn-secondary border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-blue-600 transition-all transform hover:-translate-y-1">
                Contact Our Team
            </a>
        </div>
    </div>



</section>
<section class="mb-16 pt-28 p-5 min-h-screen">
    <h2 class="text-6xl font-extrabold text-center mb-2 text-textPrimary section-title">Our Services</h2>
    <p class="text-lg text-center text-black mb-4">
        At AJ's Agency, we offer a wide range of services designed <br /> to help your business thrive in the digital
        landscape.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 pt-10">
        <!-- Digital Marketing -->
        <div class="service-card bg-gray-100 p-6 rounded-lg border border-gray-100 hover:border-blue-500">
            <div class="flex items-center mb-4">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-bullhorn text-blue-600 text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 ml-4">Digital Marketing</h3>
            </div>
            <p class="text-gray-600 mb-4">
                Boost your online presence and engage your audience with our tailored digital marketing strategies.
            </p>
            <ul class="space-y-2 text-gray-700">
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Social Media Marketing</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Content Marketing</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>SEO Optimization</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>PPC Advertising</li>
            </ul>
        </div>


        <!-- Web Development -->
        <div class="service-card bg-gray-100 p-6 rounded-lg border border-gray-100 hover:border-green-500">
            <div class="flex items-center mb-4">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-code text-green-600 text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 ml-4">Web Development</h3>
            </div>
            <p class="text-gray-600 mb-4">
                Create stunning, responsive websites that provide an exceptional user experience and drive
                conversions.
            </p>
            <ul class="space-y-2 text-gray-700">
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Custom Website Design</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>E-commerce Solutions</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Content Management Systems</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Website Maintenance</li>
            </ul>
        </div>

        <!-- Web Design -->
        <div class="service-card bg-gray-100 p-6 rounded-lg border border-gray-100 hover:border-purple-500">
            <div class="flex items-center mb-4">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-paint-brush text-purple-600 text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 ml-4">Web Design</h3>
            </div>
            <p class="text-gray-600 mb-4">
                Enhance user experience with visually appealing and user-friendly designs that reflect your brand
                identity.
            </p>
            <ul class="space-y-2 text-gray-700">
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Responsive Design</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>UI/UX Design</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Branding and Identity</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Prototyping and Wireframing</li>
            </ul>
        </div>

        <!-- Data Scraping -->
        <div class="service-card bg-gray-100 p-6 rounded-lg border border-gray-100 hover:border-yellow-500">
            <div class="flex items-center mb-4">
                <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-database text-yellow-600 text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 ml-4">Data Solutions</h3>
            </div>
            <p class="text-gray-600 mb-4">
                Extract valuable data from various sources to gain insights and make informed business decisions.
            </p>
            <ul class="space-y-2 text-gray-700">
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Web Data Extraction</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Market Research</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Competitive Analysis</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Data Cleaning and Processing</li>
            </ul>
        </div>

        <!-- Bookkeeping -->
        <div class="service-card bg-gray-100 p-6 rounded-lg border border-gray-100 hover:border-red-500">
            <div class="flex items-center mb-4">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-invoice-dollar text-red-600 text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 ml-4">Bookkeeping</h3>
            </div>
            <p class="text-gray-600 mb-4">
                Keep your financial records organized and up-to-date with our professional bookkeeping services.
            </p>
            <ul class="space-y-2 text-gray-700">
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Monthly Financial Statements</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Accounts Payable and Receivable</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Tax Preparation and Filing</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Financial Reporting</li>
            </ul>
        </div>

        <!-- Financial Planning -->
        <div class="service-card bg-gray-100 p-6 rounded-lg border border-gray-100 hover:border-purple-500">
            <div class="flex items-center mb-4">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-chart-line text-purple-600 text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 ml-4">Financial Planning</h3>
            </div>
            <p class="text-gray-600 mb-4">
                Achieve your financial goals with our comprehensive financial planning services tailored to your
                needs.
            </p>
            <ul class="space-y-2 text-gray-700">
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Investment Strategy Development</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Retirement Planning</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Budget Planning and Management</li>
                <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Risk Assessment and Mitigation</li>
            </ul>
        </div>
    </div>
    <br>
    <div class="flex justify-center space-x-6 animate-fadeIn">
        <a href="<?php echo $base_url; ?>service"
            class="bg-highlight text-black py-3 px-6 rounded-lg shadow-lg hover:scale-105 inline-block hover:bg-highlight transition-all">
            Our Services
        </a>
    </div>
</section>
<section class="why-choose py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-2 section-title text-textPrimary">Get Results with Our Proven Solutions</h2>
        <p class="text-center text-gray-600 mb-8 max-w-4xl mx-auto">
            We understand that your business is unique, and so are your needs. That's why we offer a comprehensive range
            of services, tailored to help you achieve your goals and surpass your expectations.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 pt-10">
            <div class="feature bg-white p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <div class="flex flex-col sm:flex-row items-center mb-4">
                    <i class="fas fa-users text-blue-500 text-4xl mr-0 sm:mr-4 mb-2 sm:mb-0"></i>
                    <h3 class="text-xl font-semibold text-gray-800 text-center sm:text-left">Experience the Power of Our
                        Expert Team</h3>
                </div>
                <ul class="text-gray-600 text-center sm:text-left">
                    <li>Access to proven strategies and industry-leading expertise.</li>
                    <li>Passionate about delivering cutting-edge solutions.</li>
                </ul>
            </div>
            <div class="feature bg-white p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <div class="flex flex-col sm:flex-row items-center mb-4">
                    <i class="fas fa-puzzle-piece text-green-500 text-4xl mr-0 sm:mr-4 mb-2 sm:mb-0"></i>
                    <h3 class="text-xl font-semibold text-gray-800 text-center sm:text-left">Tailored Solutions for Your
                        Unique Needs</h3>
                </div>
                <ul class="text-gray-600 text-center sm:text-left">
                    <li>Custom strategies that align with your specific goals.</li>
                    <li>In-depth understanding of your challenges and aspirations.</li>
                </ul>
            </div>
            <div class="feature bg-white p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <div class="flex flex-col sm:flex-row items-center mb-4">
                    <i class="fas fa-chart-line text-purple-500 text-4xl mr-0 sm:mr-4 mb-2 sm:mb-0"></i>
                    <h3 class="text-xl font-semibold text-gray-800 text-center sm:text-left">Proven Results That Speak
                        for Themselves</h3>
                </div>
                <ul class="text-gray-600 text-center sm:text-left">
                    <li>Data-driven strategies that deliver measurable outcomes.</li>
                    <li>Helping clients grow and thrive in competitive markets.</li>
                </ul>
            </div>
        </div>

        <!-- Creative CTA Section -->
        <div class="mt-16 relative overflow-hidden">
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-blue-400 rounded-full opacity-10 hidden md:block"></div>
            <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-green-400 rounded-full opacity-10 hidden md:block">
            </div>

            <div
                class="relative z-10 bg-gradient-to-r from-blue-600 to-purple-700 text-white py-12 px-6 rounded-xl shadow-2xl">
                <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0 text-center md:text-left">
                        <div class="flex flex-col sm:flex-row items-center mb-3">
                            <i class="fas fa-magic text-yellow-300 text-3xl mr-0 sm:mr-4 mb-2 sm:mb-0"></i>
                            <h3 class="text-3xl font-bold">Transform Your Business Today</h3>
                        </div>
                        <p class="text-blue-100 text-lg max-w-xl text-center md:text-left">
                            Unlock your business's potential with our innovative strategies and expert guidance.
                        </p>
                    </div>
                    <div class="flex flex-col items-center">
                        <a href="<?php echo $base_url; ?>contactus"
                            class="group relative overflow-hidden px-8 py-4 bg-white text-blue-700 font-bold rounded-lg shadow-lg transform transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                            <span class="relative z-10">Get Started Now</span>
                            <span
                                class="absolute inset-0 bg-blue-100 opacity-0 group-hover:opacity-20 transition duration-300"></span>
                        </a>
                        <p class="mt-3 text-sm text-blue-200 flex items-center">
                            <i class="fas fa-shield-alt mr-2"></i>
                            100% Satisfaction Guaranteed
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .animate-float {
        animation: float 4s ease-in-out infinite;
    }
</style>
<section class="pricing py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-center mb-2 section-title text-textPrimary">Flexible Solutions, Tailored to Your Needs
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                We believe in providing value-driven solutions that grow with your business. Our pricing is as unique as
                your goals.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8 pt-10">
            <!-- Basic Plan -->
            <div
                class="pricing-card relative bg-white border-2 border-gray-100 rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-4">
                <div class="p-6 relative z-10">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-2xl font-bold text-gray-800">Basic Plan</h3>
                        <div class="bg-blue-50 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold">
                            Starter
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center">
                            <span class="text-4xl font-bold text-blue-500">Custom</span>
                            <span class="ml-2 text-gray-500">Pricing</span>
                        </div>
                        <p class="text-gray-500 mt-2">Tailored to your initial needs</p>
                    </div>
                    <ul class="space-y-3 mb-6 text-gray-700">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Basic Support Channels
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Monthly Performance Snapshot
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Standard Resource Access
                        </li>
                    </ul>
                    <a href="contactus"
                        class="w-full btn-primary bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-colors text-center block">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Explore Custom Pricing
                        </span>
                    </a>
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 to-purple-500 transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300">
                </div>
            </div>

            <!-- Standard Plan -->
            <div
                class="pricing-card relative bg-white border-2 border-gray-100 rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-4 border-blue-200">
                <div class="absolute top-0 right-0 m-4">
                    <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold">
                        Most Popular
                    </span>
                </div>
                <div class="p-6 relative z-10">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-2xl font-bold text-gray-800">Standard Plan</h3>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center">
                            <span class="text-4xl font-bold text-blue-500">Adaptive</span>
                            <span class="ml-2 text-gray-500">Pricing</span>
                        </div>
                        <p class="text-gray-500 mt-2">Scalable solutions for growth</p>
                    </div>
                    <ul class="space-y-3 mb-6 text-gray-700">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Priority Support
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Bi-Weekly Detailed Reports
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Premium Resource Library
                        </li>
                    </ul>
                    <a href="contactus"
                        class="w-full btn-primary bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition-colors text-center block">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-rocket mr-2"></i>
                            Unlock Potential Pricing
                        </span>
                    </a>
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-green-400 to-blue-500 transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300">
                </div>
            </div>
            <!-- Premium Plan -->
            <div
                class="pricing-card relative bg-white border-2 border-gray-100 rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-4 border-purple-200">
                <div class="p-6 relative z-10">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-2xl font-bold text-gray-800">Enterprise Plan</h3>
                        <div class="bg-purple-50 text-purple-600 px-3 py-1 rounded-full text-sm font-semibold">
                            Advanced
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center">
                            <span class="text-4xl font-bold text-blue-500">Bespoke</span>
                            <span class="ml-2 text-gray-500">Pricing</span>
                        </div>
                        <p class="text-gray-500 mt-2">Comprehensive enterprise solutions</p>
                    </div>
                    <ul class="space-y-3 mb-6 text-gray-700">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Dedicated Support Team
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Real-Time Performance Tracking
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Unlimited Resource Access
                        </li>
                    </ul>
                    <a href="contactus"
                        class="w-full btn-primary bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition-colors text-center block">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-shield-alt mr-2"></i>
                            Enterprise Solution Inquiry
                        </span>
                    </a>
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-pink-500 transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300">
                </div>
            </div>
        </div>

        <!-- Pricing Guarantee Section -->
        <div class="mt-12 text-center">
            <div class="bg-blue-50 max-w-3xl mx-auto p-6 rounded-xl">
                <div class="flex flex-col md:flex-row items-center justify-center">
                    <div class="mr-0 md:mr-6 mb-4 md:mb-0">
                        <i class="fas fa-shield-alt text-blue-600 text-4xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-textPrimary" style="margin-bottom: 0.5rem;">
                            Flexible Pricing Guarantee
                        </h3>
                        <p class="text-gray-600">
                            We offer transparent, flexible pricing with no hidden costs.
                            Not satisfied? We'll work with you to find the perfect solution.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Optional: Add some subtle animations -->
<style>
    @keyframes gradientFlow {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .pricing-card:hover .btn-primary {
        background-size: 200% auto;
        animation: gradientFlow 3s ease infinite;
    }

    .pricing-card {
        transition: all 0.3s ease;
    }

    .pricing-card:hover {
        border-color: rgba(59, 130, 246, 0.3);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
</style>

<script>
    // Optional Interactive Elements
    document.addEventListener('DOMContentLoaded', () => {
        const pricingCards = document.querySelectorAll('.pricing-card');

        pricingCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Subtle vibration feedback
                if ('vibrate' in navigator) {
                    navigator.vibrate(30);
                }
            });
        });
    });
</script>
<section class="testimonials py-16 pt-16 bg-gray-50">
    <div class="container mx-auto px-4">
    <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-4xl md:text-5xl font-bold mb-2 text-textPrimary">
                Success Stories from Our Clients
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Hear directly from businesses that have transformed their operations with our innovative solutions.
            </p>
        </div>

        <div id="testimonial-container" class="grid md:grid-cols-3 gap-8 pt-5">
            <!-- Testimonials will be inserted here by JavaScript -->
        </div>

        <!-- Hidden testimonials -->
        <div id="all-testimonials" class="hidden">
            <div
                class="testimonial-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="absolute top-0 right-0 m-2 text-blue-500 text-3xl">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="p-6 pb-0">
                    <p class="text-gray-600 text-lg italic mb-6 relative">
                        "AJ's Agency has been instrumental in scaling our digital presence. Their strategic approach and
                        expertise have truly transformed our business."
                    </p>
                </div>
                <div class="flex items-center p-6 pt-0 space-x-4">
                    <div
                        class="w-10 h-10 rounded-full flex-shrink-0 bg-blue-500 text-white flex items-center justify-center font-bold">
                        SJ
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Sarah Johnson</h4>
                        <p class="text-gray-500 text-sm">CEO, TechInnovate</p>
                    </div>
                </div>
            </div>

            <div
                class="testimonial-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="absolute top-0 right-0 m-2 text-green-500 text-3xl">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="p-6 pb-0">
                    <p class="text-gray-600 text-lg italic mb-6 relative">
                        "The data scraping services provided have given us unprecedented insights into our market.
                        Absolutely game-changing for any business!"
                    </p>
                </div>
                <div class="flex items-center p-6 pt-0 space-x-4">
                    <div
                        class="w-10 h-10 rounded-full flex-shrink-0 bg-blue-500 text-white flex items-center justify-center font-bold">
                        MC
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Michael Chen</h4>
                        <p class="text-gray-500 text-sm">Founder, DataDrive Solutions</p>
                    </div>
                </div>
            </div>

            <div
                class="testimonial-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="absolute top-0 right-0 m-2 text-purple-500 text-3xl">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="p-6 pb-0">
                    <p class="text-gray-600 text-lg italic mb-6 relative">
                        "Their financial planning and bookkeeping services have brought unprecedented clarity and
                        efficiency to our financial operations."
                    </p>
                </div>
                <div class="flex items-center p-6 pt-0 space-x-4">
                    <div
                        class="w-10 h-10 rounded-full flex-shrink-0 bg-blue-500 text-white flex items-center justify-center font-bold">
                        ER
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Emily Rodriguez</h4>
                        <p class="text-gray-500 text-sm">Financial Director, GrowthEdge</p>
                    </div>
                </div>
            </div>

            <div
                class="testimonial-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="absolute top-0 right-0 m-2 text-red-500 text-3xl">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="p-6 pb-0">
                    <p class="text-gray-600 text-lg italic mb-6 relative">
                        "We struggled with online marketing until we found AJ's Agency. Their team helped us reach the
                        right audience, and our sales have grown tremendously!"
                    </p>
                </div>
                <div class="flex items-center p-6 pt-0 space-x-4">
                    <div
                        class="w-10 h-10 rounded-full flex-shrink-0 bg-blue-500 text-white flex items-center justify-center font-bold">
                        DT
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">David Thompson</h4>
                        <p class="text-gray-500 text-sm">Marketing Head, FreshEats</p>
                    </div>
                </div>
            </div>

            <div
                class="testimonial-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="absolute top-0 right-0 m-2 text-yellow-500 text-3xl">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="p-6 pb-0">
                    <p class="text-gray-600 text-lg italic mb-6 relative">
                        "Their customer support is top-notch. Whenever we needed help, they responded quickly and solved
                        our issues right away. Highly recommended!"
                    </p>
                </div>
                <div class="flex items-center p-6 pt-0 space-x-4">
                    <div
                        class="w-10 h-10 rounded-full flex-shrink-0 bg-blue-500 text-white flex items-center justify-center font-bold">
                        LB
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Lisa Brown</h4>
                        <p class="text-gray-500 text-sm">Operations Manager, QuickPay</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let testimonials = Array.from(document.querySelectorAll("#all-testimonials .testimonial-card"));
        let selectedTestimonials = [];

        while (selectedTestimonials.length < 3) {
            let randomIndex = Math.floor(Math.random() * testimonials.length);
            if (!selectedTestimonials.includes(testimonials[randomIndex])) {
                selectedTestimonials.push(testimonials[randomIndex]);
            }
        }

        let container = document.getElementById("testimonial-container");
        selectedTestimonials.forEach(testimonial => {
            container.appendChild(testimonial.cloneNode(true));
        });
    });
</script>

<style>
    .testimonial-card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .testimonial-card .p-6 {
        flex: 1;
    }

    .testimonial-card .flex.items-center {
        margin-top: auto;
    }

    .testimonial-card p.italic {
        min-height: 80px;
    }
</style>

<?php
$faqs = [
    [
        'question' => 'Why does my business need digital marketing?',
        'answer' => 'Today, customers search for products and services online. Digital marketing helps your business get noticed, engage customers, and boost revenue through powerful strategies like SEO, ads, and social media.'
    ],
    [
        'question' => 'Do you manage social media accounts?',
        'answer' => 'Yes! We create engaging posts, schedule content, and interact with your audience on platforms like Facebook, Instagram, and LinkedIn.'
    ],
    [
        'question' => 'How long does it take to build or redesign a website?',
        'answer' => 'A basic website takes 2-4 weeks, while more complex websites may take longer. If you have an existing website, we can redesign it for a fresh look, better speed, and improved performance.'
    ],
    [
        'question' => 'What are data solutions, and how can they help my business?',
        'answer' => 'Data solutions allow us to extract valuable information from various online sources, helping your business analyze trends, understand competitors, and make better marketing and business decisions.'
    ],
    [
        'question' => 'Why should I care about bookkeeping?',
        'answer' => 'Keeping track of finances ensures everything is in order, avoids last-minute stress, helps with budgeting, and keeps financial goals on track. It’s all about financial peace of mind!'
    ],
    [
        'question' => 'How can financial planning improve financial security?',
        'answer' => 'A: With a good plan, you can spend wisely, save for the future, reduce financial risks, and ensure financial stability without unnecessary stress.'
    ],
    [
        'question' => 'Why should I choose AJ’s Agency?',
        'answer' => 'We provide custom strategies, expert solutions, affordable pricing, and real results to help businesses grow online.'
    ],
];
?>

<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
    <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-lg text-neutral-600">
                Find answers to common questions about our web scraping and data extraction services.
            </p>
        </div>

        <div class="max-w-4xl mx-auto space-y-4 pt-5">
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="bg-white rounded-xl border border-neutral-200 hover:border-neutral-200">
                    <div class="faq-item" data-faq="<?php echo $index; ?>">
                        <button onclick="toggleFAQ(<?php echo $index; ?>)"
                            class="flex justify-between items-center w-full px-6 py-4 text-left focus:outline-none focus-visible:outline-none">
                            <span class="text-lg font-semibold text-neutral-900">
                                <?php echo htmlspecialchars($faq['question']); ?>
                            </span>
                            <svg class="w-5 h-5 text-neutral-500 transform transition-transform duration-200 faq-icon"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4 text-neutral-600">
                            <?php echo nl2br(htmlspecialchars($faq['answer'])); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .faq-item button:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .faq-item {
        outline: none !important;
    }
</style>

<script>
    function toggleFAQ(index) {
        const faqItem = document.querySelector(`[data-faq="${index}"]`);
        const answer = faqItem.querySelector('.faq-answer');
        const icon = faqItem.querySelector('.faq-icon');

        // Toggle answer visibility
        answer.classList.toggle('hidden');

        // Rotate icon
        if (answer.classList.contains('hidden')) {
            icon.style.transform = 'rotate(0deg)';
        } else {
            icon.style.transform = 'rotate(180deg)';
        }
    }
</script>

<section class="cta-section bg-white text-black py-20 overflow-hidden relative">
    <!-- Decorative Background Elements -->
    <div class="absolute top-0 left-0 right-0 bottom-0 opacity-10">
        <svg class="absolute top-0 left-0 w-1/2 h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="0,0 100,0 50,100" fill="white" />
        </svg>
        <svg class="absolute bottom-0 right-0 w-1/2 h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="0,100 100,100 50,0" fill="white" />
        </svg>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-6">
                <span class="inline-block bg-white/20 px-4 py-2 rounded-full text-sm uppercase tracking-wider">
                    Your Success Starts Here
                </span>
            </div>

            <h2 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Transform Your Vision
                <span class="block text-highlight mt-2">Into Remarkable Results</span>
            </h2>

            <p class="text-xl md:text-2xl mb-10 text-black max-w-3xl mx-auto">
                Don't just dream about success - achieve it. Our expert team is ready to craft a customized strategy
                that propels your business forward.
            </p>

            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-6">
                <a href="<?php echo $base_url; ?>contactus"
                    class="btn-primary text-blue-600 px-10 py-4 rounded-lg hover:bg-gray-100 transition-all transform hover:-translate-y-1 shadow-lg flex items-center">
                    <i class="fas fa-rocket mr-3"></i>
                    Launch Your Success
                </a>
                <a href="<?php echo $base_url; ?>casestudy"
                    class="btn-secondary border-2 border-primary text-black px-10 py-4 rounded-lg hover:bg-white hover:text-blue-600 transition-all transform hover:-translate-y-1 flex items-center">
                    <i class="fas fa-eye mr-3"></i>
                    View Our Success Stories
                </a>
            </div>

            <div class="mt-12 flex justify-center items-center space-x-4">
                <div class="bg-white/20 px-4 py-2 rounded-full flex items-center">
                    <i class="fas fa-check-circle text-yellow-300 mr-2"></i>
                    <span class="text-sm">100% Customized Strategies</span>
                </div>
                <div class="bg-white/20 px-4 py-2 rounded-full flex items-center">
                    <i class="fas fa-shield-alt text-green-300 mr-2"></i>
                    <span class="text-sm">Guaranteed Results</span>
                </div>
            </div>
        </div>
    </div>


</section>

<!-- Optional: Add some subtle animations -->
<style>
    @keyframes pulse-border {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    }

    .animate-pulse-border {
        animation: pulse-border 2s infinite;
    }
</style>
<?php

include __DIR__ . '/../includes/footer.php';
?>