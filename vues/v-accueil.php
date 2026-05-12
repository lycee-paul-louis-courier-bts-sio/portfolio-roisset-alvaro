<link rel="stylesheet" href="./assets/css/accueil.css">
<main style="margin-bottom: 480px;">
  <div class="welcome-section">
      <h1>Bienvenue sur mon Portfolio</h1>
      <h2 class="dynamic-text">
          <span id="dynamic"></span>
      </h2>
      <p>Découvrez mes projets, mes compétences et mes expériences en BTS SIO SLAM.</p>
      <a href="index.php?uc=public" class="btn btn-primary mt-3">
          Voir mes projets
      </a>
  </div>
</main>


<style>
  h1, .titre-expedition {
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
