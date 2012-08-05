<!DOCTYPE html>
<html lang="en">
    <head>
        <meta  charset=UTF-8>
        <title>Sell your used mobiles and second hand mobiles in India | TakeMyPhone</title>
        
	

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/logostyle.css" />
         <link rel="stylesheet" type="text/css" href="css/style.css" />
         <link rel="stylesheet" type="text/css" href="css/footbar.css" />
         <link rel="stylesheet" type="text/css" href="css/footerstyle.css" />
         <link rel="stylesheet" type="text/css" href="css/sliderstyle.css" />
        <link rel="stylesheet" href="css/menustyle.css" type="text/css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="css/btnstyle.css" />
  <link rel="stylesheet" href="css/formstyle.css" type="text/css" media="screen"/>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
        <link href="src/favicon.png" rel="shortcut icon" />	
<script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="slider.form.js"></script>
    </head>
    <body>
        <div class="container" >
          <?php 
include('menu.php');
?>
            <div id="content">
                <div id="productbox" class="span11 offset4">
                    
                    
                    <?php
$bran=$_GET['name'];



$nm=$_GET['name'];



include('dbconnect.php');

$query="insert into info (`phone`) values ('$bran')";
mysql_query($query);
$id=mysql_insert_id();
echo $id;
?>
                    
                    
                    
                    
                     <h1> <?php echo $bran; ?> </h1>
           <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" action="showform.php?id=<?php echo $id."&name=".$nm;?>" method="post">



                        <fieldset class="step">
                            <legend><a href="#" class="hovertooltip" data-original-title="first tooltip"> Condition&#42;</a></legend>
                            <p>
                                
                                <input type="radio" id="condition" name="condition" value="No noticeable problems, looks like new"/>No noticeable problems, looks like new</br>
								<input type="radio" id="condition" name="condition" value="Has some cosmetic and/or Functional Defects"/>Has some cosmetic and/or Functional Defects</br>
								<input type="radio" id="condition" name="condition" value=" I have a Dead Phone, Please Recycle it"/> I have a Dead Phone, Please Recycle it</label>
                           

 </p><submit class="btn-info" id="nextbutton">
    
<a href='#' id='next1'>Next</a> </submit>
<script>
$(document).ready(function(){
$('#next1').click(function(){ $('#acc').trigger('click');    });
});</script>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Original Accessories&#42;</legend>
                         <span id="oatitle"> Select the accessories you still have with your phone </span>
            <div id="accessories">                    
                              
<input type="checkbox" name="charger" value="charger" /><label class="checkbox" for="name">Charger</label><br />
<input type="checkbox" name="datacable" value="datacable" /><label class="checkbox" for="name">Data Cable</label><br />
<input type="checkbox" name="earphone" value="earphone" /><label class="checkbox" for="name">Earphones</label><br />
<input type="checkbox" name="box" value="box" /><label class="checkbox" for="name">Box</label><br />
<input type="checkbox" name="bill" value="bill" /><label class="checkbox" for="name">Bill</label>
</div>
<label for="name" id="oatitle2">Age&#42;</label>

<div id="mage">
                                <select id="age" name="age">
                                    <option>1 Month</option>
                                    <option>2 Months</option>
                                    <option>3 Months</option>

                                    <option>4 Months</option>
                                    <option>5 Months</option>

                                    <option>6 Months</option>
                                    <option>7 Months</option>

                                    <option>8 Months</option>
                                    <option>9 Months</option>

                                    <option>10 Months</option>
                                    <option>11 Months</option>
<option>12 Month</option>
                                    <option>1-2 Years</option>
                                    <option>>2 Years</option>
                                </select>
                            
                     </div>   
<submit class="btn-info" id="prevbutton2">
    
<a href='#' id='next1'>Previous</a> </submit>
<submit class="btn-info" id="nextbutton2">
    
<a href='#' id='next1'>Next</a> </submit>
                        </fieldset>
                        			<fieldset class="step">
                            <legend>Confirm</legend>
							<p id="confirm">
								Click to get your offer
							</p>
                            <p class="submit">
                                <button  class="btn btn-info" type="submit">Get Your Offer</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div id="navigation" >
                    <ul>
                        <li class="selected">
                            <a href="#" >Condition</a>
                        </li>
                        <li>
                            <a href="#" id='acc'>Original Accessories</a>
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
