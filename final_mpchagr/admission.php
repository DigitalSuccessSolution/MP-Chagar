<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admissions Open - Educational Institute</title>
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
    
        <!-- In <head> of the parent page -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body class="bg-gray-50">
  
  <div>
      
  </div>
  <?php include 'navbar.php' ?>
  
    <!-- Page Header -->
    <div
      class="page-header py-24 relative"
      style="background-image: url('https://readdy.ai/api/search-image?query=modern%20university%20admission%20office%20with%20students%20consulting%20counselors%2C%20bright%20welcoming%20environment%2C%20professional%20education%20setting%2C%20warm%20and%20inviting%20atmosphere&width=1600&height=500&seq=29&orientation=landscape')"
    >
      <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Admissions Open 2025
          </h1>
          <div class="flex items-center justify-center">
            <a href="index.php" class="text-white hover:text-secondary"
              >Home</a
            >
            <div class="w-4 h-4 flex items-center justify-center mx-2">
              <i class="ri-arrow-right-s-line"></i>
            </div>
            <span class="text-[#FFB800]">Admissions</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Admission Notice Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <div
            class="bg-[#003366]/5 border-l-4 border-primary p-6 rounded-lg mb-12"
          >
            <h2 class="text-2xl font-bold text-primary mb-4">
              Admission Notice 2025-26
            </h2>
            <p class="text-gray-700">
              Applications are now open for the academic year 2025-26. We invite
              aspiring healthcare professionals to join our prestigious
              institution. Early applications are encouraged as seats are
              limited.
            </p>
            <div class="mt-6 flex flex-wrap gap-4">
              <a
                href="./admissionform.php"
                class="bg-[#003366] hover:bg-[#003366]/90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"
                >Apply Now</a
              >
              <a
                href="#download-brochure"
                class="bg-white border-2 border-primary text-primary hover:bg-[#003366]/5 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer flex items-center"
              >
                <i class="ri-download-line mr-2"></i>Download Brochure
              </a>
            </div>
          </div>

          <!-- Programs Offered -->
          <!--<div class="mb-12">-->
          <!--  <h3 class="text-2xl font-bold text-gray-800 mb-6">-->
          <!--    Programs Offered-->
          <!--  </h3>-->
          <!--  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">-->
          <!--    <div-->
          <!--      class="bg-white p-6 rounded-lg shadow-md border border-gray-100"-->
          <!--    >-->
          <!--      <h4 class="text-xl font-semibold text-primary mb-4">-->
          <!--        Paramedical Science-->
          <!--      </h4>-->
          <!--      <ul class="space-y-3">-->
          <!--        <li class="flex items-start">-->
          <!--          <div-->
          <!--            class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--          >-->
          <!--            <i class="ri-check-line"></i>-->
          <!--          </div>-->
          <!--          <span class="text-gray-700"-->
          <!--            >Medical Laboratory Technology (MLT)</span-->
          <!--          >-->
          <!--        </li>-->
          <!--        <li class="flex items-start">-->
          <!--          <div-->
          <!--            class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--          >-->
          <!--            <i class="ri-check-line"></i>-->
          <!--          </div>-->
          <!--          <span class="text-gray-700"-->
          <!--            >Radiography & Imaging Technology</span-->
          <!--          >-->
          <!--        </li>-->
          <!--        <li class="flex items-start">-->
          <!--          <div-->
          <!--            class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--          >-->
          <!--            <i class="ri-check-line"></i>-->
          <!--          </div>-->
          <!--          <span class="text-gray-700"-->
          <!--            >Operation Theater Technology</span-->
          <!--          >-->
          <!--        </li>-->
          <!--      </ul>-->
          <!--    </div>-->

          <!--    <div-->
          <!--      class="bg-white p-6 rounded-lg shadow-md border border-gray-100"-->
          <!--    >-->
          <!--      <h4 class="text-xl font-semibold text-primary mb-4">-->
          <!--        Nursing Programs-->
          <!--      </h4>-->
          <!--      <ul class="space-y-3">-->
          <!--        <li class="flex items-start">-->
          <!--          <div-->
          <!--            class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--          >-->
          <!--            <i class="ri-check-line"></i>-->
          <!--          </div>-->
          <!--          <span class="text-gray-700">B.Sc. Nursing (4 Years)</span>-->
          <!--        </li>-->
          <!--        <li class="flex items-start">-->
          <!--          <div-->
          <!--            class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--          >-->
          <!--            <i class="ri-check-line"></i>-->
          <!--          </div>-->
          <!--          <span class="text-gray-700"-->
          <!--            >General Nursing & Midwifery (3 Years)</span-->
          <!--          >-->
          <!--        </li>-->
          <!--        <li class="flex items-start">-->
          <!--          <div-->
          <!--            class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--          >-->
          <!--            <i class="ri-check-line"></i>-->
          <!--          </div>-->
          <!--          <span class="text-gray-700"-->
          <!--            >Post Basic B.Sc. Nursing (2 Years)</span-->
          <!--          >-->
          <!--        </li>-->
          <!--      </ul>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->

          <!-- Admission Process -->
          <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
              Admission Process
            </h3>
            <div class="relative">
              <div class="absolute left-4 top-0 h-full w-0.5 bg-gray-200"></div>
              <div class="space-y-8 relative">
                <div class="flex">
                  <div class="flex flex-col items-center mr-4">
                    <div
                      class="w-8 h-8 bg-[#003366] text-white rounded-full flex items-center justify-center relative z-10"
                    >
                      1
                    </div>
                  </div>
                  <div
                    class="bg-white p-6 rounded-lg shadow-md border border-gray-100 flex-1"
                  >
                    <h4 class="font-semibold text-gray-800 mb-2">
                      Online Application
                    </h4>
                    <p class="text-gray-700">
                      Complete the online application form with accurate
                      personal and academic details. Upload required documents
                      as specified.
                    </p>
                  </div>
                </div>

                <div class="flex">
                  <div class="flex flex-col items-center mr-4">
                    <div
                      class="w-8 h-8 bg-[#003366] text-white rounded-full flex items-center justify-center relative z-10"
                    >
                      2
                    </div>
                  </div>
                  <div
                    class="bg-white p-6 rounded-lg shadow-md border border-gray-100 flex-1"
                  >
                    <h4 class="font-semibold text-gray-800 mb-2">
                      Document Verification
                    </h4>
                    <p class="text-gray-700">
                      Submit original documents for verification. Our admission
                      team will review your application and documents.
                    </p>
                  </div>
                </div>

                <div class="flex">
                  <div class="flex flex-col items-center mr-4">
                    <div
                      class="w-8 h-8 bg-[#003366] text-white rounded-full flex items-center justify-center relative z-10"
                    >
                      3
                    </div>
                  </div>
                  <div
                    class="bg-white p-6 rounded-lg shadow-md border border-gray-100 flex-1"
                  >
                    <h4 class="font-semibold text-gray-800 mb-2">
                      Entrance Examination
                    </h4>
                    <p class="text-gray-700">
                      Appear for the entrance examination. Test will assess your
                      knowledge in relevant subjects.
                    </p>
                  </div>
                </div>

                <div class="flex">
                  <div class="flex flex-col items-center mr-4">
                    <div
                      class="w-8 h-8 bg-[#003366] text-white rounded-full flex items-center justify-center relative z-10"
                    >
                      4
                    </div>
                  </div>
                  <div
                    class="bg-white p-6 rounded-lg shadow-md border border-gray-100 flex-1"
                  >
                    <h4 class="font-semibold text-gray-800 mb-2">
                      Personal Interview
                    </h4>
                    <p class="text-gray-700">
                      Shortlisted candidates will be called for a personal
                      interview with the admission committee.
                    </p>
                  </div>
                </div>

                <div class="flex">
                  <div class="flex flex-col items-center mr-4">
                    <div
                      class="w-8 h-8 bg-[#003366] text-white rounded-full flex items-center justify-center relative z-10"
                    >
                      5
                    </div>
                  </div>
                  <div
                    class="bg-white p-6 rounded-lg shadow-md border border-gray-100 flex-1"
                  >
                    <h4 class="font-semibold text-gray-800 mb-2">
                      Final Selection
                    </h4>
                    <p class="text-gray-700">
                      Selected candidates will receive an admission offer
                      letter. Complete the admission process by paying the
                      required fees.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Eligibility Criteria -->
          <!--<div class="mb-12">-->
          <!--  <h3 class="text-2xl font-bold text-gray-800 mb-6">-->
          <!--    Eligibility Criteria-->
          <!--  </h3>-->
          <!--  <div-->
          <!--    class="bg-white p-6 rounded-lg shadow-md border border-gray-100"-->
          <!--  >-->
          <!--    <div class="space-y-6">-->
          <!--      <div>-->
          <!--        <h4 class="text-lg font-semibold text-primary mb-3">-->
          <!--          Paramedical Science Programs-->
          <!--        </h4>-->
          <!--        <ul class="space-y-2">-->
          <!--          <li class="flex items-start">-->
          <!--            <div-->
          <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--            >-->
          <!--              <i class="ri-check-line"></i>-->
          <!--            </div>-->
          <!--            <span class="text-gray-700"-->
          <!--              >10+2 with Physics, Chemistry, and Biology with minimum-->
          <!--              50% marks</span-->
          <!--            >-->
          <!--          </li>-->
          <!--          <li class="flex items-start">-->
          <!--            <div-->
          <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--            >-->
          <!--              <i class="ri-check-line"></i>-->
          <!--            </div>-->
          <!--            <span class="text-gray-700"-->
          <!--              >Age: 17-25 years as of December 31, 2025</span-->
          <!--            >-->
          <!--          </li>-->
          <!--        </ul>-->
          <!--      </div>-->

          <!--      <div>-->
          <!--        <h4 class="text-lg font-semibold text-primary mb-3">-->
          <!--          Nursing Programs-->
          <!--        </h4>-->
          <!--        <ul class="space-y-2">-->
          <!--          <li class="flex items-start">-->
          <!--            <div-->
          <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--            >-->
          <!--              <i class="ri-check-line"></i>-->
          <!--            </div>-->
          <!--            <span class="text-gray-700"-->
          <!--              >B.Sc. Nursing: 10+2 with PCB & English with minimum 45%-->
          <!--              marks</span-->
          <!--            >-->
          <!--          </li>-->
          <!--          <li class="flex items-start">-->
          <!--            <div-->
          <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--            >-->
          <!--              <i class="ri-check-line"></i>-->
          <!--            </div>-->
          <!--            <span class="text-gray-700"-->
          <!--              >Post Basic B.Sc.: Registered Nurse with diploma in-->
          <!--              GNM</span-->
          <!--            >-->
          <!--          </li>-->
          <!--          <li class="flex items-start">-->
          <!--            <div-->
          <!--              class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"-->
          <!--            >-->
          <!--              <i class="ri-check-line"></i>-->
          <!--            </div>-->
          <!--            <span class="text-gray-700"-->
          <!--              >Age: 17-35 years as of December 31, 2025</span-->
          <!--            >-->
          <!--          </li>-->
          <!--        </ul>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->

          <!-- Required Documents -->
          <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
              Required Documents
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div
                class="bg-white p-6 rounded-lg shadow-md border border-gray-100"
              >
                <h4 class="text-lg font-semibold text-primary mb-4">
                  Academic Documents
                </h4>
                <ul class="space-y-3">
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-file-list-line"></i>
                    </div>
                    <span class="text-gray-700"
                      >10th Mark Sheet and Certificate</span
                    >
                  </li>
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-file-list-line"></i>
                    </div>
                    <span class="text-gray-700"
                      >12th Mark Sheet and Certificate</span
                    >
                  </li>
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-file-list-line"></i>
                    </div>
                    <span class="text-gray-700">Transfer Certificate</span>
                  </li>
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-file-list-line"></i>
                    </div>
                    <span class="text-gray-700"
                      >Migration Certificate (if applicable)</span
                    >
                  </li>
                </ul>
              </div>

              <div
                class="bg-white p-6 rounded-lg shadow-md border border-gray-100"
              >
                <h4 class="text-lg font-semibold text-primary mb-4">
                  Personal Documents
                </h4>
                <ul class="space-y-3">
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-file-user-line"></i>
                    </div>
                    <span class="text-gray-700"
                      >Passport Size Photographs (6 copies)</span
                    >
                  </li>
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-file-user-line"></i>
                    </div>
                    <span class="text-gray-700"
                      >Valid ID Proof (Aadhaar/Passport)</span
                    >
                  </li>
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-file-user-line"></i>
                    </div>
                    <span class="text-gray-700"
                      >Medical Fitness Certificate</span
                    >
                  </li>
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-file-user-line"></i>
                    </div>
                    <span class="text-gray-700">Character Certificate</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Important Dates -->
          <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
              Important Dates
            </h3>
            <div
              class="bg-white p-6 rounded-lg shadow-md border border-gray-100"
            >
              <div class="overflow-x-auto">
                <table class="w-full">
                  <thead>
                    <tr class="border-b border-gray-200">
                      <th
                        class="text-left py-3 px-4 font-semibold text-gray-800"
                      >
                        Event
                      </th>
                      <th
                        class="text-left py-3 px-4 font-semibold text-gray-800"
                      >
                        Date
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b border-gray-200">
                      <td class="py-3 px-4 text-gray-700">
                        Application Start Date
                      </td>
                      <td class="py-3 px-4 text-gray-700">June 1, 2025</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                      <td class="py-3 px-4 text-gray-700">
                        Last Date for Application
                      </td>
                      <td class="py-3 px-4 text-gray-700">July 15, 2025</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                      <td class="py-3 px-4 text-gray-700">
                        Entrance Examination
                      </td>
                      <td class="py-3 px-4 text-gray-700">July 30, 2025</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                      <td class="py-3 px-4 text-gray-700">
                        Result Declaration
                      </td>
                      <td class="py-3 px-4 text-gray-700">August 10, 2025</td>
                    </tr>
                    <tr>
                      <td class="py-3 px-4 text-gray-700">
                        Commencement of Classes
                      </td>
                      <td class="py-3 px-4 text-gray-700">September 1, 2025</td>
                    </tr>
                  </tbody>
                  
                
                </table>
                 
              </div>
              <div class="flex justify-center">
  <a
    href="./admissionform.php"
    class="bg-[#003366] hover:bg-[#003366]/90 text-white px-6 py-3 rounded-button w-auto font-medium transition whitespace-nowrap cursor-pointer"
  >
    Apply Now
  </a>
</div>

            </div>
          </div>



          <!-- Application Form -->
          <!--<div id="apply-now" class="mb-12">-->
          <!--  <h3 class="text-2xl font-bold text-gray-800 mb-6">-->
          <!--    Application Form-->
          <!--  </h3>-->
          <!--  <form-->
          <!--    action=""-->
          <!--    method="POST"-->
          <!--    class="bg-white p-6 rounded-lg shadow-md border border-gray-100"-->
          <!--  >-->
          <!--    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">-->
          <!--      <div>-->
          <!--        <label-->
          <!--          class="block text-gray-700 font-medium mb-2"-->
          <!--          for="full_name"-->
          <!--          >Full Name</label-->
          <!--        >-->
          <!--        <input-->
          <!--          type="text"-->
          <!--          id="full_name"-->
          <!--          name="full_name"-->
          <!--          class="w-full px-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:border-primary"-->
          <!--          required-->
          <!--        />-->
          <!--      </div>-->
          <!--      <div>-->
          <!--        <label-->
          <!--          class="block text-gray-700 font-medium mb-2"-->
          <!--          for="email"-->
          <!--          >Email Address</label-->
          <!--        >-->
          <!--        <input-->
          <!--          type="email"-->
          <!--          id="email"-->
          <!--          name="email"-->
          <!--          class="w-full px-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:border-primary"-->
          <!--          required-->
          <!--        />-->
          <!--      </div>-->
          <!--      <div>-->
          <!--        <label-->
          <!--          class="block text-gray-700 font-medium mb-2"-->
          <!--          for="phone"-->
          <!--          >Phone Number</label-->
          <!--        >-->
          <!--        <input-->
          <!--          type="tel"-->
          <!--          id="phone"-->
          <!--          name="phone"-->
          <!--          class="w-full px-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:border-primary"-->
          <!--          required-->
          <!--        />-->
          <!--      </div>-->
          <!--      <div>-->
          <!--        <label-->
          <!--          class="block text-gray-700 font-medium mb-2"-->
          <!--          for="program"-->
          <!--          >Preferred Program</label-->
          <!--        >-->
          <!--        <select-->
          <!--          id="program"-->
          <!--          name="program"-->
          <!--          class="w-full px-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:border-primary"-->
          <!--          required-->
          <!--        >-->
          <!--          <option value="">Select Program</option>-->
          <!--          <option value="mlt">Medical Laboratory Technology</option>-->
          <!--          <option value="rit">-->
          <!--            Radiography & Imaging Technology-->
          <!--          </option>-->
          <!--          <option value="ott">Operation Theater Technology</option>-->
          <!--          <option value="bsc_nursing">B.Sc. Nursing</option>-->
          <!--          <option value="gnm">General Nursing & Midwifery</option>-->
          <!--          <option value="pb_bsc">Post Basic B.Sc. Nursing</option>-->
          <!--        </select>-->
          <!--      </div>-->
          <!--      <div>-->
          <!--        <label class="block text-gray-700 font-medium mb-2" for="dob"-->
          <!--          >Date of Birth</label-->
          <!--        >-->
          <!--        <input-->
          <!--          type="date"-->
          <!--          id="dob"-->
          <!--          name="dob"-->
          <!--          class="w-full px-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:border-primary"-->
          <!--          required-->
          <!--        />-->
          <!--      </div>-->
          <!--      <div>-->
          <!--        <label-->
          <!--          class="block text-gray-700 font-medium mb-2"-->
          <!--          for="qualification"-->
          <!--          >Highest Qualification</label-->
          <!--        >-->
          <!--        <input-->
          <!--          type="text"-->
          <!--          id="qualification"-->
          <!--          name="qualification"-->
          <!--          class="w-full px-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:border-primary"-->
          <!--          required-->
          <!--        />-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="mt-6">-->
          <!--      <label-->
          <!--        class="block text-gray-700 font-medium mb-2"-->
          <!--        for="message"-->
          <!--        >Additional Information</label-->
          <!--      >-->
          <!--      <textarea-->
          <!--        id="message"-->
          <!--        name="message"-->
          <!--        rows="4"-->
          <!--        class="w-full px-4 py-2 border border-gray-300 rounded-button focus:outline-none focus:border-primary"-->
          <!--      ></textarea>-->
          <!--    </div>-->
          <!--    <div class="mt-6">-->
          <!--      <button-->
          <!--        type="submit"-->
          <!--        class="bg-[#003366] hover:bg-[#003366]/90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer"-->
          <!--      >-->
          <!--        Submit Application-->
          <!--      </button>-->
          <!--    </div>-->
          <!--  </form>-->
          <!--</div>-->

          <!-- Contact Information -->
          <div class="bg-[#003366]/5 p-6 rounded-lg">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Need Help?</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <h4 class="font-semibold text-gray-800 mb-4">
                  Admission Office
                </h4>
                <ul class="space-y-3">
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-map-pin-line"></i>
                    </div>
                    <span class="text-gray-700"
                      >123 Education Street, Academic District, City, State
                      12345</span
                    >
                  </li>
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-phone-line"></i>
                    </div>
                    <span class="text-gray-700">+1 (234) 567-8900</span>
                  </li>
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-mail-line"></i>
                    </div>
                    <span class="text-gray-700"
                      >admissions@eduinstitute.edu</span
                    >
                  </li>
                </ul>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800 mb-4">Office Hours</h4>
                <ul class="space-y-3">
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-time-line"></i>
                    </div>
                    <span class="text-gray-700"
                      >Monday - Friday: 9:00 AM - 5:00 PM</span
                    >
                  </li>
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-time-line"></i>
                    </div>
                    <span class="text-gray-700"
                      >Saturday: 9:00 AM - 1:00 PM</span
                    >
                  </li>
                  <li class="flex items-start">
                    <div
                      class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                    >
                      <i class="ri-time-line"></i>
                    </div>
                    <span class="text-gray-700">Sunday: Closed</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12">
          <div class="md:w-1/2 fade-in">
            <img
              src="https://readdy.ai/api/search-image?query=modern%20educational%20campus%20building%20with%20glass%20facade%2C%20beautiful%20architecture%2C%20professional%20photograph%20of%20university%20main%20building%20with%20landscaped%20gardens%2C%20academic%20institution&width=600&height=400&seq=17&orientation=landscape"
              alt="Campus Building"
              class="rounded-lg shadow-lg w-full object-cover object-top"
            />
          </div>
          <div class="md:w-1/2 fade-in">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Story</h2>
            <div class="w-20 h-1 bg-secondary mb-6"></div>
            <p class="text-gray-700 mb-6">
              Founded in 1995, our Educational Institute has grown from a small
              nursing school to a comprehensive healthcare education
              institution. For over 25 years, we have been dedicated to
              providing exceptional educational experiences that prepare
              students for successful careers in healthcare and nursing.
            </p>
            <p class="text-gray-700 mb-6">
              Our journey began with a vision to address the growing need for
              skilled healthcare professionals in the region. Starting with just
              50 students and 5 faculty members, we have now expanded to serve
              over 2,000 students annually with a team of more than 150
              experienced educators and healthcare professionals.
            </p>
            <p class="text-gray-700 mb-6">
              Throughout our history, we have maintained a commitment to
              excellence, innovation, and compassionate care. Our graduates have
              gone on to make significant contributions to healthcare
              organizations across the country and internationally.
            </p>
            <div class="flex items-center">
              <img
                src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20middle-aged%20male%20university%20director%20in%20formal%20attire%2C%20confident%20pose%2C%20neutral%20background%2C%20educational%20leadership&width=100&height=100&seq=18&orientation=squarish"
                alt="Director"
                class="w-16 h-16 rounded-full object-cover mr-4"
              />
              <div>
                <h4 class="font-semibold text-gray-800">Dr. Robert Anderson</h4>
                <p class="text-gray-600 text-sm">Founder & Director</p>
              </div>
            </div>
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
              class="w-16 h-16 flex items-center justify-center rounded-full bg-[#003366] text-white mb-6 mx-auto"
            >
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
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <p class="text-gray-700">
                  Deliver comprehensive, evidence-based healthcare education
                </p>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <p class="text-gray-700">
                  Foster a supportive learning environment that promotes
                  critical thinking
                </p>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <p class="text-gray-700">
                  Instill ethical values and professional responsibility
                </p>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
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
              class="w-16 h-16 flex items-center justify-center rounded-full bg-[#003366] text-white mb-6 mx-auto"
            >
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
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <p class="text-gray-700">
                  Establish centers of excellence in healthcare education
                </p>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <p class="text-gray-700">
                  Lead in the adoption of innovative teaching methodologies
                </p>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
                  <i class="ri-check-line"></i>
                </div>
                <p class="text-gray-700">
                  Foster research and scholarly activities
                </p>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary"
                >
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
              class="w-16 h-16 flex items-center justify-center rounded-full bg-[#003366] text-white mb-4 mx-auto"
            >
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
              class="w-16 h-16 flex items-center justify-center rounded-full bg-[#003366] text-white mb-4 mx-auto"
            >
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
              class="w-16 h-16 flex items-center justify-center rounded-full bg-[#003366] text-white mb-4 mx-auto"
            >
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
              class="w-16 h-16 flex items-center justify-center rounded-full bg-[#003366] text-white mb-4 mx-auto"
            >
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
              class="w-16 h-16 flex items-center justify-center rounded-full bg-[#003366] text-white mb-4 mx-auto"
            >
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
              class="w-16 h-16 flex items-center justify-center rounded-full bg-[#003366] text-white mb-4 mx-auto"
            >
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
          <div
            class="team-card bg-gray-50 rounded-lg overflow-hidden shadow-sm fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20middle-aged%20male%20university%20director%20in%20formal%20attire%2C%20confident%20pose%2C%20neutral%20background%2C%20educational%20leadership&width=300&height=300&seq=19&orientation=squarish"
              alt="Dr. Robert Anderson"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-4 text-center">
              <h3 class="font-bold text-gray-800 mb-1">Dr. Robert Anderson</h3>
              <p class="text-gray-600 text-sm mb-3">Director & Founder</p>
              <div class="flex justify-center space-x-3">
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-linkedin-fill"></i>
                </a>
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-twitter-fill"></i>
                </a>
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-mail-line"></i>
                </a>
              </div>
            </div>
          </div>
          <div
            class="team-card bg-gray-50 rounded-lg overflow-hidden shadow-sm fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20middle-aged%20female%20academic%20dean%20in%20formal%20business%20attire%2C%20confident%20pose%2C%20neutral%20background%2C%20educational%20leadership&width=300&height=300&seq=20&orientation=squarish"
              alt="Dr. Sarah Mitchell"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-4 text-center">
              <h3 class="font-bold text-gray-800 mb-1">Dr. Sarah Mitchell</h3>
              <p class="text-gray-600 text-sm mb-3">Academic Dean</p>
              <div class="flex justify-center space-x-3">
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-linkedin-fill"></i>
                </a>
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-twitter-fill"></i>
                </a>
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-mail-line"></i>
                </a>
              </div>
            </div>
          </div>
          <div
            class="team-card bg-gray-50 rounded-lg overflow-hidden shadow-sm fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20middle-aged%20male%20nursing%20department%20head%20in%20formal%20attire%20with%20stethoscope%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education%20leadership&width=300&height=300&seq=21&orientation=squarish"
              alt="Dr. James Wilson"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-4 text-center">
              <h3 class="font-bold text-gray-800 mb-1">Dr. James Wilson</h3>
              <p class="text-gray-600 text-sm mb-3">
                Head of Nursing Department
              </p>
              <div class="flex justify-center space-x-3">
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-linkedin-fill"></i>
                </a>
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-twitter-fill"></i>
                </a>
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-mail-line"></i>
                </a>
              </div>
            </div>
          </div>
          <div
            class="team-card bg-gray-50 rounded-lg overflow-hidden shadow-sm fade-in"
          >
            <img
              src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20middle-aged%20female%20paramedical%20department%20head%20in%20lab%20coat%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education%20leadership&width=300&height=300&seq=22&orientation=squarish"
              alt="Dr. Emily Patel"
              class="w-full h-64 object-cover object-top"
            />
            <div class="p-4 text-center">
              <h3 class="font-bold text-gray-800 mb-1">Dr. Emily Patel</h3>
              <p class="text-gray-600 text-sm mb-3">
                Head of Paramedical Science
              </p>
              <div class="flex justify-center space-x-3">
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-linkedin-fill"></i>
                </a>
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-twitter-fill"></i>
                </a>
                <a
                  href="#"
                  class="social-icon w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-[#003366] hover:text-white transition cursor-pointer"
                >
                  <i class="ri-mail-line"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Stats Section -->
    <section class="py-16 bg-[#003366] text-white">
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
            <img
              src="https://readdy.ai/api/search-image?query=modern%20university%20library%20with%20students%20studying%20at%20tables%2C%20bookshelves%2C%20digital%20resources%2C%20bright%20academic%20environment%2C%20educational%20campus%20facility&width=400&height=250&seq=23&orientation=landscape"
              alt="Library"
              class="w-full h-48 object-cover object-top"
            />
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
            <img
              src="https://readdy.ai/api/search-image?query=medical%20simulation%20laboratory%20with%20advanced%20equipment%2C%20nursing%20mannequins%2C%20healthcare%20training%20facility%2C%20students%20practicing%20clinical%20skills%2C%20professional%20education%20environment&width=400&height=250&seq=24&orientation=landscape"
              alt="Simulation Labs"
              class="w-full h-48 object-cover object-top"
            />
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
            <img
              src="https://readdy.ai/api/search-image?query=modern%20computer%20laboratory%20with%20students%20working%20on%20computers%2C%20educational%20technology%20facility%2C%20bright%20academic%20environment%2C%20university%20IT%20lab&width=400&height=250&seq=25&orientation=landscape"
              alt="Computer Labs"
              class="w-full h-48 object-cover object-top"
            />
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
            <img
              src="https://readdy.ai/api/search-image?query=university%20lecture%20hall%20with%20tiered%20seating%2C%20modern%20audiovisual%20equipment%2C%20bright%20academic%20environment%2C%20educational%20facility&width=400&height=250&seq=26&orientation=landscape"
              alt="Lecture Halls"
              class="w-full h-48 object-cover object-top"
            />
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
            <img
              src="https://readdy.ai/api/search-image?query=university%20student%20lounge%20with%20comfortable%20seating%2C%20students%20socializing%2C%20modern%20campus%20recreational%20area%2C%20bright%20welcoming%20space%2C%20educational%20institution&width=400&height=250&seq=27&orientation=landscape"
              alt="Student Lounges"
              class="w-full h-48 object-cover object-top"
            />
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
            <img
              src="https://readdy.ai/api/search-image?query=university%20cafeteria%20with%20students%20dining%2C%20modern%20campus%20food%20court%2C%20bright%20spacious%20dining%20area%2C%20educational%20institution%20facility&width=400&height=250&seq=28&orientation=landscape"
              alt="Cafeteria"
              class="w-full h-48 object-cover object-top"
            />
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
            <button
              class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer"
            >
              <span class="font-semibold text-gray-800"
                >What accreditations does your institution hold?</span
              >
              <div
                class="w-5 h-5 flex items-center justify-center accordion-icon"
              >
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
            <button
              class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer"
            >
              <span class="font-semibold text-gray-800"
                >What is the student-to-faculty ratio?</span
              >
              <div
                class="w-5 h-5 flex items-center justify-center accordion-icon"
              >
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
            <button
              class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer"
            >
              <span class="font-semibold text-gray-800"
                >Do you offer financial aid or scholarships?</span
              >
              <div
                class="w-5 h-5 flex items-center justify-center accordion-icon"
              >
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
            <button
              class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer"
            >
              <span class="font-semibold text-gray-800"
                >What career services do you provide?</span
              >
              <div
                class="w-5 h-5 flex items-center justify-center accordion-icon"
              >
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
            <button
              class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer"
            >
              <span class="font-semibold text-gray-800"
                >Are there opportunities for clinical experience?</span
              >
              <div
                class="w-5 h-5 flex items-center justify-center accordion-icon"
              >
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
<?php include 'footer.php' ?>
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
    <!-- At the end of <body> in the parent page -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
