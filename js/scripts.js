/*--------------------------------------------------------------------------------------------
    Fichier: scripts.js
    Auteur: Alexandre Gilbert
    Description: Contient tous les événements côté client.
--------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------------------
                                       Barre de navigation
--------------------------------------------------------------------------------------------*/
/* Changement dynamique du lien actif lors d'un changement de page dans la barre navigation. */
function setActivePage() {

    /* Enlever tout lien actif dans la barre de navigation */
    $('.navbar-nav').find('li.active').removeClass('active');

    /* Obtenir le répertoire de la page active */
    var path = window.location.pathname;

    /* Obtenir le nom de la page sans l'extension de fichier */

    path = path.split('/'); // Sépare tous les termes du chemin d'accès.

    if(path[4]) {
        path = path[4].split('.'); // Sépare le nom et l'extension.
    }

    else if(path[3]) {
        path = path[3].split('.'); // Sépare le nom et l'extension.
    }

    else if(path[2]) {
        path = path[2].split('.'); // Sépare le nom et l'extension.
    }

    else if(!path[2]) {
        path = path[1].split('.'); // Sépare le nom et l'extension.
    }
    
    // Garde juste le nom de la page.
    path = path[0];

    /* Changer le lien actif associé à cette page dans la barre de navigation */
    switch(path) {
        case "":
            $('#navLink0').addClass('active');
            break;
        case "index":
            $('#navLink0').addClass('active');
            break;
        case "candidates":
            $('#navLink1').addClass('active');
            break;
        case "employers":
            $('#navLink2').addClass('active');
            break;
        case "services":
            $('#navLink3').addClass('active');
            break;
        case "about":
            $('#navLink4').addClass('active');
            break;
        case "contact":
            $('#navLink5').addClass('active');
            break;
        case "register":
            $('#navLink6').addClass('active');
            break;
        case "login":
            $('#navLink7').addClass('active');
            break;
    }
}