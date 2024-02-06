<?php    
   if (!isset($_SESSION)) {
      session_start();
   }

   $auth = $_SESSION['login'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bienes raices</title>

   <link rel="stylesheet" href="/AppBienesRaices/build/css/app.css">
</head>
<body>
   <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
      <div class="contenedor contenido-header">
         <div class="barra">
            <a href="index.php"><img src="/AppBienesRaices/build/img/logo.svg" alt="Logo empresa"></a>

            <div class="mobile-menu">
               <img src="/AppBienesRaices/build/img/barras.svg" alt="Icono menu responsive">
            </div>

            <div class="derecha">
               <img class="dark-mode-btn" src="/AppBienesRaices/build/img/dark-mode.svg" alt="Modo oscuro">
               <nav class="navegacion">
                  <a href="/AppBienesRaices/nosotros.php">Nosotros</a>
                  <a href="/AppBienesRaices/anuncios.php">Anuncios</a>
                  <a href="/AppBienesRaices/blog.php">Blog</a>
                  <a href="/AppBienesRaices/contacto.php">Contacto</a>
                  <?php if ($auth): ?>
                     <a href="cerrar-sesion.php">Cerrar sesion</a>
                  <?php endif; ?>
               </nav>
            </div>

         </div>
         <?php if ($inicio) { ?>
               <h1>Venta de casas y departamentos exclusivos de lujo</h1>
         <?php } ?>      
      </div>
   </header>