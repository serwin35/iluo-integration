<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_DodajNowyTowar{

  protected $sessionId;

  protected $towar;

  public function __construct($sessionId, $towar)
  {
    $this->sessionId    = $sessionId;
    $this->towar        = $towar;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getTowar()
  {
    return $this->towar;
  }

}

class Towary_DodajNowyTowarResponse
{

  protected $Towary_DodajNowyTowarResult;

  public function __construct($Towary_DodajNowyTowarResult)
  {
    $this->Towary_DodajNowyTowarResult = $Towary_DodajNowyTowarResult;
  }

  public function get()
  {
    return $this->Towary_DodajNowyTowarResult;
  }
}
