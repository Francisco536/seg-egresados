<?php

namespace App\Http\Controllers;

use App\Models\egresado;
use App\Models\encuesta;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('encuesta.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function end()
    {
        //
        return view('encuesta.finalizada');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function realizadas()
    {
        //
        $collection = encuesta::get();
        //$userId = auth()->user()->id;
        $params['collection'] = $collection;


        return view('encuesta.list', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $userId = auth()->user()->id;

        $collection = encuesta::where('id_user',$userId)->exists();

        if($collection == false){
            return view('encuesta.create');
        }else{
            return view('encuesta.finalizada');
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $user_id = auth()->user()->id;
            encuesta::create([
                'folio'                    => $this->folio_generate(),
                'nombre'                   => $request['nombre'],
                'fecha_nacimiento'         => $request['fecha_nacimiento'],
                'curp'                     => $request['curp'],
                'sexo'                     => $request['sexo'],
                'estado_civil'             => $request['estado_civil'],
                'domicilio'                => $request['domicilio'],
                'ciudad'                   => $request['ciudad'],
                'municipio'                => $request['municipio'],
                'estado'                   => $request['estado'],
                'telefono'                 => $request['telefono'],
                'email'                    => $request['email'],
                'carrera_egreso'           => $request['carrera_egreso'],
                'especialidad'             => $request['especialidad'],
                'mes_egreso'               => $request['mes_egreso'],
                'anio_egreso'              => $request['anio_egreso'],
                'titulado'                 => $request['titulado'],
                'ingles'                   => $request['ingles'],
                'manejo_paquetes'          => $request['manejo_paquetes'],

                'calidad_docent'           => $request['calidad_docent'],
                'plan_estudios'            => $request['plan_estudios'],
                'opor_partic_proyectos'    => $request['opor_partic_proyectos'],
                'enfasis_investig'         => $request['enfasis_investig'],
                'infraestructura'          => $request['infraestructura'],
                'exp_rec_prof'             => $request['exp_rec_prof'],

                'actividad_actual'         => $request['actividad_actual'],
                'si_estudia'               => $request['si_estudia'],
                'especialidad_estud'       => $request['especialidad_estud'],
                'tiemp_obte_empleo'        => $request['tiemp_obte_empleo'],
                'med_obt_empleo'           => $request['med_obt_empleo'],
                'req_contratacion'         => $request['req_contratacion'],
                'actit_habi_socio'         => $request['actit_habi_socio'],
                'idioma_trabajo'           => $request['idioma_trabajo'],
                'antig_empleo'             => $request['antig_empleo'],
                'anio_ingreso'             => $request['anio_ingreso'],
                'ingreso_salario'          => $request['ingreso_salario'],
                'nivel_jerarquico'         => $request['nivel_jerarquico'],
                'condicion_empleo'         => $request['condicion_empleo'],
                'relac_empleo_form'        => $request['relac_empleo_form'],
                'tipo_empresa'             => $request['tipo_empresa'],
                'razon_social'             => $request['razon_social'],
                'pag_web'                  => $request['pag_web'],
                'nom_puesto'               => $request['nom_puesto'],
                'direccion'                => $request['direccion'],
                'ciudad_emp'               => $request['ciudad_emp'],
                'municipio_emp'            => $request['municipio_emp'],
                'estado_emp'               => $request['estado_emp'],
                'telefono_emp'             => $request['telefono_emp'],
                'email_emp'                => $request['email_emp'],
                'sec_primario'             => $request['sec_primario'],
                'sec_secundario'           => $request['sec_secundario'],
                'sec_terciario'            => $request['sec_terciario'],
                'tamanio_empresa'          => $request['tamanio_empresa'],

                'eficiencia_labores'       => $request['eficiencia_labores'],
                'calif_formacion'          => $request['calif_formacion'],
                'utilida_recidencia'       => $request['utilida_recidencia'],
                'area_estudio'             => $request['area_estudio'],
                'titulacion'               => $request['titulacion'],
                'expe_laboral'             => $request['expe_laboral'],
                'compe_laboral'            => $request['compe_laboral'],
                'posi_institucion'         => $request['posi_institucion'],
                'conoci_idiomas'           => $request['conoci_idiomas'],
                'recomendacion'            => $request['recomendacion'],
                'pers_actitud'             => $request['pers_actitud'],
                'cap_liderazgo'            => $request['cap_liderazgo'],
                'otros'                    => $request['otros'],
                'curso_actu'               => $request['curso_actu'],
                'name_curso'               => $request['name_curso'],
                'postgrado'                => $request['postgrado'],
                'name_postgrado'           => $request['name_postgrado'],
                'comp_exper'               => $request['comp_exper'],
                'name_experiencia'         => $request['name_experiencia'],
                'org_sociales'             => $request['org_sociales'],
                'name_org'                 => $request['name_org'],
                'org_profec'               => $request['org_profec'],
                'name_orgProf'             => $request['name_orgProf'],
                'asoc_egresados'           => $request['asoc_egresados'],
                'op_final'                 => $request['op_final'],

                'id_user'                  => $user_id,

            ]);

            $response = [
                "code" => 200, "msg" => "Éxito"
            ];
            return redirect()->route('end.encuesta')->with('success', 'Datos agregados correctamente');
        } catch (ValidationException $exception) {
            $response = [
                "code" => 422, "msg" => "Error", "error" => $exception->errors()
            ];
        }

        return redirect()->route('add.encuesta')->with('success', 'Datos no agregados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encuesta = encuesta::findOrFail($id);
        return view('encuesta.detalle', compact('encuesta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(encuesta $encuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encuesta $encuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(encuesta $encuesta)
    {
        //
    }
    public function folio_generate()
    {
        $folio = 'RS-000000';
        $consulta = encuesta::get('folio')->last();
        $f = 1;
        if (isset($consulta->folio)) {
            $f =  explode('-', $consulta->folio);
            $f = $f[1];
            $folio = (strlen($f + 1) < 6) ? substr($folio, 0, (-1 * strlen($f + 1))) : 'RS-';
        }
        return $folio . ($f + 1);
    }
}
