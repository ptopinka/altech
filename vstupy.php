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

          <h2> Kontrola vstupu</h2>
        		  <span style="position: relative;float: right;padding:30px;margin-right:-40px;text-align:justify;"> 
                <img width="200px" src="img/brany.png"/>
               </span>

          		    <h3>Přístupové systémy</h3>

        					<div style="text-align:justify">

          				Úloha přístupových systémů: Stále častěji se objevují požadavky
          				firem a společností na zlepšení možnosti kontroly pracovní doby
          				zaměstnanců, jejich kontrolovaného pohybu po firmě či vypracování
          				mzdových listů. K těmto účelům jsou právě určeny přístupové systémy
          				(ACS).</br></br>

          				Systémy jsou složeny z řídicích jednotek (sbírají a vyhodnocují
          				data), čtecích jednotek (přijímají impuls od identifikačních prvků a
          				posílají informace do řídicích jednotek) a identifikačních prvků.
          				Identifikační prvky mohou být například ve formě čipů či kontaktních
          				nebo bezkontaktních karet. Karty mají rozměry klasických kreditních
          				karet a umožňují potisk (logo firmy, informace o držiteli, foto).</br></br>

          				Firma Altech Servis s.r.o. Vám nabízí projekci, montáž a servis
          				identifikačních systémů dle Vámi zadaných parametrů a požadavků.
          				Veškeré dodávané systémy jsou od renomovaných firem a námi
          				odzkoušené v praxi.
                  </div>

          				<h3>Nejčastější typy identifikačních systémů</h3>


          				Docházkové systémy využívají k identifikaci osob čipové karty nebo
          				kontaktní čipy. Speciální terminály registrují průchody jednotlivými
          				snímacími místy a získaná data jsou odtud přenášena do softwarové
          				aplikační části docházkového systému, kde dochází k jejich zpracování.</br></br>

          				Systémy kontroly vstupu slouží k řízenému přístupu do prostor
          				objektu dle stanovených oprávnění jednotlivých zaměstnanců. Při
          				načtení kódu čipu nebo karty dojde v systému k záznamu o této
          				události s potřebnými parametry (datum, místo, čas...) a poté je na
          				základě časových, topologických a dalších souvislostí ověřováno
          				oprávnění vstupu.</br></br>

          				Zajímavými aplikacemi pak jsou celková propojení jednotlivých
          				systémů (EZS, EPS, CCTV a ACS) do integrovaných celků s jednotnou
          				softwarovou nadstavbou.

          				<h3>Brány a vrata</h3>

          Nabízíme široký výběr produktů, od pohonu křídlových a posuvných
          bran, garážových vrat, okenic, závor </br>a automatických dveří, až po
          kompletní parkovací systémy, systémy kontrolovaného průchodu a
          kompletní příslušenství k automatickým pohonným systémům.
          Klademe vždy důraz na ochranu a bezpečnost provozu automatických
          dveřních a vratových systémů.



          <h3>Parkovací systémy</h3>

          Podnikové parkovací systémy jsou určeny pro zajištění vjezdů,
          případně výjezdů z objektů podnikových parkovišť, domovních dvorů,
          výrobních závodů a dalších prostor, kde je požadavek na uzavření
          objektu před vjezdem nežádoucích vozidel.

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