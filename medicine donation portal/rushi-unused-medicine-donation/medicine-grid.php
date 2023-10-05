<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/header.css">
    <style>
        .container{
            height: 100vh;
        }
        .grid {
            width: 50vw;
            
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 2rem;
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .grid-items {
            height: 200px;
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        }
        input[type=button]{
            width: 100px;
            height: 25px;
            border: none;
           background-color: skyblue;
        }
        input[type=button]:hover{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

        .med-img{
            max-height: 50px;
        }
      
    </style>
    <title>Document</title>
</head>

<body>
    <header>
        <div class="navigation">
            <ul class="nav">
                <li onclick="myfucntion()"><i class="fa fa-bars"
                        style="font-size:24px; border:1px solid black; padding:5px"></i></li>
                <li><a href="home.html">Home</a></li>
                <li ><a href="donate-medicine.html" class="active">Donate Medicines</a></li>
                <li><a href="ngo.html">NGOs</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>

                <li><button class="nav-btn btn" onclick="window.location.href ='login.html'">Login</button>
                    <button class="btn" onclick="window.location.href ='register.html'">Register</button>
                </li>
            </ul>
        </div>
    </header>
    <div class="container">

    
    <div class="grid">
        <div class="grid-items"><span class="med-type">Antibiotic</span>
            <img
                src="https://img.icons8.com/external-smashingstocks-mixed-smashing-stocks/68/000000/external-antibiotic-covid19-medical-and-healthcare-smashingstocks-mixed-smashing-stocks.png" class="med-img" />
            <input type="button" value="click here" onclick="location='donate-medicine.php?category=antibiotic'">
        </div>
        <div class="grid-items"><span class="med-type">Antiseptic</span>
            <img src="https://img.icons8.com/ios-filled/50/000000/antiseptic-cream.png" class="med-img" />
            <input type="button" value="click here" onclick="location='donate-medicine.php?category=antiseptic'">
        </div>
        <div class="grid-items"><span class="med-type">Antipyretics</span>
            <img
                src="https://img.icons8.com/external-icongeek26-glyph-icongeek26/64/000000/external-drugs-virus-icongeek26-glyph-icongeek26.png" class="med-img"/>
            <input type="button" value="click here" onclick="location='donate-medicine.php?category=antipyretics'">
        </div>
        <div class="grid-items"><span class="med-type">Mood stabilizer</span><img
                src="https://img.icons8.com/external-dreamstale-green-shadow-dreamstale/64/000000/external-medical-healthcare-and-medicine-dreamstale-green-shadow-dreamstale-2.png" class="med-img"/>
            <input type="button" value="click here" onclick="location='donate-medicine.php?category=moodstabilizer'"></div>
        <div class="grid-items"><span class="med-type">Analgesic</span><img
                src="https://img.icons8.com/ios/50/000000/back-pain.png" class="med-img" />
            <input type="button" value="click here" onclick="location='donate-medicine.php?category=analgesic'">
        </div>
        <div class="grid-items"><span class="med-type">Stimulant</span><img
                src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-medication-pharmaceutical-flaticons-lineal-color-flat-icons-13.png" class="med-img"/>
            <input type="button" value="click here" onclick="location='donate-medicine.php?category=stimulant'"></div>
    </div>
</div>
</body>

</html>