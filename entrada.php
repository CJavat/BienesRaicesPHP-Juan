<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Guía para la decoración de tu casa</h1>

      <picture>
        <source srcset="build/img/destacada.webp" type="image/webp" />
        <source srcset="build/img/destacada.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/destacada.jpg"
          alt="Imagen de la propiedad"
        />
      </picture>

      <p class="informacion-meta">
        Escrito el: <span>20/10/2021</span> por: <span>Admin</span>
      </p>

      <div class="resumen-propiedad">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias
          eveniet expedita asperiores eligendi laborum assumenda necessitatibus,
          tenetur incidunt odit officiis distinctio sequi provident sapiente
          unde quasi perspiciatis cupiditate laboriosam numquam!
        </p>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias
          eveniet expedita asperiores eligendi laborum assumenda necessitatibus,
          tenetur incidunt odit officiis distinctio sequi provident sapiente
          unde quasi perspiciatis cupiditate laboriosam numquam!
        </p>
      </div>
    </main>

<?php
  incluirTemplate('footer');
?>