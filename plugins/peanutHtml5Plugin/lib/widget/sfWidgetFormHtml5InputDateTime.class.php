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
        $(document).ready(function() {
          if(!Modernizr.inputtypes.datetime)
          {
            $("input[type=datetime]").datepicker({
                dateFormat: "yy-mm-dd",
                minDate: new Date("{min}"),
                maxDate: new Date("{max}")
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
  
}
