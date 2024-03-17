<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum OrderStatus: string
{
    use EnumTrait;

    case PENDING    = 'pending';
    case APPROVED   = 'approved';
    case PROCESSING = 'processing';
    case SHIPPED    = 'shipped';
    case DELIVERED  = 'delivered';
    case REJECTED   = 'rejected';
    case CANCELED   = 'canceled';
}
