<?php 
   require 'includes/funciones.php';
   
   includeTemplate('header');
?>


   <main class="contenedor seccion contenido-centrado">
      <h1>Guia para la decoracion de tu hogar</h1>
            
      <picture>
         <source srcset="build/img/destacada2.webp" type="image/webp">
         <source srcset="build/img/destacada2.jpeg" type="image/jpeg">
         
         <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen destacada">
      </picture>
      
      <p class="informacion-meta">Escrito el: <span>20/10/2024</span> Por: <span>Admin</span></p>

      <div class="resumen-propiedad">         
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