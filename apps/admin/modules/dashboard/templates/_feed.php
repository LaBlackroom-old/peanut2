<section id="feed" class="box">
  <header>
    <h2><?php echo __('Last news') ?></h2>
  </header>
  
  <section class="boxContent">
    <table>
      <tbody>
        <?php
        if(null != $items)
        {

          $i = 0;
          foreach($items->entry as $item):
            $i++;
        ?> 
        <tr>
          <td class="item"><?php echo $item->title ?></td>
          <td class="action"><a href="<?php echo $item->link['href'] ?>"><?php echo __('View') ?></td>
        </tr>
        <?php
          if($i == 5):
            break;
          endif;
          
          endforeach;
        }
        else
        {
          echo __("We are sorry but we were unable to recover the data") . '.';
        }
        ?>
      </tbody>
    </table>

  </section>

</section>