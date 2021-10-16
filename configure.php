<?php 

$con=new mysqli("localhost","root","","vedanti");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?> 