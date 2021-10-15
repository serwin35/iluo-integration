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

class Towary_PobierzStanMagazynowyWariantowPoIndeksiehResponse
{

  protected $Towary_PobierzStanMagazynowyWariantowPoIndeksiehResult;

  public function __construct($Towary_PobierzStanMagazynowyWariantowPoIndeksiehResult)
  {
    $this->Towary_PobierzStanMagazynowyWariantowPoIndeksiehResult = $Towary_PobierzStanMagazynowyWariantowPoIndeksiehResult;
  }

  public function get()
  {
    return $this->Towary_PobierzStanMagazynowyWariantowPoIndeksiehResult;
  }
}
