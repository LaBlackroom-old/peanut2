<?php use_helper('Date') ?>

<p>
  <?php echo __('Published at', null, 'peanutCoporate') ?>
  <time pubdate datetime="<?php echo format_date($created, 'yyyy-MM-dd', 'en') ?>">
    <?php echo format_date($updated, 'dd MMMM yyyy') ?>
  </time>
</p>