<?php
/**
 * @author Thomas Duhamel
 * @copyright SARL LEXIK
 * @version 1
 * @mail: contact@lexik.fr
 * @site:
 * date: 09/07/2009
 *
 *
 * description: ces fonctions doivent être appeler lors de l'affichage d'une image sur le site.
 * on génére des thumb à partir de l'image uploadée ou d'une image par défaut le cas échéant.
 * pour pouvoir l'utiliser il faut:
 *  - créer un répertoire dans uploads en par exemple du nom du Model qui à l'image.
 *  - dans ce répertoire créer deux sous répertoires soruce et thumb avec les droits d'accès
 *  - uploader les images dansle répertoire source.
 * lors de l'affiche un fichier du même nom que source préfixé par la taille demandée
 * est généré dans le répertoire thumb.
 *
 * @example:
 * schema.yml
 * User:
 *  columns:
 *    nom: { type: string(255) }
 *    avatar: { type: string(255) }
 *
 * les répertoires a créer
 * uploads/user/source/ -> là ou on doit uploader le images
 * uploads/user/thumb/
 *
 * avoirl 'image par défaut disponible:
 * /images/default.jpg
 *
 * pour générer le thumb:
 * doThumb($user->getAvatar(), 'user', array('width'=>100,'height'=>'150'), 'center', 'default.jpg')
 * OU
 * pour afficher le thumb
 * showThumb($user->getAvatar(), 'user', array('width'=>100,'height'=>'150'), 'center', 'default.jpg')
 */


 /**
   * générer le thumb correspondant à une image.
   * cete fonction v?rifie si le thumb existe déjà ou si la source est plus récente
   * si besoin, il est regénéré.
   * il faut faire passer en parametres options[width] et options[height]
   * et l'image est automatiquement redimensionner en thumb.
   * si width = height alors l'image sera tronquée et carré
   *
   * @param <string> $image_name : le nom de l'image donc généralement le $object->getImage(), pas de r?pertoire
   * @param <string> $folder : le nom du répertoire dans uploads où est stocké l'image : uploads/object/source => $folder = object
   * @param <array> $options : les paramètres à passer à l'image: width et height
   * @param <string> $resize : l'opération sur le thumb: "scale" pour garder les proportions, "center" pour tronquer l'image
   * @param <string> $default : l'image par défaut si image_name n'existe pas
   * @return <image_path>
  */
  function doThumb($image_name, $folder, $options = array(), $resize = 'scale', $default = 'default.jpg')
  {

    //valeur par défaut si elles ne sont pas définies
    if(!isset($options['width']))
      $options['width'] = 50;
    if(!isset($options['height']))
      $options['height'] = 50;

    /*$source_dir = 'uploads/'.$folder.'/source/';
    $thumb_dir  = 'uploads/'.$folder.'/thumb/';*/
    
    $source_dir = 'uploads/'.$folder.'/';
    $thumb_dir  = 'uploads/'.$folder.'/thumb/';


    //le fichier source
    $source = $source_dir.$image_name;
    $exist = sfConfig::get('sf_web_dir').'/'.$source;
    if(!is_file($exist))
    {
      $image_name = $default;
      $source = 'images/'.$image_name;// la valeur par défaut
    }

    $new_name = $options['width'].'x'.$options['height'].'_'.$image_name;
    $new_img = $thumb_dir.$new_name;
    // si le thumb n'existe pas ou s'il est plus ancien que le fichier source
    // alors on regénére le thumb
    if(!is_file(sfConfig::get('sf_web_dir').'/'.$new_img) OR filemtime($source)>filemtime($new_img))
    {
      $img = new sfImage($source);

      $img->thumbnail($options['width'],$options['height'],$resize)
          ->saveAs($new_img);
    }

    return image_path('/'.$new_img);
  }
  
  
  /**
   * générer le thumb correspondant à une image.
   * cete fonction v?rifie si le thumb existe déjà ou si la source est plus récente
   * si besoin, il est regénéré.
   * il faut faire passer en parametres options[width] et options[height]
   * et l'image est automatiquement redimensionner en thumb.
   * si width = height alors l'image sera tronquée et carré
   *
   * @param <string> $image_name : le nom de l'image donc généralement le $object->getImage(), pas de répertoire
   * @param <string> $folder : le nom du répertoire dans uploads où est stocké l'image : uploads/object/source => $folder = object
   * @param <array> $options : les parametres à passer à l'image: width et height
   * @param <string> $resize : l'opération sur le thumb: "scale" pour garder les proportions, "center" pour tronquer l'image
   * @param <string> $default : l'image par défaut si image_name n'existe pas
   * @return <image_path>
  */
  function doThumb_watermark($image_name, $folder, $options = array(), $resize = 'scale', $default = 'default.jpg')
  {
    //valeur par défaut si elles ne sont pas définies
    if(!isset($options['width']))
      $options['width'] = 50;
    if(!isset($options['height']))
      $options['height'] = 50;

    /*$source_dir = 'uploads/'.$folder.'/source/';
    $thumb_dir  = 'uploads/'.$folder.'/thumb/';*/
    
    $source_dir = 'uploads/'.$folder.'/';
    $thumb_dir  = 'uploads/'.$folder.'/thumb/';


    //le fichier source
    $source = $source_dir.$image_name;
    $exist = sfConfig::get('sf_web_dir').'/'.$source;
    if(!is_file($exist))
    {
      $image_name = $default;
      $source = 'images/'.$image_name;// la valeur par défaut
    }

    $new_name = $options['width'].'x'.$options['height'].'_'.$image_name;
    $new_img = $thumb_dir.$new_name;
    // si le thumb n'existe pas ou s'il est plus ancien que le fichier source
    // alors on regénére le thumb
    if(!is_file(sfConfig::get('sf_web_dir').'/'.$new_img) OR filemtime($source)>filemtime($new_img))
    {
      $img = new sfImage($source);

      $img->thumbnail($options['width'],$options['height'],$resize)
          ->overlay(new sfImage('images/watermark.png'), 'middle-center')
          ->saveAs($new_img);
    }

    return image_path('/'.$new_img);
  }
  
  
  
  
  
  
  
  
  
  
  /**
   * Cette funciton permet de récupérer les dimensions de l'image d'origine.
   * @param <string> $image_name : le nom de l'image donc généralement le $object->getImage(), pas de répertoire
   * @param <string> $folder : le nom du répertoire dans uploads où est stocké l'image : uploads/object/source => $folder = object
   * @return <image_path>
  */
  function getSize($image_name, $folder)
  {
    $source_dir = 'uploads/'.$folder.'/';

    $source = $source_dir.$image_name;
    $exist = sfConfig::get('sf_web_dir').'/'.$source;
    $img = new sfImage($source);
    
    $size['width'] = $img->getWidth();
    $size['height'] = $img->getHeight();
    
    return $size;
  }


  /**
   * Cette funciton utilise la précédente afin d'afficher directement l'image avec les balises et les options.
   * @param <string> $image_name : le nom de l'image donc généralement le $object->getImage(), pas de répertoire
   * @param <string> $folder : le nom du répertoire dans uploads où est stocké l'image : uploads/object/source => $folder = object
   * @param <array> $options : les parametres à passer à l'image: width, height, alt, title, class, id...
   * @param <string> $resize : l'opération sur le thumb: "scale" pour garder les proportions, "center" pour tronquer l'image
   * @param <string> $default : l'image par défaut si image_name n'existe pas
   * @return <image_path>
  */
  function showThumb($image_name, $folder, $options = array(), $resize = 'scale', $default = 'default.jpg')
  {
    if(empty($options['alt']))
     $options['alt'] = 'image '.$image_name;

    $image_path = doThumb($image_name, $folder, $options, $resize, $default);
    $img = new sfImage(sfConfig::get('sf_web_dir').$image_path);

    //récupere les vraies dimensions de l'image du thumb et on écrase dans les options.
    $options['width'] = $img->getWidth();
    $options['height'] = $img->getHeight();

    return image_tag($image_path,$options);
  }
  
  function showThumb_watermark($image_name, $folder, $options = array(), $resize = 'scale', $default = 'default.jpg')
  {
    if(empty($options['alt']))
     $options['alt'] = 'image '.$image_name;

    $image_path = doThumb_watermark($image_name, $folder, $options, $resize, $default);
    $img = new sfImage(sfConfig::get('sf_web_dir').$image_path);

    //récupere les vraies dimensions de l'image du thumb et on écrase dans les options.
    $options['width'] = $img->getWidth();
    $options['height'] = $img->getHeight();

    return image_tag($image_path,$options);
  }