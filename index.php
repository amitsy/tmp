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
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
       <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
        <link href="src/favicon.png" rel="shortcut icon" />
    </head>
    <body>
        <div class="container" >
            <?php 
include('menu.php');
?>


<div id="content">
                <div id="searchbox" class="span9 offset4">
                    <h1>Sell your old Mobile phone for cash in less than 30 seconds.</h1>
                    <form class="form-inline" id="searchform" action='phonelist.php' method='post'>
                        <select name='cat' id="searchbox1" >
        <option value='apple'>Apple</option>
        <option value='blackberry'>Blackberry</option>
		<option value='samsung'>Samsung</option>
		<option value='htc'>HTC</option>
		<option value='nokia'>Nokia</option>
		</select>
							
							
                             
                       <button class="btn btn-info" type="submit" method="post" onClick="var frm=document.getElementById('searchform'); frm.submit();">
  Get your offer
</button>    
                    </form>
                </div>
                <div class="span8 offset4" id="details">
                    <h2>How We Work?</h2>
                    <div id="image">
                         <ul class="bca-menu">
                    <li>
                        <a href="working.php">
                            <span class="bca-icon"><img src="src/mouse.png"></span>
                            <div class="bca-content">
                                <h2 class="bca-main">Get your offer</h2>
                                <h3 class="bca-sub">Select your phone model and answer few easy questions.</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="working.php">
                            <span class="bca-icon"><img src="src/box.png"></span>
                            <div class="bca-content">
                                <h2 class="bca-main">Ship your phone to us</h2>
                                <h3 class="bca-sub">Ship your phone to us via Fedex or DHL courier service.</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="working.php">
                            <span class="bca-icon" id="heart"><img src="src/rupee.png"></span>
                            <div class="bca-content">
                                <h2 class="bca-main">Get Paid</h2>
                                <h3 class="bca-sub">We inspect your phone's condition and send you a cheque in 10 business days.</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="working.php">
                            <span class="bca-icon"><img src="src/recycle.png"></span>
                            <div class="bca-content">
                                <h2 class="bca-main">Recycle</h2>
                                <h3 class="bca-sub">We wipe all your data and find a new owner for your phone.</h3>
                            </div>
                        </a>
                    </li>
                    
                </ul>
                    </div>
                </div>
            </div>
            <div class="span12 offset4" id="footbar">
               
               
                
                
            </div>
     <?php 
include('footer.php');
?>
      
    </body>
</html>
