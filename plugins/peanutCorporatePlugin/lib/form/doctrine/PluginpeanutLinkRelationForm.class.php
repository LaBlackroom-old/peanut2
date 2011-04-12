<?php

/**
 * PluginpeanutLinkRelation form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginpeanutLinkRelationForm extends BasepeanutLinkRelationForm
{
  public function setup()
  {
    parent::setup();

    $this->widgetSchema['friendship'] = new sfWidgetFormSelectRadio(array(
        'choices' => array('contact' => 'contact', 'acquaintance' => 'acquaintance', 'friend' => 'friend', 'none' => 'none')
    ));

    $this->widgetSchema['physical'] = new sfWidgetFormSelectCheckbox(array(
        'choices' => array('met' => 'met')
    ));

    $this->widgetSchema['professional'] = new sfWidgetFormSelectCheckbox(array(
        'choices' => array('co-worker' => 'co-worker', 'colleague' => 'colleague')
    ));

    $this->widgetSchema['geographical'] = new sfWidgetFormSelectRadio(array(
        'choices' => array('co-resident' => 'co-resident', 'neighbor' => 'neighbor', 'none' => 'none')
    ));

    $this->widgetSchema['family'] = new sfWidgetFormSelectRadio(array(
        'choices' => array('child' => 'child', 'parent' => 'parent', 'sibling' => 'sibling', 'spouse' => 'spouse', 'kin' => 'kin', 'none' => 'none')
    ));

    $this->widgetSchema['romantic'] = new sfWidgetFormSelectRadio(array(
        'choices' => array('muse' => 'muse', 'crush' => 'crush', 'date' => 'date', 'sweetheart' => 'sweetheart')
    ));
    
  }
}
