<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * peanutBase class for all symfony tasks.
 * @see sfBaseTask for more information
 *
 * @package    peanut5Plugin
 * @subpackage task
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
abstract class peanutBaseTask extends sfBaseTask
{

  /**
   * Returns the peanutFilesystem instance.
   *
   * @return peanutFilesystem a sfFilesystem instance
   */
  public function getPeanutFilesystem()
  {
    if (!isset($this->peanutfilesystem))
    {
      if (null === $this->commandApplication || $this->commandApplication->isVerbose())
      {
        $this->peanutfilesystem = new peanutFilesystem($this->dispatcher, $this->formatter);
      }
      else
      {
        $this->peanutfilesystem = new peanutFilesystem();
      }
    }

    return $this->peanutfilesystem;
  }

}
