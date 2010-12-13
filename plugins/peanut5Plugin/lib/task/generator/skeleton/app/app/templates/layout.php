<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

  <head>
    <meta charset="utf-8" />

    <?php include_http_metas() ?>
    <?php include_metas() ?>

    <?php include_title() ?>

    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <?php include_stylesheets() ?>

    <?php echo javascript_include_tag('/js/modernizr-1.6.min.js') ?>

  </head>

  <body>
    <div id="container">
        <?php echo $sf_content ?>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
    <script>
      !window.jQuery && document.write(
        unescape('%3Cscript src="<?php echo javascript_include_tag('/js/jquery-1.4.4.min.js') ?>"%3E%3C/script%3E')
      )
    </script>

    <!--[if lt IE 7 ]>
    <script>
      $.getScript("<?php echo javascript_include_tag('/js/dd_belatedpng.js') ?>",function(){ DD_belatedPNG.fix('img, .png_bg'); });
    </script>
    <![endif]-->
    
    <?php include_javascripts() ?>
  </body>
</html>
