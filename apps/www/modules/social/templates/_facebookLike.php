<!-- To design this fb-like button, go to http://developers.facebook.com/docs/reference/plugins/like/ -->

<!-- URL courante : echo sfContext::getInstance()->getRequest()->getUriPrefix(); -->

<?php if('1' == peanutConfig::get('facebook_like')): ?>

  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <?php 
  $likeConfig = '';
    
    /* Facebook URL */
    if('' == peanutConfig::get('facebook_page') ):
       $likeConfig .= ' data-href"= ' . sfContext::getInstance()->getRequest()->getUriPrefix() . '"';
    else:
       $likeConfig .= ' data-href"= ' . peanutConfig::get('facebook_page') . '"';
    endif; 
    
    /* facebook_like_send_button */
    if( '1' == peanutConfig::get('facebook_like_send_button')):
      $likeConfig .= ' data-send="true"';
    endif;
    
    /* facebook_like_layout_style */
    if( '' != peanutConfig::get('facebook_like_layout_style')):
      if('1' == peanutConfig::get('facebook_like_layout_style')):
        $likeConfig .= ' data-layout="button_count"';
      elseif('2' == peanutConfig::get('facebook_like_layout_style')):
        $likeConfig .= ' data-layout="box_count"';
      endif;
    endif;  
    
    /* facebook_like_width */
    if( '' != peanutConfig::get('facebook_like_width')):
      $likeConfig .= ' data-width="' . peanutConfig::get('facebook_like_width') . '"';
    endif;
    
    /* facebook_like_show_face */
    if( '1' == peanutConfig::get('facebook_like_show_face')):
      $likeConfig .= ' data-show-faces="true"';
    endif;
    
    /* facebook_like_verb_to_display */
    if( '1' == peanutConfig::get('facebook_like_verb_to_display')):
      $likeConfig .= ' data-action="recommend"';
    endif;
    
    /* facebook_like_verb_to_display */
    if( '1' == peanutConfig::get('facebook_like_color_scheme')):
      $likeConfig .= ' data-colorscheme="dark"';
    endif;
    
    /* facebook_like_verb_to_display */
    if( '0' != peanutConfig::get('facebook_like_font')):
      $likeConfig .= ' data-font="' . peanutConfig::get('facebook_like_font') . '"';
    endif;  
  ?>
  
  
<div class="fb-like" <?php echo $likeConfig ?>></div>

<?php endif; ?>