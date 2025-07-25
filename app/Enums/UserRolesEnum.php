<?php
namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

final class UserRolesEnum extends Enum
{
    public const CLIENT = 2;
    public const MANAGER = 3;
    public const RECEPTIONIST = 4;

    public static function getRoles()
    {
        return [
            self::MANAGER ,
            self::RECEPTIONIST ,
            self::CLIENT
        ];
    }

}


