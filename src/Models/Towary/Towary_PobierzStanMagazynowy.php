<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_PobierzStanMagazynowy{

  protected $sessionId;

  protected $idTowaru;

  protected $idMagazynu;
  
  protected $razemZRezerwacjami;
  

  public function __construct($sessionId, $idTowaru, $idMagazynu, $razemZRezerwacjami)
  {
    $this->sessionId          = $sessionId;
    $this->idTowaru           = $idTowaru;
    $this->idMagazynu         = $idMagazynu;
    $this->razemZRezerwacjami = $razemZRezerwacjami;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getIdTowaru()
  {
    return $this->idTowaru;
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

class Towary_PobierzStanMagazynowyResponse
{

  protected $Towary_PobierzStanMagazynowyResult;

  public function __construct($Towary_PobierzStanMagazynowyResult)
  {
    $this->Towary_PobierzStanMagazynowyResult = $Towary_PobierzStanMagazynowyResult;
  }

  public function get()
  {
    return $this->Towary_PobierzStanMagazynowyResult;
  }
}
