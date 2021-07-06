<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

extract($_POST);
include("database.php");
$rs=mysqli_query($conn,"select * from login where username='$username'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$key = "myverystrongpasswordo32bitleng";    
$ivlen = openssl_cipher_iv_length($cipher="aes-128-cbc");     
$iv = openssl_random_pseudo_bytes($ivlen);  
$ciphertext_raw = openssl_encrypt($pass, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);  
$ciphertext = base64_encode( $iv.$ciphertext_raw ); 
$c = base64_decode("$ciphertext");  
$ivlen = openssl_cipher_iv_length($cipher="aes-128-cbc");  
$iv = substr($c, 0, $ivlen);  
$ciphertext_raw = substr($c, $ivlen); 
$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);  
$query="insert into login(name,contact,address,gender,username,password,idproof) values('$name','$contact','$address','$gender','$username','$ciphertext','$idproof')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $username Created Sucessfully</div>";




?>
</body>
</html>