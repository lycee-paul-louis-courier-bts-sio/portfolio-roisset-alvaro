<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <!-- Titre / Nom de la marque -->
        <a class="navbar-brand" href="#" style="color: #8C8C8C; margin-right: 30px;">Trystan Le Marec</a>

        <!-- Bouton burger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenu du menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav"> <!-- ms-auto pour aligner le menu à droite -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?uc=accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?uc=profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?uc=bts">BTS SIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?uc=stage">Stages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?uc=situation">Situations Professionnelles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?uc=veille_techno">Veille Technologique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?uc=contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Styles -->
<style>
    .navbar-custom {
        background-color: #FFF;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 10px 0;
    }

    .nav-item {
        margin-right: 20px;
        font-weight: 500;
        font-size: 14px;
        color: #000000;
    }

    .nav-link {
    padding: 8px 12px;
    display: block;
    border-radius: 5px;
    transition: background-color 0.2s ease;
}

.nav-link:hover {
    background-color: orange;
    color: white;
}

    .nav-item .nav-link.active {
        color: #FFF;
        border-radius: 5px;
        background-color: #FF842D;
    }

    /* Personnalisation du bouton burger */
    .navbar-toggler {
        border: none;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(0, 0, 0, 0.7)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
</style>

<!-- Script pour activer le lien actif -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const activeParams = window.location.search;
        const navLinks = document.querySelectorAll('.nav-link');

        if (activeParams) { // Vérifie si des paramètres existent
            navLinks.forEach(link => {
                if (link.href.includes(activeParams)) {
                    link.classList.add('active');
                }
            });
        }
    });
</script>