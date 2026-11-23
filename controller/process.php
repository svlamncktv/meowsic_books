
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

require '../config/database.php';

if (!isset($conn)) {
    echo json_encode(["status" => "gagal", "pesan" => "Variabel $conn tidak ditemukan di config/database.php!"]);
    exit;
}
    
$data = json_decode(file_get_contents('php://input'), true);

$username = mysqli_real_escape_string($conn, $data['username'] ?? '');
$password = mysqli_real_escape_string($conn, $data['password'] ?? '');
$role     = mysqli_real_escape_string($conn, $data['role'] ?? '');

$query  = "SELECT * FROM user WHERE username='$username' AND password='$password' AND role='$role'";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo json_encode(["status" => "gagal", "pesan" => "Error SQL: " . mysqli_error($conn)]);
    exit;
}

if (mysqli_num_rows($result) > 0) {
    echo json_encode(["status" => "sukses"]);
} else {
    echo json_encode(["status" => "gagal", "pesan" => "Username, password, atau role salah!"]);
}
?>

