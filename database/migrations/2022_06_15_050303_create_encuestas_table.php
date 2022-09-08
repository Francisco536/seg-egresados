<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->string('nombre');
            $table->string('fecha_nacimiento');
            $table->string('curp');
            $table->string('sexo');
            $table->string('estado_civil');
            $table->string('domicilio');
            $table->string('ciudad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('telefono');
            $table->string('email');
            $table->string('carrera_egreso')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('mes_egreso');
            $table->string('anio_egreso');
            $table->string('titulado');
            $table->string('ingles');
            $table->string('manejo_paquetes');

            $table->string('calidad_docent')->nullable();
            $table->string('plan_estudios')->nullable();
            $table->string('opor_partic_proyectos')->nullable();
            $table->string('enfasis_investig')->nullable();
            $table->string('infraestructura')->nullable();
            $table->string('exp_rec_prof')->nullable();

            $table->string('actividad_actual')->nullable();
            $table->string('si_estudia')->nullable();
            $table->string('especialidad_estud')->nullable();
            $table->string('tiemp_obte_empleo')->nullable();
            $table->string('med_obt_empleo')->nullable();
            $table->string('req_contratacion')->nullable();
            $table->string('actit_habi_socio')->nullable();
            $table->string('idioma_trabajo')->nullable();
            $table->string('antig_empleo')->nullable();
            $table->string('anio_ingreso')->nullable();
            $table->string('ingreso_salario')->nullable();
            $table->string('nivel_jerarquico')->nullable();
            $table->string('condicion_empleo')->nullable();
            $table->string('relac_empleo_form')->nullable();
            $table->string('tipo_empresa')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('pag_web')->nullable();
            $table->string('nom_puesto')->nullable();
            $table->text('direccion')->nullable();
            $table->string('ciudad_emp')->nullable();
            $table->string('municipio_emp')->nullable();
            $table->string('estado_emp')->nullable();
            $table->string('telefono_emp')->nullable();
            $table->string('email_emp')->nullable();
            $table->string('sec_primario')->nullable();
            $table->string('sec_secundario')->nullable();
            $table->string('sec_terciario')->nullable();
            $table->string('tamanio_empresa')->nullable();

            $table->text('eficiencia_labores')->nullable();
            $table->text('calif_formacion')->nullable();
            $table->text('utilida_recidencia')->nullable();
            $table->text('area_estudio')->nullable();
            $table->text('titulacion')->nullable();
            $table->text('expe_laboral')->nullable();
            $table->text('compe_laboral')->nullable();
            $table->text('posi_institucion')->nullable();
            $table->text('conoci_idiomas')->nullable();
            $table->text('recomendacion')->nullable();
            $table->text('pers_actitud')->nullable();
            $table->text('cap_liderazgo')->nullable();
            $table->text('otros')->nullable();

            $table->text('curso_actu')->nullable();
            $table->text('name_curso')->nullable();
            $table->text('postgrado')->nullable();
            $table->text('name_postgrado')->nullable();
            $table->text('comp_exper')->nullable();
            $table->text('name_experiencia')->nullable();
            $table->text('org_sociales')->nullable();
            $table->text('name_org')->nullable();
            $table->text('org_profec')->nullable();
            $table->text('name_orgProf')->nullable();
            $table->text('asoc_egresados')->nullable();
            $table->text('op_final')->nullable();

            $table->string('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuestas');
    }
};
