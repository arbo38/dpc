$(document).ready(function() {
    // Container Image form
    var $containerImage = $('div#images_container');

    // Compteur pour les éléments images
    var indexImage = $containerImage.find('.image-form').length;

    // EventListener, ajout d'un élement au click sur le bouton d'ajout (section 3 et 4)
    $('#add_image').click(function(e) {
      addImage($containerImage);

      e.preventDefault();
      return false;
    });

    if (indexImage == 0) {
      addImage($containerImage);
    } else {
      $containerImage.children('div').each(function() {
        addDeleteLink($(this));
      });
    }

    function addImage($container) {
      var template = $container.attr('data-prototype')
      .replace(/__name__label__/g, 'Image N°' + (indexImage+1))
      .replace(/__name__/g,        indexImage)
      ;

      var $prototype = $(template);

      addDeleteLink($prototype);

      $container.append($prototype);

      indexImage++;
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