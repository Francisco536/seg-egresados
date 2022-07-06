<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encuesta extends Model
{
    CONST TABLE = 'encuestas';
    const CLASS_NAME = __CLASS__;

    CONST ID                  = 'id';
    CONST FOLIO               = 'folio';
    CONST NOMBRE              = 'nombre';
    CONST FECHA_NACIMIENTO    = 'fecha_nacimiento';
    CONST CURP                = 'curp';
    CONST SEXO                = 'sexo';
    CONST ESTADO_CIVIL        = 'estado_civil';
    CONST DOMICILIO           = 'domicilio';
    CONST CIUDAD              = 'ciudad';
    CONST MUNICIPIO           = 'municipio';
    CONST ESTADO              = 'estado';
    CONST TELEFONO            = 'telefono';
    CONST EMAIL               = 'email';
    CONST CARRERA_EGRESO      = 'carrega_egreso';
    CONST ESPECIALIDAD        = 'especialidad';
    CONST MES_EGRESO          = 'mes_egreso';
    CONST ANIO_EGRESO         = 'anio_egreso';
    CONST TITULADO            = 'titulado';
    CONST INGLES              = 'ingles';
    CONST MANEJO_PAQUETES     = 'manejo_paquetes';

    protected $fillable = [
        'id',
        'folio',
        'nombre',
        'fecha_nacimiento',
        'curp',
        'sexo',
        'estado_civil',
    'domicilio',
    'ciudad',
    'municipio',
    'estado',
    'telefono',
    'email',
    'carrera_egreso',
    'especialidad',
    'mes_egreso',
    'anio_egreso',
    'titulado',
    'ingles',
    'manejo_paquetes',

    'calidad_docent',
    'plan_estudios',
    'opor_partic_proyectos',
    'enfasis_investig',
    'infraestructura',
    'exp_rec_prof',

    'actividad_actual',
    'si_estudia',
    'especialidad_estud',
    'tiemp_obte_empleo',
    'med_obt_empleo',
    'req_contratacion',
    'actit_habi_socio',
    'idioma_trabajo',
    'antig_empleo',
    'anio_ingreso',
    'ingreso_salario',
    'nivel_jerarquico',
    'condicion_empleo',
    'relac_empleo_form',
    'tipo_empresa',
    'razon_social',
    'pag_web',
    'nom_puesto',
    'direccion',
    'ciudad_emp',
    'municipio_emp',
    'estado_emp',
    'telefono_emp',
    'email_emp',
    'sec_primario',
    'sec_secundario',
    'sec_terciario',
    'tamanio_empresa',

    'eficiencia_labores',
    'calif_formacion',
    'utilida_recidencia',
    'area_estudio',
    'titulacion',
    'expe_laboral',
    'compe_laboral',
    'posi_institucion',
    'conoci_idiomas',
    'recomendacion',
    'pers_actitud',
    'cap_liderazgo',
    'otros',
    'curso_actu',
    'name_curso',
    'postgrado',
    'name_postgrado',
    'comp_exper',
    'name_experiencia',
    'org_sociales',
    'name_org',
    'org_profec',
    'name_orgProf',
    'asoc_egresados',
    'op_final',

    'id_user'
    ];

    use HasFactory;
}
