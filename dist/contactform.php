<?php

// $name = $email = $message = '';
// $errors = array('email' => '', 'name' => '', 'message' => '');
// if (isset($_POST['submit'])) {

//     // check email
//     if (empty($_POST['email'])) {
//         $errors['email'] = 'A email is required';
//     } else {
//         $email = $_POST['email'];
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $errors['email'] = 'email must be a valid email address';
//         }
//     }
//     // check title
//     if (empty($_POST['name'])) {
//         $errors['title'] = 'A name is required';
//     } else {
//         $name = $_POST['name'];
//         if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
//             $errors['name'] = 'Name can be letters and spaces only';
//         }
//     }
//     // check message
//     if (empty($_POST['message'])) {
//         $errors['message'] = 'A message is required ';
//     }
//     //  else {
//     //     $message = $_POST['message'];
//     //     if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $message)) {
//     //         $errors['message'] = 'a message';
//     //     }
//     // }

//     if (array_filter($errors)) {
//         // echo 'errors in the form';
//     } else {

//         $email = mysqli_real_escape_string($_POST['email']);
//         $name = mysqli_real_escape_string($_POST['name']);
//         $message = mysqli_real_escape_string($_POST['message']);

//} // end of post check
if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($_POST['name']);
    $subject = mysqli_real_escape_string($_POST['subject']);
    $mailFrom = mysqli_real_escape_string($_POST['email']);
    $message = mysqli_real_escape_string($_POST['message']);

    $mailTo = "info@kimlitjens.nl";
    $headers = "From: " . $mailFrom;
    $txt = "You have received a e-mail from: " . $name. ".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.php?mailsend"); 
}
?> 