<section id="sf_admin_container">
  
  <header>
    <h1><?php echo __('General settings') ?></h1>
  </header>
  
  <section id="sf_admin_header"></section>
  
  <section id="sf_admin_content">
    
    <div class="sf_admin_form clearfix">
      <form action="<?php echo url_for('settings/general') ?>" method="post">
        
        <?php echo $form->renderHiddenFields() ?>
        <fieldset id="sf_fieldset_content">

          <div class="content_box_content clearfix">

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_site_name">
              <div>
                <?php echo $form['site_name']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['site_name']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_meteo">
              <div>
                <?php echo $form['meteo']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['meteo']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

          </div>

        </fieldset>
        
        <fieldset id="sf_fieldset_informations">
          
          <p><?php echo __('This is your general settings, they are used for amin panel and/or the frontend application.') ?></p>
          
          <input name="Send" type="submit" value="<?php echo __('Submit') ?>" class="button" id="send" size="16"/>
        </fieldset>
        
      </form>
    </div>
  </section>
  
</section>