<?php
include("controllers/C_NXB.php");

$c_tac_gia = new C_NXB();
if (isset($_REQUEST['id'])) {
    if ($_GET['action'] == "xem") {
        $c_tac_gia->Hien_Thi_NXB_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "xoa") {
        $c_tac_gia->Xoa_NXB_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "capnhat") {
        $c_tac_gia->Sua_NXB($_REQUEST['id']);
    } else {
        $c_tac_gia->Hien_Thi_Tat_Ca_NXB();
    }

} else {
    if (!isset($_GET['action'])) {
        $c_tac_gia->Hien_Thi_Tat_Ca_NXB();
    } elseif (isset($_GET['action']) && $_GET['action'] == "them") {
        $c_tac_gia->V_Them_NXB();
    } elseif (isset($_GET['action']) && $_GET['action'] == "themmoi") {
        $c_tac_gia->Them_NXB();
    }
}