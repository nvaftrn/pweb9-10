<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email tujuan
    $to = "nvftrn10@gamil.com"; // Ganti dengan email Anda
    
    // Subjek email
    $email_subject = "Pesan Baru dari: $name - $subject";
    
    // Isi email
    $email_body = "Anda menerima pesan baru dari form kontak.\n\n";
    $email_body .= "Nama: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Pesan:\n$message\n";

    // Header email
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Kirim email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Gagal mengirim pesan. Silakan coba lagi.";
    }
} else {
    echo "Akses tidak valid.";
}
?>
