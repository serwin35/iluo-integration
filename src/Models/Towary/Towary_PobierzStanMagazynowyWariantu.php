<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_PobierzStanMagazynowyWariantu{

  protected $sessionId;

  protected $idTowaru;
protected $idWariantu;

  protected $idMagazynu;

  protected $razemZRezerwacjami;


  public function __construct($sessionId, $idTowaru, $idWariantu, $idMagazynu, $razemZRezerwacjami)
  {
    $this->sessionId          = $sessionId;
    $this->idTowaru           = $idTowaru;
    $this->idMagazynu         = $idMagazynu;
    $this->idWariantu         = $idWariantu;
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

    public function getIdWariantu()
    {
        return $this->idWariantu;
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

class Towary_PobierzStanMagazynowyWariantuResponse
{

  protected $Towary_PobierzStanMagazynowyResult;

  public function __construct($Towary_PobierzStanMagazynowyWariantuResult)
  {
    $this->Towary_PobierzStanMagazynowyWariantuResult = $Towary_PobierzStanMagazynowyWariantuResult;
  }

  public function get()
  {
    return $this->Towary_PobierzStanMagazynowyWariantuResult;
  }
}
