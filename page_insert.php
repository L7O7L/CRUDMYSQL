<!DOCTYPE html>
<html lang="en" ng-app="MainApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Juegos</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
<body ng-controller="controladorPrincipal">

    <main class="d-flex flex-nowrap">

        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <i class="bi bi-film pe-none me-2 fs-3 me-2"></i>
              <span class="fs-4" style="font-weight: bold;">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="index.html" class="nav-link active" aria-current="page">
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
                <a href="games.php" class="nav-link link-dark">
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


        <div class="container mt-4 px-5">

            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3">Ingrese la siguiente información para agregar un Juego</h4>
                <br>
                <form action="insertar.php" method="POST">
                  <div class="form-group row g-3">
                    <div class="col-1sm-6">
                      <label class="form-label">Nombre</label>
                      <input type="text" name="nombre" class="form-control" required>
                    </div>
        
                    <div class="col-12">
                      <label class="form-label">URL Imagen</label>
                      <input type="text" class="form-control" name="img" placeholder="https://imagen.jpg" required>
                    </div>
        
                    <div class="col-12">
                      <label class="form-label">Género</label>
                      <input type="text" class="form-control" name="genero" placeholder="Acción / Aventura" required>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Preio (S/.)</label>
                      <input type="number" class="form-control" name="precio" placeholder="1246.." required>
                    </div>
        
                    <div class="col-12">
                      <label class="form-label">Descripción</label>
                      <textarea style="height: 230px; resize: none;" class="form-control" name="descripcion" placeholder="Después de los acontecimientos de la guerra surgio ...." required></textarea>
                    </div>
                  </div>
                  <hr class="my-4">
        
                  <button class="w-100 btn btn-primary btn-lg" type="submit">Agregar Juego</button>
                </form>
              </div> 

        </div>


    </main>

</body>
</html>