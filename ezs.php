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
    		  <h2>Zabezpečovací signalizace EZS</h2>
    					<h3>Zabezpečovací technika</h3>
    					Neustálý nárůst kriminality v oblasti majetkové trestné činnosti
    					klade čím dál větší požadavky na ochranu majetku.</br></br>

    					<h3>Zabezpečovací signalizace</h3>

    					Nejrozšířenější a při správné volbě zabezpečovací techniky i
    					nejefektivnější způsob ochrany majetku je instalace elektrické
    					zabezpečovací signalizace (EZS).</br>
    					Provádíme projektování a montáže zabezpečovacích systémů pro všechny
    					druhy objektů. </br>Vždy s ohledem na požadavky zákazníka, objektivní
    					potřeby a finanční možnosti.</br>
    					Napojujeme zabezpečené objekty na pulty centrální ochrany.
    					Poradenskou činností chceme zabránit použití nevhodné zabezpečovací
    					techniky. Námi dodané systémy EZS jsou z produkce renomovaných
    					společností </br>a jedná se výhradně o technologie s osvědčením z
    					akreditovaných laboratoří EZS a certifikovaných Českou asociací
    					pojišťoven či Národním bezpečnostním úřadem.



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