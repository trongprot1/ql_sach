<?php
include("controllers/C_The_Thu_Vien.php");

$c_the_thu_vien = new C_The_Thu_Vien();
if (isset($_REQUEST['id'])) {
    if ($_GET['action'] == "xem") {
        $c_the_thu_vien->Hien_Thi_The_Thu_Vien_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "xoa") {
        $c_the_thu_vien->Xoa_The_Thu_Vien_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "capnhat") {
        $c_the_thu_vien->Sua_The_Thu_Vien($_REQUEST['id']);
    } else {
        $c_the_thu_vien->Hien_Thi_Tat_Ca_The_Thu_Vien();
    }

} else {
    if (!isset($_GET['action'])) {
        $c_the_thu_vien->Hien_Thi_Tat_Ca_The_Thu_Vien();
    } elseif (isset($_GET['action']) && $_GET['action'] == "them") {
        $c_the_thu_vien->V_Them_The_Thu_Vien();
    } elseif (isset($_GET['action']) && $_GET['action'] == "themmoi") {
        $c_the_thu_vien->Them_The_Thu_Vien();
    }
}