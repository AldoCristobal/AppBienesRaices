<?php 
   require 'includes/funciones.php';
   
   includeTemplate('header');
?>


   <main class="contenedor seccion contenido-centrado">
      <h1>Nuestro blog</h1>

      <article class="entrada-blog">
         <div class="imagen">
            <picture>
               <source srcset="build/img/blog1.webp" type="image/webp">
               <source srcset="build/img/blog1.jpg" type="image/jpeg">
               <img src="build/img/blog1.jpg" alt="Imagen del blog" loading="lazy">
            </picture>
         </div>

         <div class="texto-entrada">
            <a href="entrada.html"><h4>Terraza en el techo de tu casa</h4></a>
            <p>Escrito el: <span>20/10/2024</span> Por: <span>Admin</span></p>

            <p>
               Consejos para construir una terraza en el techo de tu Casa
               con los mejores materiales y ahorrando dinero.
            </p>
         </div>
      </article>

      <article class="entrada-blog">
         <div class="imagen">
            <picture>
               <source srcset="build/img/blog2.webp" type="image/webp">
               <source srcset="build/img/blog2.jpg" type="image/jpeg">
               <img src="build/img/blog2.jpg" alt="Imagen del blog" loading="lazy">
            </picture>
         </div>

         <div class="texto-entrada">
            <a href="entrada.html"><h4>Guia para decoracion de tu hogar</h4></a>
            <p>Escrito el: <span>20/10/2024</span> Por: <span>Admin</span></p>

            <p>
               Consejos para construir una terraza en el techo de tu Casa
               con los mejores materiales y ahorrando dinero.
            </p>
         </div>
      </article>

      <article class="entrada-blog">
         <div class="imagen">
            <picture>
               <source srcset="build/img/blog3.webp" type="image/webp">
               <source srcset="build/img/blog3.jpg" type="image/jpeg">
               <img src="build/img/blog3.jpg" alt="Imagen del blog" loading="lazy">
            </picture>
         </div>

         <div class="texto-entrada">
            <a href="entrada.html"><h4>Terraza en el techo de tu casa</h4></a>
            <p>Escrito el: <span>20/10/2024</span> Por: <span>Admin</span></p>

            <p>
               Consejos para construir una terraza en el techo de tu Casa
               con los mejores materiales y ahorrando dinero.
            </p>
         </div>
      </article>

      <article class="entrada-blog">
         <div class="imagen">
            <picture>
               <source srcset="build/img/blog4.webp" type="image/webp">
               <source srcset="build/img/blog4.jpg" type="image/jpeg">
               <img src="build/img/blog4.jpg" alt="Imagen del blog" loading="lazy">
            </picture>
         </div>

         <div class="texto-entrada">
            <a href="entrada.html"><h4>Guia para decoracion de tu hogar</h4></a>
            <p>Escrito el: <span>20/10/2024</span> Por: <span>Admin</span></p>

            <p>
               Consejos para construir una terraza en el techo de tu Casa
               con los mejores materiales y ahorrando dinero.
            </p>
         </div>
      </article>
   </main>

   <?php includeTemplate('footer'); ?>