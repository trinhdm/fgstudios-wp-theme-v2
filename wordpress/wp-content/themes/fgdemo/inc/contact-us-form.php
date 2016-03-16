<?php
  if (isset($_POST['submit'])) {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $phone = $_POST['tel'];
      $message = $_POST['message'];

      $from = 'FG Studios Contact Form';
      $to = 'contact@foregroundstudios.net';
      $subject = 'Message from FG Studios Contact Form';

      $body = "From: $firstname $lastname\n E-Mail: $email\n Message:\n $message Phone (optional):\n $phone";

      // Check if name has been entered
      if (!$_POST['firstname']) {
          $errFName = 'Please enter your first name';
      }

      if (!$_POST['lastname']) {
          $errLName = 'Please enter your last name';
      }

      // Check if email has been entered and is valid
      if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $errEmail = 'Please enter a valid email address';
      }

      //Check if message has been entered
      if (!$_POST['message']) {
          $errMessage = 'Please enter your message';
      }


      // If there are no errors, send the email
      if (!$errFName && !$errLName && !$errEmail && !$errMessage) {
          if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank you! We will be in touch.</div>';
          } else {
            $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
          }
      }
  }
  ?>
