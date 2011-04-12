<?php use_helper('Date') ?>

<p>
  Date de publication :
  <time pubdate datetime="<?php echo format_date($created, 'yyyy-MM-dd', 'en') ?>">
    <?php echo format_date($updated, 'dd MMMM yyyy') ?>
  </time>
</p>