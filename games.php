<?php 
    include("conexion.php");
    $con=conectar();

    $sql="CALL obtener_juegos()";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pagina Principal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        
    </head>
<body>

    <main class="d-flex flex-nowrap">

        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; position: fixed; height: 806px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <i class="bi bi-film pe-none me-2 fs-3 me-2"></i>
              <span class="fs-4" style="font-weight: bold;">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="primary_page.html" class="nav-link active" aria-current="page">
                  <i class="bi bi-house-door pe-none me-2"></i>
                  Inicio
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <i class="bi bi-speedometer2 pe-none me-2"></i>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <i class="bi bi-camera-reels pe-none me-2"></i>
                  Juegos
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <i class="bi bi-search pe-none me-2"></i>
                  Buscar
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <i class="bi bi-handbag pe-none me-2"></i>
                  Comprar
                </a>
              </li>
            </ul>
            <hr>
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <i class="bi bi-arrow-return-right pe-none me-2 fs-3 me-2"></i>
                <span class="fs-6">Opciones Adicionales</span>
            </a>
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a href="page_insert.php" class="nav-link link-dark">
                      <i class="bi bi-plus-circle pe-none me-2"></i>
                      Agregar Juego
                    </a>
                </li>
              </ul>
            <hr>
            <div class="dropdown">
              <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
        </div>

        <div style="width: 300px;"></div>

        <div>
            <div class="container">

                <div class="row">
                    <?php

                    while($row=mysqli_fetch_array($query)){

                    ?>
                    <div class="col-sm-6 mt-4">
                        <div class="card mb-3">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="<?php  echo $row['img']?>" class="img-fluid rounded-start" style="height: 100%; width: 100%;">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title"><?php  echo $row['nombre']?></h5>
                                  <p class="card-text"><?php  echo $row['descripcion']?></p>
                                  <p class="card-text"><small class="text-muted">Género: <?php  echo $row['genero']?></small></p>
                                  <p class="card-text"><small class="text-muted">Precio: S/.<?php  echo $row['precio']?></small></p>
                                </div>
                              </div>
                              <div class="btn-group mt-1">
                                <a href="actualizar.php?id=<?php echo $row['id'] ?>" style="text-decoration: none;"><button type="submit" class="btn btn-sm btn-secondary" style="width: 300px;">Editar</button></a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" style="text-decoration: none;"><button type="submit" class="btn btn-sm btn-secondary" style="width: 300px;">Eliminar</button></a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>

                </div>

            </div>
        </div>

    </main>
</body>
</html>