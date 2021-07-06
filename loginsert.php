<?php
require('database.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $custname =$_REQUEST['custname'];
    $phno = $_REQUEST['phno'];
    $amtdue = $_REQUEST['amtdue'];
    $ins_query="insert into customerdetails
    (`Customer_Name`,`Phone Number`,`AmountDue`)values
    ('$custname','$phno','$amtdue')";
    mysqli_query($conn,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='logview.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600&Cinzel">
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
    font-weight: bold;
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
</head>
<body>
<div class="form">
<a href="welcome.html" style="color:yellow; font-size: 25px">Back to home</a>
| <a href="logdashboard.php" style="color:yellow; font-size: 25px">Dashboard</a> 
| <a href="logview.php" style="color:yellow; font-size: 25px">View Records</a> 
<div>
<h1 style="color:yellow; font-size: 25px">Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input type="text" name="custname" placeholder="Enter Customer Name" required /><br>
<br>
<input type="number" name="phno" placeholder="Enter Phone No" required /><br>
<br>
<input type="number" name="amtdue" placeholder="Enter Amount Due" required /><br>
<br>
<button name="submit" id="submit" type="submit" value="Submit" style="background-color:yellow; color:#000000; font-size: 25px">Submit</button>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>

</html>