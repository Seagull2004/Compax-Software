<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: ../../error/error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="admin.css">
    <script src="https://kit.fontawesome.com/bfed2c6a00.js" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>

<body>
    <nav>
        <div class="contenitore">
            <h4>Compax Software</h4>
            <div class="opzioni">
              <a href="../adminLogin/login-out/logout.php">Esci</a>
            </div>
        </div>
    </nav>


    <div>

    </div>


</body>

</html>