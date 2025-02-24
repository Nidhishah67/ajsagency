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
            Transforming Digital
            <span class="block text-yellow-300 mt-2">Landscapes with Precision</span>
        </h1>
        <p class="text-sm sm:text-lg md:text-2xl mt-4 mb-6 sm:mb-8 text-gray-200 mx-auto font-light animate-fadeIn">
            We blend innovative technology with strategic thinking to deliver <br /> exceptional digital solutions that
            drive business growth.
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

<!-- Enhanced JavaScript for Subtle Animations -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const heroContent = document.querySelector('.hero-content');

        // Subtle Fade and Slide In Animation
        heroContent.style.opacity = 0;
        heroContent.style.transform = 'translateY(20px)';

        setTimeout(() => {
            heroContent.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            heroContent.style.opacity = 1;
            heroContent.style.transform = 'translateY(0)';
        }, 200);

        // Button Hover Effects
        const buttons = document.querySelectorAll('.px-8');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', () => {
                button.style.transform = 'translateY(-5px)';
            });
            button.addEventListener('mouseleave', () => {
                button.style.transform = 'translateY(0)';
            });
        });
    });
</script>

<style>
    .about-hero {
        position: relative;
        overflow: hidden;
    }

    .about-hero::before {
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

<section id="about" class="relative py-20 bg-white overflow-hidden">
    <!-- Section Header -->
    <div class="container mx-auto px-4 mb-16">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-4xl font-bold font-heading mb-6 animate-slide-up" style="color: #1d4ed8;">
                Where Passion Meets Innovation
            </h2>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4">
        <!-- Vision & Mission -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
            <div class="bg-gray-100 p-8 rounded-2xl border border-gray-100 animate-slide-right">
                <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-rocket text-2xl text-blue-500"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">The Spark of a Dream</h3>
                <p class="text-gray-600">
                    We didn't start with a business plan. We started with a burning desire to solve real problems. Born
                    from late-night conversations and shared frustrations, our agency emerged from a simple belief:
                    technology should empower, not complicate.
                </p>
            </div>

            <div class="bg-gray-100 p-8 rounded-2xl border border-gray-100 animate-slide-left">
                <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-lightbulb text-2xl text-green-500"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Beyond Solutions, Creating Possibilities</h3>
                <p class="text-gray-600">
                    Every project is more than a contract—it's a partnership. We don't just deliver services; we craft
                    experiences that transform businesses. Our team doesn't ask "What can we do?" but "What could be
                    possible?"
                </p>
            </div>
            <div class="bg-gray-100 p-8 rounded-2xl border border-gray-100 animate-slide-left">
                <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-chart-line text-2xl text-purple-500"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Evolving, Always Learning</h3>
                <p class="text-gray-600">
                    The moment we think we know everything is the moment we become obsolete. We embrace uncertainty,
                    celebrate learning, and view every challenge as an opportunity to grow, innovate, and redefine
                    what's possible.
                </p>
            </div>
            <div class="bg-gray-100 p-8 rounded-2xl border border-gray-100 animate-slide-right">
                <div class="w-14 h-14 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-handshake text-2xl text-yellow-500"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Building Trust, One Step at a Time</h3>
                <p class="text-gray-600">
                    Success isn’t just about innovation—it’s about trust. We believe in transparent communication,
                    reliability, and long-term partnerships. Every project we take on is a commitment to delivering
                    excellence with integrity.
                </p>
            </div>

        </div>
    </div>
</section>
<section class="mission-values py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-2" style="color: #1d4ed8;">
                Our Mission & Core Values
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We're more than just a technology company. We're architects of digital transformation, committed to
                empowering businesses through innovative solutions and unwavering principles.
            </p>
        </div>



        <!-- Extended Values -->
        <div class="additional-values pt-12">
            <div class="grid md:grid-cols-3 gap-6">
                <div class="value-item text-center">
                    <div class="text-3xl text-blue-600 mb-4">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-3">Our Mission</h4>
                    <p class="text-gray-600">
                        To revolutionize digital landscapes by delivering cutting-edge solutions that transform
                        challenges into opportunities, empowering businesses to achieve unprecedented growth and
                        innovation.
                    </p>
                </div>
                <div class="value-item text-center">
                    <div class="text-3xl text-green-600 mb-4">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-3">Passion-Driven</h4>
                    <p class="text-gray-600">
                        e approach every project with genuine passion, believing that true innovation stems from deep
                        commitment and emotional investment in our clients' success.
                    </p>
                </div>
                <div class="value-item text-center">
                    <div class="text-3xl text-purple-600 mb-4">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-3">Innovative Spirit</h4>
                    <p class="text-gray-600">
                        We continuously push boundaries, embracing emerging technologies and creative thinking to
                        deliver solutions that are not just effective, but transformative.
                    </p>
                </div>
                <div class="value-item text-center">
                    <div class="text-3xl text-red-500 mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-3">Collaborative Approach</h4>
                    <p class="text-gray-600">
                        We believe in the power of collaboration, bringing together diverse talents to create holistic
                        solutions.
                    </p>
                </div>
                <div class="value-item text-center">
                    <div class="text-3xl text-yellow-500 mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-3">Integrity First</h4>
                    <p class="text-gray-600">
                        Transparency, honesty, and ethical practices are the foundation of every relationship we build.
                    </p>
                </div>
                <div class="value-item text-center">
                    <div class="text-3xl text-indigo-500 mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4 class="text-xl font-semibold mb-3">Continuous Growth</h4>
                    <p class="text-gray-600">
                        We are committed to constant learning, adapting, and evolving in the dynamic digital landscape.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .mission-card,
    .values-card,
    .innovation-card {
        transition: all 0.4s ease;
        will-change: transform, box-shadow;
    }

    .mission-card:hover,
    .values-card:hover,
    .innovation-card:hover {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
    }

    .value-item {
        transition: transform 0.3s ease;
    }

    .value-item:hover {
        transform: translateY(-10px);
    }

    @media (max-width: 768px) {
        .mission-values .grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cards = document.querySelectorAll('.mission-card, .values-card, .innovation-card');

        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'scale(1.05)';
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'scale(1)';
            });
        });
    });
</script>
<section class="final-cta py-16 bg-gray-100">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">
            Ready to Transform Your Business?
        </h2>
        <p class="text-lg text-gray-600 mb-8">
            Join us on a journey of innovation and growth. Let’s work together to turn your vision into reality.
        </p>
        <div class="pt-10"> <!-- Added margin-top for spacing -->
            <a href="<?php echo $base_url; ?>contactus"
                class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-all duration-300 shadow-lg">
                Get Started Today
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
ob_start();
include __DIR__ . '/../includes/footer.php';
?>