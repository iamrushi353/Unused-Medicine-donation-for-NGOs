<?php
           require('../config.php');
           if(isset($_POST['reg-success'])){
               $name= $_POST['name'];
           $email=$_POST['email'];
           $mob=$_POST['mob-no'];
           $state=$_POST['state'];
           $city=$_POST['city'];
           $pass=$_POST['pass'];
        //    $cnfpass=$_POST['pass'];
           $check="SELECT email FROM  users WHERE email='$email'";
           $avail=mysqli_query($db,$check);
           if(mysqli_num_rows($avail)>0){
            echo "<script>alert('Email ID Already Registered');</script>";                                 }
        else{
$query="INSERT INTO users(name,email,mob,state,city,password) VALUES('$name','$email',$mob,'$state','$city','$pass')";
               $result=mysqli_query($db,$query) or die('something went wrong');	
               if($result){
                 header("Location:loader.php");
               }
        }
               
           }
            ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/log-reg.css">
    <title>Document</title>
</head>

<body>
<?php require('../header.php'); ?>

    <div id="container">

        <div id="left">
            <img src="../img/home-illus.svg" alt="" class="log-illus">
        </div>

        <div id="right">
           
            <form action="" class="log-container" method="post">
                <h2>Register as <span>NGO</span> </h2>
                <div class="form-group grid-full">
                    <input type="text" name="name" id="fname" placeholder="NGO Name">
                </div>
                <div class="form-group">
                    <input type="text" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="number" name="mob-no" id="" maxlength="10" placeholder="Mobile Number"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                </div>
                <script src="cities.js"></script>
                <div class="form-group">
                    <select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="form-control"
                        required></select>
                </div>
                <div class="form-group">
                    <select id="state" name="city" class="form-control" required></select>
                </div>
                <script language="javascript">print_state("sts");</script>
                <div class="form-group">
                    <input type="password" name="pass" id="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" name="cnfpass" id="" placeholder="Confirm Password">
                </div>
                <div class="form-group grid-full">
                    <input type="submit"  value="Register" name="reg-success">
                </div>
            </form>
        </div>
    </div>
</body>

</html>