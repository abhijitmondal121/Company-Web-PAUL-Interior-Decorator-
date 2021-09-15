<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $user_email=$_POST['loginEmail'];
    $password=$_POST['pass'];
    $cpassword=$_POST['cpass'];
    $sql="SELECT * FROM `admin_s` WHERE `Name`='$user_email'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
         
            if($password==$cpassword){
                //$hash=password_hash($pass,PASSWORD_DEFAULT);
               // $pas=md5($password);
                $sql="UPDATE `admin_s` SET `password`='$password' WHERE `slno`= 1";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $showAlert= true;
                    header("Location:/soujatyada/admin/index.php?password_change_success=true");
                    exit();
                }
            }
            else{
               echo "password do not match";
               
            }
            

        
        }
        else{
            echo"email doesnot exists!";
            
        }
}
?>
    
