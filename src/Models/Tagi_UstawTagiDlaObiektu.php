<?php

namespace serwin35\IluoIntegration\Models;

class Tagi_UstawTagiDlaObiektu
{

  protected $sessionId;
  protected $idtabeli;
  protected $id;
  protected $idtagow;

  public function __construct($sessionId, $idtabeli, $id, $idtagow)
  {
    $this->sessionId  = $sessionId;
    $this->idtabeli   = $idtabeli;
    $this->id         = $id;
    $this->idtagow    = $idtagow;
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

  public function getIdtagow()
  {
    return $this->idtagow;
  }
}

class Tagi_UstawTagiDlaObiektuResponse
{

  protected $Tagi_UstawTagiDlaObiektuResult;

  public function __construct($Tagi_UstawTagiDlaObiektuResult)
  {
    $this->Tagi_UstawTagiDlaObiektu = $Tagi_UstawTagiDlaObiektuResult;
  }

  public function get()
  {
    return $this->Tagi_UstawTagiDlaObiektu;
  }
}
