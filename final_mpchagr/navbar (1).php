<!DOCTYPE html>
<html>
<head>
<title>Nav</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
    />
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: { primary: "#003366", secondary: "#FFB800" },
            borderRadius: {
              none: "0px",
              sm: "4px",
              DEFAULT: "8px",
              md: "12px",
              lg: "16px",
              xl: "20px",
              "2xl": "24px",
              "3xl": "32px",
              full: "9999px",
              button: "8px",
            },
          },
        },
      };
    </script>
    <style>
      :where([class^="ri-"])::before { content: "\f3c2"; }

      body {
          font-family: 'Roboto', sans-serif;
          scroll-behavior: smooth;
      }

      h1, h2, h3, h4, h5, h6 {
          font-family: 'Poppins', sans-serif;
      }

      .hero-slider {
          position: relative;
          height: 600px;
          overflow: hidden;
      }

      .slide {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          opacity: 0;
          transition: opacity 1s ease-in-out;
          background-size: cover;
          background-position: center;
      }

      .slide.active {
          opacity: 1;
      }

      .slide-overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.5);
          display: flex;
          align-items: center;
          justify-content: center;
      }

      .dropdown {
          position: relative;
          display: inline-block;
      }

      .dropdown-content {
          display: none;
          position: absolute;
          min-width: 200px;
          z-index: 50;
          top: 100%;
          left: 0;
      }

      .dropdown:hover .dropdown-content {
          display: block;
      }

      .nav-link {
          position: relative;
      }

      .nav-link::after {
          content: '';
          position: absolute;
          width: 0;
          height: 2px;
          bottom: -4px;
          left: 0;
          background-color: #FFB800;
          transition: width 0.3s ease;
      }

      .nav-link:hover::after {
          width: 100%;
      }

      .fade-in {
          opacity: 0;
          transform: translateY(20px);
          transition: opacity 0.6s ease, transform 0.6s ease;
      }

      .fade-in.visible {
          opacity: 1;
          transform: translateY(0);
      }

      .program-card {
          transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .program-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      }

      .mobile-menu {
          transform: translateX(-100%);
          transition: transform 0.3s ease;
      }

      .mobile-menu.open {
          transform: translateX(0);
      }

      input[type="checkbox"] {
          appearance: none;
          -webkit-appearance: none;
          height: 20px;
          width: 20px;
          background-color: #fff;
          border: 1px solid #ccc;
          border-radius: 4px;
          cursor: pointer;
          display: flex;
          align-items: center;
          justify-content: center;
          outline: none;
      }

      input[type="checkbox"]:checked {
          background-color: #003366;
          border-color: #003366;
      }

      input[type="checkbox"]:checked::before {
          content: '\2713';
          color: white;
          font-size: 14px;
      }

      .custom-switch {
          position: relative;
          display: inline-block;
          width: 50px;
          height: 24px;
      }

      .custom-switch input {
          opacity: 0;
          width: 0;
          height: 0;
      }

      .switch-slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          transition: .4s;
          border-radius: 34px;
      }

      .switch-slider:before {
          position: absolute;
          content: "";
          height: 18px;
          width: 18px;
          left: 3px;
          bottom: 3px;
          background-color: white;
          transition: .4s;
          border-radius: 50%;
      }

      input:checked + .switch-slider {
          background-color: #003366;
      }

      input:checked + .switch-slider:before {
          transform: translateX(26px);
      }

      input[type="range"] {
          -webkit-appearance: none;
          width: 100%;
          height: 6px;
          background: #e0e0e0;
          border-radius: 5px;
          outline: none;
      }

      input[type="range"]::-webkit-slider-thumb {
          -webkit-appearance: none;
          appearance: none;
          width: 18px;
          height: 18px;
          background: #003366;
          border-radius: 50%;
          cursor: pointer;
      }

      input[type="range"]::-moz-range-thumb {
          width: 18px;
          height: 18px;
          background: #003366;
          border-radius: 50%;
          cursor: pointer;
          border: none;
      }

      .gallery-item {
          overflow: hidden;
      }

      .gallery-item img {
          transition: transform 0.5s ease;
      }

      .gallery-item:hover img {
          transform: scale(1.05);
      }

      .news-card {
          transition: transform 0.3s ease;
      }

      .news-card:hover {
          transform: translateY(-5px);
      }

      .counter-item {
          text-align: center;
      }

      @media (max-width: 768px) {
          .hero-slider {
              height: 400px;
          }
      }
    </style>
</head>

<body>
 <!-- Top Contact Bar -->
    <div class="bg-[#003366] text-white py-2 px-4">
      <div
        class="container mx-auto flex flex-wrap justify-between items-center"
      >
        <div class="flex items-center space-x-4">
          <div class="flex items-center">
            <div class="w-5 h-5 flex items-center justify-center mr-1">
              <i class="ri-phone-line text-sm"></i>
            </div>
            <span class="text-sm">+1 (234) 567-8900</span>
          </div>
          <div class="flex items-center">
            <div class="w-5 h-5 flex items-center justify-center mr-1">
              <i class="ri-mail-line text-sm"></i>
            </div>
            <span class="text-sm">admissions@eduinstitute.edu</span>
          </div>
        </div>
        <div class="flex space-x-3">
          <a
            href="#"
            class="w-6 h-6 flex items-center justify-center rounded-full bg-[#335c85] bg-opacity-20 hover:bg-opacity-30 transition"
          >
            <i class="ri-facebook-fill text-sm"></i>
          </a>
          <a
            href="#"
            class="w-6 h-6 flex items-center justify-center rounded-full bg-[#335c85] bg-opacity-20 hover:bg-opacity-30 transition"
          >
            <i class="ri-twitter-fill text-sm"></i>
          </a>
          <a
            href="#"
            class="w-6 h-6 flex items-center justify-center rounded-full bg-[#335c85] bg-opacity-20 hover:bg-opacity-30 transition"
          >
            <i class="ri-instagram-line text-sm"></i>
          </a>
          <a
            href="#"
            class="w-6 h-6 flex items-center justify-center rounded-full bg-[#335c85] bg-opacity-20 hover:bg-opacity-30 transition"
          >
            <i class="ri-linkedin-fill text-sm"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Main Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
      <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
          <a href="index.php" class="font-['Pacifico'] text-3xl text-primary"
            ><img src="./images/image.jpg" class="w-14 py-2" alt="" srcset=""></a
          >

          <!-- Desktop Navigation -->
          <nav class="hidden md:flex items-center space-x-8">
            <a
              href="index.php"
              class="nav-link font-medium text-gray-800 hover:text-primary transition"
              >Home</a
            >
            <a
              href="about.php"
              class="nav-link font-medium text-gray-800 hover:text-primary transition"
              >About Us</a
            >
            <div class="dropdown">
              <a
                href="#"
                class="nav-link font-medium text-gray-800 hover:text-primary transition flex items-center"
              >
                Programs
                <div class="w-4 h-4 flex items-center justify-center ml-1">
                  <i class="ri-arrow-down-s-line"></i>
                </div>
              </a>
              <div
                class="dropdown-content bg-white shadow-lg rounded-md mt-1 py-2"
              >
                <a
                  href="paramedical.php"
                  class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
                  >Paramedical Science</a
                >
                <a
                  href="nursing.php"
                  class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
                  >School of Nursing</a
                >
              </div>
            </div>
            <!-- <a
              href="paramedical.php"
              class="nav-link font-medium text-gray-800 hover:text-primary transition"
              >Paramedical Science</a
            >
            <a
              href="nursing.php"
              class="nav-link font-medium text-gray-800 hover:text-primary transition"
              >School of Nursing</a
            > -->
            <a
              href="campus.php"
              class="nav-link font-medium text-gray-800 hover:text-primary transition"
              >Campus Life</a
            >
            <a
              href="admission.php"
              class="nav-link font-medium text-gray-800 hover:text-primary transition"
              >Admission</a
            >
            <a
              href="enquiryform.php"
              class="nav-link font-medium text-gray-800 hover:text-primary transition"
              >Contact</a
            >
          </nav>

          <!-- Apply Now Button -->
          <a
            href="admission.php"
            class="hidden md:block bg-[#FFB800] hover:bg-opacity-90 text-white px-6 py-2 rounded-button font-medium transition whitespace-nowrap"
            >Apply Now</a
          >

          <!-- Mobile Menu Button -->
          <button
            id="menu-toggle"
            class="md:hidden w-10 h-10 flex items-center justify-center text-gray-700"
          >
            <i class="ri-menu-line text-2xl"></i>
          </button>
        </div>
      </div>
    </header>
    <!-- Mobile Navigation Menu -->
    <div
      id="mobile-menu"
      class="mobile-menu fixed top-0 left-0 h-full w-4/5 bg-white shadow-lg z-50 p-5 overflow-y-auto"
    >
      <div class="flex justify-between items-center mb-8">
        <a href="index.php" class="font-['Pacifico'] text-2xl text-primary"
          ><img src="./images/image.jpg" class="w-14 py-2" alt="" srcset=""></a
        >
        <button
          id="close-menu"
          class="w-8 h-8 flex items-center justify-center text-gray-700"
        >
          <i class="ri-close-line text-2xl"></i>
        </button>
      </div>
      <nav class="flex flex-col space-y-4">
        <a
          href="index.php"
          class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary"
          >Home</a
        >
        <a
          href="about.php"
          class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary"
          >About Us</a
        >
        <div class="py-2 border-b border-gray-100">
          <div
            class="flex justify-between items-center text-gray-800 hover:text-primary cursor-pointer"
            id="mobile-dropdown-toggle"
          >
            <span>Programs</span>
            <div class="w-5 h-5 flex items-center justify-center">
              <i class="ri-arrow-down-s-line"></i>
            </div>
          </div>
          <div class="hidden pl-4 mt-2 space-y-2" id="mobile-dropdown-content">
            <a
              href="paramedical.php"
              class="block py-1 text-gray-700 hover:text-primary"
              >Paramedical Science</a
            >
            <a
              href="nursing.php"
              class="block py-1 text-gray-700 hover:text-primary"
              >School of Nursing</a
            >
          </div>
        </div>
        <!-- <a
          href="paramedical.php"
          class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary"
          >Paramedical Science</a
        >
        <a
          href="nursing.php"
          class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary"
          >School of Nursing</a
        > -->
        <a
          href="campus.php"
          class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary"
          >Campus Life</a
        >
        <a
          href="admission.php"
          class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary"
          >Admission</a
        >
        <a
          href="enquiryform.php"
          class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary"
          >Contact</a
        >
      </nav>
      <div class="mt-8">
        <a
          href="admission.php"
          class="block w-full bg-[#FFB800] hover:bg-opacity-90 text-white text-center px-4 py-3 rounded-button font-medium transition whitespace-nowrap"
          >Apply Now</a
        >
      </div>
    </div>



 <script id="slider-script">
      document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll(".slide");
        let currentSlide = 0;

        function showSlide(index) {
          slides.forEach((slide) => slide.classList.remove("active"));
          slides[index].classList.add("active");
        }

        function nextSlide() {
          currentSlide = (currentSlide + 1) % slides.length;
          showSlide(currentSlide);
        }

        // Initialize slider
        showSlide(currentSlide);

        // Auto-advance slides
        setInterval(nextSlide, 5000);
      });
    </script>


<script id="mobile-menu-script">
      document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menu-toggle");
        const closeMenu = document.getElementById("close-menu");
        const mobileMenu = document.getElementById("mobile-menu");
        const mobileDropdownToggle = document.getElementById(
          "mobile-dropdown-toggle",
        );
        const mobileDropdownContent = document.getElementById(
          "mobile-dropdown-content",
        );

        menuToggle.addEventListener("click", function () {
          mobileMenu.classList.add("open");
          document.body.style.overflow = "hidden";
        });

        closeMenu.addEventListener("click", function () {
          mobileMenu.classList.remove("open");
          document.body.style.overflow = "";
        });

        mobileDropdownToggle.addEventListener("click", function () {
          mobileDropdownContent.classList.toggle("hidden");
        });
      });
    </script>

    <script id="scroll-animation-script">
      document.addEventListener("DOMContentLoaded", function () {
        const fadeElements = document.querySelectorAll(".fade-in");

        function checkFade() {
          fadeElements.forEach((element) => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < window.innerHeight - elementVisible) {
              element.classList.add("visible");
            }
          });
        }

        // Initial check
        checkFade();

        // Check on scroll
        window.addEventListener("scroll", checkFade);
      });
    </script>
</body>

</html>