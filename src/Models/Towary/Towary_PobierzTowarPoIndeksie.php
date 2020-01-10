<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_PobierzTowarPoIndeksie{

  protected $sessionId;

  protected $indeks;

  protected $pobierzWarianty;

  public function __construct($sessionId, $indeks, $pobierzWarianty)
  {
    $this->sessionId        = $sessionId;
    $this->indeks               = $indeks;
    $this->pobierzWarianty  = $pobierzWarianty;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getIndeks()
  {
    return $this->indeks;
  }

  public function getPobierzWarianty()
  {
    return $this->pobierzWarianty;
  }

}

class Towary_PobierzTowarPoIndeksieResponse
{

  protected $Towary_PobierzTowarPoIndeksieResult;

  public function __construct($Towary_PobierzTowarPoIndeksieResult)
  {
    $this->Towary_PobierzTowarPoIndeksieResult = $Towary_PobierzTowarPoIndeksieResult;
  }

  public function get()
  {
    return $this->Towary_PobierzTowarPoIndeksieResult;
  }
}
