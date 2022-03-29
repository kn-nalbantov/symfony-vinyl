<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/')]
    public function homepage():Response
    {
        return new Response('Title: "PB and Jams"');
    }
    #[Route('/browse/{genre}')]
    public function browse(string $genre = null):Response
    {
        if ($genre)
        {
            return new Response('Genre: '.$genre);
        }
        return new Response('Browsing genres');
    }
}

