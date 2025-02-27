<?php
ob_start();
require 'vendor/autoload.php';

use Google\Client;
use Google\Service\Sheets;

putenv('GOOGLE_APPLICATION_CREDENTIALS=public/credentials.json');

function EmailSubscirbeGoogleSheet($data)
{
    $client = new Client();
    $client->setApplicationName("Google Sheets API with PHP");
    $client->setScopes([Sheets::SPREADSHEETS]);
    $client->setAuthConfig(getenv('GOOGLE_APPLICATION_CREDENTIALS'));
    $client->setAccessType('offline');

    $service = new Sheets($client);
    $spreadsheetId = "1bid_DOHoTTovk143U2bhGSDIf4pnOeQXsIiakhBcruM"; // Replace with your sheet ID
    $range = "EmailSubscribe!A:B"; // Adjust based on your sheet structure

    $body = new Google_Service_Sheets_ValueRange([
        'values' => [$data]
    ]);
    $params = ['valueInputOption' => 'RAW'];

    try {
        $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
    } catch (Exception $e) {
        // Log error if needed
    }
}

// Capture form data and call the function
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["subscribeemail"]) && $_POST["subscribeemail"] != "") {
    $subscribedata = [
        $_POST["subscribeemail"] ?? "",
        date('Y-m-d H:i:s')
    ];

    EmailSubscirbeGoogleSheet($subscribedata);
}
?>
<style>
    .logo img {
        width: 80px;
        height: 60px;
    }

    .custom-selection::selection {
        background-color: transparent;
        color: #F2994A;
        /* Change this to your desired text color */
    }

    .custom-selection ::selection {
        color: #F2994A;
        /* Ensures the link text color also changes */
    }
</style>
<footer class="bg-gradient-to-r from-blue-600 to-purple-700 text-white py-12">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Company Info -->
        <div>
            <div class="logo flex py-4">
                <a href="">
                    <img src="assets/images/mainlogo2.png" style="width: 150px;" alt="AJSAgency">
                </a>
            </div>
            <p class="text-lg mb-4 custom-selection">
                Transforming businesses through innovative digital solutions, strategic partnerships,
                and cutting-edge technology.
            </p>
            <div class="mt-4 space-y-3">
                <a href="<?php echo $base_url; ?>contactus" class="bg-highlight text-black inline-block px-4 py-2 rounded-lg">
                    Schedule Consultation
                </a>
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-highlight-color" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Headquartered in Jamnagar, Gujarat, India</span>
                </div>
            </div>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="font-semibold text-lg mb-4">Quick Navigation</h4>
            <ul class="space-y-2">
                <li><a href="<?php echo $base_url; ?>"
                        class="text-white hover:text-highlight-color transition-colors">Home</a></li>
                <li><a href="<?php echo $base_url; ?>about"
                        class="text-white hover:text-highlight-color transition-colors">About Us</a></li>
                        <li><a href="<?php echo $base_url; ?>service"
                        class="text-white hover:text-highlight-color transition-colors">Our Services</a></li>
                <li><a href="<?php echo $base_url; ?>casestudy"
                        class="text-white hover:text-highlight-color transition-colors">Case Studies</a></li>
                <li><a href="<?php echo $base_url; ?>contactus"
                        class="text-white hover:text-highlight-color transition-colors">Contact</a></li>
            </ul>
        </div>

        <!-- Detailed Contact Info -->
        <div>
            <h4 class="font-semibold text-lg mb-4">Contact Details</h4>
            <div class="space-y-3">
                <div class="flex items-start space-x-3 custom-selection">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-highlight-color" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <div>
                        <p>Email:
                            <span><a href="mailto:ajay@ajsagency.com" class="hover:underline"
                                    title="Mail To">ajay@ajsagency.com</a><br /><span class="text-sm"></span></span>
                        </p>
                    </div>
                </div>


                <div class="flex items-start space-x-3 custom-selection">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-highlight-color" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <div>
                        <p>Main:
                            <span><a href="tel:+917878141436" class="hover:underline"
                                    title="Tel">+917878141436</a></span>
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-3 custom-selection">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-highlight-color" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>
                        <p>S-2, Momai Complex, Near Poojara Telecom, Opp SBI Bank, Khodiyar Colony,</p>
                        <p>Jamnagar, Gujarat, India - 361006</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter and Social Media -->
        <div>
            <h4 class="font-semibold text-lg mb-4">Stay Connected</h4>

            <!-- Newsletter Signup -->
            <div class="mb-6">
                <p class="text-sm mb-2">Subscribe to our newsletter for updates</p>
                <form class="flex" method="post">
                    <input type="email" id="subscribeemail" name="subscribeemail" placeholder="Enter your email"
                        class="w-full px-3 py-2 rounded-l-lg text-black">

                    <button type="submit" class="bg-highlight text-black px-4 rounded-r-lg">Subscribe</button>
                </form>
            </div>

            <!-- Social Media Links -->
            <div>
                <h5 class="font-medium mb-2">Follow Our Journey</h5>
                <div class="flex space-x-4">
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/ajay-vora/" target="_blank"
                        class="social-icon text-white hover:text-blue-500 transition-colors">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <!-- Twitter -->
                    <a href="https://www.facebook.com/share/16DJWK7Eqq/?mibextid=wwXIfr" target="_blank"
                        class="social-icon text-white hover:text-blue-500 transition-colors">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <!-- WhatsApp -->
                    <a href="https://api.whatsapp.com/send/?phone=917878141436&text=Hey%Ajay&type=phone_number&app_absent=0"
                        target="_blank" class="social-icon text-white hover:text-blue-500 transition-colors">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/_ajs_agency_/" target="_blank"
                        class="social-icon text-white hover:text-blue-500 transition-colors">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
            </div>
            <style>
                .social-icon {
                    outline: none !important;
                    box-shadow: none !important;
                }
            </style>
        </div>
    </div>
    </div>

    <!-- Footer Bottom -->
    <div class="container mx-auto px-4 mt-8 border-t border-opacity-20 pt-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left mb-4 md:mb-0">
                <p class="text-sm">
                    &copy; 2023 AJ's Agency. All Rights Reserved.
                </p>
            </div>

            <div class="flex space-x-4">
                <a href="privacy-policy.php" class="text-white hover:text-highlight-color text-sm transition-colors">
                    Privacy Policy
                </a>
                <a href="terms-of-service.php" class="text-white hover:text-highlight-color text-sm transition-colors">
                    Terms of Service
                </a>
                <a href="sitemap.php" class="text-white hover:text-highlight-color text-sm transition-colors">
                    Sitemap
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<button id="scroll-to-top" aria-label="Scroll to Top"
    class="fixed bottom-6 right-6 bg-secondary-color text-Blue 600 p-3 rounded-full shadow-lg hover:bg-opacity-90 transition-all hidden z-50">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
</button>

<!-- Performance and Accessibility Scripts -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Scroll to Top Functionality
        const scrollToTopButton = document.getElementById('scroll-to-top');

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 300) {
                scrollToTopButton.classList.remove('hidden');
            } else {
                scrollToTopButton.classList.add('hidden');
            }
        });

        scrollToTopButton.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        // Accessibility Enhancements
        // Add focus styles to interactive elements
        const interactiveElements = document.querySelectorAll('a, button, input, select');
        interactiveElements.forEach(element => {
            element.addEventListener('focus', function () {
                this.classList.add('focus:outline-none', 'focus:ring-2', 'focus:ring-highlight-color');
            });
            element.addEventListener('blur', function () {
                this.classList.remove('focus:outline-none', 'focus:ring-2', 'focus:ring-highlight-color');
            });
        });
    });
</script>
</body>

</html>