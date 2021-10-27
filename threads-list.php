<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- display the content in jumbotron -->
    <?php include  "partials/header.php" ; ?>
    <?php include  "partials/connection.php" ; ?>
    <?php include  "partials/link.php" ; ?>
    <?php
    $id=$_GET['id'];
   $selectquery = "select * from categorey where id=$id";
   $query = mysqli_query($con,$selectquery);
   while($row = mysqli_fetch_array($query)){
       $catname =$row['name'];
       $catdesc =$row['description'];
   }
   ?>
    <!-- insert into database -->
    <?php
    $showAlert = false;   
    $method = $_SERVER['REQUEST_METHOD']; 
   if($method=='POST')
{

    $th_title = $_POST['title'];
    $th_description = $_POST['description'];
    $uid =$_POST['uid'];
    $insertquery ="INSERT INTO `threads` ( `title`, `description`, `cat_id`, `user_id`, `time`) VALUES ( '$th_title', '$th_description', '$id', '$uid', current_timestamp())";
    $query = mysqli_query($con,$insertquery);
    $showAlert = true;
    if($showAlert){
       echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> thread has been added! please wait to community respond.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
}
       ?>
<!-- jumbotron -->

    <div class="container my-4">
        <div class="jumbotron">
            <div class="w-auto h-70 p-5 text-white bg-secondary rounded-3">
                <h1 class="display-6">Welcome to <?php echo $catname; ?> forums</h1>
                <p class="lead"><?php echo $catdesc; ?></p>
                <hr class="my-4">
                <ul>
                    <li>
                        <p>This forum share to knowledge with everyone. No Spam / Advertising / Self-promote in the
                            forums.
                        </p>
                    </li>
                    <li>
                        <p> Do not cross post questions. </p>
                    </li>
                    <li>
                        <p> Do not PM users asking for help. </p>
                    </li>
                    <li>
                        <p> Remain respectful of other members at all times.</p>
                    </li>
                </ul>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="https://www.w3schools.com/default.asp" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </div>
<!-- Form enter the data -->
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo'  <div class="container">
        <h1>Ask the questions</h1><br>
        <form action="'. $_SERVER["REQUEST_URI"] .'" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label"> Problem title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="" required>
                <small>keep your title as short as possible</small>
            </div>
            <input type="hidden" name="uid" value=" '. $_SESSION['uid'] .' ">
                    <div class="mb-3">
                <label for="description" class="form-label">Elaborate your concern</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </form>
            </div>';
}
 else {
  echo'
  <div class="container">  
  <p class="lead">
    you are not logged in! login for start Discussions and post questions ---
</p>
</div>';
 }

?>

<br>
    <!-- display the questions -->
    <div class="container">
        <h1>Browse questions</h1><br>
        <?php
    $id=$_GET['id'];
   $selectquery = "select * from threads where cat_id=$id";
   $query = mysqli_query($con,$selectquery);
   $noresult = true;
   while($row = mysqli_fetch_array($query)){
    $noresult = false;
    $id =$row['id'];
    $title =$row['title'];
    $description =$row['description'];
    $time =$row['time'];
    $threads_user_id=$row['user_id']; 
    $sql = "select username from users where uid ='$threads_user_id'" ;
    $result = mysqli_query($con,$sql);
    $row_email = mysqli_fetch_array($result);
    $email = $row_email['username'];

   // comments
   echo'    <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                <img src="images/default.jpg" width="54px" class="mr-3" alt="user">
            </div>
                <div class="flex-grow-1 ms-3">
                <h5> <a href="threads.php?thread_id='.$id.'"> '.$title.'</a></h5>
    '.$description.'
    <p class="my-0">'.$email.' at '.$time.'</p>
    </div>
    </div>
    <br>';
    }


    // Nothing found alert message
   if($noresult)
   {
  echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <h1>No Results Found!</h1>
  <strong>you are the first person to answer the question</strong> 
        </div>';
       
   }

    ?>
    </div>
    <?php include  "partials/signupModal.php" ; ?>
    <?php include  "partials/loginModal.php" ; ?>
    <?php include  "partials/footer.php" ; ?>
</body>

</html>