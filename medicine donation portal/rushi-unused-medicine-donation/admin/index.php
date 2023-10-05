<?php
require('../config.php');
// include("authentication.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    require('sidebar.php');
    ?>
  
    <div class="display_section">
        <header>
            <div class="left"><i class="fa fa-bars" style="font-size:24px; border:1px solid black; padding:5px"></i></div>
            <div class="right"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAAiUlEQVRoge3ZMQqAMBBE0UHsvP9pLCwUxVNpa2EkWcQd5D+wEjM7pBASCQD+4mh85kDGGsi51QXCS4ohL38TCvkkqNJnO5KKIm4o4oYibijipn94t8jrzz5KGrKHAAAAwE/tkrbsIS7C83BAl4EibijihiJuKOKmpkjtJeUUyJ8b1n+UfRkKAG1OEmo/rEUbioMAAAAASUVORK5CYII=" alt="">
            <div class="curr_usr">
                <span><?php echo $_GET['name']; ?></span>
</div>
<div class="logout">
    <input type="button" value="logout" onclick="window.location='logout.php'" class="btn" style="background-color:red; color:white;">
</div>
            </div>

        </header>
        <?php
        require('donation.php');
        ?>
    
    
</body>
</html>