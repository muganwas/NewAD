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

<link href="../css/main.css" rel="stylesheet" type="text/css">
<div class="header_main" id="fixed_header">
<a href="<?php echo $root_folder; ?>"><div class="logo"><img src="<?php echo $root_folder.'images/logos/logo1.png'; ?>" width="151" height="166" alt=""/></div></a>
<div class="main_nav">
<ul>
<li>
<a href="#">About</a>
</li>
<li>
<a href="#">Work</a>
</li>
<li>
Services
<div class="ul_li">
<ul>
<li>
<a href="<?php echo $root_folder.'web_design/';?>">Web Design</a>
</li>
<li>
<a href="#">Web Developement</a>
</li>
<li>
<a href="#">Website mentainance</a>
</li>
<li>
<a href="#">App Developement</a>
</li>
</ul>
</div>
</li>
<li>
<a href="#">Contact us</a>
</li>
</ul>
</div>
</div>