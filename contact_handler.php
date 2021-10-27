<?php

include 'partials/connection.php';

if(isset($_POST['Submit']))

{


    $user = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $Msg =$_POST['Msg'];

$insert = " insert into `contact` ( `Name`, `Email`, `Phone`, `Msg`,  `time`) VALUES ( '$user', '$email', '$phone', '$Msg', current_timestamp())";

$query = mysqli_query($con,$insert);

if($query)
{
    ?>

    <script>
        alert ('register');
    </script>

    <?php

    header('location:index.php');
}

else
{
    ?>

<script>
        alert (' not register');
    </script>


<?php


}

}


?>















































