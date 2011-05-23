<section id="sf_admin_container">
  
  <header>
    <h1><?php echo __('Your SEO') ?></h1>
  </header>
  
  <section id="sf_admin_header"></section>
  
  <section id="sf_admin_content">
    
    <div class="sf_admin_form clearfix">
      <form action="<?php echo url_for('settings/seo') ?>" method="post">
        
        <?php echo $form->renderHiddenFields() ?>
        <fieldset id="sf_fieldset_content">

          <div class="content_box_content clearfix">

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_meta_title">
              <div>
                <?php echo $form['meta_title']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['meta_title']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_meta_description">
              <div>
                <?php echo $form['meta_description']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['meta_description']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_street_meta_keywords">
              <div>
                <?php echo $form['meta_keywords']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['meta_keywords']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_meta_robots">
              <div>
                <?php echo $form['meta_robots']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['meta_robots']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_meta_language">
              <div>
                <?php echo $form['meta_language']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['meta_language']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

          </div>

        </fieldset>
        
        <fieldset id="sf_fieldset_informations">
          
          <p><?php echo __('Your SEO informations are used for display default meta in your head.') ?></p>
          
          <input name="Send" type="submit" value="<?php echo __('Submit') ?>" class="button" id="send" size="16"/>
        </fieldset>
        
      </form>
    </div>
  </section>
  
</section>