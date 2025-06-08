<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // Importa la clase Carbon para manejar fechas y horas

class MensajeController extends Controller
{
    /**
     * Muestra un mensaje personalizado basado en el argumento de la ruta.
     *
     * @param string $mensaje El mensaje que se pasará desde la URL.
     * @return \Illuminate\View\View
     */
    public function mensajePersonalizado($mensaje)
    {
        // Retorna la vista 'mensajePersonalizado' y le pasa la variable $mensaje.
        return view('mensajePersonalizado', ['mensaje' => $mensaje]);
    }

    /**
     * Muestra un mensaje diferente basado en la hora del día.
     *
     * @return \Illuminate\View\View
     */
    public function mensajeHora()
    {
        $hora = Carbon::now()->hour; // Obtiene la hora actual del día
        $saludo = '';

        // Determina el saludo según la hora
        if ($hora >= 5 && $hora < 12) {
            $saludo = 'Buenos días';
        } elseif ($hora >= 12 && $hora < 19) {
            $saludo = 'Buenas tardes';
        } else {
            $saludo = 'Buenas noches';
        }

        // Retorna la vista 'mensajeHora' y le pasa la variable $saludo.
        return view('mensajeHora', ['saludo' => $saludo]);
    }

    /**
     * Muestra un saludo repetido un número específico de veces.
     *
     * @param int $veces El número de veces que se repetirá el saludo (por defecto 1).
     * @return \Illuminate\View\View
     */
    public function saludoRepetido($veces = 1) // El valor por defecto es 1 si no se proporciona.
    {
        // Asegura que $veces sea un entero y al menos 1 para evitar bucles infinitos o negativos.
        $veces = max(1, (int) $veces);

        // Retorna la vista 'saludoRepetido' y le pasa la variable $veces.
        return view('saludoRepetido', ['veces' => $veces]);
    }
}