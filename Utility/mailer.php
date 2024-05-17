<?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  // Requiring the autoload file.
  require 'vendor/autoload.php';

  // Check if form is submitted.
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["s-name"];
    $phone = $_POST["s-phone"];
    $amount = $_POST["s-amount"];
    $customerEmail = $_POST["s-email"];
    // Mail id to send data to.
    $email = 'shuva.mallick@innoraft.com';
    // Validate email.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit;
  }

  // Send mail to 'shuva.mallick@innoraft.com '
  $mail = new PHPMailer(true);
  try {
  // Server settings.
  $mail->isSMTP();
  // Specify SMTP server.
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  // SMTP username.
  $mail->Username = 'aftabansari1024@gmail.com';
  // SMTP password.
  $mail->Password = 'kbgnmieqmmcycxcf';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->setFrom('aftabansari1024@gmail.com', 'Md Aftab');
  // Content of the mail.
  $mail->addAddress($email);
  $mail->isHTML(true);
  $mail->Subject = 'Innoraft Groceries - Order Successful';
  $mail->Body ="Customer name: $name, Customer email: $customerEmail, Phone: $phone, total amount: $amount";
  // Finally, sending the email.
  $mail->send();
  echo 'Order email sent successfully!';
  }
  // Ctach if any exception occurs.
  catch (Exception $e) {
  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
}
