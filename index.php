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
<div class="main_top">
<?php include_once"includes/header.php" ?>

<div class="front">
<div class="words_main">App Developement is us </div>
<img src="images/icons/index_image.png" alt="web and mobile apps"/>
</div>
<a href="#"><div class="down_arrow"></div></a>
</div>
<main class="content_main">
</main>

</body>
</html>
