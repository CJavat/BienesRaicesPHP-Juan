<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Casa en venta frente al bosque</h1>

      <picture>
        <source srcset="build/img/destacada.webp" type="image/webp" />
        <source srcset="build/img/destacada.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/destacada.jpg"
          alt="Imagen de la propiedad"
        />
      </picture>

      <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>

        <ul class="iconos-caracteristicas">
          <li>
            <img
              class="icono"
              loading="lazy"
              src="build/img/icono_wc.svg"
              alt="Icono WC"
            />
            <p>3</p>
          </li>

          <li>
            <img
              class="icono"
              loading="lazy"
              src="build/img/icono_estacionamiento.svg"
              alt="Icono Estacionamiento "
            />
            <p>3</p>
          </li>

          <li>
            <img
              class="icono"
              loading="lazy"
              src="build/img/icono_dormitorio.svg"
              alt="Icono Dormitorio"
            />
            <p>4</p>
          </li>
        </ul>

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