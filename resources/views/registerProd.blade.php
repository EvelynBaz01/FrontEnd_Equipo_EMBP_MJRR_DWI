<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Pizzas Rossely</title>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Project-3</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/maindash.css">
    <link rel="stylesheet" type="text/css" href="css/tablas.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <header class="app-header">
        <a class="app-header__logo" href="dashboard.html">Pizzas Rossely</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Buscar">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="login.html"><i class="fa fa-sign-out fa-lg"></i>Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <img class="app-sidebar__user-avatar" src="images/Pizza.png">
            <div>
                <p class="app-sidebar__user-name">Evelyn Baz Pérez</p>
                <p class="app-sidebar__user-designation">Administrador</p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-id-card-o"></i><span class="app-menu__label">Inicio</span></a></li>
            <li><a class="app-menu__item" href="users.html"><i class="app-menu__icon icon fa fa-users"></i><span class="app-menu__label">Usuarios</span></a></li>
            <li class="treeview"><a class="app-menu__item active" href="" data-toggle="treeview"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Productos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a class="treeview-item" href="product.html"><i class="icon fa fa-circle-o"></i> Lista de productos</a></li>
                <li><a class="treeview-item" href="registerProd.html"><i class="icon fa fa-circle-o"></i> Registrar productos</a></li>
              </ul>
            </li>
        </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div >
          <h1>NUEVO REGISTRO DE PRODUCTOS</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="img">Imagen</label>
                      <input class="form-control" type="file" required="obligatorio">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="tamanio">Tamaño</label>
                      <select class="form-control" id="exampleSelect1" required="obligatorio">
                        <option>Familiar</option>
                        <option>Grande</option>
                        <option>Mediana</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="cantidad">No.Rebanadas</label>
                      <select class="form-control" id="exampleSelect1" required="obligatorio">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="longitud">Longitud en cm</label>
                      <input type="text" class="form-control" name="introducir_nombre" id="nombre" required="obligatorio" minlength="3" maxlength="40">
                    </div>
                  </div>
              </form>
            </div> 
            <div class="tile-body">
              <form class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="nombrepizza">Nombre de la pizza</label>
                      <input type="text" class="form-control" name="introducir_nombre" id="nombre" required="obligatorio" minlength="3" maxlength="40" >
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="sabores">Sabores</label>
                    <div class="form-group">
                      <input type="text" class="form-control" name="introducir_nombre" id="nombre" required="obligatorio" minlength="3" maxlength="40">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="cantidad">Cantidad de pizzas</label>
                      <select class="form-control" id="exampleSelect1" required="obligatorio">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="precio">Precio por las pizzas</label>
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                        <input class="form-control" id="exampleInputAmount" type="text" placeholder="Precio" required="obligatorio">
                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <a type="submit" href="product.html" class="btn btn-primaryV rounded submit py-3 px-4">
                        Guardar
                      </a>
                      <a type="submit" href="product.html" class="btn btn-primaryG rounded submit py-3 px-4">
                        Cancelar
                      </a>
                    </div>
                  </div>
              </form>
            </div> 
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="jsdash/jquery-3.2.1.min.js"></script>
    <script src="jsdash/popper.min.js"></script>
    <script src="jsdash/bootstrap.min.js"></script>
    <script src="jsdash/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="jsdash/plugins/pace.min.js"></script>
    
  </body>
</html>