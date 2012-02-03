<!-- To configure this meta, go to http://developers.facebook.com/docs/opengraph/ -->

<?php if('1' == peanutConfig::get('facebook_share')): ?>

  <?php if('' != peanutConfig::get('facebook_title')): ?>
    <meta property="og:title" content="<?php echo peanutConfig::get('facebook_title') ?>" />
  <?php elseif('' != peanutConfig::get('meta_title')): ?>
    <meta property="og:title" content="<?php echo peanutConfig::get('meta_title') ?>" />
  <?php endif; ?>
    
    
  <?php if('0' != peanutConfig::get('facebook_type')): ?>
    <meta property="og:type" content="<?php echo peanutConfig::get('facebook_type') ?>" />
  <?php else: ?>
    <meta property="og:type" content="website" /> 
  <?php endif; ?>
    
  
  <?php if('0' != peanutConfig::get('facebook_url')): ?>
    <meta property="og:url" content="<?php echo peanutConfig::get('facebook_url') ?>" />
  <?php else: ?>
    <meta property="og:url" content="<?php echo sfContext::getInstance()->getRequest()->getUriPrefix(); ?>" />
  <?php endif; ?>
    
    
  <?php if('' != peanutConfig::get('facebook_image')): ?>
    <meta property="og:image" content="<?php echo peanutConfig::get('facebook_image') ?>" />
  <?php endif; ?>
   
    
  <?php if('' != peanutConfig::get('facebook_sitename')): ?>
    <meta property="og:site_name" content="<?php echo peanutConfig::get('facebook_sitename') ?>" />
  <?php elseif('' != peanutConfig::get('site_name')): ?>
    <meta property="og:site_name" content="<?php echo peanutConfig::get('site_name') ?>" />
  <?php endif; ?> 
    
  
  <?php if('' != peanutConfig::get('facebook_description')): ?>
    <meta property="og:description" content="<?php echo peanutConfig::get('facebook_description') ?>" />
  <?php elseif('' != peanutConfig::get('meta_description')): ?>
    <meta property="og:description" content="<?php echo peanutConfig::get('meta_description') ?>" />
  <?php endif; ?> 

<?php endif; ?>