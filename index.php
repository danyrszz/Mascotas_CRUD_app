<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles\styles.css">
  <title>Document</title>
</head>
<body>

    <header class="header">
      <nav>
        <div>
          <a href="index.php?page=registerPet">Registrar Mascota</a>
        </div>
        <div>
          <a href="index.php?page=listPets">Ver Mascotas</a>
        </div>
      </nav>
    </header>

  <div class="container">
  <?php include("php/manageSections.php"); ?>
  </div>
  
</body>
</html>