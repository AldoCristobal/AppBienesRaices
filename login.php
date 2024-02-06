<?php
require 'includes/config/database.php';
$db = connDb();

$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
   $password =  mysqli_real_escape_string($db, $_POST['password']);

   if (!$email) {
      $errores[] = "Email incorrecto";
   }

   if (!$password) {
      $errores[] = "Contraseña incorrecta";
   }

   if (empty($errores)) {
      $query = "SELECT * FROM usuarios WHERE email = '$email'";
      $result = mysqli_query($db, $query);      

      if ($result->num_rows) {
         $usuario = mysqli_fetch_assoc($result);
         $auth = password_verify($password, $usuario['password']);

         if ($auth) {
            // var_dump($auth);
            session_start();

            $_SESSION['usuario'] = $usuario['email'];
            $_SESSION['login'] = true;
            
            header("Location: admin/index.php");
         }else{
            $errores[] = "Contraseña incorrecta";
         }
      }else{
         $errores[] = "El usario no existe";
      }
   }

   // echo "<pre>";
   // var_dump($errores);
   // echo "</pre>";
}

require 'includes/funciones.php';
includeTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
   <h1>Iniciar sesion</h1>

   <?php foreach($errores as $e): ?>
      <div class="alerta error">
         <?php echo $e; ?>
      </div>
   <?php endforeach; ?>

   <form class="formulario" method="POST">
      <fieldset>
         <legend>Email y contraseña</legend>

         <label for="email">Email</label>
         <input type="email" placeholder="Correo" id="email" name="email">

         <label for="password">Contraseña</label>
         <input type="password" placeholder="***" id="password" name="password">

         <input type="submit" value="Ingresar" class="boton boton-verde">
      </fieldset>
   </form>
</main>

<?php
includeTemplate('footer');
?>