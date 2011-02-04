<?php

require_once dirname(__FILE__).'/../lib/BasesfGuardRegisterActions.class.php';

/**
 * sfGuardRegister actions.
 *
 * @package    guard
 * @subpackage sfGuardRegister
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z jwage $
 */
class sfGuardRegisterActions extends BasesfGuardRegisterActions
{
  public function preExecute()
  {
    if($this->getUser()->isAuthenticated())
    {
      $this->getUser()->setFlash('notice', 'You are already registered and signed in!');
      $this->redirect('@homepage');
    }
  }
  
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new sfGuardRegisterForm();

    if($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid())
      {
        $user = $this->form;
        $user->save();

        $token = sfConfig::get('app_sf_guard_plugin_token', 'sfToken');
        $salt = sha1($user->getValue('username') . $token . $user->getValue('email_address'));

        try
        {
          $body = $this->getPartial('sfGuardRegister/registrationTextBody',  array(
            'user'      => $user,
            'token'     => $salt
           ));

          $altbody = $this->getPartial('sfGuardRegister/registrationAltTextBody',  array(
            'user'      => $user,
            'token'     => $salt
           ));

          $message = $this->getMailer();

          $message = Swift_Message::newInstance()
            ->setFrom(array(sfConfig::get('app_sf_guard_plugin_default_from_email', 'from@noreply.com')))
            ->setTo(array($user->getValue('email') => $user->getValue('first_name') . ' ' . $user->getValue('last_name')))
            ->setSubject(sfConfig::get('app_sf_guard_plugin_default_subject', 'Welcome on MyWebsite'))
            ->setBody($body, 'text/html')
            ->addPart($altbody, 'text/plain');

          $this->getMailer()->send($message);

          $this->getUser()->setFlash('notice', 'A confirmation of creation has just been sent on your mailbox');
          $this->redirect('@homepage');
        }
        catch(Exception $e)
        {
          $this->getUser()->setFlash('error', 'A problem occurred during the registration process');
          $this->redirect('@homepage');
        }

      }
    }
  }

  public function executeConfirmation(sfWebRequest $request)
  {
    $user = $this->getRoute()->getObject();
    $user = Doctrine::getTable('sfGuardUser')->retrieveByUsername($user->getUsername(), $isActive = false);

    if($user && $request->isMethod('get'))
    {
      if($this->_checkToken($user))
      {
        if($this->_checkRegisterDate($user))
        {
          $user->setIsActive(true);
          $this->getUser()->signIn($user);
          $this->getUser()->setFlash('notice', 'Your account is now confirmed!');
          $this->redirect('@homepage');
        }
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'Your account is already activated');
      $this->redirect('@homepage');
    }

    return sfView::NONE;

  }

  protected function _checkToken($user, $token)
  {
    $token = sfConfig::get('app_sf_guard_plugin_token', 'sfToken');
    $salt = sha1($user->getUsername() . $token . $user->getEmailAddress());

    if($token === $salt)
    {
      return true;
    }

    $this->getUser()->setFlash('error', 'Your activation code is not valid');
    $this->redirect('@homepage');
  }

  protected function _checkRegisterDate($user)
  {
    $max = sfConfig::get('app_sf_guard_plugin_max_days_for_confirmation', '14');
    $max = strtotime('-' . $max . ' day');

    $regDate = strtotime($user->getCreatedAt());

    if($regDate >= $max)
    {
      return true;
    }

    Doctrine::getTable('sfGuardUser')->deleteUser($user->getId());

    $this->getUser()->setFlash('error', 'Sorry but the time of activation was exceeded, you must recreate your account');
    $this->redirect('sf_guard_register');
  }
}