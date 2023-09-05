<?php
session_start();
include('../conexion.php');
if (isset($_SESSION['DBid']) == false) header("location:../index.php");
?>
<!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

      </ul>
      <ul class="navbar-nav">
      <?php include("../peticion_datos/solicitarDatos.php");
        $datoss = obtenerDatos1();?>
          <li>
            <a class="nav-link"  href="../dashboard/index.php"><?php  echo $datoss["nombre"];?> </a>
          </li>
          <li class="nav-link">|</li>
          <li>
            <a class="nav-link"  href="../dashboard/index.php"><?php  echo $datoss["rol"];?> </a>
          </li>
      </ul>
      <ul class="navbar-nav ml-auto">





          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">

                  <i class="fas fa-user"></i>

              </a>
              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                  <a href="../paginas/perfil.php" class="dropdown-item">
                      <i class="fas fa-wrench" style="color: #6c7a93;"></i> Perfil
                  </a>
                  <a href="../paginas/cerrar_sesion.php" class="dropdown-item">
                      <i class="fas fa-sign-out-alt" style="color: #6c7a93;"></i> Cerrar sesión
                  </a>


              </div>
          </li>

      </ul>
   



  </nav>