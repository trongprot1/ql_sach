<?php
/**
 * Created by PhpStorm.
 * User: nvtro
 * Date: 11/5/2018
 * Time: 1:04 AM
 */
include_once("Smarty_thu_vien.php");
include_once("model/M_nhan_vien.php");
class C_Nhan_Vien
{
    function V_Them_Nhan_Vien(){
        $smarty = new Smarty_thu_vien();
        $smarty->assign('title','Nhân Viên');
        $smarty->assign('view','views/nhan_vien/V_them_nhan_vien.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }

    function Them_Nhan_Vien($data){
        $smarty = new Smarty_thu_vien();
        $m_nhan_vien = new M_nhan_vien();

        $m_nhan_vien->Them($data);
        header('Location:nhanvien.php');
    }
    function Hien_Thi_Tat_Ca_Nhan_Vien()
    {
        $smarty = new Smarty_thu_vien();
        $m_nhan_vien = new M_nhan_vien();

        //lay du lieu tu model
        $arr_data = $m_nhan_vien->Doc_Tat_Ca_Nhan_Vien();

        //Gui gia tri len view
        $smarty->assign('arr',$arr_data);
        $smarty->assign('title','Nhân Viên');
        $smarty->assign('view','views/nhan_vien/V_nhan_vien.tpl');

        //hien thi layout

        $smarty->display('layout.tpl');
    }
    function Hien_Thi_Nhan_Vien_Theo_Id($id){
        $smarty = new Smarty_thu_vien();
        $m_nhan_vien = new M_nhan_vien();

        //lay du lieu tu model
        $arr_data = $m_nhan_vien->Doc_Nhan_Vien_Theo_Id($id);
        //Gui gia tri len view
        $smarty->assign('arr',$arr_data);
        $smarty->assign('title','Nhân Viên');
        $smarty->assign('view','views/nhan_vien/V_sua_nhan_vien.tpl');
        //hien thi layout

        $smarty->display('layout.tpl');
    }
    function Xoa_Nhan_Vien_Theo_Id($id){
        $smarty = new Smarty_thu_vien();
        $m_nhan_vien = new M_nhan_vien();

        //lay du lieu tu model
        $arr_data = $m_nhan_vien->Xoa($id);
        header('Location:nhanvien.php');
    }
}