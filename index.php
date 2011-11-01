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
  
    includeCSS_JS_noLeftMenu();
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
		
	
				
	</div>

		<div id="content">

		  <div class="obsahnoleftmenu"> 
        <div>
          <div style="display:inline;" id="navindex1">
            <a href="ezs.php"><img src="img/navigace_ezs.png"></a>
          </div>
          <div style="display:inline;" id="navindex2">
            <a href="cctv.php"><img src="img/navigace_cctv.png"></a>
          </div>
        </div>
        <div>
          <div style="display:inline;" id="navindex3">
            <a href="eps.php"><img src="img/navigace_eps.png"></a>
          </div>
          <div style="display:inline;" id="navindex4">
            <a href="vstupy.php"><img src="img/navigace_vstupy.png"></a>
          </div>
        </div>
		  </div> <!-- end obsah-->
  		
		
  </div>  <!-- konec content  -->



	<div id="footer">
		<?php
		  printFooter();
		?>
	</div>
 
</body>	
	


