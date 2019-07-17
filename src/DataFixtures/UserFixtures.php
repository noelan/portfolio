<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
	private $encoder;

	public function __construct(UserPasswordEncoderInterface $encoder)
	{
	    $this->encoder = $encoder;
	}

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
    	$user = new User();
    	$user->setFirstname('Noël')
    		 ->setLastname('An')
    		 ->setEmail('noel@an.com')
    		 ->setPassword($this->encoder->encodePassword($user,'noel'))
    		 ->setTel('06 78 83 98 98')
    		 ->setAdresse('18 rue de narvik')
    		 ->setLinkedin('https://www.linkedin.com/in/noel-an-704482186/')
             ->setPicture('/picture/photoprofil.png')
    		 ->setDescription('Passionné par l’univers du numérique, je suis actuellement en formation de développeur web à la Wild Code School, Je suis disponible dès août 2019 pour initier ma nouvelle carrière avec vous.');

    	$manager->persist($user);		 
        $manager->flush();
    }
}
