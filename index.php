<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alien Dynamics</title>
<link href="favicon.png" rel="icon"/>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>

<script type="text/javascript">
$(document).ready(function(){       
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 50) {
                    $("#fixed_header").removeClass().addClass("header_scroll");
                } else if(scroll_pos < 50) {
				   $("#fixed_header").removeClass().addClass("header_main");
					
                }
            });
        });
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onLoad="MM_preloadImages('images/featured/kampala_sun.png')">
<?php include_once"includes/header.php" ?>
<div class="main_top">


<div class="front">
<div class="words_main">
  <p>App Developement is us, </p>
  <span class="words_minor">Pc or Mobile</span>
</div>
<img src="images/icons/index_image.png" alt="web and mobile apps"/>
</div>
<a href="#"><div class="down_arrow"></div></a>
</div>
<main class="content_main">
<div class="featured_jobs">
<h1>Featured Work</h1>

<div class="featured_head_text">
We are a Kampala based web developement company with brilliant web designers and foreward thinking mobile app developers, check out our latest work!
</div>
<div class="featured_left">
<h2>kampala sun</h2>
<figure>
<img src="images/featured/da_sun.png" alt="kampala sun"/>
<figcaption ><a href="#">Ugandas Leading Online Tabloid</a></figcaption>
</figure>
</div>
<div class="featured_right">
<h2>vision group</h2>
<figure>
<img src="images/featured/vision_group.png" alt="kampala sun"/>
<figcaption ><a href="#">Corporate Website: Vision Group</a></figcaption>
</figure>
</div>
<div class="featured_left">
<h2>vision Printing</h2>
<figure>
<img src="images/featured/vision_printing.png" alt="kampala sun"/>
<figcaption ><a href="#">Corporate Website: Vision Printing</a></figcaption>
</figure>
</div>
<div class="featured_right">
<h2>Acacia School</h2>
<figure>
<img src="images/featured/acacia_school.png" alt="kampala sun"/>
<figcaption ><a href="#">School Website: Acacia School</a></figcaption>
</figure>
</div>
</div>
</main>

</body>
</html>
