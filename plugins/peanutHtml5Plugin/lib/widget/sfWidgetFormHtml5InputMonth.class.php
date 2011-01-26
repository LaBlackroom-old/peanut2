<?php

/**
 * Generate an html5 input type="month"
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputMonth extends sfWidgetFormHtml5InputDate
{

  /**
   * Constructor.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see http://dev.w3.org/html5/markup/input.month.html
   * @see sfWidgetFormHtml5InputDate
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'month');

    $this->setOption('template.javascript', '
      <script>
        jQuery(document).ready(function() {
          if(!Modernizr.inputtypes.month)
          {
            jQuery("input[type=month]").datepicker({
              minDate: new Date("{min}"),
              maxDate: new Date("{max}"),
              dateFormat: "yy-mm",
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
    return 'Y-m';
  }

}
