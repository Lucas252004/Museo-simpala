
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <title>Login</title>
</head>
<body class="bg-info d-flex justify-content-center align-items-center vh-100">
    <form action="../controllers/C_login.php" method="POST">

        <div class="bg-white p-5 rounded-5 text-secondary shadow"style="width: 25rem">
        <?php
        if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']?></p>
        <?php } ?>
      <div class="d-flex justify-content-center">
        <img src="../../assets/images/icon_login.png" alt="login-icon" style="height: 8rem"/>
      </div>

      <div class="text-center fs-1 fw-bold">Logueate</div>
        <div class="input-group mt-4">
            <div class="input-group-text bg-info">
            <img src="../../assets/images/username-icon.svg" alt="username-icon" style="height: 1rem"/>
            </div>
            <input class="form-control bg-light" type="text" name="uname" placeholder="Usuario"/>
        </div>

        <div class="input-group mt-1">
            <div class="input-group-text bg-info">
            <img src="../../assets/images/password-icon.svg" alt="password-icon" style="height: 1rem"/></div>
            <input class="form-control bg-light" type="password" name="password" placeholder="Contraseña"/>
        </div>

      <input class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Login"><a href="V_registro.php">Crear Cuenta</a></div>
      
      <div class="p-3">
        <div class="border-bottom text-center" style="height: 0.9rem"> </div>
      </div>

    </div>
    </form>
</body>
</html>