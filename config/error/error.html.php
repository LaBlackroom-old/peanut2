<!DOCTYPE html>
<?php $path = sfConfig::get('sf_relative_url_root', preg_replace('#/[^/]+\.php5?$#', '', isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : (isset($_SERVER['ORIG_SCRIPT_NAME']) ? $_SERVER['ORIG_SCRIPT_NAME'] : ''))) ?>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]--> 
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]--> 
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]--> 
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]--> 
 
  <head> 
    <meta charset="utf-8" /> 
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
 
    <title>Error 500</title> 
 
    <meta name="description" content="The demo site for peanut"> 
    <meta name="keywords" content="peanut, symfony, cms"> 
    <meta name="robots" content="index, follow"> 
    <meta name="language" content="fr_FR"> 
 
    <link rel="shortcut icon" href="/favicon.ico" /> 
    <link rel="apple-touch-icon" href="/apple-touch-icon.png"> 
 
    <link rel="stylesheet" href="/css/main.css?v=2" media="screen, projection" /> 
    <link rel="stylesheet" href="/css/handled.css?v=2" media="handled" /> 
 
    <script src="/peanutAssetPlugin/js/modernizr-1.7.min.js"></script> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script> 
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/js/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script> 
  </head> 
 
  <body> 
    <div id="container" class="alignCenter center container"> 
 
      <section id="main" class="alignLeft" role="main" style="margin-top: 50px;"> 
        <section id="500"> 
          <header> 
            <h1>500!</h1> 
          </header> 
  
          <section> 
            <p>Sorry but... I'm... Wait?! Where I am ?</p>
            
            <ul class="sfTIconList">
              <li class="sfTLinkMessage"><a href="javascript:history.go(-1)">Back to previous page</a></li>
              <li class="sfTLinkMessage"><a href="/">Go to Homepage</a></li>
            </ul>
          </section> 
  
        </section>
      </section> 
 
    </div> 
 
    <!--[if lt IE 7 ]>
      <script src="/peanutAssetPlugin/js/libs/dd_belatedpng.js"></script>
      <script>DD_belatedPNG.fix('img, .png_bg');</script>
    <![endif]--> 
 
 
      </body> 
</html>