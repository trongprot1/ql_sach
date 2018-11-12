<?php
include("database.php");
include("controllers/Hinhanh.php");

class M_doc_gia extends Database
{
    function Doc_Tat_Ca_Doc_Gia()
    {
        $sql = "select * from docgia";
        return $this->getData($sql);;
    }

    function Doc_Doc_Gia_Theo_Id($id)
    {
        $sql = "select * from docgia where id='$id'";
        return $this->getData($sql);
    }

    function Them($ten_docgia,$email, $phai, $ngay_sinh, $diachi, $so_dienthoai, $so_the, $ghi_chu)
    {
        $upload = new Hinhanh();
        $images = $upload->upload();
        $sql = "Insert Into docgia(id,ten_docgia,email,phai,ngay_sinh,images,diachi,so_dienthoai,so_the,ghi_chu) values ( NULL ,'$ten_docgia','$email', '$phai','$ngay_sinh','$images','$diachi','$so_dienthoai','$so_the','$ghi_chu')";
        return $this->exe($sql);
    }

    function Sua($ten_docgia,$email, $phai, $ngay_sinh, $diachi, $so_dienthoai, $so_the, $ghi_chu, $id)
    {
        $upload = new Hinhanh();
        $images = $upload->upload();
        if (isset($images)) {
            $sql = "Update docgia SET ten_docgia='$ten_docgia',email='$email', phai = '$phai',ngay_sinh='$ngay_sinh',images='$images',diachi='$diachi',so_dienthoai='$so_dienthoai',so_the='$so_the',ghi_chu='$ghi_chu' WHERE id=$id";
        } else {
            $sql = "Update docgia SET ten_docgia='$ten_docgia',email='$email', phai = '$phai',ngay_sinh='$ngay_sinh',diachi='$diachi',so_dienthoai='$so_dienthoai',so_the='$so_the',ghi_chu='$ghi_chu' WHERE id=$id";
        }
        return $this->exe($sql);
    }

    function Xoa($id)
    {
        $tbl = "docgia";
        return $this->delete($id, $tbl);
    }
}