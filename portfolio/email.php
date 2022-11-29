<!DOCTYPE html>

<?php
require_once("PHPMailer/src/PHPMailer.php");
require_once("PHPMailer/src/SMTP.php");

session_start();

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION["success"] = true;
  $_SESSION["nama"] = $_POST['nama'];

  if ( !isset($_POST['nama']) || !isset($_POST['phone']) || !isset($_POST['email']) || !isset($_POST['pesan']) ) {
      $_SESSION["success"] = false;
      $_SESSION["message"] = 'nama, phone, email, atau pesan wajib di isi';
  } else {
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    kirimEmail($nama, $phone, $email, $pesan);
  }
}

function kirimEmail($nama, $phone, $email, $pesan){

  $kirimPesan = "ada pesan dari: ".$nama;
  $kirimPesan .= " | phone: ".$phone;
  $kirimPesan .= " | email: ".$email;
  $kirimPesan .= " | pesan: ".$pesan;

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->SMTPDebug = 3;
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "remottac@gmail.com";
  $mail->Password = "xpupsxtfhsgtoueh";
  $mail->SMTPSecure = "ssl";
  $mail->Port = 465;
  $mail->From = "remottac@gmail.com";
  $mail->FromName = "Contact Form dimasen";

  $mail->addAddress("remottac@gmail.com", "Contact Form");
  $mail->isHTML(true);
  $mail->Subject = "Komentar";
  $mail->Body = $kirimPesan;
  // $mail->AltBody = $kirimPesan;

  if(!$mail->send()) {
    $_SESSION["success"] = false;
    $_SESSION["message"] = 'ada masalah di server kami';
  } else {
    $_SESSION["success"] = true;
    $_SESSION["message"] = 'Berhasil menyambungkan ke Email';
  }

  return header('Location: '. $_SERVER['HTTP_REFERER']);
}
?>
</html>
