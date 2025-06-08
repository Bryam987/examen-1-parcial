<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Repetido</title>
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
        .repetitions-list {
            list-style: none; /* Quitar viñetas de la lista */
            padding: 0;
            margin-top: 25px;
            margin-bottom: 30px;
        }
        .repetitions-list li {
            background-color: #edf2f7; /* Fondo claro para cada elemento de la lista */
            padding: 12px 20px;
            margin-bottom: 10px; /* Espacio entre elementos */
            border-radius: 6px;
            text-align: left;
            font-size: 1.1em;
            color: #4a5568; /* Gris oscuro para el texto */
        }
        .repetitions-list li strong {
            color: #4299e1; /* Azul para el saludo */
            font-weight: 600;
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
        <h1>Saludo Repetido</h1>
        <ul class="repetitions-list">
            @for ($i = 0; $i < $veces; $i++)
                <li><strong>¡Hola!</strong> (Repetición {{ $i + 1 }})</li>
            @endfor
        </ul>
        <a href="/">Volver al inicio</a>
    </div>
</body>
</html>