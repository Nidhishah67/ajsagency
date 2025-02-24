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
        <h1 class="text-5xl sm:text-4xl md:text-8xl font-bold leading-tight tracking-tight animate-fadeIn">
            Innovate Your Future with
            <span class="block text-yellow-300 mt-2">Custom Digital Solutions</span>
        </h1>
        <p class="text-sm sm:text-lg md:text-2xl mt-4 mb-6 sm:mb-8 text-gray-200  mx-auto font-light animate-fadeIn">
            We leverage technology and creativity to provide tailored <br /> solutions that drive success and growth.
        </p>

        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 animate-fadeIn">
            <a href="<?php echo $base_url; ?>contactus"
                class="px-6 py-3 bg-yellow-300 text-indigo-600 rounded-full font-semibold hover:bg-yellow-400 transition-all duration-300 shadow-lg">
                Get Started
            </a>
            <a href="<?php echo $base_url; ?>service"
                class="px-6 py-3 border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-indigo-600 transition-all duration-300">
                Explore Services
            </a>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const heroContent = document.querySelector('.container');
        setTimeout(() => {
            heroContent.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            heroContent.style.opacity = 1;
            heroContent.style.transform = 'translateY(0)';
        }, 200);

        // Button Hover Effects
        const buttons = document.querySelectorAll('.px-8');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', () => {
                button.style.transform = 'translateY(-5px) scale(1.05)';
            });
            button.addEventListener('mouseleave', () => {
                button.style.transform = 'translateY(0) scale(1)';
            });
        });
    });
</script>

<style>
    .hero-section {
        position: relative;
        overflow: hidden;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.8s forwards;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg,
                rgba(99, 102, 241, 0.1),
                rgba(124, 58, 237, 0.1));
        z-index: 1;
    }
</style>

<section class="mb-16 pt-28 p-5 min-h-screen">
    <h2 class="text-6xl font-extrabold text-center mb-2 section-title">Our Services</h2>
    <p class="text-lg text-center mb-4">
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
            class="btn-primary py-3 px-6 rounded-lg shadow-lg hover:scale-105 inline-block hover:bg-gray-100 transition-all">
            Our Services
        </a>
    </div>
</section>
<section class="mb-16 pt-16 container mx-auto px-4" aria-labelledby="process-title">
    <h2 id="process-title" class="text-5xl font-extrabold text-center mb-2 text-primary-color">
        Your <span class="text-blue-600">Business</span> Transformation Journey
    </h2>
    <p class="text-lg text-center mb-10 max-w-2xl mx-auto text-text-primary">
        Turning challenges into opportunities, one strategic step at a time
    </p>
    <!-- Modified container for responsive cards -->
    <div class="flex flex-col md:flex-row flex-wrap md:flex-nowrap justify-center gap-6 pt-20 px-4">
        <!-- Card 1 -->
        <div
            class="relative w-full md:w-80 bg-purple-100 border-2 border-purple-400 rounded-xl p-6 text-center shadow-lg h-80 md:mt-20 mb-12 md:mb-0">
            <div
                class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-white border-2 border-purple-400 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h3 class="mt-8 text-lg font-bold text-purple-600">Deep Business Insights</h3>
            <p class="text-sm text-gray-600 mt-8">Laser-focused diagnostics uncover hidden potential, transforming
                challenges into strategic opportunities</p>
        </div>

        <!-- Card 2 -->
        <div
            class="relative w-full md:w-80 bg-yellow-100 border-2 border-yellow-400 rounded-xl p-6 text-center shadow-lg h-80 mb-12 md:mb-0">
            <div
                class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-white border-2 border-yellow-400 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    <path d="M12 8v4l3 3" />
                </svg>
            </div>
            <h3 class="mt-8 text-lg font-bold text-purple-600">Precision Growth Blueprint</h3>
            <p class="text-sm text-gray-600 mt-8">A precision-engineered roadmap aligns your vision with actionable
                strategies for sustainable growth</p>
        </div>

        <!-- Card 3 -->
        <div
            class="relative w-full md:w-80 bg-blue-100 border-2 border-blue-400 rounded-xl p-6 text-center shadow-lg h-80 md:mt-20 mb-12 md:mb-0">
            <div
                class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-white border-2 border-blue-400 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                </svg>
            </div>
            <h3 class="mt-8 text-lg font-bold text-purple-600">Action-Driven Execution</h3>
            <p class="text-sm text-gray-600 mt-8">Seamless execution of strategic plans with meticulous attention,
                converting blueprint into tangible business momentum</p>
        </div>

        <!-- Card 4 -->
        <div
            class="relative w-full md:w-80 bg-red-100 border-2 border-red-400 rounded-xl p-6 text-center shadow-lg h-80 mb-12 md:mb-0">
            <div
                class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-white border-2 border-red-400 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <h3 class="mt-8 text-lg font-bold text-purple-600">Continuous Improvement</h3>
            <p class="text-sm text-gray-600 mt-8">Dynamic performance optimization adapts in real-time,
                ensuring continuous innovation</p>
        </div>

        <!-- Card 5 -->
        <div
            class="relative w-full md:w-80 bg-green-100 border-2 border-green-400 rounded-xl p-6 text-center shadow-lg h-80 md:mt-20 mb-12 md:mb-0">
            <div
                class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-white border-2 border-green-400 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                    <path d="M12 8v4l3 3" />
                </svg>
            </div>
            <h3 class="mt-8 text-lg font-bold text-purple-600">Strategic Business Insights</h3>
            <p class="text-sm text-gray-600 mt-8">Transformative analytics convert complex data into clear,
                actionable insights driving informed decision-making</p>
        </div>
    </div>
</section>
<section class="mb-16 pt-16 container mx-auto px-4">
    <h2 class="text-5xl sm:text-4xl md:text-6xl font-bold text-center mb-2 section-title">Why Choose AJ's Agency?</h2>
    <p class="text-lg text-center mb-10 max-w-2xl mx-auto text-text-primary">
        We go beyond traditional services to deliver exceptional value, innovation, and transformative results that
        elevate your business.
    </p>

    <div class="p-8 md:p-12 max-w-5xl mx-auto pt-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex items-start space-x-4 animate-slide-up">
                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-check text-xl text-yellow-500"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">Personalized Approach</h4>
                    <p class="text-gray-600">We craft unique strategies tailored to your specific business needs,
                        ensuring maximum impact and efficiency.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4 animate-slide-up">
                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-check text-xl text-yellow-500"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">Comprehensive Solutions</h4>
                    <p class="text-gray-600">We offer end-to-end services that cover all aspects of your business
                        growth, from strategy to implementation.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4 animate-slide-up">
                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-check text-xl text-yellow-500"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">Proven Expertise</h4>
                    <p class="text-gray-600">With years of experience across multiple industries, we bring deep
                        insights and strategic knowledge to every project.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4 animate-slide-up">
                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-check text-xl text-yellow-500"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">Innovative Technology</h4>
                    <p class="text-gray-600">We leverage cutting-edge technologies and innovative solutions to keep
                        your business ahead of the competition.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4 animate-slide-up">
                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-check text-xl text-yellow-500"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">Customer-Centric Approach</h4>
                    <p class="text-gray-600">We prioritize your unique needs, providing personalized support and
                        building long-term relationships based on trust and results.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4 animate-slide-up">
                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-check text-xl text-yellow-500"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">Sustainable Practices</h4>
                    <p class="text-gray-600">We implement eco-friendly and sustainable practices to help your business
                        grow responsibly, with a positive impact on the environment.</p>
                </div>
            </div>

        </div>
    </div>
</section>



<style>
    .why-choose-us-item {
        transition: all 0.3s ease-in-out;
        width: 100%;
    }

    .why-choose-us-item .content {
        display: none;
        transition: all 0.3s ease-out;
    }

    .why-choose-us-item .content.active {
        display: block;
    }

    /* Remove any media queries that might affect the accordion behavior */
    @media (min-width: 768px) {
        .why-choose-us-item {
            width: 100%;
        }
    }
</style>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const accordionItems = document.querySelectorAll('.why-choose-us-item');

        accordionItems.forEach(item => {
            const header = item.querySelector('.flex');
            const content = item.querySelector('.content');
            const toggleIcon = item.querySelector('.toggle-icon');

            // Add keyboard accessibility
            header.setAttribute('tabindex', '0');
            header.setAttribute('role', 'button');
            header.setAttribute('aria-expanded', 'false');

            function toggleAccordion(e) {
                if (e) {
                    e.stopPropagation();
                }

                const isCurrentlyOpen = content.style.display === 'block';

                if (isCurrentlyOpen) {
                    // Close the current item
                    content.style.display = 'none';
                    content.classList.remove('active');
                    toggleIcon.textContent = '+';
                    header.setAttribute('aria-expanded', 'false');
                } else {
                    // First close all other items
                    accordionItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            const otherContent = otherItem.querySelector('.content');
                            const otherToggleIcon = otherItem.querySelector('.toggle-icon');
                            otherContent.style.display = 'none';
                            otherContent.classList.remove('active');
                            otherToggleIcon.textContent = '+';
                            otherItem.querySelector('.flex').setAttribute('aria-expanded', 'false');
                        }
                    });

                    // Then open the clicked item
                    content.style.display = 'block';
                    content.classList.add('active');
                    toggleIcon.textContent = '-';
                    header.setAttribute('aria-expanded', 'true');
                }
            }

            // Click event
            header.addEventListener('click', toggleAccordion);

            // Keyboard event (Enter and Space)
            header.addEventListener('keydown', (event) => {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    toggleAccordion(event);
                }
            });
        });
    });
</script>

<section class="testimonials py-16 pt-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-4xl md:text-5xl font-bold mb-2" style="color: #1d4ed8;">
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
            <div class="testimonial-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="absolute top-0 right-0 m-2 text-blue-500 text-3xl">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="p-6 pb-0">
                    <p class="text-gray-600 text-lg italic mb-6 relative">
                        "AJ's Agency has been instrumental in scaling our digital presence. Their strategic approach and expertise have truly transformed our business."
                    </p>
                </div>
                <div class="flex items-center p-6 pt-0 space-x-4">
                    <div class="w-10 h-10 rounded-full flex-shrink-0 bg-blue-500 text-white flex items-center justify-center font-bold">
                        SJ
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Sarah Johnson</h4>
                        <p class="text-gray-500 text-sm">CEO, TechInnovate</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="absolute top-0 right-0 m-2 text-green-500 text-3xl">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="p-6 pb-0">
                    <p class="text-gray-600 text-lg italic mb-6 relative">
                        "The data scraping services provided have given us unprecedented insights into our market. Absolutely game-changing for any business!"
                    </p>
                </div>
                <div class="flex items-center p-6 pt-0 space-x-4">
                    <div class="w-10 h-10 rounded-full flex-shrink-0 bg-blue-500 text-white flex items-center justify-center font-bold">
                        MC
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Michael Chen</h4>
                        <p class="text-gray-500 text-sm">Founder, DataDrive Solutions</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="absolute top-0 right-0 m-2 text-purple-500 text-3xl">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="p-6 pb-0">
                    <p class="text-gray-600 text-lg italic mb-6 relative">
                        "Their financial planning and bookkeeping services have brought unprecedented clarity and efficiency to our financial operations."
                    </p>
                </div>
                <div class="flex items-center p-6 pt-0 space-x-4">
                    <div class="w-10 h-10 rounded-full flex-shrink-0 bg-blue-500 text-white flex items-center justify-center font-bold">
                        ER
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Emily Rodriguez</h4>
                        <p class="text-gray-500 text-sm">Financial Director, GrowthEdge</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="absolute top-0 right-0 m-2 text-red-500 text-3xl">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="p-6 pb-0">
                    <p class="text-gray-600 text-lg italic mb-6 relative">
                        "We struggled with online marketing until we found AJ's Agency. Their team helped us reach the right audience, and our sales have grown tremendously!"
                    </p>
                </div>
                <div class="flex items-center p-6 pt-0 space-x-4">
                    <div class="w-10 h-10 rounded-full flex-shrink-0 bg-blue-500 text-white flex items-center justify-center font-bold">
                        DT
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">David Thompson</h4>
                        <p class="text-gray-500 text-sm">Marketing Head, FreshEats</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card relative bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <div class="absolute top-0 right-0 m-2 text-yellow-500 text-3xl">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="p-6 pb-0">
                    <p class="text-gray-600 text-lg italic mb-6 relative">
                        "Their customer support is top-notch. Whenever we needed help, they responded quickly and solved our issues right away. Highly recommended!"
                    </p>
                </div>
                <div class="flex items-center p-6 pt-0 space-x-4">
                    <div class="w-10 h-10 rounded-full flex-shrink-0 bg-blue-500 text-white flex items-center justify-center font-bold">
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


<div class="container mx-auto px-4 py-8 pt-10">
    <section class="mb-16 text-center primary-bg px-20 py-12 rounded-lg">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-white">Get Started Today!</h2>
            <p class="mb-4 text-white text-lg">
                Ready to take your business to the next level? Contact us today to discuss how we can help you achieve your goals.
            </p>
            <div class="flex flex-col sm:flex-row justify-center sm:space-x-4 space-y-4 sm:space-y-0">
                <a href="<?php echo $base_url; ?>contactus"
                    class="btn-primary py-3 px-6 rounded-lg shadow-lg hover:scale-105 inline-block">
                    Contact Us
                </a>
                <a href="<?php echo $base_url; ?>service"
                    class="btn-primary py-3 px-6 rounded-lg shadow-lg hover:scale-105 inline-block hover:bg-gray-100 transition-all">
                    Our Services
                </a>
            </div>
        </div>
    </section>
</div>


<?php
$faqs = [
    [
        'question' => 'What is digital marketing, and how can it help my business?',
        'answer' => 'Digital marketing promotes your business online through SEO, social media, paid ads, and email marketing. It helps you reach more customers, boost brand awareness, and increase sales.'
    ],
    [
        'question' => 'How long does it take to build a website?',
        'answer' => 'A simple website takes about 2-4 weeks, while a custom web application can take a few months, depending on features and complexity.'
    ],
    [
        'question' => 'Can you redesign my existing website?',
        'answer' => '  Of course! We can give your website a fresh, modern look with improved usability and performance.'
    ],
    [
        'question' => 'What data solutions do you provide?',
        'answer' => 'We offer data analysis, database management, data visualization, and cloud-based storage solutions to help businesses make informed decisions.'
    ],
    [
        'question' => 'What bookkeeping services do you offer?',
        'answer' => 'We manage financial records, track income and expenses, handle invoicing, and prepare financial reports.'
    ],
    [
        'question' => 'Why is financial planning important?',
        'answer' => 'Financial planning helps you save money, invest wisely, manage risks, and secure your future financial goals.'
    ],
    [
        'question' => 'Do you offer investment advice?',
        'answer' => 'Yes! We provide expert guidance on smart investments, retirement planning, and wealth management.'
    ],
];
?>

<section class="py-24">
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
        <div class="mt-16 text-center">
            <p class="text-neutral-600 mb-4">Still have questions?</p>
            <div class="flex flex-wrap justify-center gap-8">
                <a href="casestudy" class="inline-flex items-center text-black font-semibold">
                    <i class="fas fa-chart-bar mr-2 text-blue-500 hover:text-blue-600"></i>
                    View Case Studies
                </a>
                <a href="contactus" class="inline-flex items-center text-black font-semibold">
                    <i class="fas fa-headset mr-2 text-blue-500 hover:text-blue-600"></i>
                    Get in Touch
                </a>
            </div>
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


<?php
include 'includes/footer.php';
?>