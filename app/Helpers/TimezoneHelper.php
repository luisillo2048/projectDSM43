<?php
// app/Helpers/TimezoneHelper.php

if (!function_exists('obtenerHoraMexico')) {
    function obtenerHoraMexico($zonaHoraria = 'America/Mexico_City', $formato = 'Y-m-d H:i:s')
    {
        $horaActual = new \DateTime('now', new \DateTimeZone($zonaHoraria));
        return $horaActual->format($formato);
    }
}
?>