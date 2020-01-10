<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_DodajNowaGrupe{

    protected $sessionId;

    protected $grupaTowaru;


  public function __construct($sessionId, $grupaTowaru)
  {
    $this->sessionId    = $sessionId;
    $this->grupaTowaru    = $grupaTowaru;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getGrupaTowaru()
  {
    return $this->grupaTowaru;
  }
}

class Towary_DodajNowaGrupeResponse
{

  protected $Towary_DodajNowaGrupeResult;

  public function __construct($Towary_DodajNowaGrupeResult)
  {
    $this->Towary_DodajNowaGrupeResult = $Towary_DodajNowaGrupeResult;
  }

  public function get()
  {
    return $this->Towary_DodajNowaGrupeResult;
  }
}
