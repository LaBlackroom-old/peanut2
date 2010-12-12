<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * peanutFilesystem provides basic utility to manipulate the file system.
 *
 * @package    peanut5plugin
 * @subpackage task
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */

class peanutFilesystem extends sfFilesystem
{

  /**
   * Copies all files in directory.
   *
   * This method list all files and copy them in target dir
   * @see sfFilesystem and copy function for more information
   *
   * By default, the method isn't recursive.
   *
   * To copy a subdir, pass the "recursive" option.
   *
   * @param string $originDir  The original directory
   * @param string $targetDir  The target directory
   * @param array  $options    An array of options
   */
  public function copyAllFilesInDir($originDir, $targetDir, $options = array())
  {
    $dir = opendir($originDir);

    if (!array_key_exists('recursive', $options))
    {
      $options['recursive'] = false;
    }

    while(($file = readdir($dir)) !== false)
    {
      if($file == '.' || $file == '..')
      {
        continue;
      }

      $entry = $originDir . '/' . $file;

      if(is_link($entry))
      {
        continue;
      }

      if(is_file($entry))
      {
        $this->copy($entry, $targetDir . '/' . $file, $options);
      }

      if(is_dir($entry) && $options['recursive'] == true)
      {
        @mkdir($entry);
        $this->copyAllFilesInDir($entry, $targetDir . '/' . $file, $options);
      }
    }
  }
}