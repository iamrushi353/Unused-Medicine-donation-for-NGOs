<?php
require('../config.php');
include("authentication.php");
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
  
    <div class="display_section" id="disp">
        <header>
            <div class="left"><i class="fa fa-angle-double-left" id="arrow" style="font-size:24px; border:1px solid black; padding:5px" onclick="makeNone()"></i></div>
            <div class="right">
            <div class="curr_usr">
               <span><?php echo $_GET['name']; ?></span>
</div>
<div class="logout">
    <input type="button" value="logout" onclick="window.location='logout.php'" class="btn" style="background-color:red; color:white;">
</div>
            </div>

        </header>
        <script>
            const makeNone = () =>{
                var side =document.getElementById('sidebar');
                var disp =document.getElementById('disp');
                var arrow=document.getElementById('arrow');
                if(side.style.display == 'none'){
                    side.style.display = 'block'
                    disp.style.width="76vw";
                    arrow.classList.remove('fa-angle-double-right');
                    arrow.classList.add('fa-angle-double-left');
                    
                }
                else{
                    side.style.display = 'none'
                    disp.style.width="95vw";
                    arrow.classList.remove('fa-angle-double-left');
                    arrow.classList.add('fa-angle-double-right');
                }
                
            }
        </script>
        <?php
       $source= $_GET['switch'];
       switch ($source) {

        case 'donation':
            require('donation.php');
            break;
        default:
            require('dashboard.php');
    }
        
        ?>
    
    
</body>
</html>