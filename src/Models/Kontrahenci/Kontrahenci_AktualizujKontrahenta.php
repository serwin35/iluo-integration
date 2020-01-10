<?php

namespace serwin35\IluoIntegration\Models\Kontrahenci;

class Kontrahenci_AktualizujKontrahenta{

  protected $sessionId;

  protected $id;
  protected $kontrahent;

  public function __construct($sessionId, $id, $kontrahent)
  {
    $this->sessionId    = $sessionId;
    $this->id   = $id;
    $this->kontrahent   = $kontrahent;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getKontrahent()
  {
    return $this->kontrahent;
  }

}

class Kontrahenci_AktualizujKontrahentaResponse
{

  protected $Kontrahenci_AktualizujKontrahentaResult;

  public function __construct($Kontrahenci_AktualizujKontrahentaResult)
  {
    $this->Kontrahenci_AktualizujKontrahentaResult = $Kontrahenci_AktualizujKontrahentaResult;
  }

  public function get()
  {
    return $this->Kontrahenci_AktualizujKontrahentaResult;
  }
}
