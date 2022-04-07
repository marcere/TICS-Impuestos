
<!DOCTYPE html>
<html>
    <head>
        <title> Tax Help |Inicio </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial escale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php
        session_start();
        ?>
    </head>

    <body>
        <div class="container d-flex flex-wrap" max-width="auto" heigth="auto" style="background-color:#7F9FC9">
            <a href="indexnuevoo.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"></svg>
                <span class="fs-4">Tax Help App</span>
            </a>
            <a href=" back/howto.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-5"> Como funciona </span>
            </a>
            <a href="back/docs.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-5"> Documentación </span>
            </a>
            <div class="text end">
                <a type="button" href=" back/logs/login.php" class="btn btn-light text-light me-2" style="background-color:#899792">Ingresar
                </a>
                <a type="button" href=" back/logs/register.php" class="btn text-light me-2" style="background-color:#2C434F">Registrar
                </a>
            </div>
        </div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="col text-center">
                    <div class="opacity-50">
                        <img class="img-responsive" width="65%" src="back/img/fp_princi_impuestos_210420.png"><rect width=100% fill="#777"></rect></img>
                    </div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1  style="color:black">OPERACION RENTA 2022</h1>
                            <p style="color:black">Comienza con nosotros a revisar tu proceso de renta anual</p>
                            <p><a class="btn btn-lg btn-primary" href="back/form.php" style="background-color:#2C434F">Comenzar</a></p>
                            <p><a class="btn btn-lg btn-primary" href="back/logs/login.php" style="background-color:#2C434F">Ingresar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <footer class="py-1 my-1">
                <ul class="nav pb-2 mb-2 justify-content-center">
                    <p class="text-muted">© 2022-1 Enzzo Ayala y Marcelo Ull, Proyecto en TICS</p>
                </ul>
            </footer>
        </div>
        <div class="b-example-divider"></div>
    </body>
</html>

