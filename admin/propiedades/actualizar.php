<?php
   require '../../includes/funciones.php';
   $auth = estaAutenticado();

   if (!$auth) {
      header("Location: ../../index.php");
   }

   $id = $_GET['idPropiedad'];
   $id = filter_var($id, FILTER_VALIDATE_INT);

   if (!$id) {
      header('Location: ../index.php');
   }

   require '../../includes/config/database.php';
   $db = connDb();

   $consulta = "SELECT * FROM propiedades WHERE id = $id";
   $resultado = mysqli_query($db, $consulta);
   $propiedad = mysqli_fetch_assoc($resultado);

   $query = "SELECT * FROM vendedores";
   $result= mysqli_query($db, $query);


   $error = [];

   $titulo = $propiedad['titulo'];
   $precio = $propiedad['precio'];
   $descripcion = $propiedad['descripcion'];
   $habitaciones = $propiedad['habitaciones'];
   $wc = $propiedad['wc'];
   $estacionamiento = $propiedad['estacionamiento'];
   $vendedor = $propiedad['vendedores_id'];
   $imagenPropiedad = $propiedad['imagen'];

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
      $precio = mysqli_real_escape_string($db, $_POST['precio']);
      $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
      $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
      $wc = mysqli_real_escape_string($db, $_POST['wc']);
      $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
      $vendedor = mysqli_real_escape_string($db, isset($_POST['vendedor']));
      //$img = mysqli_real_escape_string($db, $_POST['imagen']);
      $fecha = date('Y/m/d');


      $img = $_FILES['imagen'];

      if (!$titulo ) {
         $error[] = "El titulo es obligatorio";
      }

      if (!$precio ) {
         $error[] = "Precio obligatorio";
      }

      if (!$descripcion ) {
         $error[] = "Descripcion es obligatorio";
      }

      if (!$habitaciones ) {
         $error[] = "Habitaciones es obligatorio";
      }

      if (!$wc ) {
         $error[] = "Baños es obligatorio";
      }

      if (!$estacionamiento ) {
         $error[] = "Estacionamiento es obligatorio";
      }

      if (!$vendedor ) {
         $error[] = "Vendedor es obligatorio";
      }

      $medida = 1000 *1000;

      if ($img['size'] > $medida) {
         $error[] = "La imagen supera el tamaño permitido";
      }

      if (empty($error)) {
         /*SUBIR ARCHIVOS*/
         $carpetaImg = '../../imagenes/';
         if (!is_dir($carpetaImg)) {
            mkdir($carpetaImg);
         }

         $nombreImg = '';
         
         if ($img['name']) {
            unlink($carpetaImg . $propiedad['imagen']);

            $nombreImg = md5(uniqid(rand(), true)) . ".jpg";

               move_uploaded_file($img['tmp_name'], $carpetaImg . "/" . $nombreImg);
         }else{
            $nombreImg = $propiedad['imagen'];
         }

         $query = "UPDATE propiedades SET titulo = '$titulo', precio = '$precio', imagen = '$nombreImg', descripcion = '$descripcion', habitaciones = $habitaciones, 
                                          wc = $wc, estacionamiento = $estacionamiento, vendedores_id = $vendedor WHERE id = $id";

         $result = mysqli_query($db, $query);

         if ($result) {
            header('Location: ../index.php?resultado=2');
         }
      }
      
   }      
   includeTemplate('header');
?>

<main class="contenedor seccion">
   <h1>Actualizar informacion</h1>

   <a href="../index.php" class="boton boton-verde">Volver</a>

   <?php foreach ($error as $e): ?>
      <div class="alerta error">
         <?php echo $e; ?>
      </div>
   <?php endforeach; ?>

   <form method="POST" class="formulario" enctype="multipart/form-data">
      <fieldset>
         <legend>Informacion general</legend>

         <label for="titulo">Titulo</label>
         <input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad" value="<?php echo $titulo ?>">

         <label for="precio">Precio</label>
         <input type="number" id="precio" name="precio" placeholder="Precio propiedad" value="<?php echo $precio ?>">

         <label for="imagen">Imagen</label>
         <input type="file" accept="image/jpeg, image/png" id="imagen" name="imagen">
         <img src="../../imagenes/<?php echo $imagenPropiedad ?>" class="imagen-small">

         <label for="descripcion">Descripcion</label>
         <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
      </fieldset>

      <fieldset>
         <legend>Informacion de la propiedad</legend>

         <label for="habitaciones">Habitaciones</label>
         <input type="number" id="habitaciones" name="habitaciones" placeholder="Ejemplo: 3" min="1" max="9" value="<?php echo $habitaciones ?>">

         <label for="wc">Baños</label>
         <input type="number" id="wc" name="wc" placeholder="Ejemplo: 3" min="1" max="9" value="<?php echo $wc ?>">

         <label for="estacionamiento">Estacionamiento</label>
         <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ejemplo: 3" min="1" max="9" value="<?php echo $estacionamiento ?>">
      </fieldset>

      <fieldset>
         <legend>Vendedor</legend>

         <label for="vendedor">Nombre</label>
         <select name="vendedor" id="vendedor">
            <option selected disabled>Selecciona una opcion</option>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
               <option <?php echo $vendedor === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] . " " . $row['apellido'] ?></option>
            <?php endwhile ?>
         </select>
      </fieldset>

      <input type="submit" value="Guardar" class="boton boton-verde">
   </form>
</main>

<?php    
   includeTemplate('footer');
?>