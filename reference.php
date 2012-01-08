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

    		  <div class="obsah">  <h2>Výběr z Referencí </h2>
    		  <div style="padding:0px 20px 20px 60px;">

    		   <table style="position:relative; float: center">    <!--TAKE NEFUNGUJE-->
    		   <!--<col style="text-align:center"><col style="text-align: left">    NEFUNGUJE PROC????     -->
    				<tr> 
    					<td><b>Řízení Letového Provozu ČR</b></td><td>- dodávky CCTV, EZS a PC techniky</td>
    				</tr>
    				<tr> 
    					<td><b>Hotel Hoffmeister</b></td><td>- instalace CCTV a EZS </td>
    				</tr>
    				<tr> 
    					<td><b>Obchodní Centrum Vinice</b></td><td>- instalace CCTV</td>
    				</tr>
    				<tr> 
    					<td><b>Plastic Technologies & Products</b></td><td>- instalace EZ</td>
    				</tr>
    				<tr> 
    					<td><b>K-Game - herny</b></td><td>- instalace CCTV</td>
    				</tr>
    				<tr> 
    					<td><b>Radio Svobodná Evropa, Praha</b></td><td>- spolupráce, instalace CCTV a EZS</td>
    				</tr>
    				<tr> 
    					<td><b>Česká produkční 2000, a.s.</b></td><td>- instalace CCT</td>
    				</tr>
    				<tr> 
    					<td><b>Rols Royce int.</b></td><td>- instalace EZS</td>
    				</tr>
    				<tr> 
    					<td><b>Global Travel - síť směnáren</b></td><td>- instalace CCTV a EZS</td>
    				</tr>
    				<tr> 
    					<td><b>ILV s.r.o.</b></td><td>- dodávka EZS a CCT</td>
    				</tr>
    				<tr> 
    					<td><b>Zentiva a.s.</b></td><td>- instalace EZS, spolupráce</td>
    				</tr>
    				<tr> 
    					<td><b>Globus ČR, obchodní řetězec</b></td><td>- dodávka EZS</td>
    				</tr>
    				<tr> 
    					<td><b>Metrostav a.s.</b></td><td>- spolupráce, dodávky nadstandardu</td>
    				</tr>
    				<tr> 
    					<td><b>Würth, spol. s r.o. - ČR</b></td><td>- instalace CCTV</td>
    				</tr>
    				<tr> 
    					<td><b>Nestle Orion</b></td><td>- spolupráce</td>
    				</tr>
    				<tr> 
    					<td><b>DHL Praha Ruzyně</b></td><td>- dodávka kamerového systému</td>
    				</tr>
    				<tr> 
    					<td><b>Městská Policie Jirkov</b></td><td>- spolupráce a dodávky při realizaci kamerového sytému</td>
    				</tr>
    				<tr> 
    					<td><b>Rolls Royce int. ltd.</b></td><td>- instalace EZS</td>
    				</tr>
    				<tr> 
    					<td><b>SCA Hygiene Products, s.r.o.</b></td><td>- instalace CCTV</td>
    				</tr>
    				<tr> 
    					<td><b>Alfa Prague - síť směnáren</b></td><td>- instalace CCTV a EZS</td>
    				</tr>
    				<tr> 
    					<td><b>VÚMCH Praha</b></td><td>- dodávka EPS</td>
    				</tr>
    				<tr> 
    					<td><b>Fotovoltaické elektrárny (30 obj.)</b></td><td>- instalace CCTV a perimetrické EZS</td>
    				</tr>
    				<tr> 
    					<td><b></b></td><td></td>
    				</tr>
    			</table>
    			</div>

    		  </div> <!--end obsah-->


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