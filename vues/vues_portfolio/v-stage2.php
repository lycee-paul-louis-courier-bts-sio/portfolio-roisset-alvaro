<!-- Conteneur principal -->
<div class="container bordered-container  mt-4">

    <!-- Logo de l'entreprise -->
    <div class="text-center mb-4">
        <img src="./assets/img/exaegis.png" alt="Logo Sectronic" class="img-fluid" style="max-width: 200px;">
    </div>

    <!-- Titre et présentation -->
    <h1 class="fw-bold text-center mb-4">Exaegis</h1>
    <p class="text-center">
        Exaegis est une société française spécialisée dans l’évaluation et la gestion des
        risques des entreprises du secteur numérique. Elle analyse notamment la solidité financière, la
        gouvernance et la pérennité des fournisseurs de solutions IT et des éditeurs de logiciels, afin de leur
        attribuer des notations reconnues par les acteurs du marché.
    </p>

    <hr>

    <!-- Contenu principal -->
    <div class="row">
        <div class="col-md-6">
            <h4 class="section-title">📁 Documents & Liens</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="./assets/documents/rapportact_exaegis.pdf" class="text-dark fw-bold">Rapport de stage</a>
                </li>
                <li class="list-group-item">
                    <a href="./assets/documents/notesynthese_exaegis.pdf" class="text-dark fw-bold">Note de synthèse</a>
                </li>
            </ul>
        </div>

        <div class="col-md-6">
            <h4 class="section-title">📌 Mes missions</h4>
            <ul>
                <li><span class="fw-bold">Correction de codes en erreur concernant le scraping</span></li>
                <li><span class="fw-bold">Réalisation d'un guide de scraping</span></li>
                <li><span class="fw-bold">Analyse d'une API contenant des données clients</span></li>
                <li><span class="fw-bold">Réalisation de scripts Python</span></li>
            </ul>
        </div>
    </div>

    <hr>

    <!-- Compétences -->
    <div class="row">
        <div class="col-md-6">
            <h4 class="section-title">🛠️ Compétences exploitées</h4>
            <ul>
                <li class="fw-bold">Développer et corriger du code (Java, Spring Boot, Python)</li>
                <li>Effectuer du scraping web avec JSoup et Selenium</li>
                <li class="fw-bold">Manipuler des bases de données (ElasticSearch)</li>
                <li>Automatiser des tâches avec des scripts Python</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h4 class="section-title">🎯 Compétences ciblées</h4>
            <ul>
                <li>Traiter les demandes liées aux API et services web</li>
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
                <img src="./assets/img/java.png" alt="java logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#javaModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/jsoup.png" alt="jsoup logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#jsoupModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/selenium.png" alt="selenium logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#seleniumModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/elasticsearch.png" alt="elasticsearch logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#elasticSearchModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/jira.png" alt="jira logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#jiraModal">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="techno">
            <div class="col-2">
                <img src="./assets/img/python.png" alt="python logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#pythonModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/maven.png" alt="maven logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#mavenModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/confluence.png" alt="confluence logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#confluenceModal">
            </div>
            <div class="col-2">
                <img src="./assets/img/gtlab.png" alt="gitlab logo" class="img-fluid tech-logo" data-bs-toggle="modal" data-bs-target="#gitlabModal">
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="jsoupModal" tabindex="-1" aria-labelledby="jsoupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="jsoupModalLabel">Jsoup : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Jsoup est une bibliothèque Java utilisée pour le parsing et la manipulation de documents HTML, souvent employée pour le web scraping.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Facilité d'utilisation et d'intégration dans les projets Java.</li>
                        <li>Parsing et manipulation efficace du HTML.</li>
                        <li>Support des requêtes CSS et des sélecteurs XPath.</li>
                        <li>Gestion robuste des erreurs et des documents mal formés.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Ne supporte pas l'exécution de JavaScript.</li>
                        <li>Moins puissant que Selenium pour des pages dynamiques.</li>
                        <li>Limitations en termes de performances sur de très gros volumes de données.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="javaModal" tabindex="-1" aria-labelledby="javaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="javaModalLabel">Java : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Java est un langage de programmation orienté objet, créé par Sun Microsystems en 1995, largement utilisé pour le développement d'applications web, mobiles et d'entreprise.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Portabilité : fonctionne sur toutes les plateformes grâce à la JVM.</li>
                        <li>Orienté objet : facilite la maintenance et la réutilisation du code.</li>
                        <li>Écosystème riche avec de nombreuses bibliothèques et frameworks (Spring, Hibernate, etc.).</li>
                        <li>Sécurisé et robuste grâce à la gestion stricte de la mémoire.</li>
                        <li>Multithreading natif pour des applications performantes.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Consommation mémoire et CPU plus élevée que certains langages plus légers.</li>
                        <li>Syntaxe parfois verbeuse comparée à des langages comme Python.</li>
                        <li>Temps d'exécution plus long que les langages compilés natifs (C, C++).</li>
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

<div class="modal fade" id="seleniumModal" tabindex="-1" aria-labelledby="seleniumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="seleniumModalLabel">Selenium : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Selenium est un outil de test automatisé utilisé pour tester des applications web en simulant l'interaction utilisateur.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Compatible avec plusieurs langages de programmation.</li>
                        <li>Supporte l'exécution de JavaScript.</li>
                        <li>Permet l'automatisation des tests sur plusieurs navigateurs.</li>
                        <li>Peut être intégré à d'autres outils comme TestNG ou JUnit.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Consommation élevée de ressources.</li>
                        <li>Configuration et maintenance complexes.</li>
                        <li>Moins efficace pour les tests sur des applications mobiles.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="elasticSearchModal" tabindex="-1" aria-labelledby="elasticSearchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="elasticSearchModalLabel">ElasticSearch : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>ElasticSearch est un moteur de recherche et d'analyse distribué, basé sur Apache Lucene, permettant une recherche rapide et efficace.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Recherches en temps réel et haute performance.</li>
                        <li>Extensibilité et scalabilité horizontale.</li>
                        <li>Facile à intégrer avec d'autres outils (Kibana, Logstash, Beats).</li>
                        <li>Puissant pour l'analyse de données et les requêtes complexes.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Configuration et gestion complexes.</li>
                        <li>Consommation élevée en mémoire et CPU.</li>
                        <li>Nécessite une maintenance régulière.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="jiraModal" tabindex="-1" aria-labelledby="jiraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="jiraModalLabel">Jira : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Jira est un outil de gestion de projet et de suivi des bugs, développé par Atlassian, souvent utilisé pour les méthodes agiles.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Très flexible et personnalisable.</li>
                        <li>Intégration facile avec d'autres outils Atlassian.</li>
                        <li>Gestion efficace des tâches et des workflows.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Courbe d'apprentissage élevée.</li>
                        <li>Coût élevé pour les grandes équipes.</li>
                        <li>Peut devenir complexe avec trop de personnalisations.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mavenModal" tabindex="-1" aria-labelledby="mavenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="mavenModalLabel">Maven : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Maven est un outil de gestion de projet utilisé principalement pour l'automatisation des builds en Java.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Gestion efficace des dépendances.</li>
                        <li>Structure standardisée des projets.</li>
                        <li>Compatible avec plusieurs outils CI/CD.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Configuration XML parfois lourde.</li>
                        <li>Consommation élevée en ressources.</li>
                        <li>Complexité pour les projets non conventionnels.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confluenceModal" tabindex="-1" aria-labelledby="confluenceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="confluenceModalLabel">Confluence : Présentation, Avantages et Inconvénients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Confluence est un outil collaboratif développé par Atlassian permettant de créer, partager et organiser des documents et des bases de connaissances.</p>
                <div class="list-container">
                    <h4 class="green">Avantages</h4>
                    <ul class="pros-list">
                        <li>Facilite la collaboration et le partage de documents.</li>
                        <li>Intégration fluide avec Jira et d'autres outils Atlassian.</li>
                        <li>Interface utilisateur intuitive et personnalisable.</li>
                        <li>Idéal pour la documentation des projets et des processus internes.</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Inconvénients</h4>
                    <ul class="cons-list">
                        <li>Peut devenir complexe avec un grand volume de documents.</li>
                        <li>Coût élevé pour les grandes entreprises.</li>
                        <li>Personnalisation limitée sans plugins tiers.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .tech-logo {
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