<h2>SHA 1 Breaker</h2>
<?php

	$w = mysql_real_escape_string(htmlspecialchars($_GET['sha1']));
  
	if($w != '')
	{
		$retour = false;
  		$retour = mysql_query("SELECT * FROM sha1 WHERE sha1='$w';");
		
		if($row = mysql_fetch_assoc($retour))
		{
			echo "<p>Le passe est d&eacute;j&agrave; dans la base. Sorry</p>";
		}
		else
		{
		$wm = sha1($_GET['sha1']);
		mysql_query("INSERT INTO sha1 VALUES('','$w','$wm') ") or exit(mysql_error());
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