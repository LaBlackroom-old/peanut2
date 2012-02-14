<?php if( "1" == peanutConfig::get('google_request') && "" != peanutConfig::get('google_page_link') ): ?>
  <link rel="canonical" href="https://plus.google.com/<?php echo peanutConfig::get('google_page_link') ?>" />
<?php endif; ?>