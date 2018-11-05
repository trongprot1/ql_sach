<?php

include("database.php");

class M_nhan_vien extends Database
{
    function Doc_Tat_Ca_Nhan_Vien()
    {
        $sql = "select * from nhan_vien";
        return $this->getData($sql);;
    }

    function Doc_Nhan_Vien_Theo_Id($id)
    {
        $sql = "select * from nhan_vien where id='$id'";
        return $this->getData($sql);
    }

    function Them($ten_nhanvien, $phai, $email, $dia_chi, $ngay_sinh, $dien_thoai, $ghi_chu, $images)
    {
        $images = ($images != "") ? ($images) : "../assets/img/faces/avatar.jpg";
        $sql = "Insert Into nhan_vien(id,ten_nhanvien,phai,email,dia_chi,ngay_sinh,so_dienthoai,ghi_chu,images) values ( NULL ,'$ten_nhanvien', '$phai','$email','$dia_chi','$ngay_sinh','$dien_thoai','$ghi_chu','$images')";
        return $this->exe($sql);
    }

    function Sua($ten_nhanvien, $phai, $email, $dia_chi, $ngay_sinh, $dien_thoai, $ghi_chu, $images, $id)
    {
        $sql = "UPDATE nhan_vien ";
        $sql .= "SET ten_nhanvien=? ,  phai=? ,  email=? ,  dia_chi=? , ngay_sinh=? ,  so_dienthoai=? ,  ghi_chu=? , images=? ";
        $sql .= " WHERE id=?";
        $this->setQuery($sql);
        $param = array($ten_nhanvien, $phai, $email, $dia_chi, $ngay_sinh, $dien_thoai, $ghi_chu, $images, $id);
        return $this->execute($param);
    }

    function Xoa($id)
    {
        $tbl = "nhan_vien";
        return $this->delete($id, $tbl);
    }
}