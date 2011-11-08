<?php 
if($sf_user->hasPermission('4') || $sf_user->hasPermission('5'))
{
  $results = 0;
?>
  <div class="sf_admin_list">
    <?php if (!$pager->getNbResults()): ?>
      <p><?php echo __('No result', array(), 'sf_admin') ?></p>
    <?php else: ?>
      <table cellspacing="0">
        <thead>
          <tr>
            <th id="sf_admin_list_batch_actions"><input id="sf_admin_list_batch_checkbox" type="checkbox" onclick="checkAll();" /></th>
            <?php include_partial('sfGuardUser/list_th_tabular', array('sort' => $sort)) ?>
            <th id="sf_admin_list_th_actions"><?php echo __('Actions', array(), 'sf_admin') ?></th>
          </tr>
        </thead>
        
        <tbody>
          <?php foreach ($pager->getResults() as $i => $sf_guard_user): 
            $odd = fmod(++$i, 2) ? 'odd' : 'even' 
          ?>
            <?php if($sf_user->hasPermission('4') && !$sf_user->hasPermission('5')) : ?>
              <?php if(!$sf_guard_user->hasPermission('5')): ?>
                <tr class="sf_admin_row <?php echo $odd ?>">
                  <?php include_partial('sfGuardUser/list_td_batch_actions', array('sf_guard_user' => $sf_guard_user, 'helper' => $helper)) ?>
                  <?php include_partial('sfGuardUser/list_td_tabular', array('sf_guard_user' => $sf_guard_user)) ?>
                  <?php include_partial('sfGuardUser/list_td_actions', array('sf_guard_user' => $sf_guard_user, 'helper' => $helper)) ?>
                </tr>
                <?php $results++ ?>
              <?php endif; ?>
            <?php else: ?>
              <tr class="sf_admin_row <?php echo $odd ?>">
                <?php include_partial('sfGuardUser/list_td_batch_actions', array('sf_guard_user' => $sf_guard_user, 'helper' => $helper)) ?>
                <?php include_partial('sfGuardUser/list_td_tabular', array('sf_guard_user' => $sf_guard_user)) ?>
                <?php include_partial('sfGuardUser/list_td_actions', array('sf_guard_user' => $sf_guard_user, 'helper' => $helper)) ?>
              </tr>
              <?php $results++ ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </tbody>
        
        <tfoot>
          <tr>
            <th colspan="6">
              <?php if ($pager->haveToPaginate()): ?>
                <?php include_partial('sfGuardUser/pagination', array('pager' => $pager)) ?>
              <?php endif; ?>

              <?php //echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?>
              <?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $results), $results, 'sf_admin') ?>
              <?php if ($pager->haveToPaginate()): ?>
                <?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?>
              <?php endif; ?>
            </th>
          </tr>
        </tfoot>
      </table>
    <?php endif; ?>
  </div>
  <script type="text/javascript">
  /* <![CDATA[ */
  function checkAll()
  {
    var boxes = document.getElementsByTagName('input'); for(var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
  }
  /* ]]> */
  </script>
<?php
}
else
{
  echo '<div class="sorry sf_admin_form">';
    echo __('Sorry, but you do not have access rights to this part.', null, 'sfGuard');
  echo '.. Cheater!</div>';
}
?>