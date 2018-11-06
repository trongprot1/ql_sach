<?php
include("database.php");

class M_the_thu_vien extends Database
{
    function Doc_Tat_Ca_The_Thu_Vien()
    {
        $sql = "select * from thethuvien";
        return $this->getData($sql);;
    }

    function Doc_The_Thu_Vien_Theo_Id($id)
    {
        $sql = "select * from thethuvien where id='$id'";
        return $this->getData($sql);
    }

    function Them($ngay_batdau, $ngay_ketthuc, $ghi_chu)
    {
        $sql = "Insert Into thethuvien(id,ngay_batdau,ngay_ketthuc,ghi_chu) values ( NULL ,'$ngay_batdau', '$ngay_ketthuc','$ghi_chu')";
        return $this->exe($sql);
    }

    function Sua($ngay_batdau, $ngay_ketthuc, $ghi_chu, $id)
    {
        $sql = "Update thethuvien SET ngay_batdau='$ngay_batdau', ngay_ketthuc = '$ngay_ketthuc',ghi_chu='$ghi_chu' WHERE id=$id";
        return $this->exe($sql);
    }

    function Xoa($id)
    {
        $tbl = "thethuvien";
        return $this->delete($id, $tbl);
    }
}