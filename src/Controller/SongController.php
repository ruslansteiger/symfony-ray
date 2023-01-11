<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SongController extends AbstractController
{
    #[Route('api/songs/{id<\d+>}', name: 'api_song_show', methods: ['GET'])]
    public function getSong(int $id, LoggerInterface $log): Response
    {
        $song = [
            'id' => $id,
            'name' => 'Waterfalls',
            'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];

        $log->debug('Returning song ID {song}', [
            'song' => $id,
        ]);

        return $this->json($song);
    }
}
