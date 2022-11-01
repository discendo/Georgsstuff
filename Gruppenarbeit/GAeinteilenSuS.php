<?php
//  $pdo = new PDO('mysql:host=localhost;dbname=schule', 'root', '');
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
	
	
<?php


if(isset ($_GET['name'])) 
  {
    $name = $_GET['name'];
	$gruppe = $_GET['gruppe'];
	
	
	//Wie viele Teilnehmer hat die Gruppe schon?
	$statement = $pdo->prepare("SELECT COUNT(*) AS anzahlgruppe FROM gruppenuser WHERE gruppe = ?");
    $statement->execute(array($gruppe));  
    $row = $statement->fetch();
	
    if ($row['anzahlgruppe'] >= 5)
         {
	        echo"<h1>Die maximale Teilnehmerzahl ist leider schon erreicht</h1>";
			
		 }
	
    else {	
	        //Gibt es den Namen schon? Wenn ja Gruppe ändern, wenn nein neu eintragen
			$statement = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM gruppenuser WHERE name = ?");
			$statement->execute(array($name));  
			$row = $statement->fetch();
			
			  if ($row['anzahl'] == 0)
				 {
					
					$statement1 = $pdo->prepare("INSERT INTO gruppenuser (name, gruppe) VALUES (?,?)");   
					$statement1->execute(array($name, $gruppe)); 

				  } 
			  else{
				  $statement = $pdo->prepare("SELECT * FROM gruppenuser WHERE name = ?");
				  $statement->execute(array($name)); 
				  while($row = $statement->fetch()) {
					$personenid = $row['personenid'];
					};
				 
				  $statement = $pdo->prepare("UPDATE gruppenuser SET gruppe = ? WHERE personenid = ?");
				  $statement->execute(array($gruppe, $personenid));

			  }
	
		$_SESSION['name'] = $name;
		$_SESSION['gruppe'] = $gruppe;
		$_SESSION['arbeitsname'] = "LGS";  
	  
	}  
	  
  }





?>	

<h1>Gruppeneinteilung</h1>

<form action="" method = "GET">
		
	
	
	
	<p class="f">Name:
	<input type="text" name="name">
	</p>
	Achtung! Der Name muss eindeutig sein,<br> auch wenn es mehrere Personen mit gleichem Vornamen gibt! <br>
Nach dem Absenden kann die Gruppe noch geändert werden, bzw neue Personen hinzugefügt werden!	
	<p class="f">Gruppe:
	    <input type="text" name="gruppe">
	    </p>		
	    	<button >Absenden!</button>
			
		</p>
		
	
	
	</form>


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

<form action="GAarbeitsphaseSuS.php" method = "POST">
		  
	    </p>		
	    	<button name = 'Button'>Arbeitsauftrag</button>
			<input type="hidden" id ="arbeitsname" name="arbeitsname"  value="LGS">
		</p>

</form>


</body>
</html>