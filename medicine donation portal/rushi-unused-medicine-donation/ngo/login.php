 <?php
             require('../config.php');
             if(isset($_POST['success'])){
                $email=$_POST['email'];
                $password=$_POST['password'];
                $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
                $result=mysqli_query($db,$query);
                $row=mysqli_num_rows($result);
                
                if($row==1){
                    $data=mysqli_fetch_assoc($result);
                    $name=$data['name'];
                    session_start();
							$_SESSION["email"] = $email;
                    header("Location:index.php?name=$name&switch=");
                }
                else{
                    echo "LOGIN FAILED";
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
        <h2>Login as <span>NGO</span> </h2>
        <div class="form-group grid-full">
            <input type="text" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group grid-full">
            <input type="password" name="password" id="" placeholder="Password">
        </div>
        <div class="form-group grid-full">
            <input type="submit" name="success" value="Login">
        </div>
    </form>
</div>
</div>
</body>

</html>