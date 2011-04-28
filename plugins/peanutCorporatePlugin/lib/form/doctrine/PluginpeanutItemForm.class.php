<?php

/**
 * peanutItem form.
 *
 * @package    peanutCorporatePlugin
 * @subpackage form
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com> <albalmes@gmail.com>
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginpeanutItemForm extends BasepeanutItemForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();
    
    $user = self::getValidUser();
    
    $this->useFields(array(
     'title',
     'slug',
     'content',
     'excerpt',
     'status',
     'author',
     'status',
     'menu',
     'url',
     'relation',
     'created_at'
    ));
    
    $this->widgetSchema['title'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'required'    => true,
        'placeholder' => 'My Title'
    ));
    
    $this->widgetSchema['slug'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'My Title'
    ));
    
    $this->widgetSchema->setHelps(array(
      'title'         => 'The item title (required)',
      'slug'          => 'Not required but maybe usefull for your SEO',
      'content'       => 'The item content (required)',
      'excerpt'       => 'The item excerpt (not required)',
      'status'        => 'If you want to hide this entry for visitors',
      'menu'          => 'The menu where will appear this iteam',
      'url'           => 'The item url (must be an http or https url)',
      'relation'      => 'Your relation with the website',
      'created_at'    => 'Useful is you want to modify the date of the entry publication'
    ));

    $this->embedRelation('peanutSeo');
    $this->widgetSchema['peanutSeo']->setLabel('SEO');
    
   }
}
