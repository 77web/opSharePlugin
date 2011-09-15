<?php

class opSharePluginShareComponents extends sfComponents
{
  public function executeButtons($request)
  {
    $this->isMixi = sfConfig::get('app_opSharePlugin_mixi_button', false);
    $this->mixiCode = sfConfig::get('app_opSharePlugin_mixi_code');
    
    $this->isTwitter = sfConfig::get('app_opSharePlugin_twitter_button', false);
    $this->twitterVia = sfConfig::get('app_opSharePlugin_twitter_via');
    
    $this->isGoogle = sfConfig::get('app_opSharePlugin_google_button', false);
    
    $this->isFacebook = sfConfig::get('app_opSharePlugin_facebook_button', false);
    
    $this->isShow = $this->isMixi || $this->isTwitter || $this->isGoogle || $this->isFacebook;
    
    $this->title = '';
    if(isset($this->diary))
    {
      $this->title = $this->diary->getTitle();
    }
    if(isset($this->communityTopic))
    {
      $this->title = $this->communityTopic->getName();
    }
    if(isset($this->communityEvent))
    {
      $this->title = $this->communityEvent->getName();
    }
    if(isset($this->community))
    {
      $this->title = $this->community->getName();
    }
    if(isset($this->spot))
    {
      $this->spot = $this->spot->getName();
    }
    $this->getResponse()->setTitle($this->title);
  }
}