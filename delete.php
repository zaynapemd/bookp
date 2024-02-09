<?php
require 'conex.php';
$id=$_GET['id'];
$sql="DELETE FROM pink Where id='$id'" ;
$query=mysqli_query($conn,$sql);
if(isset($query)){ 
   header("location:aceuillep.php");
}

?>