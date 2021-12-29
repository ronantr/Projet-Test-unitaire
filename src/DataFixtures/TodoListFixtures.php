<?php

namespace App\DataFixtures;
use App\Entity\TodoList;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
class TodoListFixtures extends Fixture implements DependentFixtureInterface
{
    public const USER_REFERENCE = 'user';
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 3; $i++)
        {
            $todoList = new TodoList();
            $todoList->setUser($this->getReference(UserFixtures::USER_REFERENCE));
            $todoList->addReference(self::TODOLIST_REFERENCE, $todoList);
    
            $manager->persist($todoList);
        }
        $manager->flush();
    }
}
