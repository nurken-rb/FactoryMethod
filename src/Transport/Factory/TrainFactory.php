<?php

namespace App\Transport\Factory;

use App\Transport\Objects\Train;
use App\Transport\Transport;
use App\Transport\TransportFactory;

class TrainFactory extends TransportFactory
{
    /**
     * @return Transport
     */
    public function createTransport(): Transport
    {
        return new Train();
    }
}