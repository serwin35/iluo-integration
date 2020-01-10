<?php

namespace serwin35\IluoIntegration\Models\Handel;

class Handel_PobierzLokalizacjeHandlowe{

  protected $sessionId;


  public function __construct($sessionId)
  {
    $this->sessionId    = $sessionId;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }
}

class Handel_PobierzLokalizacjeHandloweResponse
{

  protected $Handel_PobierzLokalizacjeHandloweResult;

  public function __construct($Handel_PobierzLokalizacjeHandloweResult)
  {
    $this->Handel_PobierzLokalizacjeHandloweResult = $Handel_PobierzLokalizacjeHandloweResult;
  }

  public function get()
  {
    return $this->Handel_PobierzLokalizacjeHandloweResult->LokalizacjaHandlowa;
  }
}
