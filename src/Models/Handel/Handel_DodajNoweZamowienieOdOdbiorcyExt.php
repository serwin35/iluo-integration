<?php

namespace serwin35\IluoIntegration\Models\Handel;

class Handel_DodajNoweZamowienieOdOdbiorcyExt{

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

class Handel_DodajNoweZamowienieOdOdbiorcyExtResponse
{

  protected $Handel_DodajNoweZamowienieResult;

  public function __construct($Handel_DodajNoweZamowienieResult)
  {
    $this->Handel_DodajNoweZamowienieResult = $Handel_DodajNoweZamowienieResult;
  }

  public function get()
  {
    return $this->Handel_DodajNoweZamowienieResult;
  }
}
