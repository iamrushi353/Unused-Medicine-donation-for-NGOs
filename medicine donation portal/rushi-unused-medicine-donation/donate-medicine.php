<?php
require('config.php');
if(isset($_POST['donation_successful'])){
    $name=$_POST['fname'].' '.$_POST['lname'];
    $email=$_POST['email'];
    $mob=$_POST['mob'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $category=$_POST['category'];
    $med_name=$_POST['med_name'];
    $address=$_POST['address'];
    $expiry_dt=$_POST['expiry_dt'];
   $query="INSERT INTO donor(name,email,mob,state,city,category,medicine,address,expiry_date) VALUES ('$name','$email',$mob,'$state','$city','$category','$med_name','$address','$expiry_dt')";
   $result=mysqli_query($db,$query);
   if($result==false){
     echo 'failed to run query ';
   }
   else{
       header('Location:donation_succesful.php');
   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: montserrat;
}
        .container{
            width:auto;
            position: absolute;
            left: 50%;
            top:3vh;
            transform: translate(-50%,0%);
        }
        .category{
            display: flex;
            gap: 1vw;
        }
        .container ul li{
            background-color: #333;
            height: 50px;
            width: 10vw;
            padding:15px 30px;
            text-align: center;
        }
        
        li{
            list-style: none;
        }
        a{
            text-decoration: none;
            color: #FFF;
            font-size:14px;
        }
        input,select{
            width: 100%;
            height:50px;
            padding:5px 5%;
            font-size:14px;
        }
        .container{
            width: 50vw;
            display:grid;
            grid-template-columns:auto auto;
            gap:50px;
        }
        .grid-full{
            grid-column:1/-1;
        }
        h2{
            font-size:1.8rem;
            text-align:center;
            grid-column:1/-1;
            margin-bottom:20px;
        }
        span{
            color:#1af;
            font-size:2.3rem;
        }
        input[type=submit]{
            background-color:#1af;
            color:#fff;
            font-weight:bolder;
            font-size:1.1rem;
            border:none;
            outline:none;
        }
        @media (max-width:1200px) {
            h2{
                font-size:2vw;
            }
        }
        @media (max-width:950px) {
            h2{
                font-size:4vw;
            }
            span{
                font-size:5vw
            }
            .container{
                top:3vh;
                width:90vw;
            grid-template-columns:auto;
        }
    }
        @media (max-width:800px) {
            h2{
                /* margin-top:4vh; */
                font-size:4vw;
            }
            span{
                font-size:5vw
            }
            .container{
                top:3vh;
                width:90vw;
            grid-template-columns:auto;
        }
        
        }
    </style>
</head>
<body>
    <form action="" class="container" method="post"> 
         <h2>Donate <span>Medicine</span>  to Save indeed's <span>Life</span> </h2>
      <div class="form-group">
          <input type="text" name="fname" id="fname" placeholder="First Name">
         
      </div>
      <div class="form-group">
      <input type="text" name="lname" id="lname" placeholder="Last Name">
      </div>
      <div class="form-group">
      <input type="text" name="email" id="email" placeholder="Email">
      </div>
      <div class="form-group">
      <input type="number" name="mob" id="" maxlength="10" placeholder="Mobile Number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
      </div>
      <script src="ngo/cities.js"></script>
      <div class="form-group">
      <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="city" class="form-control" required></select>
      </div>
      <div class="form-group">
      <select id ="state" name="state" class="form-control" required></select>
      </div>
      <script language="javascript">print_state("sts");</script>
      <div class="form-group grid-full">
          <input type="text" name="address" id="" placeholder="Enter Your Address">
      </div>
      <div class="form-group grid-full">
          <select name="category" id="mySelect">
              <option value="antibiotic" selected>Antibiotic</option>
              <option value="antiseptic">Antiseptic</option>
              <option value="antipyretics">Antipyretics</option>
              <option value="moodstabilizer">Mood stabilizer</option>
              <option value="analgesic">Analgesic</option>
              <option value="stimulant">Stimulant</option>
          </select>
      </div>
      <div class="form-group">
          <input type="text" name="med_name" id="" placeholder="Enter Medicine Name">
      </div>
      <div class="form-group">
          <input type="text" onclick="(this.type='date')" onblur="(this.type='text')" name="expiry_dt" id="" placeholder="Enter Expiry Date">
      </div>
      <div class="form-group grid-full">
          <input type="submit" name="donation_successful" value="Donate Now">
      </div>
    </form>
    <script>
    var results = new RegExp('[\?&]' + 'category' + '=([^&#]*)').exec(window.location.href);
    var category= results[1];
    document.querySelector('#mySelect').value =category;
 
    </script>
</body>
</html>