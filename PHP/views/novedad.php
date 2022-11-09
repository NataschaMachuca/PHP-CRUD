<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,700;0,900;1,600&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>NOVEDAD</title>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</head>

<?php
    require_once("../models/classNovedad.php");
    $novedad = new Novedad();
    $datos = $novedad -> consultarNovedad();
print("
<nav class='navbar navbar-expand-lg navbar-light bg-light'>
    <a class='navbar-brand' href='#'></a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' 
          data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent'
          aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>

    <ul class='navbar-nav mr-auto'>
      
    
    <li class='nav-item active'>
      <a class='nav-link' href='../ejercicio2.php'> INICIO <span class='sr-only'>(current)</span></a>
    </li>

    <li class='nav-item active'>
      <a class='nav-link' href='../vieWS/aprendiz.php'> APRENDIZ <span class='sr-only'>(current)</span></a>
    </li>

    <li class='nav-item active'>
      <a class='nav-link' href='../views/coordinador.php'> COORDINADOR <span class='sr-only'>(current)</span></a>
    </li>

    <li class='nav-item active'>
      <a class='nav-link' href='../views/novedad.php'> NOVEDAD <span class='sr-only'>(current)</span></a>
    </li>

    </ul>

    <form class='form-inline my-2 my-lg-0'>
      <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
      <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
    </form>
  </div>
</nav>

    <br>
    <br>
    <br>
    <br>

    <form action='../controllers/controladorNovedad.php' method='POST'>
    <input type='submit' id='Add' name='Add' value='Add'></input>

    <table id='example' class='table table-striped' style='width:100%'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Descripcion</th>
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
        ");

        while ($data = $datos ->fetch(PDO::FETCH_ASSOC)){
          print "<tr>
              <td>" .$data['ID']."</td>
              <td>" .$data['TIPO']."</td>
              <td>" .$data['DESCRPCION']."</td>
              <td>
              <!--  <a href='../controllers/controladorNovedad.php?id=" . $data['ID']. "&value=Actualiza'>
              -->   <input type='button' id='botonBor' name='botonBor' value='Update' onclick='validar(". $data['ID'].")'/>
                </a>
              </td>
              <td>
             <!--   <a href='../controllers/controladorNovedad.php?id=" . $data['ID']. "&value=Borra'>
             -->    <input type='button' id='botonBor' name='botonBor' value='Delete' onclick='borrar(". $data["ID"].")'/>
              </td>
            </tr>

        </tbody>";

          
  };
?>

<script type="text/javascript">

function validar(id){
    var dato = confirm("Seguro que desea actualizar la novedad.? " + id);
  if(!dato){
    window.location.href="../views/novedad.php";
  }else{
    window.location.href="../controllers/controladorNovedad.php?id=" + id + "&value=Actualiza";
  }
}

  function borrar(id){
    var dato = confirm("Seguro que desea borrar la novedad.? " + id);
  if(!dato){
    window.location.href="../views/novedad.php";
  }else{
    window.location.href="../controllers/controladorNovedad.php?id=" + id + "&value=Borra";
  }
  }
</script>