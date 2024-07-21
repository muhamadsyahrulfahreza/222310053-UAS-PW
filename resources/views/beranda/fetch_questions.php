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

// Query untuk mengambil pertanyaan dari tabel 'questions'
$sql = "SELECT id, question FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Memulai membangun string HTML untuk ditampilkan
    $output = '<div class="bubble-container">';
    $output .= '<p style="font-weight:500">Hallo! Pilih pertanyaanmu dan RegistChatIbik akan membalasnya secara live</p>';

    // Menambahkan setiap pertanyaan sebagai item yang dapat diklik
    while($row = $result->fetch_assoc()) {
        $output .= '<div class="question-item" data-question="' . htmlspecialchars($row["id"]) . '">';
        $output .= '<p class="question-text">' . htmlspecialchars($row["question"]) . '</p>';
        $output .= '</div>';
    }

    $output .= '</div>';

    // Mengirimkan output JSON ke JavaScript
    echo json_encode($output);
} else {
    echo "0 results";
}

$conn->close();
?>
