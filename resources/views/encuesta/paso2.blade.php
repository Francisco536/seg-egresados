@extends('adminlte::page')

@section('content_header')
    <strong>CUESTIONARIO DE SEGUIMIENTO A EGRESADOS</strong>
    {{-- @if (session('success'))
    <div class="alert alert-success" role="success">
        {{session('success')}}
    </div>
    @endif --}}
@stop

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="container">
                <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                {{-- <div class="alert alert-success hide"></div> novalidate --}}
                <form id="register_form" novalidate action="{{ route('store.encuesta') }}" method="post">
                <fieldset>
                    <br>
                <h5>PERFIL DEL EGRESADO</h5>
                    <br>
                <div class="row mb-3">
                    <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre Completo') }}</label>

                    <div class="col-md-6">
                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required placeholder="Apellido paterno         Apellido materno        Nombre(s)" autofocus>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-end">{{ __('Fecha de Nacimiento') }}</label>

                    <div class="col-md-6">
                        <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required placeholder="dd/mm/yyyy" autofocus>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="sexo" class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>

                    <div class="col-md-6">
                        {{-- <input id="sexo" type="text" class="form-control @error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo" autofocus> --}}
                        <select id="sexo" name="sexo" class="form-control select2" style="width: 100%;" required>
                            <option selected="selected" value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                          </select>


                    </div>
                </div>

                <div class="row mb-3">
                    <label for="curp" class="col-md-4 col-form-label text-md-end">{{ __('Curp') }}</label>

                    <div class="col-md-6">
                        <input id="curp" type="text" class="form-control " name="curp" required autocomplete="curp" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="estado_civil" class="col-md-4 col-form-label text-md-end">{{ __('Estado Civil') }}</label>

                    <div class="col-md-6">
                        {{-- <input id="sexo" type="text" class="form-control @error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo" autofocus> --}}
                        <select id="estado_civil" name="estado_civil" class="form-control select2" style="width: 100%;" required>
                            <option selected="selected" value="Soltero(a)">Soltero(a)</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="Otro">Otro</option>
                          </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="domicilio" class="col-md-4 col-form-label text-md-end">{{ __('Domicilio') }}</label>

                    <div class="col-md-6">
                        <input id="domicilio" type="text" class="form-control" name="domicilio" value="{{ old('domicilio') }}" required placeholder="Calle              No.               Colonia                 C.P."  autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="ciudad" class="col-md-4 col-form-label text-md-end">{{ __('Ciudad') }}</label>

                    <div class="col-md-6">
                        <input id="ciudad" type="text" class="form-control" name="ciudad" value="{{ old('ciudad') }}" required  autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="municipio" class="col-md-4 col-form-label text-md-end">{{ __('Municipio') }}</label>

                    <div class="col-md-6">
                        <input id="municipio" type="text" class="form-control" name="municipio" value="{{ old('municipio') }}" required autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="estado" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>

                    <div class="col-md-6">
                        <input id="estado" type="text" class="form-control" name="estado" value="{{ old('estado') }}" required autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

                    <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required placeholder="952 837 2881" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="carrera_egreso" class="col-md-4 col-form-label text-md-end">{{ __('Carrera de Egreso') }}</label>

                    <div class="col-md-6">
                        {{-- <input id="carrera_egreso" type="text" class="form-control @error('carrera_egreso') is-invalid @enderror" name="carrera_egreso" value="{{ old('carrera_egreso') }}" required autocomplete="sexo" autofocus> --}}
                        <select id="carrera_egreso" name="carrera_egreso" class="form-control select2" style="width: 100%;" required>
                            <option selected="selected" value="Lic. en Administración">Lic. en Administración</option>
                            <option value="Ing. Civil">Ing. Civil</option>
                            <option value="Ing. en Gestión Empresarial" >Ing. en Gestión Empresarial</option>
                            <option value="Ing. Industrial">Ing. Industrial</option>
                            <option value="Ing. en Sistemas Computacionales">Ing. en Sistemas Computacionales</option>
                            <option value="Mecatrónica">Mecatrónica</option>

                          </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="especialidad" class="col-md-4 col-form-label text-md-end">{{ __('Especialidad') }}</label>

                    <div class="col-md-6">
                        <input id="especialidad" type="text" class="form-control" name="especialidad" value="{{ old('especialidad') }}" required autocomplete="especialidad" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="mes_egreso" class="col-md-4 col-form-label text-md-end">{{ __('Mes de Egreso') }}</label>
                    <div class="col-md-6">
                        <input id="mes_egreso" type="text" class="form-control" name="mes_egreso" value="{{ old('mes_egreso') }}" required placeholder="Enero" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="anio_egreso" class="col-md-4 col-form-label text-md-end">{{ __('Año de Egreso') }}</label>

                    <div class="col-md-6">
                        <input id="anio_egreso" type="text" class="form-control" name="anio_egreso" value="{{ old('anio_egreso') }}" required placeholder="2022" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="titulado" class="col-md-4 col-form-label text-md-end">{{ __('Titulado') }}</label>

                    <div class="col-md-6">
                        {{-- <input id="sexo" type="text" class="form-control @error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo" autofocus> --}}
                        <select id="titulado" name="titulado" class="form-control select2" style="width: 100%;" required>
                            <option selected="selected" value="Si">Si</option>
                            <option value="No">No</option>
                          </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="ingles" class="col-md-4 col-form-label text-md-end">{{ __('Dominio de Ingles') }}</label>

                    <div class="col-md-6">
                        <input id="ingles" type="text" class="form-control" name="ingles" required placeholder="75 %">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="manejo_paquetes" class="col-md-4 col-form-label text-md-end">{{ __('Manejo de Paquetes Computacionales') }}</label>
                    <div class="col-md-6">
                        <input id="manejo_paquetes" type="text" class="form-control" name="manejo_paquetes" required >
                    </div>
                </div>
                <br><br>
                <input type="button" class="next-form btn btn-primary" value="Siguiente" />

                </fieldset>
                <fieldset>
                    <br>
                <h5>PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE</h5>
                <h6>Califique la calidad de la educación profesional proporcionada por el personal docente, así como el Plan de Estudios de la carrera que curso y las condiciones del plantel en cuanto a infraestructura.</h6>
                <br>
                <div class="form-group">
                <label for="first_name">Calidad de los Docentes:</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="calidad_docent" id="inlineRadio1" value="5">
                    <label class="form-check-label" for="inlineRadio1">Muy Buena</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="calidad_docent" id="inlineRadio2" value="4">
                    <label class="form-check-label" for="inlineRadio2">Buena</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="calidad_docent" id="inlineRadio3" value="3">
                    <label class="form-check-label" for="inlineRadio3">Regular</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="calidad_docent" id="inlineRadio4" value="2">
                    <label class="form-check-label" for="inlineRadio4">Mala</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="calidad_docent" id="inlineRadio5" value="1">
                    <label class="form-check-label" for="inlineRadio5">Muy Mala</label>
                  </div>
                </div>

                <div class="form-group">
                    <label for="first_name">Plan de estudios:</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="plan_estudios" id="inlineRadio6" value="5">
                        <label class="form-check-label" for="inlineRadio6">Muy Buena</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="plan_estudios" id="inlineRadio7" value="4">
                        <label class="form-check-label" for="inlineRadio7">Buena</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="plan_estudios" id="inlineRadio8" value="3">
                        <label class="form-check-label" for="inlineRadio8">Regular</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="plan_estudios" id="inlineRadio9" value="2">
                        <label class="form-check-label" for="inlineRadio9">Mala</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="plan_estudios" id="inlineRadio10" value="1">
                        <label class="form-check-label" for="inlineRadio10">Muy Mala</label>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="first_name">Oportunidad de participar en proyectos de investigación y desarrollo:</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="opor_partic_proyectos" id="inlineRadio6" value="5">
                            <label class="form-check-label" for="inlineRadio6">Muy Buena</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="opor_partic_proyectos" id="inlineRadio7" value="4">
                            <label class="form-check-label" for="inlineRadio7">Buena</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="opor_partic_proyectos" id="inlineRadio8" value="3">
                            <label class="form-check-label" for="inlineRadio8">Regular</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="opor_partic_proyectos" id="inlineRadio9" value="2">
                            <label class="form-check-label" for="inlineRadio9">Mala</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="opor_partic_proyectos" id="inlineRadio10" value="1">
                            <label class="form-check-label" for="inlineRadio10">Muy Mala</label>
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="first_name">Énfasis que se le presentaba a la investigación dentro del proceso de enseñanza:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="enfasis_investig" id="inlineRadio11" value="5">
                                <label class="form-check-label" for="inlineRadio11">Muy Buena</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="enfasis_investig" id="inlineRadio12" value="4">
                                <label class="form-check-label" for="inlineRadio12">Buena</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="enfasis_investig" id="inlineRadio13" value="3">
                                <label class="form-check-label" for="inlineRadio13">Regular</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="enfasis_investig" id="inlineRadio14" value="2">
                                <label class="form-check-label" for="inlineRadio14">Mala</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="enfasis_investig" id="inlineRadio15" value="1">
                                <label class="form-check-label" for="inlineRadio15">Muy Mala</label>
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="first_name">Satisfacción con las condiciones de estudio (infraestructura):</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="infraestructura" id="inlineRadio11" value="5">
                                    <label class="form-check-label" for="inlineRadio11">Muy Buena</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="infraestructura" id="inlineRadio12" value="4">
                                    <label class="form-check-label" for="inlineRadio12">Buena</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="infraestructura" id="inlineRadio13" value="3">
                                    <label class="form-check-label" for="inlineRadio13">Regular</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="infraestructura" id="inlineRadio14" value="2">
                                    <label class="form-check-label" for="inlineRadio14">Mala</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="infraestructura" id="inlineRadio15" value="1">
                                    <label class="form-check-label" for="inlineRadio15">Muy Mala</label>
                                  </div>
                                </div>

                                <div class="form-group">
                                    <label for="first_name">Experiencia obtenida a través de la residencia profesional: </label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exp_rec_prof" id="inlineRadio11" value="5">
                                        <label class="form-check-label" for="inlineRadio11">Muy Buena</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exp_rec_prof" id="inlineRadio12" value="4">
                                        <label class="form-check-label" for="inlineRadio12">Buena</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exp_rec_prof" id="inlineRadio13" value="3">
                                        <label class="form-check-label" for="inlineRadio13">Regular</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exp_rec_prof" id="inlineRadio14" value="2">
                                        <label class="form-check-label" for="inlineRadio14">Mala</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exp_rec_prof" id="inlineRadio15" value="1">
                                        <label class="form-check-label" for="inlineRadio15">Muy Mala</label>
                                      </div>
                                    </div>

                <br><br>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Anterior" />
                <input type="button" name="next" class="next-form btn btn-primary" value="Siguiente" />
                </fieldset>
                <fieldset>
                    <br>
                    <h5>UBICACIÓN LABORAL DE LOS EGRESADOS</h5>
                    <h6>Indique a cuál de los siguientes puntos corresponde su situación actual.</h6>
                    <br>
                    <div class="form-group">
                    <label for="first_name">Actividad a la que se dedica actualmente:</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="actividad_actual" id="inlineRadio1" value="Trabaja">
                        <label class="form-check-label" for="inlineRadio1">Trabaja</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="actividad_actual" id="inlineRadio2" value="Estudia">
                        <label class="form-check-label" for="inlineRadio2">Estudia</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="actividad_actual" id="inlineRadio3" value="Estudia y Trabaja ">
                        <label class="form-check-label" for="inlineRadio3">Estudia y Trabaja </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="actividad_actual" id="inlineRadio4" value="No estudia ni trabaja">
                        <label class="form-check-label" for="inlineRadio4">No estudia ni trabaja </label>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="first_name">Si estudia, indicar si es:</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_estudia" id="inlineRadio6" value="Especialidad">
                            <label class="form-check-label" for="inlineRadio6">Especialidad</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_estudia" id="inlineRadio7" value="Maestría">
                            <label class="form-check-label" for="inlineRadio7">Maestría</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_estudia" id="inlineRadio8" value="Doctorado">
                            <label class="form-check-label" for="inlineRadio8">Doctorado</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_estudia" id="inlineRadio9" value="Idiomas">
                            <label class="form-check-label" for="inlineRadio9">Idiomas</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_estudia" id="inlineRadio10" value="Otra">
                            <label class="form-check-label" for="inlineRadio10">Otra</label>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="especialidad">Especialidad e institución: </label>
                            <input type="text" name="especialidad" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="first_name">En caso de Trabajar: Tiempo transcurrido para obtener el primer empleo.</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tiemp_obte_empleo" id="inlineRadio6" value="Antes de egresar">
                                <label class="form-check-label" for="inlineRadio6">Antes de egresar</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tiemp_obte_empleo" id="inlineRadio7" value="Menos de seis meses ">
                                <label class="form-check-label" for="inlineRadio7">Menos de seis meses </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tiemp_obte_empleo" id="inlineRadio8" value="Entre seis meses y un año">
                                <label class="form-check-label" for="inlineRadio8">Entre seis meses y un año </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tiemp_obte_empleo" id="inlineRadio9" value="Más de una año">
                                <label class="form-check-label" for="inlineRadio9">Más de una año</label>
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="first_name">Medio para obtener empleo:</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="med_obt_empleo" id="inlineRadio11" value="Bolsa de trabajo del plantel">
                                    <label class="form-check-label" for="inlineRadio11">Bolsa de trabajo del plantel</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="med_obt_empleo" id="inlineRadio12" value="Contactos personales">
                                    <label class="form-check-label" for="inlineRadio12">Contactos personales </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="med_obt_empleo" id="inlineRadio13" value="Residencia profesional">
                                    <label class="form-check-label" for="inlineRadio13">Residencia profesional </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="med_obt_empleo" id="inlineRadio14" value="Medios masivos de comunicación">
                                    <label class="form-check-label" for="inlineRadio14">Medios masivos de comunicación</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="med_obt_empleo" id="inlineRadio15" value="Otros">
                                    <label class="form-check-label" for="inlineRadio15">Otros</label>
                                  </div>
                                </div>

                            <div class="form-group">
                                 <label for="first_name">Requisitos de contratación: ¿Qué competencias laborales?</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="req_contratacion" id="inlineRadio11" value="Competencias laborales">
                                        <label class="form-check-label" for="inlineRadio11">Competencias laborales</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="req_contratacion" id="inlineRadio12" value="Titulación Profesional">
                                        <label class="form-check-label" for="inlineRadio12">Titulación Profesional</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="req_contratacion" id="inlineRadio13" value="Examen de selección ">
                                        <label class="form-check-label" for="inlineRadio13">Examen de selección</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="req_contratacion" id="inlineRadio14" value="Idioma Extranjera ">
                                        <label class="form-check-label" for="inlineRadio14">Idioma Extranjera </label>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="first_name">Actitudes y habilidades socio-comunicativas:</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="actit_habi_socio" id="inlineRadio11" value="principios y valores">
                                            <label class="form-check-label" for="inlineRadio11">principios y valores</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="actit_habi_socio" id="inlineRadio12" value="Ninguno">
                                            <label class="form-check-label" for="inlineRadio12">Ninguno</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="actit_habi_socio" id="inlineRadio13" value="Otro">
                                            <label class="form-check-label" for="inlineRadio13">Otro</label>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="first_name">Idioma que utiliza en su trabajo:</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="idioma_trabajo" id="inlineRadio6" value="Inglés">
                                                <label class="form-check-label" for="inlineRadio6">Inglés</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="idioma_trabajo" id="inlineRadio7" value="Frances">
                                                <label class="form-check-label" for="inlineRadio7">Frances</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="idioma_trabajo" id="inlineRadio8" value="Alemán">
                                                <label class="form-check-label" for="inlineRadio8">Alemán</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="idioma_trabajo" id="inlineRadio9" value="Japones">
                                                <label class="form-check-label" for="inlineRadio9">Japones</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="idioma_trabajo" id="inlineRadio10" value="Otros">
                                                <label class="form-check-label" for="inlineRadio10">Otros</label>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="first_name">Antigüedad en el empleo:</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="antig_empleo" id="inlineRadio6" value="Menos de un año">
                                                    <label class="form-check-label" for="inlineRadio6">Menos de un año</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="antig_empleo" id="inlineRadio7" value="Un año">
                                                    <label class="form-check-label" for="inlineRadio7">Un año</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="antig_empleo" id="inlineRadio8" value="Dos años">
                                                    <label class="form-check-label" for="inlineRadio8">Dos años</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="antig_empleo" id="inlineRadio9" value="Tres años">
                                                    <label class="form-check-label" for="inlineRadio9">Tres años</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="antig_empleo" id="inlineRadio10" value="Mas de tres años">
                                                    <label class="form-check-label" for="inlineRadio10">Mas de tres años</label>
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="col-form-label" for="anio_ingreso">Año de ingreso: </label>
                                                    <input type="text" name="anio_ingreso" class="form-control col-md-6">
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="first_name">Ingreso (salario mínimo diario):</label>
                                                    <br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="ingreso_salario" id="inlineRadio6" value="Menos de cinco">
                                                        <label class="form-check-label" for="inlineRadio6">Menos de cinco</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="ingreso_salario" id="inlineRadio7" value="Entre cinco y siete">
                                                        <label class="form-check-label" for="inlineRadio7">Entre cinco y siete </label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="ingreso_salario" id="inlineRadio8" value="Entre 8 y 10">
                                                        <label class="form-check-label" for="inlineRadio8">Entre 8 y 10</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="ingreso_salario" id="inlineRadio9" value="Mas de 10">
                                                        <label class="form-check-label" for="inlineRadio9">Mas de 10</label>
                                                      </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="first_name">Nivel jerárquico en el trabajo:</label>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="nivel_jerarquico" id="inlineRadio6" value="Técnico">
                                                            <label class="form-check-label" for="inlineRadio6">Técnico</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="nivel_jerarquico" id="inlineRadio7" value="Supervisor">
                                                            <label class="form-check-label" for="inlineRadio7">Supervisor</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="nivel_jerarquico" id="inlineRadio8" value="Jefe de área">
                                                            <label class="form-check-label" for="inlineRadio8">Jefe de área</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="nivel_jerarquico" id="inlineRadio9" value="Funcionario">
                                                            <label class="form-check-label" for="inlineRadio9">Funcionario</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="nivel_jerarquico" id="inlineRadio10" value="Directivo">
                                                            <label class="form-check-label" for="inlineRadio10">Directivo</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="nivel_jerarquico" id="inlineRadio10" value="Empresario">
                                                            <label class="form-check-label" for="inlineRadio10">Empresario</label>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="first_name">Condición de Trabajo:</label>
                                                            <br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="condicion_empleo" id="inlineRadio6" value="Base">
                                                                <label class="form-check-label" for="inlineRadio6">Base</label>
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="condicion_empleo" id="inlineRadio7" value="Eventual">
                                                                <label class="form-check-label" for="inlineRadio7">Eventual</label>
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="condicion_empleo" id="inlineRadio8" value="Contrato">
                                                                <label class="form-check-label" for="inlineRadio8">Contrato</label>
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="condicion_empleo" id="inlineRadio9" value="Otros">
                                                                <label class="form-check-label" for="inlineRadio9">Otros</label>
                                                              </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="first_name">Relación del trabajo con su área de formación:</label>
                                                                <br>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="relac_empleo_form" id="inlineRadio6" value="0%">
                                                                    <label class="form-check-label" for="inlineRadio6">0%</label>
                                                                  </div>
                                                                  <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="relac_empleo_form" id="inlineRadio7" value="20%">
                                                                    <label class="form-check-label" for="inlineRadio7">20%</label>
                                                                  </div>
                                                                  <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="relac_empleo_form" id="inlineRadio8" value="40%">
                                                                    <label class="form-check-label" for="inlineRadio8">40%</label>
                                                                  </div>
                                                                  <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="relac_empleo_form" id="inlineRadio9" value="60%">
                                                                    <label class="form-check-label" for="inlineRadio9">60%</label>
                                                                  </div>
                                                                  <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="relac_empleo_form" id="inlineRadio10" value="80%">
                                                                    <label class="form-check-label" for="inlineRadio10">80%</label>
                                                                  </div>
                                                                  <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="relac_empleo_form" id="inlineRadio10" value="100%">
                                                                    <label class="form-check-label" for="inlineRadio10">100%</label>
                                                                  </div>
                                                                </div>

                    <br><br>
                    <input type="button" name="previous" class="previous-form btn btn-default" value="Anterior" />
                    <input type="button" name="next" class="next-form btn btn-primary" value="Siguiente" />
                </fieldset>
                <fieldset>
                    <br>
                        <h5>UBICACIÓN LABORAL DE LOS EGRESADOS</h5>
                        <br>
                        <div class="form-group">
                            <label for="first_name">Datos de la empresa u organismo:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipo_empresa" id="inlineRadio6" value="Público">
                                <label class="form-check-label" for="inlineRadio6">Público</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipo_empresa" id="inlineRadio7" value="Privado">
                                <label class="form-check-label" for="inlineRadio7">Privado</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipo_empresa" id="inlineRadio8" value="Social">
                                <label class="form-check-label" for="inlineRadio8">Social</label>
                              </div>
                        </div>

                                <div class="row mb-3">
                                <label for="razon_social" class="col-md-4 col-form-label text-md-end">{{ __('Razón social') }}</label>
                                <input id="razon_social" type="text" class="col-md-6 form-control" name="razon_social" value="{{ old('razon_social') }}" required placeholder="Razón Social"  autofocus>
                                </div>

                                <div class="row mb-3">
                                    <label for="pag_web" class="col-md-4 col-form-label text-md-end">{{ __('Página Web') }}</label>
                                    <input id="pag_web" type="text" class="col-md-6 form-control" name="pag_web" value="{{ old('pag_web') }}" required placeholder="Página Web"  autofocus>
                                    </div>
                                <div class="row mb-3">
                                <label for="nom_puesto" class="col-md-4 col-form-label text-md-end">{{ __('Nombre y Puesto del Jefe Inmediato') }}</label>
                                <input id="nom_puesto" type="text" class="col-md-6 form-control" name="nom_puesto" value="{{ old('nom_puesto') }}" required placeholder="Nombre y Puesto del Jefe Inmediato"  autofocus>
                                </div>


                            <div class="row mb-3">
                                <label for="domicilio" class="col-md-4 col-form-label text-md-end">{{ __('Domicilio') }}</label>
                                <input id="domicilio" type="text" class="col-md-6 form-control" name="domicilio" value="{{ old('domicilio') }}" required placeholder="Calle              No.               Colonia                 C.P."  autofocus>
                            </div>


                                <div class="row mb-3">
                                <label for="ciudad" class="col-md-4 col-form-label text-md-end">{{ __('Ciudad') }}</label>
                                <input id="ciudad" type="text" class="col-md-6 form-control " name="ciudad" value="{{ old('ciudad') }}" required  placeholder="Ciudad" autofocus>
                                </div>


                            <div class="row mb-3">
                                <label for="municipio" class="col-md-4 col-form-label text-md-end">{{ __('Municipio') }}</label>
                                <input id="municipio" type="text" class="col-md-6 form-control" name="municipio" value="{{ old('municipio') }}" required placeholder="Municipio" autofocus>
                            </div>

                            <div class="row mb-3">
                                <label for="estado" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>
                                <input id="estado" type="text" class="col-md-6 form-control" name="estado" value="{{ old('estado') }}" required placeholder="Estado" autofocus>
                            </div>

                            <div class="row mb-3">
                                <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>
                                    <input id="telefono" type="text" class="col-md-6 form-control" name="telefono" value="{{ old('telefono') }}" required placeholder="952 837 2881" autofocus>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>
                                <input id="email" type="email" class="col-md-6 form-control" name="email" value="{{ old('email') }}" required placeholder="example@gmail.com" autocomplete="email">
                            </div


                        <br><br>
                        <input type="button" name="previous" class="previous-form btn btn-default" value="Anterior" />
                        <input type="button" name="next" class="next-form btn btn-primary" value="Siguiente" />
                </fieldset>
                <fieldset>
                        <br>
                        <h5>Datos de la empresa u organismo</h5>
                        <br>

                            <div class="form-group">
                                <label for="first_name">Sector Económico de la Empresa u Organización</label>
                                <br>
                                <label for="first_name">SECTOR PRIMARIO:</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sec_primario" id="inlineRadio6" value="Agroindustria">
                                    <label class="form-check-label" for="inlineRadio6">Agroindustria</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sec_primario" id="inlineRadio7" value="Pesquero">
                                    <label class="form-check-label" for="inlineRadio7">Pesquero</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sec_primario" id="inlineRadio8" value="Minero">
                                    <label class="form-check-label" for="inlineRadio8">Minero </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sec_primario" id="inlineRadio9" value="Otros">
                                    <label class="form-check-label" for="inlineRadio9">Otros</label>
                                  </div>
                                </div>

                                <div class="form-group">
                                    <label for="first_name">SECTOR SECUNDARIO:</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sec_secundario" id="inlineRadio6" value="Industria">
                                        <label class="form-check-label" for="inlineRadio6">Industria</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sec_secundario" id="inlineRadio7" value="Construcción">
                                        <label class="form-check-label" for="inlineRadio7">Construcción</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sec_secundario" id="inlineRadio8" value="Minero">
                                        <label class="form-check-label" for="inlineRadio8">Minero </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sec_secundario" id="inlineRadio9" value="Otros">
                                        <label class="form-check-label" for="inlineRadio9">Otros</label>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">SECTOR TERCIARIO</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sec_terciario" id="inlineRadio6" value="Educativo">
                                            <label class="form-check-label" for="inlineRadio6">Educativo</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sec_terciario" id="inlineRadio7" value="Turismo">
                                            <label class="form-check-label" for="inlineRadio7">Turismo</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sec_terciario" id="inlineRadio8" value="Comercio">
                                            <label class="form-check-label" for="inlineRadio8">Comercio</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sec_terciario" id="inlineRadio9" value="Servicios Financieros">
                                            <label class="form-check-label" for="inlineRadio9">Servicios Financieros</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sec_terciario" id="inlineRadio9" value="Otros">
                                            <label class="form-check-label" for="inlineRadio9">Otros</label>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_name">Tamaño de la empresa u organización:</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tamanio_empresa" id="inlineRadio6" value="Microempresa (1-30)">
                                                <label class="form-check-label" for="inlineRadio6">Microempresa (1-30)</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tamanio_empresa" id="inlineRadio7" value="Pequeña (31-100)">
                                                <label class="form-check-label" for="inlineRadio7">Pequeña (31-100)</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tamanio_empresa" id="inlineRadio8" value="Mediana (101-500)">
                                                <label class="form-check-label" for="inlineRadio8">Mediana (101-500)</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tamanio_empresa" id="inlineRadio9" value="Grande(más de 500)">
                                                <label class="form-check-label" for="inlineRadio9">Grande(más de 500)</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tamanio_empresa" id="inlineRadio9" value="Otros">
                                                <label class="form-check-label" for="inlineRadio9">Otros</label>
                                              </div>
                                            </div>


                        <br><br>
                        <input type="button" name="previous" class="previous-form btn btn-default" value="Anterior" />
                        <input type="button" name="next" class="next-form btn btn-primary" value="Siguiente" />
                </fieldset>
                <fieldset>
                    <br>
                        <h5>DESEMPEÑO PROFESIONAL DE LOS EGRESADOS (COHERENCIA ENTRE LA FORMACION Y EL TIPO DE EMPLEO)</h5>
                        <br>
                        <div class="form-group">
                            <label for="first_name">Eficiencia para realizarlas actividades laborales:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="eficiencia_labores" id="inlineRadio6" value="Muy eficiente ">
                                <label class="form-check-label" for="inlineRadio6">Muy eficiente</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="eficiencia_labores" id="inlineRadio7" value="Eficiente">
                                <label class="form-check-label" for="inlineRadio7">Eficiente</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="eficiencia_labores" id="inlineRadio8" value="Poco Eficiente">
                                <label class="form-check-label" for="inlineRadio8">Poco Eficiente</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="eficiencia_labores" id="inlineRadio9" value="Deficiente">
                                <label class="form-check-label" for="inlineRadio9">Deficiente</label>
                              </div>

                            </div>
                            <div class="form-group">
                                <label for="first_name">Como califica su formación académica con respecto a su desempeño laboral:</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="calif_formacion" id="inlineRadio6" value="Excelente">
                                    <label class="form-check-label" for="inlineRadio6">Excelente </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="calif_formacion" id="inlineRadio7" value="Bueno">
                                    <label class="form-check-label" for="inlineRadio7">Bueno</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="calif_formacion" id="inlineRadio8" value="Regular">
                                    <label class="form-check-label" for="inlineRadio8">Regular</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="calif_formacion" id="inlineRadio9" value="Malo">
                                    <label class="form-check-label" for="inlineRadio9">Malo</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="calif_formacion" id="inlineRadio9" value="Pésimo">
                                    <label class="form-check-label" for="inlineRadio9">Pésimo</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label for="first_name">Utilidad de las residencias profesionales o practicas profesionales para su desarrollo laboral y profesional:</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="utilida_recidencia" id="inlineRadio6" value="Excelente">
                                        <label class="form-check-label" for="inlineRadio6">Excelente </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="utilida_recidencia" id="inlineRadio7" value="Bueno">
                                        <label class="form-check-label" for="inlineRadio7">Bueno</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="utilida_recidencia" id="inlineRadio8" value="Regular">
                                        <label class="form-check-label" for="inlineRadio8">Regular</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="utilida_recidencia" id="inlineRadio9" value="Malo">
                                        <label class="form-check-label" for="inlineRadio9">Malo</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="utilida_recidencia" id="inlineRadio9" value="Pésimo">
                                        <label class="form-check-label" for="inlineRadio9">Pésimo</label>
                                      </div>
                                    </div>

                        <strong style="font-size:20px;">Aspectos que valora la empresa u organismo para la contratación de egresados</strong>
                        <h6>Selecciona la opcion donde se utiliza la escala del 1 al 5 en la que 1 es “muy poco” y 5 es “mucho”.</h6>

                        <div class="form-group">
                            <label for="first_name">Area o Campo de Estudio:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="area_estudio" id="inlineRadio6" value="1">
                                <label class="form-check-label" for="inlineRadio6">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="area_estudio" id="inlineRadio7" value="2">
                                <label class="form-check-label" for="inlineRadio7">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="area_estudio" id="inlineRadio8" value="3">
                                <label class="form-check-label" for="inlineRadio8">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="area_estudio" id="inlineRadio9" value="4">
                                <label class="form-check-label" for="inlineRadio9">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="area_estudio" id="inlineRadio9" value="5">
                                <label class="form-check-label" for="inlineRadio9">5</label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name">Titulación:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="titulacion" id="inlineRadio6" value="1">
                                <label class="form-check-label" for="inlineRadio6">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="titulacion" id="inlineRadio7" value="2">
                                <label class="form-check-label" for="inlineRadio7">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="titulacion" id="inlineRadio8" value="3">
                                <label class="form-check-label" for="inlineRadio8">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="titulacion" id="inlineRadio9" value="4">
                                <label class="form-check-label" for="inlineRadio9">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="titulacion" id="inlineRadio9" value="5">
                                <label class="form-check-label" for="inlineRadio9">5</label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name">Experiencia Laboral/practica (antes de egresar):</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="expe_laboral" id="inlineRadio6" value="1">
                                <label class="form-check-label" for="inlineRadio6">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="expe_laboral" id="inlineRadio7" value="2">
                                <label class="form-check-label" for="inlineRadio7">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="expe_laboral" id="inlineRadio8" value="3">
                                <label class="form-check-label" for="inlineRadio8">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="expe_laboral" id="inlineRadio9" value="4">
                                <label class="form-check-label" for="inlineRadio9">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="expe_laboral" id="inlineRadio9" value="5">
                                <label class="form-check-label" for="inlineRadio9">5</label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name">Competencia laboral: Habilidad para resolver problemas, capacidad de análisis, habilidad para el aprendizaje, creatividad, administración del tiempo, capacidad de negociación, habilidades manuales. Trabajo en equipo, iniciativa, honestidad, persistencia, etc:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="compe_laboral" id="inlineRadio6" value="1">
                                <label class="form-check-label" for="inlineRadio6">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="compe_laboral" id="inlineRadio7" value="2">
                                <label class="form-check-label" for="inlineRadio7">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="compe_laboral" id="inlineRadio8" value="3">
                                <label class="form-check-label" for="inlineRadio8">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="compe_laboral" id="inlineRadio9" value="4">
                                <label class="form-check-label" for="inlineRadio9">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="compe_laboral" id="inlineRadio9" value="5">
                                <label class="form-check-label" for="inlineRadio9">5</label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name">Posicionamiento de la institución de Egreso:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="posi_institucion" id="inlineRadio6" value="1">
                                <label class="form-check-label" for="inlineRadio6">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="posi_institucion" id="inlineRadio7" value="2">
                                <label class="form-check-label" for="inlineRadio7">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="posi_institucion" id="inlineRadio8" value="3">
                                <label class="form-check-label" for="inlineRadio8">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="posi_institucion" id="inlineRadio9" value="4">
                                <label class="form-check-label" for="inlineRadio9">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="posi_institucion" id="inlineRadio9" value="5">
                                <label class="form-check-label" for="inlineRadio9">5</label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name">Conocimiento de idiomas extranjeras:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="conoci_idiomas" id="inlineRadio6" value="1">
                                <label class="form-check-label" for="inlineRadio6">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="conoci_idiomas" id="inlineRadio7" value="2">
                                <label class="form-check-label" for="inlineRadio7">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="conoci_idiomas" id="inlineRadio8" value="3">
                                <label class="form-check-label" for="inlineRadio8">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="conoci_idiomas" id="inlineRadio9" value="4">
                                <label class="form-check-label" for="inlineRadio9">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="conoci_idiomas" id="inlineRadio9" value="5">
                                <label class="form-check-label" for="inlineRadio9">5</label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name">Recomendaciones/referencias:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio6" value="1">
                                <label class="form-check-label" for="inlineRadio6">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio7" value="2">
                                <label class="form-check-label" for="inlineRadio7">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio8" value="3">
                                <label class="form-check-label" for="inlineRadio8">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio9" value="4">
                                <label class="form-check-label" for="inlineRadio9">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio9" value="5">
                                <label class="form-check-label" for="inlineRadio9">5</label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name">Personalidad/Actitudes:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pers_actitud" id="inlineRadio6" value="1">
                                <label class="form-check-label" for="inlineRadio6">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pers_actitud" id="inlineRadio7" value="2">
                                <label class="form-check-label" for="inlineRadio7">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pers_actitud" id="inlineRadio8" value="3">
                                <label class="form-check-label" for="inlineRadio8">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pers_actitud" id="inlineRadio9" value="4">
                                <label class="form-check-label" for="inlineRadio9">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pers_actitud" id="inlineRadio9" value="5">
                                <label class="form-check-label" for="inlineRadio9">5</label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name">Capacidad de liderazgo:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cap_liderazgo" id="inlineRadio6" value="1">
                                <label class="form-check-label" for="inlineRadio6">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cap_liderazgo" id="inlineRadio7" value="2">
                                <label class="form-check-label" for="inlineRadio7">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cap_liderazgo" id="inlineRadio8" value="3">
                                <label class="form-check-label" for="inlineRadio8">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cap_liderazgo" id="inlineRadio9" value="4">
                                <label class="form-check-label" for="inlineRadio9">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cap_liderazgo" id="inlineRadio9" value="5">
                                <label class="form-check-label" for="inlineRadio9">5</label>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name">Otros:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="otros" id="inlineRadio6" value="1">
                                <label class="form-check-label" for="inlineRadio6">1</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="otros" id="inlineRadio7" value="2">
                                <label class="form-check-label" for="inlineRadio7">2</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="otros" id="inlineRadio8" value="3">
                                <label class="form-check-label" for="inlineRadio8">3</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="otros" id="inlineRadio9" value="4">
                                <label class="form-check-label" for="inlineRadio9">4</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="otros" id="inlineRadio9" value="5">
                                <label class="form-check-label" for="inlineRadio9">5</label>
                              </div>
                        </div>


                        <br><br>
                        <input type="button" name="previous" class="previous-form btn btn-default" value="Anterior" />
                        <input type="button" name="next" class="next-form btn btn-primary" value="Siguiente" />
                </fieldset>
                <fieldset>
                    <br>
                <h5>EXPECTATIVA DE DESARROLLO, SUPERACIÓN PROFESIONAL Y DE ACTUALIZACIÓN </h5>
                <br>
                <strong style="font-size: 17px;">ACTUALIZACIÓN DE CONOCIMIENTOS</strong>
                <br>
                <div class="form-group">
                    <label for="first_name">Le gustaría tomar cursos de actualización:</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="curso_actu" id="inlineRadio6" value="Si">
                        <label class="form-check-label" for="inlineRadio6">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="curso_actu" id="inlineRadio7" value="No">
                        <label class="form-check-label" for="inlineRadio7">No</label>
                      </div>
                    </div>
                <div class="form-group">
                    <label class="col-form-label" for="name_curso">¿Cuáles?</label>
                    <input type="text" name="name_curso" class="form-control">
                </div>
                <div class="form-group">
                    <label for="first_name">Le gustaría tomar algún Posgrado:</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="postgrado" id="inlineRadio6" value="Si">
                        <label class="form-check-label" for="inlineRadio6">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="postgrado" id="inlineRadio7" value="No">
                        <label class="form-check-label" for="inlineRadio7">No</label>
                      </div>
                    </div>
                <div class="form-group">
                    <label class="col-form-label" for="name_curso">¿Cuál?</label>
                    <input type="text" name="name_postgrado" class="form-control">
                </div>
                <div class="form-group">
                    <label for="first_name">Le gustaría compartir su experiencia laboral y profesional con el Instituto:</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="comp_exper" id="inlineRadio6" value="Si">
                        <label class="form-check-label" for="inlineRadio6">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="comp_exper" id="inlineRadio7" value="No">
                        <label class="form-check-label" for="inlineRadio7">No</label>
                      </div>
                    </div>
                <div class="form-group">
                    <label class="col-form-label" for="name_experiencia">¿En que temas?</label>
                    <input type="text" name="name_experiencia" class="form-control">
                </div>
                <strong style="font-size: 17px;">PARTICIPACIÓN SOCIAL DE LOS EGRESADOS</strong>
                <br>
                <div class="form-group">
                    <label for="first_name">Pertenece a organizaciones sociales:</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="org_sociales" id="inlineRadio6" value="Si">
                        <label class="form-check-label" for="inlineRadio6">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="org_sociales" id="inlineRadio7" value="No">
                        <label class="form-check-label" for="inlineRadio7">No</label>
                      </div>
                    </div>
                <div class="form-group">
                    <label class="col-form-label" for="name_org">¿Cuáles?</label>
                    <input type="text" name="name_org" class="form-control">
                </div>
                <div class="form-group">
                    <label for="first_name">Pertenece a organismos de profesionistas:</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="org_profec" id="inlineRadio6" value="Si">
                        <label class="form-check-label" for="inlineRadio6">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="org_profec" id="inlineRadio7" value="No">
                        <label class="form-check-label" for="inlineRadio7">No</label>
                      </div>
                    </div>
                <div class="form-group">
                    <label class="col-form-label" for="name_orgProf">¿Cuáles?</label>
                    <input type="text" name="name_orgProf" class="form-control">
                </div>
                <div class="form-group">
                    <label for="first_name">Pertenece a la asociación de egresados:</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="asoc_egresados" id="inlineRadio6" value="Si">
                        <label class="form-check-label" for="inlineRadio6">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="asoc_egresados" id="inlineRadio7" value="No">
                        <label class="form-check-label" for="inlineRadio7">No</label>
                      </div>
                    </div>
                    <strong style="font-size: 17px;">COMENTARIOS Y SUGERENCIAS</strong>
                    <br>
                    <div class="form-group">
                        <label class="col-form-label" for="op_final">Opinión o recomendación para mejorar la formación profesional de un egresado de su carrera</label>
                        <textarea type="text" name="op_final" class="form-control"></textarea>
                    </div>

                <br><br>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Anterior" />
                <input type="submit" name="submit" class="submit btn btn-success" value="Guardar y Finalizar" />
                </fieldset>
                </form>
                </div>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style type="text/css">
        #register_form fieldset:not(:first-of-type) {
        display: none;
        }
        </style>
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
