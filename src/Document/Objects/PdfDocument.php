<?php

namespace App\Document\Objects;

use App\Document\Document;

class PdfDocument implements Document
{
    /**
     * @return string
     */
    public function generate(): string
    {
        return "PDF document generated.";
    }
}