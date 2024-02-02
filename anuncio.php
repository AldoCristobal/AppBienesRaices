<?php 
   require 'includes/funciones.php';
   
   includeTemplate('header');
?>

   <main class="contenedor seccion contenido-centrado">
      <h1>Casa en venta frente al bosque</h1>

      <picture>
         <source srcset="build/img/destacada.webp" type="image/webp">
         <source srcset="build/img/destacada.jpeg" type="image/jpeg">

         <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen destacada">
      </picture>

      <div class="resumen-propiedad">
         <p class="precio">$3, 000, 000.00</p>

         <ul class="iconos-caracteristicas">
            <li>
               <img class="icono" src="build/img/icono_wc.svg" alt="Icono baño" loading="lazy">
               <p>3</p>
            </li>
            <li>
               <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy">
               <p>3</p>
            </li>
            <li>
               <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones" loading="lazy">
               <p>4</p>
            </li>
         </ul>

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
   </main>

   <?php includeTemplate('footer'); ?>