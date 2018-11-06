<?php
include("database.php");

class M_nxb extends Database
{
    function Doc_Tat_Ca_NXB()
    {
        $sql = "select * from nhaxuatban";
        return $this->getData($sql);;
    }

    function Doc_NXB_Theo_Id($id)
    {
        $sql = "select * from nhaxuatban where id='$id'";
        return $this->getData($sql);
    }

    function Them($ten_nxb, $dia_chi,$email, $thong_tin)
    {
        $sql = "Insert Into nhaxuatban(id,ten_nxb,dia_chi,email,thong_tin) values ( NULL ,'$ten_nxb', '$dia_chi','$$email','$thong_tin')";
        return $this->exe($sql);
    }

    function Sua($ten_nxb, $dia_chi,$email, $thong_tin, $id)
    {
        $sql = "Update nhaxuatban SET ten_nxb='$ten_nxb', dia_chi = '$dia_chi',email='$email',thong_tin='$thong_tin' WHERE id=$id";
        return $this->exe($sql);
    }

    function Xoa($id)
    {
        $tbl = "nhaxuatban";
        return $this->delete($id, $tbl);
    }
}