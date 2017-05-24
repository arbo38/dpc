<?php

namespace DPC\StoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DPC\StoreBundle\Entity\Brand;

class LoadBrand implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $listBrands = array(
      ['title' => 'Asus', 'url' => 'www.asus.com' , 'description' =>''],
      ['title' => 'Microsoft', 'url' => 'www.microsoft.com', 'description' => ''],
      ['title' => 'Gigabyte', 'url' => 'www.gigabyte.com', 'description' =>''],
      ['title' => 'Asrock', 'url' => 'www.asrock.com' , 'description' =>''],
      ['title' => 'MSI', 'url' => 'www.msi.com' , 'description' =>''],
      ['title' => 'Samsung', 'url' => 'www.samsung.com', 'description' =>'']
      );
    
    foreach ($listBrands as $brand) {
      // On crée la compétence
      $newBrand = new Brand();
      
      foreach ($brand as $key => $value) {
        $setter = 'set' . ucfirst($key);
        $newBrand->$setter($value);
      }

      // On la persiste
      $manager->persist($newBrand);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}