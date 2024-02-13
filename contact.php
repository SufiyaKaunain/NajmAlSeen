<?php
//get data from form  
$to = 'sfkaunain@example.com'; 
$from = $_POST['email']; 
$subject ='Contact Najm AL Seen';
$name = $_POST['name']; 
$email = $_POST['email']; 
$phone = $_POST['phone'];
$subject = $_POST['subject']; 
$message = $_POST['message']; 
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@waveaxis.com" ;
if(!empty($title)){
    header("Location:index.html");
}
else if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:index.html");
}
//redirect
?>