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
                <a class="btn btn-primary btn-rounded" target="_blank" href="https://viru-tec.com"><i class="ti-cloud pr-2"></i>Viru Tec</a>
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
                        <h5 class="brand-title">Diego Soto-ViruTec</h5>
                        <div class="brand-subtitle">Full-Stack | Developer</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portafolio</a>
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
                <h3 class="font-weight-light">Quien Soy ?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">¡Bienvenido a mi portafolio! </h5>
                <h6 class="mb-3 color-red btn-icon-text"><i class="ti-world btn-icon-prepend"></i>
                </h6>
                <p class="mt-20">Soy Diego Soto, un estudiante de Ingeniería de Sistemas en el noveno ciclo de mi carrera. A lo largo de mi trayectoria académica, he adquirido conocimientos sólidos en diversos campos de la ingeniería de sistemas y he trabajado en proyectos prácticos que demuestran mi habilidad para aplicar estos conocimientos en situaciones reales.

                    Durante mis estudios, he desarrollado una sólida base en áreas clave de la ingeniería de sistemas, como programación, análisis de sistemas, bases de datos, redes y seguridad informática. He trabajado en proyectos individuales y en equipo que me han permitido aplicar estos conocimientos de manera efectiva y resolver problemas complejos.

                    Además, he tenido la oportunidad de adquirir experiencia práctica a través de pasantías y proyectos extracurriculares. Por ejemplo, participé en un proyecto de desarrollo de software para una organización sin fines de lucro, donde colaboré con un equipo multidisciplinario para diseñar y desarrollar una aplicación web que mejoró la eficiencia de sus procesos internos.

                    En mi portafolio, encontrarás ejemplos de los proyectos en los que he trabajado, así como muestras de mi código y documentación técnica. Estos ejemplos ilustran mi capacidad para aplicar los conocimientos teóricos en la práctica y resolver problemas de manera eficiente y creativa.</p>

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

                <ul>
                    <li>
                        <p>Desarrollo de aplicaciones: Puedo crear aplicaciones de software personalizadas para diferentes plataformas,
                            como aplicaciones de escritorio, aplicaciones web o aplicaciones móviles.</p>
                    </li>
                    <br>
                    <li>
                        <p>Desarrollo de sitios web: Puedo diseñar y desarrollar sitios web estáticos o dinámicos,
                            utilizando lenguajes de programación como HTML, CSS, jQuery, PHP, Python, entre otros,
                            y frameworks como Laravel, Django.</p>
                    </li>
                    <br>
                    <li>
                        <p>Desarrollo de bases de datos: Puedo diseñar y administrar bases de datos eficientes
                            utilizando sistemas de gestión de bases de datos como MySQL, PostgreSQL, SQLServer.</p>
                    </li>
                    <br>
                    <li>
                        <p> Integración de sistemas: Puedo integrar diferentes sistemas o
                            componentes de software para que funcionen juntos de manera eficiente, utilizando APIs, servicios web.</p>
                    </li>
                    <br>
                    <li>
                        <p>Consultoría y asesoramiento técnico:
                            Puedo brindar orientación y asesoramiento sobre tecnologías y mejores prácticas de desarrollo.</p>
                    </li>
                    <hr>
                    <h6 class="alert-danger">Tareas Academicas</h6>
                    <br>
                    <li>
                        <p>Adminstración de Servidores RedHat & Centos </p>
                    </li>
                    <li>
                        <p>Desarrollo de software</p>
                    </li>
                    <li>
                        <p>Resolución de problemas de programación</p>
                    </li>
                    <li>
                        <p>Tutoría y enseñanza de programación</p>
                    </li>
                    <li>
                        <p>Revisión de código y debugging</p>
                    </li>
                    <li>
                        <p>Implementación de algoritmos </p>
                    </li>
                    <li>
                        <p>Integración de API y servicios web </p>
                    </li>

                </ul>
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
                            <a href="https://viru-tec.com/servicios-4" target="_blank">
                                <P>Software como Servicio: RegialuSit-PHP*Laravel*PayPal</P>
                            </a>
                            <hr>
                            <h6 class="title text-danger">2023 </h6>
                            <a href="https://viru-tec.com/servicios-4" target="_blank">
                                <P>Software como Servicio: Bodegest-PHP*Laravel*OpenPay</P>
                            </a>

                            <hr>
                            <h6 class="title text-danger">2023 </h6>
                            <a href="https://viru-tec.com/product/yape-payments/" target="_blank">
                                <P>App para Android: YapePayments-Kotlin</P>
                            </a>

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
                            <h6>jQuery</h6>
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
                            <h6>Kotlin</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-orange" role="progressbar" style="width: 30%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Flutter</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-orange" role="progressbar" style="width: 30%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <a href="#" data-filter=".android">
                        Desarrollos Android
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
                                                <img class="d-block w-100" src="{{asset('imagenes/certificados/redhat.png')}}" alt="">
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
                    <div class="col-md-6 col-lg-6 web">
                        <div class="portfolio-item">
                            <div class="card">
                                <div class="card-title">
                                    <h5 class="color-red portafolio-titulos">BodeGest-PHP(Laravel-OpenPay)</h5>
                                </div>
                                <div class="card-body">
                                    <p class="subtitle mb-3">Bodegest es una solución de gestión de ventas diseñada para
                                        bodegas que simplifica y optimiza los procesos de venta, control de inventario y facturación. Al utilizar este sistema, las bodegas pueden mejorar su eficiencia operativa, aumentar su productividad y ofrecer un mejor servicio a sus clientes.
                                        El sistema también permite generar informes y estadísticas de ventas, lo que brinda a los propietarios de la bodega una visión completa del desempeño del negocio. Estos informes pueden incluir datos sobre las ventas diarias, semanales o mensuales, los productos más vendidos, los clientes frecuentes y otros indicadores clave que ayudan a tomar
                                        decisiones informadas para mejorar la rentabilidad del negocio.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 android">
                        <div class="portfolio-item">
                            <div class="card">
                                <div class="card-title ">
                                    <h5 class="portafolio-titulos color-amarillo">YapePayments-Android(Kotlin)</h5>
                                </div>
                                <div class="card-body">
                                    <p class="subtitle mb-3 ">La aplicación "Yape Payments Listener" es una solución diseñada para integrar la plataforma de pagos móviles Yape con otros sistemas o servicios. Esta aplicación actúa como un intermediario entre Yape y el sistema receptor de las transacciones,
                                        permitiendo recibir y procesar los datos de las transacciones en tiempo real.

                                        La funcionalidad principal de la aplicación es escuchar las transacciones realizadas a través de Yape y enviar los detalles de
                                        esas transacciones a través de una URL específica en formato JSON. Estos datos JSON contienen información relevante sobre la transacción, como el monto, el identificador único, el nombre del comercio, la fecha y otros detalles pertinentes.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of portfolio section -->


    <section class="section bg-custom-gray" id="price">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Precios</span></h1>
            <div class="row align-items-center">


                <center>
                    <div class="col-md-6 col-lg-6">
                        <div class="price-card text-center price-card-requried mb-4">
                            <h3 class="price-card-title">Precios en Oferta Desde </h3>
                            <div class="price-card-cost">
                                <sup class="ti-money"></sup>
                                <span class="num">5</span>
                            </div>
                            <ul class="list">
                                <li class="list-item"> <span class="text-muted">por Trabajo</span></li>

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