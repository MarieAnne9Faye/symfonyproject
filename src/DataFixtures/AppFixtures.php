<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Profil;
use Doctrine\Persistence\ObjectManager;
//use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
//use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $hasher;
    public function __construct( UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        $profil = new Profil();
        $profil->setLibelle("ADMIN");
        $manager->persist($profil);

        for($i=1; $i<=10; $i++)
        {
            $user = new User();
            $user->setPrenom($faker->firstName())
                ->setNom($faker->lastName())
                ->setEmail($faker->email())
                ->setProfil($profil)
                ->setRoles(["ROLE_ADMIN"])
                ->setTelephone("77123456".$i)
                ->setPassword($this->hasher->hashPassword($user, "passer"));

            $manager->persist($user);
        }

        $manager->flush();
    }
}
