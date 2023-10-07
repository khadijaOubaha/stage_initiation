document.addEventListener("DOMContentLoaded", function() {
    const navAccueil = document.querySelector("#nav-accueil");
    const navApropos = document.querySelector("#nav-apropos");
    const navTemoignage = document.querySelector("#nav-temoignage");
    const navService = document.querySelector("#nav-service");
    const navContact = document.querySelector("#nav-contact");
    
    function underlineRed(element) {
        element.style.textDecoration = "underline #dad655";
    }

    // Fonction pour réinitialiser le soulignement d'un élément de navigation
    function resetUnderline(element) {
        element.style.textDecoration = "";
    }


    navAccueil.addEventListener("mouseenter", function() {
        navAccueil.style.color = "#dad655"; // Changez la couleur ici (par exemple, bleu)
    });

    navAccueil.addEventListener("mouseleave", function() {
        navAccueil.style.color = ""; // Réinitialisez la couleur lorsque la souris quitte
    });

    navApropos.addEventListener("mouseenter", function() {
        navApropos.style.color = "#dad655"; // Changez la couleur ici (par exemple, vert)
    });

    navApropos.addEventListener("mouseleave", function() {
        navApropos.style.color = ""; // Réinitialisez la couleur lorsque la souris quitte
    });

    
    navTemoignage.addEventListener("mouseenter", function() {
        navTemoignage.style.color = "#dad655"; // Changez la couleur ici (par exemple, vert)
    });

    navTemoignage.addEventListener("mouseleave", function() {
        navTemoignage.style.color = ""; // Réinitialisez la couleur lorsque la souris quitte
    });

    navService.addEventListener("mouseenter", function() {
        navService.style.color = "#dad655"; // Changez la couleur ici (par exemple, vert)
    });

    navService.addEventListener("mouseleave", function() {
        navService.style.color = ""; // Réinitialisez la couleur lorsque la souris quitte
    });

    navContact.addEventListener("mouseenter", function() {
        navContact.style.color = "#dad655"; // Changez la couleur ici (par exemple, vert)
    });

    navContact.addEventListener("mouseleave", function() {
        navContact.style.color = ""; // Réinitialisez la couleur lorsque la souris quitte
    });
    navAccueil.addEventListener("mouseenter", function() {
        underlineRed(navAccueil);
    });

    navAccueil.addEventListener("mouseleave", function() {
        resetUnderline(navAccueil);
    });

    navApropos.addEventListener("mouseenter", function() {
        underlineRed(navApropos);
    });

    navApropos.addEventListener("mouseleave", function() {
        resetUnderline(navApropos);
    });

    navTemoignage.addEventListener("mouseenter", function() {
        underlineRed(navTemoignage);
    });

    navTemoignage.addEventListener("mouseleave", function() {
        resetUnderline(navTemoignage);
    });

    navService.addEventListener("mouseenter", function() {
        underlineRed(navService);
    });

    navService.addEventListener("mouseleave", function() {
        resetUnderline(navService);
    });

    navContact.addEventListener("mouseenter", function() {
        underlineRed(navContact);
    });

    navContact.addEventListener("mouseleave", function() {
        resetUnderline(navContact);
    });


});
