<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Project;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProjectFixtures extends Fixture
{
	public function load(ObjectManager $manager)
    {
    	$project = New Project();
    	$project->setName('Wild Beer')
    			->setDescription('Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.')
    			->setDateStart(new \DateTime('06/04/2018'))
    			->setDateEnd(new \DateTime('06/04/2019'))
    			->setUrl('https://www.pexels.com/')
    			->setPhoto('https://images.pexels.com/photos/56007/jause-eat-delicious-food-56007.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')
    			->setIsSolo(true)
    			->setTechno('Php, Html, Css');

    	$manager->persist($project);

    	$project = New Project();
    	$project->setName('Pianooo')
    			->setDescription('Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.')
    			->setDateStart(new \DateTime('06/04/2018'))
    			->setDateEnd(new \DateTime('06/09/2019'))
    			->setUrl('https://www.pexels.com/')
    			->setPhoto('https://images.pexels.com/photos/860662/pexels-photo-860662.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')
    			->setIsSolo(false)
    			->setTechno('Php, Html, OK++');

    	$manager->persist($project);
    	$manager->flush();
    }
}