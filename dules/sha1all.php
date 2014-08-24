<h2>SHA 1 DB</h2>
<p>
<?php
$r = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM sha1');
$donnees = mysql_fetch_array($r);
echo "<b>Hash stock&#233;s :&nbsp;".$donnees['nbre_entrees']."</b><br><br>";


$r2 = mysql_query("SELECT * FROM sha1");
while($r1 = mysql_fetch_array($r2) )
{
echo $r1['sha1'] . "&nbsp;" . $r1['mot']."<br>\n";
}
?>
</p>
