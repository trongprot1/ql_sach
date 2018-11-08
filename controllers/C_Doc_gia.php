<?php
include_once("Smarty_thu_vien.php");
include_once("model/M_doc_gia.php");

class C_Doc_gia
{
    function V_Them_Doc_gia()
    {
        $smarty = new Smarty_thu_vien();
        $smarty->assign('title', 'Đọc Giả');
        $smarty->assign('view', 'views/doc_gia/V_them_doc_gia.tpl');
        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Them_Doc_gia()
    {
        $m_doc_gia = new M_doc_gia();

        $ten_docgia = $_REQUEST['ten_docgia'];
        $phai = $_REQUEST['phai'];
        $ngay_sinh = $_REQUEST['ngay_sinh'];
        $diachi = $_REQUEST['diachi'];
        $so_dienthoai = $_REQUEST['so_dienthoai'];
        $so_the = $_REQUEST['so_the'];
        $ghi_chu = $_REQUEST['ghi_chu'];

        $m_doc_gia->Them($ten_docgia, $phai, $ngay_sinh, $diachi, $so_dienthoai, $so_the, $ghi_chu);

        header('Location:/docgia.php');
    }

    function Sua_Doc_gia($id)
    {
        $m_doc_gia = new M_doc_gia();

        $ten_docgia = $_REQUEST['ten_docgia'];
        $phai = $_REQUEST['phai'];
        $ngay_sinh = $_REQUEST['ngay_sinh'];
        $diachi = $_REQUEST['diachi'];
        $so_dienthoai = $_REQUEST['so_dienthoai'];
        $so_the = $_REQUEST['so_the'];
        $ghi_chu = $_REQUEST['ghi_chu'];

        $m_doc_gia->Sua($ten_docgia, $phai, $ngay_sinh, $diachi, $so_dienthoai, $so_the, $ghi_chu, $id);

        header('Location:/docgia.php');
    }

    function Hien_Thi_Tat_Ca_Doc_gia()
    {
        $smarty = new Smarty_thu_vien();
        $m_doc_gia = new M_doc_gia();

        $arr_data = $m_doc_gia->Doc_Tat_Ca_Doc_gia();

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Đọc Giả');
        $smarty->assign('view', 'views/doc_gia/V_doc_gia.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Hien_Thi_Doc_gia_Theo_Id($id)
    {
        $smarty = new Smarty_thu_vien();
        $m_doc_gia = new M_doc_gia();

        $arr_data = $m_doc_gia->Doc_Doc_gia_Theo_Id($id);

        //Gui gia tri len view
        $smarty->assign('arr', $arr_data);
        $smarty->assign('title', 'Đọc Giả');
        $smarty->assign('view', 'views/doc_gia/V_sua_doc_gia.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Xoa_Doc_gia_Theo_Id($id)
    {
        $m_doc_gia = new M_doc_gia();
        $m_doc_gia->Xoa($id);
        header('Location:docgia.php');
    }
}