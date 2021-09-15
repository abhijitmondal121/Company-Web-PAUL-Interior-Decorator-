<?php
session_start();

echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand " href=""> <span style="margin-left:20px;font-size:25px;">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">

     ';

     if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']=true){
        echo '
        <h5 class="text-light mx-3" >welcome-'. $_SESSION['loginEmail'].'</h5>
        <div>
        <a href="logout.php" class="btn btn-outline-success mx-1" >logout</a>
        </div>
        ';
      }
    else{
        echo'
        <div>
     <button type="button" class="btn btn-outline-success mx-1" data-toggle="modal" data-target="#loginmodal">login</button>
     <button type="button" class="btn btn-outline-success mx-1" data-toggle="modal" data-target="#forgotmodal">Forgot-password</button>
     </div> ';
    } 
     echo '
    </form>
  </div>
</nav>';
include 'loginModal.php';
 include 'forgotModal.php';


?>