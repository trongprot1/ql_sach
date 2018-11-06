<?php
include("controllers/C_Tac_Gia.php");

$c_tac_gia = new C_Tac_Gia();
if (isset($_REQUEST['id'])) {
    if ($_GET['action'] == "xem") {
        $c_tac_gia->Hien_Thi_Tac_Gia_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "xoa") {
        $c_tac_gia->Xoa_Tac_Gia_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "capnhat") {
        $c_tac_gia->Sua_Tac_Gia($_REQUEST['id']);
    } else {
        $c_tac_gia->Hien_Thi_Tat_Ca_Tac_Gia();
    }

} else {
    if (!isset($_GET['action'])) {
        $c_tac_gia->Hien_Thi_Tat_Ca_Tac_Gia();
    } elseif (isset($_GET['action']) && $_GET['action'] == "them") {
        $c_tac_gia->V_Them_Tac_Gia();
    } elseif (isset($_GET['action']) && $_GET['action'] == "themmoi") {
        $c_tac_gia->Them_Tac_Gia();
    }
}