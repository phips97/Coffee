<!-- DOCTYPE -->
<!DOCTYPE html>
<html lang="de">
<head>
<title>Kaffeeapp</title>
<!-- Benötigte Meta Tags -->
<meta charset="utf-8">
<meta name="author" content="">
<link rel="shortcut icon" type="image/x-icon" href="/coffee/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<!-- Schriften -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- JavaScript -->
<link rel="javascript" href="js/tether.min.js">
</head>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="heading text-center">
<?php 
    $_db_host = "localhost";
    $_db_datenbank = "coffee"; 
    $_db_username = "root"; 
    //PP: Wichtig: Hier das Passwort des jeweiligen Servers einfuegen
    $_db_passwort = "passwort"; 
    # Datenbankverbindung herstellen 
    $link = mysqli_connect($_db_host, $_db_username, $_db_passwort, $_db_datenbank);
    
    $_email = $_POST["email"];
    $_passwort = $_POST["psw"];
    # Befehl für die MySQL Datenbank
    $_sql = "SELECT * FROM lehrer WHERE
    email='$_email' AND
    passwort='$_passwort'";
    $result = mysqli_query($link, $_sql);
    $anzahl = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    //Wenn ein Datensatz gefunden wurde
    if ($anzahl > 0 && $_email != 'admin')
    {
    echo "<br><p class='begruessung'>Hallo ". "$row[vorname] " . "$row[nachname]</p>";
    echo "Guthaben: ";
    echo "$row[guthaben_cent]" . " Cent</br>";
    
    echo "<br><select>";
    
    $sqldropdown = "SELECT name,preis_cent FROM kaffee";
    $result = mysqli_query($link, $sqldropdown);
    while($rowdropdown = mysqli_fetch_assoc($result)) 
    {
    	echo "<option>" . $rowdropdown['name'] . ", Preis: ".  $rowdropdown['preis_cent']. " Cent" ."</option>";
    }
	echo "</select></br>"; 
	//Buttons
	echo "<br><button type='button' id ='trinken' class='button'><i class='fa fa-coffee'></i> Kaffee trinken</button>";
	echo "<button type='button' id='auffuellen' class='button'><i class='fa fa-money'></i> Guthaben auff&uuml;llen</button>";
	echo "<button type='button' id='statistik' class='button'><i class='fa fa-bar-chart'></i> Statistik</button></br>";
    }
    //Admin Case
    elseif ($_email == 'admin' && $anzahl > 0)
    {
    	header('Location:admin.php');
    }
    
    //Falls kein passender Datensatz gefunden wurde
    else 
    {
    	header('Location:login.php');
    	//echo "Kein Eintrag gefunden";
    }
?>
