<h2>SHA 1 BREAKER</h2>
<p>
<?php
$w = mysql_real_escape_string(htmlspecialchars($_GET['sha1']));
$res = '';
$r1 = mysql_query("SELECT * FROM sha1 WHERE mot='$w'");
while($s1 = mysql_fetch_array($r1) )
{
	$res = $s1['sha1'] . "<br>";
}
if($res == '')
{
	echo 'Hash non trouv&eacute; pour ' . $w;
}
else
{
	echo 'Le pass qui correspond &agrave;<br />' . $w . '<br />est ' . $res;
}

?></p>