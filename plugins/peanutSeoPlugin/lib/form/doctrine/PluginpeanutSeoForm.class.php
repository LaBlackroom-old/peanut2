<?php

/**
 * peanutSeo form.
 *
 * @package    peanut
 * @subpackage form
 * @author     Alexandre "pocky" Balmes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
abstract class PluginpeanutSeoForm extends BasepeanutSeoForm
{
  
  public function setup()
  {
    parent::setup();

    unset($this['id']);
    
    $this->widgetSchema['title'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'maxlength'   => 195,
        'placeholder' => 'My beautiful title'
    ));

    $this->widgetSchema['description'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'maxlength'   => 255,
        'placeholder' => 'My beautiful description'
    ));

    $this->widgetSchema['keywords'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'My seo tags (comma separated'
    ));

    $this->widgetSchema['is_indexable'] = new sfWidgetFormChoice(array(
    	'choices'	=>	array(0 => 'noindex', 1 => 'index'),
    	'expanded'	=>	false,
    ));
    
    $this->widgetSchema['is_followable'] = new sfWidgetFormChoice(array(
    	'choices'	=>	array(0 => 'nofollow', 1 => 'follow'),
    	'expanded'	=>	false,
    ));
    
    $this->setValidator['keywords'] = new sfValidatorString(array(
      'max_length' => 195,
      'required' => false
    ), array(
      'max_length' => 'Le texte est trop long. Il faut %max_length% caractères maximums.'
    ));
    
    $this->setValidator['keywords'] = new sfValidatorString(array(
      'max_length' => 255,
      'required' => false
    ), array(
    	'max_length' => 'Le texte est trop long. Il faut %max_length% caractères maximums.'
    ));

    $this->widgetSchema->setLabels(array(
      'is_indexable'	=> 'Index',
      'is_followable'	=> 'Follow',
    ));

    $this->widgetSchema->setHelps(array(
      'title'       => 'Your title for search engines',
      'description' => 'Your description for search engines',
      'keywords'    => 'Your keywords for search engines'
    ));
    
    $this->widgetSchema->setFormFormatterName('div');
  }

}