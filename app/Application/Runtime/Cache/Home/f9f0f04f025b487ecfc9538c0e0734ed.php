<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?php echo ($config['sitename']); ?></title>
    <meta name="description" content="">  
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="./statics/home/Woo10/css/default.css">
    <link rel="stylesheet" href="./statics/home/Woo10/css/layout.css">
    <link rel="stylesheet" href="./statics/home/Woo10/css/media-queries.css">
    <link rel="stylesheet" href="./statics/home/Woo10/css/animate.css">
    <link rel="stylesheet" href="./statics/home/Woo10/css/prettyPhoto.css">
    
    <!-- Script
    ================================================== -->
    <script src="./statics/home/Woo10/js/modernizr.js"></script>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="./statics/home/Woo10/favicon.png" >
</head>

<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="./statics/home/Woo10/js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="./statics/home/Woo10/js/jquery-migrate-1.2.1.min.js"></script>

<script src="./statics/home/Woo10/js/jquery.flexslider.js"></script>
<script src="./statics/home/Woo10/js/waypoints.js"></script>
<script src="./statics/home/Woo10/js/jquery.fittext.js"></script>
<script src="./statics/home/Woo10/js/jquery.fitvids.js"></script>
<script src="./statics/home/Woo10/js/imagelightbox.js"></script>
<script src="./statics/home/Woo10/js/jquery.prettyPhoto.js"></script>   

<body>
    <!-- Header
================================================== -->
<header>
    <div class="logo">
        <a class="smoothscroll" href="#hero"><img alt="" src="./statics/home/Woo10/images/logo.png"></a>
    </div>

    <nav id="nav-wrap">         
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>         

        <ul id="nav" class="nav">
            <li><a href="index.php">首页</a></li>
            <?php  foreach($nav as $key=>$item){ if($item['ispart']!="1"){ continue; } ?>

                <li><a href="<?php echo U('Article/lists',array('cid'=>$item['id']));?>"><?php echo ($item["name"]); ?></a></li>
            <?php  } ?>
        </ul> <!-- end #nav -->
    </nav> <!-- end #nav-wrap -->
    <ul class="header-social">
        <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
    </ul>
</header> <!-- Header End -->
    <!-- Homepage Hero
================================================== -->
<section id="hero">
    <div class="row">
        <div class="twelve columns">
            <div class="hero-text">
            </div>

            <div class="buttons">
            </div>

            <div class="hero-image" style="height:100px;">
                <!-- <img src="./statics/home/Woo10/images/hero-image.png" alt="" /> -->
            </div>
        </div>
    </div>
</section> <!-- Homepage Hero end -->

    <section id="pricing">
        <div class="row">
        <?php
 foreach($result as $item){ ?>
            <div class="pricing-tables bgrid-quarters s-bgrid-halves">
                <div class="column">
                    <div class="price-block">
                        <div class="divTitle">
                            <h3 class="plan-title"></i><?php echo ($item['name']); ?></h3>
                            <div style="float:right"><a href="<?php echo U('Article/lists',array('cid'=>$item['id']));?>">更多>></a></div>
                        </div>
                        <ul class="features">
                            <?php
 $arts = $item['li']; if($arts){ foreach($arts as $li){ ?>
                            <li>
                                <a href="/cms/index.php?m=Home&c=Article&a=info&id=<?php echo $li['id'];?>" class="active">
                                    <div class="row">
                                        <div class="ten columns right" style="float:left;"><?php echo $li['title']; ?></div>
                                        <div class="two columns .pull-1 left" style="float: right;text-align: right;"><?php echo $li['time']; ?></div>
                                    </div>
                                </a>
                            </li>
                            <?php  } } ?>
                        </ul>
                    </div> <!-- End Price Block -->
                </div> <!-- End Column -->
            </div>
        <?php } ?>
        </div>
    </section> <!-- Pricing End -->

    	<!-- Footer
    ================================================== -->
    <footer>
        <div class="row">         
            <p class="copyright">&copy; 版权所有 © All Rights Reserved <a title="Styleshout" href="#"></a></p>
            <div id="go-top">
                <a class="smoothscroll" title="Back to Top" href="#hero"><i class="icon-up-open"></i></a>
            </div>
        </div> <!-- Row End -->
    </footer> <!-- Footer End-->

    <script src="./statics/home/Woo10/js/main.js"></script>
</body>
</html>