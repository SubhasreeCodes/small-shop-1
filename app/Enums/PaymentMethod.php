<?php

namespace App\Enums;

enum PaymentMethod: String

{

    case CASH = 'CASH';

    case UPI = 'UPI';

    case CARD = 'CARD';

    public static function getValues(): array
    {

        return array_column(PaymentMethod::case(),'value');

    }

    public static function getKeyValues(): array
    {

        return array_column(PaymentMethod::case(),'value','key');
    }

}