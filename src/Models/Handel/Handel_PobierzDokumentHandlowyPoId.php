<?php

namespace serwin35\IluoIntegration\Models\Handel;

class Handel_PobierzDokumentHandlowyPoId{

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

class Handel_PobierzDokumentHandlowyPoIdResponse
{

  protected $Handel_PobierzDokumentHandlowyPoIdResult;

  public function __construct($Handel_PobierzDokumentHandlowyPoIdResult)
  {
    $this->Handel_PobierzDokumentHandlowyPoIdResult = $Handel_PobierzDokumentHandlowyPoIdResult;
  }

  public function get()
  {
    return $this->Handel_PobierzDokumentHandlowyPoIdResult;
  }
}
