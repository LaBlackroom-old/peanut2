<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="fr" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="fr" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="fr" class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->

  <head>
    <meta charset="utf-8" />

    <?php include_http_metas() ?>
    <?php include_metas() ?>

    <title>
    <?php if (!include_slot('title')): ?>
      <?php echo peanutConfig::get('meta_title') ?>
    <?php endif; ?>
    </title>

    <meta name="description" content="<?php if(!include_slot('description', peanutConfig::get('meta_description'))) { get_slot('description'); } ?>">
    <meta name="keywords" content="<?php if(!include_slot('keywords', peanutConfig::get('meta_keywords'))) { get_slot('keywords'); } ?>">
    <meta name="robots" content="<?php if(!include_slot('robots', peanutConfig::get('meta_robots'))) { get_slot('robots'); } ?>">
    
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <?php include_html5_stylesheets() ?>

    <?php echo html5_javascript_include_tag('/peanutAssetPlugin/js/modernizr-2.0.6.min.js') ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/peanutAssetPlugin/js/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>

    <?php
      include_component('social', 'facebookUrl');
      include_component('social', 'facebookOpenGraph');

      include_component('social', 'twitterUrl');

      include_component('social', 'googlePlusUrl');
      include_component('social', 'googlePlus1Head');
    ?>
  </head>

  <body>
    <?php echo $sf_content ?>

    <!--[if lt IE 7 ]>
      <script src="js/dd_belatedpng.js"></script>
      <script>DD_belatedPNG.fix('img, .png_bg');</script>
    <![endif]-->

    <?php include_html5_javascripts() ?>
    
    <?php if(peanutConfig::get('google_guid_ga')): ?>
      <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '<?php echo peanutConfig::get('google_guid_ga') ?>']);
        <?php if(peanutConfig::get('domain_name')){ ?>
          _gaq.push(['_setDomainName', '<?php echo peanutConfig::get('domain_name') ?>']);
        <?php } ?>
        
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

      </script>
    <?php endif; ?>
    
  </body>
</html>