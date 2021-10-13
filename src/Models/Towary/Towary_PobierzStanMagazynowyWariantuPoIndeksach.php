<?php

namespace serwin35\IluoIntegration\Models\Towary;

class Towary_PobierzStanMagazynowyWariantuPoIndeksach
{

  protected $sessionId;

  protected $indeksTowaru;
  protected $kodWariantu;

  protected $idMagazynu;

  protected $razemZRezerwacjami;


  public function __construct($sessionId, $indeksTowaru, $kodWariantu, $idMagazynu, $razemZRezerwacjami)
  {
    $this->sessionId          = $sessionId;
    $this->indeksTowaru           = $indeksTowaru;
    $this->idMagazynu         = $idMagazynu;
    $this->kodWariantu         = $kodWariantu;
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

  public function getKodWariantu()
  {
    return $this->kodWariantu;
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

class Towary_PobierzStanMagazynowyWariantuPoIndeksachResponse
{

  protected $Towary_PobierzStanMagazynowyWariantuPoIndeksachResult;

  public function __construct($Towary_PobierzStanMagazynowyWariantuPoIndeksachResult)
  {
    $this->Towary_PobierzStanMagazynowyWariantuPoIndeksachResult = $Towary_PobierzStanMagazynowyWariantuPoIndeksachResult;
  }

  public function get()
  {
    return $this->Towary_PobierzStanMagazynowyWariantuPoIndeksachResult;
  }
}
