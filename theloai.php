<?php
include ("controllers/C_The_Loai.php");
$c_the_loai = new C_The_Loai();
if (isset($_REQUEST['id'])) {
    if ($_GET['action'] == "xem") {
        $c_the_loai->Hien_Thi_The_Loai_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "xoa") {
        $c_the_loai->Xoa_The_Loai_Theo_Id($_REQUEST['id']);
    } elseif ($_REQUEST['action'] == "capnhat") {
        $c_the_loai->Sua_The_Loai($_REQUEST['id']);
    } else {
        $c_the_loai->Hien_Thi_Tat_Ca_The_Loai();
    }

} else {
    if (!isset($_GET['action'])) {
        $c_the_loai->Hien_Thi_Tat_Ca_The_Loai();
    } elseif (isset($_GET['action']) && $_GET['action'] == "them") {
        $c_the_loai->V_Them_The_Loai();
    } elseif (isset($_GET['action']) && $_GET['action'] == "themmoi") {
        $c_the_loai->Them_The_Loai();
    }
}