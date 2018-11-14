<?php
include("controllers/C_CT_Muon_Tra.php");

$c_muon_tra = new C_CT_Muon_Tra();
if (isset($_REQUEST['id'])) {
    if ($_GET['action'] == "xem") {
        $c_muon_tra->Hien_Thi_CT_Muon_Tra_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "xoa") {
        $c_muon_tra->Xoa_CT_Muon_Tra_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "capnhat") {
        $c_muon_tra->Sua_CT_Muon_Tra($_REQUEST['id']);
    } else {
        $c_muon_tra->Hien_Thi_Tat_Ca_CT_Muon_Tra();
    }

} else {
    if (!isset($_GET['action'])) {
        $c_muon_tra->Hien_Thi_Tat_Ca_CT_Muon_Tra();
    } elseif (isset($_GET['action']) && $_GET['action'] == "them") {
        $c_muon_tra->V_Them_CT_Muon_Tra();
    } elseif (isset($_GET['action']) && $_GET['action'] == "themmoi") {
        $c_muon_tra->Them_CT_Muon_Tra();
    }
}

?>