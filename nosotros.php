<?php 
   require 'includes/funciones.php';
   
   includeTemplate('header');
?>


   <main class="contenedor seccion">
      <h1>Conoce sobre nostros</h1>

      <div class="contenido-nosotros">
         <div class="imagen">
            <picture>
               <source srcset="build/img/nosotros.webp" type="image/webp">
               <source srcset="build/img/nosotros.jpg" type="image/jpeg">

               <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen nosotros">
            </picture>
         </div>

         <div class="texto-nosotros">
            <blockquote>
               25 años de experiencia
            </blockquote>

            <p>
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia odio aut ducimus porro reprehenderit, 
               labore soluta itaque vero minima ab hic a quis quia id, accusantium facere iusto laudantium placeat 
               expedita eveniet? Veritatis quia est id quo impedit sapiente harum architecto maiores sit, temporibus 
               ratione facere hic praesentium magnam explicabo rerum nobis! Saepe aut iusto dignissimos vero repudiandae 
               tempore mollitia, magni itaque dolorum odio illum quidem praesentium. Veniam delectus sunt consequuntur 
               quos. Nostrum asperiores nihil, nulla, totam exercitationem aspernatur error laborum reprehenderit 
               corrupti aliquid delectus omnis eum doloremque doloribus libero esse perferendis fugit dolores minus 
               quasi maxime. Repellendus, tempore eos?
            </p>

            <p>
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia odio aut ducimus porro reprehenderit, 
               labore soluta itaque vero minima ab hic a quis quia id, accusantium facere iusto laudantium placeat 
               expedita eveniet? Veritatis quia est id quo impedit sapiente harum architecto maiores sit, temporibus 
               ratione facere hic praesentium magnam explicabo rerum nobis! Saepe aut iusto dignissimos vero repudiandae 
               tempore mollitia, magni itaque dolorum odio illum quidem praesentium. Veniam delectus sunt consequuntur 
            </p>
         </div>
      </div>
   </main>

   <section class="contenedor seccion">
      <h1>Mas sobre nosotros</h1>
      
      <div class="iconos-nosotros">
         <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem repudiandae eaque ipsa corrupti 
               ad minima rerum odit, doloribus excepturi delectus exercitationem sapiente dolores quasi illo temporibus!
               Totam error tenetur id.
            </p>
         </div>

         <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem repudiandae eaque ipsa corrupti 
               ad minima rerum odit, doloribus excepturi delectus exercitationem sapiente dolores quasi illo temporibus!
               Totam error tenetur id.
            </p>
         </div>

         <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem repudiandae eaque ipsa corrupti 
               ad minima rerum odit, doloribus excepturi delectus exercitationem sapiente dolores quasi illo temporibus!
               Totam error tenetur id.
            </p>
         </div>
      </div>
   </section>

   <?php includeTemplate('footer'); ?>