<link rel="stylesheet" href="./assets/css/accueil.css">
<
    <div class="welcome-section">
        <h1>Bienvenue sur mon Portfolio</h1>
        <h2 class="dynamic-text">
            <span id="dynamic"></span>
        </h2>
        <p>Découvrez mes projets, mes compétences et mes expériences en BTS SIO SLAM.</p>
        <a href="index.php?uc=public&action=voirStage" class="btn btn-primary mt-3">
            Voir mes projets
        </a>
    </div>



<style>
    h1,
    .titre-expedition {
        font-family: 'Cinzel', serif;
    }
</style>

<script>
    const phrases = [
        "Futur diplômé 🚀",
        "Passionné par le code 💻",
        "Toujours prêt à relever des défis 🔧",
        "Bienvenue chez Alvaro ROISSET 👑"
    ];

    let index = 0;
    let dynamic = document.getElementById('dynamic');

    function changeText() {
        dynamic.textContent = phrases[index];
        index = (index + 1) % phrases.length;
    }

    changeText();
    setInterval(changeText, 2500);
</script>

<div class="stage-detail-container">
    <div class="stage-section">
        <h2>Tableau de synthèse</h2>
        <div class="stage-photos">
            <div class="photo-placeholder"><img src="assets/images/tableau_synthese.png"> </div>
        </div>
    </div>

    <div class="stage-actions">
        <a href="assets/fichiers/tableau_synthese.pdf" download class="btn-gold">
            Télécharger le pdf
        </a>
    </div>
    <div class="lb-overlay" id="lightbox">
        <div class="lb-box">
            <div class="lb-close" id="lb-close">&#x2715;</div>
            <img id="lb-img" src="" alt="">
            <p class="lb-caption" id="lb-caption"></p>
        </div>
    </div>
</div>
<script src="assets/images.js"></script>