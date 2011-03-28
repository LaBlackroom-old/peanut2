jQuery(document).ready(function() {
  
  jQuery('.sf_admin_filter').hide();
  
  jQuery('#sf_admin_bar h1').click(function() {
    jQuery('.sf_admin_filter').toggle('fast');
  });
  
  jQuery('nav li ul').hide();
  jQuery('nav li a.current').parent().find('ul').slideToggle('slow');
			
  jQuery('nav li a.no-submenu').click(
      function () {
          window.location.href=(this.href);
          return false;
      }
  );
    
  jQuery('nav li a.nav-top-item').click(function() {
    jQuery(this).next('ul').slideToggle('normal');
    jQuery(this).parent('li').parent('ul').parent('nav').siblings('nav').children('ul').children('li').children('ul').slideUp('normal');
  });
  
});