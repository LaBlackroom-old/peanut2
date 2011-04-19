jQuery(document).ready(function() {

  resizeSidebar();
  resizeContent();
  resizeAside();
  resizeFieldsetContent();

  displayMenu();
  displayFilters();
  displayTooltip();
  
  jQuery(window).resize(function() {
    resizeSidebar();
    resizeContent();
    resizeAside();
    resizeFieldsetContent();
  });

});


function resizeSidebar()
{
  var screenHeight = parseInt(jQuery(window).height()) - parseInt('71') ;
  jQuery('sidebar').css('height', screenHeight);
}

function resizeAside()
{
  var screenHeight = parseInt(jQuery(window).height()) - parseInt('61') ;
  jQuery('aside#sf_admin_bar').css('height', screenHeight);
}

function resizeContent()
{
  var screenWidth = parseInt(jQuery(window).width()) - parseInt('181');
  jQuery('body#authenticated section#main').css('width', screenWidth);

  var screenHeight = parseInt(jQuery(window).height()) - parseInt('61') ;
  jQuery('body#authenticated section#main').css('height', screenHeight);
}

function resizeFieldsetContent()
{
  var mainWidth = parseInt(jQuery('section#main').width()) - parseInt('390');
  jQuery('#authenticated div.sf_admin_form #sf_fieldset_content').css('width', mainWidth);
}

function displayMenu()
{
  jQuery('nav ul').hide();

  if(jQuery('nav').hasClass('selected'))
  {
    jQuery('nav.selected').children('ul').slideToggle('slow');
  }
  
  jQuery('nav h3').click(function() {

    if(jQuery(this).parent().siblings('nav').hasClass('selected')) {
      jQuery(this).parent().siblings('nav.selected').children('ul').slideToggle();
      jQuery(this).parent().siblings('nav.selected').removeClass('selected');
    }

    if(!jQuery(this).parent().hasClass('selected')) {
      jQuery(this).parent().addClass('selected');
      jQuery(this).siblings('ul').slideToggle();
    }
    else
    {
      jQuery(this).parent().children('ul').slideToggle();
      jQuery(this).parent().removeClass('selected');
    }

  });
}

function displayFilters()
{
  jQuery('aside#sf_admin_bar section.filters').toggle();
  jQuery('aside#sf_admin_bar span.toggle').addClass('closed');

  jQuery('aside#sf_admin_bar span.toggle').click(function() {

    if(jQuery(this).hasClass('open')) {
      jQuery(this).addClass('closed');
      jQuery(this).removeClass('open');
    }
    else
    {
      jQuery(this).addClass('open');
      jQuery(this).removeClass('closed');
    }

    jQuery('aside#sf_admin_bar section.filters').toggle('slow');
  });
}

function displayTooltip()
{
  

  jQuery('.sf_admin_form form .sf_admin_form_row label').mouseover(function() {
    var content = jQuery(this).siblings('div.help').html();

    if(content != null)
    {
      jQuery(this).tipTip({
        'content': '<p>' + content + '</p>'
      });
    }

  });

}