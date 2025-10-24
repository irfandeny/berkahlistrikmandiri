<?php
header('Content-Type: application/json');

// Validasi method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method tidak diizinkan']);
    exit;
}

// Validasi dan sanitasi input
$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$pesan = isset($_POST['pesan']) ? trim($_POST['pesan']) : '';
$telepon = isset($_POST['telepon']) ? trim($_POST['telepon']) : '';
$subjek = isset($_POST['subjek']) ? trim($_POST['subjek']) : '';

// Validasi field required
if (empty($nama) || empty($email) || empty($pesan)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Semua field harus diisi dengan benar'
    ]);
    exit;
}

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Format email tidak valid'
    ]);
    exit;
}

// Validasi panjang pesan
if (strlen($pesan) < 10) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Pesan minimal 10 karakter'
    ]);
    exit;
}

// Sanitasi input untuk keamanan
$nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$pesan = htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8');
$telepon = htmlspecialchars($telepon, ENT_QUOTES, 'UTF-8');
$subjek = htmlspecialchars($subjek, ENT_QUOTES, 'UTF-8');

// TODO: Simpan ke database (jika ada)
// Contoh query INSERT ke database:
// $conn = new mysqli("localhost", "user", "password", "database");
// $stmt = $conn->prepare("INSERT INTO pesan_kontak (nama, email, telepon, subjek, pesan, tanggal) VALUES (?, ?, ?, ?, ?, NOW())");
// $stmt->bind_param("sssss", $nama, $email, $telepon, $subjek, $pesan);
// $stmt->execute();

// Kirim email ke admin
$email_admin = 'info@berkahlstrik.com';
$email_subject = '[Pesan Kontak] ' . $subjek . ' dari ' . $nama;

$email_body = "
===========================================
PESAN KONTAK BARU DARI BERKAH LISTRIK MANDIRI
===========================================

Nama Pengirim: $nama
Email Pengirim: $email
Nomor Telepon: $telepon
Subjek: $subjek
Tanggal: " . date('d-m-Y H:i:s') . "

-------------------------------------------
PESAN:
-------------------------------------------
$pesan

-------------------------------------------
Pesan ini dikirim melalui formulir kontak di website Berkah Listrik Mandiri
===========================================
";

$email_headers = "From: " . $email . "\r\n";
$email_headers .= "Reply-To: " . $email . "\r\n";
$email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Kirim email
$email_sent = @mail($email_admin, $email_subject, $email_body, $email_headers);

// Kirim email konfirmasi ke pengirim
$konfirmasi_subject = "Kami Terima Pesan Anda - Berkah Listrik Mandiri";
$konfirmasi_body = "
Halo $nama,

Terima kasih telah menghubungi kami!

Kami telah menerima pesan Anda dengan subjek: $subjek

Pesan Anda:
\"$pesan\"

Tim kami akan segera meninjau pesan Anda dan akan merespons dalam waktu 24 jam kerja.

Jika Anda memerlukan respons lebih cepat, silakan hubungi kami:
- Telepon: +62 878-0558-7738
- WhatsApp: https://wa.me/6287805587738
- Email: info@berkahlstrik.com

Terima kasih,
Tim Berkah Listrik Mandiri

---
Ini adalah email otomatis, silakan jangan balas email ini.
";

$konfirmasi_headers = "From: info@berkahlstrik.com\r\n";
$konfirmasi_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

@mail($email, $konfirmasi_subject, $konfirmasi_body, $konfirmasi_headers);

// Respons sukses
http_response_code(200);
echo json_encode([
    'success' => true,
    'message' => 'Pesan Anda berhasil dikirim! Tim kami akan merespons dalam 24 jam. Terima kasih!'
]);
exit;
?>
