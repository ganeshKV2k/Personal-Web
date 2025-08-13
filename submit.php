<?php 
// header("Location: dashboard.php");

$name = $_POST['name'];
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'];
$phone = $_POST['phone'];


if($name==""){
  echo "Name must be filledl";
}

// if($email==""){
//   echo "Email must be filled";
// }

if($password==""){
  echo "Password must be filled";
}

if($phone==""){
  echo "Phone number  must be filled";
}


if ($name !="" && $email!="" && $password!="" && $phone!= "") {
 header("Location: dashboard.php"); 
}




if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Looks like a valid email.";
} else {
    echo "Invalid email.";
}


// Extract domain
$domain = strrchr($email, "@");

// Check if it matches exactly "sigmantic.com"
if ($domain[1]=="sigmantic.com") {
    echo "Email belongs to sigmantic.com";
} else {
    echo "Email must be from sigmantic.com";
}


