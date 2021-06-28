<?php

namespace App\DataFixtures;

use App\Entity\User;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserFixtures extends Fixture
{

    private $passwordHasher;

     public function __construct(UserPasswordHasherInterface $passwordHasher)
     {
         $this->passwordHasher = $passwordHasher;
     }

    public function load(ObjectManager $manager)
    {
        

        $user = new User();

        $user->setFirstName('italo');
        $user->setLastName('ramirez');
        $user->setEmail('italoramirezp@gmail.com');
        // $user->setRoles(['Role_Admin']);
        //$user->setPassword('');

        $user->setPassword($this->passwordHasher->hashPassword(
                $user,
                $user->setPassword('123')
        ));
        // $password = $this->passwordEncoder->encodePassword($user, $form['password']->getData());
        // $user->setPassword($password);

        $manager->persist($user);
        $manager->flush();
    }
}
