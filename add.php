<?php 
$link = mysql_connect('thegmatassassins.netfirmsmysql.com', 'takemyphone1', 'Takemyphone24*7'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysql_select_db(takemyphone); 
?> 


<form action='addprod.php' method='post' enctype='multipart/form-data'>

<table align='center' width='552px' height='600px' border='0'>
<tr> 
<td>Name</td>
<td><input type='text' name='name' value='<?php echo  $_SESSION['nm'];?>'><?php echo $_SESSION['errnm'];?>
</td>
</tr>

<tr>
<td>Brand</td>
<td><input type='text' name='brand' value='<?php echo  $_SESSION['br'];?>'></td>
</tr>

<tr>
<td>price</td>
<td><input type='text' name='price' value='<?php echo  $_SESSION['pr'];?>'></td>
</tr>

<tr>
<td>flawless percentage</td>
<td><input type='text' name='fpp' value='<?php echo  $_SESSION['fp'];?>'></td>
</tr>

<tr>
<td>good percentage</td>
<td><input type='text' name='gpp' value='<?php echo  $_SESSION['gp'];?>'></td>
</tr>






<tr>
<td><input type='submit' value='register'></td>
<td><input type='reset' value='reset'></td>
</tr>

</table>
</form>
