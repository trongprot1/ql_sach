<?php

include("database.php");
include ("controllers/Hinhanh.php");
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

    function Them($ten_nhanvien, $phai, $email, $dia_chi, $ngay_sinh, $dien_thoai, $ghi_chu)
    {
        $upload = new Hinhanh();
        $images = $upload->upload();
        $images = (isset($images)) ? ($images) : "../assets/img/faces/avatar.jpg";
        $sql = "Insert Into nhan_vien(id,ten_nhanvien,phai,email,dia_chi,ngay_sinh,so_dienthoai,ghi_chu,images) values ( NULL ,'$ten_nhanvien', '$phai','$email','$dia_chi','$ngay_sinh','$dien_thoai','$ghi_chu','$images')";
        return $this->exe($sql);
    }

    function Sua($ten_nhanvien, $phai, $email, $dia_chi, $ngay_sinh, $dien_thoai, $ghi_chu, $id)
    {
        $upload = new Hinhanh();
        $images = $upload->upload();
        $sql = "UPDATE nhan_vien ";
        if(isset($images)){
            $sql .= "SET ten_nhanvien='$ten_nhanvien' ,  phai= '$phai' ,  email= '$email',  dia_chi='$dia_chi' , ngay_sinh='$ngay_sinh' ,  so_dienthoai='$dien_thoai' ,  ghi_chu='$ghi_chu', images='$images'";
            $sql .= " WHERE id=$id";
            return $this->exe($sql);
        }else{
            $sql .= "SET ten_nhanvien='$ten_nhanvien' ,  phai= '$phai' ,  email= '$email',  dia_chi='$dia_chi' , ngay_sinh='$ngay_sinh' ,  so_dienthoai='$dien_thoai' ,  ghi_chu='$ghi_chu'";
            $sql .= " WHERE id=$id";
            return $this->exe($sql);
        }
    }

    function Xoa($id)
    {
        $tbl = "nhan_vien";
        return $this->delete($id, $tbl);
    }
}