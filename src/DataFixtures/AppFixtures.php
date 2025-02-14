<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Lieux;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{

private Generator $faker;
/**
 * 
 * @var Generator
 */

 public function __construct(){
    $this->faker = Factory::create('fr_FR');
    
 }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
         
        
    //Lieux
        $lieux = new lieux();
            $lieux->setDescription("Foyé")
            ->setNote(8)
            ->setAdresse("236 cours Lafayette")
            ->setStatus(1);
        $manager->persist($lieux);
        $manager->flush();
    

        $lieux = new lieux();
        $lieux->setDescription("Gare de part-dieu")
        ->setNote(8)
        ->setAdresse("5 Pl. Charles Béraudier, 69003 Lyon")
        ->setStatus(1);
    $manager->persist($lieux);
    $manager->flush();

    $lieux = new lieux();
    $lieux->setDescription("Confluence")
    ->setNote(8)
    ->setAdresse("112 Cr Charlemagne, 69002 Lyon ")
    ->setStatus(1);
$manager->persist($lieux);
$manager->flush();



//Ville



}

}