<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_PobierzTypyCen{

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

class Towary_PobierzTypyCenResponse
{

  protected $Towary_PobierzTypyCenResult;

  public function __construct($Towary_PobierzTypyCenResult)
  {
    $this->Towary_PobierzTypyCenResult = $Towary_PobierzTypyCenResult;
  }

  public function get()
  {
    return $this->Towary_PobierzTypyCenResult->TypCeny;
  }
}
