<?php
$ProSSN = $_POST['ProSSN'];
echo $ProSSN;

//$ProSSN = mysql_real_escape_string($_POST['ProSSN']);

$link = mysql_connect('ecsmysql', 'cs332s6', 'maifedei')
	 or die('Could not connect: ' . mysql_error());
echo 'connected successfully';
mysql_select_db('cs332s6') or die('Could not select database');

//$query = "SELECT * FROM PROFESSOR WHERE SSN = '$ProSSN'";
$query = "SELECT Title, ClassRoom, Day, StartTime
	  FROM PROFESSOR P, SECTION S, MEETING_DAY MD, COURSE C
	  WHERE P.SSN = '$ProSSN' AND P.SSN = S.SSN AND MD.S_Num = S.S_Num AND C.C_Num = S.C_Num";  
$result = mysql_query($query) or die('Query failed: ' . mysql_error());



while($row = mysql_fetch_array($result)) {
echo $row['Title'] + ' ';
echo $row['ClassRoom'] + ' ';
echo $row['Day'] + ' ';
echo $row['StartTime'] + ' ';
echo "\r\n";
}

mysql_close($link);
?>
