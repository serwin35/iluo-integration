<?php

namespace serwin35\IluoIntegration\Models\Magazyn;

class Magazyn_PobierzDokumentMagazynowyPoId{

  protected $sessionId;

  protected $id;

  public function __construct($sessionId, $id)
  {
    $this->sessionId    = $sessionId;
    $this->id           = $id;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getId()
  {
    return $this->id;
  }
}

class Magazyn_PobierzDokumentMagazynowyPoIdResponse
{

  protected $Magazyn_PobierzDokumentMagazynowyPoIdResult;

  public function __construct($Magazyn_PobierzDokumentMagazynowyPoIdResult)
  {
    $this->Magazyn_PobierzDokumentMagazynowyPoIdResult = $Magazyn_PobierzDokumentMagazynowyPoIdResult;
  }

  public function get()
  {
    return $this->Magazyn_PobierzDokumentMagazynowyPoIdResult;
  }
}
