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
    
    /* -- FACEBOOK -- */
    
    $this->widgetSchema['facebook_request'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir...', '1' => 'Yes', '2' => 'No')
    ));
    $this->widgetSchema['facebook_request']->setDefault(peanutConfig::get('facebook_request'));
    
    /* YES */
    $this->widgetSchema['facebook_page'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'http://www.facebook.com...',
      ));
    $this->widgetSchema['facebook_page']->setDefault(peanutConfig::get('facebook_page'));
    
    
    
    
    
    
    $this->widgetSchema['facebook_like'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir...', '1' => 'Yes', '2' => 'No')
    ));
    $this->widgetSchema['facebook_like']->setDefault(peanutConfig::get('facebook_like'));

        /* Send Button */
        $this->widgetSchema['facebook_like_send_button'] = new sfWidgetFormChoice(array(
          'choices' => array('0' => 'No', '1' => 'Yes')
        ));
        $this->widgetSchema['facebook_like_send_button']->setDefault(peanutConfig::get('facebook_like_send_button'));

        /* Layout Style (standard / count / box) */
        $this->widgetSchema['facebook_like_layout_style'] = new sfWidgetFormChoice(array(
          'choices' => array('0' => 'standard', '1' => 'button_count', '2' => 'box_count')
        ));
        $this->widgetSchema['facebook_like_layout_style']->setDefault(peanutConfig::get('facebook_like_layout_style'));

        /* width */
        $this->widgetSchema['facebook_like_width'] = new sfWidgetFormHtml5InputText();
        $this->widgetSchema['facebook_like_width']->setDefault(peanutConfig::get('facebook_like_width'));

        /* Show Face */
        $this->widgetSchema['facebook_like_show_face'] = new sfWidgetFormChoice(array(
          'choices' => array('0' => 'No', '1' => 'Yes')
        ));
        $this->widgetSchema['facebook_like_show_face']->setDefault(peanutConfig::get('facebook_like_show_face'));

        /* Verb to display */
        $this->widgetSchema['facebook_like_verb_to_display'] = new sfWidgetFormChoice(array(
          'choices' => array('0' => 'J\'aime', '1' => 'Recommander')
        ));
        $this->widgetSchema['facebook_like_verb_to_display']->setDefault(peanutConfig::get('facebook_like_verb_to_display'));
        
        /* Color Scheme */
        $this->widgetSchema['facebook_like_color_scheme'] = new sfWidgetFormChoice(array(
          'choices' => array('0' => 'light', '1' => 'dark')
        ));
        $this->widgetSchema['facebook_like_color_scheme']->setDefault(peanutConfig::get('facebook_like_color_scheme'));

        /* Font */
        $this->widgetSchema['facebook_like_font'] = new sfWidgetFormChoice(array(
          'choices' => array('0' => 'Par défaut',
                             'arial' => 'Arial', 
                             'lucida grande' => 'Lucida Grande',
                             'segoe ui' => 'Segoe UI',
                             'tahoma' => 'Tahoma',
                             'trebuchet ms' => 'Trebuchet MS',
                             'verdana' => 'Verdana'
                             )
        ));
        $this->widgetSchema['facebook_like_font']->setDefault(peanutConfig::get('facebook_like_font'));
      
      
    /* YES */
    $this->widgetSchema['facebook_share'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir...', '1' => 'Yes', '2' => 'No')
    ));
    $this->widgetSchema['facebook_share']->setDefault(peanutConfig::get('facebook_share'));


        /* YES */
        $this->widgetSchema['facebook_title'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'Mon titre',
      ));
        $this->widgetSchema['facebook_title']->setDefault(peanutConfig::get('facebook_title'));

        $this->widgetSchema['facebook_type'] = new sfWidgetFormChoice(array(
          'choices' => array( '0'               => 'Choisir...',
                              'activity'        => 'Activity', 
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
                              'article'         => 'Article'
                            )

        ));
        $this->widgetSchema['facebook_type']->setDefault(peanutConfig::get('facebook_type'));

        $this->widgetSchema['facebook_url'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'Mon URL',
      ));
        $this->widgetSchema['facebook_url']->setDefault(peanutConfig::get('facebook_url'));

        $this->widgetSchema['facebook_image'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'Le lien de mon image',
      ));
        $this->widgetSchema['facebook_image']->setDefault(peanutConfig::get('facebook_image'));      

        $this->widgetSchema['facebook_sitename'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'Mon nom',
      ));
        $this->widgetSchema['facebook_sitename']->setDefault(peanutConfig::get('facebook_sitename'));

        $this->widgetSchema['facebook_description'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'Ma description',
      ));
        $this->widgetSchema['facebook_description']->setDefault(peanutConfig::get('facebook_description'));




        

      
      
      
      
      
      /* -- TWITTER -- */
      $this->widgetSchema['twitter_request'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir', '1' => 'Yes', '2' => 'No')
      ));
      $this->widgetSchema['twitter_request']->setDefault(peanutConfig::get('twitter_request'));
      
      /* 1 - Follow */
      $this->widgetSchema['twitter_follow_request'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir', '1' => 'Yes', '2' => 'No')
      ));
      $this->widgetSchema['twitter_follow_request']->setDefault(peanutConfig::get('twitter_follow_request'));
      
      /* YES */
      $this->widgetSchema['twitter_account'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'Mon nom sur Twitter',
      ));
      $this->widgetSchema['twitter_account']->setDefault(peanutConfig::get('twitter_account'));

      
      $this->widgetSchema['twitter_data_show_screen_name'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'No', '1' => 'Yes')
      ));
      $this->widgetSchema['twitter_data_show_screen_name']->setDefault(peanutConfig::get('twitter_data_show_screen_name'));

      $this->widgetSchema['twitter_data_show_count'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'No', '1' => 'Yes')
      ));
      $this->widgetSchema['twitter_data_show_count']->setDefault(peanutConfig::get('twitter_data_show_count'));
 
      $this->widgetSchema['twitter_follow_data_size'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Small', '1' => 'Large')
      ));
      $this->widgetSchema['twitter_follow_data_size']->setDefault(peanutConfig::get('twitter_follow_data_size'));
     
      $this->widgetSchema['twitter_follow_lang'] = new sfWidgetFormChoice(array(
        'choices' => array('en' => 'English', 'fr' => 'Francais')
      ));
      $this->widgetSchema['twitter_follow_lang']->setDefault(peanutConfig::get('twitter_follow_lang'));
      
      
      /* 2 - Tweet */
      $this->widgetSchema['twitter_tweet_request'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir', '1' => 'Yes', '2' => 'No')
      ));
      $this->widgetSchema['twitter_tweet_request']->setDefault(peanutConfig::get('twitter_tweet_request'));
    
      $this->widgetSchema['twitter_tweet_url_request'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Use the page url', '1' => 'Configure...')
      ));
      $this->widgetSchema['twitter_tweet_url_request']->setDefault(peanutConfig::get('twitter_tweet_url_request'));
      
      $this->widgetSchema['twitter_tweet_url'] = new sfWidgetFormHtml5InputText();
      $this->widgetSchema['twitter_tweet_url']->setDefault(peanutConfig::get('twitter_tweet_url'));
      
      $this->widgetSchema['twitter_tweet_text_request'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Use the title of the page', '1' => 'Configure...')
      ));
      $this->widgetSchema['twitter_tweet_text_request']->setDefault(peanutConfig::get('twitter_tweet_text_request'));
      
      $this->widgetSchema['twitter_tweet_text'] = new sfWidgetFormHtml5InputText();
      $this->widgetSchema['twitter_tweet_text']->setDefault(peanutConfig::get('twitter_tweet_text'));
      
      $this->widgetSchema['twitter_show_count'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'No', '1' => 'Yes')
      ));
      $this->widgetSchema['twitter_show_count']->setDefault(peanutConfig::get('twitter_show_count'));
      
      $this->widgetSchema['twitter_tweet_data_size'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Small', '1' => 'Large')
      ));
      $this->widgetSchema['twitter_tweet_data_size']->setDefault(peanutConfig::get('twitter_tweet_data_size'));

      $this->widgetSchema['twitter_tweet_lang'] = new sfWidgetFormChoice(array(
        'choices' => array('en' => 'English', 'fr' => 'Francais')
      ));
      $this->widgetSchema['twitter_tweet_lang']->setDefault(peanutConfig::get('twitter_tweet_lang'));
      
      $this->widgetSchema['twitter_tweet_recommended'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => '@',
      ));
      $this->widgetSchema['twitter_tweet_recommended']->setDefault(peanutConfig::get('twitter_tweet_recommended'));
      
      $this->widgetSchema['twitter_tweet_hashtag'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => '#',
      ));
      $this->widgetSchema['twitter_tweet_hashtag']->setDefault(peanutConfig::get('twitter_tweet_hashtag'));
      
      
      
      
      
      
      
      
      /* -- GOOGLE -- */
      
      /* 1 - Page perso */
      $this->widgetSchema['google_request'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir', '1' => 'Yes', '2' => 'No')
      ));
      $this->widgetSchema['google_request']->setDefault(peanutConfig::get('google_request'));
      
      $this->widgetSchema['google_page_link'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'Mon identifiant Google+',
      ));
      $this->widgetSchema['google_page_link']->setDefault(peanutConfig::get('google_page_link'));
      
      
      /* 2 - Bouton +1 */
      $this->widgetSchema['google_plus_request'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir', '1' => 'Yes', '2' => 'No')
      ));
      $this->widgetSchema['google_plus_request']->setDefault(peanutConfig::get('google_plus_request'));
      
      $this->widgetSchema['google_plus_size'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Petit (15px)', '1' => 'Moyen (20px)', '2' => 'Standard (24px)', '3' => 'Grand (60px)')
      ));
      $this->widgetSchema['google_plus_size']->setDefault(peanutConfig::get('google_plus_size'));
      
      $this->widgetSchema['google_plus_note'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Info-bulle', '1' => 'Intégrée', '2' => 'Aucune')
      ));
      $this->widgetSchema['google_plus_note']->setDefault(peanutConfig::get('google_plus_note'));
      
      $this->widgetSchema['google_plus_url'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'URL courante par défaut',
      ));
      $this->widgetSchema['google_plus_url']->setDefault(peanutConfig::get('google_plus_url'));
      
      
      
      
      
      $this->widgetSchema['google_plus_perso_request'] = new sfWidgetFormChoice(array(
        'choices' => array('0' => 'Choisir', '1' => 'Yes', '2' => 'No')
      ));
      $this->widgetSchema['google_plus_perso_request']->setDefault(peanutConfig::get('google_plus_perso_request'));

      $this->widgetSchema['google_plus_type'] = new sfWidgetFormChoice(array(
        'choices' => array( '0'             => 'Choisir...',
                            'Article'       => 'Article', 
                            'Bblog'         => 'Blog', 
                            'Book'          => 'Book',
                            'Event'         => 'Event', 
                            'LocalBusiness' => 'Entreprise Locale', 
                            'Organization'  => 'Organization', 
                            'Person'        => 'Person', 
                            'Product'       => 'Product', 
                            'Review'        => 'Review', 
                            'Review'        => 'Review',
                            '1'             => 'Autres'
                          )
          
      ));
      $this->widgetSchema['google_plus_type']->setDefault(peanutConfig::get('google_plus_type'));
      
      $this->widgetSchema['google_plus_other_type'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'Cliquez sur "Plus d\infos" pour en savoir plus',
      ));
      $this->widgetSchema['google_plus_other_type']->setDefault(peanutConfig::get('google_plus_other_type'));
      
      $this->widgetSchema['google_plus_title'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'Mon titre',
      ));
      $this->widgetSchema['google_plus_title']->setDefault(peanutConfig::get('google_plus_title'));
      
      $this->widgetSchema['google_plus_url_image'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'Mon URL',
      ));
      $this->widgetSchema['google_plus_url_image']->setDefault(peanutConfig::get('google_plus_url_image'));
      
      $this->widgetSchema['google_plus_description'] = new sfWidgetFormTextarea($options = array(), $attributes = array(
        'placeholder' => 'Ma description',
      ));
      $this->widgetSchema['google_plus_description']->setDefault(peanutConfig::get('google_plus_url'));
  }
}
