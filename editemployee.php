<?php 
if(count($_POST)>0)
{
	$name = $_POST['ename'];
	$desg = $_POST['designation'];
	$salary = $_POST['salary'];
	$mob = $_POST['mobile'];
	$empid = $_POST['empid'];
	$con = mysqli_connect("localhost","root","","10amjs") or die("Sorry! Unable to connect");
	mysqli_query($con, "update employee set name='$name',designation='$desg',mobile='$mob',salary='$salary' where id=$empid");
	if(mysqli_affected_rows($con)>0)
	{
		echo 1;
	}
	else
	{
		echo 2;
	}
}
else
{
	echo 3;
}
?>