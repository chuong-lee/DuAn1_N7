<?php
require_once '../config/AdminImportController.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch($page){
        case 'adminIndex':
            $adminIndex = new AdminController();
            break;
        case 'baocao':
            $baocao = new ReportController();
            break;
        case 'capnhap':
            $baocao = new UpdateController();
            break;
        case 'capnhapdm':
            $baocao = new UpdateCateController();
            break;
        case 'capnhapsp':
            $baocao = new UpdateProductController();
            break;
        case 'thongtin':
            $baocao = new InfoController();
            break;
        default:
        $adminIndex = new AdminController();
        }
    } else{
        $adminIndex = new AdminController();
    }