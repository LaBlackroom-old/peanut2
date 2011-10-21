<?php if($sf_user->hasPermission('4') || $sf_user->hasPermission('5')){ ?>
  <?php echo $helper->linkToNew(array(  'params' =>   array(  ),  'class_suffix' => 'new',  'label' => 'New',)) ?>
<?php } ?>