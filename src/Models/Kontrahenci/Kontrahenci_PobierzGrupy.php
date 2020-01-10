<?php

namespace serwin35\IluoIntegration\Models\Kontrahenci;

class Kontrahenci_PobierzGrupy{

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

class Kontrahenci_PobierzGrupyResponse
{

  protected $Kontrahenci_PobierzGrupyResult;

  public function __construct($Kontrahenci_PobierzGrupyResult)
  {
    $this->Kontrahenci_PobierzGrupyResult = $Kontrahenci_PobierzGrupyResult;
  }

  public function get()
  {
    return $this->Kontrahenci_PobierzGrupyResult;
  }
}
