<?php
include_once("Smarty_thu_vien.php");
include_once("model/M_tac_gia.php");

class C_Tac_Gia
{
    function V_Them_Tac_Gia()
    {
        $smarty = new Smarty_thu_vien();
        $smarty->assign('title', 'Tác Giả');
        $smarty->assign('view', 'views/tac_gia/V_them_tac_gia.tpl');
        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Them_Tac_Gia()
    {
        $m_tac_gia = new M_tac_gia();

        $ten_tacgia = $_REQUEST['ten_tacgia'];
        $website = $_REQUEST['website'];
        $ghi_chu = $_REQUEST['ghi_chu'];

        $m_tac_gia->Them($ten_tacgia, $website, $ghi_chu);

        header('Location:/tacgia.php');
    }

    function Sua_Tac_Gia($id)
    {
        $m_tac_gia = new M_tac_gia();

        $ten_tacgia = $_REQUEST['ten_tacgia'];
        $website = $_REQUEST['website'];
        $ghi_chu = $_REQUEST['ghi_chu'];

        $m_tac_gia->Sua($ten_tacgia,$website, $ghi_chu, $id);

        header('Location:/tacgia.php');
    }

    function Hien_Thi_Tat_Ca_Tac_Gia()
    {
        $smarty = new Smarty_thu_vien();
        $m_tac_gia = new M_tac_gia();

        $arr_data = $m_tac_gia->Doc_Tat_Ca_Tac_Gia();

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Tác Giả');
        $smarty->assign('view', 'views/tac_gia/V_tac_gia.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Hien_Thi_Tac_Gia_Theo_Id($id)
    {
        $smarty = new Smarty_thu_vien();
        $m_tac_gia = new M_tac_gia();

        $arr_data = $m_tac_gia->Doc_Tac_Gia_Theo_Id($id);

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Tác Giả');
        $smarty->assign('view', 'views/tac_gia/V_sua_tac_gia.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Xoa_Tac_Gia_Theo_Id($id)
    {
        $m_tac_gia = new M_tac_gia();
        $m_tac_gia->Xoa($id);
        header('Location:tacgia.php');
    }
}