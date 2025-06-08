<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Personalizado</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8; /* Un gris azulado muy claro */
            color: #334e68; /* Gris oscuro para el texto principal */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            flex-direction: column;
            text-align: center;
        }
        .container {
            background-color: #ffffff; /* Fondo blanco para el contenido */
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            max-width: 600px;
            width: 90%;
        }
        h1 {
            color: #2c5282; /* Azul medio oscuro para los títulos */
            font-size: 2.8em;
            margin-bottom: 20px;
            font-weight: 600;
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        strong {
            color: #63b3ed; /* Azul claro vibrante para resaltar el mensaje */
            font-weight: 600;
            font-size: 1.4em;
        }
        .message-box {
            background-color: #e0f2f7; /* Fondo más claro para el cuadro del mensaje */
            padding: 20px;
            border-radius: 8px;
            margin-top: 25px;
            margin-bottom: 30px;
            border-left: 6px solid #4299e1; /* Borde de color para destacar */
        }
        a {
            color: #4299e1; /* Azul para los enlaces */
            text-decoration: none;
            font-weight: 400;
            transition: color 0.3s ease;
            font-size: 1.1em;
            margin-top: 20px;
            display: inline-block;
        }
        a:hover {
            color: #2b6cb0; /* Azul más oscuro al pasar el ratón */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mensaje Personalizado</h1>
        <div class="message-box">
          
            <p><strong>{{ $mensaje }}</strong></p>
        </div>
        <a href="/">Volver al inicio</a>
    </div>
</body>
</html>