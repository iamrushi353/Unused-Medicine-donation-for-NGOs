<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="styles/style.css"> -->
    <style>
        body{
  background-image:url('https://wallpaperbat.com/img/373325-wallpaper-medicine-capsules-pills-image-for-desktop-section.jpg');
  background-repeat:no-repeat;
  background-size:cover;
  background-position:0 -80px;
}
.home-illus {
    height: 800px;
    width: 700px;
    float: right;
    margin: -160px 70px;
}
.bg-image{
    background-repeat:no-repeat;
    background-size: cover;
    background-position:center;
}
    </style>
    <title>Document</title>
</head>
<body>
    <!-- <header>
        <div class="navigation">
            <ul class="nav">
                <li onclick="myfucntion()"><i class="fa fa-bars" style="font-size:24px; border:1px solid black; padding:5px"></i></li>
                <li><a href="home.html">Home</a></li>
                <li><a href="donate-medicine.html">Donate Medicines</a></li>
                <li><a href="ngo.html">NGOs</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                
                <li><button class="nav-btn btn" onclick="window.location.href ='ngo/login.php'">Login</button>
                    <button class="btn" onclick="window.location.href ='ngo/register.php'">Register</button>
                </li>
            </ul>
        </div>
        
    </header> -->
    <!-- <div class="bg-image" 
     style="background-image: url('https://img.freepik.com/free-vector/medical-service-donation-man-hand-holding-box-full-medical-equipment-s-charity-concept_530733-1002.jpg?w=1060');
            height: 100vh">
</div> -->
    <?php require('header.php'); ?>
    <div class="col-sm-12 text-center mb-4 mt-4">
  <a class="btn btn-primary btn-lg" style="background:linear-gradient(to right,#02F0F0 ,#346F7F,#2A5F65 100%);" href="http://localhost/rushi-unused-medicine-donation/medicine-grid.php"> Donate Medicine <i class="fa fa-medkit"></i></a>
</div>
    <!-- <div class="main-header">
            <img src="img/home-illus.svg" alt="" class="home-illus">
        </div> -->
     
    <script>
function myfucntion(){
    var b= document.getElementsByTagName('li').style.display='block';
}
    </script>
   
</body>
</html>