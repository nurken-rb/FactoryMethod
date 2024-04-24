<?php

namespace App\Document;

interface Document
{
    /**
     * @return string
     */
    public function generate(): string;
}