<section id="sf_admin_container">
  
  <header>
    <h1><?php echo __('Contact config') ?></h1>
  </header>
  
  <section id="sf_admin_header"></section>
  
  <section id="sf_admin_content">
    
    <div class="sf_admin_form clearfix">
      <form action="<?php echo url_for('settings/contact') ?>" method="post">
        
        <?php echo $form->renderHiddenFields() ?>
        <fieldset id="sf_fieldset_content">

          <div class="content_box_content clearfix">

            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_offer_per_page">
              <div>
                <?php echo $form['contact_from']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['contact_from']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

          </div>
          
         <div class="content_box_content clearfix">
           
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_offer_per_page">
              <div>
                <?php echo $form['webmaster_name']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['webmaster_name']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>

          </div>
          
          <div class="content_box_content clearfix">
            
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_offer_per_page">
              <div>
                <?php echo $form['webmaster_mail']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['webmaster_mail']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>
            
          </div>
          
          <div class="content_box_content clearfix">
            
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_subject">
              <div>
                <?php echo $form['subject']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['subject']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>
            
          </div>
          
          <div class="content_box_content clearfix">
            
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_map_name">
              <div>
                <?php echo $form['map_name']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['map_name']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>
            
          </div>
          
         <div class="content_box_content clearfix">
            
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_map_center">
              <div>
                <?php echo $form['map_center']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['map_center']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>
            
          </div>
          
          <div class="content_box_content clearfix">
            
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_map_address">
              <div>
                <?php echo $form['map_address']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['map_address']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>
            
          </div>
          
          <div class="content_box_content clearfix">
            
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_map_zoom">
              <div>
                <?php echo $form['map_zoom']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['map_zoom']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>
            
          </div>
          
          <div class="content_box_content clearfix">
            
            <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_map_size">
              <div>
                <?php echo $form['map_size']->renderLabel() ?>
                <div class="content">
                  <?php echo $form['map_size']->render(array('class' => 'text-input')) ?>
                </div>
              </div>
            </div>
            
          </div>
          

        </fieldset>
        
        <fieldset id="sf_fieldset_informations">
          
          <p><?php echo __('Configure the auto message from your contact form') ?></p>
          
          
          <input name="Send" type="submit" value="<?php echo __('Submit') ?>" class="button" id="send" size="16"/>
        </fieldset>
        
      </form>
    </div>
  </section>
  
</section>