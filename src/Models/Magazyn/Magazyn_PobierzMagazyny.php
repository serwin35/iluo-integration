<?php

namespace serwin35\IluoIntegration\Models\Magazyn;

class Magazyn_PobierzMagazyny{

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

class Magazyn_PobierzMagazynyResponse
{

  protected $Magazyn_PobierzMagazynyResult;

  public function __construct($Magazyn_PobierzMagazynyResult)
  {
    $this->Magazyn_PobierzMagazynyResult = $Magazyn_PobierzMagazynyResult;
  }

  public function get()
  {
    return $this->Magazyn_PobierzMagazynyResult->Magazyn;
  }
}
