<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    const SERIES = [
        ['title' => 'Naruto', 'synopsis' => 'Les aventures des ninjas de konoha', 'category' => 'Aventure'],
        ['title' => 'MHA', 'synopsis' => 'Les aventures des heros', 'category' => 'Action'],
        ['title' => 'DBS', 'synopsis' => 'Des combats de saiyans', 'category' => 'Fantastique'],
        ['title' => 'Parasite', 'synopsis' => 'Des parasites qui vous rentre dedans', 'category' => 'Fantastique'],
        ['title' => 'Overload', 'synopsis' => 'Les aventures de Ainz dans un RPG', 'category' => 'Aventure'],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::SERIES as $seriesName) {
            $program = new Program();
            $program->setTitle($seriesName ['title']);
            $program->setSynopsis($seriesName['synopsis']);
            $program->setCategory($this->getReference('category_' . $seriesName['category']));
            $this->addReference('program_' . $seriesName['title'], $program);
            $manager->persist($program);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            CategoryFixtures::class,
        ];
    }
}
