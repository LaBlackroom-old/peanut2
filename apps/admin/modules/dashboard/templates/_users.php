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
          <?php if($sf_user->getUsername() == $user['username'] ||
                   $sf_user->hasPermission('2') || $sf_user->hasPermission('3') || 
                   $sf_user->hasPermission('4') || $sf_user->hasPermission('5')): ?>
            <td class="action">
              <a href="<?php echo url_for('sf_guard_user_edit', array('id' => $user->getId())) ?>">
                <?php echo __('Edit') ?>
              </a>
            </td>
          <?php else: ?>
            <td class="action">
                <span class="blocked"><?php echo __('Edit') ?></span>
            </td>
          <?php endif; ?>
        </tr>
        <?php endforeach; ?>
      </tbody>
      
    </table>

  </section>

</section>