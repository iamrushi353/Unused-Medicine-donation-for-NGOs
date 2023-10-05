<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
   <style>
       *{
           font-family:sans-serif;
       }
      header{
          margin-bottom: 15vh;
      }
       li{
           list-style: none;     
       }
       .contact-ul{
           display: flex;
           flex-direction: column;
           gap: 80px;
           font-size:1.5rem;
       }
       .round{
         
           background-color:rgb(17, 90, 135);
           padding:12px 9px;
           border-radius:50%;
       }
       .fa{
           color: white;
       }
       .con-container{
           display: flex;
           justify-content:space-around;
           align-items:center;
           
       }
       form{
           display:flex;
           flex-direction:column;
           gap: 20px;
           justify-content:center;
           align-items:center;
           /* position:absolute;
           top:50%;
           left: 50%;
           transform: translate(-50%,-50%); */
       }
       .form-group{
           /* display:flex;
           justify-content: space-between;
           gap: 10px; */
           width: 370px;
            --auto-grid-min-size: 170px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--auto-grid-min-size), 1fr));
            grid-gap: 10px;

       }
       input[type=text]{
        width: 170px;
       }
       input[type=email],  input[type=textarea]{
           width: 360px;
          
       }
       input{
           padding:0 5px;
        height: 50px;
           border-radius: 10px;
           border:none;
           background-color:rgb(231, 229, 229);
           appearance: none;
           font-size: 1rem;
       }
       input[type=textarea]{
           height:150px;
       }
       input[type=submit]{
           padding:6px 20px;
           width:360px;
           color:rgb(224, 219, 219);
           background-color:rgb(17, 90, 135);
       }
       label {
    position: absolute;
    margin: 0px 10px;
      font-size: 12px;
      white-space: nowrap;
      background: #fff;
      padding: 0 5px;
      color: #999;
    transition: all 200ms;
    text-shadow: var(--box-shadow);
  }
  @media (max-width:700px) {
      .left{
          display:none;
      }
      
  }
   </style>
</head>
<body>
<?php require('header.php'); ?>

    <!-- <h1>Contact Us</h1> -->
    <div class="con-container">

  
    <div class="left">
        <ul class="contact-ul">  
            <li> <span class="round"> &nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;</span> email@email.com</li>
            <li><span class="round"> &nbsp;<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;</span> +999999999</li>
            <li><span class="round"> &nbsp;<i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp;</span>  Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
          
        </ul>
    </div>
  <div class="right">

    
    <form action="">  
        <div class="form-group">
            <div class="sub-group">
                   <!-- <label for="fname">First Name</label> -->
        <input type="text" class="name" id="fname" placeholder="First Name">
            </div>
     <div class="sub-group">
        <!-- <label for="lname">Last Name</label> -->
        <input type="text" class="name" id="lname" placeholder="Last Name">
     </div>
        </div>
        <div class="form-group">
             <!-- <label for="mail">Email</label> -->
        <input type="email" name="" id="mail" placeholder="Enter your Email">
        </div>
        <div class="form-group">
             <!-- <label for="msg">Message</label> -->
        <input type="textarea" id="msg" placeholder="Enter your Message">
        </div>
       <div class="form-group">
           <input type="submit" value="submit">
       </div>
    </div>
</div>
       
    </form>
</body>
</html>