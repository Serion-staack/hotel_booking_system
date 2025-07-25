<?php

namespace App\Enums;

enum AdminEnum
{
    public const ADMIN = 1;

    public static  function  getAdmin()
    {
        return
            [
                self::ADMIN
            ];
    }
}
