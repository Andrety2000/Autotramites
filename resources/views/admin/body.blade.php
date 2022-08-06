
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card corona-gradient-card">
            <div class="card-body py-0 px-0 px-sm-3">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Peritaje</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">10</h2>
                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5% crecimiento</p>
                      </div>
                      <h6 class="text-muted font-weight-normal">Este mes</h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Sales</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">$45850</h2>
                        <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                      </div>
                      <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Purchase</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">$2039</h2>
                        <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                      </div>
                      <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card corona-gradient-card">
            <div class="card-body py-0 px-0 px-sm-3">
              </div>
            </div><br>

        <div class="row">
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-md-center">HISTORIAL DE SERVICIOS</h4>
                <canvas id="transaction-history" class="transaction-chart"></canvas>

                <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                  <div class="text-md-center text-xl-left">
                    <h6 class="mb-1">SERVICIOS ACTIVADOS</h6>
                    <p class="text-muted mb-0">02 Mayo 2022, 09:12AM</p>
                </div>
                  <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                    <h6 class="font-weight-bold mb-0">146</h6>
                  </div>
                </div>

                <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">SERVICIOS INACTIVOS</h6>
                      <p class="text-muted mb-0">02 Mayo 2022, 09:12AM</p>
                  </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">146</h6>
                    </div>
                  </div>


                <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                  <div class="text-md-center text-xl-left">
                    <h6 class="mb-1">SERVICIOS SOLICITADOS</h6>
                    <p class="text-muted mb-0">02 Mayo 2022, 09:12AM</p>
                  </div>
                  <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                    <h6 class="font-weight-bold mb-0">39</h6>
                  </div>
                </div>


              </div>
            </div>
          </div>

          <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-row justify-content-between">




  {{---inic formulario---}}
                  <x-jet-authentication-card>
                      <x-slot name="logo">
                          <x-jet-authentication-card-logo />
                      </x-slot>

                      <form action="{{route('servicios.store')}}" method="POST" >
                          @csrf

                          <div>
                          <x-jet-label for="nombre_completo" value="{{ __('Nombre Completo') }}" />
                          <x-jet-input id="nombre_completo" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="nombre_completo" value="{{old('nombre_completo')}}" required autofocus autocomplete="nombre_completo" />
                          </div>

                          <div>
                            <x-jet-label for="tipo_documento" value="{{ __('Seleccione el Servicio') }}" />
                            <div class="flex relative w-full">
                                <select id="tipo_documento" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="tipo_documento" value="{{old('tipo_documento')}}" required autofocus autocomplete="tipo_documento" >
                                    <option value="Targeta de Identidad">Targeta de Identidad</option>
                                    <option value="Cedula">Cedula</option>
                                    <option value="Cedula Extranjera">Cedula Extranjera</option>
                                    <option value="Otro">Otro</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-blue-400">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                            <div>
                                <x-jet-label for="numero_documento" value="{{ __('Numero de Documento') }}" />
                                <x-jet-input id="numero_documento" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="number" name="numero_documento" value="{{old('numero_documento')}}" required autofocus autocomplete="numero_documento" />
                                </div>

                                <div>
                                    <x-jet-label for="departamento" value="{{ __('Seleccione el Depertamento') }}" />
                                    <div class="flex relative w-full">
                                        <select id="departamento" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="departamento" value="{{old('departamento')}}" required autofocus autocomplete="departamento" >
                                            <option value="Traspaso">Traspaso</option>
                                            <option value="Traslado de Cuenta">Traslado de Cuenta</option>
                                            <option value="Peritaje">Peritage</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-blue-400">
                                            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                          <div>
                          <x-jet-label for="municipio" value="{{ __('Municipio') }}" />
                          <x-jet-input id="municipio" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="descripcion" value="{{old('municipio')}}" required autofocus autocomplete="municipio" />
                          </div>

                          <div>
                              <x-jet-label for="servicio" value="{{ __('Seleccione el Servicio') }}" />
                              <div class="flex relative w-full">
                                  <select id="servicio" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="servicio" value="{{old('servicio')}}" required autofocus autocomplete="servicio" >
                                      <option value="Traspaso">Traspaso</option>
                                      <option value="Traslado de Cuenta">Traslado de Cuenta</option>
                                      <option value="Peritaje">Peritage</option>
                                      <option value="Matricula">Matricula</option>
                                      <option value="Licencia">Licencia</option>
                                      <option value="Impronta">Impronta</option>
                                      <option value="Comparendos">Comparendos</option>
                                      <option value="Asesoria Juridica">Asesoria Juridica</option>
                                      <option value="Bateria">Bateria</option>
                                  </select>
                                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-blue-400">
                                      <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                      </svg>
                                  </div>
                              </div>
                          </div>


                          <div>
                            <x-jet-label for="descripcion" value="{{ __('Descripciòn del Servicio') }}" />
                            <x-jet-input id="descripcion" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="descripcion" value="{{old('descripcion')}}" required autofocus autocomplete="descripcion" />
                            </div>

                          <div class="flex items-center justify-end mt-4">

                              <x-jet-button class="ml-4">

                                  <a href="{{ route('servicios') }}" :active="request()->routeIs('servicios')">
                                  {{__('Volver a Servicios')}}</a>

                              </x-jet-button>


                              <x-jet-button class="ml-4" type="submit">
                                <a href="{{ route('redirect') }}" :active="request()->routeIs('redirect')">
                                    {{ __('Enviar Solicitud') }} </a>
                                </x-jet-button>
                          </div>
                      </form>

              </x-jet-authentication-card><br>

            </div>
        </div>
      </div>
    </div>
  </div>
              {{-----inic formulario----}}

              <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                  </div>
                </div><br>

    </div>



      <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Order Status</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </th>
                      <th> Client Name </th>
                      <th> Order No </th>
                      <th> Product Cost </th>
                      <th> Project </th>
                      <th> Payment Mode </th>
                      <th> Start Date </th>
                      <th> Payment Status </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="assets/images/faces/face1.jpg" alt="image" />
                        <span class="pl-2">Henry Klein</span>
                      </td>
                      <td> 02312 </td>
                      <td> $14,500 </td>
                      <td> Dashboard </td>
                      <td> Credit card </td>
                      <td> 04 Dec 2019 </td>
                      <td>
                        <div class="badge badge-outline-success">Approved</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="assets/images/faces/face2.jpg" alt="image" />
                        <span class="pl-2">Estella Bryan</span>
                      </td>
                      <td> 02312 </td>
                      <td> $14,500 </td>
                      <td> Website </td>
                      <td> Cash on delivered </td>
                      <td> 04 Dec 2019 </td>
                      <td>
                        <div class="badge badge-outline-warning">Pending</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="assets/images/faces/face5.jpg" alt="image" />
                        <span class="pl-2">Lucy Abbott</span>
                      </td>
                      <td> 02312 </td>
                      <td> $14,500 </td>
                      <td> App design </td>
                      <td> Credit card </td>
                      <td> 04 Dec 2019 </td>
                      <td>
                        <div class="badge badge-outline-danger">Rejected</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="assets/images/faces/face3.jpg" alt="image" />
                        <span class="pl-2">Peter Gill</span>
                      </td>
                      <td> 02312 </td>
                      <td> $14,500 </td>
                      <td> Development </td>
                      <td> Online Payment </td>
                      <td> 04 Dec 2019 </td>
                      <td>
                        <div class="badge badge-outline-success">Approved</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="assets/images/faces/face4.jpg" alt="image" />
                        <span class="pl-2">Sallie Reyes</span>
                      </td>
                      <td> 02312 </td>
                      <td> $14,500 </td>
                      <td> Website </td>
                      <td> Credit card </td>
                      <td> 04 Dec 2019 </td>
                      <td>
                        <div class="badge badge-outline-success">Approved</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="card corona-gradient-card">
    <div class="card-body py-0 px-0 px-sm-3">
      </div>
    </div><br>
@include('admin.footer')

