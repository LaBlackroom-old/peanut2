<!-- To design this fb-like button, go to http://developers.facebook.com/docs/reference/plugins/like/ -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="<?php echo sfContext::getInstance()->getRequest()->getUriPrefix(); ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>