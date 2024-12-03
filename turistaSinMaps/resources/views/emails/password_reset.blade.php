<!DOCTYPE html>
<html>
<body>
    <h2>Recuperación de Contraseña</h2>
    <p>Haga clic en el siguiente enlace para restablecer su contraseña:</p>
    <a href="{{ url('/nueva-contraseña?token=' . $token) }}">Restablecer Contraseña</a>
</body>
</html>