<?php
$to = "m67m67mn@gmail.com";
$subject = "New Message from Website";
$message = "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nMessage: ".$_POST['message'];
mail($to, $subject, $message);
header("Location: thankyou.html");
?>
