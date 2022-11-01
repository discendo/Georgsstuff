

<?php
//$pdo = new PDO('mysql:host=localhost;dbname=schule', 'root', '');
   $pdo = new PDO('mysql:host=rdbms.strato.de;dbname=DB3822391', 'U3822391', 'Kundenlog02!');
session_start();


		$name = $_SESSION['name'];
		$gruppe = $_SESSION['gruppe'];
		$arbeitsname = 'LGS';
	    
 
?>

<!DOCTYPE html>
<html>
   <head>
        <meta charset="utf-8"/>
	   <link rel="stylesheet" href="styles.css">
		<title>Sahliger.net</title>
		<link rel="icon" type="image/png" href="../img/Icon.png">
   </head>
   
   <body style ="text-align: center ;">

<h1>Arbeitsphase</h1>
	
	<div id = "linkespalte">
<?php


  $statement = $pdo->prepare("SELECT * FROM gruppenarbeit WHERE arbeitsname = ?");
				  $statement->execute(array($arbeitsname)); 
				  while($row = $statement->fetch()) {
					$material = $row['material'];
					$auftrag = $row['auftrag'];
					$zeit = $row['zeit'];
					$anmerkung = $row['anmerkung'];
					echo "Ihr braucht folgendes Material: $material<br>";
					echo "Der Aufrag lautet: $auftrag <br>";
					for($i=1; $i<=6; $i++) {
						$bildpfad = "Bilder\lgs$i.png";
						echo "<span><img src='$bildpfad' ></span>";
					}
					echo "<br>$anmerkung<br>";
					echo "Zeit: $zeit Minuten<br>";
					};
?>	

</div>
<div id="rechtespalte">

<?php		  
	for($i=1; $i<=5; $i++) {
            $statement = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM gruppenuser WHERE gruppe = :gruppe");
			$statement->execute(array('gruppe' => $i)); 
			$row = $statement->fetch();
			if ($row['anzahl'] != 0){
			   echo "<h1>Gruppe $i: </h1>";
			   $statement = $pdo->prepare("SELECT * FROM gruppenuser WHERE gruppe = :gruppe");  
			   $statement->execute(array('gruppe' => $i));   
			 
			   while($row = $statement->fetch()) {
			     $name = $row['name'];
				 echo "$name ";
                }
	        }
    }
	        
?>

<form action="GAeinteilenSuS.php" method = "GET">
		  
	    </p>		
	    	<button>Zurück</button>
		</p>

</form>

<form action="GAende.php" method = "GET">
		  
	    </p>		
	    	<button>Präsentation</button>
		</p>

</form>


</div>

</body>
</html>