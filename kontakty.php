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
	      <table border="0">
        <tr >
        <td class="tdcontacts">Sídlo firmy:</td>         <td> Rytířova 778<br/>
                                       Praha 4 - Kamýk<br/>
                                       14300</td>
        </tr> 
        <tr>                               
        <td class="tdcontacts">Provozovna:</td>          <td> V Občanském domově 1511/2A<br/>
                                       Praha 4 Nusle<br/>
                                       14000<br/>
                                       tel: +420 244 461 559
                                       </td>
        <tr/>
        <tr>                               
        <td class="tdcontacts">Vedení Společnosti:</td><td> Jednatel<br/>
                                       Jiří Svoboda<br/>
                                       mt.: +420 608 862 702
                                       </td>
        </tr>
        <tr>                               
        <td class="tdcontacts">Obchodní oddělení:</td><td> Obchodní ředitel<br/>
                                       Richard Jura<br/>
                                       mt.: +420 737 332 349
                                    </td>
        </tr>                            
	      </table>

		    
		  </div> <!-- end obsah-->
  		
		
  </div>  <!-- konec content  -->



	<div id="footer">

		<?php
		  printFooter();
		?>
	</div>
 
</body>	
	


