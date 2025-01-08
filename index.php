<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portefolio d'Arthur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href ="public/assets/css/style.css">
    <link href="/src/bouton/bouton.css" rel="stylesheet">
</head>
<body>
<!-- Barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container">
        <a type="submit" href="/index.php" class="btn btn-white text-white">Arthur Colleu</a>
    </div>
</nav>

<!-- Section À propos -->
<section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4 mt-2">À propos de moi</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="public/assets/images/Image_autre/arthur_colleu2.png" style="width: 50% ; height: auto" alt="Photo de profil" class="img-fluid rounded-circle">
            </div>
            <div class="col-md-6">
                Je m'appelle Arthur Colleu et je suis étudiant au Lycée Louis Pergaud à Besançon (25) en deuxième année de BTS SIO (Services Informatiques aux Organisations), spécialité SLAM (Solutions Logiciels et Applications Métiers).
                Je découvers ma passion pour la programmation informatique lors de mon choix de spécialité en 1ère au lycée.
                Je me suis donc tourné vers cette formation après l'obtention de mon BAC Général - Mention Assez Bien en 2023
            </div>
            <div></div>
        </div>
    </div>
</section>
<!-- Section Menu -->
<section id="projects" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="public/assets/images/Image_autre/image_projet.jpg" class="card-img-top" alt="projet">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Mes Projets</h5>
                        <a type="submit" href="/src/pages/projets.php" class="btn btn-warning">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="public/assets/images/Image_autre/image_exp_pro.jpg" class="card-img-top" alt="exp_pro">
                    <div class="card-body">
                        <h5 class="card-title">Expériences professionnelles</h5>
                        <a type="submit" href="src/pages/experience_pro.php" class="btn btn-warning" >Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="public/assets/images/Image_autre/image_certif.png" class="card-img-top" alt="certif">
                    <div class="card-body">
                        <h5 class="card-title">Certifications</h5>
                        <a type="submit" href="src/pages/certification.php" class="btn btn-warning">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section CV -->
<section>
    <div class="container">
        <h1>Arthur Colleu</h1>
        <div class="section">
            <h2>Informations personnelles</h2>
            <p><strong>Téléphone :</strong> 07 69 57 49 03</p>
            <p><strong>Email :</strong> colleuarthur@gmail.com</p>
            <p><strong>Adresse :</strong> 7 rue sous la craie, 25870 Bonnay</p>
            <p><strong>Permis :</strong> Permis B</p>
        </div>

        <div class="section">
            <h2>Compétences</h2>
            <h3>Langues</h3>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p><strong>Français :</strong></p>
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 95%;">95%</div>
                        </div>
                    </div>
                    <div class="col">
                        <p><strong>Anglais :</strong></p>
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 40%;">40%</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p><strong>Espagnol :</strong></p>
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 35%; ">35%</div>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Compétences informatiques</h3>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="d-inline">
                            <p><strong><img src="public/assets/images/Image_autre/python_logo.png" alt="" style="height: 30px"> Python :</strong></p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 65%;">65%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-inline">
                            <p><strong>
                                    <img src="public/assets/images/Image_autre/html_logo.png" alt="" style="height: 30px">
                                    HTML et
                                    <img src="public/assets/images/Image_autre/css_logo.png" alt="" style="height: 30px">
                                    CSS :
                                </strong>
                            </p>
                            <div class="progress-container">
                                <div class="progress-bar"  style="width: 85%;">85%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="d-inline">
                            <p class="mb-2"><strong> <img src="public/assets/images/Image_autre/git_logo.png" alt="" style="height: 30px"> Git :</strong></p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 55%;">55%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-inline">
                            <p class="mb-2"><strong><img src="public/assets/images/Image_autre/javascript_logo.png" alt="" style="height: 30px">Javascript :</strong></p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 35%;">35%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="d-inline">
                            <p class="mb-0"><strong><img src="public/assets/images/Image_autre/SQL_logo.png" alt="" style="height: 30px"> SQL :</strong></p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 65%;">65%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-inline">
                            <p class="mb-2"><strong><img src="public/assets/images/Image_autre/PHP-logo.svg.png" alt="" style="height: 24px"> PHP :</strong></p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 85%;">85%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Expériences professionnelles</h2>
            <ul>
                <li><strong>Été 2023/2024 :</strong> Jobs d’été (Serveur, Inventoriste, Employé libre service, Voirie)</li>
                <li><strong>Juin 2024 :</strong> Stage IDFR - Développement d’un site web sur les statistiques météorologiques en France depuis 1950 (<a href="https://meteo.idfr.net/" target="_blank">Voir le site</a>)</li>
                <li><strong>Août 2022 :</strong> Stage IDFR à Temis Besançon - Développement web</li>
                <li><strong>Stage de 3ème :</strong> Découverte du métier de forestier à l’ONF</li>
            </ul>
        </div>

        <div class="section">
            <h2>Formations</h2>
            <ul>
                <li><strong>Septembre 2023 - Juillet 2024 :</strong> 1ère année BTS SIO - Lycée Pergaud, Besançon</li>
                <li><strong>Septembre 2022 - Juillet 2023 :</strong> Terminale Générale - Lycée Claude Nicolas Ledoux, Besançon</li>
                <li><strong>Septembre 2021 - Juillet 2022 :</strong> Première Générale - Lycée Claude Nicolas Ledoux, Besançon</li>
            </ul>
        </div>

        <div class="section">
            <h2>Diplômes</h2>
            <ul>
                <li>DNB (mention bien)</li>
                <li>Baccalauréat Général (mention assez bien)</li>
            </ul>
        </div>
        <div class="text-center mb-3">
            <a href="/public/assets/images/Image_autre/Arthur_Colleu_CV.pdf" download type="button" class="btn btn-warning">Télécharger mon CV</a>
        </div>
    </div>
</section>
<!-- Section Contact -->
<section id="contact" class="py-4 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Contact</h2>
        <ul class="text-center">
            <i class="bi bi-telephone-fill"></i><div> Tél : 07 69 57 49 03 </div>
            <i class="bi bi-envelope-fill"></i><div> Mail : colleuarthur@gmail.com</div>
        </ul>
    </div>
</section>
<button type="button" class="btn btn-black btn-floating btn-lg " id="btn-back-to-top">
    <i class="bi bi-arrow-up"></i>
</button>
<script src="/src/bouton/bouton.js"></script>

<footer class="bg-dark py-3 text-center">
    <p class="text-white">Portfolio Arthur Colleu</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>