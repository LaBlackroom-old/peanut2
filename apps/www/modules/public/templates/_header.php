<div id="container" class="alignCenter center container">

      <section id="top" class="alignLeft">

        <header>
          <h1>
            <a href="<?php echo url_for('@homepage') ?>" title="<?php __('Back to homepage') ?>">
              <?php echo peanutConfig::get('site_name', 'La Blackroom') ?>
            </a>
          </h1>
        </header>

        <nav>
         <?php include_partial('items/mainMenu', array('items' => $vars['items'])) ?>
        </nav>

      </section>

      <section id="main" class="alignLeft clearfix" role="main">