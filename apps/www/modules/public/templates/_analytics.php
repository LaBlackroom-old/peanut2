<?php if(peanutConfig::get('google_guid_ga')): ?>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '<?php echo peanutConfig::get('google_guid_ga') ?>']);
    <?php if(peanutConfig::get('domain_name')){ ?>
      _gaq.push(['_setDomainName', '<?php echo peanutConfig::get('domain_name') ?>']);
    <?php } ?>

    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
<?php endif; ?>