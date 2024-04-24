<?php

namespace App\Document\Factory;

use App\Document\Document;
use App\Document\DocumentFactory;
use App\Document\Objects\ExcelDocument;

class ExcelDocumentFactory extends DocumentFactory
{
    /**
     * @return Document
     */
    public function createDocument(): Document
    {
        return new ExcelDocument();
    }
}