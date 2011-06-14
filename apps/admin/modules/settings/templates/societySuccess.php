<section id="sf_admin_container">
  
  <header>
    <h1><?php echo __('About your society') ?></h1>
  </header>
  
  <section id="sf_admin_header"></section>
  
  <section id="sf_admin_content">
    
    <div class="sf_admin_form clearfix">
      <form action="<?php echo url_for('settings/society') ?>" method="post">
        
        <?php echo $form->renderHiddenFields() ?>
        <fieldset id="sf_fieldset_content">

          <div class="content_box_content clearfix">

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_society">
              <div>
                <?php echo $form['society']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['society']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_url">
              <div>
                <?php echo $form['url']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['url']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_street_address">
              <div>
                <?php echo $form['street-address']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['street-address']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_locality">
              <div>
                <?php echo $form['locality']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['locality']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_region">
              <div>
                <?php echo $form['region']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['region']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_postal_code">
              <div>
                <?php echo $form['postal-code']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['postal-code']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_country_name">
              <div>
                <?php echo $form['country-name']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['country-name']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_tel">
              <div>
                <?php echo $form['tel']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['tel']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

          </div>

        </fieldset>
        
        <fieldset id="sf_fieldset_informations">
          
          <p><?php echo __('The organization information can help Google and peanut understand location information about your company.') ?></p>
          <p><?php echo __('It can also used for your contact page.') ?></p>
          
          <input name="Send" type="submit" value="<?php echo __('Submit') ?>" class="button" id="send" size="16"/>
        </fieldset>
        
      </form>
    </div>
  </section>
  
</section>