<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bienes raices</title>

   <link rel="stylesheet" href="/bienesraices/build/css/app.css">
</head>
<body>
   <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
      <div class="contenedor contenido-header">
         <div class="barra">
            <a href="index.php"><img src="/bienesraices/build/img/logo.svg" alt="Logo empresa"></a>

            <div class="mobile-menu">
               <img src="/bienesraices/build/img/barras.svg" alt="Icono menu responsive">
            </div>

            <div class="derecha">
               <img class="dark-mode-btn" src="/bienesraices/build/img/dark-mode.svg" alt="Modo oscuro">
               <nav class="navegacion">
                  <a href="nosotros.php">Nosotros</a>
                  <a href="anuncios.php">Anuncios</a>
                  <a href="blog.php">Blog</a>
                  <a href="contacto.php">Contacto</a>
               </nav>
            </div>

         </div>
         <?php if ($inicio) { ?>
               <h1>Venta de casas y departamentos exclusivos de lujo</h1>
         <?php } ?>      
      </div>
   </header>