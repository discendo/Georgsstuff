<!DOCTYPE html>

<?php
//  $pdo = new PDO('mysql:host=localhost;dbname=schule', 'root', '');
  $pdo = new PDO('mysql:host=rdbms.strato.de;dbname=DB3822391', 'U3822391', 'Kundenlog02!');

session_start();
?>

<html lang="de">


<head> 
    <meta charset="UTF-8">
 	<title>linkliste</title>
	<link href="../STYLES/styles.css" rel="stylesheet" type="text/css"/>
</head>


<body bgcolor = "#F5F6CE">

<?php

if (isset ($_POST['link'])) {
	$fach = $_POST['fach'];
	$bereich = $_POST['bereich'];
	$beschreibung = $_POST['beschreibung'];
	$link = $_POST['link'];
	$tag = $_POST['tag'];
	$statement = $pdo->prepare("INSERT INTO linkliste (fach, bereich, beschreibung, link, tag) VALUES (?,?,?,?,?)");   
    $statement->execute(array($fach, $bereich, $beschreibung, $link, $tag)); 

}



?>





<h1 class="f">Links verwalten</h1>
 
<h2> Neu einpflegen:</h2>
<br\><br\>	


<form action="Linkliste.php"  method="POST">
	
	

	<p class="f"> Auswahl Fach:
	
       <select name="fach" value = Mathematik >
	
		  <option>Mathematik</option>
		  <option>Religion</option>  
		  <option>Informatik</option>
	<!--	  <option></option>  -->
	
	 </select> 
</p>
<br>
<p class="f"> Auswahl Bereich:
	
       <select name="bereich" value = Anwendung >
	
		  <option>Anwendung / Werkzeuge</option>
		  <option>Unterrichtsmaterial</option>  
		  <option>Spiel und Spaß</option>  
		  <option>Sonstiges</option>   
		  <option>Wettbewerbe</option>  
		  <option>Filme: Doku</option>  
		  <option>Filme: Spielfilm</option>  
		  <option>Bücher: Sachbuch</option>  
		  <option>Bücher: Romane</option>  
	<!--	  <option></option>  -->
	
	 </select> 
</p>

<input type="text"     name="tag"> Tag <br><br>
	
	
       Beschreibung <br>
	   <textarea id="text"  name="beschreibung" cols="35" rows="4"></textarea> 	<br>
		
     	<input type="text"     name="link"> Link <br><br>
		
		
		<input type="submit"  value="Abschicken" formaction="Linkliste.php"  method="POST" >
        <input type="submit" value="Zurück"      formaction="Adminbereich.php"         ><br> <br>

	 
</form>


 <?php




$sql = "SELECT * FROM linkliste";
foreach ($pdo->query($sql) as $row) {
   echo $row['fach'];
   echo $row['bereich'];
   echo $row['tag'];
   echo $row['link']."<br /><br />";
}

 ?> 
   

</main>
  
</body>

</html>
