<meta property="og:title" content="<?php if(!include_slot('title')): echo peanutConfig::get('meta_title'); endif; ?>"/>
<meta property="og:image" content="<?php echo sfContext::getInstance()->getRequest()->getUriPrefix(); ?>/images/logoForFacebook.jpg"/>
<meta property="og:site_name" content="<?php echo peanutConfig::get('site_name') ?>"/>
<meta property="og:description" content="<?php if(!include_slot('description', peanutConfig::get('meta_description'))) { get_slot('description'); } ?>"/>