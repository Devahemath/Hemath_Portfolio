<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'devahemath123@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = "devahemath123@gmail.com";
  $contact->from_name = $_POST['Hemath'];
  $contact->from_email = $_POST['devahemath123@gmail.com'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'smpt.gmail.com',
    'username' => 'devahemath123@gmail.com',
    'password' => 'Hemath@123!',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['Hemath'], 'From');
  $contact->add_message( $_POST['devahemath123@gmail.com'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
