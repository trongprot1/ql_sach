<?php
include("Smarty/libs/Smarty.class.php");
// Khởi tạo đối tượng
class Smarty_thu_vien extends Smarty
{
    function Smarty_thu_vien()
    {
        parent::__construct();
        $this->template_dir="Smarty/templates/";
        $this->compile_dir="Smarty/templates_c/";
        $this->config_dir="Smarty/configs/";
        $this->cache_dir="Smarty/cache/";
    }
}
// Cấu hình
?>