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
<!--
  			<div id="aside">
  				<h3>
  					Aside heading
  				</h3>
  				<p>
  					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.
  				</p>
  			</div>
-->
  			<div id="content_noleft">
    		  <div class="obsahnoleftmenu"> 
            <div>
              <div style="display:inline;" id="navindex1">
                <a href="ezs.php"><img src="img/navigace_ezs.png"></a>
              </div>
              <div style="display:inline;" id="navindex2">
                <a href="cctv_new.php"><img src="img/navigace_cctv.png"></a>
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
            <div id="contenttop"> <!-- vrstva pro kameru -->
              <img src="img/oko.png">
            </div>

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