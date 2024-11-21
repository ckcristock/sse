<!DOCTYPE html>
<html>

<head>
    <script src='https://www.google.com/recaptcha/api.js'></script>

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

    <!-- para hacer el Captcha required -->
    <script>
        function validateForm() {
            var recaptcha = document.forms["myForm"]["g-recaptcha-response"].value;
            if (recaptcha == "") {
                swal("", 'Por favor, dale click al cuadro que confirma que no eres un Robot', "info");
                return false;
            }
        }
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HFXZGCVPVW');
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $("#scroll").fadeIn();
                } else {
                    $("#scroll").fadeOut();
                }
            });
            $("#scroll").click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });
    </script>

    <script>
        var a = 0;
        $(document).ready(function() {
            if (a == 0) {
                $(".counter-value").each(function() {
                    var $this = $(this),
                        countTo = $this.attr("data-count");
                    $({
                        countNum: $this.text(),
                    }).animate({
                            countNum: countTo,
                        },

                        {
                            duration: 3100,
                            easing: "swing",
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
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
            color: #01aceb !important;
            text-decoration: underline;
            font-size: 19px;
        }
    </style>

</head>

<body>
    <div id="header" class="header">
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="imgs/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="nav navbar-nav ">
                        <li class="nav-item active"></li>
                        <li class="nav-item active">
                            <a class="nav-link" id="hovercreado" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="nosotros.html">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: bold; color:#01aceb !important; text-decoration: underline; " href="servicios.html">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="nuestros-clientes.html">Nuestros Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="nuestros-aliados.html">Nuestros Aliados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="beneficios.html">Beneficios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="preguntasfrecuentes.html">Preguntas Frecuentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="experiencia.html">Experiencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="casos-exito.html">Casos de Exito</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="calculadora.html">Calculadora</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="contacto.html">Contacto</a>
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




    <div class="container" style="background-color: #f3f3f4; width: 100%; padding-bottom: 2px; margin-top: 109px; margin-bottom:1px;">
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



    <div id="service" class="hiw_section layout_padding" style="margin-top:1px important!;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3>NUESTROS PRINCIPALES SERVICIOS</h3>
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="row">
                <div class="col-md-8 service_blog">
                    <img class="margin_top_30 img-responsive" src="imgs/ps19.jpg" alt="#" />
                    <h3 class="blog_head" style="font-size:19px;">SOLUCIONES GRID TIE</h3>
                </div>
                <div class="col-md-4 service_blog">
                    <img class="margin_top_30 img-responsive" src="imgs/solarm.jpg" alt="#" />
                    <h3 class="blog_head" style="font-size:18px;">SOLUCIONES OFF GRID</h3>
                </div>
                <div class="col-md-4 service_blog">
                    <img class="margin_top_30 img-responsive" src="imgs/ps6.jpg" alt="#" />
                    <h3 class="blog_head">Parques Solares</h3>
                </div>
                <div class="col-md-4 service_blog">
                    <img class="margin_top_30 img-responsive" src="imgs/termica.gif" alt="#" />
                    <h3 class="blog_head">Soluciones Solares Térmicas</h3>
                </div>
                <div class="col-md-4 service_blog">
                    <img class="margin_top_30 img-responsive" src="imgs/movil2m.jpg" alt="#" />
                    <h3 class="blog_head">Movilidad Sostenible</h3>
                </div>
            </div>
        </div>
    </div>



    <div id="hiw" class="hiw_section layout_padding" style="background: #1a2428;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="white_font" style="margin-bottom: 34px;">Detalles de Nuestros Principales Servicios</h3>
                </div>
                <div class="col-md-5"></div>
            </div>

            <div class="row">
                <div class="col-md-4" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/ps20m.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">GRID TIE (CONECTADO A RED)</h5>
                            <p class="card-text" style="text-align: justify;">Soluciones tecnológicas enfocadas a sustituir en gran medida el consumo de energía eléctrica convencional suministrada por la red.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/solarm.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">OFF GRID (FUERA DE RED)</h5>
                            <p class="card-text" style="text-align: justify;">
                                Soluciones solares autónomas, que buscan llevar el suministro de energía eléctrica a Zonas No Interconectadas. Así como plantear escenarios donde el consumo de energía se netamente a partir de la generación solar fotovoltaica. Tanto para aplicaciones residenciales, proyectos de iluminación, bombeo solar entre otras.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/termica.gif" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">SOLUCIONES SOLAR TERMICA</h5>
                            <p class="card-text" style="text-align: justify;">
                                Soluciones consistentes en el aprovechamiento de la energía del sol para producir calor que puede ser usado para generar agua caliente de uso doméstico o climatización de piscinas, entre otros servicios.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hiw" class="hiw_section layout_padding" style="background: #1a2428; margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="white_font" style="margin-bottom: 34px;">Modelos de Negocio</h3>
                </div>
                <div class="col-md-5"></div>
            </div>

            <div class="row">
                <div class="col-md-4" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/verd52m.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">COMPRA ACTIVO (EPC)</h5>
                            <p class="card-text" style="text-align: justify; margin-bottom: 3px;">*Contrato tipo "llave en mano"</p>
                            <p class="card-text" style="text-align: justify; margin-bottom: 3px;">*Ofrecimiento del proyecto completo hasta la entrega.</p>
                            <p class="card-text" style="text-align: justify; margin-bottom: 3px;">*Mantenimiento del cliente.</p>
                            <p class="card-text" style="text-align: justify; margin-bottom: 3px;">*Precio por (US/kwp).</p>
                            <p class="card-text" style="text-align: justify;">*Beneficios de ley 1715.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/ps20m.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">CONTRATO VENTA DE ENERGIA (PPA)</h5>
                            <p class="card-text" style="text-align: justify; margin-bottom: 3px;">*Acuerdo de compra de energia entre 20 a 25 años.</p>
                            <p class="card-text" style="text-align: justify; margin-bottom: 3px;">*Se le consigue el inversionista y dueño de activo.</p>
                            <p class="card-text" style="text-align: justify; margin-bottom: 3px;">*La tarifa de la energia es acordada por debajo del costo de la energia actual pagada al operador de red.</p>
                            <p class="card-text" style="text-align: justify; margin-bottom: 3px;">*Mantenimiento es del inversionista.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/ps9m.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">LEASING DE ENERGIA</h5>
                            <p class="card-text" style="text-align: justify; margin-bottom: 3px;">Es una forma para financiar al cliente sin utilización de la banca, en donde la empresa de energía solar hace toda la inversión inicial y el mantenimiento durante la vigencia del leasing. Al cabo del mismo, la instalación fotovoltaica pasa a ser propiedad del cliente. "Beneficios ley 1715 si hay clausula de compra"</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hiw" class="hiw_section layout_padding" style="background: #1a2428; margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="white_font" style="margin-bottom: 34px;">PROCESO PARA EMPEZAR</h3>
                </div>
                <div class="col-md-5"></div>
            </div>

            <div class="row">
                <div class="col-md-3" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/diagnostico.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; font-size: 45px;">1</h5>
                            <p class="card-text" style="text-align: center;">DIAGNOSTICO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/disenoeingenieria.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; font-size: 45px;">2</h5>
                            <p class="card-text" style="text-align: center;">DISEÑO E INGENIERÍA</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/modelnegocio.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; font-size: 45px;">3</h5>
                            <p class="card-text" style="text-align: center;">MODELO DE NEGOCIO</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/puestaenmarcha.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; font-size: 45px;">4</h5>
                            <p class="card-text" style="text-align: center;">INSTALACIÓN</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="margin-top: 7px;"></div>

                <div class="col-md-3" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/instalacion.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; font-size: 45px;">5</h5>
                            <p class="card-text" style="text-align: center;">PUESTA EN MARCHA</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="margin-top: 7px;">
                    <div class="card">
                        <img src="imgs/operacionymantenimiento.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; font-size: 45px;">6</h5>
                            <p class="card-text" style="text-align: center;">OPERACIÓN Y MANTENIMIENTO</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="margin-top: 7px;"></div>
            </div>
        </div>
    </div>





    <div id="contact" class="hiw_section layout_padding" style="background: #eeefef;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 style="margin-top: 20px; font-size:40px;"><b>CONTÁCTANOS POR WHATSAPP (A TU DERECHA) Ó TAMBIEN POR AQUÍ:</b></h3>
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="contact-form">
                        <form name="myForm" action="scripts/correoservicios.html" method="post" onsubmit="return false;">
                            <input type="text" placeholder="Nombre" name="nombre" required />
                            <input type="email" placeholder="Correo" name="correo" required />
                            <input type="text" placeholder="Telefono de contacto" name="telefono" required />
                            <input type="text" placeholder="Asunto" name="asunto" required />
                            <textarea placeholder="Mensaje" name="mensaje" required></textarea>
                            <div class="g-recaptcha" data-sitekey="6LcOpRQpAAAAAEFhNlW9WqjycXIwZN74JSu4Yixl"></div>
                            <input type="submit" value="Enviar" />
                            
                        </form>
                    </div>
                </div>
                <div class="col-md-5 text_align_center">
                    <img class="img-responsive" src="imgs/ps22.jpg" alt="#" />
                </div>
            </div>
        </div>
    </div>

    <div class="subcribe">
        <div class="container"></div>
    </div>

    <footer>
        <div class="container">
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="contacto.html">Contacto</a></li>

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