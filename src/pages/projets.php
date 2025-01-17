<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portefolio d'Arthur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="/src/bouton/bouton.css" rel="stylesheet">
    <link rel="stylesheet" href ="../../public/assets/css/style.css">


</head>
<body>
<!-- Barre de navigation -->
<nav class='navbar navbar-expand-lg navbar-light bg-dark fixed-top' data-bs-theme="dark">
    <div class="container">
        <a class='btn btn-white text-white text-center link-underline link-underline-opacity-0' href="../../index.php">Accueil</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='container-fluid'>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <div class=' ms-auto navbar-nav'>
                    <a class='btn btn-white mx-2 text-white text-center link-underline link-underline-opacity-0' href="projets.php">Projets</a>
                    <a class='btn btn-white mx-2 text-white text-center link-underline link-underline-opacity-0' href="certification.php">Certifications</a>
                    <a class='btn btn-white mx-2 text-white text-center link-underline link-underline-opacity-1' href="experience_pro.php">Experience professionelle</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<button type="button" class="btn btn-black btn-floating btn-lg" id="btn-back-to-top">
    <i class="bi bi-arrow-up"></i>
</button>
<script src="/src/bouton/bouton.js"></script>
<!-- Contenu du projet -->
<div class="container my-5">
    <h1 class="my-5">Projet Réseau : Réaménagement d'une salle de classe</h1>

    <div class="row mb-4">
        <div class="col-md-6">
            <img src="../../public/assets/images/Projet_Reseau/plan_reseau_3D_2.PNG" alt="Plan de la salle réseau" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2>Objectif du Projet</h2>
            <p>Ce projet consistait à transformer une salle de classe traditionnelle en une salle de réseau moderne et
                fonctionnelle. L'objectif était de créer un espace d'apprentissage pratique pour les étudiants en
                informatique et en réseaux.</p>
        </div>
    </div>

    <div class="text-center">
        <h2>Le devis</h2>
        <object data="../../public/assets/images/Projet_Reseau/Devis_N°1_Dominique_DAVID.pdf" type="application/pdf" style="width: 45em; height: 54.45em;"></object>
    </div>
    <div>
        <h2 class="text-center mt-5 mb-3">Images 3D de la salle de classe informatique en réseau</h2>
        <div class="row mb-5">
            <div class="row  justify-content-center">
                <div class="col-md-6 my-2">
                    <img src="../../public/assets/images/Projet_Reseau/plan_reseau_3D_2.PNG" alt="Plan de la salle réseau" class="img-fluid rounded" style="height: 100%">
                </div>
                <div class="col-md-6 my-2">
                    <img src="../../public/assets/images/Projet_Reseau/plan_reseau_3D_4.PNG" alt="Plan de la salle réseau" class="img-fluid rounded" style="height: 100%">
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-4">Projet de Terminal : Programmation en python d'un jeu</h1>

    <div class="row mb-4">
        <div class="col-md-6">
            <h2>Objectif du projet</h2>
            L'objectif principal de ce projet était de créer un jeu interactif en utilisant le langage de programmation
            Python, tout en approfondissant nos compétences en programmation. Nous avons utilisé la bibliothèque Tkinter,
            une bibliothèque Python permettant l'ouverture d'une fenêtre graphique. Nous permettant d'afficher l'interface du jeu.
        </div>
        <div class="col-md-6">
            <img src="../../public/assets/images/Projet_Jeu/Capture_jeu_projet.PNG" alt="Équipements réseau installés" class="img-fluid rounded">
        </div>
    </div>

    <div class="col mb-4 text-center">
        <h2>Interface</h2>
        <div class="row justify-content-center">
            <img src="../../public/assets/images/Projet_Jeu/Capture_jeu_projet.PNG" style="width: 75% ; height: 75%" alt="Équipements réseau installés"
                 class="img-fluid rounded">
        </div>
        <div class="row justify-content-center">
            <img src="../../public/assets/images/Projet_Jeu/Capture_menu_jeu_projet.PNG" style="width: 75% ; height: 75%"
                 alt="Équipements réseau installés" class="img-fluid rounded">
        </div>
    </div>
    <h1 class="mb-4">Projet Film : Programmation d'un site de film</h1>

    <div class="row mb-4">
        <div class="col-md-6">
            <img src="../../public/assets/images/Projet_Film/Capture_accueil_projet_film.PNG" alt="Plan de la salle réseau" style="width: 100%" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2>Objectif du Projet</h2>
            <p>Ce projet consistait à programmer , en html et en utilisant bootstrap , un site web listant des films
                avec leurs détails (résumé, date de sortie, pays de production ).</p>
        </div>
    </div>
    <div class="col mb-4 text-center">
        <h2>Page de détails d'un film</h2>
        <img src="../../public/assets/images/Projet_Film/Capture_exemple_détails_film.PNG" style="width: 75% ; height: 75%" alt="Équipements réseau installés"
             class="img-fluid rounded">
    </div>
    <div>
        <h2 class="mb-4 text-center">Projet : Gestion de sanction</h2>

        <div class="row mb-4">
            <div class="col-md-6">
                <a data-bs-toggle="modal" data-bs-target="#certifCNIL1"><img src="../../public/assets/images/Projet_gestion-sanction/page_accueil_gestion-sanction.png" alt="Plan de la salle réseau" style="width: 100%" class="img-fluid border rounded"></a>
            </div>
            <div class="col-md-6">
                <h2>Objectif du Projet</h2>
                <p>Le projet consistait en la programmation d'un site web de gestion de sanctions.
                    L'objectif était de développer diverses fonctionnalités comme la création de compte, la connexion, l'ajout d'élève via un fichier csv.</p>
            </div>
        </div>
    </div>

    <!-- Modal Projet Gestion sanctions -->
    <div class="modal fade" id="certifCNIL1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="../../public/assets/images/Projet_gestion-sanction/page_accueil_gestion-sanction.png" alt="Plan de la salle réseau" style="width: 100%;height: 100%" class="img-fluid border rounded">
                </div>
                <div class="modal-footer">
                    <p>Le projet consistait en la programmation d'un site web de gestion de sanctions.
                        L'objectif était de développer diverses fonctionnalités comme la création de compte, la connexion, l'ajout d'élève via un fichier csv.</p>
                </div>
            </div>
        </div>
    </div>
    <!---<div class="text-center">
        <h2 class="text-center mt-5 mb-3">Projet: Site sur le gestion de sanctions</h2>
        <div class="row ">
            <div class="row  ">
                <div class="col-md-6 my-2 ">
                    <img src="../../public/assets/images/Projet_gestion-sanction/page_connexion_gestion-sanction.png" alt="..." class="img-fluid rounded flex-grow-0" style="height: 75%">
                </div>
                <div class="col-md-6 my-2">
                    <img src="../../public/assets/images/Projet_gestion-sanction/page_creation_compte_gestion-sanction.png" alt="..." class="img-fluid rounded" style="height: 75%">
                </div>
            </div>
            <div class="row  justify-content-center">
                <div class="col-md-6 my-2">
                    <img src="../../public/assets/images/Projet_gestion-sanction/page_ajout_eleve_gestion-sanction.png" alt="..." class="img-fluid rounded" style="height: 50%">
                </div>
                <div class="col-md-6 my-2">
                    <img src="../../public/assets/images/Projet_gestion-sanction/page_creation_sanction_gestion-sanction.png" alt="..." class="img-fluid rounded" style="height: 100%">
                </div>
            </div>
        </div>
    </div>-->
</div>

<footer class="bg-dark py-3 text-center">
    <p class="text-white"> Portfolio Arthur Colleu</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>