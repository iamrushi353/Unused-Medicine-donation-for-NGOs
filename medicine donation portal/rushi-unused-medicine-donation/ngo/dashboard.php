<?php
$categ=array('antibiotic','antiseptic','antipyretics','moodstabilizer','analgesic','stimulant');
for($i=0;$i<6;$i++){
    $query="SELECT * FROM donor WHERE category ='$categ[$i]'";
$result=mysqli_query($db,$query);
$stock[]=mysqli_num_rows($result);
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
        .grid {
            width: 50vw;
            --auto-grid-min-size: 200px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--auto-grid-min-size), 1fr));
            grid-gap: 2rem;
            position: absolute;
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
</head>
<body>
<div class="grid">
        <div class="grid-items">
           
            <span class="med-type">Antibiotic</span>
            <img
                src="https://img.icons8.com/external-smashingstocks-mixed-smashing-stocks/68/000000/external-antibiotic-covid19-medical-and-healthcare-smashingstocks-mixed-smashing-stocks.png" class="med-img" />
            <input type="button" value="click here" onclick="location='index.php?switch=donation&name=&category=antibiotic'">
            <span style="color:#6c63ff"><?php echo "Available : ".$stock[0]." units"?></span>
        </div>
        <div class="grid-items"><span class="med-type">Antiseptic</span>
            <img src="https://img.icons8.com/ios-filled/50/000000/antiseptic-cream.png" class="med-img" />
            <input type="button" value="click here" onclick="location='index.php?switch=donation&name=&category=antiseptic'">
            <span style="color:#6c63ff"><?php echo "Available : ".$stock[1]." units"?></span>
        </div>
        <div class="grid-items"><span class="med-type">Antipyretics</span>
            <img
                src="https://img.icons8.com/external-icongeek26-glyph-icongeek26/64/000000/external-drugs-virus-icongeek26-glyph-icongeek26.png" class="med-img"/>
            <input type="button" value="click here" onclick="location='index.php?switch=donation&name=&category=antipyretics'">
            <span style="color:#6c63ff"><?php echo "Available : ".$stock[2]." units"?></span>
        </div>
        <div class="grid-items"><span class="med-type">Mood stabilizer</span><img
                src="https://img.icons8.com/external-dreamstale-green-shadow-dreamstale/64/000000/external-medical-healthcare-and-medicine-dreamstale-green-shadow-dreamstale-2.png" class="med-img"/>
            <input type="button" value="click here" onclick="location='index.php?switch=donation&name=&category=moodstabilizer'">
            <span style="color:#6c63ff"><?php echo "Available : ".$stock[3]." units"?></span></div>
        <div class="grid-items"><span class="med-type">Analgesic</span><img
                src="https://img.icons8.com/ios/50/000000/back-pain.png" class="med-img" />
            <input type="button" value="click here" onclick="location='index.php?switch=donation&name=&category=analgesic'">
            <span style="color:#6c63ff"><?php echo "Available : ".$stock[4]." units"?></span>
        </div>
        <div class="grid-items"><span class="med-type">Stimulant</span><img
                src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-medication-pharmaceutical-flaticons-lineal-color-flat-icons-13.png" class="med-img"/>
            <input type="button" value="click here" onclick="location='index.php?switch=donation&name=&category=stimulant'">
            <span style="color:#6c63ff"><?php echo "Available : ".$stock[5]." units"?></span>
        </div>
    </div>
</body>
</html>