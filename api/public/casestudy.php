<?php
ob_start();
include 'includes/header.php';
$caseStudies = [
    [
        "image" => "assets/images/casestudy1.jfif",
        "category" => "Technology",
        "title" => "Digital Transformation for TechInnovate",
        "challenge" => "Enhance digital presence and reach a wider audience",
        "solution" => "Comprehensive digital marketing strategy with targeted approach",
        "results" => "150% increase in website traffic, 40% boost in lead generation"
    ],
    [
        "image" => "assets/images/casestudy2.jfif",
        "category" => "Data",
        "title" => "Data Insights for DataDrive Solutions",
        "challenge" => "Required deeper insights into their market",
        "solution" => "Advanced data scraping services that delivered actionable insights",
        "results" => "30% increase in revenue through new market opportunities"
    ],
    [
        "image" => "assets/images/casestudy3.jfif",
        "category" => "Finance",
        "title" => "Financial Clarity for GrowthEdge",
        "challenge" => "Faced challenges in financial planning and clarity",
        "solution" => "Streamlined financial planning and bookkeeping system",
        "results" => "25% reduction in operational costs and improved clarity"
    ],
    [
        "image" => "assets/images/casestudy4.jfif",
        "category" => "Marketing",
        "title" => "Marketing Strategy for BrandBoost",
        "challenge" => "Needed to revamp marketing strategy to increase brand awareness",
        "solution" => "Developed a multi-channel marketing campaign",
        "results" => "60% increase in brand awareness, 80% engagement on social media"
    ],
    [
        "image" => "assets/images/casestudy5.jfif",
        "category" => "E-commerce",
        "title" => "E-commerce Optimization for ShopSmart",
        "challenge" => "Needed to improve online sales conversion rates",
        "solution" => "Optimized website for user experience and A/B testing",
        "results" => "50% increase in conversion rates, 35% increase in sales"
    ],
    [
        "image" => "assets/images/casestudy6.jfif",
        "category" => "Engagement",
        "title" => "Customer Engagement for EngagePlus",
        "challenge" => "Needed to enhance customer engagement and retention",
        "solution" => "Implemented a customer loyalty program and personalized marketing strategies",
        "results" => "40% increase in customer retention, 70% increase in engagement rates"
    ]
];
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
            Unleashing Potential
            <span class="block text-yellow-300 mt-2">Through Innovative Case Studies</span>
        </h1>
        <p class="text-sm sm:text-lg md:text-2xl mt-4 mb-6 sm:mb-8 text-gray-200  mx-auto font-light animate-fadeIn">
            Discover how our tailored solutions have transformed challenges into <br />success stories across diverse
            industries.
        </p>

        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 animate-fadeIn">
            <a href="#case-studies"
                class="btn-primary bg-white text-blue-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition-all transform hover:-translate-y-1 shadow-lg">
                Explore Case Studies
            </a>
            <a href="<?php echo $base_url; ?>contactus"
                class="btn-secondary border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-blue-600 transition-all transform hover:-translate-y-1">
                Get in Touch
            </a>
        </div>
    </div>
</section>
<section id="case-studies" class="case-study-content py-16 pt-28 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-6xl font-bold text-gray-800 mb-2">Our Success Stories</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Explore how we've transformed businesses across various industries through innovative solutions and
                strategic approaches.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 pt-10">
            <?php foreach ($caseStudies as $caseStudy): ?>
                <div class="case-study-card bg-white rounded-xl shadow-lg overflow-hidden w-full max-w-md">
                    <!-- Image Container with Fixed Height -->
                    <div class="relative h-56">
                        <img src="<?php echo htmlspecialchars($caseStudy['image']); ?>"
                            alt="<?php echo htmlspecialchars($caseStudy['title']); ?>" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm">
                            <?php echo htmlspecialchars($caseStudy['category']); ?>
                        </div>
                    </div>

                    <!-- Content Container -->
                    <div class="p-6">
                        <!-- Title with Fixed Height -->
                        <div class="h-20 mb-4">
                            <h3 class="text-2xl font-bold text-gray-800 line-clamp-2">
                                <?php echo htmlspecialchars($caseStudy['title']); ?>
                            </h3>
                        </div>

                        <!-- Challenge Section -->
                        <div class="mb-4 h-24">
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="text-gray-600 font-medium">Challenge</span>
                            </div>
                            <p class="text-gray-700 line-clamp-2">
                                <?php echo htmlspecialchars($caseStudy['challenge']); ?>
                            </p>
                        </div>

                        <!-- Solution Section -->
                        <div class="mb-4 h-24">
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z">
                                    </path>
                                </svg>
                                <span class="text-gray-600 font-medium">Solution</span>
                            </div>
                            <p class="text-gray-700 line-clamp-2">
                                <?php echo htmlspecialchars($caseStudy['solution']); ?>
                            </p>
                        </div>

                        <!-- Results Section -->
                        <div class="h-24">
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6">
                                    </path>
                                </svg>
                                <span class="text-gray-600 font-medium">Results</span>
                            </div>
                            <p class="text-gray-700 line-clamp-2">
                                <?php echo htmlspecialchars($caseStudy['results']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
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
<section class="final-cta py-16 bg-gray-100">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Ready to See Your Business Thrive?
        </h2>
        <p class="text-lg text-gray-600 mb-8">
            We understand the challenges you face. Our team is here to provide the expert guidance and support you need
            to achieve your goals. Let's connect and discuss how we can help you reach new heights.
        <div class="mt-6"> <!-- Added margin-top for spacing -->
            <a href="<?php echo $base_url; ?>contactus"
                class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-all duration-300 shadow-lg">
                Contact Us Now
            </a>
        </div>
    </div>
</section>

<style>
    .final-cta {
        background-color: #f7fafc;
        /* Light gray background */
    }

    .final-cta h2 {
        color: #1d4ed8;
        /* Deep blue for the heading */
    }

    .final-cta p {
        max-width: 600px;
        /* Limit width for better readability */
        margin: 0 auto;
        /* Center the paragraph */
    }
</style>

<?php

include 'includes/footer.php';
?>