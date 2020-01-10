<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_AktualizujTowarPoIndeksie{

  protected $sessionId;

  protected $indeks;
  protected $towar;

  public function __construct($sessionId, $indeks, $towar)
  {
    $this->sessionId    = $sessionId;
    $this->indeks        = $indeks;
    $this->towar        = $towar;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getIndeks()
  {
    return $this->indeks;
  }

  public function getTowar()
  {
    return $this->towar;
  }

}

class Towary_AktualizujTowarPoIndeksieResponse
{

  protected $Towary_AktualizujTowarPoIndeksieResult;

  public function __construct($Towary_AktualizujTowarPoIndeksieResult)
  {
    $this->Towary_AktualizujTowarPoIndeksieResult = $Towary_AktualizujTowarPoIndeksieResult;
  }

  public function get()
  {
    return $this->Towary_AktualizujTowarPoIndeksieResult;
  }
}
