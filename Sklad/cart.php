<?php
//error_reporting(-1);
session_start();
require_once __DIR__."/bd.php";


if(isset($_GET['cart'])) {
    switch ($_GET['cart']) {
        case 'add':
            $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
            echo json_encode(['code' => 'ok', 'answer' => $id]);
            break;
//        case 'clear':
//            if (!empty($_GET['cart'])) {
//                unset($_SESSION['cart']);
//                require_once __DIR__ . "/bd.php";
//                break;
//            }
    }
}

echo json_encode(['code' =>'ok']);
?>