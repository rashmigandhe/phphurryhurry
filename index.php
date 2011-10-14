<?php
$host ='localhost';
$port ='5432';
$username ='postgres';
$pass ='rashmi';
$database ='hurryhurrymobile_staging';

$conn_string = "host=$host port=$port dbname=$database user=$username password=$pass";
$dbconn4 = pg_connect($conn_string);
echo "dbconn4=$dbconn4<br>";

$result = pg_query("Select * from books");

?>
<table cellspacing=1 cellpadding=1 border=0 width=50% bgcolor='#d4d4d4'>
<tr bgcolor='#c4c4ff'>
<td><font size='2' face='verdana'>Name</font></td>
<td><font size='2' face='verdana'>Desc</font></td>

</tr>
<?php

while ($row = pg_fetch_array($result))
{
     echo "<tr  bgcolor='#FFFFFF'><td><font size='2' face='verdana'>".$row["title"]."</font></td><td><font size='2' face='verdana'>".$row["description"]."</font></td></tr>";
} 

?>
