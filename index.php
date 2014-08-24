<?php
	require('conf.inc.php');
	require('lib.inc.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
   <head>
        <title>SHA-BREAKER - Unlock your life !</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="robots" content="index, follow, all" />
		<meta name="description" content="SHA-BREAKER - Crack your SHA hashs !" />
		<meta name="keywords" content="Secure Hash Algorithm, Message-Digest algorithm, SHA reverser, Reverser, SHA0 online cracker, SHA1 online cracker, SHA256 online cracker, SHA0 breaker, SHA1 breaker, SHA256 breaker, SHA, SHA1, SHA0, SHA256, MD5, SHA0 cracker, SHA1 cracker, SHA256 cracker, hashs, hash, cryptography, cryptographic hash function, Cryptographie, Xylitol" />
		<meta name="author" content="Xylitol" />
		<meta name="category" content="internet" />
		<meta http-equiv="Content-Language" content="fr-FR" />
           <meta http-equiv="Content-Script-Type" content="text/javascript" />
           <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta name="DC.Language" scheme="RFC3066" content="fr" />
        <link rel="stylesheet" href="design/style.css" type="text/css" media="screen" title="Normal" />
</head>
<body>
	<div id="global">
    	<h1 id="header">Le titre de votre site</h1>
		<div id="sidebar">
        	<h2>SHA-Breaker:<br /></h2>
			<ul>
				<li><a href="index.php?pg=sha0">SHA-0 cracker </a></li>
				<li><a href="index.php?pg=sha1">SHA-1 cracker</a></li>
				<li><a href="index.php?pg=sha256">SHA-256 cracker</a></li>
                <li><a href="index.php?pg=sha384">SHA-384 cracker</a></li>
                <li><a href="index.php?pg=sha512">SHA-512 cracker</a></li>
			</ul>
            <h2>Le site:<br /></h2>
            <ul>
            	<li><a href="index.php?pg=contrib">Contribuer au projet</a><br /><a href="index.php?pg=userbars">Userbars</a><br /><a href="index.php?pg=contact">Contact</a><br /><a href="index.php?pg=remerciements">Remerciements</a><br /><a href="index.php?pg=statistiques">Statistiques</a></li>
			</ul>
            <h2>Langage:</h2>
            <ul>
           	  <li><br />
                  <a href="http://sha256.free.fr/site/">FR: French &nbsp;<img src="design/images/France.gif" alt="France" width="18" height="12" border="0" /></a><br />
				  <a href="http://sha256.free.fr/site/English">EN: English </span><img src="design/images/United-Kingdom.gif" alt="United-Kingdom" width="18" height="12" border="0" /></a></li>
	        </ul>
           <h2>Link:</h2>
            <ul>
           	  <li><br />
                  <a href="http://xylitol.free.fr/site/">Xylitol</a></li>
	        </ul>
		</div>
		<div id="contenu">
			<?php
			//surprotection anti xyl'xss
			if( (isset($_GET['sha0']) or isset($_GET['sha1']) or isset($_GET['sha256']) or isset($_GET['sha384']) or isset($_GET['sha512'])) and isset($_GET['work']))
			{
				if(isset($_GET['sha0']))	{ $sha = 'sha0';	$shaRequest = htmlspecialchars($_GET['sha0']); } else
				if(isset($_GET['sha1']))	{ $sha = 'sha1';	$shaRequest = htmlspecialchars($_GET['sha1']); } else
				if(isset($_GET['sha256']))	{ $sha = 'sha256';	$shaRequest = htmlspecialchars($_GET['sha256']); } else
				if(isset($_GET['sha384']))	{ $sha = 'sha384';	$shaRequest = htmlspecialchars($_GET['sha384']); } else
				if(isset($_GET['sha512']))	{ $sha = 'sha512';	$shaRequest = htmlspecialchars($_GET['sha256']); }
				
				$work = htmlspecialchars($_GET['work']);
				
				if(!(($work == 'match') or ($work == 'crypt') or ($work == 'add'))) exit('failled');
				
				if(file_exists('dules/' . $sha . $work . '.php')) require('dules/' . $sha . $work . '.php');
				else exit("failled");
			}
			else
			{
				$page = mysql_real_escape_string(htmlspecialchars($_GET['pg']));
				if(file_exists('cludes/' . $page . '.inc.php'))
				{
					require('cludes/' . $page . '.inc.php');
				}
				else
				{	if(file_exists('dules/' . $_GET['hash'] . $page . '.php'))
					{
						require('dules/' . $_GET['hash'] . $page . '.php');
					}
					else
					{
						require('cludes/index.inc.php');
					}
				}
			}
			?>
			<p>&nbsp;</p>
		</div>
		<p id="footer"> - Design par CatWeb -</p>		
	</div>
</body>
</html>
