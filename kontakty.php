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
    		    <h3>Kontakty</h3>
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