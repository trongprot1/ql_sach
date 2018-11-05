<?php

/**
 * @author
 * @copyright 2018
 */
class Database
{
    var $cnn;

    function __construct()
    {
        $option=array(pdo::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
        $this->cnn=new PDO('mysql:host=localhost; dbname=ql_thuvien','root','',$option);
    }

    function __destruct()
    {
        $this->cnn=null;
    }
    //truy v?n d? li?u
    public function getData($query)
    {
        $stm=$this->cnn->prepare($query);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //th?c thi l?nh sql
    public function exe($query)
    {
        $stm=$this->cnn->prepare($query);
        $stm->execute();
        if($stm)
            return   true;
        else
            return false;
    }

    //x�a d? li?u v?i tham s? id va table
    public function delete($id, $tbl)
    {
        $sql="delete from $tbl where id=$id";
        $result=$this->cnn->query(($sql));
        if($result==false)
            return false;
        else
            return true;
    }
}



?>
