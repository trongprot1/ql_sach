<?php

include("database.php");

class M_nhan_vien extends database
{
    function Doc_Tat_Ca_Nhan_Vien()
    {
        $sql = "select * from nhan_vien";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    function Doc_Nhan_Vien_Theo_Id($id)
    {
        $sql = "select * from nhan_vien where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    function Them($data)
    {
        $ten_nhanvien = $data['ten_nhan_vien'];
        $phai = $data['phai'];
        $email = $data['email'];
        $dia_chi = $data['dia_chi'];
        $ngay_sinh = $data['ngay_sinh'];
        $dien_thoai = $data['dien_thoai'];
        $ghi_chu = $data['ghi_chu'];

        $sql = "INSERT INTO nhan_vien ";
        $sql .= "VALUES (?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        $param = array('NULL', $ten_nhanvien, $phai, $email, $dia_chi, $ngay_sinh, $dien_thoai, $ghi_chu);
        return $this->execute($param);
    }

    function Sua($ten_nhanvien, $phai, $email, $dia_chi, $ngay_sinh, $dien_thoai, $ghi_chu, $id)
    {
        $sql = "UPDATE nhan_vien ";
        $sql .= "SET ten_nhanvien=? ,  phai=? ,  email=? ,  dia_chi=? , ngay_sinh=? ,  so_dienthoai=? ,  ghi_chu=? ";
        $sql .= " WHERE id=?";
        $this->setQuery($sql);
        $param = array($ten_nhanvien, $phai, $email, $dia_chi, $ngay_sinh, $dien_thoai, $ghi_chu, $id);
        return $this->execute($param);
    }

    function Xoa($id)
    {
        $sql = "delete from nhan_vien where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}