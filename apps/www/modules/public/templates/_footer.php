</section>

      <section id="footer">

        <footer>
          <nav>
           <?php include_partial('items/footerMenu', array('items' => $vars['items'])) ?>
          </nav>
          
          <?php
            include_partial('social/facebookLike');
            include_partial('social/twitterFollow');
            include_partial('social/twitterTweet');
            include_partial('social/googlePlus1');
          ?>
        </footer>

      </section>

    </div>