
<?php
require('database.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<style>
	body{
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
    background-color:black;
}     
  *{
    margin: 0;
  }
.header{
  width: 100%;
   color:yellow;
}
.header h1{
  text-align: center;
  color:yellow;
  text-decoration: none;
  font-size: 38px;
  letter-spacing: 2px;
  font-weight: 600;
  padding: 10px;
  margin-top: 30px;
}
tr{
  font-size: 20px;
  font-weight: bold;
}
th{
  color:black;
  background-color: white;
}
a{
	font-size: 20px;
	margin-top: 10px;
	color: #337ab7;
}
td{
	font-weight: normal;
}
    
</style>
<div align="right">
<div id="google_translate_element"></div>
<span><script type="text/javascript">
//<![CDATA[
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
//]]>
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</script></span></div>
<div class="form">
| <a href="welcome.html">Back to home</a> 
| <a href="logdashboard.php">Dashboard</a> 
| <a href="loginsert.php">Insert New Record</a> 
<div class="header">
<h1>View Records</h1>
</div>
<br>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Customer Name</strong></th>
<th><strong>Phone Number</strong></th>
<th><strong>Amount Due</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from customerdetails";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<style>
	td{
		color:white;
	}
</style>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Customer_Name"]; ?></td>
<td align="center"><?php echo $row["Phone Number"]; ?></td>
<td align="center"><?php echo $row["AmountDue"];?></td>
<td align="center">
<a href="logedit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="logdelete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>