<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_PobierzStanMagazynowyWariantowPoIndeksie
{

  protected $sessionId;

  protected $indeksTowaru;

  protected $idMagazynu;

  protected $razemZRezerwacjami;


  public function __construct($sessionId, $indeksTowaru, $idMagazynu, $razemZRezerwacjami)
  {
    $this->sessionId          = $sessionId;
    $this->indeksTowaru       = $indeksTowaru;
    $this->idMagazynu         = $idMagazynu;
    $this->razemZRezerwacjami = $razemZRezerwacjami;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getIndeksTowaru()
  {
    return $this->indeksTowaru;
  }

  public function getIdMagazynu()
  {
    return $this->idMagazynu;
  }

  public function getRazemZRezerwacjami()
  {
    return $this->razemZRezerwacjami;
  }
}

class Towary_PobierzStanMagazynowyWariantowPoIndeksieResponse
{

  protected $Towary_PobierzStanMagazynowyWariantowPoIndeksieResult;

  public function __construct($Towary_PobierzStanMagazynowyWariantowPoIndeksieResult)
  {
    $this->Towary_PobierzStanMagazynowyWariantowPoIndeksieResult = $Towary_PobierzStanMagazynowyWariantowPoIndeksieResult;
  }

  public function get()
  {
    return $this->Towary_PobierzStanMagazynowyWariantowPoIndeksieResult;
  }
}
