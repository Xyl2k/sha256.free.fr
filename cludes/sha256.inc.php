<h2>SHA-256 Breaker</h2>
<p>&nbsp;</p><?php /* -={-©¤==/=> Form de trouver un pass  <=\==¤©-}=-*/ ?>
	<form action="index.php" method="get">
		<p><b>Essayer de trouver l'&#233;quivalent texte  d'un sha256 :</b><br />
		<input type="text" name="sha256" />
        <input type="hidden" name="work" value="match" />
        <input type="submit" value="ok" />
        </p>
  	</form>
<p>&nbsp;</p>
<p>&nbsp;</p><?php /* -={-©¤==/=> Form de encrypter un pass  <=\==¤©-}=-*/ ?>
    <form action="index.php" method="get">
       	<p><b>Encrypter un mot en sha256  :</b><br />
	    <input type="text" name="sha256" />
        <input type="hidden" name="work" value="crypt" />
	    <input type="submit" value="ok" />
      	</p>
	</form>
<p>&nbsp;</p>
<p>&nbsp;</p><?php /* -={-©¤==/=> Form de ajouter un pass  <=\==¤©-}=-*/ ?>
	<form action="index.php" method="get">
		<p><b>Ajouter un mot (encrypt&#233; automatiquement dans la base) :</b><br />
  			<input type="text" name="sha256" />
            <input type="hidden" name="work" value="add" />
  			<input type="submit" value="ok" />
		</p>
	</form>
<?php include_once("buttons.inc.php"); ?>