<?php
// Lakukan koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "regist_chat_ibik"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Memproses permintaan GET untuk id pertanyaan
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $questionId = $_GET['id'];

    // Query untuk mengambil jawaban berdasarkan id pertanyaan
    $sql = "SELECT answer FROM questions WHERE id = $questionId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row['answer']);
    } else {
        echo json_encode("Jawaban tidak ditemukan");
    }
}

$conn->close();
?>
