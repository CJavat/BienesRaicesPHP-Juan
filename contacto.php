<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
?>

    <main class="contenedor seccion">
      <h1>Contacto</h1>

      <picture>
        <source src="build/img/destacada3.webp" type="image/webp" />
        <source src="build/img/destacada3.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/destacada3.jpg"
          alt="Imagen Contacto"
        />
      </picture>

      <h2>Llene el formulario de Contacto</h2>

      <form class="formulario">
        <fieldset>
          <legend>Información Personal</legend>

          <label for="nombre">Nombre</label>
          <input type="text" placeholder="Tu Nombre" id="nombre" />

          <label for="email">Email</label>
          <input type="email" placeholder="Tu Email" id="email" />

          <label for="telefono">Teléfono</label>
          <input type="tel" placeholder="Tu Teléfono" id="telefono" />

          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje"></textarea>
        </fieldset>

        <fieldset>
          <legend>Información Sobre la Propiedad</legend>

          <label for="opciones">Vende o Compra</label>
          <select name="opciones" id="opciones">
            <option value="" disabled selected>-- Selecciona --</option>
            <option value="Compra">Compra</option>
            <option value="Vende">Vende</option>
          </select>

          <label for="presupuesto">Precio o Presupuesto</label>
          <input
            type="number"
            placeholder="Tu precio o presupuesto"
            id="presupuesto"
          />
        </fieldset>

        <fieldset>
          <legend>Contacto</legend>

          <p>Como desea ser contactado:</p>

          <div class="forma-contacto">
            <label for="contactar-telefono">Teléfono</label>
            <input
              type="radio"
              name="contacto"
              value="telefono"
              id="contactar-telefono"
            />

            <label for="contactar-email">Teléfono</label>
            <input
              type="radio"
              name="contacto"
              value="email"
              id="contactar-email"
            />
          </div>

          <p>Si eligió teléfono, seleccione hora y fecha para ser contactado</p>

          <label for="fecha">Fecha:</label>
          <input type="date" name="fecha" id="fecha" />

          <label for="hora">Hora:</label>
          <input type="time" name="hora" id="hora" min="09:00" max="18:00" />
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde" />
      </form>
    </main>

<?php
  incluirTemplate('footer');
?>
