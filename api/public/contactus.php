<?php
ob_start();

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../vendor/autoload.php';


use Google\Client;
use Google\Service\Sheets;

putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/../public/credentials.json');
function addToGoogleSheet($data)
{
    $client = new Client();
    $client->setApplicationName("Google Sheets API with PHP");
    $client->setScopes([Sheets::SPREADSHEETS]);
    $client->setAuthConfig(getenv('GOOGLE_APPLICATION_CREDENTIALS'));
    $client->setAccessType('offline');

    $service = new Sheets($client);
    $spreadsheetId = "1bid_DOHoTTovk143U2bhGSDIf4pnOeQXsIiakhBcruM"; // Replace with your sheet ID
    $range = "ContactForm!A:H"; // Adjust based on your sheet structure

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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["firstname"]) && $_POST["firstname"] != "") {

    $data = [
        $_POST["firstname"] ?? "",
        $_POST["lastname"] ?? "",
        $_POST["company"] ?? "",
        $_POST["email"] ?? "",
        $_POST["phone"] ?? "",
        $_POST["subject"] ?? "",
        $_POST["message"] ?? "",
        date('Y-m-d H:i:s')
    ];

    addToGoogleSheet($data);
}
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
  .custom-selection::selection {
    background-color: transparent;
    color: #F2994A; /* Change this to your desired text color */
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
            Connect with Us
            <span class="block text-highlight mt-2">Your Journey Starts Here</span>
        </h1>
        <p class="text-sm sm:text-lg md:text-2xl mt-4 mb-6 sm:mb-8 text-gray-200  mx-auto font-light animate-fadeIn">
            We are here to assist you with any inquiries. Let’s work together to achieve your goals!
        </p>
        <blockquote id="dailyQuote" class="text-lg italic text-highlight mb-6">
            <!-- Quote will be inserted here by JavaScript -->
        </blockquote>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 animate-fadeIn">
            <a href="<?php echo $base_url; ?>contactus"
                class="px-6 py-3 bg-highlight border-2 border-highlight  text-maintext rounded-full font-semibold hover:bg-highlight transition-all duration-300">
                Get Started
            </a>
            <a href="<?php echo $base_url; ?>service"
                class="px-6 py-3 border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-indigo-600 transition-all duration-300">
                View Services
            </a>
        </div>
    </div>
</section>

<script>
    // Array of motivational quotes
    const quotes = [
        "Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful. – Albert Schweitzer",
        "The future belongs to those who believe in the beauty of their dreams. – Eleanor Roosevelt",
        "Your limitation—it's only your imagination.",
        "Dream it. Wish it. Do it.",
        "Success doesn’t just find you. You have to go out and get it."
    ];

    // Function to get a quote based on the current date
    function getDailyQuote() {
        const today = new Date();
        const dayOfYear = today.getDate() + (today.getMonth() * 31); // Simple way to get a unique number for each day
        const quoteIndex = dayOfYear % quotes.length; // Cycle through quotes
        return quotes[quoteIndex];
    }

    // Set the quote in the hero section
    document.getElementById('dailyQuote').innerText = getDailyQuote();
</script>

<section class="py-16 bg-white pt-28" id="contact-form">
<div class="container mx-auto px-4 ">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Form -->
       
        <div class="bg-gray-100 rounded-2xl border border-gray-100 p-8 animate-slide-right">
          <form  id="contactForm" method="post" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="firstname" class="block text-sm font-medium text-gray-700 mb-2">First Name<span class="text-red-500">*</span></label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter First Name" class="w-full px-4 py-3 rounded-lg text-black outline-none border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" required>
              </div>
              <div>
                <label for="lastname" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" class="w-full px-4 py-3 rounded-lg text-black outline-none border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors">
              </div>
            </div>
           
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address<span class="text-red-500">*</span></label>
              <input type="email" id="email" name="email" placeholder="Enter Email" class="w-full px-4 py-3 rounded-lg text-black outline-none border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" required>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                <input type="text" id="company" name="company" placeholder="Enter Company Name" class="w-full px-4 py-3 rounded-lg text-black outline-none border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors">
              </div>
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number<span class="text-red-500">*</span></label>
                <input type="text" id="phone" name="phone" placeholder="Enter Last Name" class="w-full px-4 py-3 rounded-lg text-black outline-none border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" required>
              </div>
            </div>
          

            <div>
            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject<span class="text-red-500">*</span></label>
            <input type="text" id="subject" name="subject" placeholder="Enter Subject" class="w-full px-4 py-3 rounded-lg text-black  outline-none border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" required>
            </div>

            <div>
              <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message<span class="text-red-500">*</span></label>
              <textarea id="message" name="message" rows="4" placeholder="Enter Your Message" class="w-full px-4 py-3 outline-none rounded-lg text-black border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" required></textarea>
            </div>

            <button type="submit" name="submit" class="w-full bg-blue-500 hover:bg-primary-600 text-white font-semibold px-6 py-3 rounded-lg text-black transition-colors">
            Get Quote / Contact Our Experts
            </button>
          </form>
        </div>

        <!-- Contact Information -->
        <div class="space-y-8 lg:pl-8 animate-slide-left">
          <!-- Contact Methods -->
          <div class="bg-gray-100 rounded-2xl border border-gray-100 p-8">
            <h3 class="text-2xl font-bold mb-6 text-black">Contact Information</h3>
            <div class="space-y-6">
              <div class="flex items-start space-x-4">
                <div class="w-10 h-10  flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-phone text-2xl text-blue-500"></i>
                </div>
                <div>
                  <h4 class="font-semibold mb-1 text-black">Phone</h4>
                  <p class="text-gray-700 custom-selection">+91 7878 141436</p>
                </div>
              </div>
              
              <div class="flex items-start space-x-4">
                <div class="w-10 h-10  flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-envelope text-2xl text-blue-500"></i>
                </div>
                <div>
                  <h4 class="font-semibold mb-1 text-black">Email</h4>
                  <a href="mailto:ajay@ajsagency.co" class="text-gray-700 custom-selection hover:underline" title="Mail To">ajay@ajsagency.co</a>
                </div>
              </div>
              <div class="flex items-start space-x-4">
                <div class="w-10 h-10  flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-location-dot text-2xl text-blue-500"></i>
                </div>
                <div>
                  <h4 class="font-semibold mb-1 text-black">Office</h4>
                  <p class="text-gray-700 custom-selection">S-2, Momai Complex, Near Poojara Telecom, Opp SBI Bank, Khodiyar
                  Colony,Jamnagar - 361006.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Business Hours -->
          <div class="bg-gray-100 rounded-2xl border border-gray-100 p-8">
            <h3 class="text-2xl font-bold mb-6 text-black">Business Hours</h3>
            <div class="space-y-4">
              <div class="flex justify-between">
                <span class="text-gray-700">Monday - Saturday</span>
                <span class="font-semibold text-black">9:30 AM - 08:00 PM</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-700">Sunday</span>
                <span class="font-semibold text-black">Closed</span>
              </div>
            </div>
          </div>

          <!-- Social Media -->
          <div class="flex justify-center space-x-6">
            <a href="https://www.linkedin.com/in/ajay-vora/" target="_blank" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
              <i class="fab fa-linkedin-in text-blue-500 text-xl"></i>
            </a>
            <a href="https://www.facebook.com/share/16DJWK7Eqq/?mibextid=wwXIfr" target="_blank" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
              <i class="fab fa-facebook text-blue-500 text-xl"></i>
            </a>
            <a href="https://api.whatsapp.com/send/?phone=917878141436&text=Hey%Ajay&type=phone_number&app_absent=0" target="_blank" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
              <i class="fab fa-whatsapp text-blue-500 text-xl"></i>
            </a>
            <a href="https://www.instagram.com/_ajs_agency_/" target="_blank" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors">
              <i class="fab fa-instagram text-blue-500 text-xl"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
</section>
<?php
include __DIR__ . '/../includes/footer.php';
?>
