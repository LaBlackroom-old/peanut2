<?php

  function seo($role, $object, $options = array())
  {

    if($role == 'title' || $role == 'description' || $role == 'keywords')
    {
      seoMeta($role, $object, $options = array());
    }
    elseif($role == 'index')
    {
      seoIndex($object);
    }
    else
    {
      return null;
    }

  }

  function seoMeta($role, $object, $options = array())
  {
    $object = $object->getPeanutSeo()->$role;

    if($object)
    {
      return slot($role, sprintf($object));
    }
    else
    {
      return null;
    }

  }

  function seoIndex($object)
  {
    $indexable = $object->getPeanutSeo()->getIsIndexable();
    $followable = $object->getPeanutSeo()->getIsFollowable();

    if($indexable && $followable)
    {
      return slot('robots', sprintf('index, follow'));
    }
    elseif($indexable && !$followable)
    {
      return slot('robots', sprintf('index, nofollow'));
    }
    elseif(!$indexable && $followable)
    {
      return slot('robots', sprintf('noindex, follow'));
    }
    else
    {
      return slot('robots', sprintf('noindex, nofollow'));
    }
  }