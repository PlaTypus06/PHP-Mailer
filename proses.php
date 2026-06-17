<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ghiffarithoriq@gmail.com';       
        $mail->Password   = 'lcln ukbo wmzf ugak';        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('ghiffarithoriq@gmail.com', 'Admin');
        $mail->addAddress($email);

        $mail->Subject = 'Konfirmasi Pendaftaran';
        $mail->Body    = "Halo $nama,\n\nTerima kasih telah mendaftar.";

        $mail->send();
        echo 'Email berhasil dikirim.';
    } catch (Exception $e) {
        echo "Email gagal dikirim. Error: {$mail->ErrorInfo} | Detail: " . $e->getMessage();
    }
}

?>