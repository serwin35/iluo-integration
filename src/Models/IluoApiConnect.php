<?php

namespace serwin35\IluoIntegration\Models;

// Init Model
use Artisaninweb\SoapWrapper\SoapWrapper;

use serwin35\IluoIntegration\Models\Handel\Handel_DodajNoweZamowienie;
use serwin35\IluoIntegration\Models\Handel\Handel_DodajNoweZamowienieDoDostawcyExt;
use serwin35\IluoIntegration\Models\Handel\Handel_DodajNoweZamowienieDoDostawcyExtResponse;
use serwin35\IluoIntegration\Models\Handel\Handel_DodajNoweZamowienieOdOdbiorcyExt;
use serwin35\IluoIntegration\Models\Handel\Handel_DodajNoweZamowienieOdOdbiorcyExtResponse;
use serwin35\IluoIntegration\Models\Handel\Handel_DodajNoweZamowienieResponse;
use serwin35\IluoIntegration\Models\Handel\Handel_PobierzDokumentHandlowyPoId;
use serwin35\IluoIntegration\Models\Handel\Handel_PobierzDokumentHandlowyPoIdResponse;
use serwin35\IluoIntegration\Models\Handel\Handel_PobierzLokalizacjeHandlowe;
use serwin35\IluoIntegration\Models\Handel\Handel_PobierzLokalizacjeHandloweResponse;
use serwin35\IluoIntegration\Models\Handel\Handel_PobierzZamowieniePoId;
use serwin35\IluoIntegration\Models\Handel\Handel_PobierzZamowieniePoIdResponse;

use serwin35\IluoIntegration\Models\Kontrahenci\Kontrahenci_AktualizujKontrahenta;
use serwin35\IluoIntegration\Models\Kontrahenci\Kontrahenci_AktualizujKontrahentaResponse;
use serwin35\IluoIntegration\Models\Kontrahenci\Kontrahenci_DodajNowegoKontrahenta;
use serwin35\IluoIntegration\Models\Kontrahenci\Kontrahenci_DodajNowegoKontrahentaResponse;
use serwin35\IluoIntegration\Models\Kontrahenci\Kontrahenci_PobierzGrupy;
use serwin35\IluoIntegration\Models\Kontrahenci\Kontrahenci_PobierzGrupyResponse;
use serwin35\IluoIntegration\Models\Kontrahenci\Kontrahenci_PobierzKontrahentaPoId;
use serwin35\IluoIntegration\Models\Kontrahenci\Kontrahenci_PobierzKontrahentaPoIdResponse;

use serwin35\IluoIntegration\Models\Magazyn\Magazyn_AktualizujDokumentMagazynowy;
use serwin35\IluoIntegration\Models\Magazyn\Magazyn_AktualizujDokumentMagazynowyResponse;
use serwin35\IluoIntegration\Models\Magazyn\Magazyn_PobierzDokumentMagazynowyPoId;
use serwin35\IluoIntegration\Models\Magazyn\Magazyn_PobierzDokumentMagazynowyPoIdResponse;
use serwin35\IluoIntegration\Models\Magazyn\Magazyn_PobierzDokumentMagazynowyPoNumerze;
use serwin35\IluoIntegration\Models\Magazyn\Magazyn_PobierzDokumentMagazynowyPoNumerzeResponse;

use serwin35\IluoIntegration\Models\Magazyn\Magazyn_PobierzMagazyny;
use serwin35\IluoIntegration\Models\Magazyn\Magazyn_PobierzMagazynyResponse;
use serwin35\IluoIntegration\Models\Parametry\Parametry_PobierzWszystkieKategorie;
use serwin35\IluoIntegration\Models\Parametry\Parametry_PobierzWszystkieKategorieResponse;
use serwin35\IluoIntegration\Models\Slowniki\Slowniki_PobierzJednostkiMiary;
use serwin35\IluoIntegration\Models\Slowniki\Slowniki_PobierzJednostkiMiaryResponse;
use serwin35\IluoIntegration\Models\Slowniki\Slowniki_PobierzMetodyPlatnosci;
use serwin35\IluoIntegration\Models\Slowniki\Slowniki_PobierzMetodyPlatnosciResponse;
use serwin35\IluoIntegration\Models\Slowniki\Slowniki_PobierzSposobyDostawy;
use serwin35\IluoIntegration\Models\Slowniki\Slowniki_PobierzSposobyDostawyResponse;

use serwin35\IluoIntegration\Models\Sys_PobierzTabeleSystemowe;
use serwin35\IluoIntegration\Models\Sys_PobierzTabeleSystemoweResponse;
use serwin35\IluoIntegration\Models\Tagi_PobierzIdTagowDlaObiektu;
use serwin35\IluoIntegration\Models\Tagi_PobierzIdTagowDlaObiektuResponse;
use serwin35\IluoIntegration\Models\Tagi_PobierzTag;
use serwin35\IluoIntegration\Models\Tagi_PobierzTagResponse;
use serwin35\IluoIntegration\Models\Tagi_UstawTagiDlaObiektu;
use serwin35\IluoIntegration\Models\Tagi_UstawTagiDlaObiektuResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_AktualizujTowarPoId;
use serwin35\IluoIntegration\Models\Towary\Towary_AktualizujTowarPoIdResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_AktualizujTowarPoIndeksie;
use serwin35\IluoIntegration\Models\Towary\Towary_AktualizujTowarPoIndeksieResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_DodajNowaGrupe;
use serwin35\IluoIntegration\Models\Towary\Towary_DodajNowaGrupeResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_DodajNowyTowar;
use serwin35\IluoIntegration\Models\Towary\Towary_DodajNowyTowarResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzGrupy;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzGrupyResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzStanMagazynowy;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzStanMagazynowyResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzStanMagazynowyWariantow;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzStanMagazynowyWariantowResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzStanMagazynowyWariantu;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzStanMagazynowyWariantuPoIndeksach;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzStanMagazynowyWariantuPoIndeksachResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzStanMagazynowyWariantuResponse;

use serwin35\IluoIntegration\Models\Towary\Towary_PobierzTowarPoId;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzTowarPoIdResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzTowarPoIndeksie;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzTowarPoIndeksieResponse;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzTypyCen;
use serwin35\IluoIntegration\Models\Towary\Towary_PobierzTypyCenResponse;
use serwin35\IluoIntegration\Models\extended_GetQueryResults;
use serwin35\IluoIntegration\Models\extended_GetQueryResultsResponse;

class IluoApiConnect
{

    protected $soapWrapper;
    protected $iluo = array();

    public function __construct()
    {
        $this->iluo["iluohost"] = config('iluo.host');
        $this->iluo["token"] = config('iluo.token');

        $this->soapWrapper = new SoapWrapper;
        $this->soapWrapper->add('Iluo', function ($service) {
            $service->wsdl('http://' . self::getPort() . '/ILUO-API-v3.0?WSDL')->trace(true)->cache(WSDL_CACHE_NONE)->options(['exceptions' => true, 'stream_context' => stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false,)))])
                ->classmap([

                    // Handel
                    Handel_DodajNoweZamowienie::class,                  Handel_DodajNoweZamowienieResponse::class,
                    Handel_DodajNoweZamowienieDoDostawcyExtExt::class,  Handel_DodajNoweZamowienieDoDostawcyExtResponse::class,
                    Handel_DodajNoweZamowienieOdOdbiorcyExt::class,     Handel_DodajNoweZamowienieOdOdbiorcyExtResponse::class,
                    Handel_PobierzDokumentHandlowyPoId::class,          Handel_PobierzDokumentHandlowyPoIdResponse::class,
                    Handel_PobierzLokalizacjeHandlowe::class,           Handel_PobierzLokalizacjeHandloweResponse::class,
                    Handel_PobierzZamowieniePoId::class,                Handel_PobierzZamowieniePoIdResponse::class,


                    // Kontrahenci
                    Kontrahenci_AktualizujKontrahenta::class,   Kontrahenci_AktualizujKontrahentaResponse::class,
                    Kontrahenci_DodajNowegoKontrahenta::class,  Kontrahenci_DodajNowegoKontrahentaResponse::class,
                    Kontrahenci_PobierzGrupy::class,            Kontrahenci_PobierzGrupyResponse::class,
                    Kontrahenci_PobierzKontrahentaPoId::class,  Kontrahenci_PobierzKontrahentaPoIdResponse::class,


                    // Magazyn
                    Magazyn_AktualizujDokumentMagazynowy::class,        Magazyn_AktualizujDokumentMagazynowyResponse::class,
                    Magazyn_PobierzDokumentMagazynowyPoId::class,       Magazyn_PobierzDokumentMagazynowyPoIdResponse::class,
                    Magazyn_PobierzDokumentMagazynowyPoNumerze::class,  Magazyn_PobierzDokumentMagazynowyPoNumerzeResponse::class,
                    Magazyn_PobierzMagazyny::class,                     Magazyn_PobierzMagazynyResponse::class,


                    // Słowniki
                    Slowniki_PobierzJednostkiMiary::class,      Slowniki_PobierzJednostkiMiaryResponse::class,
                    Slowniki_PobierzMetodyPlatnosci::class,     Slowniki_PobierzMetodyPlatnosciResponse::class,
                    Slowniki_PobierzSposobyDostawy::class,      Slowniki_PobierzSposobyDostawyResponse::class,


                    // Parametry
                    Parametry_PobierzWszystkieKategorie::class, Parametry_PobierzWszystkieKategorieResponse::class,


                    // Towar
                    Towary_AktualizujTowarPoId::class,          Towary_AktualizujTowarPoIdResponse::class,
                    Towary_AktualizujTowarPoIndeksie::class,    Towary_AktualizujTowarPoIndeksieResponse::class,
                    Towary_DodajNowaGrupe::class,               Towary_DodajNowaGrupeResponse::class,
                    Towary_DodajNowyTowar::class,               Towary_DodajNowyTowarResponse::class,
                    Towary_PobierzGrupy::class,                 Towary_PobierzGrupyResponse::class,
                    Towary_PobierzTowarPoId::class,             Towary_PobierzTowarPoIdResponse::class,
                    Towary_PobierzTowarPoIndeksie::class,       Towary_PobierzTowarPoIndeksieResponse::class,
                    Towary_PobierzTypyCen::class,               Towary_PobierzTypyCenResponse::class,
                    Towary_PobierzStanMagazynowy::class,        Towary_PobierzStanMagazynowyResponse::class,
                    Towary_PobierzStanMagazynowyWariantow::class, Towary_PobierzStanMagazynowyWariantowResponse::class,
                    Towary_PobierzStanMagazynowyWariantu::class, Towary_PobierzStanMagazynowyWariantuResponse::class,
                    Towary_PobierzStanMagazynowyWariantuPoIndeksach::class, Towary_PobierzStanMagazynowyWariantuPoIndeksachResponse::class,

                    //Dodatkowe
                    extended_GetQueryResults::class,            extended_GetQueryResultsResponse::class,
                    Tagi_PobierzTag::class,                     Tagi_PobierzTagResponse::class,
                    Tagi_PobierzIdTagowDlaObiektu::class,       Tagi_PobierzIdTagowDlaObiektuResponse::class,
                    Tagi_UstawTagiDlaObiektu::class,            Tagi_UstawTagiDlaObiektuResponse::class,
                    Sys_PobierzTabeleSystemowe::class,          Sys_PobierzTabeleSystemoweResponse::class,
                ]);
        });
    }



    ///
    /// Dokumenty Handlowe
    ///

    public function Handel_DodajNoweZamowienie($zamowienie, $zarezerwujTowar)
    {
        return $this->soapWrapper->call('Iluo.Handel_DodajNoweZamowienie', [new Handel_DodajNoweZamowienie($this->__sessionId(), $zamowienie, $zarezerwujTowar)]);
    }

    public function Handel_DodajNoweZamowienieDoDostawcyExt($zamowienie, $parametry)
    {
        return $this->soapWrapper->call('Iluo.Handel_DodajNoweZamowienieDoDostawcyExt', [new Handel_DodajNoweZamowienieDoDostawcyExt($this->__sessionId(), $zamowienie, $parametry)]);
    }

    public function Handel_DodajNoweZamowienieOdOdbiorcyExt($zamowienie, $parametry)
    {
        return $this->soapWrapper->call('Iluo.Handel_DodajNoweZamowienieOdOdbiorcyExt', [new Handel_DodajNoweZamowienieOdOdbiorcyExt($this->__sessionId(), $zamowienie, $parametry)]);
    }

    public function Handel_PobierzDokumentHandlowyPoId($id)
    {
        return $this->soapWrapper->call('Iluo.Handel_PobierzDokumentHandlowyPoId', [new Handel_PobierzDokumentHandlowyPoId($this->__sessionId(), $id)])->get();
    }

    public function Handel_PobierzLokalizacjeHandlowe()
    {
        return $this->soapWrapper->call('Iluo.Handel_PobierzLokalizacjeHandlowe', [new Handel_PobierzLokalizacjeHandlowe($this->__sessionId())])->get();
    }

    public function Handel_PobierzZamowieniePoId($id)
    {
        return $this->soapWrapper->call('Iluo.Handel_PobierzZamowieniePoId', [new Handel_PobierzZamowieniePoId($this->__sessionId(), $id)])->get();
    }



    ///
    /// Kontrahenci
    ///

    public function Kontrahenci_AktualizujKontrahenta($id, $kontrahent)
    {
        return $this->soapWrapper->call('Iluo.Kontrahenci_AktualizujKontrahenta', [new Kontrahenci_AktualizujKontrahenta($this->__sessionId(), $id, $kontrahent)])->get();
    }

    public function Kontrahenci_DodajNowegoKontrahenta($kontrahent)
    {
        return $this->soapWrapper->call('Iluo.Kontrahenci_DodajNowegoKontrahenta', [new Kontrahenci_DodajNowegoKontrahenta($this->__sessionId(), $kontrahent)])->get();
    }

    public function Kontrahenci_PobierzGrupy()
    {
        return $this->soapWrapper->call('Iluo.Kontrahenci_PobierzGrupy', [new Kontrahenci_PobierzGrupy($this->__sessionId())])->get();
    }

    public function Kontrahenci_PobierzKontrahentaPoId($id)
    {
        return $this->soapWrapper->call('Iluo.Kontrahenci_PobierzKontrahentaPoId', [new Kontrahenci_PobierzKontrahentaPoId($this->__sessionId(), $id)])->get();
    }



    ///
    /// Dokumenty magazynowe
    ///

    public function Magazyn_AktualizujDokumentMagazynowy($idDokumentu, $dokumentMagazynowy)
    {
        $response = $this->soapWrapper->call('Iluo.Magazyn_AktualizujDokumentMagazynowy', [new Magazyn_AktualizujDokumentMagazynowy($this->__sessionId(), $idDokumentu, $dokumentMagazynowy)]);
        return $response;
    }

    public function Magazyn_PobierzDokumentMagazynowyPoId($id)
    {
        return $this->soapWrapper->call('Iluo.Magazyn_PobierzDokumentMagazynowyPoId', [new Magazyn_PobierzDokumentMagazynowyPoId($this->__sessionId(), $id)])->get();
    }

    public function Magazyn_PobierzDokumentMagazynowyPoNumerze($numer)
    {
        return $this->soapWrapper->call('Iluo.Magazyn_PobierzDokumentMagazynowyPoNumerze', [new Magazyn_PobierzDokumentMagazynowyPoNumerze($this->__sessionId(), $numer)])->get();
    }

    public function Magazyn_PobierzMagazyny()
    {
        return $this->soapWrapper->call('Iluo.Magazyn_PobierzMagazyny', [new Magazyn_PobierzMagazyny($this->__sessionId())])->get();
    }



    ///
    /// Parametry
    ///

    public function ParametryPobierzWszystkieKategorie()
    {
        return $this->soapWrapper->call('Iluo.Parametry_PobierzWszystkieKategorie', [new Parametry_PobierzWszystkieKategorie($this->__sessionId())])->get();
    }



    ///
    /// Słowniki
    ///

    public function Slowniki_PobierzJednostkiMiary()
    {
        return $this->soapWrapper->call('Iluo.Slowniki_PobierzJednostkiMiary', [new Slowniki_PobierzJednostkiMiary($this->__sessionId())])->get();
    }

    public function Slowniki_PobierzMetodyPlatnosci()
    {
        return $this->soapWrapper->call('Iluo.Slowniki_PobierzMetodyPlatnosci', [new Slowniki_PobierzMetodyPlatnosci($this->__sessionId())])->get();
    }

    public function Slowniki_PobierzSposobyDostawy()
    {
        return $this->soapWrapper->call('Iluo.Slowniki_PobierzSposobyDostawy', [new Slowniki_PobierzSposobyDostawy($this->__sessionId())])->get();
    }



    ///
    /// Towary
    ///

    public function Towary_AktualizujTowarPoId($id, $towar)
    {
        return $this->soapWrapper->call('Iluo.Towary_AktualizujTowarPoId', [new Towary_AktualizujTowarPoId($this->__sessionId(), $id, $towar)])->get();
    }

    public function Towary_AktualizujTowarPoIndeksie($indeks, $towar)
    {
        return $this->soapWrapper->call('Iluo.Towary_AktualizujTowarPoIndeksie', [new Towary_AktualizujTowarPoIndeksie($this->__sessionId(), $indeks, $towar)])->get();
    }

    public function Towary_DodajNowaGrupe($grupaTowaru)
    {
        return $this->soapWrapper->call('Iluo.Towary_DodajNowaGrupe', [new Towary_DodajNowaGrupe($this->__sessionId(), $grupaTowaru)])->get();
    }

    public function Towary_DodajNowyTowar($towar)
    {
        return $this->soapWrapper->call('Iluo.Towary_DodajNowyTowar', [new Towary_DodajNowyTowar($this->__sessionId(), $towar)])->get();
    }

    public function Towary_PobierzGrupy()
    {
        return $this->soapWrapper->call('Iluo.Towary_PobierzGrupy', [new Towary_PobierzGrupy($this->__sessionId())])->get();
    }

    public function Towary_PobierzTowarPoId($id, $pobierzWarianty = true)
    {
        return $this->soapWrapper->call('Iluo.Towary_PobierzTowarPoId', [new Towary_PobierzTowarPoId($this->__sessionId(), $id, $pobierzWarianty)])->get();
    }

    public function Towary_PobierzTowarPoIndeksie($indeks, $pobierzWarianty = true)
    {
        return $this->soapWrapper->call('Iluo.Towary_PobierzTowarPoIndeksie', [new Towary_PobierzTowarPoIndeksie($this->__sessionId(), $indeks, $pobierzWarianty)])->get();
    }

    public function Towary_PobierzTypyCen()
    {
        $response = $this->soapWrapper->call('Iluo.Towary_PobierzTypyCen', [new Towary_PobierzTypyCen($this->__sessionId())]);
        return $response->get();
    }

    public function Towary_PobierzStanMagazynowy($idTowaru, $idMagazynu, $razemZRezerwacjami = false)
    {
        $response = $this->soapWrapper->call('Iluo.Towary_PobierzStanMagazynowy', [new Towary_PobierzStanMagazynowy($this->__sessionId(), $idTowaru, $idMagazynu, $razemZRezerwacjami)]);
        return $response->get();
    }

    public function Towary_PobierzStanMagazynowyWariantu($idTowaru, $idMagazynu, $idWariantu, $razemZRezerwacjami = false)
    {
        $response = $this->soapWrapper->call('Iluo.Towary_PobierzStanMagazynowyWariantu', [new Towary_PobierzStanMagazynowyWariantu(
            $this->__sessionId(),
            $idTowaru,
            $idWariantu,
            $idMagazynu,
            $razemZRezerwacjami
        )]);
        return $response->get();
    }

    public function Towary_PobierzStanMagazynowyWariantow($idTowaru, $idMagazynu, $razemZRezerwacjami = false)
    {
        $response = $this->soapWrapper->call('Iluo.Towary_PobierzStanMagazynowyWariantow', [new Towary_PobierzStanMagazynowyWariantow($this->__sessionId(), $idTowaru, $idMagazynu, $razemZRezerwacjami)]);
        return $response->get();
    }

    public function Towary_PobierzStanMagazynowyWariantuPoIndeksach($indeksTowaru, $kodWariantu, $idMagazynu, $razemZRezerwacjami = false)
    {
        $response = $this->soapWrapper->call('Iluo.Towary_PobierzStanMagazynowyWariantuPoIndeksach', [new Towary_PobierzStanMagazynowyWariantuPoIndeksach($this->__sessionId(), $indeksTowaru, $kodWariantu, $idMagazynu, $razemZRezerwacjami)]);
        return $response->get();
    }



    ///
    /// Query
    ///

    // Pobranie czy dokument handlowy rozliczony
    public function api_PobierzRozliczeniaDokumentu($id)
    {
        return $this->GetQueryResults("exec api_PobierzRozliczeniaDokumentu {$id}");
    }

    // Pobieranie ceny sprzedaży oraz ceny zakupu
    public function api_PobierzWartosciDokumentuHandlowegoDlaKalkulacjiZysku($id)
    {
        return $this->GetQueryResults("exec api_PobierzWartosciDokumentuHandlowegoDlaKalkulacjiZysku {$id}");
    }

    // Pobieranie ceny sprzedaży oraz ceny zakupu
    public function api_PobieranieOpiekunaDokumentuHandlowego($id)
    {
        return $this->GetQueryResults("select Imie1 as Imie, Nazwisko, IdPracownika  from praPracownik where IdPracownika = (select IdOpiekuna from hanDokumentHandlowy where IdDokumentu = {$id}");
    }

    // Pobieranie stanu magazynowego dla towaru o Id
    public function api_PobieranieCalegoStanuMagazynowegoTowaru($id)
    {
        return $this->GetQueryResults("select (ilosc+iloscZablokowana+IloscZarezerwowana) as StanMagazynowy from magVwStanOgolnyTowaru where IdTowaru = {$id}");
    }



    ///
    /// Inne
    ///

    // Pobieranie tagów dla konkretnego wpisu
    public function Tagi_PobierzIdTagowDlaObiektu($idtabeli, $id)
    {
        $response = $this->soapWrapper->call('Iluo.Tagi_PobierzIdTagowDlaObiektu', [new Tagi_PobierzIdTagowDlaObiektu($this->__sessionId(), $idtabeli, $id)]);
        return $response->get();
    }

    // Pobieranie tagów dla konkretnego wpisu
    public function Tagi_UstawTagiDlaObiektu($idtabeli, $id, $idtagow)
    {
        $response = $this->soapWrapper->call('Iluo.Tagi_UstawTagiDlaObiektu', [new Tagi_UstawTagiDlaObiektu($this->__sessionId(), $idtabeli, $id, $idtagow)]);
        return $response->get();
    }
    // Pobieranie tagów dla konkretnego wpisu
    public function Tagi_PobierzTag($id)
    {
        $response = $this->soapWrapper->call('Iluo.Tagi_PobierzTag', [new Tagi_PobierzTag($this->__sessionId(), $id)]);
        return $response->get();
    }

    // Pobieranie tagów dla konkretnego wpisu
    public function Sys_PobierzTabeleSystemowe()
    {
        $response = $this->soapWrapper->call('Iluo.Sys_PobierzTabeleSystemowe', [new Sys_PobierzTabeleSystemowe($this->__sessionId())]);
        return $response->get();
    }

    // zapytanie bezpośrednie do bazy SQL Iluo
    public function GetQueryResults($query)
    {
        $response = $this->soapWrapper->call('Iluo.extended_GetQueryResults', [new extended_GetQueryResults($this->__sessionId(), $query)]);
        $xml = preg_replace('/(<\?xml[^?]+?)utf-16/i', '$1utf-8', $response->extended_GetQueryResultsResult());
        $xml = simplexml_load_string($xml);
        $json = json_encode($xml);
        $array = json_decode($json, TRUE);
        if (!isset($array["ROW"]))
            $array["ROW"]["false"] = true;
        return $array["ROW"];
    }

    // Pobieranie klucza sesji
    public function __sessionId()
    {
        $iluo["accountName"] = config('iluo.account');
        $iluo["accountToken"] = config('iluo.token');

        return $this->soapWrapper->call('Iluo.Login', [$iluo])->LoginResult;
    }

    // Pobieranie portu
    public static function getPort()
    {
        $iluo["accountName"] = config('iluo.account');
        $iluo["token"] = config('iluo.token');

        $soapWrapper = new SoapWrapper;
        $soapWrapper->add('IluoConfig', function ($service) {
            $service->wsdl('http://' . config('iluo.host') . ':8800/ILUO-Dispatch?wsdl')->trace(true);
        });

        return $soapWrapper->call('IluoConfig.GetServiceAddressAndPort', [$iluo])->GetServiceAddressAndPortResult;
    }
}
