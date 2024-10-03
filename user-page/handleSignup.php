<?php 
$showError = "false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "../mySQL/dbConnect.php";
    $user_fullname = $_POST["fullname"];
    $user_username = $_POST["username"];
    $user_email = $_POST["signup_email"];
    $user_phoneNo = $_POST["phoneNo"];
    $user_password = $_POST["signup_password"];
    $user_cnfPassword = $_POST["signup_cnfPassword"];

    //Check Whether email exists 
    $existSql = "select * from `users` where email = '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email already exists";
    }

    else
    {
            if($user_password == $user_cnfPassword){
                $hash = password_hash($user_password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`fullname`, `username`, `email`, `phoneNo`, `password`) VALUES ( '$user_fullname', '$user_username', '$user_email', '$user_phoneNo', '$hash')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $showAlert = true;  
                    header("Location: /infinite-info/homePage/?signupsuccess=true"); 
                    exit();
                }
            }
        else{
            $showError = "Passwords is not matched...Please enter the same password as you have entered in the first column";
        }
    }

    header("Location: /infinite-info/homePage.php?signupsuccess=false&error= $showError"); 
}

?>