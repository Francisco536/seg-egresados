<?php

namespace App\Http\Controllers;

use App\Models\encuesta;
use App\Models\User;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    //
    public function index(){

        $totEnc = encuesta::all()->count();
        $totEgres = User::whereHas('roles', function ($query) {
            return $query->where('name', '=', 'Egresado');
        })->get()->count();

        //registros por carrera
        $totGestion     = User::where('carrera_egreso', '=', 'Ing. en Gestión Empresarial')->get()->count();
        $totAdmin       = User::where('carrera_egreso', '=', 'Lic. en Administración')->get()->count();
        $totCivil       = User::where('carrera_egreso', '=', 'Ing. Civil')->get()->count();
        $totSistemas    = User::where('carrera_egreso', '=', 'Ing. en Sistemas Computacionales')->get()->count();
        $totIndustrial  = User::where('carrera_egreso', '=', 'Ing. Industrial')->get()->count();
        $totMecatronica = User::where('carrera_egreso', '=', 'Mecatrónica')->get()->count();

        //Encuestas por carrera
        $EncGestion     = encuesta::where('carrera_egreso', '=', 'Ing. en Gestión Empresarial')->get()->count();
        $EncAdmin       = encuesta::where('carrera_egreso', '=', 'Lic. en Administración')->get()->count();
        $EncCivil       = encuesta::where('carrera_egreso', '=', 'Ing. Civil')->get()->count();
        $EncSistemas    = encuesta::where('carrera_egreso', '=', 'Ing. en Sistemas Computacionales')->get()->count();
        $EncIndustrial  = encuesta::where('carrera_egreso', '=', 'Ing. Industrial')->get()->count();
        $EncMecatronica = encuesta::where('carrera_egreso', '=', 'Mecatrónica')->get()->count();



        $params['totEnc']         = $totEnc;
        $params['totEgres']       = $totEgres;
        //registros por carrera
        $params['totGestion']     = $totGestion;
        $params['totAdmin']       = $totAdmin;
        $params['totCivil']       = $totCivil;
        $params['totSistemas']    = $totSistemas;
        $params['totIndustrial']  = $totIndustrial;
        $params['totMecatronica'] = $totMecatronica;
        //Encuestas por carrera
        $params['EncGestion']     = $EncGestion;
        $params['EncAdmin']       = $EncAdmin;
        $params['EncCivil']       = $EncCivil;
        $params['EncSistemas']    = $EncSistemas;
        $params['EncIndustrial']  = $EncIndustrial;
        $params['EncMecatronica'] = $EncMecatronica;

        return view('estadisticas.index', $params);
    }

}
