<script type="text/javascript">
        var gk_isXlsx = false;
        var gk_xlsxFileLookup = {};
        var gk_fileData = {};
        function filledCell(cell) {
          return cell !== '' && cell != null;
        }
        function loadFileData(filename) {
        if (gk_isXlsx && gk_xlsxFileLookup[filename]) {
            try {
                var workbook = XLSX.read(gk_fileData[filename], { type: 'base64' });
                var firstSheetName = workbook.SheetNames[0];
                var worksheet = workbook.Sheets[firstSheetName];

                // Convert sheet to JSON to filter blank rows
                var jsonData = XLSX.utils.sheet_to_json(worksheet, { header: 1, blankrows: false, defval: '' });
                // Filter out blank rows (rows where all cells are empty, null, or undefined)
                var filteredData = jsonData.filter(row => row.some(filledCell));

                // Heuristic to find the header row by ignoring rows with fewer filled cells than the next row
                var headerRowIndex = filteredData.findIndex((row, index) =>
                  row.filter(filledCell).length >= filteredData[index + 1]?.filter(filledCell).length
                );
                // Fallback
                if (headerRowIndex === -1 || headerRowIndex > 25) {
                  headerRowIndex = 0;
                }

                // Convert filtered JSON back to CSV
                var csv = XLSX.utils.aoa_to_sheet(filteredData.slice(headerRowIndex)); // Create a new sheet from filtered array of arrays
                csv = XLSX.utils.sheet_to_csv(csv, { header: 1 });
                return csv;
            } catch (e) {
                console.error(e);
                return "";
            }
        }
        return gk_fileData[filename] || "";
        }
        </script><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enquiry Form</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .required::after {
            content: '*';
            color: #dc2626;
            margin-left: 5px;
        }
        .form-input, .form-select, .form-textarea {
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-input:focus, .form-select:focus, .form-textarea:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        .btn {
            transition: transform 0.2s ease, background-color 0.3s ease;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        .modal {
            transition: opacity 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    
    
    <?php include 'navbar.php' ?>
    
    
    
    
    
    
    
    
    
    <!--form submit model-->
    
    <!-- Modal -->
<div id="loadingModal" style="
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.6);
    z-index: 9999;
    text-align: center;
    color: white;
    font-family: Arial, sans-serif;
">
    <div style="
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -50%);
        background: #222;
        padding: 30px 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(255,255,255,0.2);
    ">
        <h2 id="modalTitle">Please wait...</h2>
        <p id="modalMessage">We are processing your enquiry.</p>
    </div>
</div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="container mx-auto max-w-3xl p-6 my-8 bg-white rounded-2xl shadow-lg">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fa-solid fa-graduation-cap mr-2 text-blue-600"></i> Student Enquiry Form
        </h2>
        <form id="enquiryForm"  method="POST" class="space-y-6" novalidate>
            <!-- Personal Information Section -->
            <div class="border rounded-lg shadow-sm">
                <div class="bg-gray-200 p-4 rounded-t-lg">
                    <h3 class="text-lg font-semibold text-gray-800"><i class="fa-solid fa-user mr-2"></i>Personal Information</h3>
                </div>
                <div class="p-4 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="full_name" class="block text-sm font-medium text-gray-700 required">Full Name</label>
                            <input type="text" id="full_name" name="full_name" class="form-input mt-1 block w-full p-2 border border-gray-300 rounded-md" required aria-required="true">
                        </div>
                        <div>
                            <label for="dob" class="block text-sm font-medium text-gray-700 required">Date of Birth</label>
                            <input type="date" id="dob" name="dob" class="form-input mt-1 block w-full p-2 border border-gray-300 rounded-md" required aria-required="true">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 required">Gender</label>
                            <div class="mt-1 space-y-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="Male" class="form-radio" required aria-required="true">
                                    <span class="ml-2">Male</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="Female" class="form-radio">
                                    <span class="ml-2">Female</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="Other" class="form-radio">
                                    <span class="ml-2">Other</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="border rounded-lg shadow-sm">
                <div class="bg-gray-200 p-4 rounded-t-lg">
                    <h3 class="text-lg font-semibold text-gray-800"><i class="fa-solid fa-address-book mr-2"></i>Contact Information</h3>
                </div>
                <div class="p-4 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 required">Email Address</label>
                            <input type="email" id="email" name="email" class="form-input mt-1 block w-full p-2 border border-gray-300 rounded-md" required aria-required="true">
                        </div>
                        <div>
                            <label for="mobile" class="block text-sm font-medium text-gray-700 required">Mobile Number</label>
                            <input type="tel" id="mobile" name="mobile" class="form-input mt-1 block w-full p-2 border border-gray-300 rounded-md" required aria-required="true" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number">
                        </div>
                        <div>
                            <label for="state" class="block text-sm font-medium text-gray-700 required">State</label>
                            <select id="state" name="state" class="form-select mt-1 block w-full p-2 border border-gray-300 rounded-md" required aria-required="true">
                                <option value="">Select State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700 required">City</label>
                            <input type="text" id="city" name="city" class="form-input mt-1 block w-full p-2 border border-gray-300 rounded-md" required aria-required="true">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Academic and Course Details Section -->
            <div class="border rounded-lg shadow-sm">
                <div class="bg-gray-200 p-4 rounded-t-lg">
                    <h3 class="text-lg font-semibold text-gray-800"><i class="fa-solid fa-book mr-2"></i>Academic and Course Details</h3>
                </div>
                <div class="p-4 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="course" class="block text-sm font-medium text-gray-700 required">Interested Course</label>
                            <select id="course" name="course" class="form-select mt-1 block w-full p-2 border border-gray-300 rounded-md" required aria-required="true">
                                <option value="">Select Course</option>
                                <option value="B.Sc Nursing">B.Sc Nursing</option>
                                <option value="GNM">GNM</option>
                                <option value="ANM">ANM</option>
                                <option value="DMLT">DMLT</option>
                                <option value="BPT">BPT</option>
                                <option value="B.Pharm">B.Pharm</option>
                            </select>
                        </div>
                        <div>
                            <label for="qualification" class="block text-sm font-medium text-gray-700 required">Highest Qualification</label>
                            <select id="qualification" name="qualification" class="form-select mt-1 block w-full p-2 border border-gray-300 rounded-md" required aria-required="true">
                                <option value="">Select Qualification</option>
                                <option value="10th">10th</option>
                                <option value="12th">12th</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Postgraduate">Postgraduate</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 required">Preferred Mode of Study</label>
                            <div class="mt-1 space-y-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="study_mode" value="Online" class="form-radio" required aria-required="true">
                                    <span class="ml-2">Online</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="study_mode" value="Offline" class="form-radio">
                                    <span class="ml-2">Offline</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="study_mode" value="Hybrid" class="form-radio">
                                    <span class="ml-2">Hybrid</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Message Section -->
            <div class="border rounded-lg shadow-sm">
                <div class="bg-gray-200 p-4 rounded-t-lg">
                    <h3 class="text-lg font-semibold text-gray-800"><i class="fa-solid fa-comment mr-2"></i>Any Message or Questions</h3>
                </div>
                <div class="p-4">
                    <textarea id="message" name="message" rows="4" class="form-textarea mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Feel free to ask any questions or share additional details..."></textarea>
                </div>
            </div>

            <!-- Submit and Reset Buttons -->
            <div class="flex justify-end space-x-4 mt-6">
                <button type="reset" class="btn bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                    <i class="fa-solid fa-arrow-rotate-left mr-2"></i>Reset
                </button>
                <button type="submit" class="btn bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    <i class="fa-solid fa-paper-plane mr-2"></i>Submit Enquiry
                </button>
            </div>
        </form>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="modal fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full text-center">
            <i class="fa-solid fa-check-circle text-green-500 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold text-gray-800">Thank You for Your Enquiry!</h3>
            <p class="text-gray-600 mt-2">We have received your enquiry and will get back to you soon.</p>
            <button onclick="closeModal()" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Close</button>
        </div>
    </div>




<?php include 'footer.php' ?>


  <script>
            const form = document.getElementById("enquiryForm");
            const modal = document.getElementById("loadingModal");
            const modalTitle = document.getElementById("modalTitle");
            const modalMessage = document.getElementById("modalMessage");
            
            form.addEventListener("submit", function(e) {
                e.preventDefault();
            
                const formData = new FormData(this);
            
                // Show modal and set to waiting state
                modalTitle.textContent = "Please wait...";
                modalMessage.textContent = "We are processing your enquiry.";
                modal.style.display = "block";
            
                fetch("./submit_enquiry.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    modalTitle.textContent = data.success ? "Success!" : "Something went wrong!";
                    modalMessage.textContent = data.message;
            
                    if (data.success) form.reset();
            
                    // Auto-hide after 3 seconds
                    setTimeout(() => { modal.style.display = "none"; }, 3000);
                })
                .catch(error => {
                    console.error("Error:", error);
                    modalTitle.textContent = "Error!";
                    modalMessage.textContent = "Something went wrong. Please try again.";
            
                    setTimeout(() => { modal.style.display = "none"; }, 3000);
                });
            });


        // Close modal
        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
        }
    </script>
</body>
</html>