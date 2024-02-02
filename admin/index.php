<?php 
   $resultado = $_GET['resultado'] ?? null;

   require '../includes/funciones.php';
   includeTemplate('header');
?>

<main class="contenedor seccion">
   <h1>Admin</h1>
   <?php 
      if ($resultado == 1): ?>
         <p class="alerta exito">Informacion registrada</p>
   <?php endif; ?>

   <a href="propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

   <table class="propiedades">
         <thead>
            <tr>
               <th>ID</th>
               <th>Titulo</th>
               <th>Imagen</th>
               <th>Precio</th>
               <th>Acciones</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>1</td>
               <td>Casa en la playa</td>
               <td>
                  <img src="../imagenes/0b6f0b9a1969c8b1a5eb77d70d3005bf.jpg" class="img-tabla">
               </td>
               <td>$1200000</td>
               <td>
                  <a href="" class="boton-rojo-block">Eliminar</a>
                  <a href="" class="boton-verde-block">Actualizar</a>
               </td>
            </tr>
         </tbody>
   </table>
</main>

<?php    
   includeTemplate('footer');
?>