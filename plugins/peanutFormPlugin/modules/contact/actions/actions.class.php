<?php

/**
 * contact actions.
 *
 * @package    peanutFormPlugin
 * @subpackage contact
 * @author     Alexandre pocky Balmes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions
{
  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ContactForm();

    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter('contact'));

      if ($this->form->isValid())
      {
        try
        {
          $body = $this->getPartial('contact/mailTextBody',  array(
            'name'    => $this->form->getValue('name'),
            'mail'    => $this->form->getValue('mail'),
            'message' => $this->form->getValue('message'),
          ));

          $altbody = $this->getPartial('contact/mailTextAltBody',  array(
            'name'    => $this->form->getValue('name'),
            'mail'    => $this->form->getValue('mail'),
            'message' => $this->form->getValue('message'),
          ));

          $message = $this->getMailer();

          $message = Swift_Message::newInstance()
            ->setFrom(array(sfConfig::get('app_contact_form', 'noreply@mywebsite.com')))
            ->setTo(array(sfConfig::get('app_contact_webmasterMail', 'me@mywebsite.com') => sfConfig::get('app_contact_webmasterName', 'webmaster')))
            ->setSubject(sfConfig::get('New message from your contact form', 'New form'))
            ->setBody($body, 'text/html')
            ->addPart($altbody, 'text/plain');

          $this->getMailer()->send($message);

        }

        catch (Exception $e)
        {
          $this->getUser()->setFlash('error', 'An error has occured while send your message!');
        }

        $this->redirect('@contact?action=confirm&sf_format=html&' . http_build_query($this->form->getValues()));
      }
    }
  }

  public function executeConfirm(sfWebRequest $request)
  {
    
  }
}