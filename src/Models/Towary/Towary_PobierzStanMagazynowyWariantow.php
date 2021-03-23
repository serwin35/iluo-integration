<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_PobierzStanMagazynowyWariantow{

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

class Towary_PobierzStanMagazynowyWariantowResponse
{

  protected $Towary_PobierzStanMagazynowyWariantowResult;

  public function __construct($Towary_PobierzStanMagazynowyWariantowResult)
  {
    $this->Towary_PobierzStanMagazynowyWariantowResult = $Towary_PobierzStanMagazynowyWariantowResult;
  }

  public function get()
  {
    return $this->Towary_PobierzStanMagazynowyWariantowResult;
  }
}
