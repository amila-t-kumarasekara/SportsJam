<?php

include 'db.php';

if (isset($_POST['message_send'])) {

    $fname = $_POST['c_fname'];
    $lname = $_POST['c_lname'];
    $email = $_POST['c_email'];
    $subject = $_POST['c_subject'];
    $message = $_POST['c_message'];

    $conn->query("insert into contact(f_name,l_name,email,subject,message) values ('$fname','$lname','$email','$subject','$message')");

    if ($conn==TRUE){
        header("refresh:0; url=contact.php");
    }else{
        header("refresh:0; url=contact.php");
    }

}
