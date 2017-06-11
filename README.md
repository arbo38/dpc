dpc
===

A Symfony project created on May 19, 2017, 10:15 am.

# DPC

## Qu'est ce que c'est ?

Ce projet symfony est destiné à une entreprise de vente et réparation de matériel informatique sur Annecy. L'objectif est de leur fournir un site vitrine dynamique ou ils puissent communiquer sur leurs produits et services et permettre à leurs clients de les contacter via le site.
Au programme un CRUD permettant l'ajout de produits, de services, de FAQ etc..

## Les ressources utilisées

Pour ce projet j'ai utilisés entre autres les technos suivantes :
- symfony 3, https://symfony.com/doc/current/index.html
- bootstrap, http://getbootstrap.com/
- jQuery, https://jquery.com/
- google map Javascript API, https://developers.google.com/maps/documentation/javascript
- tinyMCE, un plugin Javascript permettant une interface wysiwyg pour le traitement de text, https://www.tinymce.com/

Les bundles symfony "tiers" utilisés sont les suivants:
- le bundle coresphere pour la console, https://github.com/CoreSphere/ConsoleBundle
- le bundle fosUserBundle pour la gestion des utilisateurs, https://github.com/FriendsOfSymfony/FOSUserBundle
- le bundle VichUploaderBundle pour la gestion de l'upload des fichiers, https://github.com/dustin10/VichUploaderBundle

Concernant le template frontend j'ai avec le client choisi d'utilisé le template _Assan - Multipurpose - 14 Themes + Admin_ disponible ici https://wrapbootstrap.com/theme/assan-multipurpose-14-themes-admin-WB05F069P

## Comment ça marche ?

### Une implémentation de la logie segmentée par bundle

Dans _src/DPC_ se trouvent 7 bundles chacun répondant à un besoin particulier :
- StoreBundle, regroupe l'ensemble des éléments (Entity, repository, controller) relatif aux produits du site(gestion des marques, des catégories, des produits et des images)
- FAQBundle, regroupe l'ensemble des élements relatifs à la foire aux questions
- HomeBundle, regroupe l'ensemble des élements relatifs à la page d'accueil
- Service, regroupe l'ensemble des élements relatifs aux services de l'entreprise
- ContactBundle, regroupe l'ensemble des élements relatifs à la page de contact
- UserBundle, bundle enfant de fosUserBundle pour la personnalisations des vues notamment.
- AdminBundle, regroupe l'ensemble des éléments relatif à l'administration (assets, controller, views etc...). Il utilise l'ensemble des autres bundles et gère la partie administration de leurs entités.

## Les futurs améliorations

### Gestion des slugs et routes dynamiques

Pour aider au référencement et améliorer les routes du sites un Bundle de gestion des slugs sera intégré et les catégories seront éditer afin que leurs noms soit un champ unique (accessible aux futurs paramsConverters). Ainsi les produits seront disponibles sous la forme _nom-catégorie/slug-du-produit_

### Mise en place de paramsConverters

Afin d'alléger le code métier des controllers et grâce aux routes dynamiques des paramsConverters seront mis en place pour toutes les principales entités

### Control du flood pour le formulair de contact via un log par IP

Le formulaire de contact sera amélioré afin de gérer un log ou sera stocké l'IP du client. Un nombre maximum de formulaires par durée de temps et par IP sera mis en place afin de prévenir le flood.

### Ajout d'une Newsletter

Afin d'aider l'entreprise à mieux communiquer avec ses clients un fonctionnalité newsletter sera ajouté.

## Démo

Une démo du site est disponible à l'adresse http://dpc-alpha.terminus-development.net/





