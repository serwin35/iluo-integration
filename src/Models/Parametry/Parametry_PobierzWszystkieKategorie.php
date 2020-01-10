<?php

namespace serwin35\IluoIntegration\Models\Parametry;

class Parametry_PobierzWszystkieKategorie{

  protected $sessionId;

  public function __construct($sessionId)
  {
    $this->sessionId    = $sessionId;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }
}

class Parametry_PobierzWszystkieKategorieResponse
{

  protected $Parametry_PobierzWszystkieKategorieResult;

  public function __construct($Parametry_PobierzWszystkieKategorieResult)
  {
    $this->Parametry_PobierzWszystkieKategorieResult = $Parametry_PobierzWszystkieKategorieResult;
  }

  public function getParametryPobierzWszystkieKategorieResult()
  {
    return $this->Parametry_PobierzWszystkieKategorieResult;
  }

  public function get()
  {
    return $this->Parametry_PobierzWszystkieKategorieResult->Kategoria;
  }
}
