<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Campus Life - Student Experience & Activities</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
<script src="https://cdn.tailwindcss.com/3.4.16">
</script>
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
.course-details-tab {
opacity: 0;
height: 0;
overflow: hidden;
transition: opacity 0.3s ease;
}
.course-details-tab.active {
opacity: 1;
height: auto;
}
.tab-button.active {
color: #003366;
border-color: #003366;
}
.accordion-item {
border-bottom: 1px solid #e5e7eb;
}
.accordion-content {
max-height: 0;
overflow: hidden;
transition: max-height 0.3s ease;
}
.accordion-content.active {
max-height: 1000px;
}
.progress-step {
position: relative;
}
.progress-step::after {
content: '';
position: absolute;
top: 50%;
right: -50%;
width: 100%;
height: 2px;
background-color: #e5e7eb;
z-index: -1;
}
.progress-step:last-child::after {
display: none;
}
.progress-step.active {
color: #003366;
}
.progress-step.active .step-number {
background-color: #003366;
color: white;
}
.step-number {
width: 30px;
height: 30px;
border-radius: 50%;
background-color: #e5e7eb;
display: flex;
align-items: center;
justify-content: center;
margin: 0 auto 8px;
}
</style>
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
<a href="#" class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition cursor-pointer">
<i class="ri-facebook-fill text-sm"></i>
</a>
<a href="#" class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition cursor-pointer">
<i class="ri-twitter-fill text-sm"></i>
</a>
<a href="#" class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition cursor-pointer">
<i class="ri-instagram-line text-sm"></i>
</a>
<a href="#" class="w-6 h-6 flex items-center justify-center rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition cursor-pointer">
<i class="ri-linkedin-fill text-sm"></i>
</a>
</div>
</div>
</div>
<!-- Main Navigation -->
<header class="bg-white shadow-md sticky top-0 z-50">
<div class="container mx-auto px-4">
<div class="flex justify-between items-center py-4">
<a href="index.html" class="font-['Pacifico'] text-3xl text-primary">logo</a>
<!-- Desktop Navigation -->
<nav class="hidden md:flex items-center space-x-8">
<a href="index.html" class="nav-link font-medium text-gray-800 hover:text-primary transition">Home</a>
<a href="about.html" class="nav-link font-medium text-gray-800 hover:text-primary transition">About Us</a>
<div class="dropdown">
<a href="#" class="nav-link font-medium text-gray-800 hover:text-primary transition flex items-center">
Programs
<div class="w-4 h-4 flex items-center justify-center ml-1">
<i class="ri-arrow-down-s-line"></i>
</div>
</a>
<div class="dropdown-content bg-white shadow-lg rounded-md mt-1 py-2">
<a href="paramedical.html" class="block px-4 py-2 text-primary hover:bg-gray-100">Paramedical Science</a>
<a href="nursing.html" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">School of Nursing</a>
</div>
</div>
<a href="paramedical.html" class="nav-link font-medium text-primary transition">Paramedical Science</a>
<a href="nursing.html" class="nav-link font-medium text-gray-800 hover:text-primary transition">School of Nursing</a>
<a href="campus.html" class="nav-link font-medium text-gray-800 hover:text-primary transition">Campus Life</a>
<a href="admission.html" class="nav-link font-medium text-gray-800 hover:text-primary transition">Admission</a>
<a href="contact.html" class="nav-link font-medium text-gray-800 hover:text-primary transition">Contact</a>
</nav>
<!-- Apply Now Button -->
<a href="admission.html" class="hidden md:block bg-secondary hover:bg-opacity-90 text-white px-6 py-2 rounded-button font-medium transition whitespace-nowrap cursor-pointer">Apply Now</a>
<!-- Mobile Menu Button -->
<button id="menu-toggle" class="md:hidden w-10 h-10 flex items-center justify-center text-gray-700 cursor-pointer">
<i class="ri-menu-line text-2xl"></i>
</button>
</div>
</div>
</header>
<!-- Mobile Navigation Menu -->
<div id="mobile-menu" class="mobile-menu fixed top-0 left-0 h-full w-4/5 bg-white shadow-lg z-50 p-5 overflow-y-auto">
<div class="flex justify-between items-center mb-8">
<a href="index.html" class="font-['Pacifico'] text-2xl text-primary">logo</a>
<button id="close-menu" class="w-8 h-8 flex items-center justify-center text-gray-700 cursor-pointer">
<i class="ri-close-line text-2xl"></i>
</button>
</div>
<nav class="flex flex-col space-y-4">
<a href="index.html" class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">Home</a>
<a href="about.html" class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">About Us</a>
<div class="py-2 border-b border-gray-100">
<div class="flex justify-between items-center text-gray-800 hover:text-primary cursor-pointer" id="mobile-dropdown-toggle">
<span>Programs</span>
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-arrow-down-s-line"></i>
</div>
</div>
<div class="hidden pl-4 mt-2 space-y-2" id="mobile-dropdown-content">
<a href="paramedical.html" class="block py-1 text-primary">Paramedical Science</a>
<a href="nursing.html" class="block py-1 text-gray-700 hover:text-primary">School of Nursing</a>
</div>
</div>
<a href="paramedical.html" class="py-2 border-b border-gray-100 text-primary">Paramedical Science</a>
<a href="nursing.html" class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">School of Nursing</a>
<a href="campus.html" class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">Campus Life</a>
<a href="admission.html" class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">Admission</a>
<a href="contact.html" class="py-2 border-b border-gray-100 text-gray-800 hover:text-primary">Contact</a>
</nav>
<div class="mt-8">
<a href="admission.html" class="block w-full bg-secondary hover:bg-opacity-90 text-white text-center px-4 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer">Apply Now</a>
</div>
</div>
<!-- Page Header -->
<div class="page-header py-24 relative" style="background-image: url('https://readdy.ai/api/search-image?query=vibrant%20modern%20university%20campus%20with%20diverse%20students%20walking%20and%20studying%20in%20outdoor%20spaces%2C%20beautiful%20architecture%2C%20green%20spaces%2C%20and%20social%20gathering%20areas%2C%20bright%20sunny%20day&width=1600&height=500&seq=50&orientation=landscape')">
<div class="container mx-auto px-4 relative z-10">
<div class="text-center text-white">
<h1 class="text-4xl md:text-5xl font-bold mb-4">Campus Life</h1>
<p class="text-xl mb-6">Experience a vibrant and enriching student life</p>
<div class="flex items-center justify-center">
<a href="index.html" class="text-white hover:text-secondary">Home</a>
<div class="w-4 h-4 flex items-center justify-center mx-2">
<i class="ri-arrow-right-s-line"></i>
</div>
<span class="text-secondary">Campus Life</span>
</div>
</div>
</div>
</div>

<!-- Student Life Overview -->
<section class="py-16 bg-white">
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
<div class="fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Life at Our Campus</h2>
<div class="w-20 h-1 bg-secondary mb-6"></div>
<p class="text-gray-700 mb-6">Our campus is more than just a place of learning - it's a thriving community where students grow, connect, and create lasting memories. With state-of-the-art facilities, diverse student organizations, and engaging activities, we provide an enriching environment that fosters both academic and personal growth.</p>
<p class="text-gray-700 mb-6">From cultural festivals to sports tournaments, leadership programs to community service initiatives, our campus life offers countless opportunities for students to discover their passions and develop essential life skills.</p>
<div class="grid grid-cols-2 gap-4">
<div class="bg-gray-50 p-4 rounded-lg text-center">
<div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 text-primary mx-auto mb-3">
<i class="ri-team-line text-2xl"></i>
</div>
<h4 class="font-semibold text-gray-800 mb-1">30+</h4>
<p class="text-gray-600 text-sm">Student Clubs</p>
</div>
<div class="bg-gray-50 p-4 rounded-lg text-center">
<div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 text-primary mx-auto mb-3">
<i class="ri-calendar-event-line text-2xl"></i>
</div>
<h4 class="font-semibold text-gray-800 mb-1">50+</h4>
<p class="text-gray-600 text-sm">Annual Events</p>
</div>
</div>
</div>
<div class="fade-in">
<img src="https://readdy.ai/api/search-image?query=diverse%20group%20of%20students%20studying%20and%20socializing%20in%20modern%20university%20campus%20common%20area%2C%20collaborative%20learning%20environment%2C%20casual%20student%20interaction&width=600&height=400&seq=51&orientation=landscape" alt="Campus Life" class="rounded-lg shadow-lg w-full">
</div>
</div>
</div>
</section>
<!-- Campus Facilities -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Campus Facilities</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Modern facilities designed to enhance your learning experience and campus life.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=modern%20university%20library%20interior%20with%20students%20studying%2C%20digital%20resources%2C%20comfortable%20seating%20areas%2C%20bright%20learning%20environment&width=400&height=250&seq=52&orientation=landscape" alt="Library" class="w-full h-48 object-cover">
<div class="p-6">
<h3 class="text-xl font-bold text-gray-800 mb-3">Digital Library</h3>
<p class="text-gray-700">State-of-the-art library with extensive digital resources, study spaces, and research facilities. Open 24/7 during exam periods.</p>
<ul class="mt-4 space-y-2">
<li class="flex items-center text-gray-700">
<i class="ri-check-line text-primary mr-2"></i>
<span>100,000+ Digital Resources</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-check-line text-primary mr-2"></i>
<span>Individual Study Pods</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-check-line text-primary mr-2"></i>
<span>Group Discussion Rooms</span>
</li>
</ul>
</div>
</div>
<div class="bg-white rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=modern%20university%20sports%20complex%20with%20indoor%20basketball%20court%2C%20fitness%20equipment%2C%20students%20exercising%2C%20bright%20athletic%20facility&width=400&height=250&seq=53&orientation=landscape" alt="Sports Complex" class="w-full h-48 object-cover">
<div class="p-6">
<h3 class="text-xl font-bold text-gray-800 mb-3">Sports Complex</h3>
<p class="text-gray-700">Multi-purpose sports complex featuring indoor and outdoor facilities for various sports and fitness activities.</p>
<ul class="mt-4 space-y-2">
<li class="flex items-center text-gray-700">
<i class="ri-check-line text-primary mr-2"></i>
<span>Olympic-Size Swimming Pool</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-check-line text-primary mr-2"></i>
<span>Modern Fitness Center</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-check-line text-primary mr-2"></i>
<span>Multiple Sports Courts</span>
</li>
</ul>
</div>
</div>
<div class="bg-white rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=modern%20university%20student%20center%20with%20cafeteria%2C%20lounge%20areas%2C%20social%20spaces%2C%20students%20relaxing%20and%20dining%2C%20bright%20welcoming%20environment&width=400&height=250&seq=54&orientation=landscape" alt="Student Center" class="w-full h-48 object-cover">
<div class="p-6">
<h3 class="text-xl font-bold text-gray-800 mb-3">Student Center</h3>
<p class="text-gray-700">A vibrant hub for student activities, dining, and socializing, featuring modern amenities and comfortable spaces.</p>
<ul class="mt-4 space-y-2">
<li class="flex items-center text-gray-700">
<i class="ri-check-line text-primary mr-2"></i>
<span>Food Court & Cafes</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-check-line text-primary mr-2"></i>
<span>Student Lounge Areas</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-check-line text-primary mr-2"></i>
<span>Event Spaces</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>
<!-- Student Activities -->
<section class="py-16 bg-white">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Student Activities & Clubs</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Explore the diverse range of activities and clubs that make campus life exciting and enriching.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<div class="bg-gray-50 rounded-lg p-6 shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-palette-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Cultural Clubs</h3>
<p class="text-gray-700 text-center mb-4">Express your creativity and celebrate diversity through various cultural activities and performances.</p>
<ul class="space-y-2">
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Dance Club</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Music Society</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Theater Group</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Art & Photography Club</span>
</li>
</ul>
</div>
<div class="bg-gray-50 rounded-lg p-6 shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-group-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Professional Societies</h3>
<p class="text-gray-700 text-center mb-4">Build professional skills and network with industry experts through specialized clubs and societies.</p>
<ul class="space-y-2">
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Entrepreneurship Club</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Research Society</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Debate Club</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Innovation Hub</span>
</li>
</ul>
</div>
<div class="bg-gray-50 rounded-lg p-6 shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-heart-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Social Impact</h3>
<p class="text-gray-700 text-center mb-4">Make a difference in the community through various social service and environmental initiatives.</p>
<ul class="space-y-2">
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Community Service Club</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Environmental Club</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Health Awareness Group</span>
</li>
<li class="flex items-center text-gray-700">
<i class="ri-checkbox-circle-line text-primary mr-2"></i>
<span>Social Outreach Team</span>
</li>
</ul>
</div>
</div>
</div>
</section>

<!-- Campus Events -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Campus Events</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Experience the vibrant campus culture through our year-round events and celebrations.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="bg-white rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=university%20cultural%20fest%20celebration%20with%20students%20performing%20on%20stage%2C%20colorful%20decorations%2C%20audience%20enjoying%2C%20vibrant%20atmosphere&width=600&height=400&seq=55&orientation=landscape" alt="Cultural Festival" class="w-full h-64 object-cover">
<div class="p-6">
<h3 class="text-xl font-bold text-gray-800 mb-3">Annual Cultural Festival</h3>
<p class="text-gray-700 mb-4">A week-long celebration of art, music, dance, and cultural performances showcasing student talent and creativity.</p>
<div class="flex items-center text-gray-600 text-sm">
<div class="w-5 h-5 flex items-center justify-center mr-2">
<i class="ri-calendar-line"></i>
</div>
<span>October 15-21, 2025</span>
</div>
</div>
</div>
<div class="bg-white rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=university%20tech%20fest%20with%20students%20presenting%20innovative%20projects%2C%20modern%20exhibition%20space%2C%20technology%20demonstrations%2C%20professional%20atmosphere&width=600&height=400&seq=56&orientation=landscape" alt="Tech Fest" class="w-full h-64 object-cover">
<div class="p-6">
<h3 class="text-xl font-bold text-gray-800 mb-3">Tech & Innovation Fest</h3>
<p class="text-gray-700 mb-4">Showcase of student innovations, technical projects, and competitions featuring the latest technology trends.</p>
<div class="flex items-center text-gray-600 text-sm">
<div class="w-5 h-5 flex items-center justify-center mr-2">
<i class="ri-calendar-line"></i>
</div>
<span>March 5-7, 2025</span>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4">
<i class="ri-award-line text-2xl"></i>
</div>
<h4 class="font-bold text-gray-800 mb-2">Sports Meet</h4>
<p class="text-gray-700 text-sm">Annual inter-college sports competition featuring various indoor and outdoor sports.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4">
<i class="ri-graduation-cap-line text-2xl"></i>
</div>
<h4 class="font-bold text-gray-800 mb-2">Academic Conference</h4>
<p class="text-gray-700 text-sm">International conference featuring research presentations and expert speakers.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4">
<i class="ri-team-line text-2xl"></i>
</div>
<h4 class="font-bold text-gray-800 mb-2">Alumni Meet</h4>
<p class="text-gray-700 text-sm">Annual gathering connecting current students with successful alumni.</p>
</div>
</div>
</div>
</section>

<!-- Campus Life Gallery -->
<section class="py-16 bg-white">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Campus Life Gallery</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Glimpses of the vibrant life at our campus.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
<div class="rounded-lg overflow-hidden shadow-md">
<img src="https://readdy.ai/api/search-image?query=students%20studying%20together%20in%20modern%20university%20library%2C%20collaborative%20learning%2C%20digital%20resources%2C%20bright%20educational%20environment&width=400&height=300&seq=57&orientation=landscape" alt="Library Study" class="w-full h-64 object-cover">
</div>
<div class="rounded-lg overflow-hidden shadow-md">
<img src="https://readdy.ai/api/search-image?query=students%20participating%20in%20outdoor%20sports%20activities%20on%20university%20campus%2C%20athletic%20facilities%2C%20team%20sports%2C%20sunny%20day&width=400&height=300&seq=58&orientation=landscape" alt="Sports Activities" class="w-full h-64 object-cover">
</div>
<div class="rounded-lg overflow-hidden shadow-md">
<img src="https://readdy.ai/api/search-image?query=students%20performing%20cultural%20dance%20on%20stage%2C%20colorful%20costumes%2C%20audience%2C%20professional%20lighting%2C%20cultural%20celebration&width=400&height=300&seq=59&orientation=landscape" alt="Cultural Performance" class="w-full h-64 object-cover">
</div>
<div class="rounded-lg overflow-hidden shadow-md">
<img src="https://readdy.ai/api/search-image?query=students%20working%20on%20research%20project%20in%20modern%20laboratory%2C%20scientific%20equipment%2C%20professional%20environment%2C%20focused%20work&width=400&height=300&seq=60&orientation=landscape" alt="Research Lab" class="w-full h-64 object-cover">
</div>
<div class="rounded-lg overflow-hidden shadow-md">
<img src="https://readdy.ai/api/search-image?query=students%20socializing%20in%20modern%20campus%20cafe%2C%20casual%20conversation%2C%20comfortable%20seating%2C%20bright%20interior&width=400&height=300&seq=61&orientation=landscape" alt="Campus Cafe" class="w-full h-64 object-cover">
</div>
<div class="rounded-lg overflow-hidden shadow-md">
<img src="https://readdy.ai/api/search-image?query=students%20participating%20in%20community%20service%20activity%2C%20volunteer%20work%2C%20team%20collaboration%2C%20outdoor%20setting&width=400&height=300&seq=62&orientation=landscape" alt="Community Service" class="w-full h-64 object-cover">
</div>
</div>
</div>
</section>

<!-- Student Support -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Student Support Services</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Comprehensive support services to ensure your success and well-being.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-mental-health-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Counseling Services</h3>
<p class="text-gray-700 text-center">Professional counseling support for academic, personal, and career-related concerns.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-first-aid-kit-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Health Center</h3>
<p class="text-gray-700 text-center">24/7 medical care facility with qualified healthcare professionals.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-briefcase-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Career Services</h3>
<p class="text-gray-700 text-center">Career guidance, internship placement, and job search assistance.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-shield-star-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Campus Security</h3>
<p class="text-gray-700 text-center">24/7 security services ensuring a safe and secure campus environment.</p>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-user-star-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Expert Faculty</h3>
<p class="text-gray-700 text-center">Learn from experienced healthcare professionals and educators with extensive clinical and academic backgrounds. Our faculty members bring real-world expertise to the classroom, enriching your educational experience.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-microscope-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Advanced Laboratories</h3>
<p class="text-gray-700 text-center">Train in state-of-the-art laboratories equipped with the latest medical technology and equipment. Our facilities replicate real healthcare environments, providing optimal hands-on learning opportunities.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-hospital-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Clinical Affiliations</h3>
<p class="text-gray-700 text-center">Gain valuable clinical experience through our partnerships with leading hospitals and healthcare facilities. These affiliations provide opportunities for supervised practice in diverse medical settings.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-book-open-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Comprehensive Curriculum</h3>
<p class="text-gray-700 text-center">Our programs feature a well-rounded curriculum that balances theoretical knowledge with practical skills. We continuously update our course content to reflect the latest advancements in healthcare.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-briefcase-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Career Support</h3>
<p class="text-gray-700 text-center">Benefit from our dedicated career services, including job placement assistance, resume building, and interview preparation. Our strong industry connections help graduates secure rewarding positions.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md fade-in">
<div class="w-16 h-16 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-6 mx-auto">
<i class="ri-global-line text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Industry Recognition</h3>
<p class="text-gray-700 text-center">Our programs are recognized by relevant professional bodies and healthcare organizations, ensuring that your qualification meets industry standards and enhances your employability.</p>
</div>
</div>
</div>
</section>
<!-- Courses Section -->
<section id="courses" class="py-16 bg-white">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Our Paramedical Courses</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Comprehensive programs designed to prepare you for a successful career in healthcare.</p>
</div>
<!-- Course Tabs -->
<div class="mb-8 fade-in">
<div class="flex flex-wrap justify-center gap-4 mb-8">
<button class="tab-button bg-primary text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer active" data-tab="mlt">Medical Lab Technology</button>
<button class="tab-button bg-gray-200 text-gray-800 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer" data-tab="rit">Radiography & Imaging</button>
<button class="tab-button bg-gray-200 text-gray-800 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer" data-tab="ott">Operation Theater Technology</button>
</div>
<!-- MLT Tab Content -->
<div id="mlt-content" class="tab-content active">
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
<div>
<img src="https://readdy.ai/api/search-image?query=medical%20laboratory%20technician%20working%20with%20microscope%20and%20blood%20samples%20in%20modern%20clinical%20laboratory%2C%20professional%20healthcare%20setting%2C%20diagnostic%20testing%2C%20medical%20technology&width=600&height=400&seq=32&orientation=landscape" alt="Medical Laboratory Technology" class="rounded-lg shadow-lg w-full object-cover object-top">
</div>
<div>
<h3 class="text-2xl font-bold text-primary mb-4">Medical Laboratory Technology (MLT)</h3>
<p class="text-gray-700 mb-6">The Medical Laboratory Technology program prepares students to become skilled laboratory professionals who play a crucial role in the detection, diagnosis, and treatment of disease. Students learn to perform a wide range of laboratory tests and procedures used in the diagnosis, treatment, and prevention of disease.</p>
<div class="space-y-4 mb-6">
<div class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary">
<i class="ri-time-line"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Duration</h4>
<p class="text-gray-700">3 Years (6 Semesters)</p>
</div>
</div>
<div class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary">
<i class="ri-graduation-cap-line"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Qualification</h4>
<p class="text-gray-700">Bachelor of Science in Medical Laboratory Technology</p>
</div>
</div>
<div class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary">
<i class="ri-user-follow-line"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Eligibility</h4>
<p class="text-gray-700">10+2 with Physics, Chemistry, and Biology with minimum 50% marks</p>
</div>
</div>
</div>
<a href="admission.html" class="inline-block bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer">Apply Now</a>
</div>
</div>
</div>
<!-- RIT Tab Content -->
<div id="rit-content" class="tab-content hidden">
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
<div>
<img src="https://readdy.ai/api/search-image?query=radiography%20technician%20operating%20X-ray%20machine%20in%20modern%20hospital%20setting%2C%20professional%20healthcare%20environment%2C%20medical%20imaging%20technology%2C%20diagnostic%20radiology%20department&width=600&height=400&seq=33&orientation=landscape" alt="Radiography & Imaging Technology" class="rounded-lg shadow-lg w-full object-cover object-top">
</div>
<div>
<h3 class="text-2xl font-bold text-primary mb-4">Radiography & Imaging Technology</h3>
<p class="text-gray-700 mb-6">The Radiography & Imaging Technology program trains students to become skilled radiographers who use various imaging techniques to visualize the internal structures of the human body. Students learn to operate sophisticated imaging equipment and work closely with radiologists in the diagnosis of disease.</p>
<div class="space-y-4 mb-6">
<div class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary">
<i class="ri-time-line"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Duration</h4>
<p class="text-gray-700">3 Years (6 Semesters)</p>
</div>
</div>
<div class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary">
<i class="ri-graduation-cap-line"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Qualification</h4>
<p class="text-gray-700">Bachelor of Science in Radiography & Imaging Technology</p>
</div>
</div>
<div class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary">
<i class="ri-user-follow-line"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Eligibility</h4>
<p class="text-gray-700">10+2 with Physics, Chemistry, and Biology with minimum 50% marks</p>
</div>
</div>
</div>
<a href="admission.html" class="inline-block bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer">Apply Now</a>
</div>
</div>
</div>
<!-- OTT Tab Content -->
<div id="ott-content" class="tab-content hidden">
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
<div>
<img src="https://readdy.ai/api/search-image?query=operation%20theater%20technician%20assisting%20in%20surgery%2C%20modern%20operating%20room%20environment%2C%20medical%20professionals%20in%20surgical%20setting%2C%20healthcare%20professionals%20in%20sterile%20environment%2C%20medical%20technology&width=600&height=400&seq=34&orientation=landscape" alt="Operation Theater Technology" class="rounded-lg shadow-lg w-full object-cover object-top">
</div>
<div>
<h3 class="text-2xl font-bold text-primary mb-4">Operation Theater Technology</h3>
<p class="text-gray-700 mb-6">The Operation Theater Technology program prepares students to become skilled professionals who assist surgeons and other medical personnel during surgical procedures. Students learn to manage operating room equipment, ensure sterile conditions, and provide technical support during surgeries.</p>
<div class="space-y-4 mb-6">
<div class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary">
<i class="ri-time-line"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Duration</h4>
<p class="text-gray-700">3 Years (6 Semesters)</p>
</div>
</div>
<div class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary">
<i class="ri-graduation-cap-line"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Qualification</h4>
<p class="text-gray-700">Bachelor of Science in Operation Theater Technology</p>
</div>
</div>
<div class="flex items-start">
<div class="w-6 h-6 flex items-center justify-center mr-3 mt-1 bg-primary/10 rounded-full text-primary">
<i class="ri-user-follow-line"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Eligibility</h4>
<p class="text-gray-700">10+2 with Physics, Chemistry, and Biology with minimum 50% marks</p>
</div>
</div>
</div>
<a href="admission.html" class="inline-block bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer">Apply Now</a>
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
<h2 class="text-3xl font-bold text-gray-800 mb-4">Curriculum Highlights</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Our comprehensive curriculum combines theoretical knowledge with practical skills development.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 fade-in">
<div class="bg-white p-6 rounded-lg shadow-md">
<h3 class="text-xl font-bold text-primary mb-4">Theoretical Components</h3>
<ul class="space-y-3">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Human Anatomy & Physiology</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Biochemistry & Pathology</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Microbiology & Immunology</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Medical Ethics & Hospital Management</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Pharmacology & Medication Administration</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Healthcare Information Systems</span>
</li>
</ul>
</div>
<div class="bg-white p-6 rounded-lg shadow-md">
<h3 class="text-xl font-bold text-primary mb-4">Practical Training</h3>
<ul class="space-y-3">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Laboratory Techniques & Procedures</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Diagnostic Imaging Procedures</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Surgical Assistance & Instrumentation</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Clinical Rotations in Hospital Departments</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Emergency Care Procedures</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-check-line"></i>
</div>
<span class="text-gray-700">Medical Equipment Operation & Maintenance</span>
</li>
</ul>
</div>
</div>
</div>
</section>
<!-- Facilities Section -->
<section class="py-16 bg-white">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Our Specialized Facilities</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">State-of-the-art facilities designed to provide optimal learning experiences for paramedical students.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=modern%20medical%20laboratory%20with%20advanced%20equipment%2C%20students%20working%20with%20microscopes%20and%20diagnostic%20tools%2C%20bright%20clinical%20environment%2C%20healthcare%20education%20facility&width=400&height=250&seq=35&orientation=landscape" alt="Clinical Laboratory" class="w-full h-48 object-cover object-top">
<div class="p-6">
<h3 class="font-bold text-gray-800 mb-2">Clinical Laboratories</h3>
<p class="text-gray-700 text-sm">Our advanced clinical laboratories are equipped with the latest diagnostic equipment and tools, providing students with hands-on experience in various laboratory techniques and procedures.</p>
</div>
</div>
<div class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=modern%20radiology%20department%20with%20X-ray%20machines%2C%20CT%20scanners%2C%20and%20imaging%20equipment%2C%20students%20learning%20radiography%20techniques%2C%20bright%20medical%20environment%2C%20healthcare%20education%20facility&width=400&height=250&seq=36&orientation=landscape" alt="Radiology Lab" class="w-full h-48 object-cover object-top">
<div class="p-6">
<h3 class="font-bold text-gray-800 mb-2">Radiology Laboratory</h3>
<p class="text-gray-700 text-sm">Our radiology laboratory features X-ray machines, CT simulators, and other imaging equipment, allowing students to develop skills in various radiographic and imaging techniques.</p>
</div>
</div>
<div class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=simulated%20operation%20theater%20with%20surgical%20equipment%2C%20students%20practicing%20surgical%20techniques%2C%20bright%20medical%20environment%2C%20healthcare%20education%20facility%2C%20surgical%20training&width=400&height=250&seq=37&orientation=landscape" alt="Simulated OT" class="w-full h-48 object-cover object-top">
<div class="p-6">
<h3 class="font-bold text-gray-800 mb-2">Simulated Operation Theater</h3>
<p class="text-gray-700 text-sm">Our simulated operation theater replicates a real surgical environment, complete with operating tables, surgical instruments, and anesthesia equipment for practical training.</p>
</div>
</div>
<div class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=modern%20microbiology%20laboratory%20with%20students%20working%20with%20cultures%20and%20microscopes%2C%20bright%20clinical%20environment%2C%20healthcare%20education%20facility%2C%20scientific%20research&width=400&height=250&seq=38&orientation=landscape" alt="Microbiology Lab" class="w-full h-48 object-cover object-top">
<div class="p-6">
<h3 class="font-bold text-gray-800 mb-2">Microbiology Laboratory</h3>
<p class="text-gray-700 text-sm">Our specialized microbiology laboratory is equipped for culturing microorganisms, microscopy, and various microbiological techniques essential for diagnostic testing.</p>
</div>
</div>
<div class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=modern%20biochemistry%20laboratory%20with%20students%20conducting%20chemical%20analysis%2C%20bright%20clinical%20environment%2C%20healthcare%20education%20facility%2C%20scientific%20research%20equipment&width=400&height=250&seq=39&orientation=landscape" alt="Biochemistry Lab" class="w-full h-48 object-cover object-top">
<div class="p-6">
<h3 class="font-bold text-gray-800 mb-2">Biochemistry Laboratory</h3>
<p class="text-gray-700 text-sm">Our biochemistry laboratory features advanced analyzers and equipment for biochemical testing, providing students with practical experience in clinical chemistry.</p>
</div>
</div>
<div class="facility-card bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=modern%20computer%20laboratory%20with%20medical%20software%2C%20students%20analyzing%20medical%20data%2C%20bright%20educational%20environment%2C%20healthcare%20informatics%20training&width=400&height=250&seq=40&orientation=landscape" alt="Computer Lab" class="w-full h-48 object-cover object-top">
<div class="p-6">
<h3 class="font-bold text-gray-800 mb-2">Medical Informatics Lab</h3>
<p class="text-gray-700 text-sm">Our computer laboratory is equipped with specialized medical software and systems used in healthcare settings, preparing students for the digital aspects of modern healthcare.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Career Opportunities -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Career Opportunities</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Our paramedical graduates find rewarding careers in various healthcare settings.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
<div class="course-card bg-white p-6 rounded-lg shadow-md">
<div class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4">
<i class="ri-hospital-line text-2xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3">Hospitals & Medical Centers</h3>
<p class="text-gray-700 mb-4">Work in various departments including laboratories, radiology, operation theaters, and emergency services.</p>
<ul class="space-y-2 text-gray-700">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Diagnostic laboratories</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Imaging departments</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Surgical units</span>
</li>
</ul>
</div>
<div class="course-card bg-white p-6 rounded-lg shadow-md">
<div class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4">
<i class="ri-test-tube-line text-2xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3">Diagnostic Centers</h3>
<p class="text-gray-700 mb-4">Specialized roles in independent diagnostic and imaging centers performing various medical tests and procedures.</p>
<ul class="space-y-2 text-gray-700">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Pathology laboratories</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Radiology centers</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Diagnostic imaging facilities</span>
</li>
</ul>
</div>
<div class="course-card bg-white p-6 rounded-lg shadow-md">
<div class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4">
<i class="ri-medicine-bottle-line text-2xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3">Pharmaceutical Companies</h3>
<p class="text-gray-700 mb-4">Roles in research, quality control, and clinical trials for pharmaceutical and medical device companies.</p>
<ul class="space-y-2 text-gray-700">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Research laboratories</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Quality assurance departments</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Clinical trial teams</span>
</li>
</ul>
</div>
<div class="course-card bg-white p-6 rounded-lg shadow-md">
<div class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4">
<i class="ri-government-line text-2xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3">Government Health Services</h3>
<p class="text-gray-700 mb-4">Opportunities in public health laboratories, government hospitals, and health departments.</p>
<ul class="space-y-2 text-gray-700">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Public health laboratories</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Government medical facilities</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Health department services</span>
</li>
</ul>
</div>
<div class="course-card bg-white p-6 rounded-lg shadow-md">
<div class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4">
<i class="ri-building-line text-2xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3">Blood Banks</h3>
<p class="text-gray-700 mb-4">Specialized roles in blood collection, processing, testing, and transfusion services.</p>
<ul class="space-y-2 text-gray-700">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Blood collection centers</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Blood component preparation</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Transfusion services</span>
</li>
</ul>
</div>
<div class="course-card bg-white p-6 rounded-lg shadow-md">
<div class="w-14 h-14 flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4">
<i class="ri-flight-takeoff-line text-2xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-800 mb-3">International Opportunities</h3>
<p class="text-gray-700 mb-4">Global career prospects in healthcare facilities around the world, particularly in regions with high demand for paramedical professionals.</p>
<ul class="space-y-2 text-gray-700">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>International hospitals</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Global health organizations</span>
</li>
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-2 mt-1 text-primary">
<i class="ri-arrow-right-s-line"></i>
</div>
<span>Medical tourism facilities</span>
</li>
</ul>
</div>
</div>
</div>
</section>
<!-- Faculty Section -->
<section class="py-16 bg-white">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Our Expert Faculty</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Learn from experienced professionals with extensive clinical and academic backgrounds.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20middle-aged%20male%20medical%20laboratory%20professor%20in%20lab%20coat%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education&width=300&height=300&seq=41&orientation=squarish" alt="Dr. Michael Thompson" class="w-full h-64 object-cover object-top">
<div class="p-4 text-center">
<h3 class="font-bold text-gray-800 mb-1">Dr. Michael Thompson</h3>
<p class="text-gray-600 text-sm mb-2">Head of Medical Laboratory Technology</p>
<p class="text-gray-700 text-sm">Ph.D. in Clinical Pathology with 15+ years of experience in diagnostic laboratories and academic teaching.</p>
</div>
</div>
<div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20middle-aged%20female%20radiology%20professor%20in%20professional%20attire%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education&width=300&height=300&seq=42&orientation=squarish" alt="Dr. Jennifer Lee" class="w-full h-64 object-cover object-top">
<div class="p-4 text-center">
<h3 class="font-bold text-gray-800 mb-1">Dr. Jennifer Lee</h3>
<p class="text-gray-600 text-sm mb-2">Head of Radiography & Imaging</p>
<p class="text-gray-700 text-sm">Ph.D. in Medical Imaging with extensive experience in advanced imaging techniques and radiological research.</p>
</div>
</div>
<div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20middle-aged%20male%20surgical%20technology%20professor%20in%20scrubs%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education&width=300&height=300&seq=43&orientation=squarish" alt="Dr. David Rodriguez" class="w-full h-64 object-cover object-top">
<div class="p-4 text-center">
<h3 class="font-bold text-gray-800 mb-1">Dr. David Rodriguez</h3>
<p class="text-gray-600 text-sm mb-2">Head of Operation Theater Technology</p>
<p class="text-gray-700 text-sm">M.D. with specialization in Surgery and 12+ years of experience in surgical procedures and operating room management.</p>
</div>
</div>
<div class="bg-gray-50 rounded-lg overflow-hidden shadow-md fade-in">
<img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20middle-aged%20female%20microbiology%20professor%20in%20lab%20coat%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20education&width=300&height=300&seq=44&orientation=squarish" alt="Dr. Priya Sharma" class="w-full h-64 object-cover object-top">
<div class="p-4 text-center">
<h3 class="font-bold text-gray-800 mb-1">Dr. Priya Sharma</h3>
<p class="text-gray-600 text-sm mb-2">Professor of Microbiology</p>
<p class="text-gray-700 text-sm">Ph.D. in Microbiology with research focus on antimicrobial resistance and clinical microbiology applications.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Testimonials Section -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">What Our Students Say</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Hear from our alumni about their experiences and success stories.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 fade-in">
<div class="bg-white p-6 rounded-lg shadow-md">
<div class="flex items-center mb-4">
<img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20female%20medical%20laboratory%20technician%20in%20lab%20coat%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20professional&width=100&height=100&seq=45&orientation=squarish" alt="Samantha Wilson" class="w-16 h-16 rounded-full object-cover mr-4">
<div>
<h4 class="font-semibold text-gray-800">Samantha Wilson</h4>
<p class="text-gray-600 text-sm">MLT Graduate, 2023</p>
<p class="text-gray-600 text-sm">Clinical Laboratory Technologist at City General Hospital</p>
</div>
</div>
<p class="text-gray-700">"The Medical Laboratory Technology program provided me with comprehensive knowledge and hands-on experience that prepared me well for my career. The faculty's expertise and the state-of-the-art laboratories made learning both challenging and enjoyable. I secured a position at a leading hospital immediately after graduation."</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md">
<div class="flex items-center mb-4">
<img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20male%20radiography%20technician%20in%20scrubs%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20professional&width=100&height=100&seq=46&orientation=squarish" alt="Jason Chen" class="w-16 h-16 rounded-full object-cover mr-4">
<div>
<h4 class="font-semibold text-gray-800">Jason Chen</h4>
<p class="text-gray-600 text-sm">RIT Graduate, 2022</p>
<p class="text-gray-600 text-sm">Senior Radiographer at Metropolitan Medical Center</p>
</div>
</div>
<p class="text-gray-700">"The Radiography program exceeded my expectations. The curriculum was well-structured, covering both traditional and advanced imaging techniques. The clinical rotations provided valuable real-world experience, and the faculty's guidance was instrumental in my professional development. I'm now thriving in my career as a radiographer."</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md">
<div class="flex items-center mb-4">
<img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20young%20female%20operation%20theater%20technician%20in%20scrubs%2C%20confident%20pose%2C%20neutral%20background%2C%20healthcare%20professional&width=100&height=100&seq=47&orientation=squarish" alt="Aisha Patel" class="w-16 h-16 rounded-full object-cover mr-4">
<div>
<h4 class="font-semibold text-gray-800">Aisha Patel</h4>
<p class="text-gray-600 text-sm">OTT Graduate, 2021</p>
<p class="text-gray-600 text-sm">Operation Theater Technician at University Hospital</p>
</div>
</div>
<p class="text-gray-700">"The Operation Theater Technology program was rigorous and comprehensive, providing me with the skills needed to excel in the surgical environment. The simulated OT experiences and clinical rotations were particularly valuable. The faculty's mentorship helped me develop both technical skills and professional confidence."</p>
</div>
</div>
</div>
</section>
<!-- FAQ Section -->
<section class="py-16 bg-white">
<div class="container mx-auto px-4">
<div class="text-center mb-12 fade-in">
<h2 class="text-3xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
<div class="w-20 h-1 bg-secondary mx-auto mb-6"></div>
<p class="text-gray-700 max-w-2xl mx-auto">Find answers to common questions about our paramedical programs.</p>
</div>
<div class="max-w-3xl mx-auto fade-in">
<div class="accordion-item">
<button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
<span class="font-semibold text-gray-800">What is the scope of paramedical science in the healthcare industry?</span>
<div class="w-5 h-5 flex items-center justify-center accordion-icon">
<i class="ri-arrow-down-s-line"></i>
</div>
</button>
<div class="accordion-content px-6 pb-4">
<p class="text-gray-700">Paramedical science plays a crucial role in the healthcare industry, with professionals working alongside doctors and nurses to provide comprehensive patient care. The demand for paramedical professionals is growing rapidly due to advancements in medical technology, increasing healthcare needs of an aging population, and expansion of healthcare services. Graduates can find opportunities in hospitals, diagnostic centers, research institutions, and more, with excellent prospects for career advancement and specialization.</p>
</div>
</div>
<div class="accordion-item">
<button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
<span class="font-semibold text-gray-800">What are the admission requirements for paramedical programs?</span>
<div class="w-5 h-5 flex items-center justify-center accordion-icon">
<i class="ri-arrow-down-s-line"></i>
</div>
</button>
<div class="accordion-content px-6 pb-4">
<p class="text-gray-700">For admission to our paramedical programs, candidates must have completed 10+2 education with Physics, Chemistry, and Biology with a minimum of 50% marks. Selection is based on academic performance, entrance examination scores, and personal interviews. Some programs may have additional specific requirements. We recommend checking the detailed eligibility criteria for your program of interest on our admissions page.</p>
</div>
</div>
<div class="accordion-item">
<button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
<span class="font-semibold text-gray-800">Are there opportunities for higher studies after completing paramedical courses?</span>
<div class="w-5 h-5 flex items-center justify-center accordion-icon">
<i class="ri-arrow-down-s-line"></i>
</div>
</button>
<div class="accordion-content px-6 pb-4">
<p class="text-gray-700">Yes, there are numerous opportunities for higher education after completing paramedical courses. Graduates can pursue master's degrees in their specialized fields, such as M.Sc. in Medical Laboratory Technology, M.Sc. in Radiography, or M.Sc. in Operation Theater Technology. Additionally, there are options for specialized certifications, doctoral programs (Ph.D.), and even management courses focused on healthcare administration. These advanced qualifications can lead to roles in research, education, and healthcare management.</p>
</div>
</div>
<div class="accordion-item">
<button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
<span class="font-semibold text-gray-800">What is the placement assistance provided by the institution?</span>
<div class="w-5 h-5 flex items-center justify-center accordion-icon">
<i class="ri-arrow-down-s-line"></i>
</div>
</button>
<div class="accordion-content px-6 pb-4">
<p class="text-gray-700">Our institution provides comprehensive placement assistance through our dedicated Career Development Center. Services include resume building, interview preparation, soft skills training, and career counseling. We organize campus recruitment drives with leading hospitals, diagnostic centers, and healthcare organizations. Our strong industry connections and alumni network help students secure rewarding positions. We maintain a placement rate of over 90% for our paramedical graduates, with many receiving multiple job offers before completion of their programs.</p>
</div>
</div>
<div class="accordion-item">
<button class="accordion-button py-4 px-6 w-full flex justify-between items-center cursor-pointer">
<span class="font-semibold text-gray-800">Are there internship opportunities during the program?</span>
<div class="w-5 h-5 flex items-center justify-center accordion-icon">
<i class="ri-arrow-down-s-line"></i>
</div>
</button>
<div class="accordion-content px-6 pb-4">
<p class="text-gray-700">Yes, internships are an integral part of our paramedical programs. Students complete mandatory clinical internships in affiliated hospitals and healthcare facilities during their final year. These internships provide valuable hands-on experience in real healthcare settings under the supervision of experienced professionals. Additionally, we facilitate optional summer internships and observerships to enhance practical skills and industry exposure. These experiences significantly improve employability and help students build professional networks before graduation.</p>
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
<h2 class="text-3xl font-bold text-white mb-4">Begin Your Journey in Paramedical Science</h2>
<p class="text-white text-opacity-90 text-lg">Take the first step towards a rewarding career in healthcare. Apply now for our paramedical programs or contact us to learn more.</p>
</div>
<div class="flex flex-wrap gap-4 fade-in">
<a href="admission.html" class="inline-block bg-white text-primary hover:bg-gray-100 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer">Apply Now</a>
<a href="contact.html" class="inline-block bg-transparent border-2 border-white text-white hover:bg-white hover:bg-opacity-10 px-6 py-3 rounded-button font-medium transition whitespace-nowrap cursor-pointer">Contact Us</a>
</div>
</div>
</div>
</section>
<!-- Footer -->
<footer class="bg-gray-900 text-white pt-16 pb-8">
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
<div>
<a href="index.html" class="font-['Pacifico'] text-3xl text-white mb-6 block">logo</a>
<p class="text-gray-400 mb-6">Providing quality healthcare education since 1995. Our mission is to develop skilled and compassionate healthcare professionals.</p>
<div class="flex space-x-4">
<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer">
<i class="ri-facebook-fill"></i>
</a>
<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer">
<i class="ri-twitter-fill"></i>
</a>
<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer">
<i class="ri-instagram-line"></i>
</a>
<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 transition cursor-pointer">
<i class="ri-linkedin-fill"></i>
</a>
</div>
</div>
<div>
<h3 class="text-xl font-semibold mb-6">Quick Links</h3>
<ul class="space-y-3">
<li><a href="index.html" class="text-gray-400 hover:text-white transition">Home</a></li>
<li><a href="about.html" class="text-gray-400 hover:text-white transition">About Us</a></li>
<li><a href="paramedical.html" class="text-gray-400 hover:text-white transition">Paramedical Science</a></li>
<li><a href="nursing.html" class="text-gray-400 hover:text-white transition">School of Nursing</a></li>
<li><a href="campus.html" class="text-gray-400 hover:text-white transition">Campus Life</a></li>
<li><a href="admission.html" class="text-gray-400 hover:text-white transition">Admission</a></li>
<li><a href="contact.html" class="text-gray-400 hover:text-white transition">Contact</a></li>
</ul>
</div>
<div>
<h3 class="text-xl font-semibold mb-6">Programs</h3>
<ul class="space-y-3">
<li><a href="paramedical.html" class="text-gray-400 hover:text-white transition">Medical Lab Technology</a></li>
<li><a href="paramedical.html" class="text-gray-400 hover:text-white transition">Radiography & Imaging</a></li>
<li><a href="paramedical.html" class="text-gray-400 hover:text-white transition">Operation Theater Technology</a></li>
<li><a href="nursing.html" class="text-gray-400 hover:text-white transition">B.Sc. Nursing</a></li>
<li><a href="nursing.html" class="text-gray-400 hover:text-white transition">General Nursing & Midwifery</a></li>
<li><a href="nursing.html" class="text-gray-400 hover:text-white transition">Post Basic B.Sc. Nursing</a></li>
</ul>
</div>
<div>
<h3 class="text-xl font-semibold mb-6">Contact Us</h3>
<ul class="space-y-4">
<li class="flex items-start">
<div class="w-5 h-5 flex items-center justify-center mr-3 mt-1 text-gray-400">
<i class="ri-map-pin-line"></i>
</div>
<span class="text-gray-400">123 Education Street, Academic District, City, State 12345</span>
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
<input type="email" placeholder="Your email" class="px-4 py-2 w-full bg-gray-800 border-none rounded-l-button focus:outline-none text-white">
<button class="bg-secondary hover:bg-opacity-90 text-white px-4 py-2 rounded-r-button whitespace-nowrap cursor-pointer">Subscribe</button>
</div>
</div>
</div>
</div>
<div class="border-t border-gray-800 pt-8">
<div class="flex flex-col md:flex-row justify-between items-center">
<p class="text-gray-400 text-sm mb-4 md:mb-0">&copy; 2025 Educational Institute. All rights reserved.</p>
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