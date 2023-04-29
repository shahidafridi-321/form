<?php
if(isset($_POST['submit'])){
    $to = "shahidrahmansr87@gmail.com"; // your email address
    $subject = "New Contact Form Submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   
    $body = "Name: ".$name."\n"."Email: ".$email."\n"."Message: ".$message;
   
    // send email
    mail($to, $subject, $body);
    echo "Thank you for your message!";
}
?>

