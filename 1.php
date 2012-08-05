<form action='show.php' method='post' enctype='multipart/form-data'>		
		<table align='center' height='200px'>
		
		
		<tr>
        <td>
		<? 
 
mysql_connect("localhost","root","");
mysql_select_db('takemyphone');
$sql="SELECT brand FROM category"; 
$result=mysql_query($sql); 

$options=""; 
$dropdown = "<select name='cat'>";

while ($row=mysql_fetch_array($result)) { 

    
    $brand=$row["brand"]; 
        
		
   $dropdown .= "\r\n<option value='{$row['brand']}'>{$row['brand']}</option>"; 
	
	
} 
$dropdown .= "\r\n</select>";
echo $dropdown;

?> </td>
		
	<td></td>
		<td><input type='submit' value='Post'></td>
		</tr>
		</table>
	


		</form>