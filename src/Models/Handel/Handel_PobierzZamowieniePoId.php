<?php

namespace serwin35\IluoIntegration\Models\Handel;

class Handel_PobierzZamowieniePoId{

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

class Handel_PobierzZamowieniePoIdResponse
{

  protected $Handel_PobierzZamowieniePoIdResult;

  public function __construct($Handel_PobierzZamowieniePoIdResult)
  {
    $this->Handel_PobierzZamowieniePoIdResult = $Handel_PobierzZamowieniePoIdResult;
  }

  public function get()
  {
    return $this->Handel_PobierzZamowieniePoIdResult;
  }
}
