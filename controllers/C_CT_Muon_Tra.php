<?php
include_once("Smarty_thu_vien.php");
include_once("model/M_ct_muontra.php");

class C_CT_Muon_Tra
{
    function V_Them_CT_Muon_Tra()
    {
        $smarty = new Smarty_thu_vien();
        $m_ct_muontra = new M_ct_muontra();
        $arr_muontra = $m_ct_muontra->Doc_muon_Tra_Theo_Id($_REQUEST['id']);
        foreach ($arr_muontra as $value) {
            $arrsach = $m_ct_muontra->Doc_Sach_Theo_Id($value['ma_sach']);
        }
        $smarty->assign('title', 'CT Mượn Trả');
        $smarty->assign('arr_sach', $arrsach);
        $smarty->assign('arr_muontra', $arr_muontra);
        $smarty->assign('view', 'views/ct_muontra/V_them_ct_muontra.tpl');
        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Them_CT_Muon_Tra()
    {
        $m_ct_muontra = new M_ct_muontra();

        $ma_muontra = $_REQUEST['ma_muontra'];
        $ma_sach = $_REQUEST['ma_sach'];
        $da_tra = $_REQUEST['da_tra'];
        $ghi_chu = $_REQUEST['ghi_chu'];
        $ngay_tra = $_REQUEST['ngay_tra'];

        $m_ct_muontra->Them($ma_muontra, $ma_sach, $ghi_chu, $da_tra, $ngay_tra);

        header('Location:/muontra.php');
    }

    function Sua_CT_Muon_Tra($id)
    {
        $m_ct_muontra = new M_ct_muontra();

        $ma_muontra = $_REQUEST['ma_muontra'];
        $ma_sach = $_REQUEST['ma_sach'];
        $da_tra = $_REQUEST['da_tra'];
        $ghi_chu = $_REQUEST['ghi_chu'];
        $ngay_tra = $_REQUEST['ngay_tra'];

        $m_ct_muontra->Sua($ma_muontra, $ma_sach, $ghi_chu, $da_tra, $ngay_tra, $id);

        header('Location:/index.php');
    }

    function Hien_Thi_Tat_Ca_CT_Muon_Tra()
    {
        $smarty = new Smarty_thu_vien();
        $m_ct_muontra = new M_ct_muontra();

        $arr_data = $m_ct_muontra->Doc_Tat_Ca_CT_Muon_Tra();


        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Mượn Trả');
        $smarty->assign('view', 'views/ct_muontra/V_ct_muontra.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Hien_Thi_CT_Muon_Tra_Theo_Id($id)
    {
        $smarty = new Smarty_thu_vien();
        $m_ct_muontra = new M_ct_muontra();

        $arr_data = $m_ct_muontra->Doc_CT_Muon_Tra_Theo_Id($id);
        foreach ($arr_data as $value){
            $arrdata = $m_ct_muontra->Doc_Sach_Theo_Id($value['ma_sach']);
        }

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('arr_sach', $arrdata);
        $smarty->assign('title', 'CT Mượn Trả');
        $smarty->assign('view', 'views/ct_muontra/V_sua_ct_muontra.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Xoa_CT_Muon_Tra_Theo_Id($id)
    {
        $m_ct_muontra = new M_ct_muontra();
        $m_ct_muontra->Xoa($id);
        header('Location:muontra.php');
    }
}