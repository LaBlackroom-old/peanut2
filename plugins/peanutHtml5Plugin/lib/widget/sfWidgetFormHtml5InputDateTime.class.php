<?php

/**
 * Generate an html5 input type="datetime"
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputDateTime extends sfWidgetFormHtml5InputDate
{

  /**
   * Constructor.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see http://dev.w3.org/html5/markup/input.datetime.html
   * @see sfWidgetFormHtml5InputDate
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'datetime');

    $this->setOption('template.javascript', '
      <script>
        jQuery(document).ready(function() {
          if(!Modernizr.inputtypes.datetime)
          {
            jQuery("input[type=datetime]").datetimepicker({
              minDateTime: new Date("{min}"),
              maxDateTime: new Date("{max}"),
              dateFormat: "yy-mm-dd",
              timeFormat: "hh:mm:ss",
              showSecond: true,
              separator: "T",
              lastSeparator: "Z",
              showOn: "button",
              buttonImage: "/images/widget/calendar.png",
              buttonImageOnly: true
            });
          }
        });
      </script>
    ');
  }

  /**
   * Get the date format to render a valid string
   *
   * @return string
   */
  protected function _getDateFormat()
  {
    date_default_timezone_set('UTC');
    return 'Y-m-d\TH:i:s\Z';
  }

  /**
   * Gets the JavaScript paths associated with the widget.
   *
   * @return array An array of JavaScript paths
   */
  public function getJavaScripts()
  {
    return array(
      '/js/widget/jquery-ui-timepicker-addon.js'
    );
  }
  
}
