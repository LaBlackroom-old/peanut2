</section>

      <section id="footer">

        <footer>
          <nav>
           <?php include_partial('items/footerMenu', array('items' => $vars['items'])) ?>
          </nav>

          <?php
            include_component('social', 'facebookLike');
            include_component('social', 'twitterFollow');
            include_component('social', 'twitterTweet');
            include_component('social', 'googlePlus1');
          ?>
        </footer>

      </section>

    </div>