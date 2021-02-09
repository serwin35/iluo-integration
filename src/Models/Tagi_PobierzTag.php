<?php

namespace serwin35\IluoIntegration\Models;

class Tagi_PobierzTag
{

  protected $sessionId;
  protected $id;

  public function __construct($sessionId, $id)
  {
    $this->sessionId  = $sessionId;
    $this->id         = $id;
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

class Tagi_PobierzTagResponse
{

  protected $Tagi_PobierzTagResult;

  public function __construct($Tagi_PobierzTagResult)
  {
    $this->Tagi_PobierzTag = $Tagi_PobierzTagResult;
  }

  public function get()
  {
    return $this->Tagi_PobierzTagResult;
  }
}
