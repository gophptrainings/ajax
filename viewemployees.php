<?php 
$con = mysqli_connect("localhost","root","","10amjs") or die("Sorry! Unable to connect");
$result = mysqli_query($con,"select *from employee");
$data = [];
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$data[] = $row;
	}
}
else
{
	$data = [];
}

echo json_encode($data);

?>