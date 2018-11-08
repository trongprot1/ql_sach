<?php
include("controllers/C_Doc_Gia.php");

$c_doc_gia = new C_Doc_Gia();
if (isset($_REQUEST['id'])) {
    if ($_GET['action'] == "xem") {
        $c_doc_gia->Hien_Thi_Doc_Gia_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "xoa") {
        $c_doc_gia->Xoa_Doc_Gia_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "capnhat") {
        $c_doc_gia->Sua_Doc_Gia($_REQUEST['id']);
    } else {
        $c_doc_gia->Hien_Thi_Tat_Ca_Doc_Gia();
    }

} else {
    if (!isset($_GET['action'])) {
        $c_doc_gia->Hien_Thi_Tat_Ca_Doc_Gia();
    } elseif (isset($_GET['action']) && $_GET['action'] == "them") {
        $c_doc_gia->V_Them_Doc_Gia();
    } elseif (isset($_GET['action']) && $_GET['action'] == "themmoi") {
        $c_doc_gia->Them_Doc_Gia();
    }
}