<!-- To design this button, go to https://twitter.com/about/resources/buttons#follow -->

<?php 
  if("1" == peanutConfig::get('twitter_follow_request')): 
    
    $lang = array('fr' => 'Suivre', 'en' => 'Follow');
    
    $follow = 'class="twitter-follow-button" ';
    $name = '';
    
    /* twitter_data_show_count */
    if( "0" == peanutConfig::get('twitter_data_show_count') ):
      $follow .= ' data-show-count="false"';
    endif;
    
    /* twitter_data_show_screen_name */
    if( "0" == peanutConfig::get('twitter_data_show_screen_name') ):
      $follow .= ' data-show-screen-name="false"';
    else:
      $name = peanutConfig::get('twitter_account');
    endif;
    
    /* twitter_follow_data_size */
    if( "1" == peanutConfig::get('twitter_follow_data_size') ):
      $follow .= ' data-size="large"';
    endif;
    
    /* twitter_follow_lang */
    $follow .= ' data-lang="' . peanutConfig::get('twitter_follow_lang') . '"';
?>

    <a href="https://twitter.com/<?php echo peanutConfig::get('twitter_account') ?>" <?php echo $follow; ?>>
      <?php echo $lang[peanutConfig::get('twitter_follow_lang')] . ' ' . $name; ?>
    </a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <?php endif; ?>


