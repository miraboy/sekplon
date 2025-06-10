<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sèkplon Mirabel DOTOU - Développeur Web/Mobile & Designer Graphique</title>
    <meta name="description" content="Portfolio de Sèkplon Mirabel DOTOU, développeur Web/Mobile et designer graphique à Cotonou, Bénin. Découvrez ses projets, compétences et contactez-le.">
    <meta property="og:title" content="Sèkplon Mirabel DOTOU - Développeur Web/Mobile & Designer Graphique">
    <meta property="og:description" content="Portfolio de Sèkplon Mirabel DOTOU, développeur web et designer graphique à Cotonou, Bénin.">
    <meta property="og:type" content="website">
    <link rel="icon" href="favicon.ico">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Sèkplon Mirabel DOTOU</a>
            
            <div class="d-flex align-items-center order-lg-2">
                <button class="btn theme-toggle me-2" onclick="toggleTheme()" aria-label="Changer le thème">
                    <i class="bi bi-moon-stars" id="theme-icon"></i>
                </button>
                <button class="btn lang-toggle me-3" onclick="toggleLanguage()" aria-label="Changer la langue">
                    <span id="lang-text">EN</span>
                </button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse order-lg-1" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home" data-fr="Accueil" data-en="Home">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about" data-fr="À propos" data-en="About">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects" data-fr="Projets" data-en="Projects">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills" data-fr="Compétences" data-en="Skills">Compétences</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cv" data-fr="CV" data-en="Resume">CV</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" data-fr="Contact" data-en="Contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 hero-content" data-aos="fade-up">
                    <h1 class="hero-title">Sèkplon Mirabel DOTOU</h1>
                    <p class="hero-subtitle" data-fr="Développeur Web/Mobile & Designer Graphique Passionné" data-en="Passionate Web Developer & Graphic Designer">
                        Développeur Web/Mobile & Designer Graphique Passionné
                    </p>
                    <p class="lead mb-4" data-fr="Je conçois des solutions numériques élégantes et fonctionnelles pour donner vie à vos idées. Spécialisé en développement web moderne et création graphique professionnelle." data-en="I design elegant and functional digital solutions to bring your ideas to life. Specialized in modern web development and professional graphic design.">
                        Je conçois des solutions numériques élégantes et fonctionnelles pour donner vie à vos idées. Spécialisé en développement web moderne et création graphique professionnelle.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#projects" class="btn btn-primary" data-fr="Voir mes projets" data-en="View My Projects">
                            <i class="bi bi-eye me-2"></i>Voir mes projets
                        </a>
                        <a href="#contact" class="btn btn-outline-primary" data-fr="Me contacter" data-en="Contact Me">
                            <i class="bi bi-envelope me-2"></i>Me contacter
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-center" data-aos="fade-left">
                    <img src="images/moi.jpg" alt="Sèkplon Mirabel DOTOU" class="img-fluid rounded m-3" style="max-width: 300px;width:100%;height:auto;object-fit:contain;display:block;">
                </div>
            </div>
        </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="section-title" data-fr="À propos de moi" data-en="About Me">À propos de moi</h2>
            <div class="row align-items-center">
                
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="mb-4" data-fr="Développeur passionné du Bénin" data-en="Passionate Developer from Benin">Développeur passionné du Bénin</h3>
                    <p class="mb-4" data-fr="Diplômé en Génie Logiciel de l'IFRI-UAC, je suis un développeur web créatif basé à Cotonou, Bénin. Avec plusieurs années d'expérience, je me spécialise dans la création de sites web modernes et d'identités visuelles marquantes." data-en="Graduate in Software Engineering from IFRI-UAC, I am a creative web developer based in Cotonou, Benin. With several years of experience, I specialize in creating modern websites and striking visual identities.">
                        Diplômé en Génie Logiciel de l'IFRI-UAC, je suis un développeur web créatif basé à Cotonou, Bénin. Avec plusieurs années d'expérience, je me spécialise dans la création de sites web modernes et d'identités visuelles marquantes.
                    </p>
                    <p class="mb-4" data-fr="Mon approche combine expertise technique et sens artistique pour livrer des solutions qui dépassent les attentes. Je maîtrise tant le développement back-end avec PHP que le design graphique professionnel." data-en="My approach combines technical expertise and artistic sense to deliver solutions that exceed expectations. I master both back-end development with PHP and professional graphic design.">
                        Mon approche combine expertise technique et sens artistique pour livrer des solutions qui dépassent les attentes. Je maîtrise tant le développement back-end avec PHP que le design graphique professionnel.
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><i class="bi bi-geo-alt text-primary me-2"></i><span data-fr="Localisation" data-en="Location">Localisation</span></h5>
                            <p>Pahou, Bénin</p>
                        </div>
                        <div class="col-sm-6">
                            <h5><i class="bi bi-translate text-primary me-2"></i><span data-fr="Langues" data-en="Languages">Langues</span></h5>
                            <p data-fr="Français, Anglais, Fon" data-en="French, English, Fon">Français, Anglais, Fon</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="card text-center p-4">
                                <i class="bi bi-code-slash text-primary mb-3" style="font-size: 3rem;"></i>
                                <h4 data-fr="Développement" data-en="Development">Développement</h4>
                                <p class="mb-0" data-fr="Sites web modernes et applications sur mesure" data-en="Modern websites and custom applications">Sites web modernes et applications sur mesure</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card text-center p-4">
                                <i class="bi bi-palette text-primary mb-3" style="font-size: 3rem;"></i>
                                <h4 data-fr="Design" data-en="Design">Design</h4>
                                <p class="mb-0" data-fr="Identité visuelle et supports graphiques" data-en="Visual identity and graphic materials">Identité visuelle et supports graphiques</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section py-5">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        
        <div class="container position-relative" style="z-index: 2;">
            <h2 class="section-title" data-fr="Mes Projets" data-en="My Projects">Mes Projets</h2>
            
            <div class="row g-4 justify-content-center">
                <!-- Développement Web Card -->
                <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-duration="400">
                    <div class="project-card" role="button" data-bs-toggle="modal" data-bs-target="#modalDev">
                        <div class="project-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <h5 class="project-title" data-fr="Développement Web" data-en="Web Development">
                            Développement Web/Mobile
                        </h5>
                        <p class="project-description" data-fr="Applications et sites web modernes développés avec les dernières technologies." data-en="Modern websites and applications built with the latest technologies.">
                            Applications et sites web modernes développés avec les dernières technologies.
                        </p>
                        <div class="project-tags">
                            <span class="project-tag">HTML5</span>
                            <span class="project-tag">CSS3</span>
                            <span class="project-tag">JavaScript</span>
                            <span class="project-tag">PHP</span>
                        </div>
                        <div class="text-center">
                            <span class="project-link">
                                Découvrir les projets <i class="bi bi-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Conception Graphique Card -->
                <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-duration="400" data-aos-delay="200">
                    <div class="project-card" role="button" data-bs-toggle="modal" data-bs-target="#modalGraph">
                        <div class="project-icon">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h5 class="project-title" data-fr="Conception Graphique" data-en="Graphic Design">
                            Conception Graphique
                        </h5>
                        <p class="project-description" data-fr="Créations visuelles impactantes : identités de marque, supports print et digitaux." data-en="Impactful visual creations: brand identities, print and digital materials.">
                            Créations visuelles impactantes : identités de marque, supports print et digitaux.
                        </p>
                        <div class="project-tags">
                            <span class="project-tag">Canva</span>
                            <span class="project-tag">Branding</span>
                            <span class="project-tag">Print Design</span>
                            <span class="project-tag">Digital</span>
                        </div>
                        <div class="text-center">
                            <span class="project-link">
                                Voir la galerie <i class="bi bi-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Développement Web -->
        <div class="modal px-0" id="modalDev" tabindex="-1" aria-labelledby="modalDevLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDevLabel">
                            <i class="bi bi-code-slash me-2"></i>
                            Projets Développement Web/Mobile
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="project-item">
                            <h6><i class="bi bi-person-badge me-2 text-primary"></i>Mon Portfolio Personnel</h6>
                            <p>Site vitrine responsive développé avec HTML5, CSS3, JavaScript et Bootstrap. Intègre des animations modernes et une interface utilisateur optimisée.</p>
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                <span class="badge bg-primary">HTML5</span>
                                <span class="badge bg-info">CSS3</span>
                                <span class="badge bg-warning">JavaScript</span>
                                <span class="badge bg-success">Bootstrap</span>
                            </div>
                            <a href="https://github.com/miraboy/portfolio" target="_blank" class="btn btn-dark btn-sm mt-2">
                                <i class="bi bi-github"></i> Voir sur GitHub
                            </a>
                        </div>

                        <div class="project-item">
                            <h6><i class="bi bi-building me-2 text-primary"></i>Application de gestion d’entreprise</h6>
                            <p>
                                Application web de gestion d’entreprise, intuitive et responsive, avec interface dynamique, navigation fluide et fonctionnalités CRUD complètes.
                            </p>
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                <span class="badge bg-primary">PHP (MVC, POO)</span>
                                <span class="badge bg-secondary">MySQL</span>
                                <span class="badge bg-primary">HTML5</span>
                                <span class="badge bg-info">CSS3</span>
                                <span class="badge bg-warning">JavaScript</span>
                                <span class="badge bg-dark">jQuery</span>
                                <span class="badge bg-success">Bootstrap 5</span>
                                <span class="badge bg-info text-dark">DataTables</span>
                            </div>
                            <a href="https://github.com/miraboy/filrouge" target="_blank" class="btn btn-dark btn-sm mt-2">
                                <i class="bi bi-github"></i> Voir sur GitHub
                            </a>
                        </div>

                        <div class="project-item">
                            <h6><i class="bi bi-box me-2 text-primary"></i>Socle backend PHP modulaire</h6>
                            <p>
                                Socle backend léger, modulaire et réutilisable, conçu pour démarrer rapidement des back-offices ou APIs sans framework lourd. Fournit des classes prêtes à l’emploi pour la validation, la gestion de données (SCRUD) et l’authentification.
                            </p>
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                <span class="badge bg-primary">PHP (POO)</span>
                                <span class="badge bg-secondary">MySQL</span>
                                <span class="badge bg-dark">Sans framework</span>
                            </div>
                            <a href="https://github.com/miraboy/modeles" target="_blank" class="btn btn-dark btn-sm mt-2">
                                <i class="bi bi-github"></i> Voir sur GitHub
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Conception Graphique -->
        <div class="modal px-0" id="modalGraph" tabindex="-1" aria-labelledby="modalGraphLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalGraphLabel">
                            <i class="bi bi-palette me-2"></i>
                            Galerie de Créations Graphiques
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <p class="lead">Découvrez une sélection de mes réalisations graphiques, alliant créativité et professionnalisme.</p>
                        </div>
                        
                        <div class="gallery-grid">
                            <?php 
                                for ($i=86; $i >1 ; $i--) { 
                                    ?>
                                    <div class="gallery-item h-100 d-flex flex-column justify-content-end m-3" data-aos="zoom-in" data-aos-delay="100">
                                        <img src="./images-mini/<?php echo $i ?>.png" alt="Projet graphique n°<?php echo $i ?>" class="img-fluid" style="width:100%;height:auto;object-fit:contain;display:block;">
                                        <div class="position-absolute bottom-0 start-0 end-0 p-3 bg-gradient text-dark">
                                            <div class="mt-2">
                                                <a href="https://raw.githubusercontent.com/miraboy/portfolio/main/images/<?php echo $i ?>.png" target="_blank" class="btn btn-light btn-sm">
                                                    Voir l'image <i class="bi bi-box-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                } 
                            ?>
                            
                        </div>

                        <div class="text-center mt-4">
                            <p class="text-muted">
                                <i class="bi bi-lightbulb me-2"></i>
                                Chaque création est unique et adaptée aux besoins spécifiques du client
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Skills Section -->
    <section id="skills" class="py-5">
        <div class="container">
            <h2 class="section-title" data-fr="Mes Compétences" data-en="My Skills">Mes Compétences</h2>
            <div class="row">
                <!-- Bloc Développement Web -->
                <div class="col-lg-6" data-aos="fade-right">
                    <h4 class="mb-4" data-fr="Développement Web" data-en="Web Development">Développement Web</h4>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">PHP (natif)</span>
                            <span class="text-muted">Avancé</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">JavaScript</span>
                            <span class="text-muted">Avancé</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">Python</span>
                            <span class="text-muted">Intermédiaire</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" style="width: 70%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">AdonisJs</span>
                            <span class="text-muted">Intermédiaire</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" style="width: 65%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">Symfony</span>
                            <span class="text-muted">Intermédiaire</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" style="width: 65%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">Bootstrap</span>
                            <span class="text-muted">Avancé</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">Django</span>
                            <span class="text-muted">Débutant</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 35%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">MySQL</span>
                            <span class="text-muted">Intermédiaire</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <!-- Bloc Graphisme & Design -->
                <div class="col-lg-6" data-aos="fade-left">
                    <h4 class="mb-4" data-fr="Graphisme & Design" data-en="Graphic Design">Graphisme & Design</h4>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">Canva</span>
                            <span class="text-muted">Avancé</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">Créativité graphique</span>
                            <span class="text-muted">Avancé</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 88%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">Identité visuelle & Branding</span>
                            <span class="text-muted">Avancé</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">Affiches & Flyers</span>
                            <span class="text-muted">Avancé</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">Sens de la composition</span>
                            <span class="text-muted">Avancé</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 80%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-semibold">Gestion des couleurs & typographies</span>
                            <span class="text-muted">Avancé</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CV Section -->
    <section id="cv" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title" data-fr="Mon CV" data-en="My Resume" style="color: #222 !important;text-shadow: 0 1px 0 #fff, 0 2px 8px rgba(0,0,0,0.08);">Mon CV</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="cv-section" data-aos="fade-up">
                        <div class="text-center mb-4">
                            <h3 data-fr="Téléchargez mon CV complet" data-en="Download my complete resume">Téléchargez mon CV complet</h3>
                            <p class="text-muted" data-fr="Découvrez mon parcours détaillé, mes expériences et mes certifications" data-en="Discover my detailed background, experiences and certifications">Découvrez mon parcours détaillé, mes expériences et mes certifications</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <h5><i class="bi bi-briefcase text-primary me-2"></i><span data-fr="Expérience" data-en="Experience">Expérience</span></h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <strong>Tics-Master</strong> - <span data-fr="Stagiaire Développeur" data-en="Developer Intern">Stagiaire Développeur</span>
                                        <br><small class="text-muted">2022-2023</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>GRAFNET</strong> - <span data-fr="Développeur Web" data-en="Web Developer">Développeur Web</span>
                                        <br><small class="text-muted">2021</small>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="bi bi-mortarboard text-primary me-2"></i><span data-fr="Formation" data-en="Education">Formation</span></h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <strong data-fr="Licence en Génie Logiciel" data-en="Bachelor in Software Engineering">Licence en Génie Logiciel</strong>
                                        <br><small class="text-muted">IFRI-UAC (2019-2022)</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong data-fr="Baccalauréat Série D" data-en="High School Diploma Series D">Baccalauréat Série D</strong>
                                        <br><small class="text-muted">CEG Cocotomey (2017)</small>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row g-4 mt-4">
                            <div class="col-md-6">
                                <h5><i class="bi bi-award text-primary me-2"></i><span data-fr="Certifications" data-en="Certifications">Certifications</span></h5>
                                <ul class="list-unstyled">
                                    <li class="mb-1">✓ PHP - SoloLearn (2023)</li>
                                    <li class="mb-1">✓ JavaScript - SoloLearn (2020)</li>
                                    <li class="mb-1">✓ Responsive Web Design - FreeCodeCamp (2020)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="bi bi-heart text-primary me-2"></i><span data-fr="Centres d'intérêt" data-en="Interests">Centres d'intérêt</span></h5>
                                <ul class="list-unstyled">
                                    <li class="mb-1">🎨 Design graphique</li>
                                    <li class="mb-1">💻 Développement web</li>
                                    <li class="mb-1">🎵 Musique</li>
                                    <li class="mb-1">🎮 Jeux vidéo</li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="CV_Mirabel.pdf" class="btn btn-primary btn-lg" download aria-label="Télécharger le CV (PDF)">
                                <i class="bi bi-download me-2"></i>
                                <span data-fr="Télécharger le CV (PDF)" data-en="Download Resume (PDF)">Télécharger le CV (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="section-title" data-fr="Contactez-moi" data-en="Contact Me">Contactez-moi</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="form-message" class="text-center my-3"></div>
                    <div class="contact-form" data-aos="fade-up">
                        <form id="contactForm" method="POST" action="send_mail.php" autocomplete="off">
                            <input type="text" name="website" id="website" class="d-none" tabindex="-1" autocomplete="off">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label" data-fr="Nom complet" data-en="Full Name">Nom complet</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label" data-fr="Adresse email" data-en="Email Address">Adresse email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label" data-fr="Sujet" data-en="Subject">Sujet</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label" data-fr="Message" data-en="Message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" aria-label="Envoyer le message">
                                        <i class="bi bi-send me-2"></i>
                                        <span data-fr="Envoyer le message" data-en="Send Message">Envoyer le message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row g-4 mt-4">
                        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="card p-3">
                                <i class="bi bi-envelope text-primary mb-3" style="font-size: 2rem;"></i>
                                <h5 data-fr="Email" data-en="Email">Email</h5>
                                <p class="mb-0">mirabelbarryl@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="card p-3">
                                <i class="bi bi-phone text-primary mb-3" style="font-size: 2rem;"></i>
                                <h5 data-fr="Téléphone" data-en="Phone">Téléphone</h5>
                                <p class="mb-0">+229 01 52 68 52 98</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="300">
                            <div class="card p-3">
                                <i class="bi bi-geo-alt text-primary mb-3" style="font-size: 2rem;"></i>
                                <h5 data-fr="Localisation" data-en="Location">Localisation</h5>
                                <p class="mb-0">Pahou, Bénin</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/s%C3%A8kplon-mirabel-dotou-410140195?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/miraboy" target="_blank" title="GitHub"><i class="bi bi-github"></i></a>
                            <a href="mailto:mirabelbarryl@gmail.com" title="Email"><i class="bi bi-envelope"></i></a>
                            <a href="https://x.com/MirabelDotou?t=2pK8_bDFiTHUH93PoW3Law&s=09" target="_blank" title="Twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/share/1AkuytcL21/" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://wa.me/2290152685298" target="_blank" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0" data-fr="© 2024 Sèkplon Mirabel DOTOU. Tous droits réservés." data-en="© 2024 Sèkplon Mirabel DOTOU. All rights reserved.">
                        © 2025 Sèkplon Mirabel DOTOU. Tous droits réservés.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0" data-fr="Développeur Web/Mobile & Designer Graphique - Pahou, Bénin" data-en="Web Developer & Graphic Designer - Cotonou, Benin">
                        Développeur Web/Mobile & Designer Graphique - Pahou, Bénin
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>