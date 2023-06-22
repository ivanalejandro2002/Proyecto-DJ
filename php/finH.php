</head>
<body class="grey darken-fondo2">

    <nav class="grey darken-4" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo"><img src="imgs/logo_FINAL.png"  id="logoP"></a>
      <ul class="right hide-on-med-and-down">
        <?php
        if(isset($_SESSION['TxtUsr'])){
          require 'php/Bienvenido.php';
        }
        ?>
        <li><a href="contratacion.php">Contratación</a></li>
        <li><a href="comprobante.php">Comprobante</a></li>
        <li><a href="admin.php">Admin</a></li>
        
      </ul>
      
      <ul id="nav-mobile" class="sidenav">
        <li><a href="contratacion.php">Contratación</a></li>
        <li><a href="comprobante.php">Comprobante</a></li>
        <li><a href="admin.php">Admin</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>