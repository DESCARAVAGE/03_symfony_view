<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
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

        foreach (self::SERIES_TITLE as $title) {
            for ($i = 1; $i <= 5; $i++) {
                $season = new Season();

                $season->setNumber($i);
                $season->setYear($faker->numberBetween(1950, 2022));
                $season->setDescription($faker->paragraph(4, true));
                $season->setProgram($this->getReference('program_' . $title));
               
                $this->addReference($title . ' S' . $i, $season);
               
                $manager->persist($season);
            }
        }
        $manager->flush();
    }


    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            ProgramFixtures::class,
        ];
    }
}
