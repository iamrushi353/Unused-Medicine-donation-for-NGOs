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

a{
    text-decoration: none;
    color: black;
    font-family: montserrat;
    font-weight: 400;
}
li{
    list-style: none;
}
.sidebar{
    position: absolute;
    left: 0;
    height: 100vh;
    width: 20vw;
    background-color:rgb(37, 37, 70);
}
.sidebar-heading{
    text-transform: uppercase;
    color: rgb(208, 208, 208);
    position:absolute;
    top: 130px;
    left: 50px;
}
.menu{
    height: 100vh;
}
nav{
height: 100%;
}
nav ul{
    margin-top: 180px;
    height: 60%;
    display: flex;
    flex-direction: column;
    gap: 17px;
    justify-content: space-around;
    margin-left: 80px;



}
nav ul li a{
    color: rgb(167, 163, 207);
}
.active{
    color: rgb(255, 255, 255);
    border-bottom:2px solid rgb(255, 255, 255); 
    padding:5px 0;
}
    </style>
</head>
<body>
<div class="sidebar">
        <span class="sidebar-heading">Menu</span>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="" class="active">Dashboard</a></li>
                    <li><a href="">Donations</a></li>
                    <li><a href="">Manufacturers</a></li>
                    <li><a href="">NGOs</a></li>
                    <li><a href="">Feedback</a></li>
                    <li><a href="">Preference</a></li>
                    <li><a href="">Users</a></li>
                    <li><a href="">Access Control</a></li>
                </ul>
            </nav>
        </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
    </div>
    
</body>
</html>