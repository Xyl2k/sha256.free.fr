<h2>Statistiques</h2>
<p>Il y a <b><?php
$total = 0;
$r = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM sha1');
$donnees = mysql_fetch_array($r);
$total += $donnees['nbre_entrees'];
echo $donnees['nbre_entrees'];
?></b> entr&eacute;es dans la base sha1</p>
<p>Il y a <b><?php
$r = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM sha256');
$donnees = mysql_fetch_array($r);
$total += $donnees['nbre_entrees'];
echo $donnees['nbre_entrees'];
?></b> entr&eacute;es dans la base sha256</p>
<p>Il y a <b><?php
$r = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM sha384');
$donnees = mysql_fetch_array($r);
$total += $donnees['nbre_entrees'];
echo $donnees['nbre_entrees'];
?></b> entr&eacute;es dans la base sha384</p>
<p>Il y a <b><?php
$r = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM sha512');
$donnees = mysql_fetch_array($r);
$total += $donnees['nbre_entrees'];
echo $donnees['nbre_entrees'];
?></b> entr&eacute;es dans la base sha512</p>
<p>Ce qui fait un total de : <b><?php echo $total; ?></b> entr&eacute;es</p>