<?php
include_once("Smarty_thu_vien.php");
include_once("model/M_the_thu_vien.php");

class C_The_Thu_Vien
{
    function V_Them_The_Thu_Vien()
    {
        $smarty = new Smarty_thu_vien();
        $smarty->assign('title', 'Thẻ Thư Viện');
        $smarty->assign('view', 'views/the_thu_vien/V_them_the_thu_vien.tpl');
        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Them_The_Thu_Vien()
    {
        $m_the_thu_vien = new M_the_thu_vien();

        $ngay_batdau = $_REQUEST['ngay_batdau'];
        $ngay_ketthuc = $_REQUEST['ngay_ketthuc'];
        $ghi_chu = $_REQUEST['ghi_chu'];

        $m_the_thu_vien->Them($ngay_batdau, $ngay_ketthuc, $ghi_chu);

        header('Location:/thethuvien.php');
    }

    function Sua_The_Thu_Vien($id)
    {
        $m_the_thu_vien = new M_the_thu_vien();

        $ngay_batdau = $_REQUEST['ngay_batdau'];
        $ngay_ketthuc = $_REQUEST['ngay_ketthuc'];
        $ghi_chu = $_REQUEST['ghi_chu'];

        $m_the_thu_vien->Sua($ngay_batdau,$ngay_ketthuc, $ghi_chu, $id);

        header('Location:/thethuvien.php');
    }

    function Hien_Thi_Tat_Ca_The_Thu_Vien()
    {
        $smarty = new Smarty_thu_vien();
        $m_the_thu_vien = new M_the_thu_vien();

        $arr_data = $m_the_thu_vien->Doc_Tat_Ca_The_Thu_Vien();

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Thẻ Thư Viện');
        $smarty->assign('view', 'views/the_thu_vien/V_the_thu_vien.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }
    function Hien_Thi_The_Thu_Vien_Theo_Id($id)
    {
        $smarty = new Smarty_thu_vien();
        $m_the_thu_vien = new M_the_thu_vien();

        $arr_data = $m_the_thu_vien->Doc_The_Thu_Vien_Theo_Id($id);

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Thẻ Thư Viện');
        $smarty->assign('view', 'views/the_thu_vien/V_sua_the_thu_vien.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Xoa_The_Thu_Vien_Theo_Id($id)
    {
        $m_the_thu_vien = new M_the_thu_vien();
        $m_the_thu_vien->Xoa($id);
        header('Location:thethuvien.php');
    }
}