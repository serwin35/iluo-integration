<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_PobierzGrupy{

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

class Towary_PobierzGrupyResponse
{

  protected $Towary_PobierzGrupyResult;

  public function __construct($Towary_PobierzGrupyResult)
  {
    $this->Towary_PobierzGrupyResult = $Towary_PobierzGrupyResult;
  }

  public function get()
  {
    return $this->Towary_PobierzGrupyResult->GrupaTowaru;
  }
}
