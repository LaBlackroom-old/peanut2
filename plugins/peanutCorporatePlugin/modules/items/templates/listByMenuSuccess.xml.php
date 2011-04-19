<rss version="2.0">
  <channel>
    <title>Last Items for <?php echo sfConfig::get('app_site_name', 'myWebsite') ?></title>
    <link><?php echo sfConfig::get('app_site_url', 'http://www.example.com/') ?></link>
    <description>Our last items</description>
    <language><?php echo sfConfig::get('app_site_language', 'en_US') ?></language>
    <pubDate><?php echo $items[0]['created_at'] ?></pubDate>
    <lastBuildDate><?php echo $items[0]['created_at'] ?></lastBuildDate>
    <docs><?php echo url_for('item_list', array('sf_format' => 'xml'), true) ?></docs>
    <generator>peanut</generator>
    <webMaster><?php echo sfConfig::get('app_site_adminMail', 'me@example.com') ?></webMaster>

    <?php foreach($items as $item): ?>

    <item>
      <title><?php echo htmlentities($item['title']) ?></title>
      <link><?php echo url_for('item_show', array('slug' => $item['title'], 'sf_format' => 'html')) ?></link>
      <description><![CDATA[<?php echo htmlspecialchars_decode($item['content']) ?>]]></description>
      <pubdate><?php echo $item['created_at'] ?></pubdate>
      <guid>item-<?php echo $item['id'] ?></guid>
    </item>
    
    <?php endforeach; ?>
  </channel>
</rss>