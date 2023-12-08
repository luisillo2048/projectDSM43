<?php
// app/Helpers/TimezoneHelper.php

if (!function_exists('obtenerZonasHorariasMexico')) {
    function obtenerZonasHorariasMexico()
    {
        return timezone_identifiers_list(DateTimeZone::PER_COUNTRY, 'MX');
    }

    function obtenerHoraEnZonaMexico($zonaHoraria = 'America/Mexico_City', $formato = 'Y-m-d H:i:s')
    {
        $horaActual = new \DateTime('now', new \DateTimeZone($zonaHoraria));
        return $horaActual->format($formato);
    }
}
?>