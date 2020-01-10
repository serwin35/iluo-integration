<?php

namespace serwin35\IluoIntegration\Models\Kontrahenci;

class Kontrahenci_DodajNowegoKontrahenta{

  protected $sessionId;

  protected $kontrahent;

  public function __construct($sessionId, $kontrahent)
  {
    $this->sessionId    = $sessionId;
    $this->kontrahent           = $kontrahent;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getKontrahent()
  {
    return $this->kontrahent;
  }

}

class Kontrahenci_DodajNowegoKontrahentaResponse
{

  protected $Kontrahenci_DodajNowegoKontrahentaResult;

  public function __construct($Kontrahenci_DodajNowegoKontrahentaResult)
  {
    $this->Kontrahenci_DodajNowegoKontrahentaResult = $Kontrahenci_DodajNowegoKontrahentaResult;
  }

  public function get()
  {
    return $this->Kontrahenci_DodajNowegoKontrahentaResult;
  }
}
