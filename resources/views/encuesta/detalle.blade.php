
  @extends('adminlte::page')

@section('content_header')
    <strong>CUESTIONARIO DE SEGUIMIENTO A EGRESADOS</strong>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true" style="font-size: 13px">PERFIL DEL EGRESADO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false" style="font-size: 13px">PERTINENCIA Y DISPONIBILIDAD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill" href="#custom-content-above-messages" role="tab" aria-controls="custom-content-above-messages" aria-selected="false" style="font-size: 13px">UBICACIÓN LABORAL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill" href="#custom-content-above-settings" role="tab" aria-controls="custom-content-above-settings" aria-selected="false" style="font-size: 13px">DESEMPEÑO PROFESIONAL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-sett-tab" data-toggle="pill" href="#custom-content-above-sett" role="tab" aria-controls="custom-content-above-sett" aria-selected="false" style="font-size: 13px">EXPECTATIVA DE DESARROLLO</a>
              </li>
            </ul>
            <br><br>
            <div class="tab-content" id="custom-content-above-tabContent">
              <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                <div class="row mb-3">
                    <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre Completo') }}</label>

                    <div class="col-md-6">
                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $encuesta->nombre }}" required placeholder="Apellido paterno         Apellido materno        Nombre(s)" readonly>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-end">{{ __('Fecha de Nacimiento') }}</label>

                    <div class="col-md-6">
                        <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" value="{{ $encuesta->fecha_nacimiento }}" required placeholder="dd/mm/yyyy" readonly>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="sexo" class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>

                    <div class="col-md-6">
                        {{-- <input id="sexo" type="text" class="form-control @error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo" autofocus> --}}
                        <input id="sexo" name="sexo" class="form-control select2" value="{{ $encuesta->sexo }}" style="width: 100%;" readonly>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="curp" class="col-md-4 col-form-label text-md-end">{{ __('Curp') }}</label>

                    <div class="col-md-6">
                        <input id="curp" type="text" class="form-control " name="curp" required autocomplete="curp" value="{{ $encuesta->curp }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="estado_civil" class="col-md-4 col-form-label text-md-end">{{ __('Estado Civil') }}</label>

                    <div class="col-md-6">
                        {{-- <input id="sexo" type="text" class="form-control @error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo" autofocus> --}}
                        <input id="estado_civil" name="estado_civil" class="form-control select2" value="{{ $encuesta->estado_civil }}" style="width: 100%;" readonly>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="domicilio" class="col-md-4 col-form-label text-md-end">{{ __('Domicilio') }}</label>

                    <div class="col-md-6">
                        <input id="domicilio" type="text" class="form-control" name="domicilio" value="{{ $encuesta->domicilio }}" readonly placeholder="Calle              No.               Colonia                 C.P."  autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="ciudad" class="col-md-4 col-form-label text-md-end">{{ __('Ciudad') }}</label>

                    <div class="col-md-6">
                        <input id="ciudad" type="text" class="form-control" name="ciudad" value="{{ $encuesta->ciudad }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="municipio" class="col-md-4 col-form-label text-md-end">{{ __('Municipio') }}</label>

                    <div class="col-md-6">
                        <input id="municipio" type="text" class="form-control" name="municipio" value="{{ $encuesta->municipio }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="estado" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>

                    <div class="col-md-6">
                        <input id="estado" type="text" class="form-control" name="estado" value="{{ $encuesta->estado }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

                    <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control" name="telefono" value="{{ $encuesta->telefono }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ $encuesta->email }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="carrera_egreso" class="col-md-4 col-form-label text-md-end">{{ __('Carrera de Egreso') }}</label>

                    <div class="col-md-6">
                        {{-- <input id="carrera_egreso" type="text" class="form-control @error('carrera_egreso') is-invalid @enderror" name="carrera_egreso" value="{{ old('carrera_egreso') }}" required autocomplete="sexo" autofocus> --}}
                        <input type="text" id="carrera_egreso" name="carrera_egreso" class="form-control select2" value="{{ $encuesta->carrera_egreso }}" style="width: 100%;" readonly>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="especialidad" class="col-md-4 col-form-label text-md-end">{{ __('Especialidad') }}</label>

                    <div class="col-md-6">
                        <input id="especialidad" type="text" class="form-control" name="especialidad" value="{{ $encuesta-> especialidad }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="mes_egreso" class="col-md-4 col-form-label text-md-end">{{ __('Mes de Egreso') }}</label>
                    <div class="col-md-6">
                        <input id="mes_egreso" type="text" class="form-control" name="mes_egreso" value="{{ $encuesta->mes_egreso }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="anio_egreso" class="col-md-4 col-form-label text-md-end">{{ __('Año de Egreso') }}</label>

                    <div class="col-md-6">
                        <input id="anio_egreso" type="text" class="form-control" name="anio_egreso" value="{{ $encuesta->anio_egreso }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="titulado" class="col-md-4 col-form-label text-md-end">{{ __('Titulado') }}</label>

                    <div class="col-md-6">
                        {{-- <input id="sexo" type="text" class="form-control @error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo" autofocus> --}}
                        <input id="titulado" type="text" name="titulado" class="form-control select2" value="{{ $encuesta->titulado }}" readonly>


                    </div>
                </div>

                <div class="row mb-3">
                    <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Dominio de Ingles') }}</label>
                    <div class="col-md-6">
                        <input id="ingles" type="text" class="form-control" name="ingles" value="{{ $encuesta->ingles }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="manejo_paquetes" class="col-md-4 col-form-label text-md-end">{{ __('Manejo de Paquetes Computacionales') }}</label>
                    <div class="col-md-6">
                        <input id="manejo_paquetes" type="text" class="form-control" value="{{ $encuesta->manejo_paquetes }}" name="manejo_paquetes" readonly >
                    </div>
                </div>
              </div>

              <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                <h6>Califique la calidad de la educación profesional proporcionada por el personal docente, así como el Plan de Estudios de la carrera que curso y las condiciones del plantel en cuanto a infraestructura.
                    1 = Muy Mala, 2 = Mala, 3 = Regular, 4 = Buena, 5 = Muy Buena.
                </h6>
                <div class="row mb-3">
                    <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Calidad de los Docentes:') }}</label>
                    <div class="col-md-6">
                        <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->calidad_docent }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Plan de estudios:') }}</label>
                    <div class="col-md-6">
                        <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->plan_estudios }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Oportunidad de participar en proyectos de investigación y desarrollo:') }}</label>
                    <div class="col-md-6">
                        <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->opor_partic_proyectos }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Énfasis que se le presentaba a la investigación dentro del proceso de enseñanza::') }}</label>
                    <div class="col-md-6">
                        <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->enfasis_investig }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Satisfacción con las condiciones de estudio (infraestructura):') }}</label>
                    <div class="col-md-6">
                        <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->infraestructura }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Experiencia obtenida a través de la residencia profesional:') }}</label>
                    <div class="col-md-6">
                        <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->exp_rec_prof }}" readonly>
                    </div>
                </div>
              </div>
    <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel" aria-labelledby="custom-content-above-messages-tab">
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Actividad a la que se dedica actualmente:') }}</label>
            <div class="col-md-6">
                <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->actividad_actual }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Si estudia, indicar si es:') }}</label>
            <div class="col-md-6">
                <input id="si_estudia" type="text" class="form-control" name="si_estudia" value="{{ $encuesta->si_estudia }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Especialidad e institución:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->especialidad_estud }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('En caso de Trabajar: Tiempo transcurrido para obtener el primer empleo.') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="tiemp_obte_empleo" value="{{ $encuesta->tiemp_obte_empleo }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Medio para obtener empleo:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->med_obt_empleo }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Requisitos de contratación: ¿Qué competencias laborales?') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->req_contratacion }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Actitudes y habilidades socio-comunicativas:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->actit_habi_socio }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Idioma que utiliza en su trabajo:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->idioma_trabajo }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Antigüedad en el empleo:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->antig_empleo }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Ingreso (salario mínimo diario):') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->ingreso_salario }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Nivel jerárquico en el trabajo:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->nivel_jerarquico }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Condición de Trabajo') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->condicion_empleo }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Relación del trabajo con su área de formación:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->relac_empleo_form }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Datos de la empresa u organismo:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->tipo_empresa }}" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Razón social:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->razon_social }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Página Web:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->pag_web }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Nombre y Puesto del Jefe Inmediato:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->nom_puesto }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Domicilio:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->direccion }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Ciudad:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->ciudad_emp }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Municipio') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->municipio_emp }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Estado:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->estado_emp }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Telefono:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->telefono_emp }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Correo:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->email_emp }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('SECTOR PRIMARIO:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->sec_primario }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('SECTOR SECUNDARIO:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->sec_secundario }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('SECTOR TERCIARIO:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->sec_terciario }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Tamaño de la empresa u organización:') }}</label>
            <div class="col-md-6">
                <input id="especialidad_estud" type="text" class="form-control" name="especialidad_estud" value="{{ $encuesta->tamanio_empresa }}" readonly>
            </div>
        </div>

        </div>
        <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel" aria-labelledby="custom-content-above-settings-tab">
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Eficiencia para realizarlas actividades laborales:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->eficiencia_labores }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Como califica su formación académica con respecto a su desempeño laboral:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->calif_formacion }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Utilidad de las residencias profesionales o practicas profesionales para su desarrollo laboral y profesional:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->utilida_recidencia }}" readonly>
                </div>
            </div>
            <strong style="font-size:20px;">Aspectos que valora la empresa u organismo para la contratación de egresados</strong>
            <h6>Selecciona la opcion donde se utiliza la escala del 1 al 5 en la que 1 es “muy poco” y 5 es “mucho”.</h6>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Area o Campo de Estudio:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->area_estudio }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Titulación:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->titulacion }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Experiencia Laboral/practica (antes de egresar):') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->expe_laboral }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Competencia laboral: Habilidad para resolver problemas, capacidad de análisis, habilidad para el aprendizaje, creatividad, administración del tiempo, capacidad de negociación, habilidades manuales. Trabajo en equipo, iniciativa, honestidad, persistencia, etc:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->compe_laboral }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Posicionamiento de la institución de Egreso:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->posi_institucion }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Conocimiento de idiomas extranjeras:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->conoci_idiomas }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Recomendaciones/referencias:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->recomendacion }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Personalidad/Actitudes:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->pers_actitud }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Capacidad de liderazgo:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->cap_liderazgo }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Otros:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->otros }}" readonly>
                </div>
            </div>


          </div>

         <div class="tab-pane fade" id="custom-content-above-sett" role="tabpanel" aria-labelledby="custom-content-above-sett-tab">
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Le gustaría tomar cursos de actualización:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->curso_actu }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('¿Cuáles?') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->name_curso }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Le gustaría tomar algún Posgrado:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->postgrado }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('¿Cuál?') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->name_postgrado }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Le gustaría compartir su experiencia laboral y profesional con el Instituto:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->comp_exper }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('¿En que temas?') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->name_experiencia }}" readonly>
                </div>
            </div>
            <strong style="font-size: 17px;">PARTICIPACIÓN SOCIAL DE LOS EGRESADOS</strong>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Pertenece a organizaciones sociales:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->org_sociales }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('¿Cuáles?') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->name_org }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Pertenece a organismos de profesionistas:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->org_profec }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('¿Cuáles?') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->name_orgProf}}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Pertenece a la asociación de egresados:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->asoc_egresados }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Opinión o recomendación para mejorar la formación profesional de un egresado de su carrera:') }}</label>
                <div class="col-md-6">
                    <input id="actividad_actual" type="text" class="form-control" name="actividad_actual" value="{{ $encuesta->op_final }}" readonly>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
$(document).ready(function(){
    var form_count = 1, previous_form, next_form, total_forms;
    total_forms = $("fieldset").length;
    $(".next-form").click(function(){
    previous_form = $(this).parent();
    next_form = $(this).parent().next();
    next_form.show();
    previous_form.hide();
    setProgressBarValue(++form_count);
    });
    $(".previous-form").click(function(){
    previous_form = $(this).parent();
    next_form = $(this).parent().prev();
    next_form.show();
    previous_form.hide();
    setProgressBarValue(--form_count);
    });
    setProgressBarValue(form_count);
    function setProgressBarValue(value){
    var percent = parseFloat(100 / total_forms) * value;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    .html(percent+"%");
    }
});
</script>
@stop
