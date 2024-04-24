<?php

namespace App\Transport\Factory;

use App\Transport\Objects\Airplane;
use App\Transport\Transport;
use App\Transport\TransportFactory;

class AirplaneFactory extends TransportFactory
{
    /**
     * @return Transport
     */
    public function createTransport(): Transport
    {
        return new Airplane();
    }
}