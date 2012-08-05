
<?php
	
	$brand=$_POST['cat'];
	?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta  charset=UTF-8>
        <title>Sell your used mobiles and second hand mobiles in India | TakeMyPhone</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/logostyle.css" />
       
         <link rel="stylesheet" type="text/css" href="css/footbar.css" />
         <link rel="stylesheet" type="text/css" href="css/footerstyle.css" />
  <link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
         <link rel="stylesheet" type="text/css" href="css/sliderstyle.css" />
        <link rel="stylesheet" href="css/menustyle.css" type="text/css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="css/btnstyle.css" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
        <link href="src/favicon.png" rel="shortcut icon" />
    </head>
    <body>
        <div class="container" >
            <?php 
include('menu.php');
?>

 
            
                <div id="productbox" class="span11 offset4">
				<?php
				include('dbconnect.php');
				
				
			$sql="select * from products where brand='$brand'";
$res= mysql_query($sql);
$n= mysql_num_rows($res);
$i=1;
while($i<=$n)
{
 $row=mysql_fetch_array($res);
			?>
                    <div class="view view-first">
<?php

?>
                    <img src="src/<?php echo $row['id'];?>.png" />
                    <div class="mask">
                        <h2><?php echo $row['name']; ?></h2>
                        <p><font color="#000">Click here to get your offer</font></p>
                        <a href="sell.php?name=<?php echo $row['name']."&id=".$row['id'];?>" class="info">Sell Us</a>
                    </div>
                </div>  
                <?php $i++; } ?>
        
                    
                    
                    
                    
            </div>
            <div class="span12 offset4" id="footbar">
                
            </div>
           <?php 
include('footer.php');
?>
        
    </body>
</html>
