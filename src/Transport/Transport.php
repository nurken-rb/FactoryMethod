<?php

namespace App\Transport;

interface Transport
{
    /**
     * @return string
     */
    public function deliver(): string;
}