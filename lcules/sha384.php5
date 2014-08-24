<?php
	if(isset($_GET['text']))
	{
		echo hash('sha384',$_GET['text']);
	}
?>