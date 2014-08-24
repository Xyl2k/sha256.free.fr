<h2>SHA 256 Breaker</h2>
<?php

	$w = mysql_real_escape_string(htmlspecialchars($_GET['sha256']));
  
	if($w != '')
	{
		$retour = false;
  		$retour = mysql_query("SELECT * FROM sha256 WHERE value='$w';");
		if($row = mysql_fetch_assoc($retour))
		{
			echo "<p>Le passe est d&eacute;j&agrave; dans la base. Sorry</p>";
		}
		else
		{
		$wm = SHA256::hash($_GET['sha256']);
		mysql_query("INSERT INTO sha256 VALUES('','$w','$wm') ") or exit(mysql_error());
?>
<p>Le mot <?php echo $w; ?> et son hash a &eacute;t&eacute; rajout&eacute; &agrave; la base de donn&eacute;es.</p>
<?php
		}
	}
	else
	{
			echo "<p>Charactere(s) invisible(s).</p>";
	}
?>