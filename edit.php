<?php
require('database.php');
$id=$_REQUEST['id'];
$query = "SELECT * from inventory where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>

</head>
<body>
<style>
    body{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    width: 100%;
    height: 100%;
    margin-top: 25px;
    background-color:black;
    top: 0;
    display: table;
    background-size: cover;
    color:yellow;
}
.content h1{
    font-family: 'Raleway', sans-serif;
    color: #f9f3f4;
    font-size: 350%;
    text-shadow: 0 0 300px #000;
}
.content{
    max-width: 500px;
    margin: auto;
    text-align: center;

}
.form{
    text-align: center;
    color: #f9f3f4;
}
a{
    text-decoration: none;
    color: white;
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
    font-size: 20px;
}
.content .a span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  form{
    text-align: center;
    font-size: 25px;
    font-family:'Raleway', sans-serif;
  }
  
  button{
    border-radius: 7px;
    color: #000;
    text-decoration: none;
    font-family: 'Raleway', sans-serif;
    font-size: 20px;
    border: 3px solid;
    padding: 10px 16px;
    font-weight: bold;
    display: inline-block;
    margin-right: 25px;
    margin-top: 25px;
    transition: all 0.5s;
    cursor: pointer;
    }
   input {
   width: 300px;
   height: 25px;
   padding-bottom: 15px;
   border-radius: 15px;
   text-align: center;
   font-size: 15px;
   }
   ::placeholder{
       font-size: 20px;
       text-align: center;
       font-family: 'Raleway', sans-serif;
   }
    
    </style>
<div align="right">
<div id="google_translate_element"></div>
<span><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}

</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</script></span></div>
<div class="form">
<p><a href="dashboard.php" style="color:yellow">Dashboard</a> 
| <a href="insert.php" style="color:yellow">Insert New Record</a> 
| 
<h1 style="color:yellow">Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$product =$_REQUEST['product'];
$quan = $_REQUEST['quan'];
$price = $_REQUEST['price'];
$update="UPDATE inventory SET `Products`='$product', `Quantity(unit/kg)`='$quan', `Price(unit/kg)`='$price' where id='$id'";
mysqli_query($conn, $update) or die(mysqli_error($conn));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<input type="text" name="product" placeholder="Enter Product" 
required value="<?php echo $row['Products'];?>" /><br>
<br>
<input type="number" name="quan" placeholder="Enter Quantity" 
required value="<?php echo $row['Quantity(unit/kg)'];?>" /><br>
<br>
<input type="number" name="price" placeholder="Enter Price" 
required value="<?php echo $row['Price(unit/kg)'];?>" /><br>
<br>
<button name="submit" id="submit" type="submit" value="Update" style="background-color:yellow; color:#000000; font-size: 25px">Update</button>
</form>
<?php } ?>
</div>
</div>
</body>
</html>