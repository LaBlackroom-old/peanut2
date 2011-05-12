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
          <td class="action"><a href="<?php echo url_for('peanut_item_edit', array('id' => $item->getId())) ?>"><?php echo __('Edit') ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </section>

</section>