<?php 
if(isset($_REQUEST['key']))
{
	$id = $_REQUEST['key'];
	$con = mysqli_connect("localhost","root","","10amjs") or die("Sorry! Unable to connect");
	$result = mysqli_query($con,"select *from employee where id=$id");
	if(mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_assoc($result);
		echo json_encode($row);
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