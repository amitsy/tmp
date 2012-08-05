<?php
$condition=$_POST['condition'];
$charger=$_POST['charger'];
$datacable=$_POST['datacable'];
$earphone=$_POST['earphone'];
$box=$_POST['box'];
$bill=$_POST['bill'];
$age=$_POST['age'];
$id=$_GET['id'];



 
 




?>


<?php 
 
include('dbconnect.php');






$query="UPDATE info
SET condit='$condition', charger='$charger', datacable='$datacable', earphone='$earphone', box='$box', bill='$bill', age='$age'
WHERE id=$id ";
mysql_query($query);
$idd="select id from info where id='$id'";
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
                <div id="productbox" class="span11 offset4">
                    
                    
                    
                    
                    
                    
                    
                     <h1>Form </h1>
            <div id="wrapper">
                <div id="steps">
                     <form id="formElem" name="formElem" action="confirm.php?idd=<?php echo $idd?>" method="post" enctype="multipart/form-data">
                        <fieldset class="step">
                            <legend>Offer</legend>
                           
 
                        </fieldset>


<fieldset class="step">
                            <legend>Upload photo&#42;</legend>
                           

 Photo: <input type="file" name="photo">

                        </fieldset>


                        <fieldset class="step">
                            <legend>Personal Details&#42;</legend>
                          
                                


<p>
                                <label for="name">Name&#42;</label>
                                <input id="name" name="name" type="text" AUTOCOMPLETE=OFF style="width:200px;"/>
                            </p>

<p>
                                <label for="address">Address&#42;</label>
                         <textarea class="input-xlarge" id="textarea" rows="3" AUTOCOMPLETE=OFF name="address"></textarea>       
                            </p>

<p>
                                <label for="email">Email&#42;</label>
                                <input id="email" name="email" type="text" AUTOCOMPLETE=OFF  style="width:200px;"/>
                            </p>

<p>
                                <label for="phone">Phone No.&#42;</label>
                                <input id="phone" name="phone" type="text" AUTOCOMPLETE=OFF style="width:200px;"/>
                            </p>



                                      
                        </fieldset>
                        
						<fieldset class="step">
                            <legend>Confirm</legend>
							<p>
								By selling us your phone, you agree to our <a href="terms.php">Terms and Condition</a>. 
							</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">Submit</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div id="navigation" >
                    <ul>
                        <li class="selected">
                            <a href="#">Offer</a>
                        </li>
<li>
                            <a href="#">Upload photo</a>
                        </li>
                        <li>
                            <a href="#">Personal Details</a>
                        </li>
                        
                        
						<li>
                            <a href="#">Confirm</a>
                        </li>
                    </ul>
                </div>
            </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                
            </div>
            <div class="span12 offset4" id="footbar3">
               
              
                
                
            </div>
            <div class="span12 offset4" id="footbar">
               
               
                
                
            </div>
           <?php 
include('footer.php');
?>
       
    </body>
</html>
