<!-- Conteneur principal -->
<div class="container bordered-container mt-4">

    <!-- Logo de l'entreprise -->
    <div class="text-center mb-4">
        <img src="./assets/img/logotekin.png" alt="Logo Sectronic" class="img-fluid" style="max-width: 200px;">
    </div>

    <!-- Titre et présentation -->
    <h1 class="fw-bold text-center mb-4">TEKIN</h1>
    <p class="text-center">
        Tekin est née de la vision partagée que les systèmes communicants peuvent transformer notre quotidien. <br>
        Leur vocation ? Exploiter le potentiel des objets connectés pour améliorer la société, de l’économie d’énergie à la santé, en passant par la sécurité et la protection de l’environnement.
    </p>

    <hr>

    <!-- Contenu principal -->
    <div class="row">
        <div class="col-md-6">
            <h4 class="section-title">📁 Documents & Liens</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="./assets/documents/rapportact_tekin.pdf" class="text-dark fw-bold">Rapport de stage</a>
                </li>
                <li class="list-group-item">
                    <a href="./assets/documents/notesynthese_tekin.pdf" class="text-dark fw-bold">Note de synthèse</a>
                </li>
            </ul>
        </div>

        <div class="col-md-6">
            <h4 class="section-title">📌 Mes missions</h4>
            <ul>
                <li><span class="fw-bold">Recherches et protototypage de Frameworks graphiques JS</span></li>
                <li><span class="fw-bold">Mise à jour du site WordPress de l'entreprise</span></li>
                <li><span class="fw-bold">Réalisation d'une documentation pour mettre le site à jour</span></li>
                <li><span class="fw-bold">Réalisation de scripts Python pour la gestion de données</span></li>
            </ul>
        </div>
    </div>

    <hr>

    <!-- Compétences -->
    <div class="row">
        <div class="col-md-6">
            <h4 class="section-title">🛠️ Compétences exploitées</h4>
            <ul>
                <li class="fw-bold">Développer du code (Vue,Python)</li>
                <li>Maintenance d'un site web</li>
                <li class="fw-bold">Manipuler des données aws</li>
                <li>Automatiser des tâches avec des scripts Python</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h4 class="section-title">🎯 Compétences ciblées</h4>
            <ul>
                <li>Traiter les demandes liées aux API et services aws</li>
                <li class="fw-bold">Réaliser des tests d’intégration et de validation</li>
                <li>Déployer et documenter un service informatique</li>
            </ul>
        </div>
    </div>
    <hr>
    <h2 class="fw-bold text-center mb-4"> - Technologies utilisées -</h2>
    <div class="row">
        <div class="techno">
            <div class="col-2">
                <img src="./assets/img/vue.png" alt="vue logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#vueModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/apex.png" alt="Apex Charts logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#apexModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/chart.png" alt="ChartJS logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#chartjsModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/uplot.png" alt="uPlot logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#uplotModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/wp.png" alt="Wordpress logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#wpModal">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="techno">
            <div class="col-2">
                <img src="./assets/img/python.png" alt="python logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#pythonModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/boto3.png" alt="Apex Charts logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#boto3Modal">
            </div>
            <div class="col-2">
                <img src="./assets/img/aws.png" alt="aws logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#awsS3Modal">
            </div>
            <div class="col-2">
                <img src="./assets/img/gtlab.png" alt="gitlab logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#gitlabModal">
            </div>
        </div>
    </div>
</div>


<!-- Modal Vue-->
<div class="modal fade" id="vueModal" tabindex="-1" aria-labelledby="vueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Framework Vue.js : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Vue.js est un framework JavaScript moderne, créé par Evan You en 2014, destiné au développement d'interfaces utilisateur interactives et de single-page applications (SPA).</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Facilité d'apprentissage et d'utilisation pour les débutants.</li>
                        <li>Documentation exhaustive et bien structurée.</li>
                        <li>Flexibilité : peut être intégré progressivement dans des projets existants.</li>
                        <li>Réactivité performante : mise à jour efficace de l'interface utilisateur.</li>
                        <li>Communauté active et support étendu.</li>
                    </ul>
                </div>

                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Écosystème moins mature comparé à React ou Angular.</li>
                        <li>Moins adopté dans les grandes entreprises.</li>
                        <li>Flexibilité excessive peut mener à des pratiques incohérentes.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Apex Chart-->
<div class="modal fade" id="apexModal" tabindex="-1" aria-labelledby="apexModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="apexModalLabel">Apex Charts : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>ApexCharts est une bibliothèque de graphiques JavaScript populaire pour la visualisation de données. Elle offre des graphiques interactifs et modernes pour les applications web.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Supporte une grande variété de types de graphiques.</li>
                        <li>Facilité d'intégration avec Vue, React, Angular, et autres frameworks.</li>
                        <li>Options de personnalisation avancées.</li>
                        <li>Performance optimisée pour de grandes quantités de données.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Documentation parfois complexe pour certaines fonctionnalités avancées.</li>
                        <li>Limitations de personnalisation pour certains graphiques complexes.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale ChartJS -->
<div class="modal fade" id="chartjsModal" tabindex="-1" aria-labelledby="chartjsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="chartjsModalLabel">ChartJS : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>ChartJS est une bibliothèque JavaScript open-source simple à utiliser pour des graphiques basiques et interactifs.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Facile à utiliser pour des graphiques basiques.</li>
                        <li>Documentation claire et facile à suivre.</li>
                        <li>Graphiques réactifs et interactifs.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Fonctionnalités limitées pour des visualisations avancées.</li>
                        <li>Moins performant avec des volumes de données importants.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale uPlot -->
<div class="modal fade" id="uplotModal" tabindex="-1" aria-labelledby="uplotModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="uplotModalLabel">uPlot : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>uPlot est une bibliothèque de graphiques JavaScript rapide et légère, conçue pour les visualisations de données en temps réel et les grandes quantités de données.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Ultra léger et rapide.</li>
                        <li>Idéal pour les applications en temps réel.</li>
                        <li>Fonctionne bien avec de grandes quantités de données.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Fonctionnalités limitées pour des visualisations avancées.</li>
                        <li>Personnalisation complexe.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale WordPress -->
<div class="modal fade" id="wpModal" tabindex="-1" aria-labelledby="wpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="wpModalLabel">WordPress : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>WordPress est un système de gestion de contenu (CMS) populaire utilisé pour créer des sites web et des blogs.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Facile à utiliser, même pour les non-développeurs.</li>
                        <li>Écosystème riche de plugins et de thèmes.</li>
                        <li>Support d'une large communauté.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Peut être lourd avec trop de plugins.</li>
                        <li>Exposé à des vulnérabilités de sécurité.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale Python -->
<div class="modal fade" id="pythonModal" tabindex="-1" aria-labelledby="pythonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="pythonModalLabel">Python : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Python est un langage de programmation polyvalent, populaire pour le développement web, l'analyse de données, l'automatisation et plus encore.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Facile à apprendre et à lire.</li>
                        <li>Bibliothèques étendues pour de nombreuses applications.</li>
                        <li>Supporté par une large communauté.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Moins rapide que certains autres langages.</li>
                        <li>Pas idéal pour les applications mobiles.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale Boto3 -->
<div class="modal fade" id="boto3Modal" tabindex="-1" aria-labelledby="boto3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="boto3ModalLabel">Boto3 : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Boto3 est la bibliothèque Python officielle pour interagir avec les services AWS (Amazon Web Services). Elle est principalement utilisée pour l'automatisation et la gestion de ressources AWS via des scripts Python.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Facilite l'automatisation des tâches AWS avec Python.</li>
                        <li>Supporte la plupart des services AWS, offrant une grande flexibilité.</li>
                        <li>Bien intégré dans les environnements de développement Python.</li>
                        <li>Large communauté et documentation complète.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Courbe d'apprentissage pour les débutants en AWS et Python.</li>
                        <li>Peut nécessiter des permissions détaillées pour certains services AWS.</li>
                        <li>Performance limitée pour des tâches très intensives en données.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale AWS S3 -->
<div class="modal fade" id="awsS3Modal" tabindex="-1" aria-labelledby="awsS3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="awsS3ModalLabel">AWS S3 : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>AWS S3 (Simple Storage Service) est un service de stockage d'objets proposé par Amazon Web Services. Il est utilisé pour stocker et récupérer n'importe quelle quantité de données à tout moment, depuis n'importe où sur le web.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Scalabilité : peut stocker des pétaoctets de données sans effort.</li>
                        <li>Haute disponibilité et durabilité.</li>
                        <li>Options de gestion du cycle de vie des objets pour optimiser les coûts.</li>
                        <li>Intégration facile avec d'autres services AWS.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Coûts peuvent augmenter avec des volumes de données élevés.</li>
                        <li>Complexité de la gestion des permissions et de la sécurité des objets.</li>
                        <li>Pas idéal pour le stockage de données transactionnelles ou relationnelles.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale GitLab -->
<div class="modal fade" id="gitlabModal" tabindex="-1" aria-labelledby="gitlabModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="gitlabModalLabel">GitLab : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>GitLab est une plateforme DevOps open-source qui offre des outils pour la gestion de code source, l'intégration continue (CI/CD), la gestion des versions et la collaboration d'équipe.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Intégration continue et déploiement continu (CI/CD) intégrés.</li>
                        <li>Outils complets pour la gestion de projet et de code.</li>
                        <li>Capacités d'automatisation pour le flux de travail DevOps.</li>
                        <li>Support de l'hébergement cloud et auto-hébergement.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Interface complexe pour les débutants.</li>
                        <li>Peut nécessiter des ressources serveur importantes pour l'auto-hébergement.</li>
                        <li>Certains outils avancés sont disponibles uniquement dans les versions payantes.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .tech-logo {
        will-change: transform;
        transition: transform 0.3s ease-in-out;
        width: 100px;
        height: auto;
        margin: 10px;
    }

    .techno {
        color: #000;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h2,
    h1 {
        color: #FF5A5A;
    }


    .list-container {
        margin-top: 20px;
    }

    .pros-list,
    .cons-list {
        margin-left: 20px;
        list-style-type: none;
        /* Supprime les puces */
    }

    .cons-list li {
        margin-bottom: 10px;
        position: relative;
        /* Position relative pour les pseudo-éléments */
        color: #dc3545;
    }

    .pros-list li {
        margin-bottom: 10px;
        position: relative;
        /* Position relative pour les pseudo-éléments */
        color: #28a745;
    }

    .pros-list li::before {
        content: "+";
        color: #28a745;
        font-weight: bold;
        position: absolute;
        left: -20px;
        /* Ajustement de la position */
    }

    .cons-list li::before {
        content: "-";
        color: #dc3545;
        font-weight: bold;
        position: absolute;
        left: -20px;
        /* Ajustement de la position */
    }

    .modal-content h1 {
        color: #000D7F;
    }

    .modal-content p {
        color: black;
    }



    .tech-logo:hover {
        transform: scale(1.2);
        box-shadow: 10px 5px 5px gray;
    }

    .bordered-container {
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        padding: 30px;
        background-color: rgba(255, 255, 255, 0.03);
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.05);
    }
</style>