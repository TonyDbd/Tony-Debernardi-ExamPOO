<?php
class DefaultController{

    public function home()
    {
        $RavioleManager = new RavioleManager();
        $ravioles = $RavioleManager->selectAll();

        require 'View/home-view.php';
    }

}