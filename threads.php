<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include  "partials/header.php" ; ?>
    <?php include  "partials/connection.php" ; ?>
    <?php include  "partials/link.php" ; ?>
    <?php
    $id=$_GET['thread_id'];
   $selectquery = "select * from threads where id=$id";
   $query = mysqli_query($con,$selectquery);
   $noresult = true;
   while($row = mysqli_fetch_assoc($query)){
    $noresult = false;
             $title =$row['title'];
       $description =$row['description'];
   }
   if($noresult)
   {
  echo'    <div class="d-flex align-items-center">
        <div class="flex-grow-1 ms-3">
        <p>you are the first person ask the question</p> 
    </div>
  </div>';
       
   }
   ?>
    <!-- insert into database -->

    <?php
    $showAlert = false;   
    $method = $_SERVER['REQUEST_METHOD']; 
   if($method=='POST')
{

    $comment_content = $_POST['comment'];
    $uid = $_POST['uid'];
    $insertquery ="INSERT INTO `comment` (  `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ( '$comment_content',  '$id', '$uid', current_timestamp())";
    $query = mysqli_query($con,$insertquery);
    $showAlert = true;
    if($showAlert){
       echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>comment has been added! .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
}
       ?>


    <div class="container my-4">
        <div class="jumbotron">
            <div class="w-auto h-70 p-5 text-white bg-secondary rounded-3">
                <h1 class="display-4"> <?php echo $title; ?> </h1>
                <p class="lead"><?php echo $description; ?></p>
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

            </div>
        </div>
    </div>
    
    <!-- comment form -->
    <?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo'<div class="container">
        <h1>Post the comments</h1>
        <form action="'.$_SERVER['REQUEST_URI'] .'" method="POST">
            <div class="mb-3">
                <small>type ypur comment</small>
                <label for="comment" class="form-label"></label>
                <textarea class="form-control" name="comment" id="comment" rows="3" required></textarea>
                <input type="hidden" name="uid" value=" '. $_SESSION['uid'] .' ">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Post comment </button>
    </div>
    </form>';
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
    <div class="container">
        <h1>Discussions</h1>
        <br>
        <?php
    $id=$_GET['thread_id'];
   $selectquery = "select * from comment where thread_id=$id";
   $query = mysqli_query($con,$selectquery);
   if(!$query){
       echo 'not insert';
   }
   $noresult = true;
   while($row = mysqli_fetch_array($query)){
    $noresult = false;
    $comment_id =$row['comment_id'];
    $comment_content =$row['comment_content'];
    $comment_user_id=$row['comment_by']; 
    $time=$row['comment_time'];
    $sql = "select username from users where uid ='$comment_user_id'" ;
    $result = mysqli_query($con,$sql);
    $row_email = mysqli_fetch_array($result);
    $username = $row_email['username'];
   
   echo'    <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                <img src="images/default.jpg" width="54px" class="mr-3" alt="user">
            </div>
            <div class="flex-grow-1 ms-3">
            <p class="fw-bold my-0">'.$username.' at '.$time.'</p>               
    '.$comment_content.'
    </div>
    </div>
    <br>';
    
    }
   // echo var_dump($noresult); 
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