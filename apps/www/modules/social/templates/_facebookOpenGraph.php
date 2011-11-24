<?php if( peanutConfig::get('facebook_like') == "1" ): ?>

  <meta property="og:title" content=""/>
  <meta property="og:image" content="<?php echo sfContext::getInstance()->getRequest()->getUriPrefix(); ?>/images/logoForFacebook.jpg"/>
  <meta property="og:site_name" content="<?php echo peanutConfig::get('site_name') ?>"/>
  <meta property="og:description" content=""/>
  
<?php endif; ?>
	