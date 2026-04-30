<div class="container">
    <h1 class="text-center p-4">Me contactez</h1>
    <form method="POST" action="">
        <div class="row justify-content-center">
            <div class="col-4 text-center p-3">
                <label class="form-label" for="prenom">Prénom</label>
                <input id="prenom" class="form-control" name="prenom" type="text">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 text-center p-3">
                <label class="form-label" for="nom">Nom</label>
                <input id="nom" class="form-control" type="text" name="nom">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 text-center p-3">
                <label class="form-label" for="message">Message</label>
                <textarea id="message" class="form-control" height="50px" rows="8"></textarea>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-2 text-center p-3">
                <input class="btn btn-success" id="envoyer" class="form-control" type="submit" name="envoyer" value="Envoyer">
            </div>
        </div>
    </form>
</div>