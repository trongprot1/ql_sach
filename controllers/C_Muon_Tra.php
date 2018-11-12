<?php
include_once("Smarty_thu_vien.php");
include_once("model/M_muon_tra.php");

class C_Muon_Tra
{
    function V_Them_Muon_Tra()
    {
        $smarty = new Smarty_thu_vien();
        $m_muon_tra = new M_muon_tra();
        $arrdata = $m_muon_tra->Sach();

        $smarty->assign('title', 'Mượn Trả');
        $smarty->assign('arr', $arrdata);
        $smarty->assign('view', 'views/muon_tra/V_them_muon_tra.tpl');
        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Them_Muon_Tra()
    {
        $m_muon_tra = new M_muon_tra();

        $so_the = $_REQUEST['so_the'];
        $ma_nhanvien = $_REQUEST['ma_nhanvien'];
        $ma_sach = $_REQUEST['ma_sach'];
        $ngay_muon = $_REQUEST['ngay_muon'];

        foreach($ma_sach as $item){
            $m_muon_tra->Them($so_the, $ma_nhanvien, $item, $ngay_muon);
        }

        header('Location:/muontra.php');
    }

    function Sua_Muon_Tra($id)
    {
        $m_muon_tra = new M_muon_tra();

        $so_the = $_REQUEST['so_the'];
        $ma_nhanvien = $_REQUEST['ma_nhanvien'];
        $ma_sach = $_REQUEST['ma_sach'];
        $ngay_muon = $_REQUEST['ngay_muon'];

        $m_muon_tra->Sua($so_the, $ma_nhanvien, $ma_sach, $ngay_muon, $id);

        header('Location:/muontra.php');
    }

    function Hien_Thi_Tat_Ca_Muon_Tra()
    {
        $smarty = new Smarty_thu_vien();
        $m_muon_tra = new M_muon_tra();

        $arr_data = $m_muon_tra->Doc_Tat_Ca_Muon_Tra();


        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Mượn Trả');
        $smarty->assign('view', 'views/muon_tra/V_muon_tra.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Hien_Thi_Muon_Tra_Theo_Id($id)
    {
        $smarty = new Smarty_thu_vien();
        $m_muon_tra = new M_muon_tra();

        $arr_data = $m_muon_tra->Doc_Muon_Tra_Theo_Id($id);

        $arrdata = $m_muon_tra->Sach();
        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('sach', $arrdata);
        $smarty->assign('title', 'Mượn Trả');
        $smarty->assign('view', 'views/muon_tra/V_sua_muon_tra.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Xoa_Muon_Tra_Theo_Id($id)
    {
        $m_muon_tra = new M_muon_tra();
        $m_muon_tra->Xoa($id);
        header('Location:muontra.php');
    }
}