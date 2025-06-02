<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramedical College Admission Form</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Arial', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 font-sans">
    
    
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
        <p id="modalMessage">We are processing your admission form.</p>
    </div>
</div>




    <?php include 'navbar.php' ?>
    <?php
    $db = mysqli_connect('localhost', 'mpchagar_mpchagar', '(Dgk+Lanermt', 'mpchagar_mpchagar');
    if (!$db) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Database connection failed',
            'error' => mysqli_connect_error()
        ]);
        exit;
    }
    $result = mysqli_query($db, "SELECT MAX(admissionId) AS lastId FROM admission_detail");
    $row = mysqli_fetch_assoc($result);
    $lastId = $row['lastId'] ?? 0;
    $newAdmissionId = $lastId + 1;
    $admissionId = $newAdmissionId;
    ?>

    <!-- Page Header -->
    <div class="container max-w-4xl mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center mb-6">
            <i class="bi bi-clipboard-check mr-2"></i>Paramedical College Admission Form
        </h2>
        <form method="POST" enctype="multipart/form-data" id="admissionForm" class="space-y-4 needs-validation" novalidate>
            <div class="space-y-4">
                <!-- Admission Info -->
                <div class="border rounded-lg">
                    <h2 class="text-lg font-semibold bg-gray-200 p-3 rounded-t-lg cursor-pointer" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <i class="bi bi-info-circle mr-2"></i>Admission Information
                    </h2>
                    <div class="p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="admission_no" class="block font-medium required">Admission No.</label>
                                <input type="text" id="admission_no" readonly value="<?php echo $admissionId; ?>" name="admission_no" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <p class="text-sm text-gray-500">It is not Editable</p>
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide an admission number.</div>
                            </div>
                            <div>
                                <label for="admission_date" class="block font-medium required">Admission Date</label>
                                <input type="date" id="admission_date" name="admission_date" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please select an admission date.</div>
                            </div>
                            <div>
                                <label for="scholar_no" class="block font-medium">Scholar No.</label>
                                <input type="text" id="scholar_no" name="scholar_no"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="session" class="block font-medium required">Session</label>
                                <input type="text" id="session" name="session" placeholder="e.g., 2024-2025" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide the session.</div>
                            </div>
                            <div>
                                <label for="enrollment_no" class="block font-medium">Enrollment No.</label>
                                <input type="text" id="enrollment_no" name="enrollment_no"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="enrollment_date" class="block font-medium">Enrollment Date</label>
                                <input type="date" id="enrollment_date" name="enrollment_date"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="course_name" class="block font-medium required">Course Name</label>
                                <input type="text" id="course_name" name="course_name" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide the course name.</div>
                            </div>
                            <div>
                                <label for="course_code" class="block font-medium">Course Code</label>
                                <input type="text" id="course_code" name="course_code"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Details -->
                <div class="border rounded-lg">
                    <h2 class="text-lg font-semibold bg-gray-200 p-3 rounded-t-lg cursor-pointer" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <i class="bi bi-person-fill mr-2"></i>Student Details
                    </h2>
                    <div class="p-4 hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="student_name" class="block font-medium required">Student Name</label>
                                <input type="text" id="student_name" name="student_name" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide the student name.</div>
                            </div>
                            <div>
                                <label for="father_name" class="block font-medium required">Father’s/Husband’s Name</label>
                                <input type="text" id="father_name" name="father_name" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide the father’s/husband’s name.</div>
                            </div>
                            <div>
                                <label for="mother_name" class="block font-medium required">Mother’s Name</label>
                                <input type="text" id="mother_name" name="mother_name" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide the mother’s name.</div>
                            </div>
                            <div>
                                <label for="dob" class="block font-medium required">Date of Birth</label>
                                <input type="date" id="dob" name="dob" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please select the date of birth.</div>
                            </div>
                            <div>
                                <label class="block font-medium required">Gender</label>
                                <div class="flex space-x-4">
                                    <div class="flex items-center">
                                        <input type="radio" name="gender" id="male" value="Male" required class="mr-2">
                                        <label for="male">Male</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" name="gender" id="female" value="Female" class="mr-2">
                                        <label for="female">Female</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" name="gender" id="other" value="Other" class="mr-2">
                                        <label for="other">Other</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please select a gender.</div>
                            </div>
                            <div>
                                <label for="category" class="block font-medium required">Category</label>
                                <select id="category" name="category" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                    <option value="">Select Category</option>
                                    <option value="UR">UR</option>
                                    <option value="OBC">OBC</option>
                                    <option value="SC">SC</option>
                                    <option value="ST">ST</option>
                                </select>
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please select a category.</div>
                            </div>
                            <div>
                                <label for="caste" class="block font-medium">Caste</label>
                                <input type="text" id="caste" name="caste" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="aadhaar" class="block font-medium required">Aadhaar Card No.</label>
                                <input type="text" id="aadhaar" name="aadhaar" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide the Aadhaar card number.</div>
                            </div>
                            <div>
                                <label for="sssm_id" class="block font-medium">SSSM ID</label>
                                <input type="text" id="sssm_id" name="sssm_id" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="md:col-span-2">
                                <label for="address" class="block font-medium required">Address</label>
                                <input type="text" id="address" name="address" placeholder="Village, Post, Tehsil, District, State, Pin Code" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide the address.</div>
                            </div>
                            <div>
                                <label for="email" class="block font-medium required">Email ID</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide a valid email address.</div>
                            </div>
                            <div>
                                <label for="student_mobile" class="block font-medium required">Student’s Mobile No.</label>
                                <input type="tel" id="student_mobile" name="student_mobile" required
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide the student’s mobile number.</div>
                            </div>
                            <div>
                                <label for="father_mobile" class="block font-medium">Father’s Mobile No.</label>
                                <input type="tel" id="father_mobile" name="father_mobile"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block font-medium required">Medium</label>
                                <div class="flex space-x-4">
                                    <div class="flex items-center">
                                        <input type="radio" name="medium" id="hindi" value="Hindi" required class="mr-2">
                                        <label for="hindi">Hindi</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" name="medium" id="english" value="English" class="mr-2">
                                        <label for="english">English</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please select a medium.</div>
                            </div>
                            <div>
                                <label for="marital_status" class="block font-medium required">Marital Status</label>
                                <select id="marital_status" name="marital_status" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                    <option value="">Select Marital Status</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                </select>
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please select marital status.</div>
                            </div>
                            <div>
                                <label for="occupation" class="block font-medium required">Occupation of F/H/Guardian</label>
                                <select id="occupation" name="occupation" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                                    <option value="">Select Occupation</option>
                                    <option value="Farmer">Farmer</option>
                                    <option value="Govt. Employee">Govt. Employee</option>
                                    <option value="Worker">Worker</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please select an occupation.</div>
                            </div>
                            <div>
                                <label for="annual_income" class="block font-medium">Annual Income</label>
                                <input type="number" id="annual_income" name="annual_income"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="caste_certificate_no" class="block font-medium">Caste Certificate No.</label>
                                <input type="text" id="caste_certificate_no" name="caste_certificate_no"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="certificate_list_no" class="block font-medium">Certificate List No.</label>
                                <input type="text" id="certificate_list_no" name="certificate_list_no"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Educational Qualifications -->
                <div class="border rounded-lg">
                    <h2 class="text-lg font-semibold bg-gray-200 p-3 rounded-t-lg cursor-pointer" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <i class="bi bi-book-fill mr-2"></i>Educational Qualifications
                    </h2>
                    <div class="p-4 hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full border border-gray-300">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="p-2 border">Exam</th>
                                        <th class="p-2 border">Board/University</th>
                                        <th class="p-2 border">Roll Number</th>
                                        <th class="p-2 border">Passing Year</th>
                                        <th class="p-2 border">Exam Date</th>
                                        <th class="p-2 border">Total Marks</th>
                                        <th class="p-2 border">Obtained Marks</th>
                                        <th class="p-2 border">%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2 border">10th</td>
                                        <td class="p-2 border"><input type="text" name="edu_10th_board" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="text" name="edu_10th_roll" class="w-24 p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_10th_year" class="w-24 p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="date" name="edu_10th_date" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_10th_total" class="w-16 p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_10th_obtained" class="w-16 p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="text" name="edu_10th_percent" class="w-16 p-1 border rounded-md "></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border">12th</td>
                                        <td class="p-2 border"><input type="text" name="edu_12th_board" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="text" name="edu_12th_roll" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_12th_year" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="date" name="edu_12th_date" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_12th_total" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_12th_obtained" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="text" name="edu_12th_percent" class="w-full p-1 border rounded-md"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border">Graduation/Post Graduation</td>
                                        <td class="p-2 border"><input type="text" name="edu_grad_board" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="text" name="edu_grad_roll" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_grad_year" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="date" name="edu_grad_date" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_grad_total" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_grad_obtained" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="text" name="edu_grad_percent" class="w-full p-1 border rounded-md"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border">12th (PCB%)</td>
                                        <td class="p-2 border"><input type="text" name="edu_pcb_board" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="text" name="edu_pcb_roll" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_pcb_year" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="date" name="edu_pcb_date" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_pcb_total" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="number" name="edu_pcb_obtained" class="w-full p-1 border rounded-md"></td>
                                        <td class="p-2 border"><input type="text" name="edu_pcb_percent" class="w-full p-1 border rounded-md"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Bank Details -->
                <div class="border rounded-lg">
                    <h2 class="text-lg font-semibold bg-gray-200 p-3 rounded-t-lg cursor-pointer" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <i class="bi bi-bank mr-2"></i>Bank Details
                    </h2>
                    <div class="p-4 hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="bank_name" class="block font-medium">Bank Name</label>
                                <input type="text" id="bank_name" name="bank_name"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="branch" class="block font-medium">Branch</label>
                                <input type="text" id="branch" name="branch"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="account_no" class="block font-medium">Account No.</label>
                                <input type="text" id="account_no" name="account_no"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="ifsc_code" class="block font-medium">IFSC Code</label>
                                <input type="text" id="ifsc_code" name="ifsc_code"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="scholarship_id" class="block font-medium">Scholarship ID</label>
                                <input type="text" id="scholarship_id" name="scholarship_id"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="password" class="block font-medium">Password</label>
                                <input type="password" id="password" name="password"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="sch_ekyc" class="block font-medium">SCH. EKYC</label>
                                <input type="text" id="sch_ekyc" name="sch_ekyc"
                                       class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documents Checklist -->
                <div class="border rounded-lg">
                    <h2 class="text-lg font-semibold bg-gray-200 p-3 rounded-t-lg cursor-pointer" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <i class="bi bi-files mr-2"></i>Documents Checklist
                    </h2>
                    <div class="p-4 hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="documents[]" id="doc_10th" value="10th Marksheet" class="document-checkbox mr-2">
                                    <label for="doc_10th">10th Marksheet</label>
                                </div>
                                <div class="file-upload hidden" id="file_doc_10th">
                                    <label for="upload_doc_10th" class="block font-medium">Upload 10th Marksheet (PDF/JPG)</label>
                                    <input type="file" id="upload_doc_10th" name="upload_doc_10th" accept=".pdf,.jpg,.jpeg"
                                           class="w-full p-2 border rounded-md">
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="documents[]" id="doc_12th" value="12th Marksheet" class="document-checkbox mr-2">
                                    <label for="doc_12th">12th Marksheet</label>
                                </div>
                                <div class="file-upload hidden" id="file_doc_12th">
                                    <label for="upload_doc_12th" class="block font-medium">Upload 12th Marksheet (PDF/JPG)</label>
                                    <input type="file" id="upload_doc_12th" name="upload_doc_12th" accept=".pdf,.jpg,.jpeg"
                                           class="w-full p-2 border rounded-md">
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="documents[]" id="doc_aadhaar" value="Aadhar Card" class="document-checkbox mr-2">
                                    <label for="doc_aadhaar">Aadhar Card</label>
                                </div>
                                <div class="file-upload hidden" id="file_doc_aadhaar">
                                    <label for="upload_doc_aadhaar" class="block font-medium">Upload Aadhar Card (PDF/JPG)</label>
                                    <input type="file" id="upload_doc_aadhaar" name="upload_doc_aadhaar" accept=".pdf,.jpg,.jpeg"
                                           class="w-full p-2 border rounded-md">
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="documents[]" id="doc_caste" value="Caste Certificate" class="document-checkbox mr-2">
                                    <label for="doc_caste">Caste Certificate</label>
                                </div>
                                <div class="file-upload hidden" id="file_doc_caste">
                                    <label for="upload_doc_caste" class="block font-medium">Upload Caste Certificate (PDF/JPG)</label>
                                    <input type="file" id="upload_doc_caste" name="upload_doc_caste" accept=".pdf,.jpg,.jpeg"
                                           class="w-full p-2 border rounded-md">
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="documents[]" id="doc_income" value="Income Certificate" class="document-checkbox mr-2">
                                    <label for="doc_income">Income Certificate</label>
                                </div>
                                <div class="file-upload hidden" id="file_doc_income">
                                    <label for="upload_doc_income" class="block font-medium">Upload Income Certificate (PDF/JPG)</label>
                                    <input type="file" id="upload_doc_income" name="upload_doc_income" accept=".pdf,.jpg,.jpeg"
                                           class="w-full p-2 border rounded-md">
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="documents[]" id="doc_residential" value="Residential Certificate" class="document-checkbox mr-2">
                                    <label for="doc_residential">Residential Certificate</label>
                                </div>
                                <div class="file-upload hidden" id="file_doc_residential">
                                    <label for="upload_doc_residential" class="block font-medium">Upload Residential Certificate (PDF/JPG)</label>
                                    <input type="file" id="upload_doc_residential" name="upload_doc_residential" accept=".pdf,.jpg,.jpeg"
                                           class="w-full p-2 border rounded-md">
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="documents[]" id="doc_photo" value="Passport Photo" class="document-checkbox mr-2">
                                    <label for="doc_photo">Passport Photo</label>
                                </div>
                                <div class="file-upload hidden" id="file_doc_photo">
                                    <label for="upload_doc_photo" class="block font-medium">Upload Passport Photo (PDF/JPG)</label>
                                    <input type="file" id="upload_doc_photo" name="upload_doc_photo" accept=".pdf,.jpg,.jpeg"
                                           class="w-full p-2 border rounded-md">
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="documents[]" id="doc_passbook" value="Bank Passbook" class="document-checkbox mr-2">
                                    <label for="doc_passbook">Bank Passbook</label>
                                </div>
                                <div class="file-upload hidden" id="file_doc_passbook">
                                    <label for="upload_doc_passbook" class="block font-medium">Upload Bank Passbook (PDF/JPG)</label>
                                    <input type="file" id="upload_doc_passbook" name="upload_doc_passbook" accept=".pdf,.jpg,.jpeg"
                                           class="w-full p-2 border rounded-md">
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="documents[]" id="doc_tc" value="T.C., Migration, Gap Certificate" class="document-checkbox mr-2">
                                    <label for="doc_tc">T.C., Migration, Gap Certificate</label>
                                </div>
                                <div class="file-upload hidden" id="file_doc_tc">
                                    <label for="upload_doc_tc" class="block font-medium">Upload T.C., Migration, Gap Certificate (PDF/JPG)</label>
                                    <input type="file" id="upload_doc_tc" name="upload_doc_tc" accept=".pdf,.jpg,.jpeg"
                                           class="w-full p-2 border rounded-md">
                                </div>
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" name="documents[]" id="doc_others" value="Others" class="document-checkbox mr-2">
                                    <label for="doc_others">Others</label>
                                </div>
                                <div class="file-upload hidden" id="file_doc_others">
                                    <label for="upload_doc_others" class="block font-medium">Upload Other Documents (PDF/JPG)</label>
                                    <input type="file" id="upload_doc_others" name="upload_doc_others" accept=".pdf,.jpg,.jpeg"
                                           class="w-full p-2 border rounded-md">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Personal Statement -->
                <div class="border rounded-lg">
                    <h2 class="text-lg font-semibold bg-gray-200 p-3 rounded-t-lg cursor-pointer" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <i class="bi bi-pen-fill mr-2"></i>Personal Statement
                    </h2>
                    <div class="p-4 hidden">
                        <div>
                            <label for="personal_statement" class="block font-medium required">Why do you want to pursue medical education?</label>
                            <textarea id="personal_statement" name="personal_statement" rows="5" required
                                      class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500"></textarea>
                            <div class="invalid-feedback text-red-500 text-sm mt-1 hidden">Please provide a personal statement.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit and Reset Buttons -->
            <div class="flex justify-end mt-6 space-x-2">
                <button type="reset" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:scale-105 transition-transform">
                    <i class="bi bi-arrow-counterclockwise mr-2"></i>Reset
                </button>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:scale-105 transition-transform">
                    <i class="bi bi-send mr-2"></i>Submit
                </button>
            </div>
        </form>
    </div>



<?php include 'footer.php' ?>



   <script>
    const modal = document.getElementById("loadingModal");
    const modalTitle = document.getElementById("modalTitle");
    const modalMessage = document.getElementById("modalMessage");

    document.querySelectorAll('.document-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const fileUploadDiv = document.getElementById(`file_${this.id}`);
            if (this.checked) {
                fileUploadDiv.classList.remove('hidden');
                fileUploadDiv.querySelector('input[type="file"]').setAttribute('required', 'true');
            } else {
                fileUploadDiv.classList.add('hidden');
                fileUploadDiv.querySelector('input[type="file"]').removeAttribute('required');
                fileUploadDiv.querySelector('input[type="file"]').value = '';
            }
        });
    });

    document.getElementById('admissionForm').addEventListener('submit', async function (e) {
        e.preventDefault();
        const form = this;
        let isValid = true;

        form.querySelectorAll('[required]').forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('border-red-500');
                const feedback = field.nextElementSibling?.classList.contains('invalid-feedback')
                    ? field.nextElementSibling
                    : field.parentElement.querySelector('.invalid-feedback');
                if (feedback) feedback.classList.remove('hidden');
            } else {
                field.classList.remove('border-red-500');
                const feedback = field.nextElementSibling?.classList.contains('invalid-feedback')
                    ? field.nextElementSibling
                    : field.parentElement.querySelector('.invalid-feedback');
                if (feedback) feedback.classList.add('hidden');
            }
        });

        ['gender', 'medium'].forEach(name => {
            const checked = form.querySelector(`input[name="${name}"]:checked`);
            const container = form.querySelector(`input[name="${name}"]`).parentElement.parentElement;
            const feedback = container.querySelector('.invalid-feedback');
            if (!checked) {
                isValid = false;
                container.querySelectorAll('input[name="' + name + '"]').forEach(input => {
                    input.classList.add('border-red-500');
                });
                if (feedback) feedback.classList.remove('hidden');
            } else {
                container.querySelectorAll('input[name="' + name + '"]').forEach(input => {
                    input.classList.remove('border-red-500');
                });
                if (feedback) feedback.classList.add('hidden');
            }
        });

        if (!isValid) {
            alert('Please fill out all required fields correctly.');
            return;
        }

        const formData = new FormData(form);

        // Show modal - waiting
        modalTitle.textContent = "Please wait...";
        modalMessage.textContent = "We are processing your admission form.";
        modal.style.display = "block";

        try {
            // Send to Node.js (Mail)
            const nodeResponse = await fetch('https://be96-110-227-55-162.ngrok-free.app/submit-form', {
                method: 'POST',
                body: formData
            });

            const result = await nodeResponse.json();

            if (result.status === 'success') {
                // Extract data for DB
                const dbData = {
                    name: formData.get('student_name'),
                    email: formData.get('email'),
                    phone: formData.get('student_mobile'),
                    admission_no: formData.get('admission_no'),
                    admission_date: formData.get('admission_date'),
                    scholar_no: formData.get('scholar_no'),
                    session: formData.get('session'),
                    enrollment_no: formData.get('enrollment_no'),
                    enrollment_date: formData.get('enrollment_date'),
                    course_name: formData.get('course_name'),
                    course_code: formData.get('course_code'),
                    father_name: formData.get('father_name'),
                    mother_name: formData.get('mother_name'),
                    dob: formData.get('dob'),
                    gender: formData.get('gender'),
                    category: formData.get('category'),
                    caste: formData.get('caste'),
                    aadhaar: formData.get('aadhaar'),
                    sssm_id: formData.get('sssm_id'),
                    address: formData.get('address'),
                    father_mobile: formData.get('father_mobile'),
                    medium: formData.get('medium'),
                    marital_status: formData.get('marital_status'),
                    occupation: formData.get('occupation'),
                    annual_income: formData.get('annual_income'),
                    caste_certificate_no: formData.get('caste_certificate_no'),
                    certificate_list_no: formData.get('certificate_list_no')
                };

                // Send to PHP DB
                const dbResponse = await fetch('insert.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(dbData)
                });

                const dbResult = await dbResponse.json();

                if (dbResult.status === 'success') {
                    modalTitle.textContent = "Success!";
                    modalMessage.textContent = dbResult.message;
                    form.reset();
                    document.querySelectorAll('.file-upload').forEach(div => div.classList.add('hidden'));
                } else {
                    modalTitle.textContent = "Database Error!";
                    modalMessage.textContent = dbResult.message;
                }
            } else {
                modalTitle.textContent = "Mail Error!";
                modalMessage.textContent = result.message;
            }

            setTimeout(() => { modal.style.display = "none"; }, 3500);
        } catch (err) {
            console.error(err);
            modalTitle.textContent = "Something went wrong!";
            modalMessage.textContent = err.message;
            setTimeout(() => { modal.style.display = "none"; }, 3500);
        }
    });
</script>

</body>
</html>