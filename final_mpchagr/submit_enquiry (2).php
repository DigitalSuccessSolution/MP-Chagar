<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Optional for cross-origin requests

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $form_data = [
        'Personal Information' => [
            'Full Name' => $_POST['full_name'] ?? '',
            'Gender' => $_POST['gender'] ?? ''
        ],
        'Contact Information' => [
            'Email Address' => $_POST['email'] ?? '',
            'Mobile Number' => $_POST['mobile'] ?? '',
            'State' => $_POST['state'] ?? '',
            'City' => $_POST['city'] ?? ''
        ],
        'Academic and Course Details' => [
            'Interested Course' => $_POST['course'] ?? '',
            'Highest Qualification' => $_POST['qualification'] ?? '',
            'Preferred Mode of Study' => $_POST['study_mode'] ?? ''
        ],
        'Message' => ['Message' => $_POST['message'] ?? 'No message provided']
    ];

    // Build HTML email message
    $message = '
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; }
            .section-title { background: #007BFF; color: #fff; padding: 8px; font-weight: bold; }
            table { width: 100%; border-collapse: collapse; margin-top: 10px; }
            th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
            th { background-color: #f2f2f2; }
        </style>
    </head>
    <body>
        <h2>New Student Enquiry</h2>
        <p>A new student enquiry has been submitted:</p>';

    foreach ($form_data as $section => $fields) {
        $message .= '<div class="section-title">' . htmlspecialchars($section) . '</div>';
        $message .= '<table>';
        foreach ($fields as $key => $value) {
            $message .= '<tr>
                            <th>' . htmlspecialchars($key) . '</th>
                            <td>' . nl2br(htmlspecialchars($value)) . '</td>
                         </tr>';
        }
        $message .= '</table><br>';
    }

    $message .= '</body></html>';

    // Email settings
    $to = 'sumitkumarsahu141@gmail.com';
    $subject = 'New Student Enquiry';
    $from = 'no-reply@mpchagar.com';
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: sumitofficial444@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send mail
    $mail_sent = mail($to, $subject, $message, $headers);

    if ($mail_sent) {
        echo json_encode([
            "success" => true,
            "message" => "Enquiry submitted successfully."
        ]);
    } else {
        $error = error_get_last();
        echo json_encode([
            "success" => false,
            "message" => "Failed to send email.",
            "error" => $error['message'] ?? 'Unknown error'
        ]);
    }
} else {
    echo json_encode([
        "success" => false,
        "message" => "Invalid request method. Use POST."
    ]);
}
?>
