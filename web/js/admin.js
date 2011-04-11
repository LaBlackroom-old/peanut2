jQuery(document).ready(function() {

  resizeSidebar();
  resizeContent();
  resizeAside();

  displayMenu();
  displayFilters();
  
  jQuery(window).resize(function() {
    resizeSidebar();
    resizeContent();
    resizeAside();
  });

  
  
});


function resizeSidebar()
{
  var screenHeight = parseInt(jQuery(window).height()) - parseInt('81') ;
  jQuery('sidebar').css('height', screenHeight);
}

function resizeAside()
{
  var screenHeight = parseInt(jQuery(window).height()) - parseInt('61') ;
  jQuery('aside#sf_admin_bar').css('height', screenHeight);
}

function resizeContent()
{
  var screenWidth = parseInt(jQuery(window).width()) - parseInt('221');
  jQuery('section#main').css('width', screenWidth);
}

function displayMenu()
{
  jQuery('nav ul').hide();

  jQuery('nav h3').click(function() {

    if(jQuery(this).parent().siblings('nav').hasClass('selected')) {
      jQuery(this).parent().siblings('nav.selected').children('ul').slideToggle();
      jQuery(this).parent().siblings('nav.selected').removeClass('selected');
    }

    jQuery(this).parent().addClass('selected');
    jQuery(this).siblings('ul').slideToggle();


  });
}

function displayFilters()
{
  jQuery('aside#sf_admin_bar section.filters').toggle();

  jQuery('aside#sf_admin_bar').click(function() {
    jQuery('aside#sf_admin_bar section.filters').toggle('slow');
  });
}

