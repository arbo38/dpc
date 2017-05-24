<?php

namespace DPC\StoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DPC\StoreBundle\Entity\Image;

class LoadImage implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $listImages = array(
      ['title' => 'Composants', 'url' => 'https://www.topachat.com/comprendre/monter-son-pc/images-news/montage-compos.jpg' , 'alt' =>'Image 1'],
      ['title' => 'Carte graphique', 'url' => 'http://www.materiel.net/minisites/assets/composants/images/cartes-graphiques.jpg', 'alt' => 'Image 2'],
      ['title' => 'Disque Dur', 'url' => 'http://www.materiel.net/minisites/assets/composants/images/disques-durs.jpg', 'alt' =>'Image 3'],
      ['title' => 'Ram', 'url' => 'http://www.materiel.net/minisites/assets/composants/images/ram.jpg' , 'alt' =>'Image 4'],
      ['title' => 'Boitier', 'url' => 'http://www.materiel.net/live/385558.jpg' , 'alt' =>'Image 5'],
      ['title' => 'PC Portable', 'url' => 'http://www.materiel.net/live/379804.jpg', 'alt' =>'Image 6']
      );
    
    foreach ($listImages as $image) {
      // On crée la compétence
      $newImage = new Image();
      
      foreach ($image as $key => $value) {
        $setter = 'set' . ucfirst($key);
        $newImage->$setter($value);
      }

      // On la persiste
      $manager->persist($newImage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}