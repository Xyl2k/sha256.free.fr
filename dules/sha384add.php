<h2>SHA 384 Breaker</h2>
<?php

	$w = mysql_real_escape_string(htmlspecialchars($_GET['sha384']));
  
	if($w != '')
	{
		$retour = false;
  		$retour = mysql_query("SELECT * FROM sha384 WHERE value='$w';");
		if($row = mysql_fetch_assoc($retour))
		{
			echo "<p>Le passe est d&eacute;j&agrave; dans la base. Sorry</p>";
		}
		else
		{
		$wm = sha384($_GET['sha384']);
		mysql_query("INSERT INTO sha384 VALUES('','$w','$wm') ") or exit(mysql_error());
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