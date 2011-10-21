<?php 
if($form->isNew() && (!$sf_user->hasPermission('2') && !$sf_user->hasPermission('3')
   && !$sf_user->hasPermission('4') && !$sf_user->hasPermission('5')))
{
  echo '<div class="sorry sf_admin_form">';
    echo __('Sorry but you can not create link.', null, 'sfGuard');
  echo '.. Cheater!</div>';
}
else
{
?>


<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  
  <?php echo form_tag_for($form, '@peanut_link') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>
      
    <fieldset id="sf_fieldset_general">
      <div class="content_box_header">
        <h2><?php echo __('General') ?></h2>
      </div>
      
      <div class="content_box_content clearfix">
        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_title">
          <?php echo $form['title']->renderLabel() ?>
          
          <div class="content">
            <?php echo $form['title']->render() ?>
          </div>
          
          <div class="help">
            <?php echo $form['title']->renderHelp() ?>
          </div>
        </div>
        
        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_slug">
          <?php echo $form['slug']->renderLabel() ?>
          
          <div class="content">
            <?php echo $form['slug']->render() ?>
          </div>
          
          <div class="help">
            <?php echo $form['slug']->renderHelp() ?>
          </div>
        </div>
        
        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_url">
          <?php echo $form['url']->renderLabel() ?>
          
          <div class="content">
            <?php echo $form['url']->render() ?>
          </div>
          
          <div class="help">
            <?php echo $form['url']->renderHelp() ?>
          </div>
        </div>
        
      </div>
    </fieldset>
  
  
    <fieldset id="sf_fieldset_content">
      <div class="content_box_header">
        <h2><?php echo __('Contenu') ?></h2>
      </div>
      
      <div class="content_box_content">
        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_content">
          <?php echo $form['content']->renderLabel() ?>
          
          <div class="content">
            <?php echo $form['content']->render() ?>
          </div>
          
          <div class="help">
            <?php echo $form['content']->renderHelp() ?>
          </div>
        </div>

        
        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_peanutSeo">
          
          <?php echo $form['peanutSeo']->renderLabel() ?>
          
          <div class="content">
            <div class="embedForm">
              
              <div class="form-row sf_admin_form_field_peanutSeo_title">
                <?php echo $form['peanutSeo']['title']->renderLabel() ?>
                <?php echo $form['peanutSeo']['title']->render() ?>
                <div class="count">
                  <span class="counter"><?php echo $form['peanutSeo']['title']->getValue() ? 195 - strlen($form['peanutSeo']['title']->getValue()) : '195'; ?></span> <?php echo __('characters still available.', null, 'peanutCorporate') ?>
                </div>
                <div class="help hidden"><?php echo $form['peanutSeo']['title']->renderHelp() ?></div>
              </div>
              
              <div class="form-row sf_admin_form_field_peanutSeo_description">
                <?php echo $form['peanutSeo']['description']->renderLabel() ?>
                <?php echo $form['peanutSeo']['description']->render() ?>
                <div class="count">
                  <span class="counter"><?php echo $form['peanutSeo']['description']->getValue() ? 255 - strlen($form['peanutSeo']['description']->getValue()) : '255'; ?></span> <?php echo __('characters still available.', null, 'peanutCorporate') ?>
                </div>
                <div class="help hidden"><?php echo $form['peanutSeo']['description']->renderHelp() ?></div>
              </div>

              
              <div class="form-row">
                <?php echo $form['peanutSeo']['keywords']->renderLabel() ?>
                <?php echo $form['peanutSeo']['keywords']->render() ?>
                <div class="help"><?php echo $form['peanutSeo']['keywords']->renderHelp() ?></div>
              </div>
              
              <div class="form-row">
                <?php echo $form['peanutSeo']['is_indexable']->renderLabel() ?>
                <?php echo $form['peanutSeo']['is_indexable']->render() ?>
                <div class="help"><?php echo $form['peanutSeo']['is_indexable']->renderHelp() ?></div>
              </div>
              
              <div class="form-row">
                <?php echo $form['peanutSeo']['is_followable']->renderLabel() ?>
                <?php echo $form['peanutSeo']['is_followable']->render() ?>
                <div class="help"><?php echo $form['peanutSeo']['is_followable']->renderHelp() ?></div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_peanutXfn">
          
          <?php echo $form['peanutXfn']->renderLabel() ?>
          
          <div class="content">
            <div class="embedForm">
              
              <div class="form-row">
                <?php echo $form['peanutXfn']['me']->renderLabel() ?>
                <?php echo $form['peanutXfn']['me']->render() ?>
                <div class="help"><?php echo $form['peanutXfn']['me']->renderHelp() ?></div>
              </div>
              
              <div class="form-row">
                <?php echo $form['peanutXfn']['friendship']->renderLabel() ?>
                <?php echo $form['peanutXfn']['friendship']->render() ?>
                <div class="help"><?php echo $form['peanutXfn']['friendship']->renderHelp() ?></div>
              </div>
              
              <div class="form-row">
                <?php echo $form['peanutXfn']['physical']->renderLabel() ?>
                <?php echo $form['peanutXfn']['physical']->render() ?>
                <div class="help"><?php echo $form['peanutXfn']['physical']->renderHelp() ?></div>
              </div>
              
              <div class="form-row">
                <?php echo $form['peanutXfn']['professional']->renderLabel() ?>
                <?php echo $form['peanutXfn']['professional']->render() ?>
                <div class="help"><?php echo $form['peanutXfn']['professional']->renderHelp() ?></div>
              </div>
              
              <div class="form-row">
                <?php echo $form['peanutXfn']['geographical']->renderLabel() ?>
                <?php echo $form['peanutXfn']['geographical']->render() ?>
                <div class="help"><?php echo $form['peanutXfn']['geographical']->renderHelp() ?></div>
              </div>
              
              <div class="form-row">
                <?php echo $form['peanutXfn']['family']->renderLabel() ?>
                <?php echo $form['peanutXfn']['family']->render() ?>
                <div class="help"><?php echo $form['peanutXfn']['family']->renderHelp() ?></div>
              </div>
              
              <div class="form-row">
                <?php echo $form['peanutXfn']['romantic']->renderLabel() ?>
                <?php echo $form['peanutXfn']['romantic']->render() ?>
                <div class="help"><?php echo $form['peanutXfn']['romantic']->renderHelp() ?></div>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </fieldset>
  
    <fieldset id="sf_fieldset_informations">
      <div class="content_box_header">
        <h2><?php echo __('Informations') ?></h2>
      </div>
      
      <div class="content_box_content">
        <div class="sf_admin_form_row sf_admin_enum sf_admin_form_field_status">
          <?php echo $form['status']->renderLabel() ?>
          
          <div class="content">
            <?php echo $form['status']->render() ?>
          </div>
          
          <div class="help">
            <?php echo $form['status']->renderHelp() ?>
          </div>
        </div>
        
        <div class="sf_admin_form_row sf_admin_foreignkey sf_admin_form_field_author">
          <?php echo $form['author']->renderLabel() ?>
          
          <div class="content">
            <?php echo $form['author']->render() ?>
          </div>
          
          <div class="help">
            <?php echo $form['author']->renderHelp() ?>
          </div>
        </div>
        
        <div class="sf_admin_form_row sf_admin_foreignkey sf_admin_form_field_menu">
          <?php echo $form['menu']->renderLabel() ?>
          
          <div class="content" id="selectmenu">
            <?php echo $form['menu']->render() ?>
            
            <?php if($sf_user->hasPermission('2') || $sf_user->hasPermission('3') || $sf_user->hasPermission('4') || $sf_user->hasPermission('5')): ?>
              <a class="ajax" href="<?php echo url_for('adminMenu/newx') ?>">
                <img title="<?php echo __("Add new menu") ?>" src="/images/admin/add.png" />
              </a>
            <?php endif; ?>
          </div>
          
          <div class="help">            
            <?php echo $form['menu']->renderHelp() ?>
          </div>
          
          <div id="dialog"></div>
        </div>
        
        <?php if(!$form->isNew()): ?>
        <div class="sf_admin_form_row sf_admin_date sf_admin_form_field_menu">
          <?php echo $form['created_at']->renderLabel() ?>
          
          <div class="content">
            <?php echo $form['created_at']->render() ?>
          </div>
          
          <div class="help">
            <?php echo $form['created_at']->renderHelp() ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </fieldset>
  
    

    <?php include_partial('adminLink/form_actions', array('peanut_link' => $peanut_link, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>
<?php } ?>