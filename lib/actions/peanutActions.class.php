<?php

class peanutActions extends sfActions {

    public function preExecute()
    {
        $this->module = $this->getModuleName();
        $this->action = $this->getActionName();

        $this->template = $this->module . '-' . $this->action;
        
        /* executeMainMenu */
        $mainMenu = Doctrine_Core::getTable('peanutItem')->getItemsByMenu(1);
        $this->mainMenu = $mainMenu->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
        
        /* execute FooterMenu */
        $footerMenu = Doctrine_Core::getTable('peanutLink')->getItemsByMenu(2);
        $this->footerMenu = $footerMenu->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
        
        
        $this->varHeader = array(
          'items'     => $this->mainMenu
        );
        
        $this->varFooter = array(
          'items'   => $this->footerMenu
        );
    }
}