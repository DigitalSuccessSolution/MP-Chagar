<?php
header('Content-Type: application/json');

// Step 1: Connect to DB
$db = mysqli_connect('localhost', 'mpchagar_mpchagar', '(Dgk+Lanermt', 'mpchagar_mpchagar');
if (!$db) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Database connection failed',
        'error' => mysqli_connect_error()
    ]);
    exit;
}

// Step 2: Get raw JSON input
$inputJSON = file_get_contents('php://input');
$data = json_decode($inputJSON, true);

// Step 3: Validate input
if (!isset($data['name'], $data['email'], $data['phone'])) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Missing required fields'
    ]);
    exit;
}

$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];

// Step 4: Generate new admissionId
$result = mysqli_query($db, "SELECT MAX(admissionId) AS lastId FROM admission_detail");
$row = mysqli_fetch_assoc($result);
$lastId = $row['lastId'] ?? 0;
$newAdmissionId = $lastId + 1;

// Step 5: Insert into DB
$stmt = $db->prepare("INSERT INTO admission_detail (admissionId, name, email, phone) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $newAdmissionId, $name, $email, $phone);

if ($stmt->execute()) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Details have been successfully registered.',
        'data' => [
            'admissionId' => $newAdmissionId,
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ]
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Insert failed',
        'error' => $stmt->error
    ]);
}
?>
