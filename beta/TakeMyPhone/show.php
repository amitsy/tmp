<?php session_start();?>
<?php
	
	$brand=$_POST['cat'];
	
	
	if($brand=='1')
	{
	header('location:apple.php');
	}
	
	if($brand=='blackberry')
	{
	header('location:blackberry.php');
	}
	
	if($brand=='3')
	{
	header('location:samsung.php');
	}
	
	if($brand=='4')
	{
	header('location:htc.php');
	}
	
	if($brand=='5')
	{
	header('location:nokia.php');
	}
	
	?>