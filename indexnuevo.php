<!DOCTYPE html>
<html>
	<title>Tax Help | Inicio</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/bootstrap.css" rel="stylesheet">
    <?php
    session_start();
    </head>

    <body>
        <div class="container d-flex flex-wrap" max-width="auto" heigth="auto" style="background-color:#E2EAE1">
            <a href="/indexnuevo.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"></svg>
                <span class="fs-4">Tienda BD</span>
            </a>
            <a href="/catalogo.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-5"> Zapatillas </span>
            </a>
            <a class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-5"> |Próximamente </span>
            </a>
            <a class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-5"> Marcas </span>
            </a>
            <a class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <span class="fs-5"> Ropa </span>
            </a>
            <a class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-5"> Accesorios </span>
            </a>
            <a class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-violet text-decoration-none">
                <span class="fs-5"> Sale </span>
            </a>
            <div class="text end">
                <a type="button" href="/Login/logincliente.php" class="btn btn-light text-light me-2" style="background-color:#899792">Login
                </a>
                <a type="button" href="/registrar/cliente.php" class="btn text-light me-2" style="background-color:#2C434F">Sign up
                </a>
            </div>
        </div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-responsive" width="100%" src="/img/kikindex.jpeg"><rect width=100% fill="#777"></rect></img>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1  style="color:yellow">Nuevos Lanzamientos</h1>
                            <p style="color:yellow">Porque sabemos que buscas lo mejor, revisa nuestro catálogo actualizado.</p>
                            <p><a class="btn btn-lg btn-primary" href="catalogo.php" style="background-color:#2C434F">Ver todo</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="home" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
            </symbol>
            <symbol id="speedometer2" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"></path>
            </symbol>
            <symbol id="calendar3" viewBox="0 0 16 16">
                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"></path>
                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
            </symbol>
            <symbol id="cpu-fill" viewBox="0 0 16 16">
                <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
                <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"></path>
            </symbol>
        </svg>
        <div class="container px-4 py-5" id="icon-grid">
            <h2 class="pb-2 border-bottom">Características a destacar</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Optimizado</h4>
                        <p>Usamos servidores robados de otros ramos para brindarte la mejor experiencia.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Abierto todo el día, todos los dias</h4>
                        <p>Así es, asi funcionan las paginas web.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Telecompra</h4>
                        <p>Insistimos, asi funcionan las páginas web.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"></use></svg>
                    <div>
                        <h4 class="fw-bold mb-0">Rápido</h4>
                        <p>Tenemos poco stock asi que tu experiencia de compra será muy veloz</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <footer class="py-1 my-1">
                <ul class="nav justify-content-center border-bottom pb-2 mb-2">
                    <li class="nav-item"><a href="indexnuevo.php" class="nav-link px-2 text-muted">Inicio</a></li>
                    <li class="navitem"><a href="/Login/logincourier.php" class="nav-link px-2 text-muted">Ingresar como courier</a></li>
                    <li class="navitem"><a href="/Login/loginempleado.php" class="nav-link px-2 text-muted">Ingresar como empleado</a></li>
                    <li class="navitem"><a href="/Login/loginproveedor.php" class="nav-link px-2 text-muted">Ingresar como proveedor</a></li>
                </ul>
                <ul class="nav justify-content-center border-bottom pb-2 mb-2">
                    <li class="nav-item"><a href="/registrar/courier.php" class="nav-link px-2 text-muted">Registrar como courier</a></li>
                    <li class="nav-item"><a href="/registrar/empleado.php" class="nav-link px-2 text-muted">Registrar como empleado</a></li>
                    <li class="nav-item"><a href="/registrar/proveedor.php" class="nav-link px-2 text-muted">Registrar como proveedor</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Acerca de Nosotros</a></li>
                </ul>
                <ul class="nav pb-2 mb-2 justify-content-center">
                    <p class="text-muted">© 2021-2 Enzzo Ayala y Marcelo Ull, Bases de Datos sección 2</p>
                </ul>
            </footer>
        </div>
        <div class="b-example-divider"></div>
    </body>
</html>
    <head>
    ?>
