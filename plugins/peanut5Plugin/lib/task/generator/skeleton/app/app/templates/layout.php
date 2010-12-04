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

    <link rel="shortcut icon" href="/peanut5Plugin/favicon/favicon.ico" />
    <link rel="apple-touch-icon" href="/peanut5Plugin/favicon/apple-touch-icon.png">

    <?php include_stylesheets() ?>

    <?php echo javascript_include_tag('/peanut5Plugin/js/modernizr-1.6.min.js') ?>

  </head>

  <body>
    <div id="container">

      <div id="main" role="main">
        <?php echo $sf_content ?>
      </div>

    </div>

    <?php include_javascripts() ?>
  </body>
</html>
