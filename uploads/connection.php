<?php
$host		= 	"localhost";
$username	=	"root";
$password	=	"";
$database	=	"dicc";


$con=mysqli_connect($host,$username,$password,$database);
if(!$con)
{
	echo "Something went wrong, please contact to administrator"; die();
}
?>


