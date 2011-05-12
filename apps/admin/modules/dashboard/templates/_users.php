<section id="users" class="box">
  <header>
    <h2><?php echo __('Last registered users') ?></h2>
  </header>

  <section class="boxContent">
    
    <table>
      
      <tbody>
        <?php foreach($users as $user): ?>
        <tr>
          <td class="item"><?php echo $user ?></td>
          <td class="action"><a href="<?php echo url_for('sf_guard_user_edit', array('id' => $user->getId())) ?>"><?php echo __('Edit') ?></a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      
    </table>

  </section>

</section>