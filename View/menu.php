
 
    
  
<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
    <a class="navbar-brand text-white" href="/PHP-oo/ExamMVC/index.php?controller=default&action=home"><strong> Recette </strong> - Exam MVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-5">
        
        <li class="nav-item ml-5">
            <div class="btn-group">
                <a type="button" class="btn btn-warning" href="/PHP-oo/ExamMVC/index.php?controller=default&action=home">Recettes</a>
                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item add" type="button" data-toggle="modal" data-target="#ModalCenterRaviole">Ajouter</a>
                    </div>
            </div>
            <?php
                include_once 'add-form.php';
            ?>
        </li>

        
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <a class="navbar-brand text-white" href="/PHP-oo/ExamMVC/index.php?controller=default&action=home"><strong> Tony D. </strong></a>
        </form>
    </div>
</nav>

    