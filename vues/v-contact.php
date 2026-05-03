<div class="container">
    <h1 class="text-left p-4">Me contactez</h1>
    <form method="POST" action="">
        <fieldset>
            <div class="row">
                <div class="col-5 text-left p-3">
                    <label class="form-label" for="prenom">Prénom</label>
                    <input id="prenom" class="form-control" name="prenom" type="text">
                </div>
            </div>
            <div class="row">
                <div class="col-5 text-left p-3">
                    <label class="form-label" for="nom">Nom</label>
                    <input id="nom" class="form-control" type="text" name="nom">
                </div>
            </div>
            <div class="row">
                <div class="col-5 text-left p-3">
                    <label class="form-label" for="message">Message</label>
                    <textarea id="message" class="form-control" height="50px" rows="8"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-3 text-left p-3">
                    <input class="btn btn-success" id="envoyer" class="form-control" type="submit" name="envoyer" value="Envoyer">
                </div>
            </div>
        </fieldset>
    </form>
</div>
<style>
  h1, .titre-expedition {
      font-family: 'Cinzel', serif;
      color: white;
  }
  label, .titre-expedition {
      font-family: 'Cinzel', serif;
      color: white;
  }
  /* --- Boutons personnalisés --- */
.btn-success {
    background-color: darkgoldenrod;
    border: none;
    transition: background-color 0.3s ease;
}

.btn-success:hover {
   background: linear-gradient(90deg, #303030, #1245);
}
</style>