<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>icoder</title>
    <style>
        .container{
            min-height: 87vh;
        }
    </style>
</head>

<body>
    <?php include  "partials/header.php" ; ?>
    <?php include  "partials/link.php" ; ?>
    <?php  include  "partials/connection.php" ; ?>
    <div class="container my-3 ">
        <h1 class="py-3">Related searches <em>"<?php echo $_GET['search'];?>"</em></h1>
        
<?php
$showError =true;
$query1 = $_GET['search'];
$selectquery = "select * from threads where match (title, description) against ('$query1')";
$query = mysqli_query($con,$selectquery);
while($row = mysqli_fetch_array($query)){
    
         $title =$row['title'];
   $description =$row['description'];
   $id =$row['id'];
   $url = "threads.php?thread_id=".$id;
   $showError = false; 


   // display the results
      echo'<div class="results">
            <h3><a href="'.$url.'" class="text-dark">'.$title.'</a></h3>
            <p>'.$description.'</p>
        </div> ';
    
}

if($showError)
{
    echo '<div class="container my-4">
    <div class="jumbotron">
        <div class="w-auto h-70 p-5 text-white bg-secondary rounded-3">
            <h1 class="display-6">No Results Found!!</h1>
            <p class="lead">suggestions</p>
            <ul class="my-4">
           <li>Make sure that all words are spelled correctly.</li>
           <li>Try different keywords.</li>
           <li>Try more general keywords.</li>
            </ul>
        </div>
    </div>
          </div>';
}

?>
   </div>
    <?php include  "partials/signupModal.php" ; ?>
    <?php include  "partials/loginModal.php" ; ?>
    <?php include  "partials/footer.php" ; ?>



