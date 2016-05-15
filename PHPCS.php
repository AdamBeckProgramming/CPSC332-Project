<?php
// COURSE AND SECTION SEARCH PROFESSOR SEARCH
$CoNum = $_POST['CoNum'];
$SeNum = $_POST['SeNum'];

echo $CoNum;
echo "<br/>\n";
echo $SeNum;
echo "<br/>\n";

$link = mysql_connect('ecsmysql', 'cs332s6', 'maifedei')
	 or die('Could not connect: ' . mysql_error());
echo 'connected successfully';
echo "<br/>\n";

mysql_select_db('cs332s6') or die('Could not select database');

$query = "SELECT Grade, COUNT(*) 
	  FROM ENROLLMENT E, COURSE C, SECTION S 
	  WHERE C.C_Num = '$CoNum' AND S.C_Num = C.C_Num AND E.S_Num = S.S_Num AND 
	  S.S_Num = '$SeNum' 
	  GROUP BY Grade";

$result = mysql_query($query) or die('Query failed: ' . mysql_error());

while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
	foreach($row as $cname => $cvalue){
		print "$cname: $cvalue\t";
	}
	echo "<br/>\n";
}

mysql_close($link);
?>
