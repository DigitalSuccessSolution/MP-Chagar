const express = require('express');
const nodemailer = require('nodemailer');
const multer = require('multer');
const path = require('path');
const fs = require('fs');
const cors = require('cors');

const app = express();
const port = 3000;

// Configure multer for file uploads
const upload = multer({
    dest: 'uploads/',
    fileFilter: (req, file, cb) => {
        const filetypes = /pdf|jpg|jpeg/;
        const extname = filetypes.test(path.extname(file.originalname).toLowerCase());
        const mimetype = filetypes.test(file.mimetype);
        if (extname && mimetype) {
            return cb(null, true);
        } else {
            cb('Error: Only PDF and JPG files are allowed!');
        }
    }
});

// Middleware to parse form data
app.use(express.urlencoded({ extended: true }));
app.use(express.json());

// Serve the HTML form
app.use(express.static('public'));
// Allow only specific origin (recommended)
app.use(cors({
  origin: 'http://www.mpchagar.com',
  methods: ['POST', 'GET', 'OPTIONS'],
  credentials: true
}));

app.use(cors()); // Allow all domains temporarily


// Configure nodemailer
const transporter = nodemailer.createTransport({
    service: 'gmail', // Use your email service
    auth: {
        user: 'mohitmali411@gmail.com', // Replace with admin email
        pass: 'tsry ouke aejt lqvz' // Replace with app-specific password
    }
});

// Handle form submission
app.post('/submit-form', upload.fields([
    { name: 'upload_doc_10th', maxCount: 1 },
    { name: 'upload_doc_12th', maxCount: 1 },
    { name: 'upload_doc_aadhaar', maxCount: 1 },
    { name: 'upload_doc_caste', maxCount: 1 },
    { name: 'upload_doc_income', maxCount: 1 },
    { name: 'upload_doc_residential', maxCount: 1 },
    { name: 'upload_doc_photo', maxCount: 1 },
    { name: 'upload_doc_passbook', maxCount: 1 },
    { name: 'upload_doc_tc', maxCount: 1 },
    { name: 'upload_doc_others', maxCount: 1 }
]), (req, res) => {
    const formData = req.body;
    const files = req.files;

   let emailBody = `
  <div style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <div style="max-width: 800px; margin: auto; background-color: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
      <h2 style="color: #2c3e50;">📄 Paramedical College Admission Form Submission</h2>

      <h3 style="color: #2980b9;">📘 Admission Information</h3>
      <table style="width: 100%; border-collapse: collapse;" border="1" cellspacing="0" cellpadding="8">
        <tr><td><strong>Admission No:</strong></td><td>${formData.admission_no || 'N/A'}</td></tr>
        <tr><td><strong>Admission Date:</strong></td><td>${formData.admission_date || 'N/A'}</td></tr>
        <tr><td><strong>Scholar No:</strong></td><td>${formData.scholar_no || 'N/A'}</td></tr>
        <tr><td><strong>Session:</strong></td><td>${formData.session || 'N/A'}</td></tr>
        <tr><td><strong>Enrollment No:</strong></td><td>${formData.enrollment_no || 'N/A'}</td></tr>
        <tr><td><strong>Enrollment Date:</strong></td><td>${formData.enrollment_date || 'N/A'}</td></tr>
        <tr><td><strong>Course Name:</strong></td><td>${formData.course_name || 'N/A'}</td></tr>
        <tr><td><strong>Course Code:</strong></td><td>${formData.course_code || 'N/A'}</td></tr>
      </table>

      <h3 style="color: #2980b9;">👤 Student Details</h3>
      <table style="width: 100%; border-collapse: collapse;" border="1" cellspacing="0" cellpadding="8">
        <tr><td><strong>Name:</strong></td><td>${formData.student_name || 'N/A'}</td></tr>
        <tr><td><strong>Father/Husband:</strong></td><td>${formData.father_name || 'N/A'}</td></tr>
        <tr><td><strong>Mother:</strong></td><td>${formData.mother_name || 'N/A'}</td></tr>
        <tr><td><strong>DOB:</strong></td><td>${formData.dob || 'N/A'}</td></tr>
        <tr><td><strong>Gender:</strong></td><td>${formData.gender || 'N/A'}</td></tr>
        <tr><td><strong>Category:</strong></td><td>${formData.category || 'N/A'}</td></tr>
        <tr><td><strong>Caste:</strong></td><td>${formData.caste || 'N/A'}</td></tr>
        <tr><td><strong>Aadhaar No:</strong></td><td>${formData.aadhaar || 'N/A'}</td></tr>
        <tr><td><strong>Email:</strong></td><td>${formData.email || 'N/A'}</td></tr>
        <tr><td><strong>Mobile:</strong></td><td>${formData.student_mobile || 'N/A'}</td></tr>
        <tr><td><strong>Father Mobile:</strong></td><td>${formData.father_mobile || 'N/A'}</td></tr>
        <tr><td><strong>Address:</strong></td><td>${formData.address || 'N/A'}</td></tr>
      </table>

      <h3 style="color: #2980b9;">🎓 Educational Qualifications</h3>
      <table style="width: 100%; border-collapse: collapse;" border="1" cellspacing="0" cellpadding="8">
        <tr>
          <th style="text-align:left;">Level</th>
          <th style="text-align:left;">Board/University</th>
          <th style="text-align:left;">Roll No</th>
          <th style="text-align:left;">Year</th>
          <th style="text-align:left;">Date</th>
           <th style="text-align:left;">Total</th>
            <th style="text-align:left;">Obtained</th>
             <th style="text-align:left;">%</th>
        </tr>
        <tr>
          <td>10th</td>
          <td>${formData.edu_10th_board || 'N/A'}</td>
          <td>${formData.edu_10th_roll || 'N/A'}</td>
          <td>${formData.edu_10th_year || 'N/A'}</td>
          <td>${formData.edu_10th_date || 'N/A'}</td>
          <td>${formData.edu_10th_total || 'N/A'}</td>
          <td>${formData.edu_10th_obtained || 'N/A'}</td>
          <td>${formData.edu_10th_percent || 'N/A'}</td>
        </tr>
        <tr>
          <td>12th</td>
          <td>${formData.edu_12th_board || 'N/A'}</td>
          <td>${formData.edu_12th_roll || 'N/A'}</td>
          <td>${formData.edu_12th_year || 'N/A'}</td>
          <td>${formData.edu_12th_date || 'N/A'}</td>
          <td>${formData.edu_12th_total || 'N/A'}</td>
          <td>${formData.edu_12th_obtained || 'N/A'}</td>
          <td>${formData.edu_12th_percent || 'N/A'}</td>
        </tr>
        <tr>
          <td>Graduation</td>
          <td>${formData.edu_grad_board || 'N/A'}</td>
          <td>${formData.edu_grad_roll || 'N/A'}</td>
          <td>${formData.edu_grad_year || 'N/A'}</td>
          <td>${formData.edu_grad_date || 'N/A'}</td>
          <td>${formData.edu_grad_total || 'N/A'}</td>
          <td>${formData.edu_grad_obtained || 'N/A'}</td>
          <td>${formData.edu_grad_percent || 'N/A'}</td>
        </tr>
         <tr>
          <td>Graduation</td>
          <td>${formData.edu_pcb_board || 'N/A'}</td>
          <td>${formData.edu_pcb_roll || 'N/A'}</td>
          <td>${formData.edu_pcb_year || 'N/A'}</td>
          <td>${formData.edu_pcb_date || 'N/A'}</td>
          <td>${formData.edu_pcb_total || 'N/A'}</td>
          <td>${formData.edu_pcb_obtained || 'N/A'}</td>
          <td>${formData.edu_pcb_percent || 'N/A'}</td>
        </tr>
      </table>

      <h3 style="color: #2980b9;">🏦 Bank Details</h3>
      <table style="width: 100%; border-collapse: collapse;" border="1" cellspacing="0" cellpadding="8">
        <tr><td><strong>Bank:</strong></td><td>${formData.bank_name || 'N/A'}</td></tr>
        <tr><td><strong>Branch:</strong></td><td>${formData.branch || 'N/A'}</td></tr>
        <tr><td><strong>Account No:</strong></td><td>${formData.account_no || 'N/A'}</td></tr>
        <tr><td><strong>IFSC:</strong></td><td>${formData.ifsc_code || 'N/A'}</td></tr>
        <tr><td><strong>Scholarship Id:</strong></td><td>${formData.scholarship_id || 'N/A'}</td></tr>
        <tr><td><strong>Password:</strong></td><td>${formData.password || 'N/A'}</td></tr>
        <tr><td><strong>SCH Ekyc:</strong></td><td>${formData.sch_ekyc || 'N/A'}</td></tr>
      </table>

      <h3 style="color: #2980b9;">📎 Attached Documents</h3>
      <p style="background-color: #f4f4f4; padding: 10px; border-radius: 4px;">${formData.documents ? formData.documents.join(', ') : 'N/A'}</p>

      <h3 style="color: #2980b9;">📝 Personal Statement</h3>
      <p style="border: 1px solid #ccc; padding: 10px; background-color: #fefefe; border-radius: 4px;">
        ${formData.personal_statement || 'N/A'}
      </p>

      <hr style="margin-top: 30px;" />
      <p style="color: #999; font-size: 12px; text-align: center;">
        This email was auto-generated. Please do not reply.
      </p>
    </div>
  </div>
`;



    // Prepare email attachments
    const attachments = [];
    for (const field in files) {
        if (files[field][0]) {
            attachments.push({
                filename: files[field][0].originalname,
                path: files[field][0].path
            });
        }
    }

    // Email options
 const mailOptions = {
    from: 'sumitkumarsahu141@gmail.com', // Admin email
    to: 'sumitkumarsahu141@gmail.com',   // Admin email
    subject: 'New Paramedical College Admission Form Submission',
    html: emailBody,
    attachments: attachments
};

transporter.sendMail(mailOptions, (error, info) => {
    // Clean up uploaded files
    for (const field in files) {
        if (files[field][0]) {
            fs.unlink(files[field][0].path, err => {
                if (err) console.error('Error deleting file:', err);
            });
        }
    }

    if (error) {
        console.error('Error sending email:', error);
        return res.status(500).json({
            status: 'error',
            message: 'Failed to send email. Please try again later.'
        });
    }

    // Extract required fields from the form
    const name = req.body.student_name || '';
    const email = req.body.email || '';
    const phone = req.body.student_mobile || '';
 console.log({ status: 'success',
        message: 'Form submitted and email sent successfully!',
        name: name,
        email: email,
        phone: phone})
    return res.status(200).json({
        status: 'success',
        message: 'Form submitted and email sent successfully!',
        name: name,
        email: email,
        phone: phone
    });
});

});

// Start the server
app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});
