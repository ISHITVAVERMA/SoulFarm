<?php 

$user = 'root'; 
$password = '';  
$database = 'management';  
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 

if ($mysqli->connect_error) { 
    die('Connect Error (' .  $mysqli->connect_errno . ') '.  $mysqli->connect_error); 
} 

$sql = "SELECT * FROM inventory"; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
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
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Inventory Management</title> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600&Cinzel">
<link rel="stylesheet" href="css/style2.css">

    <style>
   *{
    margin: 0;
  }
.header{
  width: 100%;
  padding: -20px;
  background-color: black;
  color:white;
}
.header h1{
  text-align: center;
  color: white;
  text-decoration: none;
  font-size: 48px;
  letter-spacing: 2px;
  font-weight: 600;
  padding: 25px;
}
body{
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
    background-color: black;
}     
tr{
  font-size: 20px;
  font-weight: bold;
  color: white;
}
th{
  color:black;
  background-color: white;
}
table{
    border: 1px solid white;
}
     
    </style> 
</head> 

<div class="nav-bar" style="padding-left: 0px;">
        <span onclick="showMenu()" style="cursor: pointer;"><i class="fa fa-bars fa-2x"  style="color: white;margin-left: 30px;"></i></span>
      
        <div class="nav-logo">
      
          <img src="./images/logonew.png" />
        </div>
              <div class="nav-links" id="nav-links">
              <a onclick="closeMenu()"><i class="fa fa-close" ></i></a>  
                <ul>
                  <a href="inventory.php"><li>View Inventory</li></a>
                  <a href="dashboard.php"><li>Manage Inventory</li></a>
                  <a href="logdashboard.php"><li>Access Log Book</li></a>
                  <a href="index.php"><li>Bill Generation</li></a>
                </ul>
                <!-- <a href="user.html"><button type="button" class="btn">My Profile</button> </a> -->
              </div>
      </div>
      <h1 style="text-align: center;color: white;font-size: 500%;">Inventory</h1>
<div class="container">           
<table class="table">
    
        
            <tr> 
                <th>Products</th> 
                <th>Quantity(unit/kg)</th> 
                <th>Price(unit/kg)</th> 
            
            </tr> 
            <?php    
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr>  
                <td><?php echo $rows['Products'];?></td> 
                <td><?php echo $rows['Quantity(unit/kg)'];?></td> 
                <td><?php echo $rows['Price(unit/kg)'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 


</html> 