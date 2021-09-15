<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $user_email=$_POST['loginEmail'];
    $password=$_POST['pass'];
    $sql="SELECT * FROM `admin_s` WHERE `Name`='$user_email' && `password`='$password'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
        //$pa=md5($password);
       // if($pa==$row['password']){
       // if(password_verify($password,$row['password'])){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['loginEmail']=$user_email;
            //echo "login".$user_email;
            header("Location:/soujatyada/admin/main.php?loginsuccess=true");
        
        
       // else {
         //   echo "pass";
           // header("Location:/soujatyada/admin/index.php?loginsuccess=false");
        //}
    }
           else{
               echo "unable to login";
            
           }
       
    
}
?>
    
