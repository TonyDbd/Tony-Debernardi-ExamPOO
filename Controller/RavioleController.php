<?php
class RavioleController{

    public function addForm()
    {
        require 'View/add-form.php';
    }

    public function persistForm()
    {
        $fileUrl = null;
        $allowedExtension = ['image/png','image/jpeg','image/gif'];
        if(in_array($_FILES['file']['type'],$allowedExtension)){
            if($_FILES['file']['size'] < 80000000){
                $extension = explode('/', $_FILES['file']['type'])[1];
                $fileUrl = uniqid().'.'.$extension;
                move_uploaded_file($_FILES['file']['tmp_name'],'View/assets/img/'.$fileUrl);
            }

        } 

        $raviole = new Raviole(null, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'],  $fileUrl);
        $ravioleManager = new RavioleManager();
        $ravioleManager->insert($raviole);
        header('Location: /PHP-oo/ExamMVC/index.php?controller=default&action=home');
    }

    public function selectOne($id)
    {
        $ravioleManager = new RavioleManager();
        $raviole = $ravioleManager->select($id);

        require 'View/detailRaviole.php';
    }

    public function delete($id)
    {
        $ravioleManager = new RavioleManager();
        $ravioleManager->delete($id);
        header('Location: /PHP-oo/ExamMVC/index.php?controller=default&action=home');
    }

    public function updateForm($id)
    {
        $ravioleManager = new RavioleManager();
        $raviole = $ravioleManager->select($id);

        require 'View/update_form.php';
    }

    public function updateRaviole($id)
    {
        $fileUrl = null;
        $allowedExtension = ['image/png','image/jpeg','image/gif'];
        if($_FILES['file']['size'] == 0){
            $fileUrl = null;

        }
        if(in_array($_FILES['file']['type'],$allowedExtension)){
            if($_FILES['file']['size'] < 80000000){
                $extension = explode('/', $_FILES['file']['type'])[1];
                $fileUrl = uniqid().'.'.$extension;
                move_uploaded_file($_FILES['file']['tmp_name'],'View/assets/img/'.$fileUrl);
            }

        } 

        $ravioleManager = new RavioleManager();
        $raviole = $ravioleManager->select($id);
        if(!is_null($fileUrl)){
        $raviole = new raviole($id, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], $fileUrl);
        $ravioleManager->update($raviole);
        }

        else{
            $raviole = new raviole($id, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'],null);
            $ravioleManager->update_without_img($raviole);
            }

            header('Location: /PHP-oo/ExamMVC/index.php?controller=default&action=home');
    }
}
