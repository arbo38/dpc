<?php

namespace DPC\StoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DPC\StoreBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $listCategories = array(
      ['title' => 'Composants'],
      ['title' => 'Gaming'],
      ['title' => 'Bureautique'],
      ['title' => 'Media Center'],
      ['title' => 'PC Portable'],
      ['title' => 'Disque Dur']
      );
    foreach ($listCategories as $category) {
      // On crée la compétence
      $newCategory = new Category();
      
      foreach ($category as $key => $value) {
        $setter = 'set' . ucfirst($key);
        $newCategory->$setter($value);
      }

      // On la persiste
      $manager->persist($newCategory);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}