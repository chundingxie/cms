<?php if (!defined('THINK_PATH')) exit();?><!---#header-page-->
<!-------公共头部---------->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <title><?php echo strip_tags(C('SYSTEM_NAME'));?></title>
         <meta name="description" content="<?php echo strip_tags(C('SYSTEM_NAME'));?>">
          <!---require minified JS CSS--->
         <link rel="stylesheet" type="text/css" href="./statics/admin/assets/css/minified/aui-production.min.css?<?php echo C('KLCHOU_BUILD');?>">
         <link id="layout-theme" rel="stylesheet" type="text/css" href="./statics/admin/assets/themes/minified/fides/color-schemes/dark-blue.min.css?<?php echo C('KLCHOU_BUILD');?>">
         <link rel="stylesheet" type="text/css" href="./statics/admin/assets/themes/minified/fides/common.min.css?<?php echo C('KLCHOU_BUILD');?>">
         <script type="text/javascript" src="./statics/admin/assets/js/minified/aui-production.min.js?<?php echo C('KLCHOU_BUILD');?>"></script>
         <script type="text/javascript" src="./statics/admin/assets/js/minified/core/raphael.min.js?<?php echo C('KLCHOU_BUILD');?>"></script>
         <script type="text/javascript" src="./statics/admin/assets/js/minified/widgets/charts-justgage.min.js?<?php echo C('KLCHOU_BUILD');?>"></script>
<!---require minified JS CSS--->
    </head>
<body>
<!-- #page-title -->
<!--------小标题----------->
<div id="page-title">

<big>
      <i class="glyph-icon icon-home"></i>  <?php echo ($curpos); ?>
</big>                
</div>
<div id="page-content">
    <div class="example-code">
        
        <div class="content-box box-toggle">
            
        </div>
    </div>
</div>