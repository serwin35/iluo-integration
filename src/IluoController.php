<?php

namespace serwin35\IluoIntegration;

use serwin35\IluoIntegration\Models\IluoApiConnect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IluoController extends Controller
{
    public function __construct(){
        set_time_limit(50000);
    }

    public static function __itemEmpty($item, $defNull = false){
        if(empty($item) == true){
            $item = $defNull;
        }
        elseif(is_array($item) || empty($item)){
        $item = implode("','",$item);
        }

        return $item;
    }

    public static function partie($posit){
        $position["IdPozycjiPartiiRemanentu"] = self::__itemEmpty($posit["IdPozycjiPartiiRemanentu"], null);
        $position["IdPozycji"] = self::__itemEmpty($posit["IdPozycji"], null);
        $position["IdPartii"] = self::__itemEmpty($posit["IdPartii"], null);
        $position["IloscWedlugSystemu"] = self::__itemEmpty($posit["IloscWedlugSystemu"], null);
        $position["IloscStwierdzona"] = self::__itemEmpty($posit["IloscStwierdzona"], null);
        $position["CenaNetto"] = self::__itemEmpty($posit["CenaNetto"], null);
        $position["CenaBrutto"] = self::__itemEmpty($posit["CenaBrutto"], null);
        $position["UIDPartiiRemanentu"] = self::__itemEmpty($posit["UIDPartiiRemanentu"], null);
        $position["DodatkowyKosztNetto"] = self::__itemEmpty($posit["DodatkowyKosztNetto"], null);
        $position["DodatkowyKosztBrutto"] = self::__itemEmpty($posit["DodatkowyKosztBrutto"], null);

        DB::table("magPartiaRemanentu")->updateOrInsert(["IdPozycji" => $position["IdPozycji"], "IdPartii" => $position["IdPartii"], "IdPozycjiPartiiRemanentu" => $position["IdPozycjiPartiiRemanentu"]],$position);
    }


    public function index($imie)
    {
        $iluo = new IluoApiConnect();

        $rem = DB::table("magPozycjaRemanentu")->where('download',1)->take(1000)->get();
        foreach($rem as $rr){
            $grupy = $iluo->GetQueryResults("select * from magPartiaRemanentu Where IdPozycji LIKE {$rr->IdPozycji}");
            if(isset($grupy["IdPozycjiPartiiRemanentu"])){
                self::partie($grupy);
            }else{
                foreach($grupy as $posit){
                    self::partie($posit);
                }
            }
            DB::table("magPozycjaRemanentu")->where('IdPozycji', $rr->IdPozycji)->update(['download' => 0]);
        }

        return redirect()->to('/imiona/aloha');

        //$grupy = $iluo->GetQueryResults("select * from magPartiaRemanentu Where IdPozycji LIKE 197852");
dd($grupy);
/*
        $grupy = $iluo->GetQueryResults("select * from magRemanent Where DataWystawienia > '2019-12-01 00:00:00'");
        foreach($grupy as $position){
            unset($position["Uwagi"], $position["IdSesji"], $position["UIDPolecenie"]);
           //dd($position);
            DB::table("magRemanent")->insert($position);
        }
*/
/*
        $rem = DB::table("magRemanent")->where("IdDokumentu", 1093670)->get();
        foreach($rem as $rr){
            $grupy = $iluo->GetQueryResults("select * from magPozycjaRemanentu Where IdDokumentu LIKE {$rr->IdDokumentu}");
            foreach($grupy as $posit){

                $position["IdPozycji"] = self::__itemEmpty($posit["IdPozycji"], null);
                $position["IdDokumentu"] = self::__itemEmpty($posit["IdDokumentu"], null);
                $position["LP"] = self::__itemEmpty($posit["LP"], null);
                $position["IdTowaru"] = self::__itemEmpty($posit["IdTowaru"], null);
                $position["IloscWedlugSystemu"] = self::__itemEmpty($posit["IloscWedlugSystemu"], null);
                $position["IloscStwierdzona"] = self::__itemEmpty($posit["IloscStwierdzona"], null);
                $position["IdMetodyWydawaniaTowaru"] = self::__itemEmpty($posit["IdMetodyWydawaniaTowaru"], null);
                $position["IdJednostkiMiary"] = self::__itemEmpty($posit["IdJednostkiMiary"], null);
                $position["IloscWJednostceMiary"] = self::__itemEmpty($posit["IloscWJednostceMiary"], null);
                $position["Przelicznik"] = self::__itemEmpty($posit["Przelicznik"], null);
                $position["CenaNetto"] = self::__itemEmpty($posit["CenaNetto"], null);
                $position["IdStawkiVat"] = self::__itemEmpty($posit["IdStawkiVat"], null);
                $position["CenaBrutto"] = self::__itemEmpty($posit["CenaBrutto"], null);

                DB::table("magPozycjaRemanentu")->updateOrInsert($position, $position);
            }
        }


        $rem = DB::table("magPozycjaRemanentu")->where('download',0)->take(200)->get();
        foreach($rem as $rr){
            $grupy = $iluo->GetQueryResults("select * from magPartiaRemanentu Where IdPozycji LIKE {$rr->IdPozycji}");
            if(isset($grupy["IdPozycjiPartiiRemanentu"])){
                self::partie($grupy);
            }else{
                foreach($grupy as $posit){
                    self::partie($posit);
                }
            }
            DB::table("magPozycjaRemanentu")->where('IdPozycji', $rr->IdPozycji)->update(['download' => 1]);
        }


        return redirect()->to('/imiona/aloha');


        //DB::table("magRemanent")
        //DB::table("magPozycjaRemanentu")
        //$grupy = $iluo->GetQueryResults("select * from magPozycjaRemanentu Where IdDokumentu LIKE 'RM%'");

        //$grupy = $iluo->Magazyn_PobierzDokumentMagazynowyPoNumerze("RM LOM/19/12/0001");
        dd($grupy);

        //$grupy = $iluo->GetQueryResults("select * from magDokumentMagazynowy");
        $grupy = $iluo->GetQueryResults("select  top 2000 konKontrahent.[IdKontrahenta]
        ,konKontrahent.[IdKontrahenta] as IdPodmiotu
        ,konKontrahent.[Nazwa]
        ,konKontrahent.[NazwaKrotka]
        ,konKontrahent.[NIP]
        ,konKontrahent.[PESEL]
        ,konKontrahent.[Regon]
        ,konKontrahent.[Rodzaj]
        ,case konKontrahent.[Rodzaj] when 1 then 'PESEL' else 'NIP' end as RodzajEwidencji
        ,isnull(konKontrahent.[CzyPlatnikVat],0) as [CzyPlatnikVat]
        ,konKontrahent.[Uwagi]
        ,konKontrahent.[KredytKupiecki]
        ,konKontrahent.[KredytDlaPrzeterminowanych]
        ,konKontrahent.[DomyslnyRabat]
        ,konKontrahent.[PlatnoscGotowka]
        ,konKontrahent.[PlatnoscKarta]
        ,konKontrahent.[PlatnoscOdroczona]
        ,konKontrahent.[TerminNaleznosci]
        ,konKontrahent.[PlatnoscDomyslna]
        ,konKontrahent.[NumerGLN]
        ,konKontrahent.[Aktywny]
        ,konKontrahent.[AdresEmail]
,konKontrahent.[NrTelefonu]
,konGrupaKontrahenta.Nazwa as GrupaKontrahenta
,konKontrahent.IdTabeliCen
, towTabelaCen.Nazwa as TabelaCen
,konKontrahent.IdTabeliNazw, towTabelaNazw.Nazwa as TabelaNazw
,konKontrahent.IdTabeliCenDostawcy
, towTabelaCenDostawcow.Nazwa as TabelaCenDostawcy
,sloBranza.Nazwa as Branza
,praPracownik.Imie1+' '+praPracownik.Nazwisko as Opiekun
,towTypCeny.Nazwa as DomyslnaCenaSprzedazy
,wspAdres.KodPocztowy
        ,wspAdres.Miejscowosc
        ,wspAdres.UlicaLokal
        ,wspAdres.Wojewodztwo
,wspAdres.KodKraju
,wspVwPodmiot.Id
,wspVwPodmiot.UID as Guid,
wspVwPodmiot.DataUtworzenia,
wspVwPodmiot.DataOstatniejModyfikacji,
wspVwPodmiot.UzytkownikWprowadzil,
wspVwPodmiot.UzytkownikZmodyfikowal
,parkonKontrahent.IdKategorii
,parKategoria.Sciezka
,case when parKategoria.Poziom=0 then null else parKategoria.Nazwa end Kategoria
,parkonKontrahent.Parametry ParametryKontrahenta
from dbo.konKontrahent with (nolock)
left join dbo.konGrupaKontrahenta with (nolock) on (konKontrahent.IdGrupy=konGrupaKontrahenta.IdGrupy)
left join dbo.towTabelaCen with (nolock) on (konKontrahent.IdTabeliCen=towTabelaCen.IdTabeli)
left join dbo.towTabelaNazw with (nolock) on (konKontrahent.IdTabeliNazw=towTabelaNazw.IdTabeli)
left join dbo.towTabelaCenDostawcow with (nolock) on (konKontrahent.IdTabeliCenDostawcy=towTabelaCenDostawcow.IdTabeli)
left join dbo.sloBranza with (nolock) on (konKontrahent.IdBranzy=sloBranza.IdBranzy)
left join dbo.praPracownik with (nolock) on (konKontrahent.IdOpiekuna=praPracownik.IdPracownika)
left join dbo.towTypCeny with (nolock) on (konKontrahent.IdTypuCeny=towTypCeny.IdTypuCeny)
left join dbo.wspAdres with (nolock) on (wspAdres.IdAdresu = konKontrahent.IdAdresu)
left join dbo.wspVwPodmiot with (nolock) on (konKontrahent.IdKontrahenta=wspVwPodmiot.Id)
left join dbo.wspPodmiot with (nolock) on (wspPodmiot.IdPodmiotu = konKontrahent.[IdKontrahenta])
left join dbo.parkonKontrahent with (nolock) on (konKontrahent.IdKontrahenta=parkonKontrahent.IdRekordu)
left join dbo.parKategoria with (nolock) on (parkonKontrahent.IdKategorii=parKategoria.IdKategorii)
where ((case when konkontrahent.Aktywny<0 then 0 else 1 end)=1)");
        dd($grupy);

        echo $imie;
        */
    }

}
