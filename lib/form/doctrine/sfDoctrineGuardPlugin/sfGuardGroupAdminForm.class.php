<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardGroupAdminForm extends BasesfGuardGroupForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
    
    $this->widgetSchema['name'] = new sfWidgetFormHtml5InputText(array(), array(
                                        'placeholder' => 'Insert the group name',
                                        'required'    => true
    ));
    
    $this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array(
                                        'placeholder' => 'A simple description'
    ));
  }
}
