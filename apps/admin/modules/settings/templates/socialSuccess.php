<!-- In order to add icon : http://www.iconfinder.com/icondetails/50747/82/facebook_icon -->
<section id="sf_admin_container">

  <header>
    <h1><?php echo __('Social settings') ?></h1>
  </header>
  
<?php if($sf_user->hasPermission('4') || $sf_user->hasPermission('5')){ ?>
    
    <section id="sf_admin_header"></section>

    <section id="sf_admin_content">

      <div class="sf_admin_form clearfix">
        <form action="<?php echo url_for('settings/social') ?>" multipart="true" method="post">

          <?php echo $form->renderHiddenFields() ?>
          <fieldset id="sf_fieldset_content">

            <div class="content_box_content clearfix">

              <div id="tabs">
                <ul>
                  <li><a href="#tabs-1"><img src="/images/social/facebook.png" lat="" /></a></li>
                  <li><a href="#tabs-2"><img src="/images/social/twitter.png" lat="" /></a></li>
                  <li><a href="#tabs-3"><img src="/images/social/google.png" lat="" /></a></li>
                </ul>
  
                <!-- FACEBOOK -->
                
                <div id="tabs-1" class="facebook">

                  <p>
                    Le lien vers votre page Facebook ainsi que le bouton "J'aime" vous permet de partager 
                    du contenu avec vos amis sur Facebook. Lorsqu'un utilisateur clique sur le bouton 
                    de votre site, il partage le contenu avec l'ensemble de ces amis. Suivez le guide
                    pour associer votre compte Facebook et créer un bouton "J'aime" sur votre site.
                    <strong>Si vous ne disposez pas de compte Facebook, vous pouvez en créer un en cliquant 
                    <a target="_blank" href="http://www.facebook.com/" alt="Créer un compte Facebook">ici</a></strong>.
                    
                    
                  </p>
    
                  <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_request">
                    <div>
                      <?php echo $form['facebook_request']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['facebook_request']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_page">
                    <div>
                      <?php echo $form['facebook_page']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['facebook_page']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <!-- OpenGraph -->
                  <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_like">
                  <div>
                    <?php echo $form['facebook_like']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_like']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                  
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_like_send_button">
                  <div>
                    <?php echo $form['facebook_like_send_button']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_like_send_button']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_like_layout_style">
                  <div>
                    <?php echo $form['facebook_like_layout_style']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_like_layout_style']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                  
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_like_width">
                  <div>
                    <?php echo $form['facebook_like_width']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_like_width']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                  
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_like_show_face">
                  <div>
                    <?php echo $form['facebook_like_show_face']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_like_show_face']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                  
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_like_verb_to_display">
                  <div>
                    <?php echo $form['facebook_like_verb_to_display']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_like_verb_to_display']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
 
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_like_color_scheme">
                  <div>
                    <?php echo $form['facebook_like_color_scheme']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_like_color_scheme']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                  
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_like_font">
                  <div>
                    <?php echo $form['facebook_like_font']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_like_font']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                  
                <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_share">
                  <div>
                    <?php echo $form['facebook_share']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_share']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_title">
                  <div>
                    <?php echo $form['facebook_title']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_title']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_type">
                  <div>
                    <?php echo $form['facebook_type']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_type']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                  
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_url">
                  <div>
                    <?php echo $form['facebook_url']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_url']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                  
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_image">
                  <div>
                    <?php echo $form['facebook_image']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_image']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
 
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_sitename">
                  <div>
                    <?php echo $form['facebook_sitename']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_sitename']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                  
                <div style="display:none" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_description">
                  <div>
                    <?php echo $form['facebook_description']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_description']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
              </div>
              
                
                <!-- TWITTER -->
                
                <div id="tabs-2" class="twitter">
                
                  <p>
                    Ajoutez des boutons à votre site Web pour aider vos visiteurs à partager 
                    du contenu avec vous sur Twitter. Suivez le guide pour ajouter les boutons Follow
                    et Tweet sur votre site. <strong>Si vous ne disposez pas de compte Twitter, vous 
                    pouvez en créer un en cliquant 
                    <a target="_blank" href="http://twitter.com/" alt="Créer un compte Twitter">ici</a></strong>.
                  </p>
                
                  <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_request">
                    <div>
                      <?php echo $form['twitter_request']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_request']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_account">
                    <div>
                      <?php echo $form['twitter_account']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_account']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_follow_request">
                    <div>
                      <?php echo $form['twitter_follow_request']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_follow_request']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>

                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_data_show_screen_name">
                    <div>
                      <?php echo $form['twitter_data_show_screen_name']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_data_show_screen_name']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_data_show_count">
                    <div>
                      <?php echo $form['twitter_data_show_count']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_data_show_count']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_follow_data_size">
                    <div>
                      <?php echo $form['twitter_follow_data_size']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_follow_data_size']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_follow_lang">
                    <div>
                      <?php echo $form['twitter_follow_lang']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_follow_lang']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>

                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_tweet_request">
                    <div>
                      <?php echo $form['twitter_tweet_request']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_tweet_request']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>

                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_tweet_url_request">
                    <div>
                      <?php echo $form['twitter_tweet_url_request']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_tweet_url_request']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_tweet_url">
                    <div>
                      <?php echo $form['twitter_tweet_url']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_tweet_url']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>

                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_tweet_text_request">
                    <div>
                      <?php echo $form['twitter_tweet_text_request']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_tweet_text_request']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>

                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_tweet_text">
                    <div>
                      <?php echo $form['twitter_tweet_text']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_tweet_text']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_show_count">
                    <div>
                      <?php echo $form['twitter_show_count']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_show_count']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>

                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_tweet_data_size">
                    <div>
                      <?php echo $form['twitter_tweet_data_size']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_tweet_data_size']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div> 
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_tweet_lang">
                    <div>
                      <?php echo $form['twitter_tweet_lang']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_tweet_lang']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_tweet_recommended">
                    <div>
                      <?php echo $form['twitter_tweet_recommended']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_tweet_recommended']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_tweet_hashtag">
                    <div>
                      <?php echo $form['twitter_tweet_hashtag']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['twitter_tweet_hashtag']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
 
                <!-- GOOGLE -->
                <div id="tabs-3" class="google">
                  
                  <p>
                    Doter votre site d'un bouton +1 ! Votre site se démarque et tout le monde peut 
                    recommander votre contenu lors d'une recherche Google. Suivez le guide en associant
                    votre page google, en créant un bouton +1 et un extrait Google+ personnalisé.
                    <strong>Si vous ne disposez pas de compte Google+, vous pouvez en créer un en cliquant 
                    <a target="_blank" href="http://plus.google.com/" alt="Créer un compte Google+">ici</a></strong>.
                  </p>
                  
                  <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_request">
                    <div>
                      <?php echo $form['google_request']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_request']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_page_link">
                    <div>
                      <?php echo $form['google_page_link']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_page_link']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_request">
                    <div>
                      <?php echo $form['google_plus_request']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_plus_request']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_size">
                    <div>
                      <?php echo $form['google_plus_size']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_plus_size']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_note">
                    <div>
                      <?php echo $form['google_plus_note']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_plus_note']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_url">
                    <div>
                      <?php echo $form['google_plus_url']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_plus_url']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_perso_request">
                    <div>
                      <?php echo $form['google_plus_perso_request']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_plus_perso_request']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_type">
                    <div>
                      <?php echo $form['google_plus_type']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_plus_type']->render(array('class' => 'text-input')) ?>
                        <span class="google_plus_other_type">
                          <?php echo $form['google_plus_other_type']->render(array('class' => 'text-input')) ?>
                          <a target="_blank" href="http://schema.org/docs/schemas.html" alt="schema.org">Plus d'infos</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_title">
                    <div>
                      <?php echo $form['google_plus_title']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_plus_title']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_url_image">
                    <div>
                      <?php echo $form['google_plus_url_image']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_plus_url_image']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_description">
                    <div>
                      <?php echo $form['google_plus_description']->renderLabel() ?>
                      <div class="content">
                        <?php echo $form['google_plus_description']->render(array('class' => 'text-input')) ?>
                      </div>
                    </div>
                  </div>
                </div>

            </div>

          </fieldset>

          <fieldset id="sf_fieldset_informations">

            <p><?php echo __('This is your social settings, they are used for admin panel and/or the frontend application.') ?></p>

            <input name="Send" type="submit" value="<?php echo __('Submit') ?>" class="button" id="send" size="16"/>
          </fieldset>

        </form>
      </div>
    </section>

  </section>

<script>
  
  $(function() {
    $( "#tabs" ).tabs();
  });

  $(document).ready(function() {

    // FACEBOOK
    facebook.current();
    facebook.change();
    
    //TWITTER
    twitter.current();
    twitter.change();
    
    //GOOGLE 
    google.current();
    google.change();
  });
</script>

<?php  
}
else{
?>
  <div class="sorry sf_admin_form">
    <?php echo __('Sorry, but you do not have access rights to this part.', null, 'sfGuard') ?>.. Cheater !
  </div>    
<?php
}
?>