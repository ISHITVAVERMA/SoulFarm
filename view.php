
<?php
require('database.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
	body{
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
    background-color:black;
    color:white;
}     
  *{
    margin: 0;
  }
.header{
  width: 100%;
 
  background-color: #BC9B8D;
  color:white;
}
.header h1{
  text-align: center;
  color: white;
  text-decoration: none;
  font-size: 48px;
  letter-spacing: 2px;
  font-weight: 600;
  padding: 10px;
}
tr{
  font-size: 20px;
  font-weight: bold;
  
}
th{
  color:white;
  background-color: #5E5754;
}
a{
	font-size: 20px;
}
td{
	font-weight: normal;
}
  table{
    border:1px solid white
  }  
</style>
<body>
<div class="form">
| <a href="welcome.html">Back to home</a>
| <a href="dashboard.php">Dashboard</a>
| <a href="insert.php">Insert New Record</a>  
<div class="header">
<h1 style="background-color:black">View Records</h1>
</div>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Products</strong></th>
<th><strong>Quantity(unit/kg)</strong></th>
<th><strong>Price(unit/kg)</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from inventory;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<style>
	td{
		color:white;
	}
</style>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Products"]; ?></td>
<td align="center"><?php echo $row["Quantity(unit/kg)"]; ?></td>
<td align="center"><?php echo $row["Price(unit/kg)"]; ?></td>

<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>

<div id="google_translate_element"></div>
<script>function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</script>
</body>

</html>
