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
  </script>
</head>
<body>
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
<a href="#"><img src="images/featured/kampala_sun.png" alt="kampala sun"/></a>
</div>
<div class="featured_right">
<h2>vision group</h2>
<a href="#"><img src="images/featured/vision_group.png" alt="kampala sun"/></a>
</div>
<div class="featured_left">
<h2>vision Printing</h2>
<a href="#"><img src="images/featured/vision_printing.png" alt="kampala sun"/></a>
</div>
<div class="featured_right">
<h2>Acacia School</h2>
<a href="#"><img src="images/featured/acacia_school.png" alt="kampala sun"/></a>
</div>
</div>
</main>

</body>
</html>
