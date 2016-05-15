<?php
// PHP FILE FOR SSN PROFESSOR SEARCH

$ProSSN = $_POST['ProSSN'];
echo $ProSSN;
echo "<br/>\n";

$link = mysql_connect('ecsmysql', 'cs332s6', 'maifedei')
	 or die('Could not connect: ' . mysql_error());
echo 'connected successfully';
echo "<br/>\n";

mysql_select_db('cs332s6') or die('Could not select database');

$query = "SELECT Title, ClassRoom, Day, StartTime
	  FROM COURSE C, PROFESSOR P, SECTION S, MEETING_DAY MD
	  WHERE P.SSN = S.SSN AND MD.S_Num = S.S_Num AND P.SSN = '$ProSSN' 
	  AND S.C_Num = C.C_Num";
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
	foreach($row as $cname => $cvalue){
		print "$cname: $cvalue\t";
	}
	echo "<br/>\n";
}

mysql_close($link);
?>
