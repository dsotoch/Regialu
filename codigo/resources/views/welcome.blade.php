<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('johndoe/public_html/assets/vendors/themify-icons/css/themify-icons.css')}}">
    <!-- Bootstrap + JohnDoe main styles -->
    <link rel="stylesheet" href="{{asset('johndoe/public_html/assets/css/johndoe.css')}}">
    <link rel="stylesheet" href="{{ asset('quality.css') }}">
    <link rel="stylesheet" href="{{ asset('portafolio.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="https://www.facebook.com/diego.sotochavarria.9"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://www.youtube.com/@diegodev18"><i class="ti-youtube" aria-hidden="true"></i></a></li>
            </ul>
            <div class="header-content">
                <h4 class="header-subtitle">Hola, Mi Nombre es</h4>
                <h1 class="header-title">Diego Soto</h1>
                <h6 class="header-mono">Full-Stack | Developer</h6>
                <button class="btn btn-primary btn-rounded"><i class="ti-cloud pr-2"></i>Quality Code Crafters</button>
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Resumen</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="{{asset('johndoe/public_html/assets/imgs/icon.jpeg')}}" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Diego Soto-QualityCodeCrafters</h5>
                        <div class="brand-subtitle">Full-Stack | Developer</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Quiénes somos?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">"Quality Code Crafters"</h5>
                <h6 class="mb-3 color-red btn-icon-text">Servicios de software en la nube <i class="ti-world btn-icon-prepend"></i>
                </h6>
                <p class="mt-20">Somos
                    una empresa dedicada a proporcionar soluciones de software de alta calidad
                    que se ejecutan en la nube. Nuestros servicios en la nube son escalables y
                    flexibles, lo que significa que podemos adaptarnos a las necesidades de su
                    negocio.
                    Nos esforzamos por mantener el costo bajo, pero no comprometemos la calidad
                    de nuestro trabajo.
                    Explora nuestro sitio web para conocer más sobre nuestros servicios en la
                    nube de software y cómo podemos ayudarte a llevar tu negocio al siguiente
                    nivel. Si tienes alguna pregunta, no dudes en ponerte en contacto con
                    nosotros. ¡Estamos aquí para ayudarte!</p>

            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Informacion Personal</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Nombres</span> : Diego Soto Chavarria</li>
                    <li><span>Pais</span> : Peru</li>
                    <li><span>Fecha de Cumpleaños</span> : 18/03/1999</li>
                    <li><span>Email</span> : dsoto6155@gmail.com</li>
                    <li><span>Telefono</span> : + (51) 916715991</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link text-dark" href="https://www.facebook.com/diego.sotochavarria.9"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-dark" href="https://www.youtube.com/@diegodev18"><i class="ti-youtube" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Servicios Personales</h3>
                <span class="line mb-5"></span>
                <img src="{{asset('imagenes/principal/banner.png')}}" alt="">
                <hr>
                <button class="btn bg-dark w-lg"> <a href="https://api.whatsapp.com/send?phone=916715991" class="btn btn-success"><i class="fab fa-whatsapp"></i> Contactar para Resolucion de Tarea o Proyecto</a>


            </div>
        </div>
    </div>

    <!--Resume Section-->
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">Mi</span> Resumen</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4>Experiencias</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2019</h6>
                            <p>Software en Equipo : CrediSoft-Java*PostgreSQL</p>
                            <hr>
                            <h6 class="title text-danger">2019</h6>
                            <P>Software Personalizado: MoniGest-Java*PHPmyAdmin</P>
                            <hr>
                            <h6 class="title text-danger">2020</h6>
                            <P>Software en Equipo: BodeGest-Java*SQLServer</P>

                            <hr>
                            <h6 class="title text-danger">2022</h6>
                            <P> Software como Servicio: RegialuSit-Python*Django*PayPal</P>

                            <hr>
                            <h6 class="title text-danger">2023 </h6>
                            <P>Software como Servicio: RegialuSit-PHP*Laravel*PayPal</P>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4>Educacion</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2018 - Presente</h6>
                            <P>Universidad Cesar Vallejo</P>
                            <P class="subtitle">Ingenieria de Sistemas.</P>
                            <hr>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Habilidades</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <h6>hTmL5 &amp; CSS3</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>JavaScript</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>PHP</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <h6>Laravel</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Java</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Python</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Django</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>MySQL</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>SQL</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-dark" role="progressbar" style="width:50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>PostGreSQL</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Redes y Comunicaciones</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Lenguajes</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <h6>English</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <h6>Spanish</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="row ">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">+500K</h1>
                            <p class="text-light mb-1">Horas trabajadas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">+100</h1>
                            <p class="text-light mb-1">Proyectos Terminados</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">+100</h1>
                            <p class="text-light mb-1">Clientes Felices</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">+2k</h1>
                            <p class="text-light mb-1">Café Bébidos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section bg-dark py-5">
        <div class="container text-center">
            <h2 class="text-light mb-5 font-weight-normal">Estoy disponible para FreeLance</h2>
            <button class="btn bg-primary w-lg"> <a href="https://api.whatsapp.com/send?phone=916715991" class="btn btn-success"><i class="fab fa-whatsapp"></i> Contactar por WhatsApp</a>
            </button>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Mi</span> Portafolio</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".cartas" class="active">
                        Cartas de Merito
                    </a>
                    <a href="#" data-filter=".certificados">
                        Certificados
                    </a>
                    <a href="#" data-filter=".desktop">
                        Desarrollos Desktop
                    </a>
                    <a href="#" data-filter=".web">
                        Desarrollos Web
                    </a>
                </div>
                <div class="portfolio-container">
                    <div class="col-md-12 col-lg-12 cartas">
                        <div class="portfolio-item">
                            <div class="card">
                                <div class="card-body">
                                    <div id="my-carousel" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
                                            <li data-target="#my-carousel" data-slide-to="1"></li>


                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{asset('imagenes/cartas/cr_page-0001.jpg')}}" alt="">
                                                <div class="carousel-caption d-none d-md-block">

                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{asset('imagenes/cartas/cs_page-0001.jpg')}}" alt="">
                                                <div class="carousel-caption d-none d-md-block">

                                                </div>
                                            </div>


                                        </div>
                                        <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Back</span>
                                        </a>
                                        <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>


                    <div class="col-md-12 col-lg-12 certificados">
                        <div class="portfolio-item">
                            <div class="card">
                                <div class="card-body">
                                    <div id="my-carousel2" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-target="#my-carousel2" data-slide-to="0" aria-current="location"></li>
                                            <li data-target="#my-carousel" data-slide-to="1"></li>
                                            <li data-target="#my-carousel" data-slide-to="2"></li>
                                            <li data-target="#my-carousel" data-slide-to="3"></li>
                                            <li data-target="#my-carousel" data-slide-to="4"></li>

                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{asset('imagenes/certificados/py_page-0001.jpg')}}" alt="">
                                                <div class="carousel-caption d-none d-md-block">

                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{asset('imagenes/certificados/ir_page-0001.jpg')}}" alt="">
                                                <div class="carousel-caption d-none d-md-block">

                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{asset('imagenes/certificados/ft_page-0001.jpg')}}" alt="">
                                                <div class="carousel-caption d-none d-md-block">

                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{asset('imagenes/certificados/sc_page-0001.jpg')}}" alt="">
                                                <div class="carousel-caption d-none d-md-block">

                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{asset('imagenes/certificados/sw_page-0001.jpg')}}" alt="">
                                                <div class="carousel-caption d-none d-md-block">

                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#my-carousel2" data-slide="prev" role="button">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Back</span>
                                        </a>
                                        <a class="carousel-control-next" href="#my-carousel2" data-slide="next" role="button">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4 desktop">
                        <div class="portfolio-item">
                            <div class="card">
                                <div class="card-title">
                                    <h5 class="color-green">MoniGest-(Java-PHPmyAdmin)</h5>
                                </div>
                                <div class="card-body">
                                    <p class="subtitle"> Sistema para librería desarrollado en Java y MySQL con XAMPP y phpMyAdmin, implementé una solución completa para la gestión de inventario y ventas de libros. Este sistema permite a los usuarios registrar libros, autores, clientes y proveedores, así como también llevar un seguimiento del stock actual y las entradas y salidas de los libros.

                                        El diseño del sistema se basa en una arquitectura de tres capas, donde la capa de presentación se encarga de la interacción con el usuario, la capa de negocio procesa la lógica de negocio y la capa de datos gestiona la persistencia de los datos en la base de datos MySQL a través de XAMPP y phpMyAdmin.

                                        Además, el sistema cuenta con herramientas para la generación de reportes y estadísticas sobre las ventas, lo que permite a los usuarios tomar decisiones informadas en cuanto a la gestión del inventario y las compras de nuevos libros.</P>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 desktop">
                        <div class="portfolio-item">
                            <div class="card">
                                <div class="card-title">
                                    <h5 class="color-green portafolio-titulos">CrediSoft-(Java-PostgreSQL)</h5>
                                </div>
                                <div class="card-body">
                                    <p class="subtitle">Es un sistema de préstamos bancarios desarrollado en Java y PostgreSQL. Permite a las instituciones financieras gestionar préstamos, incluyendo solicitudes, evaluación crediticia, cálculo de tasas de interés, generación de pagos y seguimiento de pagos. Java se utiliza para la lógica de negocio y PostgreSQL para el almacenamiento de datos. La combinación ofrece un sistema robusto y seguro.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 desktop">
                        <div class="portfolio-item">
                            <div class="card">
                                <div class="card-title">
                                    <h5 class="color-green portafolio-titulos">Bodegest(Java-SqlServer)</h5>
                                </div>
                                <div class="card-body">
                                    <p class="subtitle">Bodegest es un software completo y fácil de usar que brinda a los usuarios una experiencia de gestión de tiendas sin problemas. Con este sistema, los usuarios pueden llevar un seguimiento detallado del inventario, realizar ventas y facturación de manera eficiente, gestionar la información de los clientes y proveedores, generar informes y análisis, y administrar a los empleados de la tienda.

                                        En cuanto a la gestión del inventario, Bodegest permite registrar cada movimiento del inventario de manera individual, lo que incluye la entrada y salida de productos, la actualización de precios y la identificación de productos que necesitan ser reordenados. Además, el sistema ofrece informes de inventario en tiempo real, lo que ayuda a los usuarios a tomar decisiones informadas sobre la gestión del inventario.

                                        En cuanto a las ventas y facturación, Bodegest ofrece una interfaz intuitiva que facilita el proceso de venta de productos, generando facturas y recibos de venta, y registrando las transacciones de venta. Además, el sistema cuenta con un módulo de gestión de caja que ayuda a los usuarios a llevar un seguimiento de las operaciones de caja.

                                        En cuanto a la gestión de clientes, Bodegest permite a los usuarios gestionar la información de los clientes, lo que incluye datos personales, historial de compras y promociones especiales. Esto ayuda a los usuarios a conocer mejor a sus clientes y ofrecerles promociones personalizadas, lo que a su vez aumenta la fidelidad de los clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 web">
                        <div class="portfolio-item">
                            <div class="card">
                                <div class="card-title ">
                                    <h5 class="color-red portafolio-titulos">RegialuSit-Python(Django-PayPal)</h5>
                                </div>
                                <div class="card-body">
                                    <p class="subtitle mb-3 ">Desarrollado en Python con Django, jQuery, Bootstrap y HTML5, implementé una solución completa para la gestión de alumnos en la nube, orientada principalmente a docentes.

                                        Este sistema permite a los usuarios registrar estudiantes, asignarles clases y llevar un seguimiento del progreso académico de cada uno de ellos. Además, el sistema cuenta con herramientas para la gestión de tareas, exámenes, calificaciones y asistencia, lo que facilita la labor de los docentes y mejora la comunicación con los estudiantes.

                                        La aplicación también cuenta con integración de PayPal, lo que permite a los usuarios realizar pagos en línea para los servicios académicos ofrecidos a través de la plataforma.

                                        La aplicación utiliza una base de datos MySQL, administrada a través de phpMyAdmin y se ejecuta en un servidor local XAMPP. En resumen, Regialu Sit es una solución eficiente y completa para la gestión de alumnos en la nube, ofreciendo herramientas para la toma de decisiones informadas y la integración de pagos en línea para una experiencia más fluida y conveniente para los usuarios.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 web">
                        <div class="portfolio-item">
                            <div class="card">
                                <div class="card-title">
                                    <h5 class="color-red portafolio-titulos">RegialuSit-PHP(Laravel-PayPal)</h5>
                                </div>
                                <div class="card-body">
                                    <p class="subtitle mb-3">Desarrollado en PHP con Laravel, jQuery, Bootstrap y HTML5, implementé una solución completa para la gestión de alumnos en la nube, orientada principalmente a docentes.

                                        Este sistema permite a los usuarios registrar estudiantes, asignarles clases y llevar un seguimiento del progreso académico de cada uno de ellos. Además, el sistema cuenta con herramientas para la gestión de tareas, exámenes, calificaciones y asistencia, lo que facilita la labor de los docentes y mejora la comunicación con los estudiantes.

                                        La aplicación también cuenta con integración de PayPal, lo que permite a los usuarios realizar pagos en línea para los servicios académicos ofrecidos a través de la plataforma.

                                        La aplicación utiliza una base de datos MySQL, administrada a través de phpMyAdmin y se ejecuta en un servidor local XAMPP. En resumen, Regialu Sit es una solución eficiente y completa para la gestión de alumnos en la nube, ofreciendo herramientas para la toma de decisiones informadas y la integración de pagos en línea para una experiencia más fluida y conveniente para los usuarios.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of portfolio section -->

    <section class="section" id="blog">
        <section class="section" id="service">
            <div class="container">
                <h2 class="mb-5 pb-4"><span class="text-danger"></span> Servicios de Quality Code Crafters</h2>
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-header has-icon">
                                <i class="ti-vector text-danger" aria-hidden="true"></i>
                            </div>
                            <div class="card-body px-4 py-3">
                                <h5 class="mb-3 card-title text-dark">RegialuSit</h5>
                                <P class="subtitle">Sistema de Gestión de Alumnos Diseñado para
                                    facilitar
                                    la gestión de los Docentes en los
                                    procesos académicos y administrativos relacionados con los estudiantes en una institución educativa..</P>
                                <img id="regi-img" src="{{asset('imagenes/logo.png')}}" alt="">
                                <button class="btn btn-success btn-icon-text" id="btn-detalles-regialu" data-toggle="modal" data-target="#my-modal"><i class="ti-notepad btn-icon-prepend"></i> Ver Detalles</button>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>

    </section>
    <section class="section bg-custom-gray" id="price">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Precios</span> de Todos los Servicios</h1>
            <div class="row align-items-center">


                <center>
                    <div class="col-md-6 col-lg-6">
                        <div class="price-card text-center price-card-requried mb-4">
                            <h3 class="price-card-title">Precios en Oferta Desde </h3>
                            <div class="price-card-cost">
                                <sup class="ti-money"></sup>
                                <span class="num">0.26</span>
                            </div>
                            <ul class="list">
                                <li class="list-item"> <span class="text-muted">Diarios</span></li>

                            </ul>

                        </div>
                    </div>
                </center>

            </div>
        </div>
    </section>
    <div class="section contact" id="contact">
        <div id="map" class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Dejanos tu Opinion Acerca de Nuestros Servicios</h4>
                        <form method="POST" action="{{route('crear_comentario')}}" id="form-comentarios">
                            @csrf
                            <label for="nombres" class="form-label">Apellidos y Nombres</label>
                            <input class="form-control" type="text" autocomplete="name" name="nombres" id="nombres" onkeyup="this.value = this.value.toUpperCase();" required><br>
                            <label for="pais" class="form-label">Pais</label>
                            <input class="form-control" type="text" autocomplete="name" name="pais" id="pais" onkeyup="this.value = this.value.toUpperCase();" required><br>
                            <label for="comentario" class="form-label">Comentario</label>
                            <textarea class="form-control" autocomplete="on" name="comentario" id="comentario" cols="30" rows="10" required></textarea><br>

                            <center> <button type="submit" class="btn btn-warning">Enviar Comentario</button></center>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Comentarios Recientes</h4>
                        <div class="row">
                            @foreach($comentarios as $n)

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="d-flex align-items-center">
                                            <i class="ti-user"></i>
                                            <h5 class="ms-3 text-info">{{$n->nombres}}</h5>
                                        </span>
                                        <br>
                                        <span class="d-flex align-items-center"> <i class="ti-world"></i>
                                            <h6 class="ms-3 text-danger">{{$n->pais}}</h6>
                                        </span>
                                        <br>
                                        <span class="d-flex align-items-center"> <i class="ti-calendar"></i>
                                            <p class="ms-3">{{$n->created_at}}</p>
                                        </span>
                                        <hr>
                                        <p>{{$n->comentario}}</p>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">¿Necesitas ayuda con nuestro servicio?</h4>

                        <div class="card-body">
                            Estamos aquí para ayudarte. Nuestro
                            equipo de soporte está disponible para responder cualquier pregunta o
                            inquietud que puedas tener.

                            Puedes contactarnos a través de nuestro correo electrónico de soporte o
                            mediante WhatsApp.

                            En nuestro compromiso de brindarte el mejor servicio posible, estamos
                            disponibles para ti en cualquier momento. ¡No dudes en ponerte en contacto
                            con nosotros!



                        </div>



                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Ponerse en contacto</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10 ">
                                <h6 class="d-inline">WhatsApp : <br> <span class="text-muted">+ (51) 916715991</span></h6>

                                <a href="https://api.whatsapp.com/send?phone=916715991" class="btn btn-success"><i class="fab fa-whatsapp"></i> Contactar por WhatsApp</a>

                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Direccion :<br> <span class="text-muted">Peru-Trujillo-Viru.</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted">dsoto6155@gmail.com</span></h6>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=dsoto6155@gmail.com" class="btn btn-info"><i class="far fa-envelope"></i> Contactar por correo electrónico</a>

                            </div>
                        </div>
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-dark" href="https://www.facebook.com/diego.sotochavarria.9"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="https://www.youtube.com/@diegodev18"><i class="ti-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer py-3">
        <div class="container">
            <center>
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Diego Soto Chavarría <i class="far fa-heart text-danger"></i></span>

                <span class="text-muted text-center text-sm-right d-block d-sm-inline-block">© 2023. Todos los Derechos Reservados.</span>
                <ul class="social-icons ">
                    <li class="social-item"><a class="social-link text-light" href="https://www.facebook.com/diego.sotochavarria.9"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="https://www.youtube.com/@diegodev18"><i class="ti-youtube" aria-hidden="true"></i></a></li>
                </ul>
            </center>

            <br><br>
            <center>
                <div>
                    <center> <span class="text-muted">Metodos de Pago
                            Aceptados:</span><img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg" alt="PayPal" class="payment-logo">
                        <img src="https://www.mastercard.es/content/dam/mccom/global/logos/logo-mastercard-mobile.svg" alt="Mastercard" class="payment-logo">
                        <img src="https://blog.logomyway.com/wp-content/uploads/2022/02/visa-logo-2.jpg" alt="Visa" class="payment-logo">
                    </center>
                </div>
            </center>

        </div>
    </footer>
    <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Detalles de RegialuSit</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid" id="servicios">
                        <div class="dropdown-divider"></div>
                        <div class="row" id="contacto">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <a style="text-decoration: none;" href="{{ route('principal') }}" class="btn btn-dark" title="Click para ir a REGIALUSIT"> <img src="{{ asset('/imagenes/regi.png') }}" alt="" srcset="" id="regi"> </a>
                                <div class="dropdown-divider"></div>
                                <p id="regialu-des">Un Sistema de Gestión de Alumnos es una herramienta informática diseñada para
                                    facilitar
                                    la gestión de los
                                    procesos académicos y administrativos relacionados con los estudiantes en una institución educativa.
                                    REGIALU SIT (Sistema de Gestión de Alumnos) es un ejemplo de esta herramienta, que puede utilizarse
                                    en
                                    instituciones educativas de distintos niveles, desde escuelas primarias hasta Institutos.</p>

                                <a href="{{ route('principal') }}" class="btn btn-success" title="Click para ir a REGIALUSIT">
                                    <b id="regialu-des2" class="btn btn-success btn-icon-text" title="Click para ir a REGIALUSIT"><i class="ti-world btn-icon-prepend"></i> IR A REGIALU SIT V1.0
                                    </b>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p id="regialu-des2"> <a href="https://api.whatsapp.com/send?phone=916715991" class="btn btn-primary"><i class="fab fa-whatsapp"></i>Solicitar Usuario Demo Aqui. </a>

                                </p>
                                <div class="dropdown-divider"></div>
                                <hr>

                            </div>

                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" id="contacto">
                                <div class="card">

                                    <div class="card-body">
                                        <center>
                                            <h5>CAPTURAS DE PANTALLA</h5>
                                        </center>
                                        <div id="mi-carrusel" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('/imagenes/regialu/1.png') }}" class="d-block " alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('/imagenes/regialu/2.png') }}" class="d-block " alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('/imagenes/regialu/3.png') }}" class="d-block " alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('/imagenes/regialu/4.png') }}" class="d-block " alt="...">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('/imagenes/regialu/5.png') }}" class="d-block " alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('/imagenes/regialu/6.png') }}" class="d-block " alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('/imagenes/regialu/7.png') }}" class="d-block " alt="...">
                                            </div>
                                            <button style="background-color: red;opacity: 10%;" class="carousel-control-prev" type="button" data-bs-target="#mi-carrusel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span>Anterior</span>
                                            </button>
                                            <button style="background-color: red;opacity: 10%;" class="carousel-control-next" type="button" data-bs-target="#mi-carrusel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span>Siguiente</span>
                                            </button>
                                        </div>
                                        <div class="dropdown-divider">

                                        </div>
                                        <p id="regialu-des">Con Regialu Sit, puedes tener un control completo sobre las áreas, asistencias,
                                            notas, incidentes, instituciones, periodos, aulas y grupos.

                                            Con el módulo de gestión de áreas, puedes definir y gestionar las áreas de estudio y
                                            especialización de tus estudiantes . El módulo de asistencias te permite llevar un
                                            registro detallado de la asistencia de los estudiantes, permitiéndote identificar patrones de
                                            asistencia y ausentismo. El módulo de notas te permite registrar y mantener un seguimiento de
                                            las notas de los estudiantes y evaluar su rendimiento.
                                        </p>
                                        <p id="regialu-des"> El módulo de incidentes te permite registrar y realizar un seguimiento de los
                                            incidentes
                                            relacionados con los estudiantes, incluyendo la disciplina y el comportamiento. El módulo de
                                            instituciones te permite definir y gestionar las instituciones educativas, incluyendo
                                            información de contacto y detalles administrativos. El módulo de periodos te permite definir y
                                            gestionar los diferentes períodos académicos, incluyendo fechas de inicio y fin, así como
                                            horarios y calendarios. </p>
                                        <p id="regialu-des"> El módulo de aulas te permite definir y gestionar las diferentes aulas y
                                            salones de clases, así
                                            como asignarlas a los diferentes grupos y horarios. El módulo de grupos te permite definir y
                                            gestionar los diferentes grupos de estudiantes y asignarlos a las diferentes aulas y horarios.
                                        </p>

                                        <p id="regialu-des"> Con Regialu Sit, tendrás una herramienta completa para gestionar todos los
                                            aspectos del proceso
                                            educativo, lo que te permitirá ahorrar tiempo y recursos, así como mejorar la calidad de la
                                            educación que ofreces a tus estudiantes.</p>
                                        <p id="regialu-des">En general, REGIALU SIT es una herramienta valiosa para instituciones
                                            educativas
                                            que
                                            buscan mejorar
                                            la eficiencia y eficacia de sus procesos académicos y administrativos relacionados con los
                                            estudiantes.</p>
                                    </div>
                                </div>
                                <div class="video-container">
                                    <center> <iframe width="auto" height="auto" src="https://www.youtube.com/watch?v=16RSCK7Ucx4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- core  -->
    <script src="{{asset('johndoe/public_html/assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('johndoe/public_html/assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{asset('johndoe/public_html/assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- Isotope  -->
    <script src="{{asset('johndoe/public_html/assets/vendors/isotope/isotope.pkgd.js')}}"></script>



    <!-- JohnDoe js -->
    <script src="{{asset('johndoe/public_html/assets/js/johndoe.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('portafolio.js')}}"></script>



</body>

</html>