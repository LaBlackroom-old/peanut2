<?php

/**
 * sfGuardPermission form.
 *
 * @package    peanut
 * @subpackage form
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com>
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardPermissionForm extends PluginsfGuardPermissionForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
    
    $this->widgetSchema['name'] = new sfWidgetFormHtml5InputText(array(), array(
                                        'placeholder' => 'Insert the permission name',
                                        'required'    => true
    ));
    
    $this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array(
                                        'placeholder' => 'A simple description'
    ));
  }
}
