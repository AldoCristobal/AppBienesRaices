<?php 
   require 'includes/funciones.php';
   
   includeTemplate('header');
?>


   <main class="contenedor seccion">
      <h1>Contacto</h1>

      <picture>
         <source srcset="build/img/destacada3.webp" type="image/webp">
         <source srcset="build/img/destacada3.jpg" type="image/jpeg">

         <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen destacada">
      </picture>

      <h2>Llene el formulario de contacto</h2>

      <form class="formulario">
         <fieldset>
            <legend>Informacion personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Nombre" id="nombre">

            <label for="email">Email</label>
            <input type="email" placeholder="Correo" id="email">

            <label for="telefono">Telefono</label>
            <input type="tel" placeholder="Telefono" id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>
         </fieldset>

         <fieldset>
            <legend>Informacion sobre la propiedad</legend>

            <label for="opciones">Vende o compra</label>
            <select id="opciones">
               <option selected disabled>Selecciona un opcion</option>
               <option value="compra">Compra</option>
               <option value="vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o presupuesto</label>
            <input type="number" placeholder="Precio/Presupuesto" id="presupuesto">
         </fieldset>

         <fieldset>
            <legend>Contacto</legend>

            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
               <label for="contactar-telefono">Telefono</label>
               <input type="radio" name="contacto" value="telefono" id="contactar-telefono">

               <label for="contactar-correo">Correo</label>
               <input type="radio" name="contacto" value="correo" id="contactar-correo">
            </div>

            <p>Si eligio telefono eleiga la fecha para ser contactado</p>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">

            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00">
         </fieldset>

         <input type="submit" value="enviar" class="boton-verde">
      </form>
   </main>

   <?php includeTemplate('footer'); ?>