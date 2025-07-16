<?php

class AdminCategoryControllers{
    public function __construct(){
        $user = $_SESSION['user'] ?? [];
        if (!$user || $user['role'] !='admin' ) {

       return header('location:');
            # code...
        }

    }

    public function index(){
      
    }
    
        
    
}


?>