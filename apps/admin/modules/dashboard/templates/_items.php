<section id="items" class="box">
  <header>
    <h2><?php echo __('Last items') ?></h2>
  </header>

  <section class="boxContent">
    <table>
      <tbody>
        <?php foreach($items as $item): ?>
        <tr>
          <td class="item"><?php echo $item->getTitle() ?></td>
          <?php if($sf_user->hasPermission('2') || $sf_user->hasPermission('3') || 
                   $sf_user->hasPermission('4') || $sf_user->hasPermission('5')): ?>
            <td class="action">
              <a href="<?php echo url_for('peanut_item_edit', array('id' => $item->getId())) ?>"><?php echo __('Edit') ?>
            </td>
          <?php elseif($sf_user->hasPermission('1')): ?>
            <td class="action">
              <a href="<?php echo url_for('peanut_item_edit', array('id' => $item->getId())) ?>"><?php echo __('Read') ?>
            </td>
          <?php endif; ?>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </section>

</section>