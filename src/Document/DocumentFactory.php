<?php

namespace App\Document;

abstract class DocumentFactory
{
    /**
     * @return Document
     */
    abstract public function createDocument(): Document;

    /**
     * @return string
     */
    public function generateDocument(): string
    {
        $document = $this->createDocument();
        return $document->generate();
    }
}