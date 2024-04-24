<?php

namespace App\Controller;

use App\Document\Factory\PdfDocumentFactory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController
{

    /**
     * @return Response
     */
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $pdfFactory = new PdfDocumentFactory();
        $pdfDocument = $pdfFactory->createDocument();
        return new Response($pdfDocument->generate());
    }
}