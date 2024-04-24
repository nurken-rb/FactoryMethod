<?php

namespace App\Transport;

abstract class TransportFactory
{
    /**
     * @return Transport
     */
    abstract public function createTransport(): Transport;

    /**
     * @return string
     */
    public function deliverGoods(): string
    {
        $transport = $this->createTransport();
        return $transport->deliver();
    }
}