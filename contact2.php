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
		if($update == null)
		{
		?>
		<table align="center" border="0" width="400" cellspacing="0" cellpadding="0" bgcolor="#FF0000" id="table4">
		<tr>
		<td align="center" bordercolor="#009900" bgcolor="#FF0000"><strong>Door een onbekende fout werd u bericht niet verstuurd. </strong> 
		
				
		<?php
		}		
		if($update != null)
		{
		?>
		
<table border="0" align="center" width="400" cellspacing="0" cellpadding="0" bgcolor="#FF0000" id="table4">
						<tr>
				<td align="center" bordercolor="#009900" bgcolor="#009900">
				<?php
				echo($update);
		}
		
				?>	
              
		    </tr>
		</table>
     
      <p>&nbsp;</p></td>
  </tr>
</table>


	
	
	<section class="einde">
    <p class="einde" id="white">&copy; Van den Heuvel Glenn 2023</p>
    </section>
		

</body>
</html>
