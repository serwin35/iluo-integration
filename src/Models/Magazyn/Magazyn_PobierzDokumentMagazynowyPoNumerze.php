<?php

namespace serwin35\IluoIntegration\Models\Magazyn;

class Magazyn_PobierzDokumentMagazynowyPoNumerze{

  protected $sessionId;

  protected $numer;

  public function __construct($sessionId, $numer)
  {
    $this->sessionId    = $sessionId;
    $this->numer           = $numer;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getNumer()
  {
    return $this->numer;
  }
}

class Magazyn_PobierzDokumentMagazynowyPoNumerzeResponse
{

  protected $Magazyn_PobierzDokumentMagazynowyPoNumerzeResult;

  public function __construct($Magazyn_PobierzDokumentMagazynowyPoNumerzeResult)
  {
    $this->Magazyn_PobierzDokumentMagazynowyPoNumerzeResult = $Magazyn_PobierzDokumentMagazynowyPoNumerzeResult;
  }

  public function get()
  {
    return $this->Magazyn_PobierzDokumentMagazynowyPoNumerzeResult;
  }
}
