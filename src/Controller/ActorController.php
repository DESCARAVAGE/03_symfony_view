<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Repository\ActorRepository;
use App\Repository\ProgramRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[Route('/actor', name: 'actor_')]
class ActorController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ActorRepository $actorRepository): Response
    {
        $actor = $actorRepository->findAll();

        return $this->render('actor/index.html.twig', [
            'actors' => $actor,
        ]);
    }

    #[Route('/{id}', methods:['GET'], requirements: ['id' => '\d+'],  name: 'show')]
    public function show(Actor $actor): Response
    {
        $programs = $actor->getPrograms();
        return $this->render('actor/show.html.twig', [
            'programs' => $programs,
            'actor' => $actor,
        ]);
    }
}