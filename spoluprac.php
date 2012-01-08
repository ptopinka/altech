<?php 
  require("functions.php");
 ?>
 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html>
<head>
		<?php
		printMeta () ;
		?>
  <?php
    printTitle();
  
    includeCSSJS();
  ?>
</head>


<body>
  <div id="head-container">
      <?php
        printHeader();
      ?>
		</div>


  </div>
  <div id="navigation-container">
  	<div id="navigation">
    </div>
  </div>
  <div id="content-container">
  	<div id="content-container2">
  		<div id="content-container3">

  			<div id="aside">
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
   
 


  			</div>
  		</div>
  	</div>
  	<div id="footer-container">
  		<div id="footer">
  			<?php
    		  printFooter();
    		?>
  		</div>
  	</div>
  </div>
</body>
</html>