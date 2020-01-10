<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_PobierzTowarPoId{

  protected $sessionId;

  protected $id;

  protected $pobierzWarianty;

  public function __construct($sessionId, $id, $pobierzWarianty)
  {
    $this->sessionId        = $sessionId;
    $this->id               = $id;
    $this->pobierzWarianty  = $pobierzWarianty;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getPobierzWarianty()
  {
    return $this->pobierzWarianty;
  }

}

class Towary_PobierzTowarPoIdResponse
{

  protected $Towary_PobierzTowarPoIdResult;

  public function __construct($Towary_PobierzTowarPoIdResult)
  {
    $this->Towary_PobierzTowarPoIdResult = $Towary_PobierzTowarPoIdResult;
  }

  public function get()
  {
    return $this->Towary_PobierzTowarPoIdResult;
  }
}
