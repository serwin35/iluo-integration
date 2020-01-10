<?php

namespace serwin35\IluoIntegration\Models\Slowniki;

class Slowniki_PobierzJednostkiMiary{

  protected $sessionId;


  public function __construct($sessionId)
  {
    $this->sessionId    = $sessionId;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }
}

class Slowniki_PobierzJednostkiMiaryResponse
{

  protected $Slowniki_PobierzJednostkiMiaryResult;

  public function __construct($Slowniki_PobierzJednostkiMiaryResult)
  {
    $this->Slowniki_PobierzJednostkiMiaryResult = $Slowniki_PobierzJednostkiMiaryResult;
  }

  public function get()
  {
    return $this->Slowniki_PobierzJednostkiMiaryResult->JednostkaMiary;
  }
}
