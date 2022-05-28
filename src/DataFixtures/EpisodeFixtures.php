<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public const SERIES_TITLE = [
        'Naruto',
        'MHA',
        'DBS',
        'Parasite',
        'Overload',
    ];

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 5; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                for ($k = 1; $k <= 20; $k++) {
                $episode = new Episode();

                $episode->setTitle($faker->sentence(4, true));
                $episode->setNumber($k);
                $episode->setSynopsis($faker->paragraph(3, true));

                $episode->setSeason($this->getReference(self::SERIES_TITLE[$i] . ' S' . $j));

                $manager->persist($episode);
            }
        }
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
