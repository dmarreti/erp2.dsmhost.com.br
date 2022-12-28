<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ZanySoft\Cpanel\Cpanel;
// use ZanySoft\Cpanel\Facades\Cpanel;

class CPanelController extends Controller
{
    public function authCpanel()
    {
        $user = 'dedicadossp';


        $cpanel = new Cpanel();
        // $cpanel = App::make('cpanel');
        $cpanel->setHost('142.4.219.195');
        $cpanel->setAuth('dedicadossp', 'w8g45Uhe');

       // return $cpanel->api2($user, $module, $function, $args = array());
    }
    public function index()
    {
        // $cpanel = new CPANEL();
        // // $cpanel = App::make('cpanel');
        // $cpanel->setHost('142.4.219.195');
        // $cpanel->setAuth('dedicadossp', 'w8g45Uhe');

        $cpanel = new \ZanySoft\Cpanel\Cpanel('142.4.219.195','dedicadossp', 'w8g45Uhe');

        $accounts = $cpanel->listaccts();

        var_dump($accounts);

       
        // foreach($accounts as $acc){
        //     var_dump($acc);
        // }

    }
}
