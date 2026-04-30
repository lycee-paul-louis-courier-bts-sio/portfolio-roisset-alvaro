<!DOCTYPE html>
<html>
    <head>
        <title>CONTACTS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <div  class="container">
            <form action="index.php?uc=gerer_les_contacts&action=contact_ajouter" method="post">
                <div class="mb-3 col-md-4">
                    <h1>Ajouter un contact</h1>
                    <p>* indique un champ obligatoire</p>
                </div>
                <div class="col-md-6">
                    <h3>Identification</h3>
                    <input type="text" class="form-control" name="id" id="id" placeholder="Numéro contact *">
                </div>
                <div class="mb-4 col-md-6"> 
                    <div class="row no-gutters g-0">
                        <div class="col"><input type="text" class="form-control" name="nom" id="nom" placeholder="Nom du contact *"></div>
                        <div class="col"><input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom du contact *"></div>
                    </div>
                </div>
                <h3>Coordonnées</h3>
                <div class="col-md-6"> 
                    <div class="row no-gutters">
                        <div class="input-group">
                            <span class="input-group-text bi bi-at"></span>
                            <input type="email" class="form-control" name="mail" id="mail" placeholder="Email *">
                        </div>     
                        <div class="input-group mb-2">
                            <span class="input-group-text bi bi-telephone-fill"></span>
                            <div class="col"><input type="text" class="form-control" name="tel_fixe" id="tel_fixe" placeholder="Téléphone fixe *"></div> 
                            <span class="input-group-text bi bi-phone-fill"></span>
                            <div class="col"><input type="text" class="form-control" name="tel_portable" id="tel_portable" placeholder="Téléphone portable *"></div>
                        </div>
                    </div>
                    <div class="form-check mb-3 ">
                        <input type="checkbox" name="privilegie" id="privilegie" value="1" class="form-check-input">
                        <label for="privilegie" class="form-check-label">Contact privilégié</label>
                    </div>
                </div>
                <h3>Sélectionner le distributeur *</h3>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <select name="id_distributeur" id="id_distributeur"  class="form-select">
                            <option value="" selected disabled>Choisissez le distributeur...</option>

                                <?php
                                foreach ($listedistributeur as $val) {
                                    ?><option value="<?php echo $val['id']; ?>">
                                    <?php echo $val['id'], ' -  ' . $val['raison_sociale']; ?></option><?php
                                    }
                                    ?>
                            </select>
                    </div>
                </div>
                
                
                
                <button type="submit" class="btn btn-primary">Valider</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </form>
        </div>
    </body>
</html>