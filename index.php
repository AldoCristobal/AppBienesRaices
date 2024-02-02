<?php 
   require 'includes/funciones.php';
   
   includeTemplate('header', $inicio = true);
?>

   <main class="contenedor seccion">
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
   </main>

   <section class="seccion contenedor">
      <h2>Casas y depas en venta</h2>

      <div class="contenedor-anuncios">
         <div class="anuncio">
            <picture>
               <source srcset="build/img/anuncio1.webp" type="image/webp">
               <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
               <img src="build/img/anuncio1.jpg" alt="Anuncio" loading="lazy">
            </picture>

            <div class="contenido-anuncio">
               <h3>Casa de lujo en el lago</h3>
               <p>Casa en el lago con excelente vista con acabados de lujo</p>
               <p class="precio">$3,000,000.00</p>

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

               <a href="anuncio.html" class="boton-amarillo-block">
                  Ver propiedad
               </a>
            </div>
         </div>

         <div class="anuncio">
            <picture>
               <source srcset="build/img/anuncio2.webp" type="image/webp">
               <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
               <img src="build/img/anuncio2.jpg" alt="Anuncio" loading="lazy">
            </picture>

            <div class="contenido-anuncio">
               <h3>Casa terminados de lujo</h3>
               <p>Casa en el lago con excelente vista con acabados de lujo</p>
               <p class="precio">$3,000,000.00</p>

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

               <a href="anuncio.html" class="boton-amarillo-block">
                  Ver propiedad
               </a>
            </div>
         </div>

         <div class="anuncio">
            <picture>
               <source srcset="build/img/anuncio3.webp" type="image/webp">
               <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
               <img src="build/img/anuncio3.jpg" alt="Anuncio" loading="lazy">
            </picture>

            <div class="contenido-anuncio">
               <h3>Casa con alberca</h3>
               <p>Casa en el lago con excelente vista con acabados de lujo</p>
               <p class="precio">$3,000,000.00</p>

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

               <a href="anuncio.html" class="boton-amarillo-block">
                  Ver propiedad
               </a>
            </div>
         </div>
      </div>

      <div class="alinear-derecha">
         <a href="anuncios.html" class="boton-verde">
            Ver todas
         </a>
      </div>
   </section>

   <section class="imagen-contacto">
      <h3>Encuentra la casa de tus sueños</h3>
      <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
      <a href="contacto.html" class="boton-amarillo">Contactanos</a>
   </section>

   <div class="contenedor seccion seccion-inferior">
      <section class="blog">
         <h3>Nuestro blog</h3>
         
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
               <p class="informacion-meta">Escrito el: <span>20/10/2024</span> Por: <span>Admin</span></p>

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
               <p class="informacion-meta">Escrito el: <span>20/10/2024</span> Por: <span>Admin</span></p>

               <p>
                  Consejos para construir una terraza en el techo de tu Casa
                  con los mejores materiales y ahorrando dinero.
               </p>
            </div>
         </article>
      </section>

      <section class="testimoniales">
         <h3>Testimoniales</h3>

         <div class="testimonial">
            <blockquote>
               Consejos para construir una terraza en el techo de tu Casa
               con los mejores materiales y ahorrando dinero.
            </blockquote>
            <p>- Aldo Cristobal</p>
         </div>
      </section>
   </div>

<?php includeTemplate('footer'); ?>
