<?php
// src/Hammond/ChurchBundle/DataFixtures/ORM/LoadChurchData.php

namespace Hammond\ChurchBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Hammond\ChurchBundle\Entity\Church;
use Hammond\ChurchBundle\Entity\ChurchImages;

class LoadChurchData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
		$churchs = [
			[ 'Aylesby', 53.551143, -0.185832, 0],
			[ 'Bigby', 53.553172, -0.401802, 0],
			[ 'Bradley', 53.542837, -0.127577, 0],
			[ 'Cabourne', 53.501542, -0.283099, 0],
			[ 'Croxton', 53.59556, -0.347691, 0],
			[ 'Elsham', 53.599295, -0.435175, 0],
			[ 'Grasby', 53.529599, -0.361069, 0],
			[ 'Great Coates', 53.570149, -0.139195, 0],
			[ 'Great Limber', 53.561998, -0.287897, 3],
			[ 'Habrough', 53.612587, -0.25558, 0],
			[ 'Healing', 53.573356, -0.168207, 0],
			[ 'Irby upon Humber', 53.527671, -0.197319, 0],
			[ 'Immingham', 53.619101, -0.224820, 0],
			[ 'Keelby', 53.573211, -0.242089, 0],
			[ 'Kirmington', 53.586591, -0.330526, 0],
			[ 'Laceby', 53.541363, -0.168945, 0],
			[ 'Melton Ross', 53.582384,  -0.383030, 0],
			[ 'Riby', 53.550658, -0.213396, 0],
			[ 'Searby', 53.538478, -0.383085, 0],
			[ 'Stallingborough', 53.589519, -0.196043, 0],
			[ 'Swallow', 53.51080, -0.227889, 0],
			[ 'Thornton Curtis', 53.645994, -0.355696, 0],
			[ 'Ulecby', 53.616368, -0.333475, 0],
			[ 'Wootton', 53.630764, -0.354590, 0]
		];
	
		foreach($churchs as $church)
		{
	    	$manager->persist($this->createChurch($church));
		}
	
		$manager->flush();
    }
    
    private function createChurch($churchData)
    {
		$church = new Church();
		$church->setName($churchData[0]);
		$church->setLatitude($churchData[1]);
		$church->setLongitude($churchData[2]);

		for($i = 0; $i < $churchData[3]; $i++) {

			$imageName = strtolower(str_replace(' ', '', $churchData[0] . $i . '.jpg'));

			$image = new ChurchImages();
			$image->setPath($imageName);
			$image->setChurch($church);

			$church->addImage($image);
		}	

		return $church;
    }
}
