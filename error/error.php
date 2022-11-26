<?php 
session_start();
if(isset($_SESSION['admin'])){
  header("Location: ../admin/index/admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/bfed2c6a00.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="error.css">
  <title>Errore</title>
</head>

<body>
  <main>
    <h1>4<span><i class="fas fa-ghost"></i></span>3</h1>
    <h2>Error: 403 VIETATO L'ACCESSO</h2>
    <p>La pagina a cui stai cercando di accedere è riservata SOLO al personale autorizzato</p>
  </main>

  <a href="../homepage/index.php" class="btn">Home</a>
</body>

</html>