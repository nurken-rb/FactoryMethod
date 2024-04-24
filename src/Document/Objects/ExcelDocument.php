<?php

namespace App\Document\Objects;

use App\Document\Document;

class ExcelDocument implements Document
{
    /**
     * @return string
     */
    public function generate(): string
    {
        return "Excel document generated.";
    }
}