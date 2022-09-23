<?php
$correct_email = "test@test.com";
$correct_password = 123;

$email = $_POST['email'];
$password = $_POST['password'];
if ($email == $correct_email && $password == $correct_password) {
    echo "welcome onboard the crew: $email";
} else {
    echo "incorrect username or password, walk the plank";
}
