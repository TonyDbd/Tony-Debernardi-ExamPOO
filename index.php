<?php // ROUTING 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    require 'include.php';

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){ 
        $ravioleController = new DefaultController(); 
        $ravioleController->home(); 
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'addForm'){
        $ravioleController = new RavioleController();
        $ravioleController->addForm();
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'addRaviole'){
        $ravioleController = new RavioleController();
        $ravioleController->persistForm();
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'detailRaviole' && isset($_GET['id'])){
        $ravioleController = new RavioleController();
        $ravioleController->selectOne($_GET['id']);
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $ravioleController = new RavioleController();
        $ravioleController->delete($_GET['id']);
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
        $ravioleController = new RavioleController();
        $ravioleController->updateForm($_GET['id']);
    }
    else if($_GET['controller'] === 'raviole' && $_GET['action'] === 'updateRaviole' && isset($_GET['id'])){
        $ravioleController = new RavioleController();
        $ravioleController->updateRaviole($_GET['id']);
    }
    else {
        throw new Exception('Perdu !! La page demandée n\'existe pas', 404);
    }
?>