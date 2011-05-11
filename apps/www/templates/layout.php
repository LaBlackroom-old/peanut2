<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

  <head>
    <meta charset="utf-8" />

    <?php include_http_metas() ?>
    <?php include_metas() ?>

    <title>
    <?php if (!include_slot('title')): ?>
      <?php echo sfConfig::get('app_meta_title', 'peanut :: another CMS on symfony') ?>
    <?php endif; ?>
    </title>

    <meta name="description" content="<?php if(!include_slot('description', sfConfig::get('app_meta_description', 'The demo site for peanut'))) { get_slot('description'); } ?>">
    <meta name="keywords" content="<?php if(!include_slot('keywords', sfConfig::get('app_meta_keywords', 'peanut, symfony, cms'))) { get_slot('keywords'); } ?>">
    <meta name="robots" content="<?php if(!include_slot('robots', sfConfig::get('app_meta_robots', 'index, follow'))) { get_slot('robots'); } ?>">
    <meta name="language" content="<?php if(!include_slot('language', sfConfig::get('app_meta_language', 'en_US'))) { get_slot('language'); } ?>">

    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <?php include_html5_stylesheets() ?>

    <?php echo html5_javascript_include_tag('/js/modernizr-1.7.min.js') ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/js/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
  </head>

  <body>
    <div id="container" class="alignCenter center container">

      <section id="top" class="alignLeft">

        <header>
          <h1>
            <a href="<?php echo url_for('@homepage') ?>" title="<?php __('Back to homepage') ?>">
              <?php echo sfConfig::get('app_site_name', 'myWebsite') ?>
            </a>
          </h1>
        </header>

        <nav>
         <?php include_component('items', 'mainMenu') ?>
        </nav>

      </section>

      <section id="main" class="alignLeft clearfix" role="main">
        <?php echo $sf_content ?>
      </section>

      <section id="footer">

        <footer>
          <nav>
           <?php include_component('items', 'footerMenu') ?>
          </nav>
        </footer>

      </section>

    </div>

    <!--[if lt IE 7 ]>
      <script src="js/libs/dd_belatedpng.js"></script>
      <script>DD_belatedPNG.fix('img, .png_bg');</script>
    <![endif]-->


    <?php include_html5_javascripts() ?>
  </body>
</html>