<?php

function printMeta() {
	print <<<END
		 <META HTTP-EQUIV="Pragma" CONTENT="no-cache"> 

		<META HTTP-EQUIV="Expires" CONTENT="-1"> 
		<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
END;
}


function printHeader() {
	print <<<END
  		 <div id="header">
          <div class="headerlogo">
  	    	  <a class="noborder1" href="index.php" alt="Svatebni dům Zbraslav" title="Svatební dům Zbraslav"><img src="img/web_zahlavi_logo.png"></a> 
          </div>
		      <div class="headerbanner">
		        <a class="noborder" href="index.php" alt="Svatebni dům Zbraslav" title="Svatební dům Zbraslav"><img src="img/header.png"></a>
          </div>

          
			    <div id="prouzek">
	          <div class="hornimenu"><a href="uvod.php"><img src="img/nav_uvod_dark.png"/></a></div>
	          <div class="hornimenu"><a href="onas.php"><img src="img/nav_onas_dark.png"/></a></div>
	          <div class="hornimenu"><a href="reference.php"><img src="img/nav_ref_dark.png"/></a></div>
	          <div class="hornimenu"><a href="spoluprac.php"><img src="img/nav_spoluprac_dark.png"/></a></div>
	          <div class="hornimenu"><a href="kamery.php"><img src="img/nav_kamery_dark.png"/></a></div>
	          <div class="hornimenu"><a href="kontakty.php"><img src="img/nav_kontakty_dark.png"/></a></div>
		        
			    </div>
			</div>
END;
}
function printMenu() {
	print <<<END
    <div id="sidetree">
    <div id="navigace1" class="leftmenu">
      <a href="ezs.php"><img src="img/nav_left_ezs.png"></a>
    </div>
    <div id="navigace2" class="leftmenu">
      <a href="cctv.php"><img src="img/nav_left_cctv.png"></a>
    </div>
    <div id="navigace3" class="leftmenu">
      <a href="eps.php"><img src="img/nav_left_eps.png"></a>
    </div>
    <div id="navigace4" class="leftmenu">
      <a href="vstupy.php"><img src="img/nav_left_vstupy.png"></a>
    </div>

    </div>

				
END;
}



function printTitle() {
	print <<<END
  	<title>Svatební dům Zbraslav</title>
END;
}



function printRightBanner() {

  print <<<END
    <div class="banner">
   		<a>
   						<img src="img/Pruhonice.png"
   								 height="200" width="200" />
       </a>
             Svatební festival v Průhonicích je skvělá akce kde si můžete prohlédnout vybrané kolekce našich předních návrhářů.
     </div>
END;
}



function printFooter() {
	print <<<END
      <p>Veroo (r)</p>
END;
}


function includeCSS_JS_noLeftMenu() {
	print <<<END

    <link href="css/layout_noleftmenu.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
    <script src="js/jquery/jquery.tpl_layout.js"></script>
    <script src="js/jquery/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/jquery/jquery.treeview.js" type="text/javascript"></script>

    <link rel="stylesheet" href="js/jquery/jquery.treeview.css" />
    <link rel="stylesheet" href="js/jquery/red-treeview.css" />
    <link rel="stylesheet" href="js/jquery/screen.css" />

      <script type="text/javascript" src="js/highslide/highslide.js"></script>		<!--FOTO ZOOM -->
    <link rel="stylesheet" type="text/css" href="js/highslide/highslide.css" />		<!--FOTO ZOOM -->

    <script>
    $.templateLayoutShowOnReady();


    	$(function() {
    		$.setTemplateLayout('css/layout_noleftmenu.css');
    	});
    	</script>

    <script type="text/javascript">													<!--FOTO ZOOM -->
        hs.graphicsDir = 'js/highslide/graphics/';
        hs.outlineType = 'rounded-white';
    </script>

      <script type="text/javascript">
           $(function(){

            $("#tree").treeview({
             collapsed: true,
       				animated: "medium",
       				persist: "location"
            });

            //$("#tree").treeview({collapsed:true})

           });

       	</script>

END;
} 

function includeCSS_JS() {
	print <<<END

<link href="css/layout.css" rel="stylesheet">
<link href="css/global.css" rel="stylesheet">


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
<script src="js/jquery/jquery.tpl_layout.js"></script>
<script src="js/jquery/jquery.cookie.js" type="text/javascript"></script>
<script src="js/jquery/jquery.treeview.js" type="text/javascript"></script>

<link rel="stylesheet" href="js/jquery/jquery.treeview.css" />
<link rel="stylesheet" href="js/jquery/red-treeview.css" />
<link rel="stylesheet" href="js/jquery/screen.css" />

  <script type="text/javascript" src="js/highslide/highslide.js"></script>		<!--FOTO ZOOM -->
<link rel="stylesheet" type="text/css" href="js/highslide/highslide.css" />		<!--FOTO ZOOM -->
  



<script>
$.templateLayoutShowOnReady();

	
	$(function() {
		$.setTemplateLayout('css/layout.css');
	});
	</script>
	
<script type="text/javascript">													<!--FOTO ZOOM -->
    hs.graphicsDir = 'js/highslide/graphics/';
    hs.outlineType = 'rounded-white';
</script>

  <script type="text/javascript">
       $(function(){

        $("#tree").treeview({
         collapsed: true,
   				animated: "medium",
   				persist: "location"
        });

        //$("#tree").treeview({collapsed:true})

       });

   	</script>


END;
}



?>