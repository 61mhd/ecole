  <form class="form-horizontal col-lg-4" action = "./exe/addeleve.php" method = "POST" enctype="multipart/form-data">
       
         <div class="row">
                <label for="text" class="col-lg-3">Classe:</label>
                <div class="col-lg-9">
                 <input type = "text" class="form-control" name = "idclasse"><br>  
                </div>
        </div>
        <div class="row">
                <label for="text" class="col-lg-3">Nom:</label>
                <div class="col-lg-9">
                <input type = "text" class="form-control" name = "nom"><br>
                </div>
        </div>
        <div class="row">
                <label for="text" class="col-lg-3">Prenom:</label>
                <div class="col-lg-9">
                <input type = "text" class="form-control" name = "prenom"><br>
                </div>
        </div>
        <div class="row">
                <label for="date" class="col-lg-3">DateNais:</label>
                <div class="col-lg-9">
                <input type = "date" class="form-control" name = "date"><br>
                </div>
        </div>
        <div class="row">
                <label for="text" class="col-lg-3">Lieu:</label>
                <div class="col-lg-9">
                <input type = "text" class="form-control" name = "lieu"><br>
                </div>
        </div>
        <div class="row">
                <label for="text" class="col-lg-3">Adresse:</label>
                <div class="col-lg-9">
                <input type = "text" class="form-control" name = "adresse"><br>
                </div>
        </div>
        <div class="row">
                <label for="text" class="col-lg-3">Sexe:</label>
                <div class="col-lg-9">
               <select name="sexe" class="form-check-input">
                    <option>Selectionner</option>
                   <option>Masculin</option>
                   <option>Feminin</option>
               </select>
                </div>
        </div>
        <br><button type ="submit" class="btn btn-primary">Valider</button>
            <button type ="reset"  class="btn btn-primary">Supprimer</button>

        </form>