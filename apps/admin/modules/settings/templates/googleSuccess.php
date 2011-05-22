<section id="sf_admin_container">
  
  <header>
    <h1><?php echo __('Your Google account') ?></h1>
  </header>
  
  <section id="sf_admin_header"></section>
  
  <section id="sf_admin_content">
    
    <div class="sf_admin_form clearfix">
      <form action="<?php echo url_for('settings/google') ?>" method="post">
        
        <?php echo $form->renderHiddenFields() ?>
        <fieldset id="sf_fieldset_content">

          <div class="content_box_content clearfix">

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_mail">
              <div>
                <?php echo $form['google_mail']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['google_mail']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_password">
              <div>
                <?php echo $form['google_password']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['google_password']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_tracking">
              <div>
                <?php echo $form['google_tracking']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['google_tracking']->render(array('class' => 'text-input')) ?>
                </div>
                <div class="help">
                  <?php echo $form['google_tracking']->renderHelp(); ?>
                </div>
              </div>
            </div>
            
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_google_guid">
              <div>
                <?php echo $form['google_guid']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['google_guid']->render(array('class' => 'text-input')) ?>
                </div>
                <div class="help">
                  <?php echo $form['google_guid']->renderHelp(); ?>
                </div>
              </div>
            </div>

          </div>

        </fieldset>
        
        <fieldset id="sf_fieldset_informations">
          
          <p><?php echo __('The google information are used for manage your google account and follow your analytics.') ?></p>
          
          <input name="Send" type="submit" value="<?php echo __('Submit') ?>" class="button" id="send" size="16"/>
        </fieldset>
        
      </form>
    </div>
  </section>
  
</section>