<head>
    <?php
        include_once 'Parts/stylesheet.html';
    ?>
</head>
<body>
    <?php
        include 'menu.php';
    ?>


<h1 class="text-center my-4"><?php echo $raviole->getTitre()?></h1>
<div class="container d-flex flex-column align-items-center col">

    <img style="max-width: 140px;" src="<?php echo('View/assets/img/'.$raviole->getFile()); ?>"
            alt="Image de la recette <?php $raviole->getFile(); ?>"/>

    <br><br>
    <div class="text-center"  style="background-color: lightblue;">
        <h3 class="text-white"><u class="text-white">L'ingrédient principal : </u> <?php echo $raviole->getIngredientPrincipal()?></h3>
        <div class="text-white"><u class="text-white">Recette : </u> <?php echo $raviole->getRecette()?></div>
    </div>

    </div>

    <a href="/PHP-oo/ExamMVC/index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
    </a>

</div>

<?php
    include_once 'Parts/scripts.html'
?>    
</body>