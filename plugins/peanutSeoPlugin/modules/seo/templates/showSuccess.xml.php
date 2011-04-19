<?xml version="1.0" encoding="UTF-8" ?>
<?xml-stylesheet type="text/xsl" href="/peanutSeoPlugin/seo/sitemap.xsl" ?>

<!-- generator="Symfony" -->
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

  <?php
    $seo_homepage = sfConfig::get('app_seo_homepage');
    $seo_page = sfConfig::get('app_seo_page');
  ?>
  
  <url>
  	<loc><?php echo url_for('@homepage', true) ?></loc>
  	<changefreq><?php echo $seo_homepage['changefreq']; ?></changefreq>
  	<priority><?php echo $seo_homepage['priority']; ?></priority>
  </url>

  <?php foreach($pagesSitemap as $pageSitemap) { ?>
  
  <url>
  	<loc><?php echo url_for('page', array('slug' => $pageSitemap['slug'], 'sf_format' => 'html'), true) ?></loc>
  	<lastmod><?php echo $pageSitemap['updated_at']; ?></lastmod>
  	<changefreq><?php echo $seo_page['changefreq']; ?></changefreq>
  	<priority><?php echo $seo_page['priority']; ?></priority>
  </url>
  
  <?php } ?>



</urlset>