<?php

/**
 * sfGuardPermission form.
 *
 * @package    blackroom
 * @subpackage form
 * @author     Alexandre pocky Balmes
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardPermissionForm extends PluginsfGuardPermissionForm
{
  public function configure()
  {
    $this->widgetSchema['name'] = new sfWidgetFormHtml5InputText(array(), array(
                                        'placeholder' => 'Insert the permission name',
                                        'required'    => true
    ));
    
    $this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array(
                                        'placeholder' => 'A simple description'
    ));
  }
}
