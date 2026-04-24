<?php 

 require "config/database.php";
 require "controllers/AlunoController.php";
 $controller = new AlunoController($conn);
 $action = $_GET["action"] ?? 'index';

 switch($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'atualizar':
        $controller->atualizar();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->listarAlunos();
 }

?>