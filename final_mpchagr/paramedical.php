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
    <!-- Page Header -->
    <div
      class="page-header py-24 relative"
      style="background-image: url('https://readdy.ai/api/search-image?query=modern%20paramedical%20laboratory%20with%20students%20in%20lab%20coats%20working%20with%20medical%20equipment%2C%20bright%20clinical%20environment%2C%20professional%20healthcare%20education%20setting%2C%20medical%20technology%20training&width=1600&height=500&seq=30&orientation=landscape')"
    >
      <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">
            School of Paramedical Science
          </h1>
          <div class="flex items-center justify-center">
            <a href="index.php" class="text-white hover:text-secondary"
              >Home</a
            >
            <div class="w-4 h-4 flex items-center justify-center mx-2">
              <i class="ri-arrow-right-s-line"></i>
            </div>
            <span class="text-secondary">Paramedical Science</span>
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
              Excellence in Paramedical Education
            </h2>
            <div class="w-20 h-1 bg-secondary mb-6"></div>
            <p class="text-gray-700 mb-6">
              The School of Paramedical Science at our institution is dedicated
              to providing comprehensive education and training in various
              paramedical disciplines. Established in 2000, our paramedical
              programs have been designed to meet the growing demand for skilled
              healthcare professionals who play crucial supporting roles in the
              medical field.
            </p>
            <p class="text-gray-700 mb-6">
              Our curriculum combines theoretical knowledge with extensive
              practical training, ensuring that graduates are well-prepared for
              the challenges of modern healthcare environments. We emphasize
              hands-on experience, critical thinking, and ethical practice,
              producing professionals who make significant contributions to
              patient care and medical services.
            </p>
            <p class="text-gray-700 mb-6">
              With state-of-the-art laboratories, experienced faculty, and
              strong clinical affiliations, we provide an optimal learning
              environment for aspiring paramedical professionals. Our programs
              are regularly updated to reflect the latest advancements in
              medical technology and healthcare practices.
            </p>
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
    <!-- <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Why Choose Our Paramedical Programs
          </h2>
          <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
          <p class="text-gray-700 max-w-2xl mx-auto">
            Discover the advantages that set our paramedical education apart.
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
    </section> -->

    <!-- Courses Section -->
    <section id="courses" class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12 fade-in">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">
            Our Paramedical Courses
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
              data-tab="BPT"
            >
              Bachelor of Physiotherapy
            </button>
            <button
              class="tab-button bg-gray-200 text-gray-800 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
              data-tab="BMLT"
            >
              Bachelor in Medical Lab. Technology
            </button>
            <button
              class="tab-button bg-gray-200 text-gray-800 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
              data-tab="DMLT"
            >
              Diploma in Medical Lab. Technician
            </button>
            
             <button
              class="tab-button bg-gray-200 text-gray-800 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
              data-tab="DXRay"
            >
             Diploma In X-Ray Technician
            </button>

             <button
              class="tab-button bg-gray-200 text-gray-800 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
              data-tab="OT"
            >
             Certificate in Operation Theatre Technician
            </button>

             <button
              class="tab-button bg-gray-200 text-gray-800 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
              data-tab="HIT"
            >
              Health Inspector Technician
            </button>
            
            
             <button
              class="tab-button bg-gray-200 text-gray-800 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
              data-tab="PT"
            >
              Panchkarma Technician
            </button>
            
          
            
          </div>

          <!-- BPT Tab Content -->
          <div id="BPT-content" class="tab-content active">
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
  Bachelor of Physiotherapy
</h3>
<p class="text-gray-700 mb-6">
  The Bachelor of Physiotherapy program equips students with the knowledge and practical skills needed to assess, diagnose, and treat physical conditions and injuries. Through hands-on training and theoretical study, students learn to improve patient mobility, relieve pain, and promote physical rehabilitation for better quality of life.
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
                      <p class="text-gray-700">4.5 Year Degree Course</p>
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
                        12th
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
                          <li>10+2 with Physics, Chemistry, and Biology (PCB)</li>
                          <li>Minimum 45% marks (40% for SC/ST/OBC candidates)</li>
                          <li>Minimum age: 17 years as on 31st December of admission year</li>
                        </ul>
                      </div>
                  </div>
                </div>
                <a
                  href="admission.php"
                  class="inline-block bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
                  >Apply Now</a
                >
                  <a
                  href="admission.php"
                  class="inline-block bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
                  >View More</a
                >
              </div>
            </div>
          </div>

          <!-- BMLT Tab Content -->
          <div id="BMLT-content" class="tab-content hidden">
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
                  Bachelor in Medical Lab. Technology
                </h3>
                <p class="text-gray-700 mb-6">
                  The Bachelor in Medical Laboratory Technology program prepares students to perform diagnostic tests and laboratory procedures that aid in the detection, diagnosis, and treatment of diseases. Students gain expertise in handling laboratory equipment, analyzing samples, and ensuring accurate test results to support clinical decisions.
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
                        12th
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
                          <li>The candidate must have passed 10+2 with at least 45% marks in aggregate of Physics, Chemistry and Biology (P. C. B.)</li>
                          <li>In case of S. C. / S. T. / O. B. C. candidate 5% marks relaxation will be given for the admission in above said course.</li>
                          <li>The minimum age for admission shall be 17 years on 31 December of academic year of admission.</li>
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

          <!-- DMLT Tab Content -->
          <div id="DMLT-content" class="tab-content hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
              <div>
                <img
                  src="https://readdy.ai/api/search-image?query=operation%20theater%20technician%20assisting%20in%20surgery%2C%20modern%20operating%20room%20environment%2C%20medical%20professionals%20in%20surgical%20setting%2C%20healthcare%20professionals%20in%20sterile%20environment%2C%20medical%20technology&width=600&height=400&seq=34&orientation=landscape"
                  alt="Operation Theater Technology"
                  class="rounded-lg shadow-lg w-full object-cover object-top"
                />
              </div>
              <div>
               <h3 class="text-2xl font-bold text-primary mb-4">
              Diploma in Medical Lab. Technician
            </h3>
            <p class="text-gray-700 mb-6">
              The Diploma in Medical Lab. Technician program trains students in the fundamental techniques of laboratory testing and diagnostics. Students learn to collect, process, and analyze clinical samples, operate laboratory instruments, and maintain accurate records, playing a vital role in disease detection and patient care.
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
                      <p class="text-gray-700">2 Years</p>
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
                        12th
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
                          <li>The candidate must have passed 10+2 with at least 45% marks in aggregate of Physics, Chemistry and Biology (P. C. B.)</li>
                          <li>In case of S. C. / S. T. / O. B. C. candidate 5% marks relaxation will be given for the admission in above said course</li>
                          <li>The minimum age for admission shall be 17 years on 31 December of academic year of admission.</li>
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
          
          
           <div id="DXRay-content" class="tab-content hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
              <div>
                <img
                  src="https://readdy.ai/api/search-image?query=operation%20theater%20technician%20assisting%20in%20surgery%2C%20modern%20operating%20room%20environment%2C%20medical%20professionals%20in%20surgical%20setting%2C%20healthcare%20professionals%20in%20sterile%20environment%2C%20medical%20technology&width=600&height=400&seq=34&orientation=landscape"
                  alt="Operation Theater Technology"
                  class="rounded-lg shadow-lg w-full object-cover object-top"
                />
              </div>
              <div>
               <h3 class="text-2xl font-bold text-primary mb-4">
                  Diploma In X-Ray Technician
                </h3>
                <p class="text-gray-700 mb-6">
                  The Diploma in X-Ray Technician program trains students to operate X-ray machines and other imaging equipment used to capture images of the human body's internal structures. Students learn to ensure patient safety, handle radiographic procedures, and assist in accurate diagnosis under the supervision of radiologists.
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
                      <p class="text-gray-700">2 Years</p>
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
                        12th
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
                          <li>The candidate must have passed 10+2 with at least 45% marks in aggregate of Physics, Chemistry and Biology (P. C. B.).</li>
                          <li>In case of S. C. / S. T. / O. B. C. candidate 5% marks relaxation will be given for the admission in above said course.</li>
                          <li>The minimum age for admission shall be 17 years on 31 December of academic year of admission.</li>
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
          
          
          
          
          
           <div id="OT-content" class="tab-content hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
              <div>
                <img
                  src="https://readdy.ai/api/search-image?query=operation%20theater%20technician%20assisting%20in%20surgery%2C%20modern%20operating%20room%20environment%2C%20medical%20professionals%20in%20surgical%20setting%2C%20healthcare%20professionals%20in%20sterile%20environment%2C%20medical%20technology&width=600&height=400&seq=34&orientation=landscape"
                  alt="Operation Theater Technology"
                  class="rounded-lg shadow-lg w-full object-cover object-top"
                />
              </div>
              <div>
               <h3 class="text-2xl font-bold text-primary mb-4">
                  Certificate in Operation Theatre Technician
                </h3>
                <p class="text-gray-700 mb-6">
                  The Certificate in Operation Theatre Technician program provides foundational training for students to assist during surgical procedures. Students learn to maintain sterile environments, handle surgical instruments, and support surgeons and medical staff in the operation theatre, ensuring smooth and safe surgical operations.
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
                      <p class="text-gray-700">1 Year Certificate Course </p>
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
                        12th
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
                          <li>The candidate must have passed 10+2 with at least 45% marks in aggregate of Physics, Chemistry and Biology (P. C. B.).</li>
                          <li>In case of S. C. / S. T. / O. B. C. candidate 5% marks relaxation will be given for the admission in above said course.</li>
                          <li>The minimum age for admission shall be 17 years on 31 December of academic year of admission.</li>
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
          
          
          
          
          
          
          
           <div id="HIT-content" class="tab-content hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
              <div>
                <img
                  src="https://readdy.ai/api/search-image?query=operation%20theater%20technician%20assisting%20in%20surgery%2C%20modern%20operating%20room%20environment%2C%20medical%20professionals%20in%20surgical%20setting%2C%20healthcare%20professionals%20in%20sterile%20environment%2C%20medical%20technology&width=600&height=400&seq=34&orientation=landscape"
                  alt="Operation Theater Technology"
                  class="rounded-lg shadow-lg w-full object-cover object-top"
                />
              </div>
              <div>
              <h3 class="text-2xl font-bold text-primary mb-4">
              Health Inspector Technician
            </h3>
            <p class="text-gray-700 mb-6">
              The Health Inspector Technician program trains students to monitor and enforce public health standards in various settings. Students learn about sanitation, hygiene, disease prevention, food safety, and health regulations, enabling them to assist in maintaining community health and preventing outbreaks.
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
                      <p class="text-gray-700">1 Year Certificate Course</p>
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
                        12th
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
                          <li>The candidate must have passed 10+2 with at least 45% marks in aggregate of Physics, Chemistry and Biology (P. C. B.).</li>
                          <li>In case of S. C. / S. T. / O. B. C. candidate 5% marks relaxation will be given for the admission in above said course.</li>
                          <li>The minimum age for admission shall be 17 years on 31 December of academic year of admission.</li>
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
          
          
          
          
          
          
           <div id="PT-content" class="tab-content hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
              <div>
                <img
                  src="https://readdy.ai/api/search-image?query=operation%20theater%20technician%20assisting%20in%20surgery%2C%20modern%20operating%20room%20environment%2C%20medical%20professionals%20in%20surgical%20setting%2C%20healthcare%20professionals%20in%20sterile%20environment%2C%20medical%20technology&width=600&height=400&seq=34&orientation=landscape"
                  alt="Operation Theater Technology"
                  class="rounded-lg shadow-lg w-full object-cover object-top"
                />
              </div>
              <div>
               <h3 class="text-2xl font-bold text-primary mb-4">
                  Panchkarma Technician
                </h3>
                <p class="text-gray-700 mb-6">
                  The Panchkarma Technician program trains students in traditional Ayurvedic detoxification and rejuvenation therapies. Students learn to perform various Panchkarma procedures such as Abhyanga, Shirodhara, Basti, and more, assisting Ayurvedic doctors in promoting holistic healing and wellness for patients.
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
                      <p class="text-gray-700">1 Year Certificate Course</p>
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
                       12th
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
                          <li>The candidate must have passed 10+2 with at least 45% marks in aggregate of All subject (art, Commerce, Maths)</li>
                          <li>In case of S. C. / S. T. / O. B. C. candidate 5% marks relaxation will be given for the admission in above said course.</li>
                          <li>The minimum age for admission shall be 17 years on 31 December of academic year of admission.</li>
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
 <section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">
        Hear from Our Paramedical Graduates
      </h2>
      <div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
      <p class="text-gray-700 max-w-2xl mx-auto">
        Discover how our paramedical programs have transformed the careers of our students and helped them become skilled healthcare professionals.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 fade-in">

      <!-- Testimonial 1 -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
          <img
            src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20female%20medical%20laboratory%20technician%20in%20lab%20coat%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20professional&width=100&height=100&seq=45&orientation=squarish"
            alt="Samantha Wilson"
            class="w-16 h-16 rounded-full object-cover mr-4"
          />
          <div>
            <h4 class="font-semibold text-gray-800">Samantha Wilson</h4>
            <p class="text-gray-600 text-sm">MLT Graduate, 2023</p>
            <p class="text-gray-600 text-sm">
              Clinical Laboratory Technologist at City General Hospital
            </p>
          </div>
        </div>
        <p class="text-gray-700">
          "The Medical Laboratory Technology course offered me strong theoretical foundations along with real-world lab experience. From handling diagnostic equipment to understanding pathology, everything was taught with precision. I felt confident and industry-ready right after completing the program."
        </p>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
          <img
            src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20male%20radiography%20technician%20in%20scrubs%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20professional&width=100&height=100&seq=46&orientation=squarish"
            alt="Jason Chen"
            class="w-16 h-16 rounded-full object-cover mr-4"
          />
          <div>
            <h4 class="font-semibold text-gray-800">Jason Chen</h4>
            <p class="text-gray-600 text-sm">RIT Graduate, 2022</p>
            <p class="text-gray-600 text-sm">
              Senior Radiographer at Metropolitan Medical Center
            </p>
          </div>
        </div>
        <p class="text-gray-700">
          "Studying Radiography at this institute gave me deep insights into X-ray, CT, and MRI techniques. The hands-on training during clinical postings enhanced my confidence. Today, I work as a senior radiographer, thanks to the practical exposure and guidance I received here."
        </p>
      </div>

      <!-- Testimonial 3 -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center mb-4">
          <img
            src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20female%20operation%20theater%20technician%20in%20scrubs%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20professional&width=100&height=100&seq=47&orientation=squarish"
            alt="Aisha Patel"
            class="w-16 h-16 rounded-full object-cover mr-4"
          />
          <div>
            <h4 class="font-semibold text-gray-800">Aisha Patel</h4>
            <p class="text-gray-600 text-sm">OTT Graduate, 2021</p>
            <p class="text-gray-600 text-sm">
              Operation Theater Technician at University Hospital
            </p>
          </div>
        </div>
        <p class="text-gray-700">
          "Being part of the Operation Theater Technology course was a life-changing decision. The training modules covered every detail of surgical assistance, sterilization techniques, and OT protocols. It truly prepared me for the fast-paced hospital environment I work in today."
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
        Find answers to common questions about our paramedical programs.
      </p>
    </div>
    <div class="max-w-3xl mx-auto fade-in">
      <!-- FAQ 1 -->
      <div class="accordion-item">
        <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
          <span class="font-semibold text-gray-800">
            What is the scope of paramedical science in the healthcare industry?
          </span>
          <div class="w-5 h-5 flex items-center justify-center accordion-icon">
            <i class="ri-arrow-down-s-line"></i>
          </div>
        </button>
        <div class="accordion-content px-6 pb-4">
          <p class="text-gray-700">
            Paramedical science plays a vital role in modern healthcare, supporting doctors and nurses in diagnosis, treatment, and patient care. With growing demand, professionals can work in hospitals, labs, and emergency services.
          </p>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="accordion-item">
        <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
          <span class="font-semibold text-gray-800">
            What are the eligibility criteria for enrolling in a paramedical course?
          </span>
          <div class="w-5 h-5 flex items-center justify-center accordion-icon">
            <i class="ri-arrow-down-s-line"></i>
          </div>
        </button>
        <div class="accordion-content px-6 pb-4">
          <p class="text-gray-700">
            Students must have completed 10+2 with Physics, Chemistry, and Biology with at least 50% marks. Some programs may require entrance exams or interviews for admission.
          </p>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
          <span class="font-semibold text-gray-800">
            Do paramedical programs include internships or practical training?
          </span>
          <div class="w-5 h-5 flex items-center justify-center accordion-icon">
            <i class="ri-arrow-down-s-line"></i>
          </div>
        </button>
        <div class="accordion-content px-6 pb-4">
          <p class="text-gray-700">
            Yes, internships are mandatory and included in the final year of most paramedical programs. Students gain hands-on experience in real medical settings under professional supervision.
          </p>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item">
        <button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
          <span class="font-semibold text-gray-800">
            What are the career options after completing a paramedical course?
          </span>
          <div class="w-5 h-5 flex items-center justify-center accordion-icon">
            <i class="ri-arrow-down-s-line"></i>
          </div>
        </button>
        <div class="accordion-content px-6 pb-4">
          <p class="text-gray-700">
            Graduates can work as lab technicians, radiographers, emergency medical technicians, or operation theater technologists in hospitals, clinics, and diagnostic centers. Higher studies and certifications also open up more opportunities.
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
              Begin Your Journey in Paramedical Science
            </h2>
            <p class="text-white text-opacity-90 text-lg">
              Take the first step towards a rewarding career in healthcare.
              Apply now for our paramedical programs or contact us to learn
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
