    <?php
    session_start();
    include "./controllers/categoryController.php";

    $action = isset($_GET['action']) ? $_GET['action'] : 'home';
    $category = new categoryController;

    switch($action){
        case 'home' :
        $category->home();
        break;

        case 'addCategory':
            $category->addCategory();
            break;
       
    }


