<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
 
<?php 
  require("functions.php");
 ?>

<head>
		<?php
		printMeta () ;
		?>
  <?php
    printTitle();
  
    includeCSS_JS();
  ?>


</head>

<body>

	
		<?php
		  printHeader();
		?>
	
	
	<div id="vataheader">
	</div>
	<div id="wataheader">
	</div>
	<div id="vatabody">
	</div>
	<div id="watabody">
	</div>
	<div id="vatafoot">
	</div>
	<div id="watafoot">
	</div>
	
	<div id="pmenu">
		<?php
		  printMenu();
		?>
	
				
	</div>

		<div id="content">

 
		  
		  <div class="obsah">  
		  <h2>ALTECH SERVIS s.r.o. je dodavatelem 
			technologie CCTV a EZS od předních světových výrobců: 
			</h2>
			V oblasti CCTV to jsou: 	    	SONY, AXIS, ACTi, VIVOTEK, PANASONIC, SAMSUNG, IQinVision.</br>
 
			V oblasti EZS to jsou:		        PARADOX, Honeywell, DSC, TEXECOM, OPTEX, ARITECH.</br>
			</br>
			ALTECH SERVIS s.r.o. dále působí jako servisní organizace pro řadu velkých firem </br>v oblasti ochrany majetku a osob, například: ABL a.s., SV-AGENCY s.r.o., ELVIA spol. s r.o., COMINFO. a.s..
		 
		    
		  </div> <!-- end obsah-->
  		
		
  </div>  <!-- konec content  -->



	<div id="footer">

		<?php
		  printFooter();
		?>
	</div>
 
</body>	
	


