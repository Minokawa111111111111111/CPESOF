<?php 

if (isset($_POST['submit'])) {
    $username =$_POST["uid"];
    $email =$_POST["email"];
    $pwd =$_POST["pwd"];
    $pwdrepeat =$_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

     if(emptyInputSignup() !== false){
        header("Location: Account.html");
        exit();
     }
}
else{
    header("Location: Account.html");
    exit();
}