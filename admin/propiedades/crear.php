<?php
  // BASE DE DATOS
  require('../../includes/config/database.php');
  $db = conectarDB();

  // Arreglo con mensajes de errores.
  $errores = [];

  $titulo = '';
  $precio = '';
  $descripcion = '';
  $habitaciones = '';
  $wc = '';
  $estacionamiento = '';
  $vendedorId = '';

  // Ejecutar el código después de que el usuario envia el formulario
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];

    if(!$titulo) {
      $errores[] = "Debes añadir un título";
    }

    if(!$precio) {
      $errores[] = "El precio es obligatorio";
    }

    if(strlen($descripcion) < 50) {
      $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
    }

    if(!$habitaciones) {
      $errores[] = "Habitaciones no debe ir vacío";
    }

    if(!$wc) {
      $errores[] = "Baños no debe ir vacío";
    }

    if(!$estacionamiento) {
      $errores[] = "Estacionamiento no debe ir vacío";
    }

    if(!$vendedorId) {
      $errores[] = "Elige un vendedor";
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    // Revisar que el arreglo de errores esté vacío.
    if(empty($errores)) {
      // Insertar en la DB.
      $query = "INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";

      // echo $query;

      $resultado = mysqli_query($db, $query);

      // if($resultado) {
      //   echo "Insertado Correctamente";
      // }
    }
  }

  require '../../includes/funciones.php';
  incluirTemplate('header');
?>

    <main class="contenedor seccion">
      <h1>Crear</h1>

      <a href="/admin/index.php" class="boton boton-verde">Volver</a>

      <?php foreach($errores as $error): ?>
        <div class="alerta error">
          <?php echo $error; ?>
        </div>
      <?php endforeach; ?>

      <form class="formulario" method="POST" action="crear.php">
        <fieldset>
          <legend>Información General</legend>

          <label for="titulo">Título:</label>
          <input type="text" id="titulo" name="titulo" placeholder="Título Propiedad" value="<?php echo $titulo ?>">

          <label for="precio">Precio:</label>
          <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">

          <label for="imagen">Imagen:</label>
          <input type="file" id="imagen" accept="image/jpeg, image/png">
        
          <label for="descripcion">Descripción:</label>
          <textarea name="descripcion" id="descripcion"><?php echo $descripcion ?></textarea>
        </fieldset>

        <fieldset>
          <legend>Información Propiedad</legend>

          <label for="habitaciones">Habitaciones:</label>
          <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones ?>">

          <label for="wc">Baños:</label>
          <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc ?>">

          <label for="estacionamiento">Estacionamiento:</label>
          <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento ?>">
        </fieldset>

        <fieldset>
          <legend>Vendedor</legend>

          <select name="vendedor">
            <option value="">-- SELECCIONE --</option>
            <option value="1">Juan</option>
            <option value="2">Karen</option>
          </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
      </form>
    </main>

<?php
  incluirTemplate('footer');
?>
