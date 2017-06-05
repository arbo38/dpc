$(document).ready(function() {
    // Container section 3 et 4
    var $containerS3E = $('div#section_3_container');
    var $containerS4E = $('div#section_4_container');
    var $containerSlider = $('div#slider_container');

    // Compteur pour les éléments section 3 et 4
    var indexS3E = $containerS3E.find('.section-3').length;
    var indexS4E = $containerS4E.find('.section-4').length;
    var indexSlider = $containerSlider.find('.slide-form').length;

    // EventListener, ajout d'un élement au click sur le bouton d'ajout (section 3 et 4)
    $('#add_s3e').click(function(e) {
      addS3E($containerS3E);

      e.preventDefault();
      return false;
    });

    $('#add_s4e').click(function(e) {
      addS4E($containerS4E);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    $('#add_slide').click(function(e) {
      addSlider($containerSlider);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });


    // Ajout d'un champ si aucun n'existe (pas d'éléments précédement attaché à l'object)
    if (indexS3E == 0) {
      addS3E($containerS3E);
    } else {
      // S'il existe déjà des élements, on ajoute un lien de suppression pour chacune d'entre elles
      $containerS3E.children('div').each(function() {
        addDeleteLink($(this));
      });
    }

    if (indexS4E == 0) {
      addS4E($containerS4E);
    } else {
      $containerS4E.children('div').each(function() {
        addDeleteLink($(this));
      });
    }

    if (indexSlider == 0) {
      addSlider($containerSlider);
    } else {
      $containerSlider.children('div').each(function() {
        addDeleteLink($(this));
      });
    }

    // Fonction d'ajout d'un élement de section 3
    function addS3E($container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte "__name__label__" qu'il contient par le label du champ
      // - le texte "__name__" qu'il contient par le numéro du champ
      var template = $containerS3E.attr('data-prototype')
      .replace(/__name__label__/g, 'Element N°' + (indexS3E+1))
      .replace(/__name__/g,        indexS3E)
      ;

      // On crée un objet jquery qui contient ce template
      var $prototype = $(template);

      // On ajoute au prototype un lien pour pouvoir supprimer l'élément
      addDeleteLink($prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      $containerS3E.append($prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      indexS3E++;
    }
    // Fonction d'ajout d'un élement de section 4
    function addS4E($container) {
      var template = $container.attr('data-prototype')
      .replace(/__name__label__/g, 'Element N°' + (indexS4E+1))
      .replace(/__name__/g,        indexS4E)
      ;

      var $prototype = $(template);

      addDeleteLink($prototype);

      $container.append($prototype);

      indexS4E++;
    }

    function addSlider($container) {
      var template = $container.attr('data-prototype')
      .replace(/__name__label__/g, 'Slide N°' + (indexSlider+1))
      .replace(/__name__/g,        indexSlider)
      ;

      var $prototype = $(template);

      addDeleteLink($prototype);

      $container.append($prototype);

      indexSlider++;
    }

    // La fonction qui ajoute un lien de suppression pour un élement
    function addDeleteLink($prototype) {
      // Création du lien
      var $deleteLink = $('<a href="#" class="btn btn-sm btn-danger rounded">Supprimer élement</a>');
      // Ajout du lien
      $prototype.find('.delete-button').append($deleteLink);
      // Ajout du listener sur le clic du lien pour effectivement supprimer l'élément
      $deleteLink.click(function(e) {
        $prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });