<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum NotificationType: string
{
    use EnumTrait;

    case  INFO    = 'info';
    case  WARNING = 'warning';
    case  SUCCESS = 'success';
    case  DANGER  = 'danger';
}
