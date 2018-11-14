<?php
include_once("database.php");

class M_ct_muontra extends Database
{
    function Doc_Tat_Ca_CT_Muon_Tra()
    {
        $sql = "select * from ct_muontra";
        return $this->getData($sql);
    }

    function Doc_CT_Muon_Tra_Theo_Id($id)
    {
        $sql = "select * from ct_muontra where id='$id'";
        return $this->getData($sql);
    }

    function Them($ma_muontra, $ma_sach, $ghi_chu, $da_tra, $ngay_tra)
    {
        $sql = "Insert Into ct_muontra(id,ma_muontra,ma_sach,ghi_chu,da_tra,ngay_tra) values ( NULL ,'$ma_muontra', '$ma_sach','$ghi_chu','$da_tra','$ngay_tra')";
        return $this->exe($sql);
    }

    function Sua($ma_muontra, $ma_sach, $ghi_chu, $da_tra, $ngay_tra, $id)
    {
        $sql = "Update ct_muontra SET ma_muontra='$ma_muontra', ma_sach = '$ma_sach',ma_sach='$ma_sach',ghi_chu='$ghi_chu',da_tra='$da_tra',ngay_tra='$ngay_tra' WHERE id=$id";
        return $this->exe($sql);
    }

    function Xoa($id)
    {
        $tbl = "ct_muontra";
        return $this->delete($id, $tbl);
    }

    function Sach(){
        $sql = "select * from sach";
        return $this->getData($sql);
    }

    function Doc_Sach_Theo_Id($id)
    {
        $sql = "select * from sach where id='$id'";
        return $this->getData($sql);
    }

    function Doc_muon_Tra_Theo_Id($id){
        $sql = "select * from muon_tra where id='$id'";
        return $this->getData($sql);
    }
}