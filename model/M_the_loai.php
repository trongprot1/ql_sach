<?php
/**
 * Created by PhpStorm.
 * User: nvtro
 * Date: 11/6/2018
 * Time: 6:03 PM
 */
include("database.php");

class M_the_loai extends Database
{
    function Doc_Tat_Ca_The_Loai()
    {
        $sql = "select * from theloai";
        return $this->getData($sql);;
    }

    function Doc_The_Loai_Theo_Id($id)
    {
        $sql = "select * from theloai where id='$id'";
        return $this->getData($sql);
    }

    function Them($ten_theloai)
    {
        $sql = "Insert Into theloai(id,ten_theloai) values ( NULL ,'$ten_theloai')";
        return $this->exe($sql);
    }

    function Sua($ten_theloai,$id)
    {
        $sql = "Update theloai SET ten_theloai='$ten_theloai' WHERE id=$id";
        return $this->exe($sql);
    }

    function Xoa($id)
    {
        $tbl = "theloai";
        return $this->delete($id, $tbl);
    }
}