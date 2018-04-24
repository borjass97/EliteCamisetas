    <!DOCTYPE html>
    <html>

    <head>
        <title>Élite Camisetas</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../IMAGENES/miniatura.png" rel="shortcut icon" type="image/x-icon" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <script src="../JAVASCRIPT/Elitecamisetas.js" type="text/javascript"></script>
        </head>

    <body>
        <?php
    $mysqli = new mysqli('localhost', 'root', '', 'elitecamisetas');
        $mysqli->set_charset("utf8");
    ?>
            <div id="cont">
                <nav class="navbar navbar-expand-xl navbar-dark bg-secondary">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">
                    <img src="../IMAGENES/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
                    </a>
                        <a class="navbar-brand" href="index.php">ÉliteCamisetas</a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                        <div class="navbar-collapse collapse" id="navbarsExample07">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="productos.php">Productos</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="nosotros.php">Sobre nosotros</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="inicio-sesion.php">Mi cuenta</a>
                                </li>
                            </ul>
                            <form class="form-inline mt-2 mt-lg-0" method="get" action="busqueda.php">
                                <input class="form-control mr-lg-2" type="text" name="buscar" placeholder="Buscar..." aria-label="Search">
                                <button class="btn btn-outline-light my-2 my-lg-0" type="submit">Buscar</button>
                            </form>
                        </div>
                    </div>
                </nav>
                <br>
