jQuery(document).ready(function() {
  
  jQuery('.sf_admin_filter').hide();
  
  jQuery('#sf_admin_bar h1').click(function() {
    jQuery('.sf_admin_filter').toggle('fast');
  });
  
});