<?php

namespace serwin35\IluoIntegration\Models;

class Tagi_PobierzIdTagowDlaObiektu{

    protected $sessionId;
    protected $idtabeli;
    protected $id;

  public function __construct($sessionId, $idtabeli, $id)
  {
    $this->sessionId  = $sessionId;
    $this->idtabeli   = $idtabeli;
    $this->id         = $id;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getIdtabeli()
  {
    return $this->idtabeli;
  }

  public function getId()
  {
    return $this->id;
  }
}

class Tagi_PobierzIdTagowDlaObiektuResponse
{

  protected $Tagi_PobierzIdTagowDlaObiektuResult;

  public function __construct($Tagi_PobierzIdTagowDlaObiektuResult)
  {
    $this->Tagi_PobierzIdTagowDlaObiektu = $Tagi_PobierzIdTagowDlaObiektuResult;
  }

  public function get()
  {
    return $this->Tagi_PobierzIdTagowDlaObiektuResult;
  }
}
