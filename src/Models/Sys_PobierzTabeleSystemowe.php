<?php

namespace serwin35\IluoIntegration\Models;

class Sys_PobierzTabeleSystemowe
{

  protected $sessionId;

  public function __construct($sessionId)
  {
    $this->sessionId  = $sessionId;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }
}

class Sys_PobierzTabeleSystemoweResponse
{

  protected $Sys_PobierzTabeleSystemoweResult;

  public function __construct($Sys_PobierzTabeleSystemoweResult)
  {
    $this->Sys_PobierzTabeleSystemowe = $Sys_PobierzTabeleSystemoweResult;
  }

  public function get()
  {
    return $this->Sys_PobierzTabeleSystemowe;
  }
}
