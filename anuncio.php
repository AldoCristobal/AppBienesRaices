<?php
   $id = $_GET['id'];
   $id = filter_var($id, FILTER_VALIDATE_INT);

   require 'includes/funciones.php';
   
   includeTemplate('header');

   require 'includes/config/database.php';
   $db = connDb();

   $query = "SELECT * FROM propiedades WHERE id = $id";
   $result = mysqli_query($db, $query);

   if (!$result->num_rows) {
      header("Location: index.php");
   }
   
   $propiedad = mysqli_fetch_assoc($result);
?>

   <main class="contenedor seccion contenido-centrado">
      <h1><?php echo $propiedad['titulo'] ?></h1>

      <picture>
         <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen'] ?>" alt="Imagen destacada">
      </picture>

      <div class="resumen-propiedad">
         <p class="precio">$<?php echo $propiedad['precio'] ?></p>

         <ul class="iconos-caracteristicas">
            <li>
               <img class="icono" src="build/img/icono_wc.svg" alt="Icono baño" loading="lazy">
               <p><?php echo $propiedad['wc'] ?></p>
            </li>
            <li>
               <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy">
               <p><?php echo $propiedad['estacionamiento'] ?></p>
            </li>
            <li>
               <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
               <p><?php echo $propiedad['habitaciones'] ?></p>
            </li>
         </ul>

         <p>
            <?php echo $propiedad['descripcion'] ?>
         </p>
      </div>
   </main>

   <?php
      mysqli_close($db); 
      includeTemplate('footer'); 
   ?>