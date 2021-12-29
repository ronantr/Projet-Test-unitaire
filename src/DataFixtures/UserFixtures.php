<?php

namespace App\DataFixtures;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
class UserFixtures extends Fixture 
{
    public const USER_REFERENCE = 'user-gary';
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 5; $i++)
        {
            $user = new User();
            $user->setFirstname($faker->firstName);
            $user->setLastname($faker->lastName);
            $user->setBirthday(Carbon::now()->subYears(20));
            $user->setEmail($faker->safeEmail);
            $user->setPassword("12345678");
            $user->addReference(self::USER_REFERENCE, $user);
            
            $manager->persist($user);
        }
        $manager->flush();
    }
}
