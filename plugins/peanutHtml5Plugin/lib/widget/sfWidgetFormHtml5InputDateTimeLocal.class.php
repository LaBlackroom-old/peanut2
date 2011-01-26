<?php

/**
 * Generate an html5 input type="datetime-local"
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputDateTimeLocal extends sfWidgetFormHtml5InputDate
{

  /**
   * Constructor.
   *
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see http://dev.w3.org/html5/markup/input.datetime-local.html
   * @see sfWidgetFormHtml5InputDate
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'datetime-local');

    $this->setOption('template.javascript', '
      <script>
        jQuery(document).ready(function() {
          if(!Modernizr.inputtypes.datetimelocal)
          {
            jQuery("input[type=datetime-local]").datetimepicker({
              minDateTime: new Date("{min}"),
              maxDateTime: new Date("{max}"),
              dateFormat: "yy-mm-dd",
              timeFormat: "hh:mm:ss",
              showSecond: true,
              separator: "T",
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
    return 'Y-m-d\TH:i:s';
  }

}
