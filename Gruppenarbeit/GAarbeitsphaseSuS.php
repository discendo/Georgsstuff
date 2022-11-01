<?php
//$pdo = new PDO('mysql:host=localhost;dbname=schule', 'root', '');
   $pdo = new PDO('mysql:host=rdbms.strato.de;dbname=DB3822391', 'U3822391', 'Kundenlog02!');
session_start();
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
	
	
<?php


$name = $_SESSION['name'];
		$gruppe = $_SESSION['gruppe'];
		$arbeitsname = 'LGS';


echo "<h2>Hallo $name!</h2>";

  $statement = $pdo->prepare("SELECT * FROM gruppenarbeit WHERE arbeitsname = ?");
				  $statement->execute(array($arbeitsname)); 
				  while($row = $statement->fetch()) {
					$material = $row['material'];
					$auftrag = $row['auftrag'];
					$zeit = $row['zeit'];
					$anmerkung = $row['anmerkung'];
					echo "Ihr braucht folgendes Material: $material<br>";
					echo "Der Aufrag lautet: $auftrag <br>";
					$bildpfad = "Bilder\lgs$gruppe.png";
					echo "<p><center><img src='$bildpfad' /></p>";
					echo "$anmerkung<br>";
					echo "Zeit: $zeit Minuten<br>";
					};


?>	




<?php		  
echo "Deine Gruppe $gruppe :";
   
            $statement = $pdo->prepare("SELECT * FROM gruppenuser WHERE gruppe = :gruppe");  
			$statement->execute(array('gruppe' => $gruppe));   
			 
			   while($row = $statement->fetch()) {
			     $name = $row['name'];
				 echo "$name ";
                }
	        
?>

<form action="GAeinteilenSuS.php" method = "GET">
		  
	    </p>		
	    	<button>Zurück</button>
		</p>

</form>


</body>
</html>