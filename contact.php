<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="Glenn,Programmeren,Thomas More,Graduaat,C#,C++,PHP,HTML,JS,Van den Heuvel,Portfolio">
<meta name="description" content="Zoekt u een programmeur? Op deze website vindt u een interessant portfolio van Van den Heuvel Glenn. Graduaatopleiding in Programmeren, Ready for the job.">
<title>Portfolio Glenn [CONTACT]</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>
 

<body>

<section class="start" >  
    
      
	<ul id="nav">
		<li><a href="index.html">Start</a></li>
        <li><a href="cv.html">Curriculum Vitae</a></li>
        <li><a href="ervaring.html">Ervaring</a></li>
        <li><a href="hobby.html">Hobby's / Interesses</a></li>
		<li><a href="contact.php">Contact</a></li>
      </ul>
    
	</section>
	
	<section class="logo">
    <h1 class="logo">Van den Heuvel <span class="vet">Glenn</span></h1>
    <p class="logo">Klaar om de wereld van IT te betreden</p>
  </section>
    
	<section class="introductie">
	<h2>Contact</h2>
	
    		 <?php
		if($error != null)
		{
		?>
		<p align="center">
		<table align="center" border="0" width="400" cellspacing="0" cellpadding="0" bgcolor="#FF0000" id="table4">
		<tr>
		<td align="center" bordercolor="#FF0000">De volgende fouten 
		traden op:<br>
		</p>		
		<?php
		echo($error);
		?>		
			
		</td>
		</tr>
		</table>
		
		<?php 
		}
		?>
        
<p class="style8" align="center">Uw ip-adres is  
<?php 
echo($_SERVER["REMOTE_ADDR"]); 
?>
. </p>
<form action="mail.php" method="post" nctype="application/x-www-form-urlencoded" name="pm" id="pm" >

<p class="style1" align="center">Voer uw naam in:  <span class="style7">* ( min. 4 tekens ) </span><br />
<input name="naam" type="text" id="naam" />
</p>
 <p class="style1" align="center">Voer uw email-adres in:  <span class="style7">* ( min. 5 tekens ) </span><br />
<input name="email" type="text" id="email" />
</p>
<p class="style1" align="center">
Voer uw bericht in: <span class="style7">* ( min. 10 tekens )</span><br />
<textarea name="bericht" cols="40" rows="10" id="bericht" ></textarea>

 <table align="center">
 
</table>

<p align="center">

<input name="submit" type="submit" value="Verzenden" class="knop" />
<input type="reset" value="Reset"  />

</form>
	
	
	<section class="einde">
    <p class="einde" id="white">&copy; Van den Heuvel Glenn 2023</p>
    </section>
		

</body>
</html>
