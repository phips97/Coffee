<!-- DOCTYPE -->
<!DOCTYPE html>
<html lang="de">
<head>
<title>Kaffeeapp</title>
<!-- Benötigte Meta Tags -->
<meta charset="utf-8">
<meta name="author" content="">
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie-edge">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
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
<i class="fa fa-coffee" aria-hidden="true"></i>
<?php 
############################################################################
##  HIER WERDEN DIE EINGEGEBENEN WERTE INKL. IP IN DATENBANK GESPEICHERT  ##
##EINGETRAGEN WERDEN DIESE IM SQL SERVER - DATENBANK: kaffeeapp##
############################################################################
$con =mysqli_connect("", "root", "PASSWORT", "kaffeeapp");
$sql = "Select * from lehrer";
$datenbank_anzeige = mysqli_query($con, $sql);
$row = mysqli_fetch_array($datenbank_anzeige);
echo "<br>Guten Tag, $row[vorname] $row[nachname]!</br>";
echo "Ihr aktuelles Guthaben betr&auml;gt: $row[guthaben_cent] Cent.";
echo $lehrer_vorname;
?>