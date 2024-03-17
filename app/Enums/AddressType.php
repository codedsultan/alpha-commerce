<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum AddressType: string
{

    use EnumTrait;
    
    case PRESENT_ADDRESS   = 'present_address';
    case PERMANENT_ADDRESS = 'permanent_address';
    case BILLING_ADDRESS   = 'billing_address';
    case SHIPPING_ADDRESS  = 'shipping_address';
}
