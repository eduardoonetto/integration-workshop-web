<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" href="./views/templates/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    
<div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="#">IPCHILE</a></div></div>
       <li><a href="#home">Home</a></li>
       <?php if($Role_Name == 'ADMIN') { ?>
        
        <li><a href="#about">Vehiculos</a></li>
          <li><a href="#team">Clientes</a></li>
        <li class="dropdown">
          <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Gestionar<span class="caret"></span></a>
          <ul class="dropdown-menu animated fadeInLeft" role="menu">
            <div class="dropdown-header">Administracion</div>
            <li><a href="#pictures">Usuarios</a></li>
            <li><a href="#videos">Post Venta</a></li>
            <li><a href="#books">Reportes</a></li>
          </ul>
        </li>
        <?php } ?>
        <li><a href="#events">Orden de Trabajo</a></li>
        <li><a href="#books">Productos</a></li>
        <li><a href="#about"> Stock</a></li>
        <li><a href="auth"> Cerrar Sesion</a></li>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="navbar-info">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                      <h1><?php echo $User_Name . ' - ' . $Role_Name ?> </h1>
                      <p>
                          Hola Mundo
                      </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    
    <!-- /#wrapper -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
    <script src="./views/templates/js/sidebar.js"></script>  
  </body>
</html>

