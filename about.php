
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="partials/style.css">
    <title>icoder</title>
</head>

<body>
    <?php include  "partials/header.php" ; ?>
    <?php include  "partials/link.php" ; ?>
    <?php include  "partials/connection.php" ; ?>

    <!--categories-->

    <h1>About Us</h1>
    <div class="container">
        '<div class="row-md-3 my-2">
            <div class="teamContainer">
                <div class="teamColumn">
                    <div class="teamCard">
                        <img src="images/ta.jfif">
                        <div class="personContainer">
                            <h3>Jane Doe</h3>
                            <p class="Designation">CTO</p>
                            <p><button class="contact">Contact</button></p>
                        </div>
                    </div>
                </div>
                <div class="teamColumn mx-4">
                    <div class="teamCard">
                        <img src="images/vansh.jfif" />
                        <div class="personContainer">
                            <h3>Mike Ross</h3>
                            <p class="Designation">Front End Developer</p>
                            <p><button class="contact">Contact</button></p>
                        </div>
                    </div>
                </div>
                <div class="teamColumn mx-4">
                    <div class="teamCard">
                        <img src="images/v4.jfif">
                        <div class="personContainer">
                            <h3>John Doe</h3>
                            <p class="Designation">FullStack Developer</p>
                            <p><button class="contact">Contact</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <?php include  "partials/signupModal.php" ; ?>
    <?php include  "partials/loginModal.php" ; ?>
    <?php include  "partials/footer.php" ; ?>