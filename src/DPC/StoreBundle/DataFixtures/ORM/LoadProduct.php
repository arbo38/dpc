<?php

namespace DPC\StoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DPC\StoreBundle\Entity\Product;

class LoadProduct implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $listProducts = array(
      // Promos
        ['title' => 'PC Gamer', 'date' => new \Datetime('2017-03-15'), 'description' => 'Ce PC est génial vous devriez l\'acheter.', 'price' => 500.50, 'discount' => 20, 'occasion' => false, 'promo' => true,  'updateDate' => new \Datetime('2017-04-14')],
        ['title' => 'PC Bureautique', 'date' => new \Datetime('2017-04-05'), 'description' => 'Un PC rapide et performant pour tous vos besoins bureautique.', 'price' => 299.99, 'discount' => 15, 'occasion' => false, 'promo' => true,  'updateDate' => new \Datetime('2017-04-27')],
        ['title' => 'Media Center', 'date' => new \Datetime('2017-05-11'), 'description' => 'Un PC compact et silencieux pour transformez votre téléviseur en Media Center!', 'price' => 500.50, 'discount' => 35, 'occasion' => false, 'promo' => true,  'updateDate' => null],
        ['title' => 'Carte Graphique 970GTX', 'date' => new \Datetime('2017-05-04'), 'description' => 'Une carte graphique capable de faire tourner tous les jeux récent', 'price' => 299.99, 'discount' => 20, 'occasion' => false, 'promo' => true,  'updateDate' => null],
        ['title' => 'Intel Core i5 6600K', 'date' => new \Datetime('2017-03-18'), 'description' => 'Un processeur à la hauteur des attentes de tous les joueurs', 'price' => 349.99, 'discount' => 10, 'occasion' => false, 'promo' => true,  'updateDate' => new \Datetime('2017-05-20')],
        ['title' => 'SSD Samsung 850evo 250Go', 'date' => new \Datetime('2017-04-01'), 'description' => 'Votre ordinateur n\'aura jamais si rapique qu\'avec ce magnifique SSD Samsung!', 'price' => 149.99, 'discount' => 15, 'occasion' => false, 'promo' => true,  'updateDate' => null],
        ['title' => 'Ecran Asus Full HD', 'date' => new \Datetime('2017-05-06'), 'description' => 'Magnifique écran, adapté à la bureautique comme au gaming', 'price' => 199.99, 'discount' => 40, 'occasion' => false, 'promo' => true,  'updateDate' => null],
        // Occasions
        ['title' => 'PC Portable Asus', 'date' => new \Datetime('2017-03-15'), 'description' => 'PC Portable de marque Asus d\'occasion, parfait pour la bureautique en mobilité.', 'price' => 199.99, 'discount' => null, 'occasion' => true, 'promo' => false,  'updateDate' => new \Datetime('2017-04-14')],
        ['title' => 'Clavier sans fil Microsoft', 'date' => new \Datetime('2017-05-06'), 'description' => 'Clavier Microsoft en très bon état', 'price' => 9.99, 'discount' => null, 'occasion' => true, 'promo' => false,  'updateDate' => null],
        ['title' => 'PC Gamer - Core i7, 980GTX', 'date' => new \Datetime('2017-04-24'), 'description' => 'Un PC d\'une puissance hors norme prêt à ravir les joueurs les plus exigeants.', 'price' => 599.99, 'discount' => null, 'occasion' => true, 'promo' => false,  'updateDate' => new \Datetime('2017-05-10')],
        ['title' => 'PC Bureautique - Core i3, 8Go, SSD 250Go', 'date' => new \Datetime('2017-05-06'), 'description' => 'Un PC bureautique haut de gamme, rapide et performant', 'price' => 249.99, 'discount' => null, 'occasion' => true, 'promo' => false,  'updateDate' => null],
        ['title' => 'Téléphone - Samsung Galaxy S4', 'date' => new \Datetime('2017-05-10'), 'description' => 'Téléphone Samsung Galaxy S4 garantie 6 mois.', 'price' => 129.99, 'discount' => null, 'occasion' => true, 'promo' => false,  'updateDate' => new \Datetime('2017-05-11')],
        ['title' => 'Ecran Asus Full HD 20 pouces', 'date' => new \Datetime('2017-05-06'), 'description' => 'Bel écran, très bon état, garantie 6 mois.', 'price' => 79.99, 'discount' => null, 'occasion' => true, 'promo' => false,  'updateDate' => null],
        ['title' => 'PC Portable Placard Bell', 'date' => new \Datetime('2017-04-28'), 'description' => 'Chauffe et fais du bruit, plante souvent', 'price' => 999.99, 'discount' => null, 'occasion' => true, 'promo' => false,  'updateDate' => new \Datetime('2017-05-20')]
        );

    foreach ($listProducts as $product) {
      // On crée la compétence
      $newProduct = new Product();
      
      foreach ($product as $key => $value) {
        $setter = 'set' . ucfirst($key);
        $newProduct->$setter($value);
      }

      // On la persiste
      $manager->persist($newProduct);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}