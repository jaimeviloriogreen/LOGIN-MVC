<?php 
class MainController{
    function __construct(){
        // Invoke models
        require_once("models/mainModels.php");
    }

    public function index(){
        // Models
        $user = new MainModel();
        $data = $user->getUser();
        
        // Views
        require_once("views/main.php");
    }
}