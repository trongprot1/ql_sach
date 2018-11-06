<?php

include("controllers/C_Nhan_Vien.php");

$c_nhan_vien = new C_Nhan_Vien();

if (isset($_REQUEST['id'])) {
    if ($_GET['action'] == "xem") {
        $c_nhan_vien->Hien_Thi_Nhan_Vien_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "xoa") {
        $c_nhan_vien->Xoa_Nhan_Vien_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "capnhat") {
        $c_nhan_vien->Sua_Nhan_Vien($_REQUEST['id']);
    } else {
        $c_nhan_vien->Hien_Thi_Tat_Ca_Nhan_Vien();
    }

} else {
    if (!isset($_GET['action'])) {
        $c_nhan_vien->Hien_Thi_Tat_Ca_Nhan_Vien();
    } elseif (isset($_GET['action']) && $_GET['action'] == "them") {
        $c_nhan_vien->V_Them_Nhan_Vien();
    } elseif (isset($_GET['action']) && $_GET['action'] == "themmoi") {
            $c_nhan_vien->Them_Nhan_Vien($_REQUEST);
    }
}


?>
