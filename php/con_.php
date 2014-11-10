<?php 


/*$host = "209.17.116.156";
//$host = 'localhost';
$user = "munlogic";
$pass = "MuN10G1c.2014*";
$database = "munlogic_gayosso_crm";*/

/*
$host = 'localhost';
$user = 'root';
$pass = 'martintellez';
$database = 'gayosso';*/



$host = '67.227.172.217';
$user = 'momartco_munlogi';
$pass = 'MuN10G1c.2014*';
$database ="momartco_gayosso_crm";


$con=mysql_connect($host,$user,$pass,$database);
if (!$con) {
  echo "Failed to connect to MySQL: ";die();
}else{
	echo "si se conecto";
}


 ?>