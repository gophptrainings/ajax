<?php 
if(count($_POST)>0)
{
	$name = $_POST['ename'];
	$desg = $_POST['designation'];
	$salary = $_POST['salary'];
	$mob = $_POST['mobile'];
	
	$con = mysqli_connect("localhost","root","","10amjs") or die("Sorry! Unable to connect");
	mysqli_query($con,"insert into employee(name,designation,salary,mobile) values('$name','$desg','$salary','$mob')");
	if(mysqli_affected_rows($con)==1)
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