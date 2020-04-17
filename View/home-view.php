<!doctype html>
<html lang="en">
  <head>
    <?php
        include_once 'Parts/stylesheet.html';
    ?>
    <title>Recette - MVC</title>
  </head>
  <body>
    <?php
     include 'menu.php';
     ?>
<h1 class="text-center  my-4">Liste des recettes enregistrées</h1>
  <div class="container">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titre</th>
          <th scope="col">Ingrédient principal</th>
          <th scope="col">Recette</th>
          <th scope="col">Image</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
      <?php
            foreach ($ravioles as $raviole) {
        ?>
            <tr>
                <td><?php echo $raviole->getId()?></td>
                <td><?php echo $raviole->getTitre()?></td>
                <td><?php echo $raviole->getIngredientPrincipal()?></td>
                <td><?php echo $raviole->getRecette()?></td>
                <td>
                  <img style="max-width: 140px;" src="<?php echo('View/assets/img/'.$raviole->getFile()); ?>"
                      alt="Image de la recette <?php $raviole->getFile(); ?>"/> 
                <td>
      
                <td>
                  <a href="index.php?controller=raviole&action=detailRaviole&id=<?php echo $raviole->getId()?>">Afficher /</a>

                  <a href="index.php?controller=raviole&action=updateForm&id=<?php echo $raviole->getId()?>">/ Modifier /</a>

                  <a href="index.php?controller=raviole&action=delete&id=<?php echo $raviole->getId()?>">/ Supprimer</a>
              </td>
            </tr>
            <?php
                }
            ?>
      </tbody>
    </table>

  </div>

    <?php
        include_once 'Parts/scripts.html'
    ?>    
</body>
</html>