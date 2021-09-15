<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <title>user-pannel!</title>
  </head>
  <style>
  jumbo-bg{
   background-image: url("partials/b.png");
    background-size: 100%;
  }
  </style>
  <body>


  <?php
  include 'partials/_dbconnect.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $Name=$_POST['name'];
    $address=$_POST['address'];
    $number=$_POST['number'];

      
    $sql="INSERT INTO `contactus` (`email`, `name`, `address`, `number`, `date`) VALUES ( '$email', '$Name', '$address', '$number', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo'<div class="alert alert-success alert-dismissible fade show mt-0 mb-0" role="alert">
        <strong>your details added success fully</strong> You will get call from our side!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    else{
    echo"error".mysqli_error($conn);
    }}
?>
  <?php
  
    include "partials/_header.php";
  ?>
  <!--jumbotron-->
<div class=" jumbo-bg jumbotron jumbotron-fluid" id="home"style=" padding:150px 0px; background-image: url('partials/a1.jpeg');background-size: 100%; !important" >

<div class="container my-5">
<center>
  <h1 class=" ex2 display-2 my-5" style="font-family: Times New Roman; color:white;text-shadow:  4px 4px #007a24;i !important" >PAUL Interior Decorator</h1>
  <p class="lead my-3" style="font-family: sans-serif;color:orange;font-size:27px;">We create different tool for you</p>
  </center>
</div>
</div>

<!--about-->
<div>
<div class="container pl-4" id="about" style="font-size:30px; padding:80px 0px; font-family:Times;font-weight:bold;">
<hr style="background-color: #5c5c3d">

<span class="a mt-2 ">
" <span style="font-size:70px;">A</span>t  PAUL Interior Decorator, we bring together functionality and aesthetics to provide homeowners with customised and efficient home designs. Our designers specialise in home interior designs and home décor, and help you create a personalised home to suit your lifestyle. From sophisticated living room designs to space-saving and clutter-free interior designs, we are here to help you find the best home decor and home design to match your needs and style. All our products come with up to 10-year warranty along with unwavering support and maintenance services. Explore thousands of inspiring interior designs or get a free estimate – it's all here on PAUL Interior Decorator .com, your one stop for complete home interiors."
     
</span>
<span class="b mt-4 mb-2" style="float:right;">
-Raja Paul
</span>


</div>
<div class="container">
<hr class="a mt-5"style="background-color: #5c5c3d">
</div>

    <!--demo section-->
    <div class="container mt-4 pl-5"id="demo" style="padding:40px 0px;">
    
    <div class="row">
    <div class="col-md-4 col-sm-6 my-4">
      <div class="card" style="width: 18rem;">
      <img src="partials/card1.jpeg"  height = "199" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title">2BHK renovation</a></h5>
        <p class="card-text">Module kitchen and false ceiling design & eletic work, Asian paint and texture design and marbel work false ceiling er pase surface light and  AC concealing.</p>
        <a href="https://youtu.be/gdeT6NG0iNc"class="btn btn-success mx-1" >Show Video</a>
        </div>
      </div>
      </div>

      <div class="col-md-4 my-4">
      <div class="card" style="width: 18rem;">
      <img src="partials/card2.jpeg" height = "225" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title">2BHK renovation</a></h5>
        <p class="card-text "> Furniture design work Electric and false ceiling design with surface light Asian paint and wall texture design, AC concealing and marbel.</p>
        <a href="https://youtu.be/n6fWFt8x21g"class="btn btn-success mx-1" >Show Video</a>
        </div>
      </div>
      </div>

      <div class="row-md-4 my-4 mx-2">
      <div class="card" style="width: 18rem;">
      <img src="partials/card3.jpeg"  height = "248"  class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title">Modular kitchen </a></h5>
        <p class="card-text">Green ply & Marino laminates with false ceiling gypsum and surface light.</p>
        <a href="https://youtu.be/Ehk_MeEoh6I"class="btn btn-success mx-1" >Show Video</a>
        </div>
      </div>
      </div>
      </div>
    </div>
    <!--half-->
    



<!--galary section-->

<div class="container pl-3 " id="galary" style="padding:50px 2px;">
<hr style="background-color: #5c5c3d">
<div class="container mb-5 " id="ques">
  <h2 class="text mb-5" style=" font-size:50px;font-style:italic;font-weight:bolder;"> Gallery</h2>
</div>
<div class="owl-carousel owl-theme my-4" >
    <div class="item" ><img src="partials/d1.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d2.jpeg" width = "300" height = "280" ></div>
    <div class="item"><img src="partials/d3.jpeg" width = "300" height = "280" ></div>
    <div class="item"><img src="partials/d10.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d4.jpeg" width = "300" height = "280" ></div>
    <div class="item"><img src="partials/d5.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d6.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d7.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d8.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d9.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d11.jpeg" width = "300" height = "280"></div>
    <div class="item" ><img src="partials/d12.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d13.jpeg" width = "300" height = "280" ></div>
    <div class="item"><img src="partials/d14.jpeg" width = "300" height = "280" ></div>
    <div class="item"><img src="partials/d15.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d16.jpeg" width = "300" height = "280" ></div>
    <div class="item"><img src="partials/d17.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d18.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d19.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d20.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d21.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d22.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d23.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d24.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d25.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d26.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d27.jpeg" width = "300" height = "280"></div>
    <div class="item"><img src="partials/d28.jpeg" width = "300" height = "280"></div>
   
</div>
<hr class="c mt-5" style="background-color: #5c5c3d">
</div>

</div>
    
    <div class="container mt-5 mb-3" id="contact" style="padding:30px 30px;">
    <hr style="background-color: #5c5c3d">
    <div class="car" >
       <h4 class="d-flex  text-dark  py-2  " style=" font-size:50px;font-style:italic;font-weight:bolder;" > Contact Us</h4>
       </div>
    
    <form action="index.php" method="POST">
  <div class="form-group mt-5 col-sm-4">
    <label for="exampleInputEmail1 ">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email" placeholder="Enter email">
  </div>
  <div class="form-group col-sm-4">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Name">
  </div>
  <div class="form-floating col-sm-4">
  <label for="Product-Details">Address</label>
  <textarea class="form-control" placeholder="Address" id="Address" name="address"></textarea>
 </div>
  <div class="form-group col-sm-4">
    <label for="exampleInputEmail1">Phone-Number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number" placeholder="Enter Number">
  </div>
  <button type="submit" class="btn btn-success mx-3">Submit</button>
</form>
<hr style="background-color: #5c5c3d">
</div>

</div>
<!--footer-->
<p align="right"></p>
<span class="b mb-2 mr-2" style="float:right;font-family: cursive;font-size:18px;">
© All right reserved by abc company, 
<?php echo date("Y"); ?> 
</span>





    

    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
    </script>
    
      </body>
</html>