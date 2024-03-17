<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum PaymentMethod: string
{

    use EnumTrait;

    case COD    = 'cod';
    case STRIPE = 'stripe';
    case BKASH  = 'bkash';
    case NAGAD  = 'nagad';
    case WALLET = 'wallet';
}
