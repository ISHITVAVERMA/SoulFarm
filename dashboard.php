<?php
require('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600&Cinzel">
<link rel="stylesheet" href="css/style2.css">
<title>Dashboard</title>
    <style>
        html, body{
           margin: 0;
           padding: 0;
           width: 100%;
           height: 100%;
        }      
        .b1{
        width: 100%;
        height: 100%;
        margin: auto;
        background-color: black;
        top: 0;
        display: table;
        background-size: cover;
        }
        .b1 .in1{
        text-align: middle;
        width: 100%;
        max-width: none;
        }
        .content{
        max-width: 500px;
        margin: auto;
       text-align: center;

        }
        .content h1{
        font-family: 'Raleway', sans-serif;
        color: #ffffff;
        font-size: 500%;
        text-shadow: 0 0 300px #000;
        }
        .header{
    width: 100%;
}

.header ul{
    text-align: center;
}

.header ul li{
    list-style: none;
    display: inline-block;
}

.header ul li a{
    display: block;
    text-decoration: none;
    text-transform: uppercase;
    color: #fff;
    font-size: 20px;
    font-family: 'Raleway', sans-serif;
    letter-spacing: 2px;
    font-weight: 600;
    padding: 25px;
    transition: all ease 0.5s;
}

.header ul li a:hover{
    background-color: #211b4385;

}
.content .btn{
    border-radius: 7px;
    color: #f9f3f4;
    text-decoration: none;
    font-family: 'Raleway', sans-serif;
    border: 3px solid;
    padding: 7px 13px;
    font-weight: bold;
    display: inline-block;
    margin-right: 25px;
    margin-top: 25px;
    transition: all 0.5s;
    cursor: pointer;
}
.content .btn span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
.content .btn:hover{
    color: #2196f3;
}
.content .btn span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
.content .btn:hover span {
    padding-right: 25px;
  }
.content .btn:hover span:after {
    opacity: 1;
    right: 0;
  }
    </style>
</head>
<body>
<section class="b1">
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
<div class="in1">
<div class="content">
<h1>Manage Inventory</h1>
<a class= "btn" style="font-size: 30px;color:black" href="view.php">View Records</a>
<a class= "btn" style="font-size: 30px;color:black" href="insert.php">Insert New Records</a>
</div>
</div>
</section>
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
</body>
</html>