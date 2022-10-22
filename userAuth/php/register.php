<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

$register = registerUser($username, $email, $password);
     echo $register;
}

function registerUser($username, $email, $password){
    $filename = "../storage/users.csv";
    $handle = fopen($filename, "a");
    fwrite($handle, "$register \n");
    fclose ($handle);
    echo "User Successfully registered";
}
registerUser();


