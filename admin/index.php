<?php
   require '../includes/funciones.php';
   $auth = estaAutenticado(); 

   if (!$auth) {
      header("Location: ../index.php");
   }

   require '../includes/config/database.php';
   $db = connDb();

   $query = "SELECT * FROM propiedades";

   $resultadoProp = mysqli_query($db, $query);

   $resultado = $_GET['resultado'] ?? null;

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = $_POST['id'];
      $id = filter_var($id, FILTER_VALIDATE_INT);

      if ($id) {
         $query = "SELECT imagen from propiedades WHERE ID = $id";
         $resultado = mysqli_query($db, $query);
         $propiedad = mysqli_fetch_assoc($resultado);

         unlink("../imagenes/" . $propiedad['imagen']);

         $query = "DELETE FROM propiedades WHERE id = $id";

         $resultado = mysqli_query($db, $query);

         if ($resultado) {
            header('Location: index.php?resultado=3');
         }
      }      
   }   
   includeTemplate('header');
?>

<main class="contenedor seccion">
   <h1>Admin</h1>
   <?php if ($resultado == 1): ?>
      <p class="alerta exito">Informacion registrada</p>
   <?php elseif ($resultado == 2): ?>
      <p class="alerta exito">Informacion actualizada</p>
   <?php elseif ($resultado == 3): ?>
      <p class="alerta exito">Informacion eliminada</p>
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
            <?php while ($propiedad = mysqli_fetch_assoc($resultadoProp)): ?>                
               <tr>
                  <td><?php echo $propiedad['id'] ?></td>
                  <td><?php echo $propiedad['titulo'] ?></td>
                  <td>
                     <img src="../imagenes/<?php echo $propiedad['imagen'] ?>" class="img-tabla">
                  </td>
                  <td>$ <?php echo $propiedad['precio'] ?></td>
                  <td>
                     <form method="post" class="w-100">
                        <input type="hidden" name="id" id="id" value="<?php echo $propiedad['id'] ?>"> 
                        <input type="submit" class="boton-rojo-block" value="Eliminar">                        
                     </form>                     
                     <a href="propiedades/actualizar.php?idPropiedad=<?php echo $propiedad['id'] ?>" class="boton-verde-block">Actualizar</a>
                  </td>
               </tr>
            <?php endwhile; ?>
         </tbody>
   </table>
</main>

<?php
   mysqli_close($db);
   includeTemplate('footer');
?>