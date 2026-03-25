<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login - CCP</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="login-container">
  <h2>Iniciar sesión</h2>

  <form method="POST" action="auth.php">
    <input type="text" name="email" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>

    <button type="submit">Entrar 2</button>
  </form>

  <?php if (isset($_GET['error'])): ?>
    <p class="error">Credenciales incorrectas</p>
  <?php endif; ?>
</div>

</body>
</html>
