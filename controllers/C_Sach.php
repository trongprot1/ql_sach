<?php
include_once("Smarty_thu_vien.php");
include_once("model/M_sach.php");

class C_Sach
{
    function V_Them_Sach()
    {
        $smarty = new Smarty_thu_vien();
        $smarty->assign('title', 'Sách');
        $smarty->assign('view', 'views/sach/V_them_sach.tpl');
        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Them_Sach()
    {
        $m_sach = new M_sach();

        $ten_tacgia = $_REQUEST['ten_tacgia'];
        $website = $_REQUEST['website'];
        $ghi_chu = $_REQUEST['ghi_chu'];

        $m_sach->Them($ten_tacgia, $website, $ghi_chu);

        header('Location:/tacgia.php');
    }

    function Sua_Sach($id)
    {
        $m_sach = new M_sach();

        $ten_tacgia = $_REQUEST['ten_tacgia'];
        $website = $_REQUEST['website'];
        $ghi_chu = $_REQUEST['ghi_chu'];

        $m_sach->Sua($ten_tacgia,$website, $ghi_chu, $id);

        header('Location:/tacgia.php');
    }

    function Hien_Thi_Tat_Ca_Sach()
    {
        $smarty = new Smarty_thu_vien();
        $m_sach = new M_sach();

        $arr_data = $m_sach->Doc_Tat_Ca_Sach();

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Sách');
        $smarty->assign('view', 'views/sach/V_sach.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }
    function Hien_Thi_Sach_Theo_Id($id)
    {
        $smarty = new Smarty_thu_vien();
        $m_sach = new M_sach();

        $arr_data = $m_sach->Doc_Sach_Theo_Id($id);

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Sách');
        $smarty->assign('view', 'views/sach/V_sua_sach.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Xoa_Sach_Theo_Id($id)
    {
        $m_sach = new M_sach();
        $m_sach->Xoa($id);
        header('Location:tacgia.php');
    }
}