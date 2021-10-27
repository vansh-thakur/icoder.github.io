<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>icoder</title>
</head>

<body>
    <?php include  "partials/header.php" ; ?>
    <?php include  "partials/link.php" ; ?>
    <?php include  "partials/carousel.php" ; ?>
    <?php include  "partials/connection.php" ; ?>

    <!--categories-->
    <div class="container my-3">
        <h2 class="text-center my-3"> iCODER Categories </h2>


        <div class="row my-3">
            <?php

$select_query = "select * from categorey";
$query = mysqli_query($con,$select_query);
while($row=mysqli_fetch_array($query))
{
    $id = $row['id'];
    $category = $row['name'];
    $description = $row['description'];
    echo '<div class="col-md-4 my-2">
    <!--cards-->
    <div class="card" style="width: 18rem;">
        <img src="https://source.unsplash.com/900x800/?'.$category.',coding" class="card-img-top" alt="python">
        <div class="card-body">
            <h5 class="card-title">'.$category.'</h5>
            <p class="card-text">'.substr($description, 0,100).'...</p>
            <a href="threads-list.php?id='.$id.'" class="btn btn-primary">View Threads</a>
        </div>
    </div>

</div>' ;   

}
?>

        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    <?php include  "partials/signupModal.php" ; ?>
    <?php include  "partials/loginModal.php" ; ?>
    <?php include  "partials/footer.php" ; ?>