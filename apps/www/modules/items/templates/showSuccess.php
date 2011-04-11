<article id="page-<?php echo $item['id'] ?>">

  <header>
    <h1><?php echo htmlentities($item['title']) ?></h1>
  </header>

  <section>
    <?php echo htmlspecialchars_decode($item['content']) ?>
  </section>
  
</article>