<?php
include_once("database.php");

class M_muon_tra extends Database
{
    function Doc_Tat_Ca_Muon_Tra()
    {
        $sql = "select * from muon_tra";
        return $this->getData($sql);
    }

    function Doc_Muon_Tra_Theo_Id($id)
    {
        $sql = "select * from muon_tra where id='$id'";
        return $this->getData($sql);
    }

    function Them($so_the, $ma_nhanvien, $ma_sach, $ngay_muon)
    {
        $sql = "Insert Into muon_tra(id,so_the,ma_nhanvien,ma_sach,ngay_muon) values ( NULL ,'$so_the', '$ma_nhanvien','$ma_sach','$ngay_muon')";
        return $this->exe($sql);
    }
    function Them_CT_Muon_Tra($muontra){
        foreach ($muontra as $mt){
            $ma_muontra = $mt['id'];
            $ma_sach = $mt['ma_sach'];

            $sql = "Insert Into ct_muontra(id,ma_muontra,ma_sach,ghi_chu,da_tra,ngay_tra) values ( NULL ,'$ma_muontra', '$ma_sach',NULL ,'0',NULL )";
            return $this->exe($sql);
        }
    }
    function Sua($so_the, $ma_nhanvien,$ma_sach, $ngay_muon, $id)
    {
        $sql = "Update muon_tra SET so_the='$so_the', ma_nhanvien = '$ma_nhanvien',ma_sach='$ma_sach',ngay_muon='$ngay_muon' WHERE id=$id";
        return $this->exe($sql);
    }

    function Xoa($id)
    {
        $tbl = "muon_tra";
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

    function Get_Lastet_Record(){
        $sql = "SELECT * FROM muon_tra ORDER BY id DESC LIMIT 1";
        return $this->getData($sql);
    }
}