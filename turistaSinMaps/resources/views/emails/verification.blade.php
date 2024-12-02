<!DOCTYPE html>
<html>
<head>
    <title>Verificación de Correo Electrónico</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <h2>¡Bienvenido, {{ $userName }}!</h2>
        <p>Gracias por registrarte. Para completar tu registro, por favor verifica tu correo electrónico haciendo clic en el siguiente botón:</p>
        
        <a href="{{ $verificationUrl }}" style="
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        ">Verificar Correo Electrónico</a>

        <p>Si no puedes hacer clic en el botón, copia y pega el siguiente enlace en tu navegador:</p>
        <p>{{ $verificationUrl }}</p>

        <p>Si no has creado una cuenta, ignora este correo.</p>
    </div>
</body>
</html>