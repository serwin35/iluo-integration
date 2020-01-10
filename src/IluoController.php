<?php

namespace serwin35\IluoIntegration;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class IluoController extends Controller
{

    public function index($imie)
    {
        echo $imie;
    }

}
