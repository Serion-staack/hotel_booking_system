<?php
namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

final class RoomStatusEnum extends Enum
{
    public const FREE = 1;
    public const OCCUPIED = 2;
    public const MAINTENANCE = 3;

    public static function getStatus()
    {
        return [
            self::FREE ,
            self::OCCUPIED,
            self::MAINTENANCE,
        ];
    }

}
