<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>sse.green</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/fontawesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
       
		<link rel="shortcut icon" href="imgs/logopestaña.gif"> 
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-HFXZGCVPVW"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-HFXZGCVPVW');
		</script>

        <script type="text/javascript">
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $("#scroll").fadeIn();
                    } else {
                        $("#scroll").fadeOut();
                    }
                });
                $("#scroll").click(function () {
                    $("html, body").animate({ scrollTop: 0 }, 600);
                    return false;
                });
            });
        </script>

        <script>
            var a = 0;
            $(document).ready(function () {
                if (a == 0) {
                    $(".counter-value").each(function () {
                        var $this = $(this),
                            countTo = $this.attr("data-count");
                        $({
                            countNum: $this.text(),
                        }).animate(
                            {
                                countNum: countTo,
                            },

                            {
                                duration: 3100,
                                easing: "swing",
                                step: function () {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function () {
                                    $this.text(this.countNum);
                                    //alert('finished');
                                },
                            }
                        );
                    });
                    a = 1;
                }
            });
        </script>
		
		<style>
		#hovercreado:hover {
			font-weight: bold; 
			color:#01aceb !important; 
			text-decoration: underline; 
			font-size: 19px;
		}
		</style>
		
    </head>
    <body>
        <div id="header" class="header">
            <nav class="navbar navbar-expand-lg navbar-light text-capitalize" >
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="imgs/logo.png" alt="#" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="show-menu" >
                        <ul class="nav navbar-nav ">
                            <li class="nav-item active"></li>
                            <li class="nav-item active" >
                                <a class="nav-link" id="hovercreado" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hovercreado" href="nosotros.php">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hovercreado" href="servicios.php">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hovercreado" href="nuestros-clientes.php">Nuestros Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hovercreado" href="nuestros-aliados.php">Nuestros Aliados</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" id="hovercreado" href="beneficios.php">Beneficios</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" style="font-weight: bold; color:#01aceb !important; text-decoration: underline; " href="preguntasfrecuentes.php">Preguntas Frecuentes</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" id="hovercreado" href="experiencia.php">Experiencia</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" id="hovercreado" href="casos-exito.php">Casos de Exito</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" id="hovercreado" href="calculadora.php">Calculadora</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hovercreado" href="contacto.php">Contacto</a>
                            </li>

                            <li class="nav-item .search-container">
                                <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                                <form>
                                    <input type="search" placeholder="Search" />
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
			

        <div class="container" style="background-color: #f3f3f4; width: 100%; padding-bottom: 2px; margin-top: 109px;">
            <div class="row">
                <div class="col-md-2">
                    <p class="counter-value" data-count="3659" style="display: inline-block; font-weight: bold; font-size: 35px;"></p>
                    <p style="display: inline-block; margin: 4px;">kWp</p>
                </div>

                <div class="col-md-3">
                    <div id="counter">
                        <p class="counter-value" data-count="9017" style="display: inline-block; font-weight: bold; font-size: 35px;"></p>
                        <p style="display: inline-block; margin: 4px;">Paneles Instalados</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div id="counter">
                        <p class="counter-value" data-count="15" style="display: inline-block; font-weight: bold; font-size: 35px;"></p>
                        <p style="display: inline-block; margin: 4px;">Proyectos Implementados</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div id="counter">
                        <p class="counter-value" data-count="260" style="display: inline-block; font-weight: bold; font-size: 35px;"></p>
                        <p style="display: inline-block; margin: 4px;">Colectores Solares Instalados</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="container"><h1 style="text-align: center; margin-top: 23px;">PREGUNTAS FRECUENTES</h1></div>

        <div class="container" style="margin-top: 10px;">
            <div class="row">
                <div class="col-12 col-sm-6">
					<div ><h2 style="text-align: center; font-size:27px;">1. SOBRE LA ENERGÍA SOLAR FOTOVOLTAICA:</h2></div>
                    <div id="accordion">
                        <div class="card">
                            <div>
                                <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Funcionan los paneles solares fotovoltaicos durante la noche?
                                </button>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    No. Los paneles solares fotovoltaicos funcionan con el mismo combustible que las plantas, la radiación solar. Es por ello que funcionan sólo durante el día, incluso aunque esté nublado. Lo único que impide a un panel solar fotovoltaico producir electricidad, es la oscuridad.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <button class="btn btn-primary btn-block collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Qué cantidad de energía eléctrica puede generar un arreglo de paneles solares fotovoltaicos?
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Depende de la ubicación geográfica. En Colombia, una instalación de paneles solares de 2kW de potencia pico puede generar entre 2.500 y 3.000 kWh año de electricidad. Como referencia, una familia colombiana consume en promedio 1.700 kWh de electricidad al año.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <button class="btn btn-primary btn-block collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿En que se diferencia el uso de energía generada por los paneles solares fotovoltaicos y la energía convencional que llega a nuestros hogares?
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    La diferencia es ninguna. Todo es automático; así que al encender la televisión u oprimir el interruptor de la luz, no cambia. La electricidad producida por los paneles solares se inyecta en un equipo electrónico, llamado inversor, que la transforma y adecúa a las condiciones de la red eléctrica de distribución para su correcto uso.
                                </div>
                            </div>
                        </div>	
						<div class="card">
                            <div>
                                <button class="btn btn-primary btn-block collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    ¿Cuál es el número de paneles solares fotovoltaicos a instalar para suplir el consumo en un hogar promedio?
                                </button>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">
								El consumo medio de electricidad de una familia colombiana ronda los 1.700 kWh al año. Para producir esta energía y ser así eléctricamente independiente, se necesita (dependiendo de la ubicación de la casa, inclinación del tejado, sombras, etc.) una instalación con una potencia entre 1,5 y 2 kWp. Para ello se utilizan entre 20-25 m2 de área disponible. Si lo medimos en paneles, el número oscila entre 6 y 10 paneles a instalar.		
                                </div>
                            </div>
                        </div>	
						<div class="card">
                            <div>
                                <button class="btn btn-primary btn-block collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    ¿A que magnitud corresponden las unidades de vatio hora?
                                </button>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                <div class="card-body">
                                    El vatio-hora (Wh) es una unidad de energía expresada en forma de unidades de potencia por tiempo. Expresa la cantidad de energía capaz de producir y sustentar una cierta potencia durante un determinado tiempo. Así, un vatio-hora es la energía necesaria para mantener una potencia constante de un vatio (1 W) durante una hora. Más frecuentemente usados son sus múltiplos kilovatio-hora y megavatio-hora, de símbolos kWh y MWh respectivamente.
                                </div>
                            </div>
                        </div>
						<div class="card">
                            <div>
                                <button class="btn btn-primary btn-block collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    ¿Qué diferencia existe entre las unidades vatio-hora y vatio?
                                </button>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                                <div class="card-body">
                                    El vatio (o watt) mide la potencia de consumo instantánea. El vatio-hora mide la cantidad de trabajo realizada durante un tiempo determinado. Por ejemplo, si tenemos un artefacto de 100 W de potencia y lo tenemos encendido durante 1 hora, habrá consumido 100 Wh. Si ese mismo artefacto estuviere encendido durante 2 horas, habrá consumido 200 Wh. El consumo eléctrico facturado se mide en vatios-hora, no en vatios. La potencia eléctrica de los aparatos eléctricos se expresa en vatios cuando son de poca potencia; pero si son de mediana o gran potencia, se expresa en kilovatios (kW) que equivale a 1000 vatios. Kilovatio (kW) equivale a mil vatios. Megavatio (MW) equivale a un millón de vatios. Gigavatio (GW) mil millones de vatios, o un millón de kilovatios (kW). Tera vatio (TW) un millón de millones de vatios.
                                </div>
                            </div>
                        </div>						
                    </div>
                </div>
				
				
				
				<div class="col-12 col-sm-6" >
					<div><h2 style="text-align: center; font-size:26px; ">2. SOBRE LA TECNOLOGÍA SOLAR FOTOVOLTAICA Y SUS COMPONENTES:</h2></div>
                    <div id="accordion2"> 
						<div class="card">
                            <div>
                                <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                    ¿Cuál es el peso aproximado de un panel solar fotovoltaico?
                                </button>
                            </div>

                            <div id="collapse10" class="collapse show" aria-labelledby="heading10" data-parent="#accordion2">
                                <div class="card-body">
                                    22 kilogramos aproximadamente. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <button class="btn btn-primary btn-block collapsed" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    ¿Cuál es el área ocupada por un solo panel solar fotovoltaico?
                                </button>
                            </div>
                            <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion2">
                                <div class="card-body">
                                    Un solo panel solar fotovoltaico puede llegar a ocupar entre 2 y 2.5 metros cuadrados, incluyendo las áreas de transito y mantenimiento. El panel típicamente mide 1.95 metros de alto por 1 metro de ancho. Aunque sus dimensiones pueden variar según su potencia. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <button class="btn btn-primary btn-block collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                    ¿Con que frecuencia debo realizar mantenimiento?
                                </button>
                            </div>
                            <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion2">
                                <div class="card-body">
                                    Es recomendable realizar una inspección visual cada año para comprobar que los paneles se encuentran en buen estado. Por otro lado, si la instalación se encuentra en zona industrial o en algún lugar dónde no llueva con frecuencia, se recomienda limpiar los paneles con agua cada 4 meses para mejorar la capacidad de captación del panel. 
                                </div>
                            </div>
                        </div>
						<div class="card">
                            <div>
                                <button class="btn btn-primary btn-block collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                    ¿Hasta cuanto tiempo funcionará correctamente un sistema solar fotovoltaico?
                                </button>
                            </div>
                            <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion2">
                                <div class="card-body">
                                    Una instalación solar tiene una vida útil de 25 años, momento en el cual los paneles solares mantienen el 80% de la capacidad de producción que tenían el primer día. Por eso, aunque tradicionalmente desde la industria digamos que son 25 años, los paneles siguen produciendo a niveles aceptables por algunos años más.
                                </div>
                            </div>
                        </div>
						<div class="card">
                            <div>
                                <button class="btn btn-primary btn-block collapsed" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                    ¿Qué es un inversor solar?
                                </button>
                            </div>
                            <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordion2">
                                <div class="card-body">
                                    Es el equipo encargado de convertir la energía que entregan los paneles solares (Corriente continua – Voltaje DC) en energía útil para alimentar los electrodomésticos y equipos eléctricos (Corriente alterna – Voltaje AC).   
                                </div>
                            </div>
                        </div>
						<div class="card">
                            <div>
                                <button class="btn btn-primary btn-block collapsed" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                    ¿Qué es un controlador o regulador de carga?
                                </button>
                            </div>
                            <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordion2">
                                <div class="card-body">
                                   Es un dispositivo requerido únicamente cuando se utilizan baterías para almacenar la electricidad. Protege las baterías de sobrecargas y también bloquea el paso de corriente de las baterías en caso de descarga, asegurando que la corriente que se necesita sea la que el sistema entregue. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				
            </div>
        </div>
		
		
		

		<div class="subcribe" style="margin-top:15px !important;">
            <div class="container"></div>
        </div>
        <footer>
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer_blog_section">
                            <img src="imgs/logo.png" alt="#" />
                            <p style="margin-top: 5px;">Comprometidos con el Ambiente.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">Navegación</h4>
                            <ul>
                                <li><a href="index.php">Home</a></li>
								<li><a href="contacto.php">Contacto</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">Información de Contacto</h4>
                            <p><strong>Dirección Oficinas:</strong></p>
                            <p><img src="imgs/location.png" alt="#" /> Calle 93 No 12-14 ofc. 701 Edif. Tempo</p>
                            <p>Bogotá, Colombia</p>
                            <p><strong>Atención al Cliente:</strong></p>
                            <p><img src="imgs/phone_icon.png" alt="#" /> 317 3700 639</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">Síguenos</h4>
                            <ul>
                                <li><a href="https://www.facebook.com/Ssegreen-101933321835308" target="_blank">Facebook</a></li>
								<li><a href="https://www.instagram.com/sse.green/" target="_blank">Instagram</a></li>
								<li><a href="https://www.linkedin.com/in/ssegreen/" target="_blank">Linkedin</a></li>								
                                <li><a href="https://www.youtube.com/channel/UCArRTZxY2uXE8cUt8KhwlSg" target="_blank">YouTube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <p>Copyright 2019 Design by <a href="https://html.design">Free Html Templates</a></p>
            </div>
        </footer>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script></script>

        <div class="container">
            <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
            <a href="https://wa.me/573173700639?text=Me%20gustaría%20obtener%20información%20sobre%20la%20instalación%20de%20los%20paneles%20solares.%20Gracias" class="whatsapp" target="_blank">
                <i class="fa fa-whatsapp whatsapp-icon"></i>
            </a>
        </div>
    </body>
</html>
