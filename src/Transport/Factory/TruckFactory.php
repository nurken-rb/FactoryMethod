<?php

namespace App\Transport\Factory;

use App\Transport\Objects\Truck;
use App\Transport\Transport;
use App\Transport\TransportFactory;

class TruckFactory extends TransportFactory
{
    /**
     * @return Transport
     */
    public function createTransport(): Transport
    {
        return new Truck();
    }
}