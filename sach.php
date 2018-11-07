<?php
include ("controllers/C_Sach.php");

$c_sach = new C_Sach();
if (isset($_REQUEST['id'])) {
    if ($_GET['action'] == "xem") {
        $c_sach->Hien_Thi_Sach_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "xoa") {
        $c_sach->Xoa_Sach_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "capnhat") {
        $c_sach->Sua_Sach($_REQUEST['id']);
    } else {
        $c_sach->Hien_Thi_Tat_Ca_Sach();
    }

} else {
    if (!isset($_GET['action'])) {
        $c_sach->Hien_Thi_Tat_Ca_Sach();
    } elseif (isset($_GET['action']) && $_GET['action'] == "them") {
        $c_sach->V_Them_Sach();
    } elseif (isset($_GET['action']) && $_GET['action'] == "themmoi") {
        $c_sach->Them_Sach();
    }
}