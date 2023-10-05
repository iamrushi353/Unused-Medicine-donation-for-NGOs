<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
 
header {
    transition: all 0.3s ease-in-out;
    box-shadow: 0 1px 6px 0 rgba(214, 220, 239, 1);
    top: 0px;
    background-color: #fff;
    position: sticky;
    z-index: 40;
    height: auto;
    /* background-color:#DBDDDC;
    border-bottom:2px solid #7EB9BD;
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px; */
}
.logo {
    padding: 26px 0px;
}
.logo a {
    color: #346F7F;
    text-transform: capitalize;
    color: #000000;
    font-size: 24px;
    font-weight: 500;
    text-decoration: none;
}
.mob-menu {
    display: none;
}
.main-menu {
    margin: 10px 0px;
    float: right;
}
.main-menu ul.nav-header {
    float: left;
    margin-right: 20px;
    list-style: none;
    padding-left: 0px;
    margin-bottom: 0px;
    padding-top:10px;
}
.nav-header li:first-child {
    margin-left: 0px;
}
.main-menu ul {  display: inline-block; }
.main-menu ul li {
    position: relative;
    display: inline-block;
    margin: 12px 20px;
}
.main-menu ul li a {
    font-size: 18px;
    font-weight: 500;
    line-height: 1.3;
    color: #346F7F;
    display: block;
   text-decoration:none;
}
.main-menu ul.right-nav{   
 padding-left:0px;
}
.main-menu ul.right-nav li a {
    width: 100px;
    height: 45px;
    border-radius: 4px;
    background-color: #fff;
    text-align: center;
    color: #346F7F;
    border: solid 1px #346F7F;
    vertical-align: middle;
    display: table-cell;
}
.main-menu ul.right-nav li:last-child {
    margin-right: 0px;
}
.main-menu ul.right-nav li.active a {
    background:linear-gradient(to right,#02F0F0 ,#346F7F,#2A5F65 100%);
    color: #fff;
}
@media(max-width:1000px){
  .logo {
    display: inline-block;
    width: 78%;
    padding: 10px 10px 10px 0px;
}
.mob-menu {
    display: inline-block;
    width: 20%;
}
.mob-menu span {
    border: solid 2px #346F7F;
    display: block;
    text-align: center;
    border-radius: 4px;
    padding: 2px 6px;
    width: 50px;
    color: #346F7F;
    font-size: 25px;
    cursor: pointer;
} 
.main-menu {
    margin: 0px 0px 20px 0px;
    float: left;
    background-color: #f1f1f1;
    width: 100%;
    display: none;
} 
.main-menu ul {
    list-style: none;
    padding-left: 0px;
    margin-bottom: 0px;
    width: 100%;
}
  .main-menu ul.right-nav {
    text-align: center;
    margin-top: 6px;
}
ul.right-nav {
    margin-bottom: 10px;
}
.main-menu {
    margin: 0px 0px 20px 0px;
    float: left;
    background-color: #f1f1f1;
    width: 100%;
    display: none;
}
.main-menu ul li {
    display: block;
    width: 100%;
    margin: 0px;
}
 .nav-header li:first-child {
    margin-left: 0px;
}
.main-menu ul li a {
    padding: 10px 15px;
    display: block;
    border-bottom: solid 1px #e2e4e6;
    text-align: center;
}
 .main-menu ul.right-nav li {
    margin-left: 0px;
    margin-right: 30px;
    display: inline-block;
    width: 150px;
}
 .main-menu ul.right-nav li a {
    font-size: 18px !important;
}
}
    </style>
</head>
<body>
  <header>
    <div class="container">
       <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12 col-xl-2">
             <div class="logo">
             <img src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/000000/external-medicine-travel-accessories-icongeek26-linear-colour-icongeek26.png"/>
                <!-- <a href="/" title="logo"> Medicine </a> -->
             </div>
             <div class="mob-menu">
                <span>
                   <i class="fa fa-bars"></i>
                </span>
             </div>
          </div>
          <div class="col-md-12 col-sm-12 col-lg-12 col-xl-10">
             <div class="main-menu">
                <ul class="nav-header">
                   <li><a href="http://localhost/rushi-unused-medicine-donation/"> Home </a> </li>
                   <li><a href="http://localhost/rushi-unused-medicine-donation/ngo.php"> NGO </a> </li>
                   <li><a href="http://localhost/rushi-unused-medicine-donation/aboutus.php"> About Us </a> </li>
                  <li><a href="http://localhost/rushi-unused-medicine-donation/contactus.php"> Contact Us </a> </li>
                   </ul>
                <ul class="right-nav">
                    <li><a href="http://localhost/rushi-unused-medicine-donation/ngo/login.php"> <i class="fa fa-user"></i> Log in </a> </li>
                  <li class="active"> <a href="http://localhost/rushi-unused-medicine-donation/ngo/register.php"> <i class="fa fa-sign-in"></i> Register </a> </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </header>


<script>$(document).ready(function() {
  $(".mob-menu span").click(function(){
     $(".main-menu").slideToggle();
    });
 });</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>