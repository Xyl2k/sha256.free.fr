<style type="text/css">
<!--
.Style1 {color: #FFFF00}
.Style2 {
	color: rgb(51, 204, 0);
	font-size: 12px;
	font-family: "Lucida Console";
}
.Style3 {color: rgb(51, 204, 0)}

-->
</style>
<h2>Contribuer</h2>
<p>&nbsp;</p>
<p>  Vous pouvez nous aider &agrave; construire une base de donn&eacute;es de plus en plus grosse, 
  pour plus d'efficacit&eacute;.<br />
Juste en t&eacute;l&eacute;chargant et en ex&eacute;cutant un simple programme qui ajoutera des mots aux hasards dans notre base de donn&eacute;es </p>
<p>&nbsp;</p>
<p>Une capture d'&eacute;cran et disponible <a href="http://sha256.free.fr/site/design/images/ADD%20Breaker.png" class="Style1">ici</a><br />
Et le programme en libre t&eacute;l&eacute;chargement <a href="http://sha256.free.fr/site/download/SHA%20BREAKER.rar" class="Style1">ici</a></p>
<p>&nbsp;</p>
<p><span title="" hptip="Cette structure n'est pas possible. Ou bien le verbe doit &ecirc;tre conjugu&eacute;, par ex.: &lt;i&gt;il ne parl&lt;b&gt;ait&lt;/b&gt; pas&lt;/i&gt;, ou bien il faut mettre les deux &eacute;l&eacute;ments de n&eacute;gation devant le verbe, par ex.: &lt;i&gt;de &lt;b&gt;ne pas&lt;/b&gt; parler&lt;/i&gt;. A vous de v&eacute;rifier!">n'h&eacute;siter pas</span> <span title="La combinaison &lt;i&gt;&agrave; + le&lt;/i&gt; = &lt;i&gt;au&lt;/i&gt;, par ex.: &lt;i&gt;je vais &lt;b&gt;au&lt;/b&gt; magasin&lt;/i&gt;; la combinaison &lt;i&gt;&agrave; + les&lt;/i&gt; = &lt;i&gt;aux&lt;/i&gt;, par ex.:  &lt;i&gt;elle le donne &lt;b&gt;aux&lt;/b&gt; chiens&lt;/i&gt;.">&agrave; le</span> laiss&eacute; le plus longtemps possible en phase d'ajout de mot </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Merci de votre soutien<br />
  Edit:<br />
  <?php /*
page : index.php?pg=contrib
le code php est permis et la connexion mysql est automatique.*/?>
Un autre word adder a &eacute;t&eacute; cod&eacute; en php:</p>
<div class="source">
  <pre class="Style11"><span style="color: rgb(51, 204, 0);">

</span><p><span class="Style2">/*<br />EsSandRe - zenk-security.com<br />*/</span></p><span class="Style3">&lt;?php<br />
    //<br />
  $dico = &quot;MyDico.dic&quot;; //Le dico</span></pre>
  <p class="Style3">$type= array(&quot;sha0&quot;,&quot;sha1&quot;,&quot;sha256&quot;,&quot;sha384&quot;,&quot;sha512&quot;); // Les diff&eacute;rents type &agrave; importer<br />
  </p>
  <p class="Style3">function Add_db($type,$word){</p>
  <p class="Style3"> $data = &quot;GET /site/index.php?&quot;.$type.&quot;=&quot;.$word.&quot;&amp;work=add HTTP/1.1\r\n&quot;;<br />
    $data .= &quot;Host: sha256.free.fr\r\n&quot;;<br />
    $data .= &quot;User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.9.1.9) Gecko/20100315 Firefox/3.5.9 (.NET CLR 3.5.30729)\r\n&quot;;<br />
    $data .= &quot;Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n&quot;;<br />
    $data .= &quot;Accept-Language: fr,fr-fr;q=0.8,en-us;q=0.5,en;q=0.3\r\n&quot;;<br />
    $data .= &quot;Accept-Encoding: gzip,deflate\r\n&quot;;<br />
    $data .= &quot;Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7\r\n&quot;;<br />
    $data .= &quot;Keep-Alive: 300\r\n&quot;;<br />
  $data .= &quot;Connection: keep-alive\r\n\r\n&quot;;</p>
  <p class="Style3"> $sock = fsockopen(&quot;212.27.63.136&quot;,80);</p>
  <p class="Style3"> if(!$sock){<br />
    print &quot;Connexion au serveur impossible.\n&quot;;<br />
    exit;<br />
  }</p>
  <p class="Style3"> fputs($sock,$data);<br />
    <br />
    fclose($sock);<br />
  }</p>
  <p class="Style3">$file = fopen($dico,&quot;r&quot;);</p>
  <p class="Style3"> if (!$file){<br />
    print &quot;Le fichier &quot;.$dico.&quot; n'a pas pu &ecirc;tre ouvert.\n&quot;;<br />
    exit;<br />
  }</p>
  <p class="Style3"> while (!feof($file)){</p>
  <p><span class="Style3"> $word = fgets($file,100);<br />
    <br />
    foreach ($type as $shaX){<br />
    <br />
    Add_db($shaX,trim($word));<br />
    <br />
    }<br />
    }<br />
    fclose($file);<br />
    ?&gt;</span><br />
  </p>
</div>

