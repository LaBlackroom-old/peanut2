<?php

/**
 * PluginpeanutXFN form.
 *
 * @package    peanutCorporatePlugin
 * @subpackage form
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com> <albalmes@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginpeanutXfnForm extends BasepeanutXfnForm
{
  public function setup()
  {
    parent::setup();


    $this->widgetSchema['friendship'] = new sfWidgetFormSelectRadio(array(
        'choices' => array('contact' => 'contact', 'acquaintance' => 'acquaintance', 'friend' => 'friend')
    ));

    $this->widgetSchema['physical'] = new sfWidgetFormSelectCheckbox(array(
        'choices' => array('met' => 'met')
    ));

    $this->widgetSchema['professional'] = new sfWidgetFormSelectCheckbox(array(
        'choices' => array('co-worker' => 'co-worker', 'colleague' => 'colleague')
    ));

    $this->widgetSchema['geographical'] = new sfWidgetFormSelectRadio(array(
        'choices' => array('co-resident' => 'co-resident', 'neighbor' => 'neighbor')
    ));

    $this->widgetSchema['family'] = new sfWidgetFormSelectRadio(array(
        'choices' => array('child' => 'child', 'parent' => 'parent', 'sibling' => 'sibling', 'spouse' => 'spouse', 'kin' => 'kin')
    ));

    $this->widgetSchema['romantic'] = new sfWidgetFormSelectCheckbox(array(
        'choices' => array('muse' => 'muse', 'crush' => 'crush', 'date' => 'date', 'sweetheart' => 'sweetheart')
    ));

    $this->widgetSchema->setFormFormatterName('div');
  }
}
