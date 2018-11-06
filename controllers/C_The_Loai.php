<?php
/**
 * Created by PhpStorm.
 * User: nvtro
 * Date: 11/6/2018
 * Time: 6:02 PM
 */
include_once("Smarty_thu_vien.php");
include_once("model/M_the_loai.php");
class C_The_Loai
{
    function V_Them_The_Loai()
    {
        $smarty = new Smarty_thu_vien();
        $smarty->assign('title', 'Thể Loại');
        $smarty->assign('view', 'views/the_loai/V_them_the_loai.tpl');
        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Them_The_Loai()
    {
        $m_the_loai = new M_the_loai();

        $ten_theloai = $_REQUEST['ten_theloai'];

        $m_the_loai->Them($ten_theloai);

        header('Location:/theloai.php');
    }

    function Sua_The_Loai($id)
    {
        $m_the_loai = new M_the_loai();

        $ten_theloai = $_REQUEST['ten_theloai'];

        $m_the_loai->Sua($ten_theloai, $id);

        header('Location:/theloai.php');
    }

    function Hien_Thi_Tat_Ca_The_Loai()
    {
        $smarty = new Smarty_thu_vien();
        $m_the_loai = new M_the_loai();

        $arr_data = $m_the_loai->Doc_Tat_Ca_The_Loai();

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Thể Loại');
        $smarty->assign('view', 'views/the_loai/V_the_loai.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }
    function Hien_Thi_The_Loai_Theo_Id($id)
    {
        $smarty = new Smarty_thu_vien();
        $m_the_loai = new M_the_loai();

        $arr_data = $m_the_loai->Doc_The_Loai_Theo_Id($id);

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Thể Loại');
        $smarty->assign('view', 'views/the_loai/V_sua_the_loai.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Xoa_The_Loai_Theo_Id($id)
    {
        $m_the_loai = new M_the_loai();
        $m_the_loai->Xoa($id);
        header('Location:theloai.php');
    }
}