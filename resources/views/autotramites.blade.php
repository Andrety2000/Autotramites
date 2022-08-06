<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
            @section('title','Autotramites')
            <script src="https://cdn.tailwindcss.com"></script>
            <!-- Styles -->

            <style>
                body {
                    font-family: 'Nunito', sans-serif;

                }
            </style>

            <style>
                .carousel-open:checked + .carousel-item {
                    position: static;
                    opacity: 100;
                }
                .carousel-item {
                    -webkit-transition: opacity 0.6s ease-out;
                    transition: opacity 0.6s ease-out;
                }
                #carousel-1:checked ~ .control-1,
                #carousel-2:checked ~ .control-2,
                #carousel-3:checked ~ .control-3 {
                    display: block;
                }
                .carousel-indicators {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    position: absolute;
                    bottom: 2%;
                    left: 0;
                    right: 0;
                    text-align: center;
                    z-index: 10;
                }
                #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
                #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
                #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
                    color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
                }
            </style>
        </head>
    <body class="antialiased">

                {{--  Banner--}}

                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center  ">
                       <img src="images/logo.png" alt="Banner">
                    </div>

<body class="bg-white font-sans leading-normal tracking-normal">
    <div class="carousel relative shadow-2xl bg-white">
        <div class="carousel-inner relative overflow-hidden w-full">
          <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:100%">
                <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">
                    <img src="https://www.servitrans.co/images/banner_landing.png" alt="">
                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-8 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-8 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:100%">
                <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">
                    <img src="https://th.bing.com/th/id/R.476c00c5ea3962a44bf3582438674e81?rik=fi8x6pgjQ4J9jw&riu=http%3a%2f%2ffocustech.co.kr%2ftheme%2fs007%2fimg%2fmain_slide2.jpg&ehk=sPZTEMZVXunDALlLgusBox97cXHvZtKdwY5JjXzwqPo%3d&risl=&pid=ImgRaw&r=0" alt="">
                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:100%">
                <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">
                    <img src="https://www.gruppoceccato.it/data_files/pages/noleggio04-4k242a.jpg" alt="">
                </div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                </li>
            </ol>
        </div>
    </div>
          <!-- section -->
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
              <div class="flex flex-wrap w-full">
                <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
                  <div class="flex relative pb-12">
                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                      <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                      </svg>
                    </div>
                    <div class="flex-grow pl-4">
                      <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">PASO 1</h2>
                      <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
                    </div>
                  </div>
                  <div class="flex relative pb-12">
                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                      <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                      </svg>
                    </div>
                    <div class="flex-grow pl-4">
                      <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 2</h2>
                      <p class="leading-relaxed">Vice migas literally kitsch +1 pok pok. Truffaut hot chicken slow-carb health goth, vape typewriter.</p>
                    </div>
                  </div>
                  <div class="flex relative pb-12">
                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                      <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <circle cx="12" cy="5" r="3"></circle>
                        <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                      </svg>
                    </div>
                    <div class="flex-grow pl-4">
                      <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 3</h2>
                      <p class="leading-relaxed">Coloring book nar whal glossier master cleanse umami. Salvia +1 master cleanse blog taiyaki.</p>
                    </div>
                  </div>
                  <div class="flex relative pb-12">
                    <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                      <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                    </div>
                    <div class="flex-grow pl-4">
                      <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 4</h2>
                      <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
                    </div>
                  </div>
                  <div class="flex relative">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                      </svg>
                    </div>
                    <div class="flex-grow pl-4">
                      <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">FINISH</h2>
                      <p class="leading-relaxed">Pitchfork ugh tattooed scenester echo park gastropub whatever cold-pressed retro.</p>
                    </div>
                  </div>
                </div>
                <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12" src="https://th.bing.com/th/id/OIP.uzvebTyhA9QWE4GGVR9ekQHaIi?pid=ImgDet&rs=1" alt="step">
              </div>
            </div>
        </section>

        <!-- ====== Inicio de los Services Section Start -->
        <section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]">
            <div class="container">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
                            <span class="font-semibold text-lg text-primary mb-2 block">
                                NUESTROS SERVICIOS
                            </span>

                            <h2 class="
                      font-bold
                      text-3xl
                      sm:text-4xl
                      md:text-[40px]
                      text-dark
                      mb-4
                      ">
                              QUE OFRECEMOS ?
                            </h2>
                            <p class="text-base text-body-color">
                                There are many variations of passages of Lorem Ipsum available
                                but the majority have suffered alteration in some form.
                            </p>

                            <x-jet-button class="ml-4">
                                <a href="{{'register'}}"  class=" border-gray-100">{{ __('SOLICITA SERVICIOS')}}</a>
                            </x-jet-button>
                        </div>
                    </div>
                </div>


                <div class="flex flex-wrap -mx-4">
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="
                   p-10
                   md:px-7
                   xl:px-10
                   rounded-[20px]
                   bg-white
                   shadow-md
                   hover:shadow-lg
                   mb-8
                   ">

                   <a href="{{'register'}}"><img src="images/traspaso.png" alt=""></a>
                            <h4 class="text-center font-semibold text-xl text-dark mb-3">
                                <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                                    <a href="{{'register'}}"  class=" border-gray-100">{{__('TRASPASO')}}</a>
                                </x-jet-button>
                            </h4>
                            <p class="text-body-color">
                                We dejoy working with discerning clients, people for whom
                                qualuty, service, integrity & aesthetics.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="
                   p-10
                   md:px-7
                   xl:px-10
                   rounded-[20px]
                   bg-white
                   shadow-md
                   hover:shadow-lg
                   mb-8
                   ">

                   <a href="{{'register'}}"><img src="images/traslado_cuenta.png" alt=""></a>
                   <h4 class="text-center font-semibold text-xl text-dark mb-3">
                    <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                        <a href="{{'register'}}"  class=" border-gray-100">{{__('TRASLADO DE CUENTA')}}</a>
                    </x-jet-button>
                    </h4>
                            <p class="text-body-color">
                                We dejoy working with discerning clients, people for whom
                                qualuty, service, integrity & aesthetics.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="
                   p-10
                   md:px-7
                   xl:px-10
                   rounded-[20px]
                   bg-white
                   shadow-md
                   hover:shadow-lg
                   mb-8
                   ">

                   <a href="{{'register'}}"><img src="images/peritaje.png" alt=""></a>
                   <h4 class="text-center font-semibold text-xl text-dark mb-3">
                    <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                    <a href="{{'register'}}"  class=" border-gray-100">{{__('PERITAJE')}}</a>
                    </x-jet-button>
                            </h4>
                            <p class="text-body-color">
                                We dejoy working with discerning clients, people for whom
                                qualuty, service, integrity & aesthetics.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="
                   p-10
                   md:px-7
                   xl:px-10
                   rounded-[20px]
                   bg-white
                   shadow-md
                   hover:shadow-lg
                   mb-8
                   ">

                   <a href="{{'register'}}"><img src="images/matricula.png" alt=""></a><br>
                   <h4 class="text-center font-semibold text-xl text-dark mb-3">
                    <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                           <a href="{{'register'}}"  class=" border-gray-100">{{__('MATRICULA')}}</a>
                       </x-jet-button>
                   </h4>
                   <p class="text-body-color">
                       We dejoy working with discerning clients, people for whom
                       qualuty, service, integrity & aesthetics.
                   </p>
                    </div>
                    </div>
                   <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                       <div class="
                  p-10
                  md:px-7
                  xl:px-10
                  rounded-[20px]
                  bg-white
                  shadow-md
                  hover:shadow-lg
                  mb-8
                  ">


                   <a href="{{'register'}}"><img src="images/licencia.png" alt=""></a><br>
                   <h4 class="text-center font-semibold text-xl text-dark mb-3">
                    <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                    <a href="{{'register'}}"  class=" border-gray-100">{{__('LICENCIA')}}</a>
                    </x-jet-button>
                    </h4>
                            <p class="text-body-color">
                                We dejoy working with discerning clients, people for whom
                                qualuty, service, integrity & aesthetics.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="
                   p-10
                   md:px-7
                   xl:px-10
                   rounded-[20px]
                   bg-white
                   shadow-md
                   hover:shadow-lg
                   mb-8
                   ">


                   <a href="{{'register'}}"><img src="images/impronta.png" alt=""></a><br>
                   <h4 class="text-center font-semibold text-xl text-dark mb-3">
                    <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                    <a href="{{'register'}}"  class=" border-gray-100">{{__('IMPRONTA')}}</a>
                    </x-jet-button>
                    </h4>
                            <p class="text-body-color">
                                We dejoy working with discerning clients, people for whom
                                qualuty, service, integrity & aesthetics.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="
                   p-10
                   md:px-7
                   xl:px-10
                   rounded-[20px]
                   bg-white
                   shadow-md
                   hover:shadow-lg
                   mb-8
                   ">

                   <a href="{{'register'}}"><img src="images/comparendos.png" alt=""></a>
                   <h4 class="text-center font-semibold text-xl text-dark mb-3">
                    <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                        <a href="{{'register'}}"  class=" border-gray-100">{{__('COMPARENDOS')}}</a>
                    </x-jet-button>
                    </h4>
                            <p class="text-body-color">
                                We dejoy working with discerning clients, people for whom
                                qualuty, service, integrity & aesthetics.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="
                   p-10
                   md:px-7
                   xl:px-10
                   rounded-[20px]
                   bg-white
                   shadow-md
                   hover:shadow-lg
                   mb-8
                   ">


                   <a href="{{'register'}}"><img src="images/bateria.png" alt=""></a>
                   <h4 class="text-center font-semibold text-xl text-dark mb-3">
                    <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                        <a href="{{'register'}}"  class=" border-gray-100">{{__('BATERIA')}}</a>
                    </x-jet-button>
                    </h4>
                            <p class="text-body-color">
                                We dejoy working with discerning clients, people for whom
                                qualuty, service, integrity & aesthetics.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="
                   p-10
                   md:px-7
                   xl:px-10
                   rounded-[20px]
                   bg-white
                   shadow-md
                   hover:shadow-lg
                   mb-8
                   ">

                   <a href="{{'register'}}"><img src="images/asesoria_juridica.png" alt=""></a>
                   <h4 class="text-center font-semibold text-xl text-dark mb-3">
                    <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                        <a href="{{'register'}}"  class=" border-gray-100">{{__('ASESORIA JURIDICA')}}</a>
                    </x-jet-button>
                    </h4>
                            <p class="text-body-color">
                                We dejoy working with discerning clients, people for whom
                                qualuty, service, integrity & aesthetics.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin section -->

    {{--  Inicio Banner--}}
    <div class='flex items-center justify-center min-h-screen '>
      <div class="bg-slate-800">
          <div class="bg-slate-700 shadow-md  rounded rounded-xl m-16 border border-indigo-500/50 shadow-xl shadow-indigo-500/50">
              <div class="flex flex-col p-10  px-16 space-y-6 items-center text-center">
                  <h1 class="font-light md:text-6xl text-5xl text-white tracking-wide ">Evita Largas Colas y  <span id="spin" class="text-transparent font-normal bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-300 "></span> <br/> Saca tu Tramite</h1>
                  <p class="text-gray-400 md:text-2xl text-xl px-18"> Para Sacar un Tramite en linea o ser Atendido por un Asesor Debes Iniciar Session</p>
                  <button class="rounded-full bg-indigo-500 shadow-lg shadow-indigo-500/50 text-white text-lg py-4 px-6">
                  <a href="{{ route('servicios') }}" :active="request()->routeIs('servicios')" >{{ __('Nuestros Servicios')}}
                    </button>
              </div>
          </div>
      </div>
    </div>
    {{-- fin Banner--}}

</body>
</html>
</x-app-layout>







