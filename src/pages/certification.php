
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portefolio d'Arthur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="/public/assets/css/certification.css" rel="stylesheet">
    <link href="/src/bouton/bouton.css" rel="stylesheet">
    <link rel="stylesheet" href ="../../public/assets/css/style.css">

</head>
<body>
<!---<div class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="icon">
                    <i class="bi bi-house-fill"></i>
                </span>
                <span class="text"> Accueil</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon">
                    <i class="bi bi-lightbulb-fill"></i>
                </span>
                <span class="text">Projets</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon">
                    <i class="bi bi-patch-check-fill"></i>
                </span>
                <span class="text">Certifications</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon">
                    <i class="bi bi-person-circle"></i>
                </span>
                <span class="text">Experience professionelle</span>
            </a>
        </li>
    </ul>

</div>--->
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
<div class="container">
    <h4 class="text-center mb-3 mt-5">Certifications en ligne</h4>
    <div class="conteneur">
        <div class="box CNIL"><a href="#partie_CNIL"><img  class="image_CNIL"  src="../../public/assets/images/Images_Certifications/CNIL_logo.png" height="150" width="399" alt=""></a></div>
        <div class="box PIX"><a href="#partie_PIX"><img class="image_PIX" src="../../public/assets/images/Images_Certifications/1200px-Pix_logo.svg.png" height="210" width="300" alt=""></a></div>
        <div class="box ANSSI"><a href="#partie_ANSSI"><img class="image_ANSSI" src="../../public/assets/images/Images_Certifications/1200px-ANSSI_Logo.svg.png" height="300" width="300" alt=""></a></div>
    </div>
    <div class="body_principal">
        <h2 id="partie_CNIL" class="text-center">CNIL</h2>
        <div  class="conteneur_CNIL">
            <div  class="box CNIL_1"><a data-bs-toggle="modal" data-bs-target="#certifCNIL1" href="/public/assets/images/Images_Certifications/Certificat_CNIL_module1.png"><img src="../../public/assets/images/Images_Certifications/Certificat_CNIL_module1.png" height="400" width="566" alt=""></a></div>
            <div  class="box CNIL_2"><a data-bs-toggle="modal" data-bs-target="#certifCNIL2" href="/public/assets/images/Images_Certifications/Certificat_CNIL_module2.png"><img src="../../public/assets/images/Images_Certifications/Certificat_CNIL_module2.png" height="400" width="566" alt=""></a></div>
            <div  class="box CNIL_3"><a data-bs-toggle="modal" data-bs-target="#certifCNIL3" href="/public/assets/images/Images_Certifications/Certificat_CNIL_module3.png"><img src="../../public/assets/images/Images_Certifications/Certificat_CNIL_module3.png" height="400" width="566" alt=""></a></div>
            <div  class="box CNIL_4"><a data-bs-toggle="modal" data-bs-target="#certifCNIL4" href="/public/assets/images/Images_Certifications/Certificat_CNIL_module4.png"><img src="../../public/assets/images/Images_Certifications/Certificat_CNIL_module4.png" height="400" width="566" alt=""></a></div>
            <div  class="box CNIL_5"><a data-bs-toggle="modal" data-bs-target="#certifCNIL5" href="/public/assets/images/Images_Certifications/Certificat_CNIL_module5.png"><img src="../../public/assets/images/Images_Certifications/Certificat_CNIL_module5.png" height="400" width="566" alt=""></a></div>
        </div>
        <h2 id="partie_ANSSI" class="text-center my-4">ANSSI</h2>
        <div  class="conteneur_ANSSI">
            <div  class="box ANSSI_1"><a data-bs-toggle="modal" data-bs-target="#certifANSSI"><img src="../../public/assets/images/Images_Certifications/Certificat_ANSSi.png" height="300" width="490" alt=""></a></div>
        </div>
        <h2 id="partie_PIX" class="text-center mb-4">PIX</h2>
        <div  class="conteneur_PIX mb-2">
            <div  class="box PIX_1 "><a data-bs-toggle="modal" data-bs-target="#certifPIX"><img src="../../public/assets/images/Images_Certifications/attestation-pix.png" height="833" width="500" alt=""></a></div>
        </div>
    </div>
</div>

<!-- Modal CNIL1 -->
<div class="modal fade" id="certifCNIL1" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a href="/public/assets/images/Images_Certifications/Certificat_CNIL_module1.png" download type="button" class="btn btn-primary">Télécharger</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../../public/assets/images/Images_Certifications/Certificat_CNIL_module1.png" class="img-fluid mb-3" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Modal CNIL2 -->
<div class="modal fade" id="certifCNIL2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a href="/public/assets/images/Images_Certifications/Certificat_CNIL_module2.png" download type="button" class="btn btn-primary">Télécharger</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../../public/assets/images/Images_Certifications/Certificat_CNIL_module2.png" class="img-fluid mb-3" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Modal CNIL3 -->
<div class="modal fade" id="certifCNIL3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a href="/public/assets/images/Images_Certifications/Certificat_CNIL_module3.png" download type="button" class="btn btn-primary">Télécharger</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../../public/assets/images/Images_Certifications/Certificat_CNIL_module3.png" class="img-fluid mb-3" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Modal CNIL4 -->
<div class="modal fade" id="certifCNIL4" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a href="/public/assets/images/Images_Certifications/Certificat_CNIL_module4.png" download type="button" class="btn btn-primary">Télécharger</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../../public/assets/images/Images_Certifications/Certificat_CNIL_module4.png" class="img-fluid mb-3" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Modal CNIL5 -->
<div class="modal fade" id="certifCNIL5" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a href="/public/assets/images/Images_Certifications/Certificat_CNIL_module5.png" download type="button" class="btn btn-primary">Télécharger</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../../public/assets/images/Images_Certifications/Certificat_CNIL_module5.png" class="img-fluid mb-3" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Modal PIX -->
<div class="modal fade" id="certifPIX" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a href="/public/assets/images/Images_Certifications/attestation-pix.pdf" download type="button" class="btn btn-primary">Télécharger</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../../public/assets/images/Images_Certifications/attestation-pix.png" class="img-fluid mb-3" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Modal ANSSI -->
<div class="modal fade" id="certifANSSI" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a href="/public/assets/images/Images_Certifications/attestation-anssi.pdf" download type="button" class="btn btn-primary">Télécharger</a>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="../../public/assets/images/Images_Certifications/Certificat_ANSSi.png" class="img-fluid mb-3" alt="">
            </div>
        </div>
    </div>
</div>
<footer class="bg-dark py-3 text-center">
    <p class="text-white">Portfolio Arthur Colleu</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>