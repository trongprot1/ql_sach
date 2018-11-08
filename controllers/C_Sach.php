<?php
include_once("Smarty_thu_vien.php");
include_once("model/M_sach.php");

class C_Sach
{
    function V_Them_Sach()
    {
        $smarty = new Smarty_thu_vien();
        $m_sach = new M_sach();

        $tacgia = $m_sach->Danh_Sach_Tac_Gia();
        $theloai = $m_sach->Danh_Sach_The_Loai();
        $nxb = $m_sach->Danh_Sach_NXB();

        $smarty->assign('tacgia', $tacgia);
        $smarty->assign('theloai', $theloai);
        $smarty->assign('nxb', $nxb);
        $smarty->assign('title', 'Sách');
        $smarty->assign('view', 'views/sach/V_them_sach.tpl');
        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Them_Sach()
    {
        $m_sach = new M_sach();

        $ten_sach = $_REQUEST['ten_sach'];
        $ma_tacgia = $_REQUEST['ma_tacgia'];
        $ma_theloai = $_REQUEST['ma_theloai'];
        $ma_nxb = $_REQUEST['ma_nxb'];
        $nam_xuatban = $_REQUEST['nam_xuatban'];
        $ghi_chu = $_REQUEST['ghi_chu'];

        $m_sach->Them($ten_sach, $ma_tacgia,$ma_theloai,$ma_nxb,$nam_xuatban, $ghi_chu);

        header('Location:/sach.php');
    }

    function Sua_Sach($id)
    {
        $m_sach = new M_sach();

        $ten_sach = $_REQUEST['ten_sach'];
        $ma_tacgia = $_REQUEST['ma_tacgia'];
        $ma_theloai = $_REQUEST['ma_theloai'];
        $ma_nxb = $_REQUEST['ma_nxb'];
        $nam_xuatban = $_REQUEST['nam_xuatban'];
        $ghi_chu = $_REQUEST['ghi_chu'];

        $m_sach->Sua($ten_sach, $ma_tacgia,$ma_theloai,$ma_nxb,$nam_xuatban, $ghi_chu, $id);

        header('Location:/sach.php');
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

        $tacgia = $m_sach->Danh_Sach_Tac_Gia();
        $theloai = $m_sach->Danh_Sach_The_Loai();
        $nxb = $m_sach->Danh_Sach_NXB();

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('tacgia', $tacgia);
        $smarty->assign('theloai', $theloai);
        $smarty->assign('nxb', $nxb);
        $smarty->assign('title', 'Sách');
        $smarty->assign('view', 'views/sach/V_sua_sach.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Xoa_Sach_Theo_Id($id)
    {
        $m_sach = new M_sach();
        $m_sach->Xoa($id);
        header('Location:sach.php');
    }
}