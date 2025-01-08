<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portefolio d'Arthur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="/src/bouton/bouton.css" rel="stylesheet">
    <link rel="stylesheet" href ="../../public/assets/css/style.css">

</head>
<body>
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
                    <a class='btn btn-white mx-2 text-white text-center link-underline link-underline-opacity-1' href="experience_pro.php">Experiences professionnelles</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<button type="button" class="btn btn-black btn-floating btn-lg" id="btn-back-to-top">
    <i class="bi bi-arrow-up"></i>
</button>
<script src="/src/bouton/bouton.js"></script>
<main class="container mt-5">
    <h1 class="mb-4 mt-2">Mes Expériences Professionnelles</h1>
    <div class="timeline">
        <div class="timeline-item">
            <h3>Stage de 3ème</h3>
            <h4>Entreprise ONF (Office National des Forêts )</h4>
            <p class="text-muted"></p>
            <p>Description des responsabilités et découvertes du métiers: </p>
            <ul>
                <li>Découverte du métier de forestiers</li>
                <li>Observations de secteurs forestiers</li>
                <li>Observations de l'abattage d'arbres malades</li>
                <li>Comptabilisation de la population d'arbres au sein des forêts aux alentours de Besançon</li>
            </ul>
        </div>

        <div class="timeline-item">
            <h3>Stage volontaire en entreprise</h3>
            <h4>Entreprise IDfr</h4>
            <p class="text-muted">Observation du métier de développeur web</p>
            <ul>
                <li>Découverte du métier de développeur en entreprise</li>
                <li>Gestion des projets en entreprise</li>
            </ul>
        </div>

        <div class="timeline-item">
            <h3>Stage de 1ère année de BTS SIO ( Services Informatiques aux Organisations )</h3>
            <h4>Entreprise IDfr</h4>
            <p class="text-muted">Juin 2024</p>
            <p>Description des responsabilités et réalisations principales :</p>
            <ul>
                <li>Contribution au développement de sites web pour divers clients</li>
                <li>Apprentissage des meilleures pratiques de développement web</li>
            </ul>
            <p>Technologies utilisées : HTML, CSS, JavaScript, PHP , SQL</p>
        </div>
    </div>

    <section class="mt-5">
        <h2>Compétences acquises</h2>
        <div class="row mt-3">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-code me-2"></i>Développement Web</h5>
                        <p class="card-text">Maîtrise des technologies back-end</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-project-diagram me-2"></i>Gestion de Projet</h5>
                        <p class="card-text">Expérience dans la planification de projets</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-check-fill"></i> Autonomie</h5>
                        <p class="card-text">Collaboration au sein d'équipes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="bg-dark py-3 text-center">
    <p class="text-white"> Portfolio Arthur Colleu</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>