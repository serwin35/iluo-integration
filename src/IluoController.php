<?php

namespace serwin35\IluoIntegration;

use serwin35\IluoIntegration\Models\IluoApiConnect;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class IluoController extends Controller
{
    public function __construct(){
        set_time_limit(50000);
    }

    public function index($imie)
    {
        $iluo = new IluoApiConnect();

        $grupy = $iluo->GetQueryResults("select * from magDokumentMagazynowy");
        dd($grupy);

        echo $imie;
    }

}
