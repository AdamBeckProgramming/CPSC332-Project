<?php
$CWID = $_POST['CWID'];

echo $CWID;
echo "<br/>\n";

$link = mysql_connect('ecsmysql', 'cs332s6', 'maifedei')
	 or die('Could not connect: ' . mysql_error());
echo 'connected successfully';
echo "<br/>\n";

mysql_select_db('cs332s6') or die('Could not select database');

$query = "SELECT Title, Grade 
	  FROM COURSE C, SECTION S, ENROLLMENT E 
	  WHERE E.CWID = '$CWID' AND E.S_Num = S.S_Num AND S.C_Num = C.C_Num";

$result = mysql_query($query) or die('Query failed: ' . mysql_error());

while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
	foreach($row as $cname => $cvalue){
		print "$cname: $cvalue\t";
	}
	echo "<br/>\n";
}

mysql_close($link);
?>
