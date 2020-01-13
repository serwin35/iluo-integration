<?php

namespace serwin35\IluoIntegration\Models\Magazyn;

class Magazyn_AktualizujDokumentMagazynowy{

  protected $sessionId;

  protected $idDokumentu;
  protected $dokumentMagazynowy;

  public function __construct($sessionId, $idDokumentu, $dokumentMagazynowy)
  {
    $this->sessionId            = $sessionId;
    $this->idDokumentu          = $idDokumentu;
    $this->dokumentMagazynowy   = $dokumentMagazynowy;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getIdDokumentu()
  {
    return $this->idDokumentu;
  }

  public function getDokumentMagazynowy()
  {
    return $this->dokumentMagazynowy;
  }
}

class Magazyn_AktualizujDokumentMagazynowyResponse
{

  protected $Magazyn_AktualizujDokumentMagazynowyResult;

  public function __construct($Magazyn_AktualizujDokumentMagazynowyResult)
  {
    $this->Magazyn_AktualizujDokumentMagazynowyResult = $Magazyn_AktualizujDokumentMagazynowyResult;
  }

  public function get()
  {
    return $this->Magazyn_AktualizujDokumentMagazynowyResult;
  }
}
