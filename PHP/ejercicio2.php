<!-- http://localhost/19-10/ejercicio_2.php -->
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../19-10/public/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,700;0,900;1,600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>INICIO</title>
    
    <?php 

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
      <a class='nav-link' href='../PHP/views/aprendiz.php'> APRENDIZ <span class='sr-only'>(current)</span></a>
    </li>

    <li class='nav-item active'>
      <a class='nav-link' href='../PHP/views/coordinador.php'> COORDINADOR <span class='sr-only'>(current)</span></a>
    </li>

      <li class='nav-item active'>
        <a class='nav-link' href='../PHP/views/novedad.php'> NOVEDAD <span class='sr-only'>(current)</span></a>
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
    <div class='row'>
    <div class='col-lg-4 col-md-12 mb-4 mb-lg-0'>
    <img
      src='https://talently.tech/blog/wp-content/uploads/2021/11/Frame-57.png'
      class='w-100 shadow-1-strong rounded mb-4'
      alt='Boat on Calm Water'
      />
      <img
      src='https://vidabytes.com/wp-content/uploads/2020/05/Lenguaje-C-2.jpg'
      class='w-100 shadow-1-strong rounded mb-4'
      alt='Boat on Calm Water'
      />
    <img
      src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtmeod28-cIxI3ADGHxkFu17EenJljmJtQ0iG3D0wNN7TZHrcxFimTqBjOqMe-7dPKbDY&usqp=CAU'
      class='w-100 shadow-1-strong rounded mb-4'
      alt='Wintry Mountain Landscape'
    />
  </div>
  <div class='col-lg-4 mb-4 mb-lg-0'>
    <img
      src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFK5bg2gLI9jV6MZzho0l5Icq9_dncqoH1e0ojb8qg0X7UQPxk39nIQCA4uJO7J7Wh5Ik&usqp=CAU'
      class='w-100 shadow-1-strong rounded mb-4'
      alt='Mountains in the Clouds'
    />
    <img
      src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE9b774ZOemPMyQLToVmgioc5aclpZNfKPIS_q4lLgIFmjo0_cAoFC3obegHIQFTQPMcQ&usqp=CAU'
      class='w-100 shadow-1-strong rounded mb-4'
      alt='Boat on Calm Water'
    />
  </div>
  <div class='col-lg-4 mb-4 mb-lg-0'>
    <img
      src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrugx76DIlyUEXhT_bZsZKP2YkuL9z6zx86xIYyHuw7oJ_X7jE_JOTBK3Eg8gpgGyBm5k&usqp=CAU'
      class='w-100 shadow-1-strong rounded mb-4'
      alt='Waves at Sea'
    />
    <img
      src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4uesT-QNydZkqceOFi4mvkeRvUaTdPUAm-upqj04RwIYqHUuCJGRODPpXMXiIs8U6X3g&usqp=CAU'
      class='w-100 shadow-1-strong rounded mb-4'
      alt='Yosemite National Park'
    />

    <img
      src='https://prod-discovery.edx-cdn.org/media/course/image/dbe03966-daa0-499f-9423-ba54c2bc01cc-0d36f286e188.small.jpg'
      class='w-100 shadow-1-strong rounded mb-4'
      alt='Yosemite National Park'
    />
  </div>
</div>
")
?>