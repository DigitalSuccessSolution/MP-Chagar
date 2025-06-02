<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Educational Institute</title>
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
  <body class="bg-gray-50">
    <!-- Top Contact Bar -->
    <div class="bg-primary text-white py-2 px-4">
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
            class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition"
          >
            <i class="ri-facebook-fill text-sm"></i>
          </a>
          <a
            href="#"
            class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition"
          >
            <i class="ri-twitter-fill text-sm"></i>
          </a>
          <a
            href="#"
            class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition"
          >
            <i class="ri-instagram-line text-sm"></i>
          </a>
          <a
            href="#"
            class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition"
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
              href="contact.php"
              class="nav-link font-medium text-gray-800 hover:text-primary transition"
              >Contact</a
            >
          </nav>

          <!-- Apply Now Button -->
          <a
            href="admission.php"
            class="hidden md:block bg-secondary hover:bg-opacity-90 text-white px-6 py-2 rounded-button font-medium transition whitespace-nowrap"
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
          >logo</a
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
          href="contact.php"
          class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary"
          >Contact</a
        >
      </nav>
      <div class="mt-8">
        <a
          href="admission.php"
          class="block w-full bg-secondary hover:bg-opacity-90 text-white text-center px-4 py-3 rounded-button font-medium transition whitespace-nowrap"
          >Apply Now</a
        >
      </div>
    </div>

    <!-- Hero Slider -->
    <div class="hero-slider">
      <div
        class="slide active"
        style="background-image: url('https://readdy.ai/api/search-image?query=modern%20university%20campus%20with%20diverse%20students%20walking%20between%20buildings%2C%20beautiful%20architecture%2C%20sunny%20day%2C%20vibrant%20educational%20environment%2C%20professional%20high-quality%20photography&width=1600&height=800&seq=1&orientation=landscape')"
      >
        <div class="slide-overlay">
          <div class="container mx-auto px-4 text-center md:text-left md:w-1/2">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
              Excellence in Education
            </h1>
            <p class="text-xl text-white mb-8">
              Shaping the future through quality education and innovative
              learning
            </p>
            <div class="flex flex-wrap justify-center md:justify-start gap-4">
              <a
                href="admission.php"
                class="bg-secondary hover:bg-opacity-90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap"
                >Apply Now</a
              >
              <a
                href="about.php"
                class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white border border-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap"
                >Learn More</a
              >
            </div>
          </div>
        </div>
      </div>
      <div
        class="slide"
        style="background-image: url('https://readdy.ai/api/search-image?query=students%20in%20medical%20lab%20coats%20working%20with%20advanced%20medical%20equipment%2C%20healthcare%20education%20setting%2C%20bright%20modern%20laboratory%2C%20professional%20training%20environment%2C%20clinical%20skills%20practice&width=1600&height=800&seq=2&orientation=landscape')"
      >
        <div class="slide-overlay">
          <div class="container mx-auto px-4 text-center md:text-left md:w-1/2">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
              World-Class Healthcare Education
            </h1>
            <p class="text-xl text-white mb-8">
              Preparing the next generation of healthcare professionals
            </p>
            <div class="flex flex-wrap justify-center md:justify-start gap-4">
              <a
                href="paramedical.php"
                class="bg-secondary hover:bg-opacity-90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap"
                >Explore Programs</a
              >
              <a
                href="campus.php"
                class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white border border-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap"
                >Tour Campus</a
              >
            </div>
          </div>
        </div>
      </div>
      <div
        class="slide"
        style="background-image: url('https://readdy.ai/api/search-image?query=nursing%20students%20in%20uniform%20practicing%20patient%20care%20in%20a%20modern%20simulation%20hospital%20room%2C%20healthcare%20training%2C%20professional%20medical%20education%20environment%2C%20clinical%20skills%20development&width=1600&height=800&seq=3&orientation=landscape')"
      >
        <div class="slide-overlay">
          <div class="container mx-auto px-4 text-center md:text-left md:w-1/2">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
              School of Nursing Excellence
            </h1>
            <p class="text-xl text-white mb-8">
              Developing compassionate and skilled nursing professionals
            </p>
            <div class="flex flex-wrap justify-center md:justify-start gap-4">
              <a
                href="nursing.php"
                class="bg-secondary hover:bg-opacity-90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap"
                >Discover Nursing</a
              >
              <a
                href="admission.php"
                class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white border border-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap"
                >Admission Info</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Welcome Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12">
          <div class="md:w-1/2 fade-in">
            <img
              src="https://readdy.ai/api/search-image?query=modern%20educational%20campus%20building%20with%20glass%20facade%2C%20beautiful%20architecture%2C%20professional%20photograph%20of%20university%20main%20building%20with%20landscaped%20gardens%2C%20academic%20institution&width=600&height=400&seq=4&orientation=landscape"
              alt="Campus Building"
              class="rounded-lg shadow-lg w-full object-cover object-top"
            />
          </div>
          <div class="md:w-1/2 fade-in">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">
              Welcome to Our Educational Institute
            </h2>
            <div class="w-20 h-1 bg-secondary mb-6"></div>
            <p class="text-gray-700 mb-6">
           Welcome to MA Pitambara College, the first private college in District Agar Malwa, established to provide exceptional medical education. Our mission is to train competent healthcare professionals who can excel in diverse settings, from rural India to advanced hospitals worldwide. With a dedicated faculty, modern facilities including our 120-bedded Agar Malwa Hospital, robust financial support, and global affiliations with renowned institutions like Karolinska Institute and Bergen University, we are committed to fostering a meaningful and successful academic journey for our students. Join us to embark on a rewarding career in healthcare!</p>
            <!-- <p class="text-gray-700 mb-6">
              Our state-of-the-art facilities, experienced faculty, and industry
              partnerships ensure that our graduates are well-equipped to meet
              the challenges of the modern healthcare landscape.
            </p> -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
              <div class="flex items-start">
                <div
                  class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white mr-4"
                >
                  <i class="ri-award-line"></i>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800 mb-1">Excellence</h3>
                  <p class="text-gray-600 text-sm">
                    Committed to the highest standards in education
                  </p>
                </div>
              </div>
              <div class="flex items-start">
                <div
                  class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white mr-4"
                >
                  <i class="ri-user-heart-line"></i>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800 mb-1">Compassion</h3>
                  <p class="text-gray-600 text-sm">
                    Nurturing empathetic healthcare professionals
                  </p>
                </div>
              </div>
              <div class="flex items-start">
                <div
                  class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white mr-4"
                >
                  <i class="ri-flask-line"></i>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800 mb-1">Medical Professionals</h3>
                  <p class="text-gray-600 text-sm">
                    Embracing new technologies and methodologies
                  </p>
                </div>
              </div>
              <div class="flex items-start">
                <div
                  class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white mr-4"
                >
                  <i class="ri-team-line"></i>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800 mb-1">Community</h3>
                  <p class="text-gray-600 text-sm">
                    Building strong relationships and networks
                  </p>
                </div>
              </div>
            </div>
            <a
              href="about.php"
              class="inline-block bg-primary hover:bg-opacity-90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap"
              >Discover Our Story</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Programs Section -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Our Featured Programs
          </h2>
          <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Discover our comprehensive range of healthcare education programs
            designed to prepare you for a rewarding career in the medical field.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Paramedical Science Card -->
          <div
            class="program-card bg-white rounded-lg shadow-md overflow-hidden fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=medical%20laboratory%20technicians%20working%20with%20microscopes%20and%20lab%20equipment%2C%20paramedical%20science%20education%2C%20students%20in%20white%20lab%20coats%2C%20professional%20healthcare%20training%20environment&width=600&height=400&seq=5&orientation=landscape"
              alt="Paramedical Science"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-6">
              <h3 class="text-2xl font-bold text-gray-800 mb-3">
                Paramedical Science
              </h3>
              <p class="text-gray-700 mb-4">
                Our Paramedical Science programs provide comprehensive training
                in various diagnostic and therapeutic healthcare disciplines.
                Students gain hands-on experience with state-of-the-art
                equipment and technologies.
              </p>
              <div class="mb-6">
                <h4 class="font-semibold text-gray-800 mb-2">Key Courses:</h4>
                <ul class="space-y-1 text-gray-700">
                  <li class="flex items-center">
                    <div
                      class="w-4 h-4 flex items-center justify-center mr-2 text-primary"
                    >
                      <i class="ri-check-line"></i>
                    </div>
                  Bachelor of Physiotherapy

                  </li>
                  <li class="flex items-center">
                    <div
                      class="w-4 h-4 flex items-center justify-center mr-2 text-primary"
                    >
                      <i class="ri-check-line"></i>
                    </div>
                 Bachelor in Medical Lab. Technology
                  </li>
                  <li class="flex items-center">
                    <div
                      class="w-4 h-4 flex items-center justify-center mr-2 text-primary"
                    >
                      <i class="ri-check-line"></i>
                    </div>
                 Diploma in Medical Lab. Technician
                  </li>
                  <li class="flex items-center">
                    <div
                      class="w-4 h-4 flex items-center justify-center mr-2 text-primary"
                    >
                      <i class="ri-check-line"></i>
                    </div>
                Diploma In X-Ray Technician
                  </li>
                </ul>
              </div>
              <a
                href="paramedical.php"
                class="inline-block bg-primary hover:bg-opacity-90 text-white px-5 py-2 rounded-button font-medium transition whitespace-nowrap"
                >Explore Program</a
              >
            </div>
          </div>

          <!-- School of Nursing Card -->
          <div
            class="program-card bg-white rounded-lg shadow-md overflow-hidden fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=nursing%20students%20practicing%20patient%20care%20with%20mannequins%20in%20simulation%20lab%2C%20professional%20nursing%20education%2C%20students%20in%20nursing%20uniforms%2C%20healthcare%20training%20with%20medical%20equipment&width=600&height=400&seq=6&orientation=landscape"
              alt="School of Nursing"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-6">
              <h3 class="text-2xl font-bold text-gray-800 mb-3">
                School of Nursing
              </h3>
              <p class="text-gray-700 mb-4">
                Our Nursing programs combine theoretical knowledge with
                practical skills to develop compassionate and competent nursing
                professionals. Students train in simulated hospital environments
                and gain clinical experience.
              </p>
              <div class="mb-6">
                <h4 class="font-semibold text-gray-800 mb-2">Key Courses:</h4>
                <ul class="space-y-1 text-gray-700">
                  <li class="flex items-center">
                    <div
                      class="w-4 h-4 flex items-center justify-center mr-2 text-primary"
                    >
                      <i class="ri-check-line"></i>
                    </div>
                    B.Sc. Nursing (4-Year Program)
                  </li>
                  <li class="flex items-center">
                    <div
                      class="w-4 h-4 flex items-center justify-center mr-2 text-primary"
                    >
                      <i class="ri-check-line"></i>
                    </div>
                    General Nursing & Midwifery (GNM)
                  </li>
                  <!--<li class="flex items-center">-->
                  <!--  <div-->
                  <!--    class="w-4 h-4 flex items-center justify-center mr-2 text-primary"-->
                  <!--  >-->
                  <!--    <i class="ri-check-line"></i>-->
                  <!--  </div>-->
                  <!--  Post Basic B.Sc. Nursing-->
                  <!--</li>-->
                  <!--<li class="flex items-center">-->
                  <!--  <div-->
                  <!--    class="w-4 h-4 flex items-center justify-center mr-2 text-primary"-->
                  <!--  >-->
                  <!--    <i class="ri-check-line"></i>-->
                  <!--  </div>-->
                  <!--  Auxiliary Nursing & Midwifery (ANM)-->
                  <!--</li>-->
                </ul>
              </div>
              <a
                href="nursing.php"
                class="inline-block bg-primary hover:bg-opacity-90 text-white px-5 py-2 rounded-button font-medium transition whitespace-nowrap"
                >Explore Program</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-primary text-white">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
          <div class="counter-item fade-in">
            <div class="text-4xl font-bold mb-2">25+</div>
            <div class="text-lg">Years of Excellence</div>
          </div>
          <div class="counter-item fade-in">
            <div class="text-4xl font-bold mb-2">5,000+</div>
            <div class="text-lg">Successful Alumni</div>
          </div>
          <div class="counter-item fade-in">
            <div class="text-4xl font-bold mb-2">50+</div>
            <div class="text-lg">Experienced Faculty</div>
          </div>
          <div class="counter-item fade-in">
            <div class="text-4xl font-bold mb-2">98%</div>
            <div class="text-lg">Placement Rate</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Campus Life Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">Campus Life</h2>
          <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Experience a vibrant campus environment that fosters both academic
            excellence and personal growth.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div
            class="gallery-item rounded-lg overflow-hidden shadow-md fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=modern%20university%20library%20with%20students%20studying%20at%20tables%2C%20bookshelves%2C%20digital%20resources%2C%20bright%20academic%20environment%2C%20educational%20campus%20facility&width=400&height=300&seq=7&orientation=landscape"
              alt="Campus Library"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-4 bg-white">
              <h3 class="font-bold text-gray-800 mb-1">Modern Library</h3>
              <p class="text-gray-600 text-sm">
                Access to extensive medical literature and digital resources
              </p>
            </div>
          </div>
          <div
            class="gallery-item rounded-lg overflow-hidden shadow-md fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=medical%20simulation%20laboratory%20with%20advanced%20equipment%2C%20nursing%20mannequins%2C%20healthcare%20training%20facility%2C%20students%20practicing%20clinical%20skills%2C%20professional%20education%20environment&width=400&height=300&seq=8&orientation=landscape"
              alt="Simulation Labs"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-4 bg-white">
              <h3 class="font-bold text-gray-800 mb-1">Simulation Labs</h3>
              <p class="text-gray-600 text-sm">
                State-of-the-art facilities for practical training
              </p>
            </div>
          </div>
          <div
            class="gallery-item rounded-lg overflow-hidden shadow-md fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=university%20student%20lounge%20with%20comfortable%20seating%2C%20students%20socializing%2C%20modern%20campus%20recreational%20area%2C%20bright%20welcoming%20space%2C%20educational%20institution&width=400&height=300&seq=9&orientation=landscape"
              alt="Student Lounge"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-4 bg-white">
              <h3 class="font-bold text-gray-800 mb-1">Student Lounges</h3>
              <p class="text-gray-600 text-sm">
                Comfortable spaces for relaxation and collaboration
              </p>
            </div>
          </div>
          <div
            class="gallery-item rounded-lg overflow-hidden shadow-md fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=university%20sports%20facilities%20with%20students%20playing%20outdoor%20games%2C%20campus%20recreation%20area%2C%20sports%20field%2C%20educational%20institution%20athletic%20facilities&width=400&height=300&seq=10&orientation=landscape"
              alt="Sports Facilities"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-4 bg-white">
              <h3 class="font-bold text-gray-800 mb-1">Sports Facilities</h3>
              <p class="text-gray-600 text-sm">
                Promoting physical fitness and team building
              </p>
            </div>
          </div>
          <div
            class="gallery-item rounded-lg overflow-hidden shadow-md fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=university%20cafeteria%20with%20students%20dining%2C%20modern%20campus%20food%20court%2C%20bright%20spacious%20dining%20area%2C%20educational%20institution%20facility&width=400&height=300&seq=11&orientation=landscape"
              alt="Cafeteria"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-4 bg-white">
              <h3 class="font-bold text-gray-800 mb-1">Modern Cafeteria</h3>
              <p class="text-gray-600 text-sm">
                Nutritious meals in a comfortable environment
              </p>
            </div>
          </div>
          <div
            class="gallery-item rounded-lg overflow-hidden shadow-md fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=university%20cultural%20event%20with%20students%20performing%20on%20stage%2C%20campus%20celebration%2C%20educational%20institution%20cultural%20program%2C%20diverse%20student%20activities&width=400&height=300&seq=12&orientation=landscape"
              alt="Cultural Events"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-4 bg-white">
              <h3 class="font-bold text-gray-800 mb-1">Cultural Events</h3>
              <p class="text-gray-600 text-sm">
                Celebrating diversity through various activities
              </p>
            </div>
          </div>
        </div>

        <div class="text-center mt-10 fade-in">
          <a
            href="campus.php"
            class="inline-block bg-primary hover:bg-opacity-90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap"
            >Explore Campus Life</a
          >
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            What Our Students Say
          </h2>
          <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Hear from our students about their experiences at our institution.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-6 rounded-lg shadow-md fade-in">
            <div class="flex items-center mb-4">
              <div
                class="w-5 h-5 flex items-center justify-center text-secondary"
              >
                <i class="ri-double-quotes-l text-3xl"></i>
              </div>
            </div>
            <p class="text-gray-700 mb-6">
              The paramedical science program provided me with both theoretical
              knowledge and practical skills that have been invaluable in my
              career. The faculty's guidance and support were exceptional
              throughout my studies.
            </p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-gray-300 mr-4"></div>
              <div>
                <h4 class="font-semibold text-gray-800">Emily Johnson</h4>
                <p class="text-gray-600 text-sm">
                  Medical Lab Technologist, Class of 2022
                </p>
              </div>
            </div>
          </div>

          <div class="bg-white p-6 rounded-lg shadow-md fade-in">
            <div class="flex items-center mb-4">
              <div
                class="w-5 h-5 flex items-center justify-center text-secondary"
              >
                <i class="ri-double-quotes-l text-3xl"></i>
              </div>
            </div>
            <p class="text-gray-700 mb-6">
              The nursing program exceeded my expectations. The simulation labs
              and clinical rotations prepared me well for real-world healthcare
              settings. I feel confident in my abilities as a registered nurse
              thanks to this program.
            </p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-gray-300 mr-4"></div>
              <div>
                <h4 class="font-semibold text-gray-800">Michael Rodriguez</h4>
                <p class="text-gray-600 text-sm">
                  Registered Nurse, Class of 2021
                </p>
              </div>
            </div>
          </div>

          <div class="bg-white p-6 rounded-lg shadow-md fade-in">
            <div class="flex items-center mb-4">
              <div
                class="w-5 h-5 flex items-center justify-center text-secondary"
              >
                <i class="ri-double-quotes-l text-3xl"></i>
              </div>
            </div>
            <p class="text-gray-700 mb-6">
              The radiography program was challenging but incredibly rewarding.
              The hands-on experience with advanced imaging equipment and
              supportive faculty made all the difference in my educational
              journey.
            </p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-gray-300 mr-4"></div>
              <div>
                <h4 class="font-semibold text-gray-800">Sophia Chen</h4>
                <p class="text-gray-600 text-sm">
                  Radiologic Technologist, Class of 2023
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- News & Events Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Latest News & Events
          </h2>
          <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Stay updated with the latest happenings at our institution.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div
            class="news-card bg-white rounded-lg shadow-md overflow-hidden fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=healthcare%20conference%20with%20medical%20professionals%2C%20academic%20seminar%2C%20educational%20event%2C%20professional%20development%20in%20medical%20field&width=400&height=250&seq=13&orientation=landscape"
              alt="Healthcare Conference"
              class="w-full h-48 object-cover object-top"
            />
            <div class="p-6">
              <div class="flex items-center text-gray-500 text-sm mb-2">
                <div class="w-4 h-4 flex items-center justify-center mr-1">
                  <i class="ri-calendar-line"></i>
                </div>
                <span>May 15, 2025</span>
              </div>
              <h3 class="font-bold text-gray-800 mb-2">
                Annual Healthcare Conference
              </h3>
              <p class="text-gray-700 text-sm mb-4">
                Join us for our annual healthcare conference featuring renowned
                speakers and the latest advancements in medical science.
              </p>
              <a
                href="#"
                class="text-primary font-medium hover:underline flex items-center"
              >
                Learn More
                <div class="w-4 h-4 flex items-center justify-center ml-1">
                  <i class="ri-arrow-right-line"></i>
                </div>
              </a>
            </div>
          </div>

          <div
            class="news-card bg-white rounded-lg shadow-md overflow-hidden fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=nursing%20students%20at%20graduation%20ceremony%2C%20academic%20achievement%2C%20educational%20milestone%2C%20healthcare%20professionals%20celebration&width=400&height=250&seq=14&orientation=landscape"
              alt="Graduation Ceremony"
              class="w-full h-48 object-cover object-top"
            />
            <div class="p-6">
              <div class="flex items-center text-gray-500 text-sm mb-2">
                <div class="w-4 h-4 flex items-center justify-center mr-1">
                  <i class="ri-calendar-line"></i>
                </div>
                <span>June 10, 2025</span>
              </div>
              <h3 class="font-bold text-gray-800 mb-2">
                2025 Graduation Ceremony
              </h3>
              <p class="text-gray-700 text-sm mb-4">
                Celebrating the achievements of our graduating class of 2025.
                Join us for this special occasion.
              </p>
              <a
                href="#"
                class="text-primary font-medium hover:underline flex items-center"
              >
                Learn More
                <div class="w-4 h-4 flex items-center justify-center ml-1">
                  <i class="ri-arrow-right-line"></i>
                </div>
              </a>
            </div>
          </div>

          <div
            class="news-card bg-white rounded-lg shadow-md overflow-hidden fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=medical%20workshop%20with%20healthcare%20professionals%20learning%20new%20techniques%2C%20hands-on%20training%2C%20educational%20healthcare%20seminar&width=400&height=250&seq=15&orientation=landscape"
              alt="Medical Workshop"
              class="w-full h-48 object-cover object-top"
            />
            <div class="p-6">
              <div class="flex items-center text-gray-500 text-sm mb-2">
                <div class="w-4 h-4 flex items-center justify-center mr-1">
                  <i class="ri-calendar-line"></i>
                </div>
                <span>July 5, 2025</span>
              </div>
              <h3 class="font-bold text-gray-800 mb-2">
                Advanced Medical Techniques Workshop
              </h3>
              <p class="text-gray-700 text-sm mb-4">
                A hands-on workshop focusing on the latest medical techniques
                and technologies in healthcare.
              </p>
              <a
                href="#"
                class="text-primary font-medium hover:underline flex items-center"
              >
                Learn More
                <div class="w-4 h-4 flex items-center justify-center ml-1">
                  <i class="ri-arrow-right-line"></i>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="text-center mt-10 fade-in">
          <a
            href="#"
            class="inline-block bg-primary hover:bg-opacity-90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap"
            >View All News & Events</a
          >
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-primary">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-between">
          <div class="mb-8 md:mb-0 md:w-2/3 fade-in">
            <h2 class="text-3xl font-bold text-white mb-4">
              Ready to Start Your Healthcare Career?
            </h2>
            <p class="text-white text-opacity-90 text-lg">
              Applications are now open for the upcoming academic year. Take the
              first step towards a rewarding career in healthcare.
            </p>
          </div>
          <div class="fade-in">
            <a
              href="admission.php"
              class="inline-block bg-white text-primary hover:bg-gray-100 px-8 py-4 rounded-button font-bold transition whitespace-nowrap"
              >Apply Now</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
          <div>
            <a
              href="index.php"
              class="font-['Pacifico'] text-3xl text-white mb-6 block"
              >logo</a
            >
            <p class="text-gray-400 mb-6">
              Providing quality healthcare education since 1995. Our mission is
              to develop skilled and compassionate healthcare professionals.
            </p>
            <div class="flex space-x-4">
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition"
              >
                <i class="ri-facebook-fill"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition"
              >
                <i class="ri-twitter-fill"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition"
              >
                <i class="ri-instagram-line"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition"
              >
                <i class="ri-linkedin-fill"></i>
              </a>
            </div>
          </div>

          <div>
            <h3 class="text-xl font-semibold mb-6">Quick Links</h3>
            <ul class="space-y-3">
              <li>
                <a
                  href="index.php"
                  class="text-gray-400 hover:text-white transition"
                  >Home</a
                >
              </li>
              <li>
                <a
                  href="about.php"
                  class="text-gray-400 hover:text-white transition"
                  >About Us</a
                >
              </li>
              <li>
                <a
                  href="paramedical.php"
                  class="text-gray-400 hover:text-white transition"
                  >Paramedical Science</a
                >
              </li>
              <li>
                <a
                  href="nursing.php"
                  class="text-gray-400 hover:text-white transition"
                  >School of Nursing</a
                >
              </li>
              <li>
                <a
                  href="campus.php"
                  class="text-gray-400 hover:text-white transition"
                  >Campus Life</a
                >
              </li>
              <li>
                <a
                  href="admission.php"
                  class="text-gray-400 hover:text-white transition"
                  >Admission</a
                >
              </li>
              <li>
                <a
                  href="contact.php"
                  class="text-gray-400 hover:text-white transition"
                  >Contact</a
                >
              </li>
            </ul>
          </div>

          <div>
            <h3 class="text-xl font-semibold mb-6">Programs</h3>
            <ul class="space-y-3">
              <li>
                <a
                  href="paramedical.php"
                  class="text-gray-400 hover:text-white transition"
                  >Medical Lab Technology</a
                >
              </li>
              <li>
                <a
                  href="paramedical.php"
                  class="text-gray-400 hover:text-white transition"
                  >Radiography & Imaging</a
                >
              </li>
              <li>
                <a
                  href="paramedical.php"
                  class="text-gray-400 hover:text-white transition"
                  >Operation Theater Technology</a
                >
              </li>
              <li>
                <a
                  href="nursing.php"
                  class="text-gray-400 hover:text-white transition"
                  >B.Sc. Nursing</a
                >
              </li>
              <li>
                <a
                  href="nursing.php"
                  class="text-gray-400 hover:text-white transition"
                  >General Nursing & Midwifery</a
                >
              </li>
              <li>
                <a
                  href="nursing.php"
                  class="text-gray-400 hover:text-white transition"
                  >Post Basic B.Sc. Nursing</a
                >
              </li>
            </ul>
          </div>

          <div>
            <h3 class="text-xl font-semibold mb-6">Contact Us</h3>
            <ul class="space-y-4">
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-3 mt-1 text-gray-400"
                >
                  <i class="ri-map-pin-line"></i>
                </div>
                <span class="text-gray-400"
                  >123 Education Street, Academic District, City, State
                  12345</span
                >
              </li>
              <li class="flex items-center">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-3 text-gray-400"
                >
                  <i class="ri-phone-line"></i>
                </div>
                <span class="text-gray-400">+1 (234) 567-8900</span>
              </li>
              <li class="flex items-center">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-3 text-gray-400"
                >
                  <i class="ri-mail-line"></i>
                </div>
                <span class="text-gray-400">admissions@eduinstitute.edu</span>
              </li>
            </ul>

            <div class="mt-8">
              <h4 class="font-semibold mb-3">Subscribe to Newsletter</h4>
              <div class="flex">
                <input
                  type="email"
                  placeholder="Your email"
                  class="px-4 py-2 w-full bg-gray-800 border-none rounded-l-button focus:outline-none text-white"
                />
                <button
                  class="bg-secondary hover:bg-opacity-90 text-white px-4 py-2 rounded-r-button whitespace-nowrap"
                >
                  Subscribe
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="border-t border-gray-800 pt-8">
          <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm mb-4 md:mb-0">
              &copy; 2025 Educational Institute. All rights reserved.
            </p>
            <div class="flex space-x-6">
              <a
                href="#"
                class="text-gray-400 hover:text-white text-sm transition"
                >Privacy Policy</a
              >
              <a
                href="#"
                class="text-gray-400 hover:text-white text-sm transition"
                >Terms of Service</a
              >
              <a
                href="#"
                class="text-gray-400 hover:text-white text-sm transition"
                >Cookie Policy</a
              >
            </div>
          </div>
        </div>
      </div>
    </footer>

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
