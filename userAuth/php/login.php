<?php
if(isset($_POST['submit'])){
    $username = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */

    if("$username=email, $password=password"){
        $_SESSION["username"] = "$username";
        $_SESSION["password"] = "$password";

    }
}

loginUser();

