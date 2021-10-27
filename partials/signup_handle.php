<?php

include 'connection.php';
    if(isset($_POST['submit']))
{

$user = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];
$cpassword =$_POST['cpass'];

$pass = password_hash($password,PASSWORD_BCRYPT);
$cpass = password_hash($cpassword,PASSWORD_BCRYPT);

$sql = " select * from users where email = '$email' ";
$query = mysqli_query($con,$sql);


 $email_count = mysqli_num_rows($query);

if($email_count>0)
{
    $showError = 'email already exist';
    header('Location: /forum/index.php?emailerror=false');

}

else{
    if($password === $cpassword){

        $sql = "INSERT INTO `users` ( `username`, `email`, `pass`, `cpass`,  `time`) VALUES ( '$user', '$email', '$pass', '$cpass', current_timestamp())";

        $query = mysqli_query($con,$sql);
        echo $query;
        
if($query)
{
   $showAlert = true;
   header('Location: /forum/index.php?signupsucess=true');
 exit();
}



    }
    else{
      $showError = "password don't match";  
      header('Location: /forum/index.php?signuperror=false');
     
    }
}



}
?>