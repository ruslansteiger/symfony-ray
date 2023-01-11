<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MovieController extends AbstractController
{
    #[Route('/movie/{id}', name: 'app_movie_show')]
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $movie = $doctrine->getRepository(Movie::class)->findOneBy([
            'titleId' => 'tt0068646',
            'ordering' => $id,
        ]);

        if (is_null($movie)) {
            throw $this->createNotFoundException("No movie found for id {$id}");
        }

        dd($movie);

        return new JsonResponse($movie);
    }
}
