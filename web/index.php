<?php

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

@list($tld, $domain, $subdomain) = array_reverse(explode('.', $_SERVER['HTTP_HOST']));

if(!$subdomain)
{
  header('Status: 301 Moved Permanently', false, 301);   
  header('Location: http://www.' . $domain . '.' . $tld);
  exit();
}

$app = $subdomain;
$app = (empty($app) || $app == 'www' ) ? 'www' : $app;

// determine which app to load based on subdomain
if (!is_dir(realpath(dirname(__FILE__).'/..').'/apps/'.$app))
{
  $configuration = ProjectConfiguration::getApplicationConfiguration('www', 'prod', false);
}
else
{
  $configuration = ProjectConfiguration::getApplicationConfiguration($app, 'prod', false);
}

sfContext::createInstance($configuration)->dispatch();
