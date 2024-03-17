<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum ActiveStatus: string
{

    use EnumTrait;

    case INACTIVE = 'inactive';
    case ACTIVE = 'active';
    case YOUTUBE = 'youtube';
}


