<?php
session_start();

echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">iCODER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
            </ul>';
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
               echo '<form class="d-flex" action="search.php" method="get">
                <input class="form-control me-2" type="search" name="search"  placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
                <a href="partials/logout.php"  class="btn btn-primary mx-2">Logout</a>
                <p class="text-light my-2 ">Welcome' .$_SESSION['useremail']. '</p>
                </form>';
            }
            else{
                echo '<form class="d-flex" action="search.php" method=" ">
                <input class="form-control me-2 name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
                 </form>
                
                <button class="btn btn-outline-primary mx-2" data-bs-toggle="modal"
                    data-bs-target="#loginModal">Login</button>
                <button class="btn btn-outline-primary mx-0" data-bs-toggle="modal" data-bs-target="#signupModal">Signup
                </button>
            </div>';
            }
      echo '</div>
    </div>
</nav>';
 include  "signupModal.php" ; 
  include  "loginModal.php" ; 

?>

<?php
if(isset($_GET['emailerror']) && $_GET['emailerror']=='false')
    {
echo' <div class="alert alert-danger d-flex align-items-center" role="alert">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
<div>
E-mail already exist
</div>
</div>';
    }
    ?>


<?php
if(isset($_GET['signupsucess']) && $_GET['signupsucess']=='true')
    {
    
        
echo' <div class="alert alert-success d-flex align-items-center" role="alert">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
<div>
Now you can login
</div>
</div>';

    }
    ?>

<?php
if(isset($_GET['signuperror']) && $_GET['signuperror']=='false')
    {
    
       echo' <div class="alert alert-danger d-flex align-items-center" role="alert">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
<div>
passwords do not match
</div>
</div>';
    }
    ?>


<?php
if(isset($_GET['loginemailerror']) && $_GET['loginemailerror']=='false')
    {
echo' <div class="alert alert-danger d-flex align-items-center" role="alert">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
<div>
Invalid E-mail  
</div>
</div>';
    }
    ?>



<?php
if(isset($_GET['loginerror']) && $_GET['loginerror']=='false')
    {
echo' <div class="alert alert-danger d-flex align-items-center" role="alert">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
<div>
invalid password
</div>
</div>';
    }
    ?>







  