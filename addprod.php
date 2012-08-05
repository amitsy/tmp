<?php session_start();?>
<?php
	
	$name=$_POST['name'];
	$_SESSION['nm']=$name;

$brand=$_POST['brand'];
	$_SESSION['br']=$brand;

$price=$_POST['price'];
	$_SESSION['pr']=$price;

$fp=$_POST['fpp'];
	$_SESSION['fp']=$fp;

$gp=$_POST['gpp'];
	$_SESSION['gp']=$gp;


$link = mysql_connect('thegmatassassins.netfirmsmysql.com', 'takemyphone1', 'Takemyphone24*7'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysql_select_db(takemyphone); 



	

		
$query="INSERT INTO products (`name`, `brand`, `price`, `fp`,gp) VALUES ( '$name', '$brand', '$price', '$fp','$gp')";
mysql_query($query);

?>