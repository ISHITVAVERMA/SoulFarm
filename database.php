<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','management');
define('DB_PORT', 3307);

$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_PORT);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>