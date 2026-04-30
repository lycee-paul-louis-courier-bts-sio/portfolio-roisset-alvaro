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
                <h4>Sélectionner le distributeur</h4>
                <div class="col-md-9">
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
                        
                    </div><br><h1>" raison_sociale "</h1>
                </div>
                <br>
                
                <th scope="col">Liste des contacts</th>
                <table>
                    
                    <th>
                    <tr><br>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Téléphone fixe</th>
                        <th>Téléphone portable</th>
                        <th>Privilegié</th>
                    </tr>
                </table>
                        <br>
                       
                           
                            <?php
                            foreach ($listeContacts as $valeur) {
                                ?>
                            <tr>
                                
                                        <td><?php echo $valeur['nom'];?></td> 
                                        <td><?php echo $valeur['prenom'];?></td>
                                        <td><?php echo $valeur['mail'];?></td>
                                        <td><?php echo $valeur['tel_fixe'];?></td>
                                        <td><?php echo $valeur['tel_portable'];?></td>
                                        <td><?php echo $valeur['privilegie'];?></td>
                            </tr>
                                 <?php    
                            }
                            ?>
                       
                    </div>
                </div>
            <div class="row mb-3">
                <div class="col-md-8">
                    <div id="zoneTitre"></div>
             </div>
         </div>
         <div class="row mb-3">
             <div class="col-md-8">
                 <div id="zoneResultat"></div>
             </div>
         </div>
                </div> 
            </form>
        </div>
    </body>
</html>