<?php

namespace App\Transport\Objects;

use App\Transport\Transport;

class Airplane implements Transport
{
    /**
     * @return string
     */
    public function deliver(): string
    {
        return "Goods delivered by airplane.";
    }
}