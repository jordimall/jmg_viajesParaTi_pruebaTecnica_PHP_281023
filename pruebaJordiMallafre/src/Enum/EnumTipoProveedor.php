<?php

namespace App\Enum;

class EnumTipoProveedor
{
    public const OPCION_1 = 'hotel';
    public const OPCION_2 = 'pista';
    public const OPCION_3 = 'complemento';

    public static function getChoices(): array
    {
        // Reflejar la clase para acceder a sus constantes
        $reflectionClass = new \ReflectionClass(self::class);
        $choices = [];
        
        // Iterar sobre todas las constantes de la clase y usar su valor como tanto la etiqueta como el valor de la opción
        foreach ($reflectionClass->getConstants() as $key => $value) {
            $choices[$value] = $value;
        }

        return $choices;
    }
}