<div id="container">

    <div id="top" class="float-center center container fixed">
      <div class="corners clearfix">
        <div class="corner_center"></div>
        <div class="corner_left"></div>
        <div class="corner_right"></div>
      </div>
    </div>

    <section id="banner">
        <header class="float-center center container fixed">

            <div class="left">
                <h1 class="grid grid_9">
                    <a class="serviceplus" href="<?php echo url_for('@homepage') ?>" title="<?php __('Back to homepage') ?>">
                        <?php echo peanutConfig::get('site_name', 'Service+ TV') ?>
                    </a>
                </h1>
            </div>

            <div id="logo" class="grid grid_6">
              <a class="serviceplus" href="<?php echo url_for('@homepage') ?>" title="<?php __('Back to homepage') ?>">
                <img class="logo_euro" src="/images/logo_eurosatory.png" width="224" height="116" alt="Welcome to Service+ TV Eurosatory 2012" />
              </a>
            </div>

            <?php include_partial('public/authentification', array('partialVars' => $partialVars)) ?>
        </header>

    </section>

    <section id="main" class="float-center center container fixed" role="main">
      <div class="corners_bt clearfix">
        <div class="corner_btcenter"></div>
        <div class="corner_btleft"></div>
        <div class="corner_btright"></div>
      </div>