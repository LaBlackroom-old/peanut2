<section id="sf_admin_container">

  <header>
    <h1><?php echo __('Social settings') ?></h1>
  </header>
  
<?php if($sf_user->hasPermission('4') || $sf_user->hasPermission('5')){ ?>
    
    <section id="sf_admin_header"></section>

    <section id="sf_admin_content">

      <div class="sf_admin_form clearfix">
        <form action="<?php echo url_for('settings/social') ?>" method="post">

          <?php echo $form->renderHiddenFields() ?>
          <fieldset id="sf_fieldset_content">

            <div class="content_box_content clearfix">

              <div class="">
                <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_url">
                  <div>
                    <?php echo $form['facebook_url']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_url']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>

                <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_like">
                  <div>
                    <?php echo $form['facebook_like']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_like']->render(array('class' => 'text-input')) ?>
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
                
                <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_url">
                  <div>
                    <?php echo $form['twitter_url']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['twitter_url']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                
                <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_twitter_follow">
                  <div>
                    <?php echo $form['twitter_follow']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['twitter_follow']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                
                <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_url">
                  <div>
                    <?php echo $form['google_plus_url']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['google_plus_url']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                
                <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_plus_1">
                  <div>
                    <?php echo $form['google_plus_1']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['google_plus_1']->render(array('class' => 'text-input')) ?>
                    </div>
                  </div>
                </div>
                
                <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_viadeo_url">
                  <div>
                    <?php echo $form['viadeo_url']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['viadeo_url']->render(array('class' => 'text-input')) ?>
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
  $(document).ready(function() {
    
    if( '1' == $('select#settings_facebook_like').val() ){
      $('.sf_admin_form_field_facebook_description').css('display', 'block');
    }
      
    $('select#settings_facebook_like').change(function() {
      
      if( '1' == $('select#settings_facebook_like').val() ){
        $('.sf_admin_form_field_facebook_description').css('display', 'block');
      }
      else{
        $('.sf_admin_form_field_facebook_description').css('display', 'none');
      }
    });
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