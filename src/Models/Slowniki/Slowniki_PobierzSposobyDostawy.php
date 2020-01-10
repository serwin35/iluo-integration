<?php

namespace serwin35\IluoIntegration\Models\Slowniki;

class Slowniki_PobierzSposobyDostawy{

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

class Slowniki_PobierzSposobyDostawyResponse
{

  protected $Slowniki_PobierzSposobyDostawyResult;

  public function __construct($Slowniki_PobierzSposobyDostawyResult)
  {
    $this->Slowniki_PobierzSposobyDostawyResult = $Slowniki_PobierzSposobyDostawyResult;
  }

  public function get()
  {
    return $this->Slowniki_PobierzSposobyDostawyResult;
  }
}
