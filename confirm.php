<?php
$nam=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phoneno=$_POST['phone'];

$idd=$_GET['idd'];

echo $idd;

 
 




?>


<?php 
mysql_connect('thegmatassassins.netfirmsmysql.com', 'takemyphone1', 'Takemyphone24*7'); 
mysql_select_db(takemyphone); 





$query="UPDATE info
SET name='$nam', address='$address', email='$email', phoneno='$phoneno'
WHERE id=$idd ";
mysql_query($query);
echo $query;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta  charset=UTF-8>
        <title>Sell your used mobiles and second hand mobiles in India | TakeMyPhone</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/logostyle.css" />
         <link rel="stylesheet" type="text/css" href="css/style.css" />
         <link rel="stylesheet" type="text/css" href="css/footbar.css" />
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
         <script type="text/javascript" src="slider.form.js"></script>
         <link rel="stylesheet" href="css/menustyle.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/formstyle.css" type="text/css" media="screen"/>
      <link rel="stylesheet" type="text/css" href="css/btnstyle.css" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
        <link href="src/favicon.png" rel="shortcut icon" />
		  <link rel="stylesheet" type="text/css" href="css/footerstyle.css" />
         <link rel="stylesheet" type="text/css" href="css/sliderstyle.css" />
        
    </head>
    <body>
        <div class="container" >
          <?php 
include('menu.php');
?>
            <div id="content">
                
                    <?php 
 
 //This is the directory where images will be saved 
 $target = "src/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This gets all the other information from the form 
 
 $pic=($_FILES['photo']['name']); 
 
 
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `info` VALUES ('$pic')") ; 
 
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 //Gives and error if its not 
 echo "Sorry, there was a problem uploading your file."; 
 } 
 ?> 
                    
                    
                    
                    
                    
                    
                 </div>   
            <div class="span12 offset4" id="footbar">
               
               
                
                
            </div>
           <?php 
include('footer.php');
?>
       
    </body>
</html>