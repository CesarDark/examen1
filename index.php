<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Examen #1</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
      <h1> Presentación de Coches</h1>
      <h2> Probamos el nuevo Mazda3: un coche compacto que se renueva profundamente a
          la espera del motor Skyactiv-X</h2>
      <h3> "Un compacto que bien se puede medir contra rivales del sector premium y cuyo motor Skyactiv-G se desenvuelve a la perfección.""</h3>
  </body>
  <div class="centrar">
    <section>
      <ul class="gallery">
        <img src="auto.jpg" alt="">
        <h5><a href="https://www.motorpasion.com/tag/presentaciones-de-coches"> Más info aquí</a></h5>
      </ul>
    </section>
    </div>
    <?php
      echo "# FUNCIÓN ÁREA #";
      echo "<br/>";
      echo "----------------------------------";
      echo "<br/>";
      function Acres_M2($area){
        $const = 4046.856;
        $result = $area * $const;
        echo $area ." Acres son: ", $result ." M2";
      }
      Acres_M2(4);
    ?>
    <footer>
      <a href="creditos.php"> Créditos </a>
    </footer>
</html>
