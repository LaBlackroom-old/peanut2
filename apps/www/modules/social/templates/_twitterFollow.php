<?php if( peanutConfig::get('twitter_follow') ): ?>

<!-- To design this button, go to https://twitter.com/about/resources/followbutton -->

<a href="https://twitter.com/<?php echo peanutConfig::get('twitter_follow') ?>" class="twitter-follow-button" data-show-count="false">Follow @<?php echo peanutConfig::get('twitter_follow') ?></a>
<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>

<?php endif; ?>