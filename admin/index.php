<?php
    include '../model/pdo.php';
    include '../model/category.php';
    include '../model/product.php';
    include '../model/user.php';
    include '../model/feedback.php';

    include 'view/header.php';

    if (isset($_GET['pg']) && $_GET['pg'] != " "){
        switch ($_GET['pg']) {
            case 'home':
                include 'view/home.php';
                break;
    //category
            case 'category':
                $listCategory=category_select_all();
                include 'view/category.php';
                break;
            case 'addCate':
                // $listCategory=category_select_all();
                if (isset($_POST['addCate'])){
                    $name = $_POST['name'];
                    category_insert($name);
                    
                }
                $listCategory=category_select_all();
                include "view/category.php";
                break;
            case 'deleteCate':
                // $listCategory=category_select_all();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    category_delete($_GET['id']);
                }
                $listCategory=category_select_all();
                include "view/category.php";
                break;
            case 'editCate';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $category=category_select_by_id($_GET['id']);
            }
            include "view/updateCate.php";
            break;
            case 'updateCate':
                if (isset($_POST['updateCate'])) {
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    category_update($id, $name);
                    
                }
                $listCategory=category_select_all();
                include "view/category.php";
                break;
    //product
            case 'product':
                $listProduct=product_select_all();
                include 'view/product.php';
                break;
            case 'deleteProduct':
                // $listCategory=category_select_all();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    product_delete($_GET['id']);
                }
                $listProduct=product_select_all();
                include 'view/product.php';
                break;
            case 'addProduct':
                $listProduct=product_select_all();
                include 'view/addProduct.php';
                break;
    //user
            case 'user':
                $listUser=user_select_all();
                include 'view/user.php';
                break;
            case 'deleteUser':
                // $listCategory=category_select_all();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    user_delete($_GET['id']);
                }
                $listUser=user_select_all();
                include "view/user.php";
                break;
    //feedback
            case 'feedback':
                $listFeedback=feedback_select_all();
                include 'view/feedback.php';
                break;
            case 'deleteFeedback':
                // $listCategory=category_select_all();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    feedback_delete($_GET['id']);
                }
                $listFeedback=feedback_select_all();
                include 'view/feedback.php';
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