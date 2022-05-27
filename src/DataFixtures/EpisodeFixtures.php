<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    const EPISODES = [
        ['title' => 'Episode 1', 'number' => 1, 'synopsis' => 'saison 1 épisode 1', 'season' => 'Naruto S1'],
        ['title' => 'Episode 1', 'number' => 1, 'synopsis' => 'saison 1 épisode 1', 'season' => 'MHA S1'],
        ['title' => 'Episode 1', 'number' => 1, 'synopsis' => 'saison 1 épisode 1', 'season' => 'DBS S1'],
        ['title' => 'Episode 1', 'number' => 1, 'synopsis' => 'saison 1 épisode 1', 'season' => 'Parasite S1'],
        ['title' => 'Episode 1', 'number' => 1, 'synopsis' => 'saison 1 épisode 1', 'season' => 'Overload S1'],
        ['title' => 'Episode 2', 'number' => 2, 'synopsis' => 'saison 1 épisode 2', 'season' => 'Naruto S2'],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::EPISODES as $episodeFixture) {
            $episode = new Episode();
            $episode->setTitle($episodeFixture['title']);
            $episode->setNumber($episodeFixture['number']);
            $episode->setSynopsis($episodeFixture['synopsis']);
            $episode->setSeason($this->getReference($episodeFixture['season']));
            $manager->persist($episode);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            SeasonFixtures::class,
        ];
    }
}