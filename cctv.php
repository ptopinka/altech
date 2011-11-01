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
          <h3>Uzavřené televizní okruhy – CCTV</h3>

        Systémy CCTV jsou vhodné především jako podpora klasické EZS, v některých speciálních případech však může elektronické videostřežení
        část úloh EZS přímo převzít. Vedle známých aplikací v obchodních domech videotechnika slouží zejména v oblasti venkovních ochran 
        ve spojení s prostředky obvodové ochrany. Hlídací služba pak nemusí ověřovat příčinu poplachu přímo na místě, 
        ale může pomocí automaticky zapnuté kamery a osvětlení pozorovat konkrétní prostor bez rizika ohrožení osob.		    
        <div id="kamera">
          <img src="img/kamera.png"/>
        </div>
		  </div> <!-- end obsah-->
 
  </div>  <!-- konec content  -->



	<div id="footer">
	 
		<?php
		  printFooter();
		?>
	</div>
 
</body>	
	


