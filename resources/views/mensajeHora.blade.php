<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje por Hora</title>
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
        .greeting-box {
            background-color: #ebf8ff; /* Fondo muy claro para el saludo */
            padding: 30px;
            border-radius: 8px;
            margin-top: 25px;
            margin-bottom: 30px;
            border-bottom: 4px solid #4299e1; /* Borde inferior de color */
        }
        .greeting {
            color: #4299e1; /* Azul vibrante para el saludo */
            font-size: 3.5em; /* Tamaño grande para el saludo */
            font-weight: 600;
            margin: 0;
            line-height: 1.2;
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
        <h1>Mensaje por Hora</h1>
        <div class="greeting-box">
            <p class="greeting">¡{{ $saludo }}!</p>
        </div>
        <a href="/">Volver al inicio</a>
    </div>
</body>
</html>