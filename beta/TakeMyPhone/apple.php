
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
            <div class="row">
                <div id="logo" class="span4">
                    
                    <ul class="ca-menu">
                    <li>
                        <a href="#">
                            <span class="ca-icon"><img src="src/logo1.png"></span>
                            <div class="ca-content">
                                <h2 class="ca-main">TakeMyPhone</h2>
                                <h3 class="ca-sub">Sell your used mobiles in 30 seconds</h3>
                            </div>
                        </a>
                    </li>
                    
                    </ul>
                </div>
                <div id="menu" class="span12">
                    
                    <div class="mcontainer">
            <ul id="menu">
                <li>
                    <a>
                        <i class="icon_about"></i>
                        <span class="title">Products</span>
                        <span class="description">See all the phones we take</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i class="icon_work"></i>
                        <span class="title">How We Work</span>
                        <span class="description">Its simple to sell to TakeMyPhone</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i class="icon_help"></i>
                        <span class="title">Help</span>
                        <span class="description">Contact Us or see FAQs</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i class="icon_search"></i>
                        <span class="title">Login</span>
                        <span class="description">Track your order</span>
                    </a>
                </li>
            </ul>
                     </div>
                    
                    
                </div>
            </div>

 <?php 
mysql_connect('thegmatassassins.netfirmsmysql.com', 'takemyphone1', 'Takemyphone24*7'); 
mysql_select_db(takemyphone); 

?> 
            
                <div id="productbox" class="span11 offset4">
				<?php
				
				
				
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
                    <img src="src/<?php echo $row['id'];?>.jpg" />
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
            <div class="span12" id="footer">
                <div id="footeritems" class="alert alert-info">
                   <div id="infooter" > <h3>About Us</h3><hr>
                   <font size="+">We aim at bringing a smarter consumption in the Indian market by introducing the novel concept of "Re-commerce" in India. <br>We buy your old Smart Phones and offer you the best price you can get anywhere in the market.
                   Save yourself from the GREY second hand market and dont get cheated or in other words,"Sell your phones to us." (There's a reason the second hand market is called "Grey")
                    </font></div>
            </div>
                <div  id="footeritems" class="alert alert-info">
                   <div id="infooter"> <h3>Information</h3><hr>
                   <table class="table table-striped">
 <tr>
      <td>Contact Us</td></tr>
  <tr>    <td>What others say about us?</td>
    </tr>
    <tr><td>Disclaimer</td></tr>
</table>
                   
                    </div>
                </div>
                <div  id="footeritems" class="alert alert-info">
                   <div id="infooter"> <h3>Products</h3>
                   <div id="productlist">
                   <div id="jp-container" class="jp-container">
					<a target="_blank" href="http://tympanus.net/codrops/2011/09/20/responsive-image-gallery/">
						<img src="images/thumbs/16.jpg"/>
						<div>
							<h3>Apple iPhone 4</h3>
							Click here to sell your Apple iPhone 4.
						</div>
					</a>
					<a target="_blank" href="http://tympanus.net/codrops/2011/09/12/elastislide-responsive-carousel/">
						<img src="images/thumbs/15.jpg"/>
						<div>
							<h3>Blackberry Torch 9860</h3>
							Click here to sell us your Blackberry Torch 9860
						</div>
					</a>
					<a target="_blank" href="http://tympanus.net/codrops/2011/09/05/slicebox-3d-image-slider/">
						<img src="images/thumbs/14.jpg"/>
						<div>
							<h3>Samsung Galaxy S3</h3>
							Click here to sell us your Samsung Galaxy S3
						</div>
					</a>
					<a target="_blank" href="http://tympanus.net/codrops/2011/08/30/automatic-image-montage/">
						<img src="images/thumbs/13.jpg"/>
						<div>
							<h3>Sansung Galaxy Note</h3>
							Click here to sell us your Samsung Galaxy Note
						</div>
					</a>
					<a target="_blank" href="http://tympanus.net/codrops/2011/08/23/image-zoom-tour/">
						<img src="images/thumbs/12.jpg"/>
						<div>
							<h3>Apple iPad 2</h3>
							Click here to sell us your Apple iPad 2.
						</div>
					</a>
                    </div>
                   </div>
                   </div>
                </div>
                  <div " id="footeritems" class="alert alert-info">
                 <div id="infooter"> <h3>Contact Us</h3>
                 <hr>
                 <table class="table table-striped">
 <tr>
      <td> <a href="">Contact Form</a><br></td></tr>
  <tr>    <td><a href=""> Facebook Page</a><br></td>
    </tr>
    <tr><td><a href=""> Follow Us on Twitter</a></td></tr>
</table>
                 
                 
                   </div>
                </div>
        </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script type="text/javascript">
       $(function() {
            $('#menu > li').hover(
                function () {
                    var $this = $(this);
                    $('a',$this).stop(true,true).animate({
                            'bottom':'-15px'
                        }, 300);
                    $('i',$this).stop(true,true).animate({
                            'top':'-10px'
                        }, 400);
                },
                function () {
                    var $this = $(this);
                    $('a',$this).stop(true,true).animate({
                            'bottom':'-95px'
                        }, 300);
                    $('i',$this).stop(true,true).animate({
                            'top':'50px'
                        }, 400);
                }
            );
        });
</script>
    </body>
</html>