<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    function testdb(){
        try{
            //Conectarnos a la BD
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
                die('SE CONECTÓ ! :D');
            } else {
                die('LA BD no existe');
            }
        } catch (Exception $e){
            die("NO SE PUDO ESTABLECER CONEXIÓN");
        }
    }
}
