<?php

    include("crear/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM productos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">

      <title>SANEY</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>

   <body class="main-layout">

      

      <header>

         <div class="header">
            <div class="container-fluid">
               <div class="row">
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                     <div class="full">
                        <div class="logo">
                           <a href="#"><h1 style="color: white; padding: 5px 150px;">Bienvenido</h1></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10" >
                     <nav class="navigation navbar navbar-expand-md navbar-dark " style="padding: 0 250px;">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Administrar</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Crear Productos</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Ver Productos</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="cerrar_sesion.php"><span class="yellow">Cerrar sesion</span></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>

      <body>
    <div class="container">
        <div class="row p-2">
            <div class="col-3">
            <form action="crear/insertar.php" method="POST">
            <h3 class="text-center">Registrar Un Producto</h3>
            <label>codigo</label>
                    <input type="number" class="form-control" name="codigo" placeholder="Codigo">
            <label>Nombre del Producto</label>    
                    <input type="text" class="form-control" name="nombre_pro" placeholder="Nombres">
            <label>descripcion</label>       
                    <input type="text" class="form-control"name="descripcion" placeholder="Descripcion del productollidos">
            <label>cantidad</label>
                    <input class='form-control' type="number" name="unidades" placeholder="Cantidad">

                    <input type="submit" class="btn btn-primary mt-3">
                </form>
            </div>
            <div class="col-9">
                Lista de Productos
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descricion</th>
                            <th>cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><?php echo $row['codigo']?></th>
                            <th><?php echo $row['nombre_pro']?></th>
                            <th><?php echo $row['descripcion']?></th>
                            <th><?php echo $row['unidades']?></th>
                            <th><a href="crear/update.php" class="btn btn-info">Editar</a></th>
                            <th><a href="crear/delete.php" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><?php echo $row['codigo']?></th>
                            <th><?php echo $row['nombre_pro']?></th>
                            <th><?php echo $row['descripcion']?></th>
                            <th><?php echo $row['unidades']?></th>
                            <th><a href="actualizar.php?id=<?php echo $row['codigo']?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['codigo']?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>