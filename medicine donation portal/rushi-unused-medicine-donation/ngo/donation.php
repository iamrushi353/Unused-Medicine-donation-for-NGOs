<?php
$categ=array('antibiotic','Antiseptic','Antipyretics','Mood stabilizer','Analgesic','Stimulant');
$cat=$_GET['category'];
 switch ($cat) {

     case 'antibiotic':
      $query="SELECT * FROM donor WHERE category='antibiotic'";
      break;
      case 'antiseptic':
        $query="SELECT * FROM donor WHERE category='antiseptic'";
        break;
        case 'antipyretics':
          $query="SELECT * FROM donor WHERE category='antipyretics'";
          break;
          case 'moodstabilizer':
            $query="SELECT * FROM donor WHERE category='moodstabilizer'";
            break;
            case 'analgesic':
              $query="SELECT * FROM donor WHERE category='analgesic'";
              break;   
              case 'stimulant':
                $query="SELECT * FROM donor WHERE category='stimulant'";
                break;

 
  default:
  $query="SELECT * FROM donor";
}


$result=mysqli_query($db,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
  <style>
    .animated-select{
      width: 50vw;
      height: 100vh;
      background-color:black;
      position: absolute;
      top:0;
      left:-120vw;
      
    }
    
  </style>
</head>
<body>
  
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr. No.</th>
      <th scope="col">Medicine Name</th>
      <th scope="col">Expiry Date</th>
      <th scope="col">Category</th>
      <th>name</th>
      <th>email</th>
      <th>mobile number</th>
      <th>operation</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $temp=1;
      while($row=mysqli_fetch_array($result))
      {
      ?>
    <tr>
      <th scope="row"><?php echo $temp++; ?></th>
      <td><?php echo $row['medicine']; ?></td>
      <td><?php echo $row['expiry_date']; ?></td>
      <td><?php echo $row['category']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['mob']; ?></td>
      <td class="select" ><a class='btn btn-primary' style="background-color:#6c63ff" href='delete.php?id=<?php echo $row['id']; ?>'> Select</a></td>
    </tr>
    <?php
      }
      ?>
  </tbody>
</table>
<!-- <div class="animated-select" id="animated-select">

  </div> -->
<script>
  var element = document.getElementById("dashboard");
  var element2=document.getElementById("donation");
  element.classList.remove("active");
  element2.classList.add("active");
 var as= document.getElementById("animated-select");

  // function viewAnimate(){
   
  //    as.style.left="0";
  //   }

</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>