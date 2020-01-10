<?php

namespace serwin35\IluoIntegration\Models\Handel;

class Handel_DodajNoweZamowienie{

  protected $sessionId;

  protected $zamowienie;

  protected $zarezerwujTowar;

  public function __construct($sessionId, $zamowienie, $zarezerwujTowar)
  {
    $this->sessionId        = $sessionId;
    $this->zamowienie       = $zamowienie;
    $this->zarezerwujTowar  = $zarezerwujTowar;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getZamowienie()
  {
    return $this->zamowienie;
  }

  public function getZarezerwujTowar()
  {
    return $this->zarezerwujTowar;
  }
}

class Handel_DodajNoweZamowienieResponse
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
