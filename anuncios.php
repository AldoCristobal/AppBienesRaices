<?php 
   require 'includes/funciones.php';
   
   includeTemplate('header');
?>

   <main class="contenedor seccion">
      <h2>Casas y departamentos en venta</h2>

      <?php 
         $limit = 10;
         include 'includes/templates/anuncios.php';
      ?>
   </main>

   <?php includeTemplate('footer'); ?>