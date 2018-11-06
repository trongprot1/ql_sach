<?php

include("database.php");

class M_tac_gia extends Database
{
    function Doc_Tat_Ca_Tac_Gia()
    {
        $sql = "select * from tacgia";
        return $this->getData($sql);;
    }

    function Doc_Tac_Gia_Theo_Id($id)
    {
        $sql = "select * from tacgia where id='$id'";
        return $this->getData($sql);
    }

    function Them($ten_tacgia, $website, $ghi_chu)
    {
        $sql = "Insert Into tacgia(id,ten_tacgia,website,ghichu) values ( NULL ,'$ten_tacgia', '$website','$ghi_chu')";
        return $this->exe($sql);
    }

    function Sua($ten_tacgia, $website, $ghi_chu, $id)
    {
        $sql = "Update tacgia SET ten_tacgia='$ten_tacgia', website = '$website',ghichu='$ghi_chu' WHERE id=$id";
        return $this->exe($sql);
    }

    function Xoa($id)
    {
        $tbl = "tacgia";
        return $this->delete($id, $tbl);
    }
}