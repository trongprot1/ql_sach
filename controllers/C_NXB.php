<?php
include_once("Smarty_thu_vien.php");
include_once("model/M_nxb.php");

class C_NXB
{
    function V_Them_NXB()
    {
        $smarty = new Smarty_thu_vien();
        $smarty->assign('title', 'Nhà Xuất Bản');
        $smarty->assign('view', 'views/nxb/V_them_nxb.tpl');
        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Them_NXB()
    {
        $m_nxb = new M_nxb();

        $ten_nxb = $_REQUEST['ten_nxb'];
        $dia_chi = $_REQUEST['dia_chi'];
        $email = $_REQUEST['email'];
        $thong_tin = $_REQUEST['thong_tin'];

        $m_nxb->Them($ten_nxb,$dia_chi, $email,$thong_tin);

        header('Location:/nxb.php');
    }

    function Sua_NXB($id)
    {
        $m_nxb = new M_nxb();

        $ten_nxb = $_REQUEST['ten_nxb'];
        $dia_chi = $_REQUEST['dia_chi'];
        $email = $_REQUEST['email'];
        $thong_tin = $_REQUEST['thong_tin'];

        $m_nxb->Sua($ten_nxb,$dia_chi, $email,$thong_tin, $id);

        header('Location:/nxb.php');
    }

    function Hien_Thi_Tat_Ca_NXB()
    {
        $smarty = new Smarty_thu_vien();
        $m_nxb = new M_nxb();

        $arr_data = $m_nxb->Doc_Tat_Ca_NXB();

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Nhà Xuất Bản');
        $smarty->assign('view', 'views/nxb/V_nxb.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }
    function Hien_Thi_NXB_Theo_Id($id)
    {
        $smarty = new Smarty_thu_vien();
        $m_nxb = new M_nxb();

        $arr_data = $m_nxb->Doc_NXB_Theo_Id($id);

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Nhà Xuất Bản');
        $smarty->assign('view', 'views/nxb/V_sua_nxb.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Xoa_NXB_Theo_Id($id)
    {
        $m_nxb = new M_nxb();
        $m_nxb->Xoa($id);
        header('Location:nxb.php');
    }
}