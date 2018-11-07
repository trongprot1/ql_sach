<?php
include("database.php");

class M_sach extends Database
{
    function Doc_Tat_Ca_Sach()
    {
        $sql = "select * from sach";
        return $this->getData($sql);;
    }

    function Doc_Sach_Theo_Id($id)
    {
        $sql = "select * from sach where id='$id'";
        return $this->getData($sql);
    }

    function Danh_Sach_Tac_Gia()
    {
        $sql = "select * from tacgia";
        return $this->getData($sql);
    }

    function Danh_Sach_The_Loai()
    {
        $sql = "select * from theloai";
        return $this->getData($sql);
    }

    function Danh_Sach_NXB()
    {
        $sql = "select * from nhaxuatban";
        return $this->getData($sql);
    }

    function Them($ten_sach, $ma_tacgia, $ma_theloai, $ma_nxb, $nam_xuatban, $ghi_chu)
    {
        $sql = "Insert Into sach(id,ten_sach,ma_tacgia,ma_theloai,ma_nxb,nam_xuatban,images,ghi_chu) values ( NULL ,'$ten_sach', '$ma_tacgia','$ma_theloai','$ma_nxb','$nam_xuatban','$ghi_chu')";
        return $this->exe($sql);
    }

    function Sua($ten_sach, $ma_tacgia, $ma_theloai, $ma_nxb, $nam_xuatban, $ghi_chu, $id)
    {
        $sql = "Update sach SET ten_sach='$ten_sach', ma_tacgia = '$ma_tacgia',ma_theloai = '$ma_theloai',ma_nxb='$ma_nxb',nam_xuatban='$nam_xuatban',ghi_chu='$ghi_chu' WHERE id=$id";
        return $this->exe($sql);
    }

    function Xoa($id)
    {
        $tbl = "sach";
        return $this->delete($id, $tbl);
    }
}