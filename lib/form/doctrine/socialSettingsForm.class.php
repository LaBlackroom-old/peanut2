<?php

/**
 * googleSettings form.
 *
 * @package    peanut2
 * @subpackage form
 * @author     AlexandrepockyBalmes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class socialSettingsForm extends peanutSettingsForm
{
  public function configure()
  {
    $this->widgetSchema['facebook_request'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir', '1' => 'Yes', '2' => 'No')
    ));
    $this->widgetSchema['facebook_request']->setDefault(peanutConfig::get('facebook_request'));
    
    /* YES */
    $this->widgetSchema['facebook_page'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['facebook_page']->setDefault(peanutConfig::get('facebook_page'));
    
    /* NO --> */
    $this->widgetSchema['facebook_like'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir', '1' => 'Yes', '2' => 'No')
    ));
    $this->widgetSchema['facebook_like']->setDefault(peanutConfig::get('facebook_like'));
    
      /* YES */
      $this->widgetSchema['facebook_title'] = new sfWidgetFormHtml5InputText();
      $this->widgetSchema['facebook_title']->setDefault(peanutConfig::get('facebook_title'));
      
      $this->widgetSchema['facebook_type'] = new sfWidgetFormChoice(array(
        'choices' => array( 'activity'        => 'Activity', 
                            'sport'           => 'Sport', 
                            'bar'             => 'Bar', 
                            'company'         => 'Company', 
                            'cafe'            => 'Cafe', 
                            'hotel'           => 'Hotel', 
                            'restaurant'      => 'Restaurant', 
                            'cause'           => 'Cause', 
                            'sports_league'   => 'Sport League', 
                            'sports_team'     => 'Sport Team', 
                            'band'            => 'Band', 
                            'government'      => 'Government', 
                            'non_profit'      => 'Non Profit', 
                            'school'          => 'School', 
                            'university'      => 'University',
                            'actor'           => 'Actor', 
                            'athlete'         => 'Athlete', 
                            'author'          => 'Author', 
                            'director'        => 'Director', 
                            'musician'        => 'Musician', 
                            'politician'      => 'Politician', 
                            'public_figure'   => 'Public Figure', 
                            'city'            => 'City', 
                            'country'         => 'Country', 
                            'landmark'        => 'Landmark', 
                            'state_province'  => 'State Province', 
                            'album'           => 'Album', 
                            'book'            => 'Book', 
                            'drink'           => 'Drink',
                            'food'            => 'Food', 
                            'game'            => 'Game',
                            'product'         => 'Product', 
                            'song'            => 'Song',
                            'movie'           => 'Movie', 
                            'tv_show'         => 'TV Show',
                            'blog'            => 'Blog', 
                            'website'         => 'Website',
                            'article'         => 'Article')
          
      ));
      $this->widgetSchema['facebook_type']->setDefault(peanutConfig::get('facebook_type'));

      $this->widgetSchema['facebook_url'] = new sfWidgetFormHtml5InputText();
      $this->widgetSchema['facebook_url']->setDefault(peanutConfig::get('facebook_url'));
      
      /*
      $this->widgetSchema['facebook_image'] = new sfWidgetFormInputFileEditable(array(
        'label' => 'Facebook Image',
        'file_src' => '/uploads/fbLikeImg/',
        'is_image' => true,
        'edit_mode' => !$this->isNew(),
        'template' => '%file% %input% %delete% %delete_label%'
      ));

      $this->validatorSchema['facebook_image'] = new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir').'/fbLikeImg',
          'validated_file_class' => 'peanutValidatedFile',
      ));

      $this->validatorSchema['facebook_image_delete'] = new sfValidatorPass();
      $this->widgetSchema['facebook_image']->setDefault(peanutConfig::get('facebook_image'));
      */
      
      
      $this->widgetSchema['facebook_sitename'] = new sfWidgetFormHtml5InputText();
      $this->widgetSchema['facebook_sitename']->setDefault(peanutConfig::get('facebook_sitename'));

      $this->widgetSchema['facebook_description'] = new sfWidgetFormHtml5InputText();
      $this->widgetSchema['facebook_description']->setDefault(peanutConfig::get('facebook_description'));
    
    
    
    
    
    
    
    

  }
}
