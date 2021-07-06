<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SIGN UP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<script language="javascript">
function check()
{

 if(document.form1.name.value=="")
  {
    alert("Plese Enter your name");
	document.form1.name.focus();
	return false;
  }
   if(document.form1.contact.value=="")
  {
    alert("Plese Enter your contact number");
	document.form1.contact.focus();
	return false;
  }
   if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
   if(document.form1.gender.value=="")
  {
    alert("Plese Enter Your Gender");
	document.form1.gender.focus();
	return false;
  }
if(document.form1.username.value=="")
  {
    alert("Please Enter username");
	document.form1.username.focus();
	return false;
  }
 if(document.form1.pass.value=="")
  {
    alert("Please Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Please Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
 
  if(document.form1.idproof.value=="")
  {
    alert("Plese Enter your id Proof");
	document.form1.idproof.focus();
	return false;
  }
  
   return true;
  }
  
</script>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="images/image10.jpg" alt="">
				</div>
				<form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
					<h3><b> Sign Up <b></h3>
					<div class="form-holder active">
						<input type="text" placeholder="name" class="form-control" name="name">
					</div>
					<div class="form-holder">
						<input type="number" placeholder="Contact Number" class="form-control" name="contact">
					</div>
					<div class="form-holder">
						<input type="text" placeholder="Address" class="form-control" name="address">
					</div>
					<div class="form-holder">
						<input type="text" placeholder="Gender" class="form-control" name="gender">
					</div>
					<div class="form-holder">
						<input type="text" placeholder="Username" class="form-control" name="username">
					</div>
					<div class="form-holder">
						<input type="password" placeholder="Enter Password" class="form-control" style="font-size: 15px;" name="pass">
					</div>
					<div class="form-holder">
						<input type="password" placeholder="Re-Enter Password" class="form-control" style="font-size: 15px;" name="cpass">
					</div>
					<div class="form-holder">
						<input type="password" placeholder="ID Proof" class="form-control" style="font-size: 15px;" name="idproof">
					</div>
		
					<div class="form-login">
						<button>Sign up</button>
						<p>Already Have account? <a href="login.php">Login</a></p>
					</div>
				</form>
			</div>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
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
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>