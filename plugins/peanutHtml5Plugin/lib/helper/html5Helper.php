<?php

/**
 * html5Helper.
 *
 * @package    symfony
 * @subpackage helper
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @author     David Heinemeier Hansson
 * @author     Alexandre 'pocky' Balmes <albalmes@gmail.com>
 * @version    SVN: $Id$
 */

/**
 * Returns a <script> include tag per source given as argument.
 *
 * <b>Examples:</b>
 * <code>
 *  echo javascript_include_tag('xmlhr');
 *    => <script language="JavaScript" src="/js/xmlhr.js"></script>
 *  echo javascript_include_tag('common.javascript', '/elsewhere/cools');
 *    => <script language="JavaScript" src="/js/common.javascript"></script>
 *       <script language="JavaScript" src="/elsewhere/cools.js"></script>
 * </code>
 *
 * @param string asset names
 * @param array additional HTML compliant <link> tag parameters
 *
 * @return string XHTML compliant <script> tag(s)
 * @see    javascript_path
 */
function html5_javascript_include_tag()
{
  $sources = func_get_args();
  $sourceOptions = (func_num_args() > 1 && is_array($sources[func_num_args() - 1])) ? array_pop($sources) : array();

  $html = '';
  foreach ($sources as $source)
  {
    $absolute = false;
    if (isset($sourceOptions['absolute']))
    {
      unset($sourceOptions['absolute']);
      $absolute = true;
    }

    $condition = null;
    if (isset($sourceOptions['condition']))
    {
      $condition = $sourceOptions['condition'];
      unset($sourceOptions['condition']);
    }

    if (!isset($sourceOptions['raw_name']))
    {
      $source = javascript_path($source, $absolute);
    }
    else
    {
      unset($sourceOptions['raw_name']);
    }

    $options = array_merge(array('src' => $source), $sourceOptions);
    $tag = content_tag('script', '', $options);

    if (null !== $condition)
    {
      $tag = comment_as_conditional($condition, $tag);
    }

    $html .= $tag."\n";
  }

  return $html;
}

/**
 * Returns a css <link> tag per source given as argument,
 * to be included in the <head> section of a HTML document.
 *
 * <b>Options:</b>
 * - rel - defaults to 'stylesheet'
 * - type - defaults to 'text/css'
 * - media - defaults to 'screen'
 *
 * <b>Examples:</b>
 * <code>
 *  echo stylesheet_tag('style');
 *    => <link href="/stylesheets/style.css" media="screen" rel="stylesheet" type="text/css" />
 *  echo stylesheet_tag('style', array('media' => 'all'));
 *    => <link href="/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" />
 *  echo stylesheet_tag('style', array('raw_name' => true));
 *    => <link href="style" media="all" rel="stylesheet" type="text/css" />
 *  echo stylesheet_tag('random.styles', '/css/stylish');
 *    => <link href="/stylesheets/random.styles" media="screen" rel="stylesheet" type="text/css" />
 *       <link href="/css/stylish.css" media="screen" rel="stylesheet" type="text/css" />
 * </code>
 *
 * @param string asset names
 * @param array  additional HTML compliant <link> tag parameters
 *
 * @return string XHTML compliant <link> tag(s)
 * @see    stylesheet_path
 */
function html5_stylesheet_tag()
{
  $sources = func_get_args();
  $sourceOptions = (func_num_args() > 1 && is_array($sources[func_num_args() - 1])) ? array_pop($sources) : array();

  $html = '';
  foreach ($sources as $source)
  {
    $absolute = false;
    if (isset($sourceOptions['absolute']))
    {
      unset($sourceOptions['absolute']);
      $absolute = true;
    }

    $condition = null;
    if (isset($sourceOptions['condition']))
    {
      $condition = $sourceOptions['condition'];
      unset($sourceOptions['condition']);
    }

    if (!isset($sourceOptions['raw_name']))
    {
      $source = stylesheet_path($source, $absolute);
    }
    else
    {
      unset($sourceOptions['raw_name']);
    }

    $options = array_merge(array('rel' => 'stylesheet', 'href' => $source, 'media' => 'screen'), $sourceOptions);
    $tag = tag('link', $options);

    if (null !== $condition)
    {
      $tag = comment_as_conditional($condition, $tag);
    }

    $html .= $tag."\n";
  }

  return $html;
}

/**
 * Adds a stylesheet to the response object.
 *
 * @see sfResponse->addStylesheet()
 */
function use_html5_stylesheet($css, $position = '', $options = array())
{
  sfContext::getInstance()->getResponse()->addStylesheet($css, $position, $options);
}

/**
 * Adds a javascript to the response object.
 *
 * @see sfResponse->addJavascript()
 */
function use_html5_javascript($js, $position = '', $options = array())
{
  sfContext::getInstance()->getResponse()->addJavascript($js, $position, $options);
}

/**
 * Returns <script> tags for all javascripts configured in view.yml or added to the response object.
 *
 * You can use this helper to decide the location of javascripts in pages.
 * By default, if you don't call this helper, symfony will automatically include javascripts before </head>.
 * Calling this helper disables this behavior.
 *
 * @return string <script> tags
 */
function get_html5_javascripts()
{
  $response = sfContext::getInstance()->getResponse();
  sfConfig::set('symfony.asset.javascripts_included', true);

  $html = '';
  foreach ($response->getJavascripts() as $file => $options)
  {
    $html .= html5_javascript_include_tag($file, $options);
  }

  return $html;
}

/**
 * Prints <script> tags for all javascripts configured in view.yml or added to the response object.
 *
 * @see get_javascripts()
 */
function include_html5_javascripts()
{
  echo get_html5_javascripts();
}

/**
 * Returns <link> tags for all stylesheets configured in view.yml or added to the response object.
 *
 * You can use this helper to decide the location of stylesheets in pages.
 * By default, if you don't call this helper, symfony will automatically include stylesheets before </head>.
 * Calling this helper disables this behavior.
 *
 * @return string <link> tags
 */
function get_html5_stylesheets()
{
  $response = sfContext::getInstance()->getResponse();
  sfConfig::set('symfony.asset.stylesheets_included', true);

  $html = '';
  foreach ($response->getStylesheets() as $file => $options)
  {
    $html .= html5_stylesheet_tag($file, $options);
  }

  return $html;
}

/**
 * Prints <link> tags for all stylesheets configured in view.yml or added to the response object.
 *
 * @see get_stylesheets()
 */
function include_html5_stylesheets()
{
  echo get_html5_stylesheets();
}

/**
 * Returns <script> tags for all javascripts associated with the given form.
 *
 * The scripts are set by implementing the getJavaScripts() method in the
 * corresponding widget.
 *
 * <code>
 * class MyWidget extends sfWidgetForm
 * {
 *   public function getJavaScripts()
 *   {
 *     return array('/path/to/a/file.js');
 *   }
 * }
 * </code>
 *
 * @return string <script> tags
 */
function get_html5_javascripts_for_form(sfForm $form)
{
  $html = '';
  foreach ($form->getJavascripts() as $file)
  {
    $html .= html5_javascript_include_tag($file);
  }

  return $html;
}

/**
 * Prints <script> tags for all javascripts associated with the given form.
 *
 * @see get_javascripts_for_form()
 */
function include_html5_javascripts_for_form(sfForm $form)
{
  echo get_html5_javascripts_for_form($form);
}

/**
 * Adds javascripts from the supplied form to the response object.
 *
 * @param sfForm $form
 */
function use_html5_javascripts_for_form(sfForm $form)
{
  $response = sfContext::getInstance()->getResponse();

  foreach ($form->getJavascripts() as $file)
  {
    $response->addJavascript($file);
  }
}

/**
 * Returns <link> tags for all stylesheets associated with the given form.
 *
 * The stylesheets are set by implementing the getStyleSheets() method in the
 * corresponding widget.
 *
 * <code>
 * class MyWidget extends sfWidgetForm
 * {
 *   public function getStyleSheets()
 *   {
 *     return array('/path/to/a/file.css');
 *   }
 * }
 * </code>
 *
 * @return string <link> tags
 */
function get_html5_stylesheets_for_form(sfForm $form)
{
  $html = '';
  foreach ($form->getStylesheets() as $file => $media)
  {
    $html .= html5_stylesheet_tag($file, array('media' => $media));
  }

  return $html;
}

/**
 * Prints <link> tags for all stylesheets associated with the given form.
 *
 * @see get_stylesheets_for_form()
 */
function include_html5_stylesheets_for_form(sfForm $form)
{
  echo get_html5_stylesheets_for_form($form);
}

/**
 * Adds stylesheets from the supplied form to the response object.
 *
 * @param sfForm $form
 */
function use_html5_stylesheets_for_form(sfForm $form)
{
  $response = sfContext::getInstance()->getResponse();

  foreach ($form->getStylesheets() as $file => $media)
  {
    $response->addStylesheet($file, '', array('media' => $media));
  }
}
