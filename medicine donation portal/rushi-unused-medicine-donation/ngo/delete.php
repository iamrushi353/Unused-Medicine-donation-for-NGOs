<?php
require_once('../config.php');
$id=$_GET['id'];
$query="DELETE FROM donor WHERE id={$id}";
$row=mysqli_query($db,$query);
// if($row){
//     header("Location:donation.php");
// }
?>