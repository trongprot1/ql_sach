<?php
include("controllers/Smarty_thu_vien.php");
// Khởi tạo đối tượng
$smarty = new Smarty_thu_vien();
// Gởi giá trị
$smarty->assign("title","Dashboard");
//Hiển thị layout
$smarty->display("layout.tpl");

?>