<?php

$showError = "false";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'connection.php';
$email = $_POST['email'];
$password = $_POST['pass'];

$query = "select * from users where email='$email'";
$result = mysqli_query($con,$query);
$email_count = mysqli_num_rows($result);
if($email_count==1)
{
    $email_pass= mysqli_fetch_array($result);
    $db_pass = $email_pass['pass'];
    $pass_decode = password_verify($password,$db_pass);
    if($pass_decode)
    {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['uid'] = $email_pass['uid'];
        $_SESSION['useremail'] = $email;
        header('location:/forum/index.php');
    
    }

    else{
        echo 'incorrect password';
        header('Location: /forum/index.php?loginerror=false');
    }

}

else {
    echo 'invalid email';
    header('Location: /forum/index.php?loginemailerror=false');
}

}

?>