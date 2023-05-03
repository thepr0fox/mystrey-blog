<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "muhammadvasim2004@gmail.com"; 
  $subject = "New message from $name";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
  mail($to, $subject, $body);
  echo "Your message has been sent.";else {
    echo "There was an error sending your message.";
  }
}
?>
