<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Educational Institute</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
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
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        body {
            font-family: 'Roboto', sans-serif;
            scroll-behavior: smooth;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
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

        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        .timeline-item {
            position: relative;
            padding-left: 30px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 2px;
            background-color: #003366;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            left: -4px;
            top: 0;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #FFB800;
        }

        .team-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .social-icon {
            transition: transform 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }

        .page-header {
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .counter-item {
            text-align: center;
        }

        .accordion-item {
            border-bottom: 1px solid #e5e7eb;
        }

        .accordion-button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            text-align: left;
            transition: all 0.3s ease;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .accordion-content.active {
            max-height: 500px;
        }

        .accordion-icon {
            transition: transform 0.3s ease;
        }

        .accordion-button.active .accordion-icon {
            transform: rotate(180deg);
        }

        @media (max-width: 768px) {
            .timeline-item {
                padding-left: 20px;
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Top Contact Bar -->
    <div class="bg-primary text-white py-2 px-4">
        <div class="container mx-auto flex flex-wrap justify-between items-center">
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
                <a href="#"
                    class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition cursor-pointer">
                    <i class="ri-facebook-fill text-sm"></i>
                </a>
                <a href="#"
                    class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition cursor-pointer">
                    <i class="ri-twitter-fill text-sm"></i>
                </a>
                <a href="#"
                    class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition cursor-pointer">
                    <i class="ri-instagram-line text-sm"></i>
                </a>
                <a href="#"
                    class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition cursor-pointer">
                    <i class="ri-linkedin-fill text-sm"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <!-- Main Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <a href="index.php" class="font-['Pacifico'] text-3xl text-primary"><img src="./images/image.jpg"
                        class="w-14 py-2" alt="" srcset=""></a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="index.php"
                        class="nav-link font-medium text-gray-800 hover:text-primary transition">Home</a>
                    <a href="about.php" class="nav-link font-medium text-gray-800 hover:text-primary transition">About
                        Us</a>
                    <div class="dropdown">
                        <a href="#"
                            class="nav-link font-medium text-gray-800 hover:text-primary transition flex items-center">
                            Programs
                            <div class="w-4 h-4 flex items-center justify-center ml-1">
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </a>
                        <div class="dropdown-content bg-white shadow-lg rounded-md mt-1 py-2">
                            <a href="paramedical.php"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Paramedical Science</a>
                            <a href="nursing.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">School of
                                Nursing</a>
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
                    <a href="campus.php"
                        class="nav-link font-medium text-gray-800 hover:text-primary transition">Campus Life</a>
                    <a href="admission.php"
                        class="nav-link font-medium text-gray-800 hover:text-primary transition">Admission</a>
                    <a href="contact.php"
                        class="nav-link font-medium text-gray-800 hover:text-primary transition">Contact</a>
                </nav>

                <!-- Apply Now Button -->
                <a href="admission.php"
                    class="hidden md:block bg-secondary hover:bg-opacity-90 text-white px-6 py-2 rounded-button font-medium transition whitespace-nowrap">Apply
                    Now</a>

                <!-- Mobile Menu Button -->
                <button id="menu-toggle" class="md:hidden w-10 h-10 flex items-center justify-center text-gray-700">
                    <i class="ri-menu-line text-2xl"></i>
                </button>
            </div>
        </div>
    </header>
    <!-- Mobile Navigation Menu -->

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu"
        class="mobile-menu fixed top-0 left-0 h-full w-4/5 bg-white shadow-lg z-50 p-5 overflow-y-auto">
        <div class="flex justify-between items-center mb-8">
            <a href="index.php" class="font-['Pacifico'] text-2xl text-primary">logo</a>
            <button id="close-menu" class="w-8 h-8 flex items-center justify-center text-gray-700 cursor-pointer">
                <i class="ri-close-line text-2xl"></i>
            </button>
        </div>
        <nav class="flex flex-col space-y-4">
            <a href="index.php" class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">Home</a>
            <a href="about.php" class="py-2 border-b border-gray-100 text-primary">About Us</a>
            <div class="py-2 border-b border-gray-100">
                <div class="flex justify-between items-center text-gray-800 hover:text-primary cursor-pointer"
                    id="mobile-dropdown-toggle">
                    <span>Programs</span>
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-arrow-down-s-line"></i>
                    </div>
                </div>
                <div class="hidden pl-4 mt-2 space-y-2" id="mobile-dropdown-content">
                    <a href="paramedical.php" class="block py-1 text-gray-700 hover:text-primary">Paramedical
                        Science</a>
                    <a href="nursing.php" class="block py-1 text-gray-700 hover:text-primary">School of Nursing</a>
                </div>
            </div>
            <a href="paramedical.php"
                class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">Paramedical Science</a>
            <a href="nursing.php" class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">School of
                Nursing</a>
            <a href="campus.php" class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">Campus Life</a>
            <a href="admission.php"
                class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">Admission</a>
            <a href="contact.php" class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">Contact</a>
        </nav>
        <div class="mt-8">
            <a href="admission.php"
                class="block w-full bg-secondary hover:bg-opacity-90 text-white text-center px-4 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer">Apply
                Now</a>
        </div>
    </div>

    <!-- Page Header -->
    <div class="page-header py-24 relative"
        style="background-image: url('https://readdy.ai/api/search-image?query=modern%20university%20campus%20with%20beautiful%20architecture%2C%20academic%20buildings%2C%20professional%20high-quality%20photography%2C%20educational%20institution%20aerial%20view&width=1600&height=500&seq=16&orientation=landscape')">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">About Us</h1>
                <div class="flex items-center justify-center">
                    <a href="index.php" class="text-white hover:text-secondary">Home</a>
                    <div class="w-4 h-4 flex items-center justify-center mx-2">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <span class="text-secondary">About Us</span>
                </div>
            </div>
        </div>
    </div>


    <!-- Welcome Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 fade-in">
                    <img src="https://readdy.ai/api/search-image?query=modern%20educational%20campus%20building%20with%20glass%20facade%2C%20beautiful%20architecture%2C%20professional%20photograph%20of%20university%20main%20building%20with%20landscaped%20gardens%2C%20academic%20institution&width=600&height=400&seq=4&orientation=landscape"
                        alt="Campus Building" class="rounded-lg shadow-lg w-full object-cover object-top" />
                </div>
                <div class="md:w-1/2 fade-in">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">
                        Welcome to Our Educational Institute
                    </h2>
                    <div class="w-20 h-1 bg-secondary mb-6"></div>
                    <p class="text-gray-700 mb-6">
                        Welcome to MA Pitambara College, the first private college in District Agar Malwa, established
                        to provide exceptional medical education. Our mission is to train competent healthcare
                        professionals who can excel in diverse settings, from rural India to advanced hospitals
                        worldwide. With a dedicated faculty, modern facilities including our 120-bedded Agar Malwa
                        Hospital, robust financial support, and global affiliations with renowned institutions like
                        Karolinska Institute and Bergen University, we are committed to fostering a meaningful and
                        successful academic journey for our students. Join us to embark on a rewarding career in
                        healthcare!</p>
                    <!-- <p class="text-gray-700 mb-6">
              Our state-of-the-art facilities, experienced faculty, and industry
              partnerships ensure that our graduates are well-equipped to meet
              the challenges of the modern healthcare landscape.
            </p> -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start">
                            <div
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white mr-4">
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
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white mr-4">
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
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white mr-4">
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
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white mr-4">
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
                    <a href="about.php"
                        class="inline-block bg-primary hover:bg-opacity-90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap">Discover
                        Our Story</a>
                </div>
            </div>
        </div>
    </section>



    <!-- About Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center px-10 gap-12">
                <div class="md:w-1/2 fade-in">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Director Message</h2>
                    <div class="w-20 h-1 bg-secondary mb-6"></div>
                    <p class="text-gray-700 mb-6">
                        Dear Students,
                        <br>
                        Our Aim Is To Provide Excellent Education In Various Fields Of Medicine Including Nursing &
                        Paramedical Disciplines.
                    </p>
                    <p class="text-gray-700 mb-6">
                        An Amalgam Of Four Factors Makes A Good Teaching Institute.
                    <ul class="list-disc ml-5 text-gray-700">
                        <li>Highly Qualified Dedicated, Experience Student Oriented Faculty.</li>
                        <li>A Modern Hospital Having Excellent Therapeutic And Diagnostic Facilities Catering To A Large
                            Population Of Patients Covering Practically Every Kill Of Disease So That The Students Are
                            Well Versed In The Art And Science Of Medicine.</li>
                        <li>Sound Financial Support.</li>
                        <li>Affiliation With Word Renowned Institution For Research And Development Fortunately We Have
                            All The Four Factors
                        </li>
                    </ul>


                    </p>
                    <p class="text-gray-700 mb-6">
                        A Faculty As Described Above Well Established 120 Bedded Agar Malwa Hospital & Research Centre.
                        A Sound Financial
                        Support From Various Donors And Affiliation With World Famous Karolinska Institute Of Sweden,
                        Bergen
                        University Institutions & Authorities In The Field Of Medical Sciences.
                    </p>
                    <div class="flex items-center">
                        <img src="./images/director1.jpg"
                            alt="Director" class="w-16 h-16 rounded-full object-cover mr-4" />
                        <div>
                            <h4 class="font-semibold text-gray-800">Mr. BHUPENDRA SINGH GURJAR</h4>
                            <p class="text-gray-600 text-sm">Director</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 fade-in">
                    <img src="https://readdy.ai/api/search-image?query=modern%20educational%20campus%20building%20with%20glass%20facade%2C%20beautiful%20architecture%2C%20professional%20photograph%20of%20university%20main%20building%20with%20landscaped%20gardens%2C%20academic%20institution&width=600&height=400&seq=17&orientation=landscape"
                        alt="Campus Building" class="rounded-lg shadow-lg w-full object-cover object-top" />
                </div>

            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">
                    Our Mission & Vision
                </h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    Guiding principles that drive our institution forward in healthcare
                    education.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md fade-in">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full bg-primary text-white mb-6 mx-auto">
                        <i class="ri-flag-line text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">
                        Our Mission
                    </h3>
                    <p class="text-gray-700 text-center">
                        To provide high-quality healthcare education that develops
                        skilled, compassionate, and ethical professionals who contribute
                        positively to the healthcare industry and society.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
                                <i class="ri-check-line"></i>
                            </div>
                            <p class="text-gray-700">
                                Deliver comprehensive, evidence-based healthcare education
                            </p>
                        </li>
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
                                <i class="ri-check-line"></i>
                            </div>
                            <p class="text-gray-700">
                                Foster a supportive learning environment that promotes
                                critical thinking
                            </p>
                        </li>
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
                                <i class="ri-check-line"></i>
                            </div>
                            <p class="text-gray-700">
                                Instill ethical values and professional responsibility
                            </p>
                        </li>
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
                                <i class="ri-check-line"></i>
                            </div>
                            <p class="text-gray-700">
                                Prepare graduates to meet the evolving needs of healthcare
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-md fade-in">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full bg-primary text-white mb-6 mx-auto">
                        <i class="ri-eye-line text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">
                        Our Vision
                    </h3>
                    <p class="text-gray-700 text-center">
                        To be recognized as a leading institution for healthcare
                        education, known for innovation, academic excellence, and
                        producing graduates who make meaningful contributions to
                        healthcare globally.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
                                <i class="ri-check-line"></i>
                            </div>
                            <p class="text-gray-700">
                                Establish centers of excellence in healthcare education
                            </p>
                        </li>
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
                                <i class="ri-check-line"></i>
                            </div>
                            <p class="text-gray-700">
                                Lead in the adoption of innovative teaching methodologies
                            </p>
                        </li>
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
                                <i class="ri-check-line"></i>
                            </div>
                            <p class="text-gray-700">
                                Foster research and scholarly activities
                            </p>
                        </li>
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
                                <i class="ri-check-line"></i>
                            </div>
                            <p class="text-gray-700">
                                Build strong partnerships with healthcare organizations
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Core Values</h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    The fundamental beliefs that guide our actions, decisions, and
                    relationships.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 fade-in">
                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full bg-primary text-white mb-4 mx-auto">
                        <i class="ri-award-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Excellence</h3>
                    <p class="text-gray-700">
                        We strive for the highest standards in education, research, and
                        service, continuously improving our programs and practices.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full bg-primary text-white mb-4 mx-auto">
                        <i class="ri-heart-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Compassion</h3>
                    <p class="text-gray-700">
                        We foster empathy, kindness, and respect for all individuals,
                        recognizing the human dimension of healthcare.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full bg-primary text-white mb-4 mx-auto">
                        <i class="ri-scales-3-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Integrity</h3>
                    <p class="text-gray-700">
                        We uphold ethical principles, honesty, and transparency in all our
                        actions and relationships.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full bg-primary text-white mb-4 mx-auto">
                        <i class="ri-team-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Collaboration</h3>
                    <p class="text-gray-700">
                        We value teamwork, partnerships, and the collective wisdom that
                        comes from diverse perspectives.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full bg-primary text-white mb-4 mx-auto">
                        <i class="ri-lightbulb-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Innovation</h3>
                    <p class="text-gray-700">
                        We embrace creativity, adaptability, and forward-thinking
                        approaches to healthcare education.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full bg-primary text-white mb-4 mx-auto">
                        <i class="ri-global-line text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Diversity</h3>
                    <p class="text-gray-700">
                        We celebrate and respect differences, creating an inclusive
                        environment for all students and staff.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Journey</h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    Key milestones in our institution's history and development.
                </p>
            </div>

            <div class="max-w-3xl mx-auto fade-in">
                <div class="timeline-item pb-12">
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">1995</h3>
                        <p class="text-gray-700">
                            Founded as a small nursing school with 50 students and 5 faculty
                            members.
                        </p>
                    </div>
                </div>

                <div class="timeline-item pb-12">
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">2000</h3>
                        <p class="text-gray-700">
                            Expanded to include paramedical science programs, doubling
                            student enrollment.
                        </p>
                    </div>
                </div>

                <div class="timeline-item pb-12">
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">2005</h3>
                        <p class="text-gray-700">
                            Constructed new campus facilities including state-of-the-art
                            laboratories and simulation centers.
                        </p>
                    </div>
                </div>

                <div class="timeline-item pb-12">
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">2010</h3>
                        <p class="text-gray-700">
                            Received national accreditation for all programs, recognizing
                            our commitment to quality education.
                        </p>
                    </div>
                </div>

                <div class="timeline-item pb-12">
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">2015</h3>
                        <p class="text-gray-700">
                            Celebrated 20 years of excellence with the launch of advanced
                            specialty programs and research initiatives.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">2020-Present</h3>
                        <p class="text-gray-700">
                            Implemented innovative digital learning platforms and expanded
                            international partnerships, serving over 2,000 students
                            annually.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">
                    Our Leadership Team
                </h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    Meet the dedicated professionals who guide our institution.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="team-card bg-gray-50 rounded-lg overflow-hidden shadow-sm fade-in">
                    <img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20middle-aged%20male%20university%20director%20in%20formal%20attire%2C%20confident%20pose%2C%20neutral%20background%2C%20educational%20leadership&width=300&height=300&seq=19&orientation=squarish"
                        alt="Dr. Robert Anderson" class="w-full h-64 object-cover object-top" />
                    <div class="p-4 text-center">
                        <h3 class="font-bold text-gray-800 mb-1">Dr. Robert Anderson</h3>
                        <p class="text-gray-600 text-sm mb-3">Director & Founder</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-mail-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="team-card bg-gray-50 rounded-lg overflow-hidden shadow-sm fade-in">
                    <img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20middle-aged%20female%20academic%20dean%20in%20formal%20business%20attire%2C%20confident%20pose%2C%20neutral%20background%2C%20educational%20leadership&width=300&height=300&seq=20&orientation=squarish"
                        alt="Dr. Sarah Mitchell" class="w-full h-64 object-cover object-top" />
                    <div class="p-4 text-center">
                        <h3 class="font-bold text-gray-800 mb-1">Dr. Sarah Mitchell</h3>
                        <p class="text-gray-600 text-sm mb-3">Academic Dean</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-mail-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="team-card bg-gray-50 rounded-lg overflow-hidden shadow-sm fade-in">
                    <img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20middle-aged%20male%20nursing%20department%20head%20in%20formal%20attire%20with%20stethoscope%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education%20leadership&width=300&height=300&seq=21&orientation=squarish"
                        alt="Dr. James Wilson" class="w-full h-64 object-cover object-top" />
                    <div class="p-4 text-center">
                        <h3 class="font-bold text-gray-800 mb-1">Dr. James Wilson</h3>
                        <p class="text-gray-600 text-sm mb-3">
                            Head of Nursing Department
                        </p>
                        <div class="flex justify-center space-x-3">
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-mail-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="team-card bg-gray-50 rounded-lg overflow-hidden shadow-sm fade-in">
                    <img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20middle-aged%20female%20paramedical%20department%20head%20in%20lab%20coat%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education%20leadership&width=300&height=300&seq=22&orientation=squarish"
                        alt="Dr. Emily Patel" class="w-full h-64 object-cover object-top" />
                    <div class="p-4 text-center">
                        <h3 class="font-bold text-gray-800 mb-1">Dr. Emily Patel</h3>
                        <p class="text-gray-600 text-sm mb-3">
                            Head of Paramedical Science
                        </p>
                        <div class="flex justify-center space-x-3">
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="#"
                                class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition cursor-pointer">
                                <i class="ri-mail-line"></i>
                            </a>
                        </div>
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

    <!-- Facilities Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Facilities</h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    State-of-the-art infrastructure designed to provide an optimal
                    learning environment.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
                    <img src="https://readdy.ai/api/search-image?query=modern%20university%20library%20with%20students%20studying%20at%20tables%2C%20bookshelves%2C%20digital%20resources%2C%20bright%20academic%20environment%2C%20educational%20campus%20facility&width=400&height=250&seq=23&orientation=landscape"
                        alt="Library" class="w-full h-48 object-cover object-top" />
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 mb-2">Modern Library</h3>
                        <p class="text-gray-700 text-sm">
                            Our comprehensive library houses over 20,000 volumes of medical
                            and nursing literature, digital resources, and comfortable study
                            spaces for individual and group learning.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
                    <img src="https://readdy.ai/api/search-image?query=medical%20simulation%20laboratory%20with%20advanced%20equipment%2C%20nursing%20mannequins%2C%20healthcare%20training%20facility%2C%20students%20practicing%20clinical%20skills%2C%20professional%20education%20environment&width=400&height=250&seq=24&orientation=landscape"
                        alt="Simulation Labs" class="w-full h-48 object-cover object-top" />
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 mb-2">Simulation Labs</h3>
                        <p class="text-gray-700 text-sm">
                            Our high-fidelity simulation labs replicate real healthcare
                            environments, allowing students to practice clinical skills in a
                            safe, controlled setting with advanced medical mannequins and
                            equipment.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
                    <img src="https://readdy.ai/api/search-image?query=modern%20computer%20laboratory%20with%20students%20working%20on%20computers%2C%20educational%20technology%20facility%2C%20bright%20academic%20environment%2C%20university%20IT%20lab&width=400&height=250&seq=25&orientation=landscape"
                        alt="Computer Labs" class="w-full h-48 object-cover object-top" />
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 mb-2">Computer Labs</h3>
                        <p class="text-gray-700 text-sm">
                            Equipped with the latest hardware and software, our computer
                            labs provide students with access to medical databases, research
                            tools, and specialized healthcare applications.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
                    <img src="https://readdy.ai/api/search-image?query=university%20lecture%20hall%20with%20tiered%20seating%2C%20modern%20audiovisual%20equipment%2C%20bright%20academic%20environment%2C%20educational%20facility&width=400&height=250&seq=26&orientation=landscape"
                        alt="Lecture Halls" class="w-full h-48 object-cover object-top" />
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 mb-2">Lecture Halls</h3>
                        <p class="text-gray-700 text-sm">
                            Our spacious, well-designed lecture halls feature advanced
                            audiovisual technology, comfortable seating, and excellent
                            acoustics to enhance the learning experience.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
                    <img src="https://readdy.ai/api/search-image?query=university%20student%20lounge%20with%20comfortable%20seating%2C%20students%20socializing%2C%20modern%20campus%20recreational%20area%2C%20bright%20welcoming%20space%2C%20educational%20institution&width=400&height=250&seq=27&orientation=landscape"
                        alt="Student Lounges" class="w-full h-48 object-cover object-top" />
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 mb-2">Student Lounges</h3>
                        <p class="text-gray-700 text-sm">
                            Comfortable spaces designed for relaxation, socialization, and
                            collaborative work, fostering a sense of community among
                            students.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
                    <img src="https://readdy.ai/api/search-image?query=university%20cafeteria%20with%20students%20dining%2C%20modern%20campus%20food%20court%2C%20bright%20spacious%20dining%20area%2C%20educational%20institution%20facility&width=400&height=250&seq=28&orientation=landscape"
                        alt="Cafeteria" class="w-full h-48 object-cover object-top" />
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 mb-2">Modern Cafeteria</h3>
                        <p class="text-gray-700 text-sm">
                            Our cafeteria offers nutritious meals in a comfortable
                            environment, catering to diverse dietary preferences and
                            providing a space for students to refuel and connect.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">
                    Frequently Asked Questions
                </h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    Find answers to common questions about our institution.
                </p>
            </div>

            <div class="max-w-3xl mx-auto fade-in">
                <div class="accordion-item">
                    <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
                        <span class="font-semibold text-gray-800">What accreditations does your institution hold?</span>
                        <div class="w-5 h-5 flex items-center justify-center accordion-icon">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </button>
                    <div class="accordion-content px-6 pb-4">
                        <p class="text-gray-700">
                            Our institution is accredited by the National Healthcare
                            Education Accreditation Board and various program-specific
                            accrediting bodies. All our programs meet or exceed national
                            standards for healthcare education, ensuring that our graduates
                            are well-prepared for their careers and eligible for
                            professional licensure.
                        </p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
                        <span class="font-semibold text-gray-800">What is the student-to-faculty ratio?</span>
                        <div class="w-5 h-5 flex items-center justify-center accordion-icon">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </button>
                    <div class="accordion-content px-6 pb-4">
                        <p class="text-gray-700">
                            We maintain a low student-to-faculty ratio of 15:1 for
                            theoretical courses and 8:1 for practical and clinical training.
                            This ensures personalized attention, effective learning, and
                            proper supervision during hands-on training sessions.
                        </p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
                        <span class="font-semibold text-gray-800">Do you offer financial aid or scholarships?</span>
                        <div class="w-5 h-5 flex items-center justify-center accordion-icon">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </button>
                    <div class="accordion-content px-6 pb-4">
                        <p class="text-gray-700">
                            Yes, we offer various financial aid options and merit-based
                            scholarships to eligible students. Our financial aid office
                            works closely with students to identify suitable options,
                            including institutional scholarships, government grants, and
                            flexible payment plans. We are committed to making quality
                            healthcare education accessible to deserving students.
                        </p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
                        <span class="font-semibold text-gray-800">What career services do you provide?</span>
                        <div class="w-5 h-5 flex items-center justify-center accordion-icon">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </button>
                    <div class="accordion-content px-6 pb-4">
                        <p class="text-gray-700">
                            Our Career Development Center offers comprehensive services
                            including resume building, interview preparation, job search
                            assistance, and career counseling. We maintain strong
                            relationships with healthcare employers and organize regular job
                            fairs and recruitment events. Our 98% placement rate reflects
                            our commitment to supporting students' career success.
                        </p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
                        <span class="font-semibold text-gray-800">Are there opportunities for clinical
                            experience?</span>
                        <div class="w-5 h-5 flex items-center justify-center accordion-icon">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </button>
                    <div class="accordion-content px-6 pb-4">
                        <p class="text-gray-700">
                            Yes, clinical experience is an integral part of our programs. We
                            have partnerships with leading hospitals, clinics, and
                            healthcare facilities where students complete supervised
                            clinical rotations. These experiences provide valuable hands-on
                            training in real healthcare settings, preparing students for the
                            realities of professional practice.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-primary">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-8 md:mb-0 md:w-2/3 fade-in">
                    <h2 class="text-3xl font-bold text-white mb-4">
                        Ready to Join Our Community?
                    </h2>
                    <p class="text-white text-opacity-90 text-lg">
                        Take the first step towards a rewarding career in healthcare.
                        Apply now or schedule a campus visit to learn more about our
                        programs.
                    </p>
                </div>
                <div class="flex flex-wrap gap-4 fade-in">
                    <a href="admission.php"
                        class="inline-block bg-white text-primary hover:bg-gray-100 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer">Apply
                        Now</a>
                    <a href="contact.php"
                        class="inline-block bg-transparent border-2 border-white text-white hover:bg-white hover:bg-opacity-10 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer">Schedule
                        a Visit</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div>
                    <a href="index.php" class="font-['Pacifico'] text-3xl text-white mb-6 block">logo</a>
                    <p class="text-gray-400 mb-6">
                        Providing quality healthcare education since 1995. Our mission is
                        to develop skilled and compassionate healthcare professionals.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="index.php" class="text-gray-400 hover:text-white transition">Home</a>
                        </li>
                        <li>
                            <a href="about.php" class="text-gray-400 hover:text-white transition">About Us</a>
                        </li>
                        <li>
                            <a href="paramedical.php" class="text-gray-400 hover:text-white transition">Paramedical
                                Science</a>
                        </li>
                        <li>
                            <a href="nursing.php" class="text-gray-400 hover:text-white transition">School of
                                Nursing</a>
                        </li>
                        <li>
                            <a href="campus.php" class="text-gray-400 hover:text-white transition">Campus Life</a>
                        </li>
                        <li>
                            <a href="admission.php" class="text-gray-400 hover:text-white transition">Admission</a>
                        </li>
                        <li>
                            <a href="contact.php" class="text-gray-400 hover:text-white transition">Contact</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-6">Programs</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="paramedical.php" class="text-gray-400 hover:text-white transition">Medical Lab
                                Technology</a>
                        </li>
                        <li>
                            <a href="paramedical.php" class="text-gray-400 hover:text-white transition">Radiography &
                                Imaging</a>
                        </li>
                        <li>
                            <a href="paramedical.php" class="text-gray-400 hover:text-white transition">Operation
                                Theater Technology</a>
                        </li>
                        <li>
                            <a href="nursing.php" class="text-gray-400 hover:text-white transition">B.Sc. Nursing</a>
                        </li>
                        <li>
                            <a href="nursing.php" class="text-gray-400 hover:text-white transition">General Nursing &
                                Midwifery</a>
                        </li>
                        <li>
                            <a href="nursing.php" class="text-gray-400 hover:text-white transition">Post Basic B.Sc.
                                Nursing</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-6">Contact Us</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center mr-3 mt-1 text-gray-400">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-gray-400">123 Education Street, Academic District, City, State
                                12345</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-5 h-5 flex items-center justify-center mr-3 text-gray-400">
                                <i class="ri-phone-line"></i>
                            </div>
                            <span class="text-gray-400">+1 (234) 567-8900</span>
                        </li>
                        <li class="flex items-center">
                            <div class="w-5 h-5 flex items-center justify-center mr-3 text-gray-400">
                                <i class="ri-mail-line"></i>
                            </div>
                            <span class="text-gray-400">admissions@eduinstitute.edu</span>
                        </li>
                    </ul>

                    <div class="mt-8">
                        <h4 class="font-semibold mb-3">Subscribe to Newsletter</h4>
                        <div class="flex">
                            <input type="email" placeholder="Your email"
                                class="px-4 py-2 w-full bg-gray-800 border-none rounded-l-button focus:outline-none text-white" />
                            <button
                                class="bg-secondary hover:bg-opacity-90 text-white px-4 py-2 rounded-r-button whitespace-nowrap cursor-pointer">
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
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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

    <script id="accordion-script">
        document.addEventListener("DOMContentLoaded", function () {
            const accordionButtons = document.querySelectorAll(".accordion-button");

            accordionButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    const content = this.nextElementSibling;

                    // Toggle active class on button
                    this.classList.toggle("active");

                    // Toggle content visibility
                    content.classList.toggle("active");
                });
            });
        });
    </script>
</body>

</html>