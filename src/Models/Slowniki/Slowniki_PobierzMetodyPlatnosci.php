<?php

namespace serwin35\IluoIntegration\Models\Slowniki;

class Slowniki_PobierzMetodyPlatnosci{

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

class Slowniki_PobierzMetodyPlatnosciResponse
{

  protected $Slowniki_PobierzMetodyPlatnosciResult;

  public function __construct($Slowniki_PobierzMetodyPlatnosciResult)
  {
    $this->Slowniki_PobierzMetodyPlatnosciResult = $Slowniki_PobierzMetodyPlatnosciResult;
  }

  public function get()
  {
    return $this->Slowniki_PobierzMetodyPlatnosciResult;
  }
}
