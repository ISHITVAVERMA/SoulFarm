
<?php
require('database.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM customerdetails WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: logview.php"); 
?>