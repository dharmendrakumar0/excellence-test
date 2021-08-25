<?php
$servername="localhost";
$username="root";
$password="";
$dbname="xyz";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{

	return true;
}
else
{
	echo "connection faild";
}