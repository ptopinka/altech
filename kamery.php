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
		    <h3>Online kamery</h3>
        <a href="http://84.246.161.51/live/index.html">Panasonic Francouzská </a><br/>
        <a href="http://84.246.161.53/en/index.html">Sony Francouzská</a>
		    
		  </div> <!-- end obsah-->
  		
		
  </div>  <!-- konec content  -->



	<div id="footer">

		<?php
		  printFooter();
		?>
	</div>
 
</body>	
	


