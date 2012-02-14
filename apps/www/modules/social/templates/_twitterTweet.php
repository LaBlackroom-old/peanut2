<!-- To design this button, go to https://twitter.com/about/resources/buttons#tweet -->

<?php if("1" == peanutConfig::get('twitter_tweet_request')): 

  
  $lang = array('fr' => 'Tweeter', 'en' => 'Tweet');

  $tweet = 'class="twitter-share-button" data-via="' . peanutConfig::get('twitter_account') . '"';
  
  //Share URL (page URL by default)
  if( "1" == peanutConfig::get('twitter_tweet_url_request') && "" != peanutConfig::get('twitter_tweet_url') ):
    $tweet .= 'data-url="' . peanutConfig::get('twitter_tweet_url') . '"';
  endif;
  
  //Tweet Text (page title by default)
  if( "1" == peanutConfig::get('twitter_tweet_text_request') && "" != peanutConfig::get('twitter_tweet_text') ):
    $tweet .= 'data-text="' . peanutConfig::get('twitter_tweet_text') . '"';
  endif;
  
  //Show count (true by default)
  if( "0" == peanutConfig::get('twitter_show_count') ):
    $tweet .= 'data-count="none"';
  endif;
  
  //Large Button (small by default)
  if( "1" == peanutConfig::get('twitter_tweet_data_size') ):
    $tweet .= 'data-size="large"';
  endif;
  
  //Large Button (small by default)
  if( "" != peanutConfig::get('twitter_tweet_recommended') ):
    $tweet .= 'data-related="' . peanutConfig::get('twitter_tweet_recommended') . '"';
  endif;
  
  //Hashtag
  if( "" != peanutConfig::get('twitter_tweet_hashtag') ):
    $tweet .= 'data-hashtags="' . peanutConfig::get('twitter_tweet_hashtag') . '"';
  endif;
   
  /* Language (English [en] by default) */
  $tweet .= ' data-lang="' . peanutConfig::get('twitter_tweet_lang') . '"';

?>
    <a href="https://twitter.com/share" <?php echo $tweet; ?>>
      <?php echo $lang[peanutConfig::get('twitter_tweet_lang')] ?>
    </a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    
<?php endif; ?>








