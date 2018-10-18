<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProductFixture extends Fixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('chbksrv@gmail.com');

        $password = $this->encoder->encodePassword($user, '1234');
        $user->setPassword($password);

        $manager->persist($user);

        $product = new Product();
        $product->setName('Priceless widget!');
        $product->setPrice(14.50);
        $product->setDescription('Ok, I guess it *does* have a price');
        $manager->persist($product);

        $manager->flush();
    }
}
