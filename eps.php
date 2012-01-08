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
    		    <h2>Požární zabezpečení</h2>


    				<h3>Úloha a smysl požárního zabezpečení</h3>


    				Nedílnou součástí ochrany objektů je elektrická požární signalizace
    				(EPS), která slouží k včasnému odhalení začínajících požárů a
    				zabraňuje tak velkým majetkovým škodám. Naše firma provádí instalaci
    				a zajišťuje servis požárních systémů ve všech typech objektů -
    				průmyslové objekty, zdravotnická zařízení, hotely, památkové objekty
    				a rodinné domy. V době moderních technologií a schopností různých
    				systémů mezi sebou spolupracovat umožňují požární systémy mnoho
    				nadstavbových funkcí. Od základního spuštění samohasících zařízení,<br/>
    				signalizace na pult centrální ochrany Hasičského záchranného sboru,
    				až po automatické otevření únikových cest, vypnutí ohrožených
    				elektrických rozvodů či uzavření nejdůležitějších prostor a
    				zabránění tak šíření požáru.


    				<h3>Montáže požárního zabezpečení</h3>


    				Firma Altech Servis s.r.o. provádí projektování a montáže
    				elektrických požárních signalizací (EPS) dle platných norem ČSN-EN a
    				dle vyjádření hasičského záchranného sboru. Zároveň poskytujeme
    				možnost připojení objektu <br/>na pulty centrální ochrany. Dodáváme pouze
    				nejkvalitnější technologie renomovaných výrobců.

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