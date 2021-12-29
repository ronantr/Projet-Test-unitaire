<?php

namespace App\DataFixtures;
use App\Entity\Item;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
class ItemFixtures extends Fixture implements DependentFixtureInterface
{
    public const USER_REFERENCE = 'user';
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 7 ; $i++)
        {
            $item = new Item();
            $item->setName("item"+$i+1);
            $item->setContent($faker->realText($maxNbChars = 500, $indexSize = 2));
            $item->setTodoList($this->getReference(TodoListFixtures::TODOLIST_REFERENCE));
            
            $manager->persist($item);
        }
        $manager->flush();
    }
}
