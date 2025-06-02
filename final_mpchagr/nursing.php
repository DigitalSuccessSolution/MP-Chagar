<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School of Paramedical Science</title>
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
      .course-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .course-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      }
      .facility-card {
      transition: transform 0.3s ease;
      }
      .facility-card:hover {
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
      .tab-content {
      display: none;
      }
      .tab-content.active {
      display: block;
      }
      @media (max-width: 768px) {
      .timeline-item {
      padding-left: 20px;
      }
      }
    </style>
  </head>
  <body class="bg-gray-50">
  
    
    
    
      <?php include 'navbar.php' ?>
    <div
      class="page-header py-24 relative"
      style="background-image: url('https://readdy.ai/api/search-image?query=modern%20paramedical%20laboratory%20with%20students%20in%20lab%20coats%20working%20with%20medical%20equipment%2C%20bright%20clinical%20environment%2C%20professional%20healthcare%20education%20setting%2C%20medical%20technology%20training&width=1600&height=500&seq=30&orientation=landscape')"
    >
      <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">
            School of Nursing Science
          </h1>
          <div class="flex items-center justify-center">
            <a href="index.php" class="text-white hover:text-secondary"
              >Home</a
            >
            <div class="w-4 h-4 flex items-center justify-center mx-2">
              <i class="ri-arrow-right-s-line"></i>
            </div>
            <span class="text-secondary">Nursing Science</span>
          </div>
        </div>
      </div>
    </div>
    <!-- About Paramedical Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12">
          <div class="md:w-1/2 fade-in">
            <img
              src="https://readdy.ai/api/search-image?query=paramedical%20students%20in%20laboratory%20setting%20working%20with%20advanced%20medical%20equipment%2C%20professional%20healthcare%20training%20environment%2C%20students%20in%20lab%20coats%20performing%20diagnostic%20tests%2C%20bright%20modern%20medical%20laboratory&width=600&height=400&seq=31&orientation=landscape"
              alt="Paramedical Students"
              class="rounded-lg shadow-lg w-full object-cover object-top"
            />
          </div>
          <div class="md:w-1/2 fade-in">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">
             FROM THE NURSING & PARAMEDICAL DIRECTOR :
            </h2>
            <div class="w-20 h-1 bg-secondary mb-6"></div>
            <p class="text-gray-700 mb-6">
            
                Dear Students,
             <br>
                Our Aim Is To Provide Excellent Education In Various Fields Of Medicine Including Nursing & Paramedical Disciplines
                An Amalgam Of Four Factors Makes A Good Teaching Institute.
                <ul class="list-disc ml-5">
                    <li> Highly Qualified Dedicated, Experience Student Oriented Faculty.</li>
                    <li> A Modern Hospital Having Excellent Therapeutic And Diagnostic Facilities Catering To A Large Population Of Patients Covering Practically Every Kill Of Disease So That The Students Are Well Versed In The Art And  Science Of Medicine.</li>
                    <li> A Sound Financial Support.</li>
                    <li> Affiliation With Word Renowned Institution For Research And Development Fortunately We Have All The Four Factors.</li>
                </ul>
                        
         <br>
                A Faculty As Described Above Well Established 120 Bedded Agar Malwa Hospital & Research Centre. A Sound Financial Support From Various Donors And Affiliation With World Famous Karolinska Institute Of Sweden, Bergen University Institutions & Authorities In The Field Of Medical Sciences.
                I Hope You Will Be One The Fortunate Student Who Get Admission In This Institution. I Am Sure You Will Have Academically Meaningful And Pleasant Time In Our Campus And A Very Success Professional Career After Graduation
            </p>
            <!-- <p class="text-gray-700 mb-6">
              Our curriculum combines theoretical knowledge with extensive
              practical training, ensuring that graduates are well-prepared for
              the challenges of modern healthcare environments. We emphasize
              hands-on experience, critical thinking, and ethical practice,
              producing professionals who make significant contributions to
              patient care and medical services.
            </p> -->
            <!-- <p class="text-gray-700 mb-6">
              With state-of-the-art laboratories, experienced faculty, and
              strong clinical affiliations, we provide an optimal learning
              environment for aspiring paramedical professionals. Our programs
              are regularly updated to reflect the latest advancements in
              medical technology and healthcare practices.
            </p> -->
            <div class="flex flex-wrap gap-4">
              <a
                href="#courses"
                class="bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
                >Explore Courses</a
              >
              <a
                href="admission.php"
                class="bg-white border-2 border-primary text-primary hover:bg-primary/5 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
                >Apply Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Why Choose Our Nursing Programs
          </h2>
          <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Discover the advantages that set our Nursing education apart.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-6 rounded-lg shadow-md fade-in">
            <div
              class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto"
            >
              <i class="ri-user-star-line text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">
              Expert Faculty
            </h3>
            <p class="text-gray-700 text-center">
              Learn from experienced healthcare professionals and educators with
              extensive clinical and academic backgrounds. Our faculty members
              bring real-world expertise to the classroom, enriching your
              educational experience.
            </p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md fade-in">
            <div
              class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto"
            >
              <i class="ri-microscope-line text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">
              Advanced Laboratories
            </h3>
            <p class="text-gray-700 text-center">
              Train in state-of-the-art laboratories equipped with the latest
              medical technology and equipment. Our facilities replicate real
              healthcare environments, providing optimal hands-on learning
              opportunities.
            </p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md fade-in">
            <div
              class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto"
            >
              <i class="ri-hospital-line text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">
              Clinical Affiliations
            </h3>
            <p class="text-gray-700 text-center">
              Gain valuable clinical experience through our partnerships with
              leading hospitals and healthcare facilities. These affiliations
              provide opportunities for supervised practice in diverse medical
              settings.
            </p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md fade-in">
            <div
              class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto"
            >
              <i class="ri-book-open-line text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">
              Comprehensive Curriculum
            </h3>
            <p class="text-gray-700 text-center">
              Our programs feature a well-rounded curriculum that balances
              theoretical knowledge with practical skills. We continuously
              update our course content to reflect the latest advancements in
              healthcare.
            </p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md fade-in">
            <div
              class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto"
            >
              <i class="ri-briefcase-line text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">
              Career Support
            </h3>
            <p class="text-gray-700 text-center">
              Benefit from our dedicated career services, including job
              placement assistance, resume building, and interview preparation.
              Our strong industry connections help graduates secure rewarding
              positions.
            </p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md fade-in">
            <div
              class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto"
            >
              <i class="ri-global-line text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">
              Industry Recognition
            </h3>
            <p class="text-gray-700 text-center">
              Our programs are recognized by relevant professional bodies and
              healthcare organizations, ensuring that your qualification meets
              industry standards and enhances your employability.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Our Nursing Courses
          </h2>
          <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Comprehensive programs designed to prepare you for a successful
            career in healthcare.
          </p>
        </div>

        <!-- Course Tabs -->
        <div class="mb-8 fade-in">
          <div class="flex flex-wrap justify-center gap-4 mb-8">
            <button
              class="tab-button bg-primary text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer active"
              data-tab="bsc"
            >
              Bachelor of Science in Nursing
            </button>
            <button
              class="tab-button bg-gray-200 text-gray-800 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
              data-tab="gnm"
            >
              General Nursing and Midwifery
            </button>
            <!--<button-->
            <!--  class="tab-button bg-gray-200 text-gray-800 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
            <!--  data-tab="ott"-->
            <!-->
            <!--  Operation Theater Technology-->
            <!--</button>-->
          </div>

          <!-- bsc Tab Content -->
          <div id="bsc-content" class="tab-content active">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
              <div>
                <img
                  src="https://readdy.ai/api/search-image?query=medical%20laboratory%20technician%20working%20with%20microscope%20and%20blood%20samples%20in%20modern%20clinical%20laboratory%2C%20professional%20healthcare%20setting%2C%20diagnostic%20testing%2C%20medical%20technology&width=600&height=400&seq=32&orientation=landscape"
                  alt="Medical Laboratory Technology"
                  class="rounded-lg shadow-lg w-full object-cover object-top"
                />
              </div>
              <div>
                <h3 class="text-2xl font-bold text-primary mb-4">
                  Bachelor of Science in Nursing
                </h3>
                <p class="text-gray-700 mb-6">
                 Conducted by: Madhya Pradesh Professional Examination Board (MPPEB)
Purpose: Admission to B.Sc. Nursing course
                </p>
                <div class="space-y-4 mb-6">
                  <div class="flex items-start">
                    <div
                      class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary"
                    >
                      <i class="ri-time-line"></i>
                    </div>
                    <div>
                      <h4 class="font-semibold text-gray-800">Duration</h4>
                      <p class="text-gray-700">4 Years</p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary"
                    >
                      <i class="ri-graduation-cap-line"></i>
                    </div>
                    <div>
                      <h4 class="font-semibold text-gray-800">Qualification</h4>
                      <p class="text-gray-700">
                        PNST – Pre-Nursing Selection Test
                      </p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary"
                    >
                      <i class="ri-user-follow-line"></i>
                    </div>
                     <div>
                        <h4 class="font-semibold text-gray-800">Eligibility</h4>
                        <ul class="text-gray-700 list-disc ml-4">
                          <li>Male/Female candidates </li>
                          <li>Must be a resident of Madhya Pradesh</li>
                          <li>Educational qualification: Passed 12th standard (or appearing) with Physics, Chemistry, Biology, and English</li>
                          <li>Age limit: Typically 17–28 years (may vary slightly by year and category)</li>
                        </ul>
                      </div>
                  </div>
                </div>
                <a
                  href="admission.php"
                  class="inline-block bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
                  >Apply Now</a
                >
              </div>
            </div>
          </div>

          <!-- RIT Tab Content -->
          <div id="gnm-content" class="tab-content hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
              <div>
                <img
                  src="https://readdy.ai/api/search-image?query=radiography%20technician%20operating%20X-ray%20machine%20in%20modern%20hospital%20setting%2C%20professional%20healthcare%20environment%2C%20medical%20imaging%20technology%2C%20diagnostic%20radiology%20department&width=600&height=400&seq=33&orientation=landscape"
                  alt="Radiography & Imaging Technology"
                  class="rounded-lg shadow-lg w-full object-cover object-top"
                />
              </div>
              <div>
                <h3 class="text-2xl font-bold text-primary mb-4">
                  General Nursing and Midwifery
                </h3>
                <p class="text-gray-700 mb-6">
                 Conducted by: Some Indian states or institutions; less commonly used than PNST
Purpose: Admission to General Nursing and Midwifery (GNM) programs
                </p>
                <div class="space-y-4 mb-6">
                  <div class="flex items-start">
                    <div
                      class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary"
                    >
                      <i class="ri-time-line"></i>
                    </div>
                    <div>
                      <h4 class="font-semibold text-gray-800">Duration</h4>
                      <p class="text-gray-700">3 Years</p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary"
                    >
                      <i class="ri-graduation-cap-line"></i>
                    </div>
                    <div>
                      <h4 class="font-semibold text-gray-800">Qualification</h4>
                      <p class="text-gray-700">
                        GNST – General Nursing Training Selection Test
                      </p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary"
                    >
                      <i class="ri-user-follow-line"></i>
                    </div>
                    <div>
            <h4 class="font-semibold text-gray-800">Eligibility</h4>
            <ul class="text-gray-700 list-disc ml-4">
              <li>Male/ female candidates, though male candidates may be allowed in some institutions</li>
              <li>Educational qualification: 10+2 in any stream, preferably with Science</li>
              <li>Minimum 40–45% marks (varies by institute and category)</li>
              <li>Age limit: 17–35 years</li>
              
            </ul>
          </div>
                  </div>
                </div>
                <a
                  href="admission.php"
                  class="inline-block bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
                  >Apply Now</a
                >
              </div>
            </div>
          </div>

       
        </div>
      </div>
    </section>

    <!-- Curriculum Highlights -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Curriculum Highlights
          </h2>
          <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Our comprehensive curriculum combines theoretical knowledge with
            practical skills development.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 fade-in">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold text-primary mb-4">
              Theoretical Components
            </h3>
            <ul class="space-y-3">
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700">Human Anatomy & Physiology</span>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700">Biochemistry & Pathology</span>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700">Microbiology & Immunology</span>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700"
                  >Medical Ethics & Hospital Management</span
                >
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700"
                  >Pharmacology & Medication Administration</span
                >
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700"
                  >Healthcare Information Systems</span
                >
              </li>
            </ul>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold text-primary mb-4">
              Practical Training
            </h3>
            <ul class="space-y-3">
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700"
                  >Laboratory Techniques & Procedures</span
                >
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700">Diagnostic Imaging Procedures</span>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700"
                  >Surgical Assistance & Instrumentation</span
                >
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700"
                  >Clinical Rotations in Hospital Departments</span
                >
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700">Emergency Care Procedures</span>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <span class="text-gray-700"
                  >Medical Equipment Operation & Maintenance</span
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Facilities Section -->
    <!--<section class="py-16 bg-white">-->
    <!--  <div class="container mx-auto px-4">-->
    <!--    <div class="text-center mb-12 fade-in">-->
    <!--      <h2 class="text-3xl font-bold text-gray-800 mb-4">-->
    <!--        Our Specialized Facilities-->
    <!--      </h2>-->
    <!--      <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>-->
    <!--      <p class="text-gray-700 max-w-2xl mx-auto">-->
    <!--        State-of-the-art facilities designed to provide optimal learning-->
    <!--        experiences for paramedical students.-->
    <!--      </p>-->
    <!--    </div>-->
    <!--    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">-->
    <!--      <div-->
    <!--        class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in"-->
    <!--      >-->
    <!--        <img-->
    <!--          src="https://readdy.ai/api/search-image?query=modern%20medical%20laboratory%20with%20advanced%20equipment%2C%20students%20working%20with%20microscopes%20and%20diagnostic%20tools%2C%20bright%20clinical%20environment%2C%20healthcare%20education%20facility&width=400&height=250&seq=35&orientation=landscape"-->
    <!--          alt="Clinical Laboratory"-->
    <!--          class="w-full h-48 object-cover object-top"-->
    <!--        />-->
    <!--        <div class="p-6">-->
    <!--          <h3 class="font-bold text-gray-800 mb-2">-->
    <!--            Clinical Laboratories-->
    <!--          </h3>-->
    <!--          <p class="text-gray-700 text-sm">-->
    <!--            Our advanced clinical laboratories are equipped with the latest-->
    <!--            diagnostic equipment and tools, providing students with hands-on-->
    <!--            experience in various laboratory techniques and procedures.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div-->
    <!--        class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in"-->
    <!--      >-->
    <!--        <img-->
    <!--          src="https://readdy.ai/api/search-image?query=modern%20radiology%20department%20with%20X-ray%20machines%2C%20CT%20scanners%2C%20and%20imaging%20equipment%2C%20students%20learning%20radiography%20techniques%2C%20bright%20medical%20environment%2C%20healthcare%20education%20facility&width=400&height=250&seq=36&orientation=landscape"-->
    <!--          alt="Radiology Lab"-->
    <!--          class="w-full h-48 object-cover object-top"-->
    <!--        />-->
    <!--        <div class="p-6">-->
    <!--          <h3 class="font-bold text-gray-800 mb-2">Radiology Laboratory</h3>-->
    <!--          <p class="text-gray-700 text-sm">-->
    <!--            Our radiology laboratory features X-ray machines, CT simulators,-->
    <!--            and other imaging equipment, allowing students to develop skills-->
    <!--            in various radiographic and imaging techniques.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div-->
    <!--        class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in"-->
    <!--      >-->
    <!--        <img-->
    <!--          src="https://readdy.ai/api/search-image?query=simulated%20operation%20theater%20with%20surgical%20equipment%2C%20students%20practicing%20surgical%20techniques%2C%20bright%20medical%20environment%2C%20healthcare%20education%20facility%2C%20surgical%20training&width=400&height=250&seq=37&orientation=landscape"-->
    <!--          alt="Simulated OT"-->
    <!--          class="w-full h-48 object-cover object-top"-->
    <!--        />-->
    <!--        <div class="p-6">-->
    <!--          <h3 class="font-bold text-gray-800 mb-2">-->
    <!--            Simulated Operation Theater-->
    <!--          </h3>-->
    <!--          <p class="text-gray-700 text-sm">-->
    <!--            Our simulated operation theater replicates a real surgical-->
    <!--            environment, complete with operating tables, surgical-->
    <!--            instruments, and anesthesia equipment for practical training.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div-->
    <!--        class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in"-->
    <!--      >-->
    <!--        <img-->
    <!--          src="https://readdy.ai/api/search-image?query=modern%20microbiology%20laboratory%20with%20students%20working%20with%20cultures%20and%20microscopes%2C%20bright%20clinical%20environment%2C%20healthcare%20education%20facility%2C%20scientific%20research&width=400&height=250&seq=38&orientation=landscape"-->
    <!--          alt="Microbiology Lab"-->
    <!--          class="w-full h-48 object-cover object-top"-->
    <!--        />-->
    <!--        <div class="p-6">-->
    <!--          <h3 class="font-bold text-gray-800 mb-2">-->
    <!--            Microbiology Laboratory-->
    <!--          </h3>-->
    <!--          <p class="text-gray-700 text-sm">-->
    <!--            Our specialized microbiology laboratory is equipped for-->
    <!--            culturing microorganisms, microscopy, and various-->
    <!--            microbiological techniques essential for diagnostic testing.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div-->
    <!--        class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in"-->
    <!--      >-->
    <!--        <img-->
    <!--          src="https://readdy.ai/api/search-image?query=modern%20biochemistry%20laboratory%20with%20students%20conducting%20chemical%20analysis%2C%20bright%20clinical%20environment%2C%20healthcare%20education%20facility%2C%20scientific%20research%20equipment&width=400&height=250&seq=39&orientation=landscape"-->
    <!--          alt="Biochemistry Lab"-->
    <!--          class="w-full h-48 object-cover object-top"-->
    <!--        />-->
    <!--        <div class="p-6">-->
    <!--          <h3 class="font-bold text-gray-800 mb-2">-->
    <!--            Biochemistry Laboratory-->
    <!--          </h3>-->
    <!--          <p class="text-gray-700 text-sm">-->
    <!--            Our biochemistry laboratory features advanced analyzers and-->
    <!--            equipment for biochemical testing, providing students with-->
    <!--            practical experience in clinical chemistry.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div-->
    <!--        class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in"-->
    <!--      >-->
    <!--        <img-->
    <!--          src="https://readdy.ai/api/search-image?query=modern%20computer%20laboratory%20with%20medical%20software%2C%20students%20analyzing%20medical%20data%2C%20bright%20educational%20environment%2C%20healthcare%20informatics%20training&width=400&height=250&seq=40&orientation=landscape"-->
    <!--          alt="Computer Lab"-->
    <!--          class="w-full h-48 object-cover object-top"-->
    <!--        />-->
    <!--        <div class="p-6">-->
    <!--          <h3 class="font-bold text-gray-800 mb-2">-->
    <!--            Medical Informatics Lab-->
    <!--          </h3>-->
    <!--          <p class="text-gray-700 text-sm">-->
    <!--            Our computer laboratory is equipped with specialized medical-->
    <!--            software and systems used in healthcare settings, preparing-->
    <!--            students for the digital aspects of modern healthcare.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

    <!-- Career Opportunities -->
    <!--<section class="py-16 bg-gray-50">-->
    <!--  <div class="container mx-auto px-4">-->
    <!--    <div class="text-center mb-12 fade-in">-->
    <!--      <h2 class="text-3xl font-bold text-gray-800 mb-4">-->
    <!--        Career Opportunities-->
    <!--      </h2>-->
    <!--      <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>-->
    <!--      <p class="text-gray-700 max-w-2xl mx-auto">-->
    <!--        Our paramedical graduates find rewarding careers in various-->
    <!--        healthcare settings.-->
    <!--      </p>-->
    <!--    </div>-->
    <!--    <div-->
    <!--      class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 fade-in"-->
    <!--    >-->
    <!--      <div class="course-card bg-white p-6 rounded-lg shadow-md">-->
    <!--        <div-->
    <!--          class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4"-->
    <!--        >-->
    <!--          <i class="ri-hospital-line text-2xl"></i>-->
    <!--        </div>-->
    <!--        <h3 class="text-xl font-bold text-gray-800 mb-3">-->
    <!--          Hospitals & Medical Centers-->
    <!--        </h3>-->
    <!--        <p class="text-gray-700 mb-4">-->
    <!--          Work in various departments including laboratories, radiology,-->
    <!--          operation theaters, and emergency services.-->
    <!--        </p>-->
    <!--        <ul class="space-y-2 text-gray-700">-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Diagnostic laboratories</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Imaging departments</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Surgical units</span>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--      <div class="course-card bg-white p-6 rounded-lg shadow-md">-->
    <!--        <div-->
    <!--          class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4"-->
    <!--        >-->
    <!--          <i class="ri-test-tube-line text-2xl"></i>-->
    <!--        </div>-->
    <!--        <h3 class="text-xl font-bold text-gray-800 mb-3">-->
    <!--          Diagnostic Centers-->
    <!--        </h3>-->
    <!--        <p class="text-gray-700 mb-4">-->
    <!--          Specialized roles in independent diagnostic and imaging centers-->
    <!--          performing various medical tests and procedures.-->
    <!--        </p>-->
    <!--        <ul class="space-y-2 text-gray-700">-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Pathology laboratories</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Radiology centers</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Diagnostic imaging facilities</span>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--      <div class="course-card bg-white p-6 rounded-lg shadow-md">-->
    <!--        <div-->
    <!--          class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4"-->
    <!--        >-->
    <!--          <i class="ri-medicine-bottle-line text-2xl"></i>-->
    <!--        </div>-->
    <!--        <h3 class="text-xl font-bold text-gray-800 mb-3">-->
    <!--          Pharmaceutical Companies-->
    <!--        </h3>-->
    <!--        <p class="text-gray-700 mb-4">-->
    <!--          Roles in research, quality control, and clinical trials for-->
    <!--          pharmaceutical and medical device companies.-->
    <!--        </p>-->
    <!--        <ul class="space-y-2 text-gray-700">-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Research laboratories</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Quality assurance departments</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Clinical trial teams</span>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--      <div class="course-card bg-white p-6 rounded-lg shadow-md">-->
    <!--        <div-->
    <!--          class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4"-->
    <!--        >-->
    <!--          <i class="ri-government-line text-2xl"></i>-->
    <!--        </div>-->
    <!--        <h3 class="text-xl font-bold text-gray-800 mb-3">-->
    <!--          Government Health Services-->
    <!--        </h3>-->
    <!--        <p class="text-gray-700 mb-4">-->
    <!--          Opportunities in public health laboratories, government hospitals,-->
    <!--          and health departments.-->
    <!--        </p>-->
    <!--        <ul class="space-y-2 text-gray-700">-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Public health laboratories</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Government medical facilities</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Health department services</span>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--      <div class="course-card bg-white p-6 rounded-lg shadow-md">-->
    <!--        <div-->
    <!--          class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4"-->
    <!--        >-->
    <!--          <i class="ri-building-line text-2xl"></i>-->
    <!--        </div>-->
    <!--        <h3 class="text-xl font-bold text-gray-800 mb-3">Blood Banks</h3>-->
    <!--        <p class="text-gray-700 mb-4">-->
    <!--          Specialized roles in blood collection, processing, testing, and-->
    <!--          transfusion services.-->
    <!--        </p>-->
    <!--        <ul class="space-y-2 text-gray-700">-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Blood collection centers</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Blood component preparation</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Transfusion services</span>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--      <div class="course-card bg-white p-6 rounded-lg shadow-md">-->
    <!--        <div-->
    <!--          class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4"-->
    <!--        >-->
    <!--          <i class="ri-flight-takeoff-line text-2xl"></i>-->
    <!--        </div>-->
    <!--        <h3 class="text-xl font-bold text-gray-800 mb-3">-->
    <!--          International Opportunities-->
    <!--        </h3>-->
    <!--        <p class="text-gray-700 mb-4">-->
    <!--          Global career prospects in healthcare facilities around the world,-->
    <!--          particularly in regions with high demand for paramedical-->
    <!--          professionals.-->
    <!--        </p>-->
    <!--        <ul class="space-y-2 text-gray-700">-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>International hospitals</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Global health organizations</span>-->
    <!--          </li>-->
    <!--          <li class="flex items-start">-->
    <!--            <div-->
    <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
    <!--            >-->
    <!--              <i class="ri-arrow-right-s-line"></i>-->
    <!--            </div>-->
    <!--            <span>Medical tourism facilities</span>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    
    
    
    <!-- Faculty Section -->
    <!--<section class="py-16 bg-white">-->
    <!--  <div class="container mx-auto px-4">-->
    <!--    <div class="text-center mb-12 fade-in">-->
    <!--      <h2 class="text-3xl font-bold text-gray-800 mb-4">-->
    <!--        Our Expert Faculty-->
    <!--      </h2>-->
    <!--      <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>-->
    <!--      <p class="text-gray-700 max-w-2xl mx-auto">-->
    <!--        Learn from experienced professionals with extensive clinical and-->
    <!--        academic backgrounds.-->
    <!--      </p>-->
    <!--    </div>-->
    <!--    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">-->
    <!--      <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">-->
    <!--        <img-->
    <!--          src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20middle-aged%20male%20medical%20laboratory%20professor%20in%20lab%20coat%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education&width=300&height=300&seq=41&orientation=squarish"-->
    <!--          alt="Dr. Michael Thompson"-->
    <!--          class="w-full h-64 object-cover object-top"-->
    <!--        />-->
    <!--        <div class="p-4 text-center">-->
    <!--          <h3 class="font-bold text-gray-800 mb-1">Dr. Michael Thompson</h3>-->
    <!--          <p class="text-gray-600 text-sm mb-2">-->
    <!--            Head of Medical Laboratory Technology-->
    <!--          </p>-->
    <!--          <p class="text-gray-700 text-sm">-->
    <!--            Ph.D. in Clinical Pathology with 15+ years of experience in-->
    <!--            diagnostic laboratories and academic teaching.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">-->
    <!--        <img-->
    <!--          src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20middle-aged%20female%20radiology%20professor%20in%20professional%20attire%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education&width=300&height=300&seq=42&orientation=squarish"-->
    <!--          alt="Dr. Jennifer Lee"-->
    <!--          class="w-full h-64 object-cover object-top"-->
    <!--        />-->
    <!--        <div class="p-4 text-center">-->
    <!--          <h3 class="font-bold text-gray-800 mb-1">Dr. Jennifer Lee</h3>-->
    <!--          <p class="text-gray-600 text-sm mb-2">-->
    <!--            Head of Radiography & Imaging-->
    <!--          </p>-->
    <!--          <p class="text-gray-700 text-sm">-->
    <!--            Ph.D. in Medical Imaging with extensive experience in advanced-->
    <!--            imaging techniques and radiological research.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">-->
    <!--        <img-->
    <!--          src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20middle-aged%20male%20surgical%20technology%20professor%20in%20scrubs%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education&width=300&height=300&seq=43&orientation=squarish"-->
    <!--          alt="Dr. David Rodriguez"-->
    <!--          class="w-full h-64 object-cover object-top"-->
    <!--        />-->
    <!--        <div class="p-4 text-center">-->
    <!--          <h3 class="font-bold text-gray-800 mb-1">Dr. David Rodriguez</h3>-->
    <!--          <p class="text-gray-600 text-sm mb-2">-->
    <!--            Head of Operation Theater Technology-->
    <!--          </p>-->
    <!--          <p class="text-gray-700 text-sm">-->
    <!--            M.D. with specialization in Surgery and 12+ years of experience-->
    <!--            in surgical procedures and operating room management.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">-->
    <!--        <img-->
    <!--          src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20middle-aged%20female%20microbiology%20professor%20in%20lab%20coat%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education&width=300&height=300&seq=44&orientation=squarish"-->
    <!--          alt="Dr. Priya Sharma"-->
    <!--          class="w-full h-64 object-cover object-top"-->
    <!--        />-->
    <!--        <div class="p-4 text-center">-->
    <!--          <h3 class="font-bold text-gray-800 mb-1">Dr. Priya Sharma</h3>-->
    <!--          <p class="text-gray-600 text-sm mb-2">-->
    <!--            Professor of Microbiology-->
    <!--          </p>-->
    <!--          <p class="text-gray-700 text-sm">-->
    <!--            Ph.D. in Microbiology with research focus on antimicrobial-->
    <!--            resistance and clinical microbiology applications.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

    <!-- Testimonials Section -->
    <!--<section class="py-16 bg-gray-50">-->
    <!--  <div class="container mx-auto px-4">-->
    <!--    <div class="text-center mb-12 fade-in">-->
    <!--      <h2 class="text-3xl font-bold text-gray-800 mb-4">-->
    <!--        What Our Students Say-->
    <!--      </h2>-->
    <!--      <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>-->
    <!--      <p class="text-gray-700 max-w-2xl mx-auto">-->
    <!--        Hear from our alumni about their experiences and success stories.-->
    <!--      </p>-->
    <!--    </div>-->
    <!--    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 fade-in">-->
    <!--      <div class="bg-white p-6 rounded-lg shadow-md">-->
    <!--        <div class="flex items-center mb-4">-->
    <!--          <img-->
    <!--            src=""-->
    <!--            alt="Samantha Wilson"-->
    <!--            class="w-16 h-16 rounded-full object-cover mr-4"-->
    <!--          />-->
    <!--          <div>-->
    <!--            <h4 class="font-semibold text-gray-800">Samantha Wilson</h4>-->
    <!--            <p class="text-gray-600 text-sm">MLT Graduate, 2023</p>-->
    <!--            <p class="text-gray-600 text-sm">-->
    <!--              Clinical Laboratory Technologist at City General Hospital-->
    <!--            </p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <p class="text-gray-700">-->
    <!--          "The Medical Laboratory Technology program provided me with-->
    <!--          comprehensive knowledge and hands-on experience that prepared me-->
    <!--          well for my career. The faculty's expertise and the-->
    <!--          state-of-the-art laboratories made learning both challenging and-->
    <!--          enjoyable. I secured a position at a leading hospital immediately-->
    <!--          after graduation."-->
    <!--        </p>-->
    <!--      </div>-->
    <!--      <div class="bg-white p-6 rounded-lg shadow-md">-->
    <!--        <div class="flex items-center mb-4">-->
    <!--          <img-->
    <!--            src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20male%20radiography%20technician%20in%20scrubs%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20professional&width=100&height=100&seq=46&orientation=squarish"-->
    <!--            alt="Jason Chen"-->
    <!--            class="w-16 h-16 rounded-full object-cover mr-4"-->
    <!--          />-->
    <!--          <div>-->
    <!--            <h4 class="font-semibold text-gray-800">Jason Chen</h4>-->
    <!--            <p class="text-gray-600 text-sm">RIT Graduate, 2022</p>-->
    <!--            <p class="text-gray-600 text-sm">-->
    <!--              Senior Radiographer at Metropolitan Medical Center-->
    <!--            </p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <p class="text-gray-700">-->
    <!--          "The Radiography program exceeded my expectations. The curriculum-->
    <!--          was well-structured, covering both traditional and advanced-->
    <!--          imaging techniques. The clinical rotations provided valuable-->
    <!--          real-world experience, and the faculty's guidance was instrumental-->
    <!--          in my professional development. I'm now thriving in my career as a-->
    <!--          radiographer."-->
    <!--        </p>-->
    <!--      </div>-->
    <!--      <div class="bg-white p-6 rounded-lg shadow-md">-->
    <!--        <div class="flex items-center mb-4">-->
    <!--          <img-->
    <!--            src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20female%20operation%20theater%20technician%20in%20scrubs%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20professional&width=100&height=100&seq=47&orientation=squarish"-->
    <!--            alt="Aisha Patel"-->
    <!--            class="w-16 h-16 rounded-full object-cover mr-4"-->
    <!--          />-->
    <!--          <div>-->
    <!--            <h4 class="font-semibold text-gray-800">Aisha Patel</h4>-->
    <!--            <p class="text-gray-600 text-sm">OTT Graduate, 2021</p>-->
    <!--            <p class="text-gray-600 text-sm">-->
    <!--              Operation Theater Technician at University Hospital-->
    <!--            </p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <p class="text-gray-700">-->
    <!--          "The Operation Theater Technology program was rigorous and-->
    <!--          comprehensive, providing me with the skills needed to excel in the-->
    <!--          surgical environment. The simulated OT experiences and clinical-->
    <!--          rotations were particularly valuable. The faculty's mentorship-->
    <!--          helped me develop both technical skills and professional-->
    <!--          confidence."-->
    <!--        </p>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->



<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">
        What Our Students Say
      </h2>
      <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
      <p class="text-gray-700 max-w-2xl mx-auto">
        Hear from our alumni about their experiences and success stories.
      </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 fade-in">
      <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
          <img
            src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20female%20medical%20laboratory%20technician%20in%20lab%20coat%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20professional&width=100&height=100&seq=45&orientation=squarish"
            alt="Neha Sharma"
            class="w-16 h-16 rounded-full object-cover mr-4"
          />
          <div>
            <h4 class="font-semibold text-gray-800">Neha Sharma</h4>
            <p class="text-gray-600 text-sm">GNM Graduate, 2022</p>
            <p class="text-gray-600 text-sm">
              Staff Nurse at CareWell Multispeciality Hospital
            </p>
          </div>
        </div>
        <p class="text-gray-700">
          "The GNM program gave me the strong clinical foundation I needed. The practical training and exposure to real-life hospital environments made a huge difference in my confidence. Today, I feel proud to serve patients with empathy and professionalism."
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
          <img
            src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20male%20radiography%20technician%20in%20scrubs%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20professional&width=100&height=100&seq=46&orientation=squarish"
            alt="Rahul Verma"
            class="w-16 h-16 rounded-full object-cover mr-4"
          />
          <div>
            <h4 class="font-semibold text-gray-800">Rahul Verma</h4>
            <p class="text-gray-600 text-sm">B.Sc Nursing Graduate, 2021</p>
            <p class="text-gray-600 text-sm">
              ICU Nurse at Apollo Hospitals
            </p>
          </div>
        </div>
        <p class="text-gray-700">
          "The B.Sc Nursing curriculum was both challenging and rewarding. The theoretical knowledge combined with intensive practicals helped me understand patient care deeply. The faculty were always supportive and guided us at every step."
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
          <img
            src="https://plus.unsplash.com/premium_photo-1723568666044-1b066e26b1fb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8aW5kaWFuJTIwZ2lybHxlbnwwfHwwfHx8MA%3D%3D"
            alt="Aarushi Mehta"
            class="w-16 h-16 rounded-full object-cover mr-4"
          />
          <div>
            <h4 class="font-semibold text-gray-800">Aarushi Mehta</h4>
            <p class="text-gray-600 text-sm">GNM Graduate, 2023</p>
            <p class="text-gray-600 text-sm">
              Pediatric Ward Nurse at City Children's Hospital
            </p>
          </div>
        </div>
        <p class="text-gray-700">
          "Choosing GNM was the best decision I made. The hands-on training, simulated labs, and hospital postings built my competence. Today, I confidently manage pediatric care and contribute meaningfully in my department."
        </p>
      </div>
    </div>
  </div>
</section>

    <!-- FAQ Section -->
   <section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">
        Frequently Asked Questions
      </h2>
      <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
      <p class="text-gray-700 max-w-2xl mx-auto">
        Find answers to common questions about our GNM and B.Sc. Nursing programs.
      </p>
    </div>
    <div class="max-w-3xl mx-auto fade-in">

      <!-- Q1 -->
      <div class="accordion-item">
        <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
          <span class="font-semibold text-gray-800">
            What is the eligibility criteria for GNM and B.Sc. Nursing programs?
          </span>
          <div class="w-5 h-5 flex items-center justify-center accordion-icon">
            <i class="ri-arrow-down-s-line"></i>
          </div>
        </button>
        <div class="accordion-content px-6 pb-4">
          <p class="text-gray-700">
            For GNM, candidates must have completed 10+2 in any stream (preferably with Biology) with at least 40-50% marks. For B.Sc. Nursing, candidates must have completed 10+2 with Physics, Chemistry, and Biology and scored a minimum of 45-50% marks. Admission may also require passing an entrance test or personal interview depending on the institution.
          </p>
        </div>
      </div>

      <!-- Q2 -->
      <div class="accordion-item">
        <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
          <span class="font-semibold text-gray-800">
            What is the duration and structure of the GNM and B.Sc. Nursing courses?
          </span>
          <div class="w-5 h-5 flex items-center justify-center accordion-icon">
            <i class="ri-arrow-down-s-line"></i>
          </div>
        </button>
        <div class="accordion-content px-6 pb-4">
          <p class="text-gray-700">
            The GNM program is a 3-year diploma course followed by a 6-month internship. B.Sc. Nursing is a 4-year undergraduate degree program, which includes both theoretical instruction and practical clinical training in hospitals and healthcare centers.
          </p>
        </div>
      </div>

      <!-- Q3 -->
      <div class="accordion-item">
        <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
          <span class="font-semibold text-gray-800">
            What are the career opportunities after completing GNM or B.Sc. Nursing?
          </span>
          <div class="w-5 h-5 flex items-center justify-center accordion-icon">
            <i class="ri-arrow-down-s-line"></i>
          </div>
        </button>
        <div class="accordion-content px-6 pb-4">
          <p class="text-gray-700">
            After GNM or B.Sc. Nursing, students can work as staff nurses, ICU nurses, emergency care nurses, or in other roles at hospitals, clinics, and community health centers. B.Sc. Nursing graduates also have opportunities for higher studies like M.Sc. Nursing, and can pursue roles in education, research, or hospital administration.
          </p>
        </div>
      </div>

      <!-- Q4 -->
      <div class="accordion-item">
        <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
          <span class="font-semibold text-gray-800">
            Is hostel and clinical training facility available for nursing students?
          </span>
          <div class="w-5 h-5 flex items-center justify-center accordion-icon">
            <i class="ri-arrow-down-s-line"></i>
          </div>
        </button>
        <div class="accordion-content px-6 pb-4">
          <p class="text-gray-700">
            Yes, our institution provides separate hostel facilities for boys and girls with all necessary amenities. Clinical training is conducted in affiliated hospitals where students get hands-on experience under the guidance of experienced medical staff, ensuring practical exposure to real-life healthcare settings.
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
              Begin Your Journey in Nursing Science
            </h2>
            <p class="text-white text-opacity-90 text-lg">
              Take the first step towards a rewarding career in healthcare.
              Apply now for our Nursing programs or contact us to learn
              more.
            </p>
          </div>
          <div class="flex flex-wrap gap-4 fade-in">
            <a
              href="admission.php"
              class="inline-block bg-white text-primary hover:bg-gray-100 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
              >Apply Now</a
            >
            <a
              href="contact.php"
              class="inline-block bg-transparent border-2 border-white text-white hover:bg-white hover:bg-opacity-10 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
              >Contact Us</a
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
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer"
              >
                <i class="ri-facebook-fill"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer"
              >
                <i class="ri-twitter-fill"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer"
              >
                <i class="ri-instagram-line"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer"
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
                  class="bg-secondary hover:bg-opacity-90 text-white px-4 py-2 rounded-r-button whitespace-nowrap cursor-pointer"
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

    <script id="tab-script">
      document.addEventListener("DOMContentLoaded", function () {
        const tabButtons = document.querySelectorAll(".tab-button");
        const tabContents = document.querySelectorAll(".tab-content");

        tabButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const tabId = this.getAttribute("data-tab");

            // Remove active class from all buttons and contents
            tabButtons.forEach((btn) => {
              btn.classList.remove("active");
              btn.classList.add("bg-gray-200");
              btn.classList.remove("bg-primary");
              btn.classList.add("text-gray-800");
              btn.classList.remove("text-white");
            });
            tabContents.forEach((content) => {
              content.classList.remove("active");
            });

            // Add active class to current button and content
            this.classList.add("active");
            this.classList.remove("bg-gray-200");
            this.classList.add("bg-primary");
            this.classList.remove("text-gray-800");
            this.classList.add("text-white");
            document.getElementById(`${tabId}-content`).classList.add("active");
          });
        });
      });
    </script>
  </body>
</html>
