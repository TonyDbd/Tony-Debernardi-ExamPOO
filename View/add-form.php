
  
  <!-- Modal d'ajout recette -->
  <div class="modal fade" id="ModalCenterRaviole" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ml-5" id="ModalCenterTitle">Ajouter une recette</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post" action="index.php?controller=raviole&action=addRaviole" enctype="multipart/form-data">
                    <label>Titre : </label>
                        <input name="titre" type="text" class="form-control" placeholder="Ex : Raviole aux champignons"> <br>
                    <label>L'ingrédient principal :</label>
                        <input name="ingredient_principal" type="text" class="form-control" placeholder="Ex : Champignons"> <br>
                    <label>Recette :</label><br>
                        <textarea name="recette" cols="63" placeholder="Ex : Les bon plan c'est ici !"  rows="3"></textarea><br>
                    <div class="d-flex flex-column justify-content-center mt-2">
                        <label class="text-center" >Image du plat : </label><br>
                            <input class="text-center" name="file" type="file"> <br>
                    </div>


                    <input type="submit" class="btn btn-primary">
                
                </form>

            </div>
        </div>
    </div>
</div>
