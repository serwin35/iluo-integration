<?php

namespace serwin35\IluoIntegration\Models\Kontrahenci;

class Kontrahenci_PobierzKontrahentaPoId{

  protected $sessionId;

  protected $id;

  public function __construct($sessionId, $id)
  {
    $this->sessionId    = $sessionId;
    $this->id           = $id;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getId()
  {
    return $this->id;
  }

}

class Kontrahenci_PobierzKontrahentaPoIdResponse
{

  protected $Kontrahenci_PobierzKontrahentaPoIdResult;

  public function __construct($Kontrahenci_PobierzKontrahentaPoIdResult)
  {
    $this->Kontrahenci_PobierzKontrahentaPoIdResult = $Kontrahenci_PobierzKontrahentaPoIdResult;
  }

  public function get()
  {
    return $this->Kontrahenci_PobierzKontrahentaPoIdResult;
  }
}
