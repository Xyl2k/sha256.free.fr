<?php
	if(!isset($_GET['sha'])) exit();

	require('conf.inc.php');
	require('lib.inc.php');

	$w = mysql_real_escape_string(htmlspecialchars($_GET['sha']));
  
	if($w != '')
	{
		//==================SHA 1
		$retour = false;
  		$retour = mysql_query("SELECT * FROM sha1 WHERE sha1='$w';");
		if($row = mysql_fetch_assoc($retour))
		{
			echo '0';
		}
		else
		{
			$wm = sha1($_GET['sha']);
			mysql_query("INSERT INTO sha1 VALUES('','$w','$wm') ") or exit(mysql_error());
			echo '1';
		}
		//==================SHA 256
		$retour = false;
  		$retour = mysql_query("SELECT * FROM sha256 WHERE value='$w';");
		if($row = mysql_fetch_assoc($retour))
		{
			echo '0';
		}
		else
		{
			$wm = sha256($_GET['sha']);
			mysql_query("INSERT INTO sha256 VALUES('','$w','$wm') ") or exit(mysql_error());
			echo '1';
		}
		//==================SHA 384
		$retour = false;
  		$retour = mysql_query("SELECT * FROM sha384 WHERE value='$w';");
		if($row = mysql_fetch_assoc($retour))
		{
			echo '0';
		}
		else
		{
			$wm = sha384($_GET['sha']);
			mysql_query("INSERT INTO sha384 VALUES('','$w','$wm') ") or exit(mysql_error());
			echo '1';
		}
		//==================SHA 512
		$retour = false;
  		$retour = mysql_query("SELECT * FROM sha512 WHERE value='$w';");
		if($row = mysql_fetch_assoc($retour))
		{
			echo '0';
		}
		else
		{
			$wm = sha512($_GET['sha']);
			mysql_query("INSERT INTO sha512 VALUES('','$w','$wm') ") or exit(mysql_error());
			echo '1';
		}
	}
	else
	{
			echo '0000';
	}
?>