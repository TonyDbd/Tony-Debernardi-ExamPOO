<head>
    <?php
        include_once 'Parts/stylesheet.html';
    ?>
    
  </head>
<?php
     include 'menu.php';
?>

  <h1 class="text-center my-4">Modifier la recette : <?php echo $raviole->getTitre()?></h1>
  <a href="/PHP-oo/ExamMVC/index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
    </a>
        <div class="container" style="background-color: lightblue;">

            <form method="post" action="index.php?controller=raviole&action=updateRaviole&id=<?php echo $raviole->getId()?>" enctype="multipart/form-data">

                    <label>Titre : </label>
                        <input name="titre" type="text" class="form-control" value="<?php echo $raviole->getTitre()?>"> <br>
                    <label>L'ingrédient principal :</label>
                        <input name="ingredient_principal" type="text" class="form-control" value="<?php echo $raviole->getIngredientPrincipal()?>"> <br>
                    <label>Recette :</label><br>
                        <textarea name="recette" cols="63" class="form-control" rows="3"><?php echo $raviole->getRecette()?></textarea><br>

                    <div class="d-flex flex-column justify-content-center mt-2">

                        <label class="text-center" >Image du plat : </label><br>
                        <img src="<?php echo('View/assets/img/'.$raviole->getFile());?>" style="max-width: 140px;">
                            <input class="text-center" name="file" type="file"> <br>

                    </div>

           
        <input type="submit" class="btn btn-primary">
        
    </form>

</div>

<?php
        include_once 'Parts/scripts.html'
?>    