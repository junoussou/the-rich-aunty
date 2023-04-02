<?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require('../phpmailer/src/Exception.php');
  require('../phpmailer/src/PHPMailer.php');
  require('../phpmailer/src/SMTP.php');

  if (isset($_POST['submit'])) {
    echo('<script type="text/javascript">alert(\'Envoyé\')</script>');
  }

  /* $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'junioroussou58@gmail.com';
  $mail->Password = 'kmksifxjumzubovf';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('junioroussou58@gmail.com');

  $mail->addAddress($_POST['email']);

  $mail->isHTML(true);

  $mail->Subject = $_POST['sujet'];

  $mail->Body = $_POST['message'];

  $mail->send();

  echo ('
      <script>
          alert("Envoyé avec succes");
          document.location.href = \'index.html\';
      </script>
  '); */

  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  /* $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = './static/assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $book_a_table = new PHP_Email_Form;
  $book_a_table->ajax = true;
  
  $book_a_table->to = $receiving_email_address;
  $book_a_table->from_name = $_POST['name'];
  $book_a_table->from_email = $_POST['email'];
  $book_a_table->subject = "New table booking request from the website"; */

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $book_a_table->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  /* $book_a_table->add_message( $_POST['name'], 'Name');
  $book_a_table->add_message( $_POST['email'], 'Email');
  $book_a_table->add_message( $_POST['phone'], 'Phone', 4);
  $book_a_table->add_message( $_POST['date'], 'Date', 4);
  $book_a_table->add_message( $_POST['time'], 'Time', 4);
  $book_a_table->add_message( $_POST['people'], '# of people', 1);
  $book_a_table->add_message( $_POST['message'], 'Message');

  echo $book_a_table->send(); */
?>
