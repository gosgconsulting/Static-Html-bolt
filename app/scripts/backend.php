<?php
// Backend PHP script
header('Content-Type: application/json');

// Sample data
$data = [
    'status' => 'success',
    'message' => 'PHP backend is working',
    'timestamp' => date('Y-m-d H:i:s')
];

// Return JSON response
echo json_encode($data);
?>
