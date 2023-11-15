<?php
    include '../model/pdo.php';
    include '../model/category.php';

    include 'view/header.php';

    if (isset($_GET['pg']) && $_GET['pg'] != " "){
        switch ($_GET['pg']) {
            case 'home':
                include 'view/home.php';
                break;
            case 'category':
                $listCategory=category_select_all();
                include 'view/category.php';
                break;
            case 'addCategory':
                // $listCategory=category_select_all();
                include 'view/addCategory.php';
                if (isset($_POST['addCategory'])){
                    $name = $_POST['name'];
                    category_insert($name);
                    
                }
                $listCategory=category_select_all();
                include "view/category.php";
                break;
            case 'delete':
                // $listCategory=category_select_all();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    category_delete($_GET['id']);
                }
                $listCategory=category_select_all();
                include "view/category.php";
                break;
            default:
                include 'view/home.php';
                break;
        }
    }else{
        include 'view/home.php';
    }

    include 'view/footer.php';
?>