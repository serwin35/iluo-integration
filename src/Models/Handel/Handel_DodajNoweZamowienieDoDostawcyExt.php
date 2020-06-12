<?php

namespace serwin35\IluoIntegration\Models\Handel;

class Handel_DodajNoweZamowienieDoDostawcyExt{

  protected $sessionId;

  protected $zamowienie;

  protected $parametry;

  public function __construct($sessionId, $zamowienie, $parametry)
  {
    $this->sessionId        = $sessionId;
    $this->zamowienie       = $zamowienie;
    $this->parametry        = $parametry;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getZamowienie()
  {
    return $this->zamowienie;
  }

  public function getParametry()
  {
    return $this->parametry;
  }
}

class Handel_DodajNoweZamowienieDoDostawcyExtResponse
{

  protected $Handel_DodajNoweZamowienieDoDostawcyExtResult;

  public function __construct($Handel_DodajNoweZamowienieDoDostawcyExtResult)
  {
    $this->Handel_DodajNoweZamowienieDoDostawcyExtResult = $Handel_DodajNoweZamowienieDoDostawcyExtResult;
  }

  public function get()
  {
    return $this->Handel_DodajNoweZamowienieDoDostawcyExtResult;
  }
}
