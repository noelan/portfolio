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
    			->setPhoto('https://www.pixelstalk.net/wp-content/uploads/2016/11/Calm-Desktop-Wallpaper.jpg')
    			->setIsSolo(true)
    			->setTechno('Php, Html, Css');

    	$manager->persist($project);

    	$project = New Project();
    	$project->setName('Pianooo')
    			->setDescription('Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.')
    			->setDateStart(new \DateTime('06/04/2018'))
    			->setDateEnd(new \DateTime('06/09/2019'))
    			->setUrl('https://www.pexels.com/')
    			->setPhoto('https://www.pixelstalk.net/wp-content/uploads/2016/11/Calm-Desktop-Wallpaper.jpg')
    			->setIsSolo(false)
    			->setTechno('Php, Html, OK++');

    	$manager->persist($project);
    	$manager->flush();
    }
}