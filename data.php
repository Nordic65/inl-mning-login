<?php
$correct_user = "test@test.com";
$correct_password = 123;

$user = $_POST['email'];
$password = $_POST['password'];
if ($user == $correct_user && $password == $correct_password) {
    echo "welcome onboard the crew: $user";
} else {
    echo "incorrect username or password, walk the plank";
}
