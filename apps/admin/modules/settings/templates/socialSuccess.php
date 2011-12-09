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
  
  
                <div id="tabs-1" class="facebook">
                
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
                  
                  <div style="display: none;" class="sf_admin_form_row sf_admin_text sf_admin_form_field_facebook_like">
                  <div>
                    <?php echo $form['facebook_like']->renderLabel() ?>
                    <div class="content">
                      <?php echo $form['facebook_like']->render(array('class' => 'text-input')) ?>
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
                
                
                
                
                
                
                
                
	<div id="tabs-2">
		<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
	</div>
	<div id="tabs-3">
		<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    </div>

                
                
                
                
                
                
                
            <br />    <br />    <br />    <br />    <br />    <br />    <br />    
                
                
                
                
                
              
                
                
                
                
                
                
                
                
                
                
                
                

                
                
                
                
                
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
    base.currentFacebook();
    base.changeFacebookRequest();
    base.changeFacebookLike();
    
    //TWITTER
 
    //GOOGLE

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