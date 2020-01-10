<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_AktualizujTowarPoId{

  protected $sessionId;

  protected $id;
  protected $towar;

  public function __construct($sessionId, $id, $towar)
  {
    $this->sessionId    = $sessionId;
    $this->id        = $id;
    $this->towar        = $towar;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getTowar()
  {
    return $this->towar;
  }

}

class Towary_AktualizujTowarPoIdResponse
{

  protected $Towary_AktualizujTowarPoIdResult;

  public function __construct($Towary_AktualizujTowarPoIdResult)
  {
    $this->Towary_AktualizujTowarPoIdResult = $Towary_AktualizujTowarPoIdResult;
  }

  public function get()
  {
    return $this->Towary_AktualizujTowarPoIdResult;
  }
}
