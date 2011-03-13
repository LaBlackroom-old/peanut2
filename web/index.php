<?php

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

// get the domain parts as an array
list($tld, $domain, $subdomain) = array_reverse(explode('.', $_SERVER['HTTP_HOST']));

// determine which subdomain we're looking at
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
