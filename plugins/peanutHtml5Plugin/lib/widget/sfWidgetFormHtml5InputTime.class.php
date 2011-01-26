<?php

/**
 * Generate an html5 input type="time"
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputTime extends sfWidgetFormHtml5InputDate
{

  /**
   * Constructor.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see http://dev.w3.org/html5/markup/input.time.html
   * @see sfWidgetFormHtml5InputDate
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'time');

    $this->setOption('template.javascript', '
      <script>
        jQuery(document).ready(function() {
          if(!Modernizr.inputtypes.time)
          {
            jQuery("input[type=time]").timepicker({
              minDateTime: new Date("{min}"),
              maxDateTime: new Date("{max}"),
              timeFormat: "hh:mm:ss",
              showSecond: true,
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
    return 'H:i:s';
  }

}
