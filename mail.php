<?php

$email = "vandenheuvelglenn@yahoo.com";
$ea = $_POST['email'];
$bericht1 = $_POST['bericht'];

$naam = $_POST['naam'];
$naam = strip_tags($naam);
$naam = addslashes($naam);

if (!empty($naam))
{
$ea = strip_tags($ea);
$ea = addslashes($ea);
$bericht = strip_tags($bericht1);
$bericht = addslashes($bericht);
$bericht = $naam . "(" .$ea . ") heeft het volgende geschreven:
" . $bericht;
$oo = $naam . " " . $_POST['type'];
$oo = strip_tags($oo);
$oo = addslashes($oo);
$ond = "Contactpagina: " . $oo;

	if (strlen($naam) <= 3)
	{
	$error = $error . "Uw naam moet minstens 4 tekens bevatten.<br>";
	}

	if (strlen($bericht) <= 9)
	{
	$error = $error . "Uw bericht moet minstens 10 tekens bevatten.<br>";
	}
	
	if (strlen($ea) <= 4)
	{
	$error = $error . "U heeft geen geldig e-mailadres opgegeven.<br>";
	}
	
	
}


else
{
$error = $error . "U dient alle velden in te vullen!.<br>";
}


if($error != null)
{
require_once("contact.php");
}

else
{
mail($email,$ond,$bericht,"From: Glenn-TM.be");
$update = "Uw bericht werd succesvol verzonden.";
require_once("contact2.php"); 
}

?>