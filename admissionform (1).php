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

$admissionId = $newAdmissionId

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramedical College Admission Form</title>
    
   
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .form-container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .required::after {
            content: '*';
            color: red;
            margin-left: 5px;
        }
        .accordion-button {
            font-weight: 600;
            background-color: #e9ecef;
        }
        .btn-primary, .btn-secondary {
            transition: transform 0.2s;
        }
        .btn-primary:hover, .btn-secondary:hover {
            transform: scale(1.05);
        }
        .table-responsive {
            margin-top: 20px;
        }
        .form-label {
            font-weight: 500;
        }
        .file-upload {
            display: none;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
    
    <!-- Page Header -->
    <div class="container form-container">
        <h2 class="text-center mb-4"><i class="bi bi-clipboard-check me-2"></i>Paramedical College Admission Form</h2>
            <form  method="POST" enctype="multipart/form-data" id="admissionForm" class="needs-validation" novalidate>
            <div class="accordion" id="admissionAccordion">

                <!-- Admission Info -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAdmission">
                            <i class="bi bi-info-circle me-2"></i>Admission Information
                        </button>
                    </h2>
                    <div id="collapseAdmission" class="accordion-collapse collapse show" data-bs-parent="#admissionAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="admission_no" class="form-label required">Admission No.</label>
                                    <input type="text" class="form-control" id="admission_no" readonly value="<?php echo $admissionId; ?>" name="admission_no" required>
                                    <div class="invalid-feedback">Please provide an admission number.</div>
                                    <p>It is not Editable</p>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="admission_date" class="form-label required">Admission Date</label>
                                    <input type="date" class="form-control" id="admission_date" name="admission_date" required>
                                    <div class="invalid-feedback">Please select an admission date.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="scholar_no" class="form-label">Scholar No.</label>
                                    <input type="text" class="form-control" id="scholar_no" name="scholar_no">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="session" class="form-label required">Session</label>
                                    <input type="text" class="form-control" id="session" name="session" placeholder="e.g., 2024-2025" required>
                                    <div class="invalid-feedback">Please provide the session.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="enrollment_no" class="form-label">Enrollment No.</label>
                                    <input type="text" class="form-control" id="enrollment_no" name="enrollment_no">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="enrollment_date" class="form-label">Enrollment Date</label>
                                    <input type="date" class="form-control" id="enrollment_date" name="enrollment_date">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="course_name" class="form-label required">Course Name</label>
                                    <input type="text" class="form-control" id="course_name" name="course_name" required>
                                    <div class="invalid-feedback">Please provide the course name.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="course_code" class="form-label">Course Code</label>
                                    <input type="text" class="form-control" id="course_code" name="course_code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Details -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStudent">
                            <i class="bi bi-person-fill me-2"></i>Student Details
                        </button>
                    </h2>
                    <div id="collapseStudent" class="accordion-collapse collapse" data-bs-parent="#admissionAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="student_name" class="form-label required">Student Name</label>
                                    <input type="text" class="form-control" id="student_name" name="student_name" required>
                                    <div class="invalid-feedback">Please provide the student name.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="father_name" class="form-label required">Father’s/Husband’s Name</label>
                                    <input type="text" class="form-control" id="father_name" name="father_name" required>
                                    <div class="invalid-feedback">Please provide the father’s/husband’s name.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="mother_name" class="form-label required">Mother’s Name</label>
                                    <input type="text" class="form-control" id="mother_name" name="mother_name" required>
                                    <div class="invalid-feedback">Please provide the mother’s name.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="dob" class="form-label required">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                    <div class="invalid-feedback">Please select the date of birth.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                    <div class="invalid-feedback">Please select a gender.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="category" class="form-label required">Category</label>
                                    <select class="form-select" id="category" name="category" required>
                                        <option value="">Select Category</option>
                                        <option value="UR">UR</option>
                                        <option value="OBC">OBC</option>
                                        <option value="SC">SC</option>
                                        <option value="ST">ST</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a category.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="caste" class="form-label">Caste</label>
                                    <input type="text" class="form-control" id="caste" name="caste">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="aadhaar" class="form-label required">Aadhaar Card No.</label>
                                    <input type="text" class="form-control" id="aadhaar" name="aadhaar" required>
                                    <div class="invalid-feedback">Please provide the Aadhaar card number.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="sssm_id" class="form-label">SSSM ID</label>
                                    <input type="text" class="form-control" id="sssm_id" name="sssm_id">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="address" class="form-label required">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Village, Post, Tehsil, District, State, Pin Code" required>
                                    <div class="invalid-feedback">Please provide the address.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label required">Email ID</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">Please provide a valid email address.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="student_mobile" class="form-label required">Student’s Mobile No.</label>
                                    <input type="tel" class="form-control" id="student_mobile" name="student_mobile" required>
                                    <div class="invalid-feedback">Please provide the student’s mobile number.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="father_mobile" class="form-label">Father’s Mobile No.</label>
                                    <input type="tel" class="form-control" id="father_mobile" name="father_mobile">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required">Medium</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="medium" id="hindi" value="Hindi" required>
                                        <label class="form-check-label" for="hindi">Hindi</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="medium" id="english" value="English">
                                        <label class="form-check-label" for="english">English</label>
                                    </div>
                                    <div class="invalid-feedback">Please select a medium.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="marital_status" class="form-label required">Marital Status</label>
                                    <select class="form-select" id="marital_status" name="marital_status" required>
                                        <option value="">Select Marital Status</option>
                                        <option value="Married">Married</option>
                                        <option value="Unmarried">Unmarried</option>
                                    </select>
                                    <div class="invalid-feedback">Please select marital status.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="occupation" class="form-label required">Occupation of F/H/Guardian</label>
                                    <select class="form-select" id="occupation" name="occupation" required>
                                        <option value="">Select Occupation</option>
                                        <option value="Farmer">Farmer</option>
                                        <option value="Govt. Employee">Govt. Employee</option>
                                        <option value="Worker">Worker</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">Please select an occupation.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="annual_income" class="form-label">Annual Income</label>
                                    <input type="number" class="form-control" id="annual_income" name="annual_income">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="caste_certificate_no" class="form-label">Caste Certificate No.</label>
                                    <input type="text" class="form-control" id="caste_certificate_no" name="caste_certificate_no">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="certificate_list_no" class="form-label">Certificate List No.</label>
                                    <input type="text" class="form-control" id="certificate_list_no" name="certificate_list_no">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Educational Qualifications -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEducation">
                            <i class="bi bi-book-fill me-2"></i>Educational Qualifications
                        </button>
                    </h2>
                    <div id="collapseEducation" class="accordion-collapse collapse" data-bs-parent="#admissionAccordion">
                        <div class="accordion-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Exam</th>
                                            <th>Board/University</th>
                                            <th>Roll Number</th>
                                            <th>Passing Year</th>
                                            <th>Exam Date</th>
                                            <th>Total Marks</th>
                                            <th>Obtained Marks</th>
                                            <th>%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10th</td>
                                            <td><input type="text" class="form-control" name="edu_10th_board"></td>
                                            <td><input type="text" class="form-control" name="edu_10th_roll"></td>
                                            <td><input type="number" class="form-control" name="edu_10th_year"></td>
                                            <td><input type="date" class="form-control" name="edu_10th_date"></td>
                                            <td><input type="number" class="form-control" name="edu_10th_total"></td>
                                            <td><input type="number" class="form-control" name="edu_10th_obtained"></td>
                                            <td><input type="text" class="form-control" name="edu_10th_percent"></td>
                                        </tr>
                                        <tr>
                                            <td>12th</td>
                                            <td><input type="text" class="form-control" name="edu_12th_board"></td>
                                            <td><input type="text" class="form-control" name="edu_12th_roll"></td>
                                            <td><input type="number" class="form-control" name="edu_12th_year"></td>
                                            <td><input type="date" class="form-control" name="edu_12th_date"></td>
                                            <td><input type="number" class="form-control" name="edu_12th_total"></td>
                                            <td><input type="number" class="form-control" name="edu_12th_obtained"></td>
                                            <td><input type="text" class="form-control" name="edu_12th_percent"></td>
                                        </tr>
                                        <tr>
                                            <td>Graduation/Post Graduation</td>
                                            <td><input type="text" class="form-control" name="edu_grad_board"></td>
                                            <td><input type="text" class="form-control" name="edu_grad_roll"></td>
                                            <td><input type="number" class="form-control" name="edu_grad_year"></td>
                                            <td><input type="date" class="form-control" name="edu_grad_date"></td>
                                            <td><input type="number" class="form-control" name="edu_grad_total"></td>
                                            <td><input type="number" class="form-control" name="edu_grad_obtained"></td>
                                            <td><input type="text" class="form-control" name="edu_grad_percent"></td>
                                        </tr>
                                        <tr>
                                            <td>12th (PCB%)</td>
                                            <td><input type="text" class="form-control" name="edu_pcb_board"></td>
                                            <td><input type="text" class="form-control" name="edu_pcb_roll"></td>
                                            <td><input type="number" class="form-control" name="edu_pcb_year"></td>
                                            <td><input type="date" class="form-control" name="edu_pcb_date"></td>
                                            <td><input type="number" class="form-control" name="edu_pcb_total"></td>
                                            <td><input type="number" class="form-control" name="edu_pcb_obtained"></td>
                                            <td><input type="text" class="form-control" name="edu_pcb_percent"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bank Details -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBank">
                            <i class="bi bi-bank me-2"></i>Bank Details
                        </button>
                    </h2>
                    <div id="collapseBank" class="accordion-collapse collapse" data-bs-parent="#admissionAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="bank_name" class="form-label">Bank Name</label>
                                    <input type="text" class="form-control" id="bank_name" name="bank_name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="branch" class="form-label">Branch</label>
                                    <input type="text" class="form-control" id="branch" name="branch">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="account_no" class="form-label">Account No.</label>
                                    <input type="text" class="form-control" id="account_no" name="account_no">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ifsc_code" class="form-label">IFSC Code</label>
                                    <input type="text" class="form-control" id="ifsc_code" name="ifsc_code">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="scholarship_id" class="form-label">Scholarship ID</label>
                                    <input type="text" class="form-control" id="scholarship_id" name="scholarship_id">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="sch_ekyc" class="form-label">SCH. EKYC</label>
                                    <input type="text" class="form-control" id="sch_ekyc" name="sch_ekyc">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documents Checklist -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDocuments">
                            <i class="bi bi-files me-2"></i>Documents Checklist
                        </button>
                    </h2>
                    <div id="collapseDocuments" class="accordion-collapse collapse" data-bs-parent="#admissionAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input document-checkbox" type="checkbox" name="documents[]" id="doc_10th" value="10th Marksheet">
                                        <label class="form-check-label" for="doc_10th">10th Marksheet</label>
                                        <div class="file-upload" id="file_doc_10th">
                                            <label for="upload_doc_10th" class="form-label">Upload 10th Marksheet (PDF/JPG)</label>
                                            <input type="file" class="form-control" id="upload_doc_10th" name="upload_doc_10th" accept=".pdf,.jpg,.jpeg">
                                        </div>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input document-checkbox" type="checkbox" name="documents[]" id="doc_12th" value="12th Marksheet">
                                        <label class="form-check-label" for="doc_12th">12th Marksheet</label>
                                        <div class="file-upload" id="file_doc_12th">
                                            <label for="upload_doc_12th" class="form-label">Upload 12th Marksheet (PDF/JPG)</label>
                                            <input type="file" class="form-control" id="upload_doc_12th" name="upload_doc_12th" accept=".pdf,.jpg,.jpeg">
                                        </div>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input document-checkbox" type="checkbox" name="documents[]" id="doc_aadhaar" value="Aadhar Card">
                                        <label class="form-check-label" for="doc_aadhaar">Aadhar Card</label>
                                        <div class="file-upload" id="file_doc_aadhaar">
                                            <label for="upload_doc_aadhaar" class="form-label">Upload Aadhar Card (PDF/JPG)</label>
                                            <input type="file" class="form-control" id="upload_doc_aadhaar" name="upload_doc_aadhaar" accept=".pdf,.jpg,.jpeg">
                                        </div>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input document-checkbox" type="checkbox" name="documents[]" id="doc_caste" value="Caste Certificate">
                                        <label class="form-check-label" for="doc_caste">Caste Certificate</label>
                                        <div class="file-upload" id="file_doc_caste">
                                            <label for="upload_doc_caste" class="form-label">Upload Caste Certificate (PDF/JPG)</label>
                                            <input type="file" class="form-control" id="upload_doc_caste" name="upload_doc_caste" accept=".pdf,.jpg,.jpeg">
                                        </div>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input document-checkbox" type="checkbox" name="documents[]" id="doc_income" value="Income Certificate">
                                        <label class="form-check-label" for="doc_income">Income Certificate</label>
                                        <div class="file-upload" id="file_doc_income">
                                            <label for="upload_doc_income" class="form-label">Upload Income Certificate (PDF/JPG)</label>
                                            <input type="file" class="form-control" id="upload_doc_income" name="upload_doc_income" accept=".pdf,.jpg,.jpeg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input document-checkbox" type="checkbox" name="documents[]" id="doc_residential" value="Residential Certificate">
                                        <label class="form-check-label" for="doc_residential">Residential Certificate</label>
                                        <div class="file-upload" id="file_doc_residential">
                                            <label for="upload_doc_residential" class="form-label">Upload Residential Certificate (PDF/JPG)</label>
                                            <input type="file" class="form-control" id="upload_doc_residential" name="upload_doc_residential" accept=".pdf,.jpg,.jpeg">
                                        </div>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input document-checkbox" type="checkbox" name="documents[]" id="doc_photo" value="Passport Photo">
                                        <label class="form-check-label" for="doc_photo">Passport Photo</label>
                                        <div class="file-upload" id="file_doc_photo">
                                            <label for="upload_doc_photo" class="form-label">Upload Passport Photo (PDF/JPG)</label>
                                            <input type="file" class="form-control" id="upload_doc_photo" name="upload_doc_photo" accept=".pdf,.jpg,.jpeg">
                                        </div>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input document-checkbox" type="checkbox" name="documents[]" id="doc_passbook" value="Bank Passbook">
                                        <label class="form-check-label" for="doc_passbook">Bank Passbook</label>
                                        <div class="file-upload" id="file_doc_passbook">
                                            <label for="upload_doc_passbook" class="form-label">Upload Bank Passbook (PDF/JPG)</label>
                                            <input type="file" class="form-control" id="upload_doc_passbook" name="upload_doc_passbook" accept=".pdf,.jpg,.jpeg">
                                        </div>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input document-checkbox" type="checkbox" name="documents[]" id="doc_tc" value="T.C., Migration, Gap Certificate">
                                        <label class="form-check-label" for="doc_tc">T.C., Migration, Gap Certificate</label>
                                        <div class="file-upload" id="file_doc_tc">
                                            <label for="upload_doc_tc" class="form-label">Upload T.C., Migration, Gap Certificate (PDF/JPG)</label>
                                            <input type="file" class="form-control" id="upload_doc_tc" name="upload_doc_tc" accept=".pdf,.jpg,.jpeg">
                                        </div>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input document-checkbox" type="checkbox" name="documents[]" id="doc_others" value="Others">
                                        <label class="form-check-label" for="doc_others">Others</label>
                                        <div class="file-upload" id="file_doc_others">
                                            <label for="upload_doc_others" class="form-label">Upload Other Documents (PDF/JPG)</label>
                                            <input type="file" class="form-control" id="upload_doc_others" name="upload_doc_others" accept=".pdf,.jpg,.jpeg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Personal Statement -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStatement">
                            <i class="bi bi-pen-fill me-2"></i>Personal Statement
                        </button>
                    </h2>
                    <div id="collapseStatement" class="accordion-collapse collapse" data-bs-parent="#admissionAccordion">
                        <div class="accordion-body">
                            <div class="mb-3">
                                <label for="personal_statement" class="form-label required">Why do you want to pursue medical education?</label>
                                <textarea class="form-control" id="personal_statement" name="personal_statement" rows="5" required></textarea>
                                <div class="invalid-feedback">Please provide a personal statement.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit and Reset Buttons -->
            <div class="d-flex justify-content-end mt-4">
                <button type="reset" class="btn btn-secondary me-2"><i class="bi bi-arrow-counterclockwise me-2"></i>Reset</button>
                <button type="submit" class="btn btn-primary"><i class="bi bi-send me-2"></i>Submit</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript for Dynamic File Uploads and Form Validation -->
    <script>
        // Show/hide file upload inputs based on checkbox selection
        document.querySelectorAll('.document-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const fileUploadDiv = document.getElementById(`file_${this.id}`);
                if (this.checked) {
                    fileUploadDiv.style.display = 'block';
                    fileUploadDiv.querySelector('input[type="file"]').setAttribute('required', true);
                } else {
                    fileUploadDiv.style.display = 'none';
                    fileUploadDiv.querySelector('input[type="file"]').removeAttribute('required');
                    fileUploadDiv.querySelector('input[type="file"]').value = ''; // Clear file input
                }
            });
        });

        // Form validation

   document.getElementById('admissionForm').addEventListener('submit', async function(e) {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);

  try {
    // 1. Send to Node.js for mailing
    const nodeResponse = await fetch('https://9f05-2405-201-300b-7169-1ca4-ffd9-a275-75a4.ngrok-free.app/submit-form', {
      method: 'POST',
      body: formData
    });

    const result = await nodeResponse.json();
  if (result.status === 'success') {
        // 2. Extract required fields for DB
        const name = formData.get('student_name');
        const email = formData.get('email');
        const phone = formData.get('student_mobile');

        // 3. Send to PHP for database insert
        const dbResponse = await fetch('insert.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ name, email, phone })
        });

        const dbResult = await dbResponse.json();
        console.log('PHP DB Response:', dbResult);

        if (dbResult.status === 'success') {
          alert('Success: ' + dbResult.message);
          form.reset(); // Clear form
        } else {
          alert('Database Error: ' + dbResult.message);
        }

      } else {
        alert('Mail failed: ' + result.message);
      }

  } catch (err) {
    alert('Something went wrong');
    console.error(err);
  }
});

    </script>
</body>
</html>