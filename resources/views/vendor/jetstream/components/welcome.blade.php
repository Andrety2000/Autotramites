<!DOCTYPE html>
<html>
   <head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    @section('title','Autotramites')
    <script src="https://cdn.tailwindcss.com"></script>
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

<body class="bg-white font-sans leading-normal tracking-normal">
        <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
            <span class="font-semibold text-lg text-primary mb-2 block">
                <h1>Bienvenidos a la pagina principal de servicios y mas servios</h1>
            </span>

            <h2 class="
                font-bold
                text-3xl
                sm:text-4xl
                md:text-[40px]
                text-dark
                mb-4
                ">
              ¿ Atención al cliente al N° de Contacto 3245638789 ?
            </h2>
        </div>


<div class="carousel relative shadow-2xl bg-white">
	<div class="carousel-inner relative overflow-hidden w-full">
	  <!--Slide 1-->
		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="carousel-item absolute opacity-0" style="height:100%">
			<div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">
                <img src="https://www.servitrans.co/images/banner_landing.png" alt="">
            </div>
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<!--Slide 2-->
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:100%;">
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

</html>

<!--servicios -->

<!-- ====== Services Section Start -->
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
                        <a href="{{'servicio'}}"  class=" border-gray-100">{{ __('SOLICITA SERVICIOS')}}</a>
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

           <a href="{{'traspaso'}}"><img src="images/traspaso.png" alt=""></a>
                    <h4 class="text-center font-semibold text-xl text-dark mb-3">
                        <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                            <a href="{{'traspaso'}}"  class=" border-gray-100">{{__('TRASPASO')}}</a>
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

           <a href="{{'traslado_cuenta'}}"><img src="images/traslado_cuenta.png" alt=""></a>
           <h4 class="text-center font-semibold text-xl text-dark mb-3">
            <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                <a href="{{'traslado_cuenta'}}"  class=" border-gray-100">{{__('TRASLADO DE CUENTA')}}</a>
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

           <a href="{{'peritaje'}}"><img src="images/peritaje.png" alt=""></a>
           <h4 class="text-center font-semibold text-xl text-dark mb-3">
            <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
            <a href="{{'peritaje'}}"  class=" border-gray-100">{{__('PERITAJE')}}</a>
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

           <a href="{{'matricula'}}"><img src="images/matricula.png" alt=""></a><br>
           <h4 class="text-center font-semibold text-xl text-dark mb-3">
            <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                   <a href="{{'matricula'}}"  class=" border-gray-100">{{__('MATRICULA')}}</a>
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


           <a href="{{'licencia'}}"><img src="images/licencia.png" alt=""></a><br>
           <h4 class="text-center font-semibold text-xl text-dark mb-3">
            <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
            <a href="{{'licencia'}}"  class=" border-gray-100">{{__('LICENCIA')}}</a>
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


           <a href="{{'impronta'}}"><img src="images/impronta.png" alt=""></a><br>
           <h4 class="text-center font-semibold text-xl text-dark mb-3">
            <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
            <a href="{{'impronta'}}"  class=" border-gray-100">{{__('IMPRONTA')}}</a>
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

           <a href="{{'comparendos'}}"><img src="images/comparendos.png" alt=""></a>
           <h4 class="text-center font-semibold text-xl text-dark mb-3">
            <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                <a href="{{'comparendos'}}"  class=" border-gray-100">{{__('COMPARENDOS')}}</a>
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


           <a href="{{'bateria'}}"><img src="images/bateria.png" alt=""></a>
           <h4 class="text-center font-semibold text-xl text-dark mb-3">
            <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                <a href="{{'bateria'}}"  class=" border-gray-100">{{__('BATERIA')}}</a>
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

           <a href="{{'asesoria_juridica'}}"><img src="images/asesoria_juridica.png" alt=""></a>
           <h4 class="text-center font-semibold text-xl text-dark mb-3">
            <x-jet-button class="px-4 py-2 rounded-md text-sm font-medium border-b-2 focus:outline-none focus:ring transition text-white bg-blue-500 border-blue-800 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300" type="submit">
                <a href="{{'asesoria_juridica'}}"  class=" border-gray-100">{{__('ASESORIA JURIDICA')}}</a>
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

