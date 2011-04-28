<?php

/**
 *
 *
 * @package    peanutCorporatePlugin
 * @subpackage widget
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com> <albalmes@gmail.com>
 */
class sfWidgetFormSchemaFormatterDiv extends sfWidgetFormSchemaFormatter
{
  protected
    $rowFormat       = "<div class=\"form-row\">\n  %error%%label%\n  %field%%help%\n%hidden_fields%</div>\n",
    $errorRowFormat  = "<div class=\"form-errors\">\n%errors%</div>\n",
    $helpFormat      = '<div class="form-help">%help%</div>',
    $decoratorFormat = "<div class=\"embedForm\">\n  %content%</div>";
}
