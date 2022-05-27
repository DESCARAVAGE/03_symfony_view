<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    public const SEASONS = [
        ['number' => 1, 'year' => 2000, 'description' => 'saison 1', 'program' => 'Naruto'],
        ['number' => 1, 'year' => 2001, 'description' => 'saison 1', 'program' => 'MHA'],
        ['number' => 1, 'year' => 2002, 'description' => 'saison 1', 'program' => 'DBS'],
        ['number' => 1, 'year' => 2003, 'description' => 'saison 1', 'program' => 'Parasite'],
        ['number' => 1, 'year' => 2004, 'description' => 'saison 1', 'program' => 'Overload'],
        ['number' => 2, 'year' => 2006, 'description' => 'saison 1', 'program' => 'Naruto'],
    ];
    public function load(ObjectManager $manager): void
    {
       foreach (self::SEASONS as $seasonFixture) {
        $season = new Season();
        $season->setNumber($seasonFixture['number']);
        $season->setYear($seasonFixture['year']);
        $season->setDescription($seasonFixture['description']);
        $season->setProgram($this->getReference('program_' . $seasonFixture['program']));
        $this->addReference($seasonFixture['program'] . ' S' . $seasonFixture['number'], $season);
        $manager->persist($season);
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
